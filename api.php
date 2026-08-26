<?php
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');

$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$baseUrl = "https://mmhdhub.com/";
$targetUrl = $page > 1 ? "{$baseUrl}page/{$page}/" : $baseUrl;

function fetchUrl($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8',
        'Accept-Language: en-US,en;q=0.5'
    ]);
    $html = curl_exec($ch);
    curl_close($ch);
    return $html;
}

// ၁။ List Page ဆွဲယူခြင်း
$listHtml = fetchUrl($targetUrl);

if (!$listHtml) {
    echo json_encode(['status' => 'error', 'message' => 'Failed to reach site']);
    exit;
}

// ၂။ List Page ထဲရှိ Post Links များကို Regex ဖြင့် တိကျစွာ ရှာခြင်း
$postLinks = [];
if (preg_match_all('/href=["\'](https?:\/\/mmhdhub\.com\/\d+\/?)["\']/i', $listHtml, $matches)) {
    $postLinks = array_unique($matches[1]);
}

if (empty($postLinks)) {
    echo json_encode([
        'status' => 'failed',
        'page' => $page,
        'message' => 'No post links found on list page.',
        'total' => 0,
        'videos' => []
    ]);
    exit;
}

// ၃။ Detail Pages များကို cURL Multi အသုံးပြု၍ Parallel Fetch ပြုလုပ်ခြင်း
$mh = curl_multi_init();
$curlHandles = [];

foreach ($postLinks as $index => $url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 12);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) Chrome/122.0.0.0 Safari/537.36');
    
    curl_multi_add_handle($mh, $ch);
    $curlHandles[$index] = ['ch' => $ch, 'url' => $url];
}

$running = null;
do {
    curl_multi_exec($mh, $running);
    curl_multi_select($mh);
} while ($running > 0);

// ၄။ Detail Pages များမှ Data များ Extract လုပ်ခြင်း
$finalResults = [];

foreach ($curlHandles as $item) {
    $ch = $item['ch'];
    $postUrl = $item['url'];
    $detailHtml = curl_multi_getcontent($ch);
    curl_multi_remove_handle($mh, $ch);
    curl_close($ch);

    if (!$detailHtml) continue;

    $title = "";
    $thumb = "";
    $videoUrl = "";

    // Schema JSON-LD မှ Thumbnail / VideoObject ကို ဆွဲယူခြင်း
    if (preg_match_all('/<script type="application\/ld\+json"[^>]*>(.*?)<\/script>/s', $detailHtml, $matches)) {
        foreach ($matches[1] as $jsonText) {
            $jsonData = json_decode(trim($jsonText), true);
            if (isset($jsonData['@graph'])) {
                foreach ($jsonData['@graph'] as $graph) {
                    if (isset($graph['@type']) && $graph['@type'] === 'VideoObject') {
                        $title = $graph['name'] ?? '';
                        $thumb = $graph['thumbnailUrl'] ?? '';
                        $videoUrl = $graph['contentUrl'] ?? '';
                        break 2;
                    }
                    if (isset($graph['@type']) && $graph['@type'] === 'ImageObject' && empty($thumb)) {
                        $thumb = $graph['url'] ?? ($graph['contentUrl'] ?? '');
                    }
                }
            }
        }
    }

    // Fallback 1: Open Graph Image Tag (og:image)
    if (empty($thumb) && preg_match('/<meta\s+property=["\']og:image["\']\s+content=["\']([^"\']+)["\']/i', $detailHtml, $imgMatches)) {
        $thumb = $imgMatches[1];
    }

    // Fallback 2: Post content ထဲရှိ <img> tag
    if (empty($thumb) && preg_match('/<img[^>]+src=["\']([^"\']+\.(?:jpg|jpeg|png|webp))["\']/i', $detailHtml, $imgMatches)) {
        $thumb = $imgMatches[1];
    }

    // Fallback Video URL Regex (.mp4)
    if (empty($videoUrl) && preg_match('/https?:\/\/[^"\']+\.mp4[^"\']*/i', $detailHtml, $mp4Matches)) {
        $videoUrl = $mp4Matches[0];
    }

    // Title Fallback (<title> tag)
    if (empty($title) && preg_match('/<title>(.*?)<\/title>/i', $detailHtml, $titleMatches)) {
        $title = str_replace([' - MMHDHUB', ' | MMHDHUB'], '', trim($titleMatches[1]));
        $title = html_entity_decode($title);
    }

    // Output Data Structure (Video လင့်ခ်ရှိမှသာ ထည့်မည်)
    if (!empty($videoUrl)) {
        $finalResults[] = [
            'id' => md5($postUrl),
            'title' => $title,
            'photo_link' => $thumb, 
            'thumbnail' => $thumb,  
            'video_mp4' => $videoUrl,
            'post_url' => $postUrl
        ];
    }
}

curl_multi_close($mh);

// ၅။ Output JSON
echo json_encode([
    'status' => 'success',
    'page' => $page,
    'total' => count($finalResults),
    'videos' => array_values($finalResults)
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
