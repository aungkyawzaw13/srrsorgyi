<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRRSORGYI</title>
    
    <!-- Dynamic Open Graph Meta Tags for Social Sharing / Link Previews -->
    <meta property="id" content="SRRSORGYI">
    <meta property="og:title" id="ogTitle" content="SRRSORGYI - Asian & HD Videos">
    <meta property="og:description" id="ogDesc" content="Watch high quality videos online.">
    <meta property="og:image" id="ogImage" content="https://img.mpsimg.com/Bonusevent/Banner/10936JILIMMAU.webp">
    <meta property="og:type" content="website">





    <style>
        :root {
            --bg-color: #0f0f12;
            --card-bg: #1a1a22;
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
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-main);
            padding-bottom: 70px;
            overflow-x: hidden;
        }

        /* Age Verification Overlay */
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

        /* Header */
        header {
            position: sticky;
            top: 0;
            background: rgba(15, 15, 18, 0.9);
            backdrop-filter: blur(12px);
            z-index: 100;
            border-bottom: 1px solid var(--border-color);
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
            font-weight: 800;
            color: var(--accent-color);
            text-decoration: none;
            letter-spacing: -0.5px;
            cursor: pointer;
        }

        .search-box {
            flex: 1;
            max-width: 400px;
            position: relative;
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

        /* Banner Slider */
        .banner-container {
            max-width: 1200px;
            margin: 15px auto 0;
            padding: 0 12px;
        }

        .banner-slider {
            position: relative;
            width: 100%;
            height: 160px;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        @media (min-width: 768px) {
            .banner-slider {
                height: 280px;
            }
        }

        .banner-track {
            display: flex;
            width: 100%;
            height: 100%;
            transition: transform 0.5s ease-in-out;
        }

        .banner-slide {
            min-width: 100%;
            height: 100%;
        }

        .banner-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .banner-dots {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 10;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: 0.3s;
        }

        .dot.active {
            background: var(--accent-color);
            width: 20px;
            border-radius: 10px;
        }

        /* Categories */
        .categories-wrapper {
            max-width: 1200px;
            margin: 15px auto 0;
            padding: 0 12px;
            overflow-x: auto;
            white-space: nowrap;
            scrollbar-width: none;
        }

        .categories-wrapper::-webkit-scrollbar {
            display: none;
        }

        .category {
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
        }

        .category.active, .category:hover {
            background: var(--accent-color);
            color: #fff;
            border-color: var(--accent-color);
        }

        /* Bottom Nav */
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

        .nav-item {
            background: none;
            border: none;
            color: var(--text-muted);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 4px;
            font-size: 0.75rem;
            cursor: pointer;
            position: relative;
        }

        .nav-item svg {
            width: 20px;
            height: 20px;
            stroke: currentColor;
        }

        .nav-item.active {
            color: var(--accent-color);
        }

        .badge {
            position: absolute;
            top: -2px;
            right: 12px;
            background: var(--accent-color);
            color: #fff;
            font-size: 0.65rem;
            padding: 2px 6px;
            border-radius: 10px;
            display: none;
        }

        .badge.show {
            display: block;
        }

        /* Main Grid */
        main {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 12px;
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

        .video-card {
            background: var(--card-bg);
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
            transition: transform 0.2s ease;
        }

        .video-card:hover {
            transform: translateY(-4px);
        }

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
        }

        .thumb-shade {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, rgba(0,0,0,0.4) 0%, transparent 40%, rgba(0,0,0,0.8) 100%);
        }

        .play-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 36px;
            height: 36px;
            background: rgba(255, 42, 95, 0.85);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: 0.2s;
        }

        .thumbnail-wrap:hover .play-overlay {
            opacity: 1;
        }

        .play-overlay svg {
            width: 16px;
            height: 16px;
            fill: #fff;
            margin-left: 2px;
        }

        .card-top {
            position: absolute;
            top: 6px;
            left: 6px;
            right: 6px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 2;
        }

        .link-badge {
            background: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(4px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 0.65rem;
            padding: 3px 6px;
            border-radius: 6px;
            cursor: pointer;
        }

        .favorite-btn {
            background: rgba(0, 0, 0, 0.6);
            border: none;
            color: #fff;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .favorite-btn.active {
            color: var(--accent-color);
        }

        .duration {
            position: absolute;
            bottom: 6px;
            right: 6px;
            background: rgba(0,0,0,0.8);
            color: #fff;
            font-size: 0.65rem;
            padding: 2px 4px;
            border-radius: 4px;
            font-weight: 600;
        }

        .card-info {
            padding: 8px;
            display: flex;
            flex-direction: column;
            gap: 6px;
            flex: 1;
        }

        .card-title {
            font-size: 0.8rem;
            line-height: 1.25;
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

        .quality {
            background: var(--border-color);
            padding: 1px 4px;
            border-radius: 3px;
            color: #fff;
            font-size: 0.6rem;
        }

        /* Detail View */
        .detail-page {
            display: none;
        }

        .back-btn {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            color: var(--text-main);
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            margin-bottom: 16px;
            font-weight: 600;
        }

        .player-container {
            width: 100%;
            aspect-ratio: 16 / 9;
            background: #000;
            border-radius: 12px;
            overflow: hidden;
            margin-bottom: 16px;
            border: 1px solid var(--border-color);
        }

        .player-container video {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .empty {
            grid-column: 1 / -1;
            text-align: center;
            padding: 60px 20px;
            color: var(--text-muted);
        }

        .toast {
            position: fixed;
            bottom: 70px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background: #fff;
            color: #000;
            padding: 10px 20px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.85rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
            transition: transform 0.3s ease;
            z-index: 1000;
            opacity: 0;
        }

        .toast.show {
            transform: translateX(-50%) translateY(0);
            opacity: 1;
        }
    </style>
</head>
<body>


    <!-- Age Verification -->
    <div id="ageOverlay" class="age-overlay">
        <div class="age-card">
            <h2>18+ Verification</h2>
            <p>You must be at least 18 years old to enter.</p>
            <div class="age-btns">
                <button class="btn btn-secondary age-decline" onclick="declineAge()">Exit</button>
                <button class="btn btn-primary" onclick="agreeAge()">I am 18 or older</button>
            </div>
        </div>
    </div>

    <!-- App Container -->
    <div id="app" style="display: none;">
        <header>
            <div class="header-container">
                <a class="logo" onclick="showHome()">SRRSORGYI</a>
                <div class="search-box">
                    <input type="text" id="searchInput" placeholder="Search videos...">
                </div>
            </div>
        </header>

<div id="container-79018c7a9cb0645bb68525c196050187"></div>

        <!-- Home Page -->
        <div id="homePage">
            <div class="banner-container">
                <div class="banner-slider">
                    <div class="banner-track" id="bannerTrack">
                        <div class="banner-slide"><img src="https://img.mpsimg.com/Bonusevent/Banner/10936JILIMMAU.webp" alt="Banner 1"></div>
                        <div class="banner-slide"><img src="https://img.mpsimg.com/Bonusevent/Banner/10945JDBBNGMMDA.webp" alt="Banner 2"></div>
                    </div>
                    <div class="banner-dots" id="bannerDots">
                        <span class="dot active" onclick="goToSlide(0)"></span>
                        <span class="dot" onclick="goToSlide(1)"></span>
                    </div>
                </div>
            </div>

            <div class="categories-wrapper" id="categories"></div>
            <main>
                <h2 class="section-title" id="homeTitle">Asian</h2>
                <div class="video-grid" id="videoGrid"></div>
            </main>
        </div>


<div id="container-79018c7a9cb0645bb68525c196050187"></div>

        <!-- Favorites Page -->
        <div id="favoritesPage" style="display: none;">
            <main>
                <h2 class="section-title">My Saved Favorites</h2>
                <div class="video-grid" id="favoriteGrid"></div>
            </main>
        </div>


        <!-- Detail Page -->
        <div id="detailPage" class="detail-page">
            <main>
                <button class="back-btn" onclick="closeDetail()">&larr; Back</button>
                <div class="player-container">
                    <!-- Added poster attribute for thumbnail support -->
                    <video id="detailVideo" controls autoplay playsinline preload="auto"></video>
                </div>
                <h1 id="detailTitle" style="font-size: 1.1rem; margin-bottom: 8px;"></h1>
                <p id="detailDescription" style="color: var(--text-muted); font-size: 0.85rem;"></p>
                
                <h2 class="section-title" style="margin-top: 30px;">Recommended</h2>
                <div class="video-grid" id="recommendationGrid"></div>
            </main>
        </div>

        <!-- Bottom Navigation -->
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
        </nav>
    </div>

    <div id="toast" class="toast"></div>

    <script>
        const FAVORITE_KEY = "general_video_favorites_v1";
        const AGE_KEY = "general_video_age_verified_v1";

        let videos = [];
        let favorites = readJSON(FAVORITE_KEY, []);
        let activeQuery = "asian";
        let currentPage = 1;
        let isLoading = false;
        let hasMoreData = true;
        let categoryList = ["Asian", "Japanese", "Korean", "Myanmar", "HD"];

        let currentSlide = 0;
        let bannerTimer = null;
        const totalSlides = 2;

        function goToSlide(index) {
            currentSlide = index;
            const track = document.getElementById('bannerTrack');
            const dots = document.querySelectorAll('.banner-dots .dot');
            if (track) track.style.transform = `translateX(-${currentSlide * 100}%)`;
            dots.forEach((dot, idx) => dot.classList.toggle('active', idx === currentSlide));
        }

        document.addEventListener("DOMContentLoaded", () => {
            setupSearch();
            buildCategories();
            checkAge();
            setupInfiniteScroll();
            renderFavoriteCount();
            
            handleRouteHash();
            window.addEventListener('hashchange', handleRouteHash);

            bannerTimer = setInterval(() => {
                currentSlide = (currentSlide + 1) % totalSlides;
                goToSlide(currentSlide);
            }, 3500);
        });

        function readJSON(key, fallback) {
            try { return JSON.parse(localStorage.getItem(key)) || fallback; } catch { return fallback; }
        }

        function saveJSON(key, value) {
            localStorage.setItem(key, JSON.stringify(value));
        }

        function getProxyUrl(originalUrl) {
            if (!originalUrl) return '';
            if (originalUrl.includes('proxy.php')) return originalUrl;
            return `https://z317922-bh22ex.ls04.zwhhosting.com/proxy.php?url=${encodeURIComponent(originalUrl)}`;
        }

        async function fetchVideosFromAPI(query, page, isAppend = false) {
            if (isLoading || (!hasMoreData && isAppend)) return;
            isLoading = true;

            const grid = document.getElementById("videoGrid");
            if (!isAppend) {
                grid.innerHTML = `<div class="empty"><h3>Loading videos...</h3></div>`;
                hasMoreData = true;
            }

            try {
                let apiUrl = `https://z317922-bh22ex.ls04.zwhhosting.com/api.php?page=${page}`;
                if (query) apiUrl += `&search=${encodeURIComponent(query)}`;

                const response = await fetch(apiUrl);
                const data = await response.json();

                if (!isAppend) grid.innerHTML = "";

                let fetchedList = [];
                if (data.status === "success" && Array.isArray(data.videos)) {
                    fetchedList = data.videos;
                } else if (Array.isArray(data)) {
                    fetchedList = data;
                } else if (data.result && Array.isArray(data.result)) {
                    fetchedList = data.result;
                }

                if (fetchedList.length > 0) {
                    const mappedVideos = fetchedList.map(item => ({
                        id: String(item.id || item.video_id || Math.random().toString(36).substring(2)),
                        title: item.title || item.name || "Untitled Video",
                        thumbnail: getProxyUrl(item.thumbnail || item.photo_link || item.image || ""),
                        video_mp4: getProxyUrl(item.video_mp4 || item.mp4 || item.url || ""),
                        duration: item.duration || "10:00",
                        quality: item.quality || "HD",
                        views: item.views || 100,
                        description: item.description || item.title || ""
                    }));

                    if (isAppend) {
                        videos = [...videos, ...mappedVideos];
                    } else {
                        videos = mappedVideos;
                    }

                    renderVideos();
                } else {
                    hasMoreData = false;
                    if (!isAppend) {
                        grid.innerHTML = `<div class="empty"><h3>No videos found</h3></div>`;
                    }
                }
            } catch (error) {
                console.error("API Error:", error);
                if (!isAppend) grid.innerHTML = `<div class="empty"><h3>Failed to load videos.</h3></div>`;
            } finally {
                isLoading = false;
            }
        }

        function setupInfiniteScroll() {
            window.addEventListener('scroll', () => {
                if (document.getElementById("favoritesPage").style.display === "block" || 
                    document.getElementById("detailPage").style.display === "block") return;

                if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 400) {
                    if (!isLoading && hasMoreData) {
                        currentPage++;
                        fetchVideosFromAPI(activeQuery, currentPage, true);
                    }
                }
            });
        }

        function buildCategories() {
            const container = document.getElementById("categories");
            container.innerHTML = categoryList.map((cat, index) => `
                <button class="category${index === 0 ? " active" : ""}" onclick="selectCategory(this, '${cat}')">${cat}</button>
            `).join("");
        }

        function selectCategory(button, catKeyword) {
            document.querySelectorAll(".category").forEach(item => item.classList.remove("active"));
            button.classList.add("active");
            activeQuery = catKeyword;
            currentPage = 1;
            hasMoreData = true;
            document.getElementById("homeTitle").textContent = catKeyword;
            fetchVideosFromAPI(activeQuery, currentPage, false);
        }

        function setupSearch() {
            document.getElementById("searchInput").addEventListener("keypress", function (e) {
                if (e.key === 'Enter') {
                    activeQuery = this.value.trim() || "asian";
                    currentPage = 1;
                    hasMoreData = true;
                    document.getElementById("homeTitle").textContent = `Search: ${activeQuery}`;
                    fetchVideosFromAPI(activeQuery, currentPage, false);
                    this.blur();
                }
            });
        }

        function renderVideos() {
            document.getElementById("videoGrid").innerHTML = videos.map(video => createCard(video)).join("");
        }

        function createCard(video) {
            const isFavorite = favorites.some(fav => fav.id === video.id);
            return `
                <article class="video-card">
                    <div class="thumbnail-wrap" onclick="openDetail('${video.id}')" style="cursor:pointer">
                        <img class="thumbnail" src="${video.thumbnail}" alt="${video.title}" loading="lazy" onerror="this.src='https://via.placeholder.com/300x169?text=No+Image'">
                        <span class="thumb-shade"></span>
                        <span class="play-overlay">
                            <svg viewBox="0 0 24 24"><path d="M8 5.14v13.72c0 .8.87 1.3 1.56.88l10.4-6.86a1.05 1.05 0 000-1.76L9.56 4.26A1.05 1.05 0 008 5.14z"/></svg>
                        </span>
                        <div class="card-top">
                            <button class="link-badge" onclick="event.stopPropagation(); copyLink('${video.id}')">Link</button>
                            <button class="favorite-btn ${isFavorite ? "active" : ""}" onclick="event.stopPropagation(); toggleFavorite('${video.id}')">&#9829;</button>
                        </div>
                        <div class="duration">${video.duration}</div>
                    </div>
                    <div class="card-info">
                        <h3 class="card-title">${video.title}</h3>
                        <div class="card-meta">
                            <span>${video.views} views</span>
                            <span class="quality">${video.quality}</span>
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
                grid.innerHTML = `<div class="empty"><h3>No favorites yet</h3></div>`;
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

        function handleRouteHash() {
            const hash = window.location.hash;
            if (hash.startsWith('#video/')) {
                const id = hash.replace('#video/', '');
                if (id) {
                    openDetail(id, true);
                }
            }
        }

        async function openDetail(id, isDirectLoad = false) {
            let video = videos.find(item => item.id === id) || favorites.find(item => item.id === id);
            
            if (!video && isDirectLoad) {
                await fetchVideosFromAPI(activeQuery, 1, false);
                video = videos.find(item => item.id === id) || favorites.find(item => item.id === id);
            }

            if (!video) return;

            window.location.hash = `video/${video.id}`;
            document.getElementById("homePage").style.display = "none";
            document.getElementById("favoritesPage").style.display = "none";
            document.getElementById("detailPage").style.display = "block";

            // Update Dynamic Meta Tags for Open Graph / Sharing
            document.getElementById("ogTitle").setAttribute("content", video.title);
            document.getElementById("ogDesc").setAttribute("content", video.description || video.title);
            document.getElementById("ogImage").setAttribute("content", video.thumbnail);
            document.title = `${video.title} - SRRSORGYI`;

            const videoElement = document.getElementById("detailVideo");
            // Set poster attribute so the thumbnail shows before video plays
            videoElement.poster = video.thumbnail;
            videoElement.src = video.video_mp4;
            videoElement.load();
            
            document.getElementById("detailTitle").textContent = video.title;
            document.getElementById("detailDescription").textContent = video.description;
            
            renderRecommendations(video.id);
            window.scrollTo({ top: 0, behavior: "smooth" });
        }

        function renderRecommendations(currentId) {
            const recGrid = document.getElementById("recommendationGrid");
            const pool = videos.length > 0 ? videos : favorites;
            const filtered = pool.filter(v => v.id !== currentId).sort(() => 0.5 - Math.random()).slice(0, 4);
            
            if (filtered.length === 0) {
                recGrid.innerHTML = `<div class="empty" style="padding: 20px;"><h3>No recommendations available</h3></div>`;
                return;
            }
            recGrid.innerHTML = filtered.map(video => createCard(video)).join("");
        }

        function closeDetail() {
            const videoElement = document.getElementById("detailVideo");
            videoElement.pause();
            videoElement.removeAttribute("src");
            videoElement.removeAttribute("poster");
            
            document.getElementById("detailPage").style.display = "none";
            document.title = "SRRSORGYI";
            history.pushState("", document.title, window.location.pathname);
            showHome();
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
            document.getElementById("favoriteNav").classList.add("active");
            window.scrollTo({ top: 0, behavior: "smooth" });
        }

        function copyLink(id) {
            navigator.clipboard?.writeText(`${window.location.origin}${window.location.pathname}#video/${id}`);
            showToast("🔗 Link copied!");
        }

        function showToast(msg) {
            const toast = document.getElementById("toast");
            toast.textContent = msg;
            toast.classList.add("show");
            setTimeout(() => toast.classList.remove("show"), 2000);
        }

        function checkAge() {
            if (localStorage.getItem(AGE_KEY) === "true") {
                document.getElementById("ageOverlay").style.display = "none";
                document.getElementById("app").style.display = "block";
                if (!window.location.hash.startsWith('#video/')) {
                    fetchVideosFromAPI(activeQuery, currentPage, false);
                }
            }
        }

        function agreeAge() {
            localStorage.setItem(AGE_KEY, "true");
            document.getElementById("ageOverlay").style.display = "none";
            document.getElementById("app").style.display = "block";
            if (!window.location.hash.startsWith('#video/')) {
                fetchVideosFromAPI(activeQuery, currentPage, false);
            }
        }

        function declineAge() {
            document.querySelector(".age-card p").textContent = "Access denied.";
        }
    </script>
	



	<script scr="ad.js"></script>









</body>
</html>
