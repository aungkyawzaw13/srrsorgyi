<!DOCTYPE html>
<html lang="my">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRRSORGYI - မြန်မာ Video များ</title>

    <style>
        :root {
            --bg-color: #0a0a0f;
            --card-bg: #16161f;
            --accent-color: #ff2a5f;
            --accent-hover: #e02050;
            --text-main: #f1f1f5;
            --text-muted: #8e8e9e;
            --border-color: #2a2a38;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Myanmar Text", sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            padding-bottom: 80px;
            overflow-x: hidden;
        }

        /* ===== Age Verification ===== */
        .age-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(10, 10, 15, 0.95);
            backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .age-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            padding: 30px;
            border-radius: 16px;
            text-align: center;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .age-card h2 {
            margin-bottom: 12px;
            color: var(--accent-color);
        }

        .age-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 24px;
            line-height: 1.4;
        }

        .age-btns {
            display: flex;
            gap: 12px;
        }

        .btn {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-primary {
            background: var(--accent-color);
            color: #fff;
        }
        .btn-primary:hover {
            background: var(--accent-hover);
        }
        .btn-secondary {
            background: var(--border-color);
            color: var(--text-main);
        }

        /* ===== Header ===== */
        header {
            position: sticky;
            top: 0;
            background: rgba(10, 10, 15, 0.92);
            backdrop-filter: blur(12px);
            z-index: 100;
            border-bottom: 1px solid var(--border-color);
            padding: 12px 16px;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .logo {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--accent-color);
            text-decoration: none;
            letter-spacing: -0.5px;
            cursor: pointer;
            white-space: nowrap;
        }

        .search-box {
            flex: 1;
            max-width: 380px;
        }

        .search-box input {
            width: 100%;
            padding: 10px 16px;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            color: var(--text-main);
            outline: none;
            font-size: 0.9rem;
        }

        .search-box input:focus {
            border-color: var(--accent-color);
        }

        /* ===== Categories (Pills) ===== */
        .categories-wrapper {
            max-width: 1200px;
            margin: 14px auto 0;
            padding: 0 12px;
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: none;
        }

        .categories-wrapper::-webkit-scrollbar {
            display: none;
        }

        .pill-lux {
            display: inline-block;
            padding: 6px 16px;
            margin-right: 8px;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 20px;
            color: var(--text-muted);
            font-size: 0.85rem;
            cursor: pointer;
            transition: 0.2s;
            user-select: none;
        }

        .pill-lux.active,
        .pill-lux:hover {
            background: var(--accent-color);
            color: #fff;
            border-color: var(--accent-color);
        }

        /* ===== Video Grid ===== */
        .view-panel {
            display: none;
            max-width: 1200px;
            margin: 16px auto 0;
            padding: 0 12px;
        }

        .view-panel.active {
            display: block;
        }

        .section-title {
            font-size: 1.1rem;
            margin-bottom: 12px;
            font-weight: 700;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        @media (min-width: 768px) {
            .video-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 16px;
            }
        }

        /* ===== Video Card ===== */
        .lux-card {
            background: var(--card-bg);
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease;
            cursor: pointer;
        }

        .lux-card:hover {
            transform: translateY(-4px);
        }

        .lux-media {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            background: #000;
            overflow: hidden;
        }

        .lux-media img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .duration-lux-badge {
            position: absolute;
            bottom: 6px;
            right: 6px;
            background: rgba(0,0,0,0.85);
            color: #fff;
            font-size: 0.65rem;
            padding: 2px 6px;
            border-radius: 4px;
            font-weight: 600;
            z-index: 2;
        }

        .fav-lux-trigger {
            position: absolute;
            top: 8px;
            right: 8px;
            background: rgba(0,0,0,0.6);
            border: none;
            color: #fff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            z-index: 5;
            transition: 0.2s;
            backdrop-filter: blur(4px);
        }

        .fav-lux-trigger.active {
            color: var(--accent-color);
        }

        .share-lux-trigger {
            position: absolute;
            top: 8px;
            left: 8px;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255,255,255,0.15);
            color: #fff;
            font-size: 0.6rem;
            padding: 3px 8px;
            border-radius: 6px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 4px;
            z-index: 5;
            transition: 0.2s;
        }

        .share-lux-trigger:hover {
            background: var(--accent-color);
        }

        .lux-details {
            padding: 8px;
            display: flex;
            flex-direction: column;
            gap: 4px;
            flex: 1;
        }

        .lux-title {
            font-size: 0.8rem;
            line-height: 1.25;
            font-weight: 600;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            color: var(--text-main);
        }

        .lux-metrics {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.7rem;
            color: var(--text-muted);
            margin-top: auto;
        }

        .play-indicator {
            color: var(--accent-color);
            margin-right: 2px;
        }

        .lux-state-msg {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 20px;
            color: var(--text-muted);
        }

        .lux-spinner {
            display: inline-block;
            width: 24px;
            height: 24px;
            border: 3px solid var(--border-color);
            border-top-color: var(--accent-color);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
            margin-bottom: 10px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* ===== Player Panel ===== */
        #panelPlayer .player-wrapper {
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #000;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            margin-bottom: 12px;
        }

        #panelPlayer .player-wrapper iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .player-meta {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 12px;
            margin-bottom: 16px;
            flex-wrap: wrap;
        }

        .player-meta h1 {
            font-size: 1rem;
            flex: 1;
            min-width: 200px;
        }

        .btn-share {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            color: var(--text-main);
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            white-space: nowrap;
        }

        .btn-share:hover {
            background: var(--accent-color);
            border-color: var(--accent-color);
        }

        .back-btn {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            color: var(--text-main);
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            margin-bottom: 12px;
            font-weight: 600;
        }

        .back-btn:hover {
            background: var(--border-color);
        }

        /* ===== Bottom Navigation ===== */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: var(--card-bg);
            border-top: 1px solid var(--border-color);
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            z-index: 100;
        }

        .dock-item-lux {
            background: none;
            border: none;
            color: var(--text-muted);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2px;
            font-size: 0.7rem;
            cursor: pointer;
            position: relative;
            padding: 4px 16px;
        }

        .dock-item-lux svg {
            width: 22px;
            height: 22px;
            stroke: currentColor;
            fill: none;
        }

        .dock-item-lux.active {
            color: var(--accent-color);
        }

        .badge-lux {
            position: absolute;
            top: -4px;
            right: 6px;
            background: var(--accent-color);
            color: #fff;
            font-size: 0.6rem;
            padding: 2px 6px;
            border-radius: 10px;
            display: none;
            min-width: 18px;
            text-align: center;
        }

        .badge-lux.show {
            display: block;
        }

        /* ===== Toast ===== */
        #toastBox {
            position: fixed;
            bottom: 80px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background: #fff;
            color: #000;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.85rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            transition: transform 0.3s ease, opacity 0.3s ease;
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
            white-space: nowrap;
        }

        #toastBox.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        /* ===== Interstitial Modal ===== */
        .ad-portal-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0,0,0,0.9);
            z-index: 9998;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
        }

        .ad-portal-modal.active {
            display: flex;
        }

        .ad-portal-modal iframe {
            width: 90%;
            max-width: 500px;
            height: 300px;
            border: none;
            border-radius: 12px;
            background: #fff;
        }

        .ad-portal-modal .timer-text {
            color: var(--text-muted);
            margin-top: 16px;
            font-size: 0.9rem;
        }

        /* ===== Responsive ===== */
        @media (max-width: 480px) {
            .header-container {
                flex-wrap: wrap;
            }
            .search-box {
                max-width: 100%;
                order: 3;
                flex: 0 0 100%;
            }
            .logo {
                font-size: 1rem;
            }
            .video-grid {
                gap: 8px;
            }
            .lux-title {
                font-size: 0.7rem;
            }
            .player-meta {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <!-- ===== Age Verification ===== -->
    <div class="age-overlay" id="ageOverlay">
        <div class="age-card">
            <h2>🔞 18+ အတည်ပြုချက်</h2>
            <p>ဤဝက်ဘ်ဆိုက်ကို အသုံးပြုရန် အသက် 18 နှစ်ပြည့်ပြီးသူဖြစ်ရပါမည်။</p>
            <div class="age-btns">
                <button class="btn btn-secondary" onclick="declineAge()">ထွက်ရန်</button>
                <button class="btn btn-primary" onclick="agreeAge()">ကျွန်တော်/ကျွန်မ အသက် 18 နှစ်ပြည့်ပြီ</button>
            </div>
        </div>
    </div>

    <!-- ===== App Container ===== -->
    <div id="app" style="display: none;">

        <!-- Header -->
        <header>
            <div class="header-container">
                <span class="logo" onclick="navigateView('home')">SRRSORGYI</span>
                <div class="search-box">
                    <input type="text" id="queryInput" placeholder="ရှာဖွေရန်...">
                </div>
            </div>
        </header>

        <!-- Categories -->
        <div class="categories-wrapper" id="categoryContainer">
            <span class="pill-lux active" onclick="filterQuery('asian', this)">အာရှ</span>
            <span class="pill-lux" onclick="filterQuery('japanese', this)">ဂျပန်</span>
            <span class="pill-lux" onclick="filterQuery('korean', this)">ကိုရီးယား</span>
            <span class="pill-lux" onclick="filterQuery('myanmar', this)">မြန်မာ</span>
            <span class="pill-lux" onclick="filterQuery('burmese', this)">ဗမာ</span>
            <span class="pill-lux" onclick="filterQuery('hd', this)">HD</span>
        </div>

        <!-- ===== HOME PANEL ===== -->
        <div class="view-panel active" id="panelHome">
            <div class="video-grid" id="homeStream"></div>
        </div>

        <!-- ===== FAVORITES PANEL ===== -->
        <div class="view-panel" id="panelFavs">
            <h2 class="section-title">⭐ သိမ်းထားသော ဗီဒီယိုများ</h2>
            <div class="video-grid" id="bookmarksStream"></div>
        </div>

        <!-- ===== PLAYER PANEL ===== -->
        <div class="view-panel" id="panelPlayer">
            <button class="back-btn" onclick="navigateView('home')">← နောက်သို့</button>
            <div class="player-wrapper" id="videoEmbedContainer"></div>
            <div class="player-meta">
                <h1 id="videoActiveTitle">ဗီဒီယိုခေါင်းစဉ်</h1>
                <button class="btn-share" id="playerShareBtn">🔗 လင့်ခ်ကူးရန်</button>
            </div>
            <h2 class="section-title">ဆက်စပ် ဗီဒီယိုများ</h2>
            <div class="video-grid" id="recommendStream"></div>
        </div>

        <!-- ===== Bottom Navigation ===== -->
        <nav class="bottom-nav">
            <button class="dock-item-lux active" id="dockHome" onclick="navigateView('home')">
                <svg viewBox="0 0 24 24" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                ရှာဖွေ
            </button>
            <button class="dock-item-lux" id="dockFav" onclick="triggerFavSecureTransition()">
                <svg viewBox="0 0 24 24" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                သိမ်းထားသည်
                <span class="badge-lux" id="favBadge">0</span>
            </button>
        </nav>
    </div>

    <!-- ===== Toast ===== -->
    <div id="toastBox"></div>

    <!-- ===== Interstitial Modal ===== -->
    <div class="ad-portal-modal" id="adPortalModal">
        <iframe id="interstitialFrame" src=""></iframe>
        <div class="timer-text" id="timerCountdown">Verifying secure link in 10s...</div>
    </div>

    <!-- ===== MAIN SCRIPT ===== -->
    <script>
        // ============================================================
        //  CONFIG
        // ============================================================
        const AGE_KEY = "srrsorgyi_age_verified_v1";
        const FAV_KEY = "srrsorgyi_favorites_v1";

        // ============================================================
        //  STATE
        // ============================================================
        let activeQuery = "asian";
        let idxHome = Math.floor(Math.random() * 5) + 1;
        let idxRelated = Math.floor(Math.random() * 5) + 6;
        let lockScrollFetch = false;
        let currentPanel = "home";
        let activeVideoId = null;

        // ============================================================
        //  INIT
        // ============================================================
        if (!sessionStorage.getItem('processedKeys')) {
            sessionStorage.setItem('processedKeys', JSON.stringify([]));
        }
        if (!localStorage.getItem(FAV_KEY)) {
            localStorage.setItem(FAV_KEY, JSON.stringify([]));
        }

        document.addEventListener("DOMContentLoaded", () => {
            // Check age
            if (localStorage.getItem(AGE_KEY) === "true") {
                document.getElementById("ageOverlay").style.display = "none";
                document.getElementById("app").style.display = "block";
            }

            // Check URL hash for direct video link
            checkUrlHashForVideo();

            // If no video loaded from hash, load home
            if (!activeVideoId) {
                executeFetchOperation(activeQuery, idxHome, 'homeStream', false);
            }

            // Update favorite badge
            updateFavoriteBadge();

            // Search
            document.getElementById('queryInput').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    activeQuery = this.value.trim() || "asian";
                    idxHome = Math.floor(Math.random() * 5) + 1;
                    executeFetchOperation(activeQuery, idxHome, 'homeStream', false);
                    this.blur();
                }
            });

            // Infinite scroll
            window.addEventListener('scroll', () => {
                if (currentPanel === "favorites") return;
                const threshold = 700;
                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - threshold) {
                    if (!lockScrollFetch) {
                        lockScrollFetch = true;
                        if (currentPanel === "home") {
                            idxHome++;
                            executeFetchOperation(activeQuery, idxHome, 'homeStream', true);
                        } else if (currentPanel === "player") {
                            idxRelated++;
                            executeFetchOperation(activeQuery, idxRelated, 'recommendStream', true);
                        }
                    }
                }
            });
        });

        // ============================================================
        //  AGE VERIFICATION
        // ============================================================
        function agreeAge() {
            localStorage.setItem(AGE_KEY, "true");
            document.getElementById("ageOverlay").style.display = "none";
            document.getElementById("app").style.display = "block";
            if (!activeVideoId) {
                executeFetchOperation(activeQuery, idxHome, 'homeStream', false);
            }
        }

        function declineAge() {
            document.querySelector(".age-card p").textContent = "ဝင်ရောက်ခွင့် ငြင်းပယ်ထားပါသည်။";
        }

        // ============================================================
        //  TOAST
        // ============================================================
        function showToast(text) {
            const toast = document.getElementById('toastBox');
            toast.innerText = text;
            toast.classList.add('show');
            clearTimeout(toast._timer);
            toast._timer = setTimeout(() => toast.classList.remove('show'), 2500);
        }

        // ============================================================
        //  COPY LINK
        // ============================================================
        function copyVideoLink(e, videoId) {
            if (e) e.stopPropagation();
            const shareableUrl = `${window.location.origin}${window.location.pathname}#video/${videoId}`;
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(shareableUrl).then(() => {
                    showToast("🔗 လင့်ခ်ကို ကူးယူပြီးပါပြီ!");
                });
            } else {
                const input = document.createElement('input');
                input.value = shareableUrl;
                document.body.appendChild(input);
                input.select();
                document.execCommand('copy');
                document.body.removeChild(input);
                showToast("🔗 လင့်ခ်ကို ကူးယူပြီးပါပြီ!");
            }
        }

        // ============================================================
        //  URL HASH ROUTING
        // ============================================================
        async function checkUrlHashForVideo() {
            const hash = window.location.hash;
            if (hash.startsWith('#video/')) {
                const vId = hash.replace('#video/', '');
                if (vId) {
                    try {
                        const response = await fetch(`https://www.eporner.com/api/v2/video/id/?id=${vId}`);
                        const data = await response.json();
                        if (data && data.embed) {
                            activateBroadcastStream(data.embed, data.title, data.id);
                        }
                    } catch (err) {
                        console.error("Direct link load error:", err);
                    }
                }
            }
        }

        // ============================================================
        //  NAVIGATION
        // ============================================================
        function navigateView(panelId) {
            currentPanel = panelId;
            document.querySelectorAll('.view-panel').forEach(p => p.classList.remove('active'));
            document.querySelectorAll('.dock-item-lux').forEach(d => d.classList.remove('active'));

            if (panelId === 'home') {
                document.getElementById('panelHome').classList.add('active');
                document.getElementById('dockHome').classList.add('active');
                document.getElementById('videoEmbedContainer').innerHTML = "";
                history.pushState("", document.title, window.location.pathname + window.location.search);
            } else if (panelId === 'favorites') {
                document.getElementById('panelFavs').classList.add('active');
                document.getElementById('dockFav').classList.add('active');
                document.getElementById('videoEmbedContainer').innerHTML = "";
                renderFavorites();
                history.pushState("", document.title, window.location.pathname + window.location.search);
            } else if (panelId === 'player') {
                document.getElementById('panelPlayer').classList.add('active');
            }
            window.scrollTo(0, 0);
        }

        // ============================================================
        //  FAVORITES - WITH AD GATE
        // ============================================================
        function triggerFavSecureTransition() {
            if (currentPanel === 'favorites') return;

            const gate = document.getElementById('adPortalModal');
            const frame = document.getElementById('interstitialFrame');
            const timer = document.getElementById('timerCountdown');

            frame.src = "https://www.effectivecpmnetwork.com/u545szx1tk?key=25e82d325bbd125da4758a5a8bdb35c4";
            gate.style.display = 'flex';

            let sec = 10;
            timer.innerText = `လုံခြုံရေး စစ်ဆေးနေသည်... ${sec}s`;

            const interval = setInterval(() => {
                sec--;
                if (sec <= 0) {
                    clearInterval(interval);
                    gate.style.display = 'none';
                    frame.src = "";
                    navigateView('favorites');
                } else {
                    timer.innerText = `လုံခြုံရေး စစ်ဆေးနေသည်... ${sec}s`;
                }
            }, 1000);
        }

        // ============================================================
        //  CATEGORY FILTER
        // ============================================================
        function filterQuery(queryKeyword, component) {
            document.querySelectorAll('.pill-lux').forEach(c => c.classList.remove('active'));
            component.classList.add('active');
            activeQuery = queryKeyword;
            idxHome = Math.floor(Math.random() * 5) + 1;
            executeFetchOperation(activeQuery, idxHome, 'homeStream', false);
        }

        // ============================================================
        //  FAVORITES - TOGGLE & RENDER
        // ============================================================
        function toggleCollectionState(e, packet) {
            e.stopPropagation();
            let store = JSON.parse(localStorage.getItem(FAV_KEY));
            const idx = store.findIndex(item => item.id === packet.id);

            if (idx > -1) {
                store.splice(idx, 1);
                e.currentTarget.classList.remove('active');
                e.currentTarget.innerHTML = '♡';
                showToast("⭐ သိမ်းထားမှုမှ ဖယ်ရှားပြီးပါပြီ");
            } else {
                store.push(packet);
                e.currentTarget.classList.add('active');
                e.currentTarget.innerHTML = '❤️';
                showToast("❤️ သိမ်းထားမှုသို့ ထည့်သွင်းပြီးပါပြီ");
            }
            localStorage.setItem(FAV_KEY, JSON.stringify(store));
            updateFavoriteBadge();

            if (currentPanel === "favorites") renderFavorites();
        }

        function renderFavorites() {
            const board = document.getElementById('bookmarksStream');
            let store = JSON.parse(localStorage.getItem(FAV_KEY));

            if (store.length === 0) {
                board.innerHTML = `<div class="lux-state-msg">⭐ သိမ်းထားသော ဗီဒီယိုများ မရှိသေးပါ။<br>ဗီဒီယိုပေါ်ရှိ နှလုံးသင်္ကေတကို နှိပ်၍ သိမ်းဆည်းပါ။</div>`;
                return;
            }

            board.innerHTML = "";
            store.forEach(vData => {
                board.appendChild(createCardElement(vData, true));
            });
        }

        function updateFavoriteBadge() {
            const store = JSON.parse(localStorage.getItem(FAV_KEY));
            const badge = document.getElementById('favBadge');
            badge.textContent = store.length;
            badge.classList.toggle('show', store.length > 0);
        }

        // ============================================================
        //  API FETCH
        // ============================================================
        async function executeFetchOperation(searchKey, page, targetId, isAppend) {
            const stream = document.getElementById(targetId);

            if (!isAppend) {
                stream.innerHTML = `<div class="lux-state-msg"><div class="lux-spinner"></div>ဗီဒီယိုများ ရှာဖွေနေသည်...</div>`;
            }

            try {
                const url = `https://www.eporner.com/api/v2/video/search/?query=${encodeURIComponent(searchKey)}&per_page=15&page=${page}&thumbsize=big`;
                const res = await fetch(url);
                const data = await res.json();

                if (!isAppend) stream.innerHTML = "";

                let processedKeys = JSON.parse(sessionStorage.getItem('processedKeys'));
                let store = JSON.parse(localStorage.getItem(FAV_KEY));
                let newCount = 0;

                if (data.videos && data.videos.length > 0) {
                    data.videos.forEach(item => {
                        if (!processedKeys.includes(item.id)) {
                            processedKeys.push(item.id);
                            newCount++;

                            const views = item.views || Math.floor(Math.random() * 600) + 50;
                            const viewsStr = views >= 1000 ? (views / 1000).toFixed(1) + 'K' : views;
                            const duration = `${item.length_min}:${item.length_sec < 10 ? '0' + item.length_sec : item.length_sec}`;

                            const videoData = {
                                id: item.id,
                                title: item.title.replace(/'/g, "\\'").replace(/"/g, '\\"'),
                                embed: item.embed,
                                thumb: item.default_thumb.src,
                                duration: duration,
                                views: viewsStr
                            };

                            const isFav = store.some(s => s.id === item.id);
                            stream.appendChild(createCardElement(videoData, isFav));
                        }
                    });

                    sessionStorage.setItem('processedKeys', JSON.stringify(processedKeys));

                    if (newCount === 0) {
                        lockScrollFetch = false;
                        const nextPage = page + 1;
                        if (currentPanel === "home") {
                            idxHome = nextPage;
                            executeFetchOperation(activeQuery, idxHome, 'homeStream', true);
                        } else {
                            idxRelated = nextPage;
                            executeFetchOperation(activeQuery, idxRelated, 'recommendStream', true);
                        }
                        return;
                    }
                    lockScrollFetch = false;
                } else {
                    if (!isAppend) {
                        stream.innerHTML = `<div class="lux-state-msg">ဗီဒီယိုများ မတွေ့ပါ။</div>`;
                    }
                    lockScrollFetch = false;
                }
            } catch (err) {
                console.error("API Error:", err);
                if (!isAppend) {
                    stream.innerHTML = `<div class="lux-state-msg">ဗီဒီယိုများ ရယူရာတွင် အမှားရှိပါသည်။</div>`;
                }
                lockScrollFetch = false;
            }
        }

        // ============================================================
        //  CREATE CARD ELEMENT
        // ============================================================
        function createCardElement(data, isFav) {
            const card = document.createElement('div');
            card.className = 'lux-card';
            card.onclick = () => activateBroadcastStream(data.embed, data.title, data.id);

            card.innerHTML = `
                <div class="lux-media">
                    <img src="${data.thumb}" alt="thumbnail" loading="lazy" onerror="this.src='https://via.placeholder.com/300x169?text=No+Image'">
                    <div class="share-lux-trigger" onclick="copyVideoLink(event, '${data.id}')">
                        🔗 လင့်ခ်
                    </div>
                    <div class="duration-lux-badge">${data.duration}</div>
                    <div class="fav-lux-trigger ${isFav ? 'active' : ''}" onclick="toggleCollectionState(event, ${JSON.stringify(data).replace(/"/g, '&quot;')})">
                        ${isFav ? '❤️' : '♡'}
                    </div>
                </div>
                <div class="lux-details">
                    <div class="lux-title">${data.title}</div>
                    <div class="lux-metrics">
                        <span><span class="play-indicator">▶</span> ${data.views} Views</span>
                        <span>HD</span>
                    </div>
                </div>
            `;
            return card;
        }

        // ============================================================
        //  ACTIVATE PLAYER
        // ============================================================
        function activateBroadcastStream(embedUrl, title, videoId) {
            activeVideoId = videoId;
            window.location.hash = `video/${videoId}`;

            navigateView('player');
            document.getElementById('videoEmbedContainer').innerHTML = `
                <iframe src="${embedUrl}" allowfullscreen scrolling="no" loading="lazy"></iframe>
            `;
            document.getElementById('videoActiveTitle').innerText = title;
            document.getElementById('playerShareBtn').onclick = (e) => copyVideoLink(e, videoId);

            idxRelated = Math.floor(Math.random() * 5) + 6;
            executeFetchOperation(activeQuery, idxRelated, 'recommendStream', false);
        }
    </script>

    <!-- ============================================================
    AD SCRIPTS (Place at bottom for performance)
    ============================================================ -->

    <!-- Push Notification Ad -->
    <script src="https://pl31026144.profitableratecpmnetwork.com/ce/f2/06/cef206539ee12f44ad1deed54bb1577e.js"></script>

    <!-- Display Ad -->
    <script src="https://pl31026146.profitableratecpmnetwork.com/a4/93/0d/a4930d318ba53e1ba1e5680fc28d9110.js"></script>

    <!-- Interstitial / In-feed -->
    <script async="async" data-cfasync="false" src="https://pl31026147.profitableratecpmnetwork.com/79018c7a9cb0645bb68525c196050187/invoke.js"></script>
    <div id="container-79018c7a9cb0645bb68525c196050187"></div>

    <!-- Banner Ad -->
    <script>
        atOptions = {
            'key': '792348dfc550b37841a9c74ad3134b37',
            'format': 'iframe',
            'height': 60,
            'width': 468,
            'params': {}
        };
    </script>
    <script src="https://www.highrevenueformat.com/792348dfc550b37841a9c74ad3134b37/invoke.js"></script>

</body>
</html>
