
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORN-XMM</title>
    <style>
        /* =====================================================
           GLOBAL & RESET CSS
        ===================================================== */
        :root {
            --bg-color: #0c0c12;
            --card-bg: #16161f;
            --card-bg-2: #1c1c27;
            --accent-color: #ff2a5f;
            --accent-hover: #ff4574;
            --accent-2: #ff7a59;
            --grad-accent: linear-gradient(135deg, #ff2a5f 0%, #ff7a59 100%);
            --text-main: #f1f1f5;
            --text-muted: #8e8e9e;
            --border-color: #26263a;
            --border-strong: rgba(255,42,95,.35);
            --shadow-card: 0 6px 22px rgba(0,0,0,.4);
            --shadow-hover: 0 16px 44px rgba(255,42,95,.24);
            --glow: 0 0 0 1px rgba(255,42,95,.25), 0 8px 30px rgba(255,42,95,.2);
            --radius: 14px;
            --radius-lg: 22px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            -webkit-tap-highlight-color: transparent;
        }

        ::-webkit-scrollbar {
            width: 9px;
            height: 9px;
        }
        ::-webkit-scrollbar-track {
            background: var(--bg-color);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--border-color);
            border-radius: 12px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: var(--accent-color);
        }

        ::selection {
            background: var(--accent-color);
            color: #fff;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            padding-bottom: 110px;
            overflow-x: hidden;
            background-image:
                radial-gradient(1000px 500px at 100% -10%, rgba(255,42,95,.10) 0%, transparent 60%),
                radial-gradient(800px 500px at -10% 15%, rgba(255,122,89,.08) 0%, transparent 55%);
            background-attachment: fixed;
            -webkit-font-smoothing: antialiased;
        }

        /* =====================================================
           AGE VERIFICATION OVERLAY
        ===================================================== */
        .age-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(8, 8, 14, 0.92);
            backdrop-filter: blur(14px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .age-card {
            background: linear-gradient(160deg, var(--card-bg-2) 0%, var(--card-bg) 100%);
            border: 1px solid var(--border-strong);
            padding: 36px 32px;
            border-radius: 22px;
            text-align: center;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 30px 80px rgba(0,0,0,.6), 0 0 60px rgba(255,42,95,.12);
            animation: popIn .5s cubic-bezier(.2,.8,.3,1) both;
        }

        .age-badge {
            width: 68px;
            height: 68px;
            margin: 0 auto 18px;
            border-radius: 20px;
            background: var(--grad-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            box-shadow: 0 12px 30px rgba(255,42,95,.4);
        }

        .age-badge svg {
            width: 30px;
            height: 30px;
        }

        @keyframes popIn {
            from { opacity: 0; transform: translateY(26px) scale(.96); }
            to { opacity: 1; transform: none; }
        }

        .age-card h2 {
            margin-bottom: 12px;
            color: var(--accent-color);
            letter-spacing: -.3px;
        }

        .age-card p {
            color: var(--text-muted);
            font-size: 0.95rem;
            margin-bottom: 26px;
            line-height: 1.5;
        }

        .age-btns {
            display: flex;
            gap: 12px;
        }

        .btn {
            flex: 1;
            padding: 14px 12px;
            border: none;
            border-radius: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: transform .18s ease, box-shadow .18s ease, background .18s ease;
        }

        .btn-primary {
            background: var(--grad-accent);
            color: #fff;
            box-shadow: 0 10px 24px rgba(255,42,95,.35);
        }

        .btn-primary:hover {
            background: var(--grad-accent);
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(255,42,95,.45);
        }

        .btn-secondary {
            background: var(--border-color);
            color: var(--text-main);
        }

        .btn-secondary:hover {
            background: #32324a;
            transform: translateY(-2px);
        }

        /* =====================================================
           HEADER & NAVIGATION
        ===================================================== */
        header {
            position: sticky;
            top: 0;
            background: rgba(12, 12, 18, 0.78);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            z-index: 100;
            border-bottom: 1px solid rgba(38, 38, 58, .6);
            padding: 12px 20px;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .logo {
            font-size: 1.3rem;
            font-weight: 900;
            color: transparent;
            background: var(--grad-accent);
            -webkit-background-clip: text;
            background-clip: text;
            text-decoration: none;
            letter-spacing: -0.5px;
            white-space: nowrap;
        }

        .search-box {
            flex: 1;
            max-width: 400px;
            position: relative;
        }

        .search-box input {
            width: 100%;
            padding: 11px 16px 11px 40px;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 24px;
            color: var(--text-main);
            outline: none;
            font-size: 0.9rem;
            transition: border-color .18s, box-shadow .18s;
        }

        .search-box input:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 4px rgba(255,42,95,.12);
        }

        .search-box::before {
            content: "";
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            background: var(--text-muted);
            -webkit-mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.35-4.35"/></svg>') center/contain no-repeat;
            mask: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.35-4.35"/></svg>') center/contain no-repeat;
            pointer-events: none;
        }

        /* Category Scroll */
        .categories-wrapper {
            max-width: 1200px;
            margin: 16px auto 0;
            padding: 4px 12px;
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: none;
        }

        .categories-wrapper::-webkit-scrollbar {
            display: none;
        }

        .category {
            display: inline-block;
            padding: 8px 18px;
            margin-right: 8px;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: 22px;
            color: var(--text-muted);
            font-size: 0.85rem;
            cursor: pointer;
            transition: all .18s ease;
            font-weight: 600;
        }

        .category.active, .category:hover {
            background: var(--grad-accent);
            color: #fff;
            border-color: transparent;
            box-shadow: 0 6px 18px rgba(255,42,95,.3);
        }

        /* =====================================================
           MAIN LAYOUT & CARDS (Updated for 2 Columns Layout)
        ===================================================== */
        main {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 12px;
        }

        .section-title {
            font-size: 1.15rem;
            margin-bottom: 14px;
            font-weight: 800;
            display: flex;
            align-items: center;
            gap: 10px;
            letter-spacing: -.2px;
        }

        .section-title::before {
            content: "";
            width: 4px;
            height: 18px;
            border-radius: 8px;
            background: var(--grad-accent);
            box-shadow: 0 3px 10px rgba(255,42,95,.4);
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
        }

        @media (min-width: 768px) {
            .video-grid {
                grid-template-columns: repeat(4, 1fr);
                gap: 18px;
            }
        }

        .video-card {
            background: linear-gradient(165deg, var(--card-bg-2) 0%, var(--card-bg) 100%);
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            transition: transform .22s ease, box-shadow .22s ease, border-color .22s ease;
            animation: fadeUp .4s ease both;
        }

        .video-card:hover {
            transform: translateY(-5px);
            border-color: var(--border-strong);
            box-shadow: var(--shadow-hover);
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(14px); }
            to { opacity: 1; transform: none; }
        }

        .video-card:nth-child(2n) { animation-delay: .05s; }
        .video-card:nth-child(3n) { animation-delay: .1s; }
        .video-card:nth-child(4n) { animation-delay: .15s; }

        .thumbnail-wrap {
            position: relative;
            width: 100%;
            padding-top: 56.25%;
            background: #000;
            overflow: hidden;
        }

        .thumbnail {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .45s ease;
        }

        .video-card:hover .thumbnail {
            transform: scale(1.06);
        }

        .thumb-shade {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0,0,0,.35) 0%, transparent 40%, rgba(0,0,0,.75) 100%);
        }

        .play-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(.85);
            width: 42px;
            height: 42px;
            background: var(--grad-accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: .25s ease;
            box-shadow: 0 8px 22px rgba(255,42,95,.5);
        }

        .thumbnail-wrap:hover .play-overlay {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .play-overlay svg {
            width: 18px;
            height: 18px;
            fill: #fff;
            margin-left: 2px;
        }

        .card-top {
            position: absolute;
            top: 8px;
            left: 8px;
            right: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
        }

        .link-badge {
            background: rgba(12, 12, 18, 0.7);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #fff;
            font-size: 0.65rem;
            padding: 5px 9px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 4px;
            transition: background .15s, border-color .15s;
        }

        .link-badge:hover {
            background: var(--grad-accent);
            border-color: transparent;
        }

        .link-badge svg {
            width: 11px;
            height: 11px;
        }

        .favorite-btn {
            background: rgba(12, 12, 18, 0.7);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            color: #fff;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background .18s, transform .18s, color .18s;
        }

        .favorite-btn:hover {
            transform: scale(1.12);
        }

        .favorite-btn.active {
            color: var(--accent-color);
            background: rgba(255,42,95,.18);
            border-color: var(--accent-color);
        }

        .duration {
            position: absolute;
            bottom: 8px;
            right: 8px;
            background: rgba(0,0,0,0.75);
            backdrop-filter: blur(4px);
            color: #fff;
            font-size: 0.68rem;
            padding: 3px 6px;
            border-radius: 6px;
            font-weight: 700;
            letter-spacing: .3px;
        }

        .card-info {
            padding: 10px 12px 12px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            flex: 1;
        }

        .card-title {
            font-size: 0.8rem;
            line-height: 1.3;
            font-weight: 600;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            color: var(--text-main);
        }

        .card-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.7rem;
            color: var(--text-muted);
            margin-top: auto;
        }

        .views {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .views svg {
            width: 11px;
            height: 11px;
            color: var(--accent-2);
        }

        .quality {
            background: rgba(255,42,95,.12);
            border: 1px solid rgba(255,42,95,.25);
            color: var(--accent-hover);
            padding: 2px 6px;
            border-radius: 5px;
            font-size: 0.62rem;
            font-weight: 700;
        }

        /* =====================================================
           DETAIL PAGE / PLAYER VIEW
        ===================================================== */
        .detail-page {
            display: none;
        }

        .back-btn {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            color: var(--text-main);
            padding: 10px 18px;
            border-radius: 12px;
            cursor: pointer;
            margin-bottom: 18px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            transition: border-color .18s, background .18s, transform .18s;
        }

        .back-btn:hover {
            border-color: var(--accent-color);
            background: var(--card-bg-2);
            transform: translateX(-3px);
        }

        .player-container {
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #000;
            border-radius: 18px;
            overflow: hidden;
            margin-bottom: 18px;
            border: 1px solid var(--border-color);
            box-shadow: 0 18px 50px rgba(0,0,0,.55);
        }

        .player-container iframe, .player-container video {
            width: 100%;
            height: 100%;
            border: none;
        }

        .detail-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 14px;
            padding-bottom: 18px;
            border-bottom: 1px solid var(--border-color);
        }

        .share-btn {
            background: var(--grad-accent);
            color: #fff;
            border: none;
            padding: 12px 22px;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 700;
            transition: transform .18s, box-shadow .18s;
            box-shadow: 0 8px 22px rgba(255,42,95,.3);
        }

        .share-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(255,42,95,.4);
        }

        /* Empty State & Toast */
        .empty {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 20px;
            color: var(--text-muted);
        }

        .empty h3 {
            color: var(--text-main);
            margin-bottom: 6px;
            font-size: 1.05rem;
        }

        .loading-box {
            grid-column: 1 / -1;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
            padding: 70px 20px;
            color: var(--text-muted);
            font-weight: 600;
        }

        .spinner {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 3px solid var(--border-color);
            border-top-color: var(--accent-color);
            animation: spin .8s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .toast {
            position: fixed;
            bottom: 90px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background: var(--grad-accent);
            color: #fff;
            padding: 12px 24px;
            border-radius: 30px;
            font-weight: 700;
            font-size: 0.85rem;
            box-shadow: 0 10px 30px rgba(255,42,95,.4);
            transition: transform .3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 1000;
            opacity: 0;
            pointer-events: none;
        }

        .toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }

        /* Bottom Nav */
        .bottom-nav {
            position: fixed;
            bottom: 14px;
            left: 50%;
            transform: translateX(-50%);
            width: calc(100% - 28px);
            max-width: 380px;
            background: rgba(22, 22, 31, 0.85);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255,255,255,.08);
            border-radius: 24px;
            display: flex;
            justify-content: space-around;
            padding: 8px;
            z-index: 100;
            box-shadow: 0 18px 45px rgba(0,0,0,.55);
        }

        .nav-item {
            background: none;
            border: none;
            color: var(--text-muted);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            font-size: 0.72rem;
            cursor: pointer;
            position: relative;
            padding: 8px 18px;
            border-radius: 16px;
            transition: color .18s, background .18s;
            font-weight: 600;
        }

        .nav-item svg {
            width: 21px;
            height: 21px;
            stroke: currentColor;
        }

        .nav-item.active {
            color: var(--accent-color);
            background: rgba(255,42,95,.12);
        }

        .badge {
            position: absolute;
            top: 3px;
            right: 14px;
            background: var(--grad-accent);
            color: #fff;
            font-size: 0.65rem;
            padding: 2px 6px;
            border-radius: 10px;
            display: none;
            box-shadow: 0 3px 10px rgba(255,42,95,.5);
        }

        .badge.show {
            display: block;
        }

        /* =====================================================
           AD SLOTS
        ===================================================== */
        .ad-slot {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 12px auto;
            overflow: hidden;
        }

        .ad-slot iframe,
        .ad-slot script {
            max-width: 100%;
        }

        .ad-desktop {
            display: none;
        }

        @media (min-width: 768px) {
            .ad-desktop {
                display: flex;
            }
        }

        .ad-mobile {
            display: flex;
        }

        @media (min-width: 768px) {
            .ad-mobile {
                display: none;
            }
        }

        .ad-native-wrap {
            width: 100%;
            margin: 20px auto;
            overflow: hidden;
        }

        .ad-native-wrap iframe,
        .ad-native-wrap script {
            max-width: 100%;
        }

        .ad-native-wrap #container-8f8dfc620b1c43585e210e9b1a8d16ed {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }
    </style>
