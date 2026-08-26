<?php
// PHP Memory နဲ့ Time limit ကို မြှင့်ထားခြင်း
@ini_set('memory_limit', '512M');
@set_time_limit(0);

if (!isset($_GET['url'])) {
    http_response_code(400);
    exit('No URL provided');
}

$url = $_GET['url'];

// လုံခြုံရေးအတွက် mmhd-cdn.com သို့မဟုတ် လိုအပ်သော host များကို ခွင့်ပြုရန်
$parsed_url = parse_url($url);
if (isset($parsed_url['host']) && strpos($parsed_url['host'], 'mmhd-cdn.com') === false) {
    http_response_code(403);
    exit('Access denied');
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); // RAM ထဲ တိုက်ရိုက်မသိမ်းဘဲ Stream လုပ်ရန် false ပေးပါ
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_REFERER, 'https://mmhdhub.com/');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36');

// Browser ကနေ Video Seek (ရှေ့တိုး/နောက်ဆုတ်) လုပ်တဲ့အခါ Range Headers များကို ပါ လွှဲပြောင်းပေးရန်
$headers = [];
if (isset($_SERVER['HTTP_RANGE'])) {
    $headers[] = 'Range: ' . $_SERVER['HTTP_RANGE'];
    curl_setopt($ch, CURLOPT_RANGE, $_SERVER['HTTP_RANGE']);
}
if (!empty($headers)) {
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
}

// ထွက်လာမယ့် Content-Type နဲ့ Status Code များကို ဖမ်းယူရန် Callback function သုံးခြင်း
curl_setopt($ch, CURLOPT_HEADERFUNCTION, function($curl, $header) {
    $len = strlen($header);
    $parts = explode(':', $header, 2);
    if (count($parts) == 2) {
        $key = trim($parts[0]);
        $value = trim($parts[1]);
        
        // အရေးကြီးသော Header များကို Browser ထံသို့ တိုက်ရိုက်ပြန်ပို့ရန်
        $allowed_headers = ['Content-Type', 'Content-Length', 'Content-Range', 'Accept-Ranges', 'Content-Disposition'];
        if (in_array(ucwords(strtolower($key), '-'), $allowed_headers)) {
            header("$key: $value");
        }
    }
    return $len;
});

// cURL execute လုပ်ချိန်တွင် Browser သို့ တိုက်ရိုက် Output ထုတ်ပေးမည်
$success = curl_exec($ch);

if (!$success && !curl_errno($ch)) {
    http_response_code(404);
    echo "File not found.";
}

curl_close($ch);
exit;
?>
