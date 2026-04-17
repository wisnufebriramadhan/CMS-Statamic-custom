<div>

    <style>
        :root {
            --tc-navy:         #0a1628;
            --tc-blue-bright:  #2563eb;
            --tc-accent:       #3b82f6;
            --tc-accent-hover: #60a5fa;
            --header-h:        90px;
            --text-dark:       #0f172a;
            --text-mid:        #475569;
            --text-light:      #94a3b8;
            --border:          #e2e8f0;
            --hover-bg:        #f1f5f9;
            --ease:            cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* ═══════════════════════════════════════════════════
           HEADER BASE — Dark (Hero / dark bg pages)
        ═══════════════════════════════════════════════════ */
        #toru-header {
            position: fixed;
            top: 0; left: 0; right: 0;
            height: var(--header-h);
            background: linear-gradient(to bottom,
               rgba(0, 40, 99, 1)       0%,
               rgba(14, 36, 80, 0.45)  65%,
               transparent             100%);
            border-bottom: none;
            display: flex;
            align-items: center;
            z-index: 1000;
            transition: background 0.35s var(--ease), box-shadow 0.35s var(--ease), border-color 0.35s var(--ease);
        }

        /* ═══════════════════════════════════════════════════
           HEADER LIGHT PAGE VARIANT
           Tambahkan class .light-page ke <body> di halaman
           yang pakai page-bg.png (Vision, Core Values, dll)
        ═══════════════════════════════════════════════════ */
        .light-page #toru-header {
            background: linear-gradient(to bottom,
                rgba(210, 228, 252, 0.88)  0%,
                rgba(220, 234, 253, 0.60) 60%,
                transparent               100%);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(160, 200, 240, 0.30);
        }

        /* ── Logo: putih di dark, normal di light ── */
        #toru-header:not(.scrolled):not(.menu-open) .toru-logo img {
            filter: brightness(0) invert(1);
        }

        .light-page #toru-header:not(.scrolled):not(.menu-open) .toru-logo img {
            filter: none;   /* logo asli terlihat di bg terang */
        }

        /* ── Nav links: putih di dark, navy di light ── */
        #toru-navmenu > ul > li > a {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 0 12px;
            height: var(--header-h);
            font-size: 16px;
            font-weight: 600;
            letter-spacing: 0.02em;
            text-decoration: none;
            white-space: nowrap;
            cursor: pointer;
            border-bottom: 3px solid transparent;
            color: rgba(255,255,255,0.92);
            transition: color 0.2s var(--ease), border-color 0.2s var(--ease);
        }

        .light-page #toru-header:not(.scrolled):not(.menu-open) #toru-navmenu > ul > li > a {
            color: rgba(10, 30, 80, 0.85);
        }

        .light-page #toru-header:not(.scrolled):not(.menu-open) #toru-navmenu > ul > li > a:hover {
            color: var(--tc-blue-bright);
            border-bottom-color: var(--tc-blue-bright);
        }

        #toru-header:not(.scrolled):not(.menu-open) #toru-navmenu > ul > li > a:hover {
            color: #fff;
            border-bottom-color: rgba(255,255,255,0.6);
        }

        /* ── Utility buttons: putih di dark, biru-navy di light ── */
        .toru-btn-search {
            background: transparent;
            color: rgba(255,255,255,0.85);
            font-size: 14px;
            padding: 0 9px;
            border: 1px solid rgba(255,255,255,0.35) !important;
        }
        .toru-btn-search:hover { color:#fff; border-color:rgba(255,255,255,0.75)!important; }

        .toru-btn-util {
            background: transparent;
            color: rgba(255,255,255,0.92);
            border: 1px solid rgba(255,255,255,0.35) !important;
        }
        .toru-btn-util:hover { background: rgba(255,255,255,0.12); color:#fff; }

        .toru-btn-cta {
            background: var(--tc-blue-bright) !important;
            color: #fff !important;
            border: 1px solid var(--tc-blue-bright) !important;
        }
        .toru-btn-cta:hover { background: var(--tc-accent-hover)!important; border-color:var(--tc-accent-hover)!important; }

        /* Light page — utility button overrides */
        .light-page #toru-header:not(.scrolled):not(.menu-open) .toru-btn-search {
            color: rgba(10, 35, 100, 0.75);
            border-color: rgba(80, 130, 210, 0.40) !important;
        }
        .light-page #toru-header:not(.scrolled):not(.menu-open) .toru-btn-search:hover {
            color: var(--tc-blue-bright);
            border-color: rgba(37, 99, 235, 0.6) !important;
        }

        .light-page #toru-header:not(.scrolled):not(.menu-open) .toru-btn-util:not(.toru-btn-cta) {
            color: rgba(10, 35, 100, 0.85);
            border-color: rgba(80, 130, 210, 0.40) !important;
            background: rgba(200, 220, 250, 0.25);
        }
        .light-page #toru-header:not(.scrolled):not(.menu-open) .toru-btn-util:not(.toru-btn-cta):hover {
            background: rgba(180, 210, 248, 0.5);
            color: var(--tc-blue-bright);
        }

        /* ═══════════════════════════════════════════════════
           SCROLLED STATE — putih solid (berlaku semua halaman)
        ═══════════════════════════════════════════════════ */
        #toru-header.scrolled,
        #toru-header.menu-open {
            background: #ffffff;
            border-bottom: 1px solid var(--border);
            box-shadow: 0 2px 20px rgba(10,22,40,0.10);
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
        }

        /* Light page scrolled — putih lebih bersih dengan shadow biru tipis */
        .light-page #toru-header.scrolled {
            background: rgba(248, 252, 255, 0.97);
            border-bottom: 1px solid rgba(180, 210, 240, 0.5);
            box-shadow: 0 2px 20px rgba(80, 130, 210, 0.10);
        }

        /* Scrolled state nav & buttons (sama untuk dark & light) */
        #toru-header.scrolled #toru-navmenu > ul > li > a,
        #toru-header.menu-open #toru-navmenu > ul > li > a { color: var(--text-dark); }

        #toru-header.scrolled #toru-navmenu > ul > li > a:hover,
        #toru-header.menu-open #toru-navmenu > ul > li > a:hover,
        #toru-header.scrolled #toru-navmenu > ul > li.open > a,
        #toru-header.menu-open #toru-navmenu > ul > li.open > a {
            color: var(--tc-blue-bright);
            border-bottom-color: var(--tc-blue-bright);
        }

        #toru-header.scrolled .toru-btn-search,
        #toru-header.menu-open .toru-btn-search { color:var(--text-mid); border-color:var(--border)!important; }

        #toru-header.scrolled .toru-btn-util:not(.toru-btn-cta),
        #toru-header.menu-open .toru-btn-util:not(.toru-btn-cta) { color:var(--text-dark); border-color:var(--border)!important; }

        #toru-header.scrolled .toru-btn-util:not(.toru-btn-cta):hover,
        #toru-header.menu-open .toru-btn-util:not(.toru-btn-cta):hover { background:var(--hover-bg); }

        /* Logo scrolled (dark & light sama) */
        #toru-header.scrolled .toru-logo img,
        #toru-header.menu-open .toru-logo img { filter: none; }

        /* ═══════════════════════════════════════════════════
           LAYOUT STRUCTURES (tidak berubah)
        ═══════════════════════════════════════════════════ */
        .toru-header-inner {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 28px;
        }

        .toru-logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            margin-right: 32px;
            flex-shrink: 0;
        }

        .toru-logo img {
            width: 150px;
            height: auto;
            max-height: 100%;
            object-fit: contain;
            display: block;
            transition: filter 0.3s var(--ease);
        }

        #toru-navmenu {
            display: flex;
            align-items: center;
            flex: 1;
        }

        #toru-navmenu > ul {
            list-style: none;
            display: flex;
            align-items: center;
            flex: 1;
            margin: 0; padding: 0;
        }

        #toru-navmenu > ul > li { position: static; flex-shrink: 0; }

        #toru-navmenu > ul > li > a i.toru-chevron {
            font-size: 10px;
            transition: transform 0.25s var(--ease);
        }
        #toru-navmenu > ul > li.open > a i.toru-chevron { transform: rotate(180deg); }

        .toru-nav-utils {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-left: 8px;
            flex-shrink: 0;
        }

        .toru-nav-utils a,
        .toru-nav-utils button {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            height: 34px;
            padding: 0 12px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.04em;
            text-decoration: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: inherit;
            white-space: nowrap;
            transition: all 0.22s var(--ease);
        }

        /* ─── MEGA PANEL ─── */
        .toru-mega-panel {
            display: none;
            position: fixed;
            top: var(--header-h);
            left: 0; right: 0;
            background: #ffffff;
            border-top: 3px solid var(--tc-blue-bright);
            box-shadow: 0 20px 60px rgba(10,22,40,0.14);
            z-index: 999;
            animation: toruMegaIn 0.2s var(--ease) forwards;
        }

        @keyframes toruMegaIn {
            from { opacity:0; transform:translateY(-6px); }
            to   { opacity:1; transform:translateY(0); }
        }

        .toru-mega-panel.visible { display: block; }

        .toru-mega-inner {
            max-width: 1280px;
            margin: 0 auto;
            padding: 32px 40px 36px;
        }

        .toru-eyebrow {
            font-size: 10px; font-weight: 700;
            letter-spacing: 0.15em; text-transform: uppercase;
            color: var(--tc-blue-bright); margin-bottom: 8px; display: block;
        }

        .toru-mega-panel h2 {
            font-size: 20px; font-weight: 800;
            color: var(--text-dark); margin-bottom: 8px; letter-spacing: -0.01em;
        }

        .toru-mega-panel p {
            font-size: 13px; color: var(--text-mid);
            line-height: 1.6; margin-bottom: 16px;
        }

        .toru-panel-cta {
            display: inline-flex; align-items: center; gap: 7px;
            font-size: 11px; font-weight: 700;
            letter-spacing: 0.07em; text-transform: uppercase;
            color: var(--tc-blue-bright); text-decoration: none;
            transition: gap 0.2s;
        }
        .toru-panel-cta:hover { gap: 11px; }

        .toru-col-label {
            font-size: 10px; font-weight: 700;
            letter-spacing: 0.13em; text-transform: uppercase;
            color: var(--text-light); margin-bottom: 6px;
            padding-bottom: 6px; border-bottom: 1px solid var(--border); display: block;
        }

        /* ─── TC LAYOUT ─── */
        .toru-tc-layout {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 40px;
            align-items: start;
        }

        .toru-tc-cols {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6px 28px;
        }

        .toru-tc-col { display: flex; flex-direction: column; gap: 2px; }

        .toru-tc-link {
            display: flex; align-items: flex-start; gap: 12px;
            padding: 10px 12px; border-radius: 8px; text-decoration: none;
            transition: background 0.18s;
        }
        .toru-tc-link:hover { background: var(--hover-bg); }
        .toru-tc-link:hover .toru-tc-icon { background: var(--tc-blue-bright); color: #fff; }

        .toru-tc-icon {
            width: 34px; height: 34px; background: #eff6ff; border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 15px; color: var(--tc-blue-bright); flex-shrink: 0;
            transition: all 0.18s;
        }

        .toru-tc-content { display: flex; flex-direction: column; gap: 1px; }
        .toru-tc-title { font-size: 13.5px; font-weight: 600; color: var(--text-dark); display: block; }
        .toru-tc-sub   { font-size: 12px; color: var(--text-mid); display: block; line-height: 1.35; }

        /* ─── SPLIT LAYOUT ─── */
        .toru-split {
            display: grid;
            grid-template-columns: 220px 180px auto;
            gap: 40px;
            align-items: start;
        }

        .toru-plain-link {
            display: flex; align-items: center; gap: 4px;
            padding: 9px 0; font-size: 15px; font-weight: 500;
            color: var(--text-dark); text-decoration: none;
            border-bottom: 1px solid var(--border);
            transition: color 0.18s, padding-left 0.18s;
        }
        .toru-plain-link:last-child { border-bottom: none; }
        .toru-plain-link:hover { color: var(--tc-blue-bright); padding-left: 5px; }
        .toru-plain-link i { color: var(--tc-blue-bright); }

        /* ─── SVG ILLUSTRATION BOX ─── */
        .toru-illus {
            width: 100%;
            border-radius: 12px;
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            box-sizing: border-box;
        }

        .toru-illus svg {
            width: 100%;
            max-width: 200px;
            height: auto;
        }

        /* ─── AI DUAL ─── */
        .toru-ai-dual {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .toru-ai-card {
            display: flex; flex-direction: column; gap: 10px;
            padding: 22px; background: #f8fafc;
            border: 1px solid var(--border); border-radius: 10px;
            text-decoration: none; color: inherit;
            transition: all 0.25s var(--ease);
        }
        .toru-ai-card:hover {
            background: var(--tc-navy); border-color: var(--tc-navy);
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(10,22,40,0.18);
        }
        .toru-ai-card:hover h3, .toru-ai-card:hover p { color:#fff; }
        .toru-ai-card:hover .toru-ai-arrow { color: var(--tc-accent-hover); }

        .toru-ai-tag {
            font-size: 10px; font-weight: 700;
            letter-spacing: 0.1em; text-transform: uppercase;
            background: var(--tc-blue-bright); color: #fff;
            padding: 3px 8px; border-radius: 3px;
            width: fit-content; display: inline-block;
        }

        .toru-ai-card h3 { font-size: 17px; font-weight: 700; color: var(--text-dark); margin:0; transition: color 0.2s; }
        .toru-ai-card p  { font-size: 13px; color: var(--text-mid); line-height: 1.6; margin:0; transition: color 0.2s; }

        .toru-ai-arrow {
            display: flex; align-items: center; gap: 6px;
            font-size: 11px; font-weight: 700; letter-spacing: 0.06em;
            text-transform: uppercase; color: var(--tc-blue-bright);
            margin-top: auto; transition: color 0.2s;
        }

        /* overlay */
        .toru-overlay {
            display: none; position: fixed;
            top: var(--header-h); left:0; right:0; bottom:0;
            background: rgba(10,22,40,0.3);
            backdrop-filter: blur(2px); z-index: 998;
        }
        .toru-overlay.visible { display: block; }

        /* ═══════════════════════════════════════
           HAMBURGER BUTTON
        ═══════════════════════════════════════ */
        .toru-hamburger {
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
            width: 40px;
            height: 40px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.35) !important;
            border-radius: 6px;
            cursor: pointer;
            padding: 0;
            margin-left: auto;
            flex-shrink: 0;
            transition: all 0.22s var(--ease);
        }

        .toru-hamburger span {
            display: block;
            width: 18px;
            height: 2px;
            background: rgba(255,255,255,0.92);
            border-radius: 2px;
            transition: all 0.3s var(--ease);
            transform-origin: center;
        }

        /* Light page hamburger */
        .light-page #toru-header:not(.scrolled):not(.drawer-open) .toru-hamburger {
            border-color: rgba(80, 130, 210, 0.40) !important;
        }
        .light-page #toru-header:not(.scrolled):not(.drawer-open) .toru-hamburger span {
            background: rgba(10, 35, 100, 0.80);
        }

        /* scrolled/open state hamburger */
        #toru-header.scrolled .toru-hamburger,
        #toru-header.menu-open .toru-hamburger,
        #toru-header.drawer-open .toru-hamburger {
            border-color: var(--border) !important;
        }

        #toru-header.scrolled .toru-hamburger span,
        #toru-header.menu-open .toru-hamburger span,
        #toru-header.drawer-open .toru-hamburger span {
            background: var(--text-dark);
        }

        /* hamburger → X animation */
        .toru-hamburger.active span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
        .toru-hamburger.active span:nth-child(2) { opacity: 0; transform: scaleX(0); }
        .toru-hamburger.active span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

        /* ═══════════════════════════════════════
           MOBILE DRAWER
        ═══════════════════════════════════════ */
        .toru-mobile-drawer {
            display: none;
            position: fixed;
            top: var(--header-h);
            left: 0; right: 0;
            bottom: 0;
            background: #ffffff;
            z-index: 997;
            overflow-y: auto;
            transform: translateX(-100%);
            transition: transform 0.35s var(--ease);
        }

        .toru-mobile-drawer.open {
            transform: translateX(0);
        }

        .toru-mobile-nav {
            padding: 16px 0 40px;
        }

        .toru-mob-item {
            border-bottom: 1px solid var(--border);
        }

        .toru-mob-item > a,
        .toru-mob-trigger {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 24px;
            font-size: 15px;
            font-weight: 600;
            color: var(--text-dark);
            text-decoration: none;
            background: transparent;
            border: none;
            width: 100%;
            cursor: pointer;
            font-family: inherit;
            text-align: left;
            transition: background 0.18s, color 0.18s;
        }

        .toru-mob-item > a:hover,
        .toru-mob-trigger:hover {
            background: var(--hover-bg);
            color: var(--tc-blue-bright);
        }

        .toru-mob-trigger i.toru-mob-chevron {
            font-size: 12px;
            color: var(--text-light);
            transition: transform 0.25s var(--ease);
            flex-shrink: 0;
        }

        .toru-mob-item.open > .toru-mob-trigger i.toru-mob-chevron {
            transform: rotate(180deg);
        }

        .toru-mob-submenu {
            display: none;
            background: #f8fafc;
            padding: 8px 0;
            border-top: 1px solid var(--border);
        }

        .toru-mob-item.open > .toru-mob-submenu {
            display: block;
        }

        .toru-mob-sub-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--text-light);
            padding: 12px 24px 6px;
            display: block;
        }

        .toru-mob-sublink {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 12px 24px;
            font-size: 14px;
            font-weight: 500;
            color: var(--text-dark);
            text-decoration: none;
            transition: background 0.18s, color 0.18s;
        }

        .toru-mob-sublink:hover {
            background: var(--hover-bg);
            color: var(--tc-blue-bright);
        }

        .toru-mob-sublink i.bi-arrow-right-short {
            color: var(--tc-blue-bright);
            font-size: 16px;
        }

        .toru-mob-utils {
            padding: 20px 24px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            border-top: 1px solid var(--border);
            margin-top: 8px;
        }

        .toru-mob-utils a {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 44px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.22s var(--ease);
        }

        .toru-mob-contact {
            background: var(--hover-bg);
            color: var(--text-dark);
            border: 1px solid var(--border);
        }

        .toru-mob-contact:hover { background: var(--border); }

        .toru-mob-career {
            background: var(--tc-blue-bright);
            color: #fff !important;
        }

        .toru-mob-career:hover { background: var(--tc-accent-hover); }

        /* ═══════════════════════════════════════
           RESPONSIVE BREAKPOINTS
        ═══════════════════════════════════════ */
        @media (max-width: 1024px) {
            #toru-navmenu { display: none; }
            .toru-hamburger { display: flex; }
            .toru-mobile-drawer { display: block; }

            #toru-header {
                background: rgba(10,22,40,0.85);
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
            }

            /* Light page mobile: semi-transparan light */
            .light-page #toru-header {
                background: rgba(210, 228, 252, 0.85);
                backdrop-filter: blur(14px);
                -webkit-backdrop-filter: blur(14px);
            }

            #toru-header.scrolled,
            #toru-header.drawer-open {
                background: #ffffff !important;
                backdrop-filter: none !important;
                -webkit-backdrop-filter: none !important;
                border-bottom: 1px solid var(--border);
                box-shadow: 0 2px 16px rgba(10,22,40,0.10);
            }

            #toru-header.drawer-open .toru-logo img,
            #toru-header.scrolled .toru-logo img {
                filter: none;
            }

            #toru-header:not(.scrolled):not(.drawer-open) .toru-logo img {
                filter: brightness(0) invert(1);
            }

            /* Light page mobile logo */
            .light-page #toru-header:not(.scrolled):not(.drawer-open) .toru-logo img {
                filter: none;
            }

            .toru-header-inner {
                padding: 0 20px;
            }

            :root { --header-h: 64px; }

            .toru-logo img {
                width: 120px;
                margin-top: 10px;
            }
        }

        @media (max-width: 480px) {
            .toru-header-inner { padding: 0 16px; }
            .toru-logo img { width: 100px; margin-top: 10px; }
        }
    </style>

    <div class="toru-overlay" id="toru-overlay"></div>

    <header id="toru-header">
        <div class="toru-header-inner">
            <a href="/" class="toru-logo">
                <img src="/assets/img/toru-icon.png" alt="Torucorp" />
            </a>
            <nav id="toru-navmenu">
                <ul>
                    <li class="toru-dropdown" data-menu="tc">
                        <a href="#"><span>This is Torucorp.</span></a>
                    </li>
                    <li class="toru-dropdown" data-menu="construction">
                        <a href="#"><span>Construction</span><i class="bi bi-chevron-down toru-chevron"></i></a>
                    </li>
                    <li class="toru-dropdown" data-menu="teras">
                        <a href="#"><span>Teras Depan</span><i class="bi bi-chevron-down toru-chevron"></i></a>
                    </li>
                    <li class="toru-dropdown" data-menu="ai">
                        <a href="#"><span>AI Solution</span><i class="bi bi-chevron-down toru-chevron"></i></a>
                    </li>
                    <li><a href="/digital-solution"><span>Digital Solution</span></a></li>
                    <li><a href="/article"><span>Spotlight</span></a></li>
                    <li><a href="/whistleblowing"><span>Whistleblowing</span></a></li>
                    <li style="flex:1;pointer-events:none;"></li>
                </ul>
                <div class="toru-nav-utils">
                    <button class="toru-btn-search" title="Search"><i class="bi bi-search"></i></button>
                    <a href="/contact-us" class="toru-btn-util">Contact Us</a>
                    <a href="/careers" class="toru-btn-util toru-btn-cta">Career <i class="bi bi-arrow-right"></i></a>
                </div>
            </nav>

            <button class="toru-hamburger" id="toru-hamburger" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    {{-- ── MOBILE DRAWER ── --}}
    <div class="toru-mobile-drawer" id="toru-mobile-drawer">
        <nav class="toru-mobile-nav">

            <div class="toru-mob-item">
                <button class="toru-mob-trigger">
                    This is Torucorp.
                    <i class="bi bi-chevron-down toru-mob-chevron"></i>
                </button>
                <div class="toru-mob-submenu">
                    <span class="toru-mob-sub-label">Company</span>
                    <a href="/about-torucorp" class="toru-mob-sublink"><i class="bi bi-building"></i> About Torucorp</a>
                    <a href="/corporate-value-culture" class="toru-mob-sublink"><i class="bi bi-stars"></i> Corporate Value & Culture</a>
                    <a href="/torucorp-businesses" class="toru-mob-sublink"><i class="bi bi-diagram-3"></i> Torucorp Businesses</a>
                    <span class="toru-mob-sub-label">Governance</span>
                    <a href="#" class="toru-mob-sublink"><i class="bi bi-people"></i> Management Boards</a>
                    <a href="/governance-compliance" class="toru-mob-sublink"><i class="bi bi-shield-check"></i> Governance & Compliance</a>
                    <a href="/open-collaboration" class="toru-mob-sublink"><i class="bi bi-handshake"></i> Open Collaboration</a>
                </div>
            </div>

            <div class="toru-mob-item">
                <button class="toru-mob-trigger">
                    Construction
                    <i class="bi bi-chevron-down toru-mob-chevron"></i>
                </button>
                <div class="toru-mob-submenu">
                    <span class="toru-mob-sub-label">Project Types</span>
                    <a href="/villa-luxury-house" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Villa & Luxury House</a>
                    <a href="/industrial" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Industrial</a>
                    <a href="/residential" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Residential</a>
                    <a href="/office" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Office</a>
                    <a href="/restaurant-and-coffee-shop" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Restaurant & Coffee Shop</a>
                </div>
            </div>

            <div class="toru-mob-item">
                <button class="toru-mob-trigger">
                    Teras Depan
                    <i class="bi bi-chevron-down toru-mob-chevron"></i>
                </button>
                <div class="toru-mob-submenu">
                    <span class="toru-mob-sub-label">Explore</span>
                    <a href="/interior" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Interior</a>
                    <a href="/our-workshop" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Our Workshop</a>
                    <a href="#" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Furniture</a>
                    <a href="#" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Decorative Artificial</a>
                    <a href="#" class="toru-mob-sublink"><i class="bi bi-arrow-right-short"></i> Handy Craft</a>
                </div>
            </div>

            <div class="toru-mob-item">
                <button class="toru-mob-trigger">
                    AI Solution
                    <i class="bi bi-chevron-down toru-mob-chevron"></i>
                </button>
                <div class="toru-mob-submenu">
                    <span class="toru-mob-sub-label">Products</span>
                    <a href="/academy-of-ai" class="toru-mob-sublink"><i class="bi bi-mortarboard"></i> Academy of AI</a>
                    <a href="/viralin" class="toru-mob-sublink"><i class="bi bi-lightning"></i> Viralin</a>
                </div>
            </div>

            <div class="toru-mob-item">
                <a href="/digital-solution" class="toru-mob-sublink" style="padding:16px 24px;">Digital Solution</a>
            </div>
            <div class="toru-mob-item">
                <a href="/article" class="toru-mob-sublink" style="padding:16px 24px;">Spotlight</a>
            </div>
            <div class="toru-mob-item">
                <a href="/whistleblowing" class="toru-mob-sublink" style="padding:16px 24px;">Whistleblowing</a>
            </div>

            <div class="toru-mob-utils">
                <a href="/contact-us" class="toru-mob-contact">Contact Us</a>
                <a href="/careers" class="toru-mob-career">Career →</a>
            </div>

        </nav>
    </div>

    {{-- ── Panel: This is Torucorp ── --}}
    <div class="toru-mega-panel" id="toru-menu-tc">
        <div class="toru-mega-inner">
            <div class="toru-tc-layout">
                <div>
                    <span class="toru-eyebrow">Who We Are</span>
                    <h2>This is Torucorp.</h2>
                    <p>Discover Torucorp's identity, values, business pillars, leadership, and governance.</p>
                    <a href="/about-torucorp" class="toru-panel-cta">Get to know us <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="toru-tc-cols">
                    <div class="toru-tc-col">
                        <span class="toru-col-label">Company</span>
                        <a href="/about-torucorp" class="toru-tc-link">
                            <span class="toru-tc-icon"><i class="bi bi-building"></i></span>
                            <span class="toru-tc-content">
                                <span class="toru-tc-title">About Torucorp</span>
                                <span class="toru-tc-sub">Who we are and what we stand for.</span>
                            </span>
                        </a>
                        <a href="/corporate-value-culture" class="toru-tc-link">
                            <span class="toru-tc-icon"><i class="bi bi-stars"></i></span>
                            <span class="toru-tc-content">
                                <span class="toru-tc-title">Corporate Value & Culture</span>
                                <span class="toru-tc-sub">Principles that shape our organization.</span>
                            </span>
                        </a>
                        <a href="/torucorp-businesses" class="toru-tc-link">
                            <span class="toru-tc-icon"><i class="bi bi-diagram-3"></i></span>
                            <span class="toru-tc-content">
                                <span class="toru-tc-title">Torucorp Businesses</span>
                                <span class="toru-tc-sub">Explore our business portfolio.</span>
                            </span>
                        </a>
                    </div>
                    <div class="toru-tc-col">
                        <span class="toru-col-label">Governance</span>
                        <a href="#" class="toru-tc-link">
                            <span class="toru-tc-icon"><i class="bi bi-people"></i></span>
                            <span class="toru-tc-content">
                                <span class="toru-tc-title">Management Boards</span>
                                <span class="toru-tc-sub">Meet the leadership behind Torucorp.</span>
                            </span>
                        </a>
                        <a href="/governance-compliance" class="toru-tc-link">
                            <span class="toru-tc-icon"><i class="bi bi-shield-check"></i></span>
                            <span class="toru-tc-content">
                                <span class="toru-tc-title">Governance & Compliance</span>
                                <span class="toru-tc-sub">Our standards of integrity & control.</span>
                            </span>
                        </a>
                        <a href="/open-collaboration" class="toru-tc-link">
                            <span class="toru-tc-icon"><i class="bi bi-handshake"></i></span>
                            <span class="toru-tc-content">
                                <span class="toru-tc-title">Open Collaboration</span>
                                <span class="toru-tc-sub">Partner with us to grow together.</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ── Panel: Construction ── --}}
    <div class="toru-mega-panel" id="toru-menu-construction">
        <div class="toru-mega-inner">
            <div class="toru-split">
                <div>
                    <span class="toru-eyebrow">Our Services</span>
                    <h2>Construction</h2>
                    <p>Delivering exceptional builds — from luxury villas to large-scale industrial and commercial spaces — with precision, craft, and integrity.</p>
                    <a href="/construction" class="toru-panel-cta">View all projects <i class="bi bi-arrow-right"></i></a>
                </div>
                <div>
                    <span class="toru-col-label">Project Types</span>
                    <a href="/villa-luxury-house" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Villa & Luxury House</a>
                    <a href="/industrial" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Industrial</a>
                    <a href="/residential" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Residential</a>
                    <a href="/office" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Office</a>
                    <a href="/restaurant-and-coffee-shop" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Restaurant & Coffee Shop</a>
                </div>
                <div class="toru-illus">
                    <svg viewBox="0 0 200 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="200" height="160" rx="8" fill="#EFF6FF"/>
                        <rect y="130" width="200" height="30" rx="0" fill="#DBEAFE"/>
                        <rect x="75" y="30" width="50" height="100" rx="3" fill="#93C5FD"/>
                        <rect x="83" y="40" width="10" height="10" rx="1" fill="#2563EB" opacity="0.6"/>
                        <rect x="97" y="40" width="10" height="10" rx="1" fill="#2563EB" opacity="0.6"/>
                        <rect x="83" y="56" width="10" height="10" rx="1" fill="#2563EB" opacity="0.6"/>
                        <rect x="97" y="56" width="10" height="10" rx="1" fill="#2563EB" opacity="0.6"/>
                        <rect x="83" y="72" width="10" height="10" rx="1" fill="#2563EB" opacity="0.6"/>
                        <rect x="97" y="72" width="10" height="10" rx="1" fill="#2563EB" opacity="0.6"/>
                        <rect x="83" y="88" width="10" height="10" rx="1" fill="#2563EB" opacity="0.6"/>
                        <rect x="97" y="88" width="10" height="10" rx="1" fill="#2563EB" opacity="0.6"/>
                        <rect x="89" y="112" width="14" height="18" rx="1" fill="#1D4ED8"/>
                        <rect x="20" y="60" width="45" height="70" rx="3" fill="#BFDBFE"/>
                        <rect x="28" y="68" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="40" y="68" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="52" y="68" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="28" y="82" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="40" y="82" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="52" y="82" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="28" y="96" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="40" y="96" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="52" y="96" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="135" y="50" width="45" height="80" rx="3" fill="#BFDBFE"/>
                        <rect x="143" y="60" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="155" y="60" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="167" y="60" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="143" y="74" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="155" y="74" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="167" y="74" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="143" y="88" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="155" y="88" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <rect x="167" y="88" width="8" height="8" rx="1" fill="#3B82F6" opacity="0.5"/>
                        <line x1="158" y1="50" x2="158" y2="10" stroke="#2563EB" stroke-width="2"/>
                        <line x1="140" y1="12" x2="175" y2="12" stroke="#2563EB" stroke-width="2"/>
                        <circle cx="175" cy="14" r="3" fill="#2563EB"/>
                        <rect x="92" y="134" width="16" height="4" rx="2" fill="white" opacity="0.7"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- ── Panel: Teras Depan ── --}}
    <div class="toru-mega-panel" id="toru-menu-teras">
        <div class="toru-mega-inner">
            <div class="toru-split">
                <div>
                    <span class="toru-eyebrow">Design & Craft</span>
                    <h2>Teras Depan</h2>
                    <p>Curated front-space design for homes, villas, and commercial spaces with thoughtful interior & decorative elements.</p>
                    <a href="/teras-depan" class="toru-panel-cta">Explore Teras Depan <i class="bi bi-arrow-right"></i></a>
                </div>
                <div>
                    <span class="toru-col-label">Explore</span>
                    <a href="/interior" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Interior</a>
                    <a href="/our-workshop" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Our Workshop</a>
                    <a href="#" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Furniture</a>
                    <a href="#" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Decorative Artificial</a>
                    <a href="#" class="toru-plain-link"><i class="bi bi-arrow-right-short"></i> Handy Craft</a>
                </div>
                <div class="toru-illus">
                    <svg viewBox="0 0 200 160" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="200" height="160" rx="8" fill="#EFF6FF"/>
                        <rect x="10" y="110" width="180" height="40" rx="3" fill="#DBEAFE"/>
                        <rect x="10" y="30" width="180" height="82" fill="#EFF6FF"/>
                        <rect x="10" y="30" width="180" height="4" fill="#BFDBFE"/>
                        <rect x="70" y="44" width="60" height="50" rx="4" fill="#BFDBFE" stroke="#93C5FD" stroke-width="2"/>
                        <line x1="100" y1="44" x2="100" y2="94" stroke="#93C5FD" stroke-width="1.5"/>
                        <line x1="70" y1="69" x2="130" y2="69" stroke="#93C5FD" stroke-width="1.5"/>
                        <path d="M70 44 Q60 60 65 94" stroke="#60A5FA" stroke-width="3" fill="none"/>
                        <path d="M130 44 Q140 60 135 94" stroke="#60A5FA" stroke-width="3" fill="none"/>
                        <rect x="30" y="100" width="80" height="14" rx="4" fill="#3B82F6"/>
                        <rect x="28" y="96" width="84" height="8" rx="4" fill="#2563EB"/>
                        <rect x="28" y="96" width="8" height="18" rx="2" fill="#1D4ED8"/>
                        <rect x="104" y="96" width="8" height="18" rx="2" fill="#1D4ED8"/>
                        <rect x="42" y="97" width="20" height="7" rx="3" fill="#60A5FA"/>
                        <rect x="68" y="97" width="20" height="7" rx="3" fill="#60A5FA"/>
                        <rect x="120" y="104" width="30" height="6" rx="2" fill="#93C5FD"/>
                        <rect x="127" y="110" width="4" height="10" rx="1" fill="#93C5FD"/>
                        <rect x="139" y="110" width="4" height="10" rx="1" fill="#93C5FD"/>
                        <rect x="130" y="96" width="8" height="8" rx="1" fill="#BFDBFE"/>
                        <line x1="134" y1="96" x2="134" y2="104" stroke="#60A5FA" stroke-width="1.5"/>
                        <rect x="158" y="108" width="8" height="12" rx="1" fill="#BFDBFE"/>
                        <ellipse cx="162" cy="102" rx="10" ry="10" fill="#60A5FA" opacity="0.4"/>
                        <ellipse cx="156" cy="104" rx="8" ry="8" fill="#3B82F6" opacity="0.4"/>
                        <ellipse cx="168" cy="105" rx="7" ry="7" fill="#2563EB" opacity="0.3"/>
                        <line x1="10" y1="110" x2="190" y2="110" stroke="#BFDBFE" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- ── Panel: AI Solution ── --}}
    <div class="toru-mega-panel" id="toru-menu-ai">
        <div class="toru-mega-inner">
            <span class="toru-eyebrow" style="margin-bottom:16px;">AI Solutions by Torucorp</span>
            <div class="toru-ai-dual">
                <a href="/academy-of-ai" class="toru-ai-card">
                    <span class="toru-ai-tag">Education</span>
                    <h3>Academy of AI</h3>
                    <p>Elevate your skills with world-class AI training programs, crafted for future innovators and industry professionals.</p>
                    <div class="toru-ai-arrow">Explore <i class="bi bi-arrow-right"></i></div>
                </a>
                <a href="/viralin" class="toru-ai-card">
                    <span class="toru-ai-tag">Automation</span>
                    <h3>Viralin</h3>
                    <p>Intelligent automation designed to boost business engagement, accelerate content growth, and maximize digital impact.</p>
                    <div class="toru-ai-arrow">Explore <i class="bi bi-arrow-right"></i></div>
                </a>
            </div>
        </div>
    </div>

    <script>
    (function () {
        var header  = document.getElementById('toru-header');
        var overlay = document.getElementById('toru-overlay');
        var items   = document.querySelectorAll('.toru-dropdown[data-menu]');
        var active  = null, closeTimer = null;

        function openMenu(id) {
            clearTimeout(closeTimer);
            if (active === id) return;
            document.querySelectorAll('.toru-mega-panel').forEach(function(p){ p.classList.remove('visible'); });
            items.forEach(function(i){ i.classList.remove('open'); });
            var panel = document.getElementById('toru-menu-' + id);
            if (!panel) return;
            panel.classList.add('visible');
            overlay.classList.add('visible');
            header.classList.add('menu-open');
            active = id;
            items.forEach(function(i){ if (i.dataset.menu === id) i.classList.add('open'); });
        }

        function closeAll() {
            closeTimer = setTimeout(function () {
                document.querySelectorAll('.toru-mega-panel').forEach(function(p){ p.classList.remove('visible'); });
                items.forEach(function(i){ i.classList.remove('open'); });
                overlay.classList.remove('visible');
                if (!header.classList.contains('scrolled')) header.classList.remove('menu-open');
                active = null;
            }, 100);
        }

        items.forEach(function(item) {
            item.addEventListener('mouseenter', function(){ openMenu(item.dataset.menu); });
            item.addEventListener('mouseleave', closeAll);
        });

        document.querySelectorAll('.toru-mega-panel').forEach(function(p) {
            p.addEventListener('mouseenter', function(){ clearTimeout(closeTimer); });
            p.addEventListener('mouseleave', closeAll);
        });

        overlay.addEventListener('mouseenter', closeAll);

        function onScroll() {
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
                if (active) header.classList.add('menu-open');
            }
        }

        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll();

        /* ── MOBILE DRAWER ── */
        var hamburger = document.getElementById('toru-hamburger');
        var drawer    = document.getElementById('toru-mobile-drawer');

        function openDrawer() {
            drawer.classList.add('open');
            hamburger.classList.add('active');
            header.classList.add('drawer-open');
            document.body.style.overflow = 'hidden';
        }

        function closeDrawer() {
            drawer.classList.remove('open');
            hamburger.classList.remove('active');
            header.classList.remove('drawer-open');
            document.body.style.overflow = '';
        }

        hamburger.addEventListener('click', function () {
            if (drawer.classList.contains('open')) { closeDrawer(); }
            else { openDrawer(); }
        });

        document.querySelectorAll('.toru-mob-trigger').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var parent = btn.closest('.toru-mob-item');
                var isOpen = parent.classList.contains('open');
                document.querySelectorAll('.toru-mob-item.open').forEach(function (el) {
                    el.classList.remove('open');
                });
                if (!isOpen) { parent.classList.add('open'); }
            });
        });

        drawer.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', closeDrawer);
        });
    })();
    </script>

</div>