</head>
<body>

    <!-- AGE VERIFICATION OVERLAY -->
    <div id="ageOverlay" class="age-overlay">
        <div class="age-card">
            <div class="age-badge">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2l7 3v6c0 4.5-3 8.5-7 10-4-1.5-7-5.5-7-10V5z"/>
                    <path d="M9 12l2 2 4-4"/>
                </svg>
            </div>
            <h2>18+ Verification</h2>
            <p>This site contains adult content. You must be at least 18 years old to enter.</p>
            <div class="age-btns">
                <button class="btn btn-secondary age-decline" onclick="declineAge()">Exit</button>
                <button class="btn btn-primary" onclick="agreeAge()">I am 18 or older</button>
            </div>
        </div>
    </div>

    <!-- MAIN APP STRUCTURE -->
    <div id="app" style="display: none;">
        <header>
            <div class="header-container">
                <a href="#" class="logo" onclick="showHome()">PORN-XMM</a>
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Search videos...">
                </div>
            </div>
        </header>

        <div class="ad-slot ad-desktop">
            <script>
                atOptions = {
                    'key' : '21fa32b76818b0611151f4a6bb8e3de2',
                    'format' : 'iframe',
                    'height' : 90,
                    'width' : 728,
                    'params' : {}
                };
            </script>
            <script src="https://www.highrevenueformat.com/21fa32b76818b0611151f4a6bb8e3de2/invoke.js"></script>
        </div>

        <div class="ad-slot ad-mobile">
            <script>
                atOptions = {
                    'key' : '02a1fd0376101484294a83b94d6ac423',
                    'format' : 'iframe',
                    'height' : 50,
                    'width' : 320,
                    'params' : {}
                };
            </script>
            <script src="https://www.highrevenueformat.com/02a1fd0376101484294a83b94d6ac423/invoke.js"></script>
        </div>

        <!-- DISCOVER / HOME PAGE -->
        <div id="homePage">
            <div class="categories-wrapper" id="categories"></div>
            <main>
                <h2 class="section-title" id="homeTitle">Asian</h2>
                <div class="video-grid" id="videoGrid"></div>
            </main>

            <div class="ad-native-wrap">
                <script async="async" data-cfasync="false" src="https://pl30991667.profitableratecpmnetwork.com/8f8dfc620b1c43585e210e9b1a8d16ed/invoke.js"></script>
                <div id="container-8f8dfc620b1c43585e210e9b1a8d16ed"></div>
            </div>
        </div>

        <!-- FAVORITES PAGE -->
        <div id="favoritesPage" style="display: none;">
            <main>
                <h2 class="section-title">My Saved Favorites</h2>
                <div class="video-grid" id="favoriteGrid"></div>
            </main>
        </div>

        <!-- DETAIL PAGE -->
        <div id="detailPage" class="detail-page">
            <main>
                <button class="back-btn" onclick="closeDetail()">
                    &larr; Back to Videos
                </button>
                
                <div class="player-container">
                    <iframe id="detailIframe" allowfullscreen style="display: none;"></iframe>
                    <video id="detailVideo" controls style="display: none;"></video>
                </div>

                <div class="ad-slot">
                    <script>
                        atOptions = {
                            'key' : 'b4ce71c446b1f9601e82e772fef04d8a',
                            'format' : 'iframe',
                            'height' : 250,
                            'width' : 300,
                            'params' : {}
                        };
                    </script>
                    <script src="https://www.highrevenueformat.com/b4ce71c446b1f9601e82e772fef04d8a/invoke.js"></script>
                </div>

                <h1 id="detailTitle" style="font-size: 1.1rem; margin-bottom: 8px;"></h1>
                <p id="detailDescription" style="color: var(--text-muted); font-size: 0.85rem;"></p>

                <div class="detail-actions">
                    <button class="share-btn" onclick="copyDetailLink()">Share Video Link</button>
                </div>

                <h2 class="section-title" style="margin-top: 30px;">Recommended Videos</h2>
                <div class="video-grid" id="recommendationGrid"></div>
            </main>
        </div>

        <!-- BOTTOM NAVIGATION -->
        <nav class="bottom-nav">
            <button class="nav-item active" id="discoverNav" onclick="showHome()">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg>
                Discover
            </button>
            <button class="nav-item" id="favoriteNav" onclick="showFavorites()">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                Favorites
                <span class="badge" id="favoriteCount">0</span>
            </button>
            <a class="nav-item" href="https://www.profitableratecpmnetwork.com/wxv642saw?key=dd9b003b7533ff3b1fb7ee371d1872ae" target="_blank" rel="noopener noreferrer" style="text-decoration: none;">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="2"><path d="M13 2L3 14h7l-1 8 10-12h-7l1-8z"/></svg>
                Hot Deals
            </a>
        </nav>
    </div>

    <!-- TOAST NOTIFICATION -->
    <div id="toast" class="toast"></div>

    <!-- =====================================================
       JAVASCRIPT LOGIC
    ===================================================== -->
    <script>
        const FAVORITE_KEY = "general_video_favorites_v1";
        const AGE_KEY = "general_video_age_verified_v1";

        let videos = [];
        let favorites = readJSON(FAVORITE_KEY, []);
        let activeQuery = "asian";
        let currentPage = 1;
        let isLoading = false;
        let currentDetailLink = "";
        let categoryList = ["Asian", "Japanese", "Korean", "Myanmar", "HD"];

        document.addEventListener("DOMContentLoaded", () => {
            setupSearch();
            buildCategories();
            checkUrlHashForVideo();
            
            if (!window.location.hash.startsWith('#video/')) {
                fetchEpornerVideos(activeQuery, currentPage, false);
            }

            checkAge();
            setupInfiniteScroll();
            renderFavoriteCount();
        });

        function readJSON(key, fallback) {
            try {
                const raw = localStorage.getItem(key);
                return raw ? JSON.parse(raw) : fallback;
            } catch (error) {
                return fallback;
            }
        }

        function saveJSON(key, value) {
            localStorage.setItem(key, JSON.stringify(value));
        }

        async function fetchEpornerVideos(query, page, isAppend = false) {
            if (isLoading) return;
            isLoading = true;

            const grid = document.getElementById("videoGrid");
            if (!isAppend) {
                grid.innerHTML = `<div class="loading-box"><div class="spinner"></div><span>Loading videos...</span></div>`;
            }

            try {
                const apiUrl = `https://www.eporner.com/api/v2/video/search/?query=${encodeURIComponent(query)}&per_page=16&page=${page}&thumbsize=big`;
                const response = await fetch(apiUrl);
                const data = await response.json();

                if (!isAppend) grid.innerHTML = "";

                if (data.videos && data.videos.length > 0) {
                    const fetchedVideos = data.videos.map(item => {
                        const simulatedViews = item.views || Math.floor(Math.random() * 600) + 50;
                        const timestampDisplay = `${item.length_min}:${item.length_sec < 10 ? '0' + item.length_sec : item.length_sec}`;
                        
                        return {
                            id: item.id,
                            title: item.title,
                            embed: item.embed,
                            thumbnail: item.default_thumb.src,
                            duration: timestampDisplay,
                            quality: "UltraHD",
                            views: simulatedViews,
                            description: item.keywords || item.title
                        };
                    });

                    if (isAppend) {
                        videos = [...videos, ...fetchedVideos];
                    } else {
                        videos = fetchedVideos;
                    }

                    renderVideos();
                } else {
                    if (!isAppend) {
                        grid.innerHTML = `
                            <div class="empty">
                                <h3>No videos found</h3>
                                <p>Try another search or category.</p>
                            </div>`;
                    }
                }
            } catch (error) {
                console.error("API Fetch Error:", error);
                if (!isAppend) {
                    grid.innerHTML = `<div class="empty"><h3>Error loading videos.</h3></div>`;
                }
            } finally {
                isLoading = false;
            }
        }

        function setupInfiniteScroll() {
            window.addEventListener('scroll', () => {
                const favoritesPage = document.getElementById("favoritesPage");
                const detailPage = document.getElementById("detailPage");
                
                if (favoritesPage.style.display === "block" || detailPage.style.display === "block") return;

                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 600) {
                    if (!isLoading) {
                        currentPage++;
                        fetchEpornerVideos(activeQuery, currentPage, true);
                    }
                }
            });
        }

        function buildCategories() {
            const container = document.getElementById("categories");
            container.innerHTML = categoryList.map((cat, index) => `
                <button
                    class="category${index === 0 ? " active" : ""}"
                    onclick="selectCategory(this, '${cat}')">
                    ${escapeHtml(cat)}
                </button>
            `).join("");
        }

        function selectCategory(button, catKeyword) {
            document.querySelectorAll(".category").forEach(item => item.classList.remove("active"));
            button.classList.add("active");

            activeQuery = catKeyword;
            currentPage = 1;
            document.getElementById("homeTitle").textContent = catKeyword;
            fetchEpornerVideos(activeQuery, currentPage, false);
        }

        function setupSearch() {
            const input = document.getElementById("searchInput");
            input.addEventListener("keypress", function (e) {
                if (e.key === 'Enter') {
                    activeQuery = this.value.trim() || "asian";
                    currentPage = 1;
                    document.getElementById("homeTitle").textContent = `Search: ${activeQuery}`;
                    fetchEpornerVideos(activeQuery, currentPage, false);
                    this.blur();
                }
            });
        }

        function renderVideos() {
            const grid = document.getElementById("videoGrid");
            grid.innerHTML = videos.map(video => createCard(video)).join("");
        }

        function createCard(video) {
            const isFavorite = favorites.some(fav => fav.id === video.id);
            const views = formatViews(video.views);

            return `
                <article class="video-card">
                    <div
                        class="thumbnail-wrap"
                        onclick="openDetail('${video.id}')"
                        role="button"
                        style="cursor:pointer">

                        <img
                            class="thumbnail"
                            src="${escapeAttr(video.thumbnail)}"
                            alt="${escapeAttr(video.title)}"
                            loading="lazy">

                        <span class="thumb-shade"></span>

                        <span class="play-overlay">
                            <svg viewBox="0 0 24 24">
                                <path d="M8 5.14v13.72c0 .8.87 1.3 1.56.88l10.4-6.86a1.05 1.05 0 000-1.76L9.56 4.26A1.05 1.05 0 008 5.14z"/>
                            </svg>
                        </span>

                        <div class="card-top">
                            <button
                                class="link-badge"
                                title="Copy link"
                                onclick="event.stopPropagation(); copyVideoLink(event, '${video.id}')">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/>
                                    <path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/>
                                </svg>
                                Link
                            </button>

                            <button
                                class="favorite-btn ${isFavorite ? "active" : ""}"
                                title="Favorite"
                                onclick="event.stopPropagation(); toggleFavorite('${video.id}')">
                                <svg viewBox="0 0 24 24" fill="${isFavorite ? 'currentColor' : 'none'}" stroke="currentColor" stroke-width="2" width="14" height="14">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                                </svg>
                            </button>
                        </div>

                        <div class="duration">
                            ${escapeHtml(video.duration || "00:00")}
                        </div>
                    </div>

                    <div class="card-info">
                        <h3 class="card-title">${escapeHtml(video.title)}</h3>
                        <div class="card-meta">
                            <span class="views">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                                ${views}
                            </span>
                            <span class="quality">${escapeHtml(video.quality || "HD")}</span>
                        </div>
                    </div>
                </article>
            `;
        }

        function toggleFavorite(id) {
            const video = videos.find(v => v.id === id) || favorites.find(v => v.id === id);
            if (!video) return;

            const index = favorites.findIndex(item => item.id === id);
            if (index > -1) {
                favorites.splice(index, 1);
                showToast("Removed from favorites");
            } else {
                favorites.push(video);
                showToast("Added to favorites");
            }

            saveJSON(FAVORITE_KEY, favorites);
            renderVideos();
            renderFavorites();
        }

        function renderFavorites() {
            const grid = document.getElementById("favoriteGrid");
            if (!favorites.length) {
                grid.innerHTML = `
                    <div class="empty">
                        <h3>No favorites yet</h3>
                        <p>Tap the heart icon on a video to save it here.</p>
                    </div>`;
                renderFavoriteCount();
                return;
            }

            grid.innerHTML = favorites.map(video => createCard(video)).join("");
            renderFavoriteCount();
        }

        function renderFavoriteCount() {
            const badge = document.getElementById("favoriteCount");
            badge.textContent = favorites.length;
            badge.classList.toggle("show", favorites.length > 0);
        }

        async function checkUrlHashForVideo() {
            const hash = window.location.hash;
            if (hash.startsWith('#video/')) {
                const vId = hash.replace('#video/', '');
                if (vId) {
                    openDetail(vId);
                }
            }
        }

        async function openDetail(id) {
            let video = videos.find(item => item.id === id) || favorites.find(item => item.id === id);

            if (!video) {
                try {
                    const res = await fetch(`https://www.eporner.com/api/v2/video/id/?id=${id}`);
                    const data = await res.json();
                    if (data && data.embed) {
                        video = {
                            id: data.id,
                            title: data.title,
                            embed: data.embed,
                            thumbnail: data.default_thumb.src,
                            duration: `${data.length_min}:${data.length_sec < 10 ? '0' + data.length_sec : data.length_sec}`,
                            quality: "UltraHD",
                            views: data.views || 100,
                            description: data.keywords || data.title
                        };
                    }
                } catch (err) {
                    console.error("Direct load error:", err);
                    return;
                }
            }

            if (!video) return;

            window.location.hash = `video/${video.id}`;

            document.getElementById("homePage").style.display = "none";
            document.getElementById("favoritesPage").style.display = "none";
            document.getElementById("detailPage").style.display = "block";

            const iframe = document.getElementById("detailIframe");
            iframe.style.display = "block";
            iframe.src = video.embed;

            document.getElementById("detailTitle").textContent = video.title;
            document.getElementById("detailDescription").textContent = video.description || "";

            currentDetailLink = `${window.location.origin}${window.location.pathname}#video/${video.id}`;

            renderRecommendations();
            window.scrollTo({ top: 0, behavior: "smooth" });
        }

        function closeDetail() {
            const iframe = document.getElementById("detailIframe");
            iframe.removeAttribute("src");
            iframe.style.display = "none";

            document.getElementById("detailPage").style.display = "none";
            history.pushState("", document.title, window.location.pathname + window.location.search);
            showHome();
        }

        function renderRecommendations() {
            const grid = document.getElementById("recommendationGrid");
            const list = videos.slice(0, 6);
            grid.innerHTML = list.map(video => createCard(video)).join("");
        }

        function showHome() {
            document.getElementById("homePage").style.display = "block";
            document.getElementById("favoritesPage").style.display = "none";
            document.getElementById("detailPage").style.display = "none";

            document.getElementById("discoverNav").classList.add("active");
            document.getElementById("favoriteNav").classList.remove("active");
            window.scrollTo({ top: 0, behavior: "smooth" });
        }

        function showFavorites() {
            renderFavorites();
            document.getElementById("homePage").style.display = "none";
            document.getElementById("detailPage").style.display = "none";
            document.getElementById("favoritesPage").style.display = "block";

            document.getElementById("discoverNav").classList.remove("active");
            document.getElementById("favoriteNav").classList.active = false;
            document.getElementById("favoriteNav").classList.add("active");
            window.scrollTo({ top: 0, behavior: "smooth" });
        }

        function copyVideoLink(e, videoId) {
            if (e) e.stopPropagation();
            const shareableUrl = `${window.location.origin}${window.location.pathname}#video/${videoId}`;
            copyToClipboard(shareableUrl);
        }

        function copyDetailLink() {
            copyToClipboard(currentDetailLink);
        }

        function copyToClipboard(text) {
            if (navigator.clipboard && navigator.clipboard.writeText) {
                navigator.clipboard.writeText(text).then(() => showToast("🔗 Link copied!"));
            } else {
                const input = document.createElement('input');
                input.value = text;
                document.body.appendChild(input);
                input.select();
                document.execCommand('copy');
                document.body.removeChild(input);
                showToast("🔗 Link copied!");
            }
        }

        let toastTimer;
        function showToast(message) {
            const toast = document.getElementById("toast");
            toast.textContent = message;
            toast.classList.add("show");
            clearTimeout(toastTimer);
            toastTimer = setTimeout(() => toast.classList.remove("show"), 2200);
        }

        function formatViews(count) {
            if (count >= 1000) return (count / 1000).toFixed(1) + 'K';
            return String(count);
        }

        function checkAge() {
            const verified = localStorage.getItem(AGE_KEY);
            if (verified === "true") {
                document.getElementById("ageOverlay").style.display = "none";
                document.getElementById("app").style.display = "block";
                if (typeof loadPopunder === "function") loadPopunder();
            }
        }

        function agreeAge() {
            localStorage.setItem(AGE_KEY, "true");
            document.getElementById("ageOverlay").style.display = "none";
            document.getElementById("app").style.display = "block";
            if (typeof loadPopunder === "function") loadPopunder();
        }

        function declineAge() {
            const cardText = document.querySelector(".age-card p");
            cardText.textContent = "Sorry, this content is only available to adults aged 18 and over.";
            document.querySelector(".age-decline").style.display = "none";
        }

        function escapeHtml(value) {
            return String(value ?? "").replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
        }

        function escapeAttr(value) {
            return String(value ?? "").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
        }
    </script>

    <!-- POPUNDER AD -->
    <script>
        function loadPopunder() {
            var s = document.createElement('script');
            s.src = 'https://pl30991664.profitableratecpmnetwork.com/61/a5/12/61a512b6b768ede99ee6d476880c0b82.js';
            document.body.appendChild(s);
        }
    </script>

    <!-- SOCIALBAR AD -->
    <script src="https://pl30991666.profitableratecpmnetwork.com/5a/94/59/5a9459d325db9b3d875049800957df12.js"></script>
</body>
</html>
