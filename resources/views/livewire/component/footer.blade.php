<footer id="footer" class="toru-footer">

    <div class="toru-footer-bg" aria-hidden="true">
        <div class="toru-footer-grid"></div>
        <div class="toru-footer-glow-left"></div>
        <div class="toru-footer-glow-right"></div>
    </div>

    <div class="toru-footer-inner">

        {{-- ─── TOP ROW: Brand + Tagline + Social ─── --}}
        <div class="toru-footer-top">
            <div class="toru-footer-brand">
                <a href="/" class="toru-footer-logo">
                    <span>Torucorp<em>.</em></span>
                </a>
                <p class="toru-footer-tagline">
                    Building a dignified legacy through construction excellence, design craft, and digital innovation.
                </p>
            </div>

            <div class="toru-footer-social-block">
                <span class="toru-footer-social-label">Follow Us</span>
                <div class="toru-footer-socials">
                    <a href="#" aria-label="Twitter / X" class="toru-social-btn"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" aria-label="Facebook" class="toru-social-btn"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram" class="toru-social-btn"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn" class="toru-social-btn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>

        {{-- ─── THIN RULE ─── --}}
        <div class="toru-footer-rule"></div>

        {{-- ─── MAIN GRID: Nav + Contact ─── --}}
        <div class="toru-footer-main">

            <div class="toru-footer-col">
                <h5>This is Torucorp</h5>
                <ul>
                    <li><a href="/about-torucorp">About Torucorp</a></li>
                    <li><a href="/corporate-value-culture">Values & Culture</a></li>
                    <li><a href="/torucorp-businesses">Our Businesses</a></li>
                    <li><a href="#">Management Boards</a></li>
                    <li><a href="/governance-compliance">Governance & Compliance</a></li>
                    <li><a href="/open-collaboration">Open Collaboration</a></li>
                </ul>
            </div>

            <div class="toru-footer-col">
                <h5>Construction</h5>
                <ul>
                    <li><a href="/villa-luxury-house">Villa & Luxury House</a></li>
                    <li><a href="/industrial">Industrial</a></li>
                    <li><a href="/residential">Residential</a></li>
                    <li><a href="/office">Office</a></li>
                    <li><a href="/restaurant-and-coffee-shop">Restaurant & Coffee Shop</a></li>
                </ul>
                <h5 class="mt">Teras Depan</h5>
                <ul>
                    <li><a href="/interior">Interior</a></li>
                    <li><a href="/our-workshop">Our Workshop</a></li>
                    <li><a href="#">Furniture</a></li>
                    <li><a href="#">Decorative Artificial</a></li>
                    <li><a href="#">Handy Craft</a></li>
                </ul>
            </div>

            <div class="toru-footer-col">
                <h5>AI & Digital</h5>
                <ul>
                    <li><a href="/academy-of-ai">Academy of AI</a></li>
                    <li><a href="/viralin">Viralin</a></li>
                    <li><a href="/digital-solution">Digital Solution</a></li>
                </ul>
                <h5 class="mt">More</h5>
                <ul>
                    <li><a href="/article">Spotlight</a></li>
                    <li><a href="/careers">Career</a></li>
                    <li><a href="/whistleblowing">Whistleblowing</a></li>
                    <li><a href="/contact-us">Contact Us</a></li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div class="toru-footer-col toru-footer-contact-col">
                <h5>Get in Touch</h5>
                <p class="toru-company-name">PT. TARUWARA KARYA PERSADA</p>
                <div class="toru-contact-block">
                    <div class="toru-contact-row">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Apartment Kalibata City, 20th Floor,<br>Tower Herbras, Jakarta Selatan</span>
                    </div>
                    <div class="toru-contact-row">
                        <i class="bi bi-telephone-fill"></i>
                        <a href="tel:+6281222770003">+62 812 2277 0003</a>
                    </div>
                    <div class="toru-contact-row">
                        <i class="bi bi-envelope-fill"></i>
                        <a href="mailto:admin@torucorp.id">admin@torucorp.id</a>
                    </div>
                </div>
                <a href="/contact-us" class="toru-footer-cta">
                    Send a Message <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>

        {{-- ─── BOTTOM BAR ─── --}}
        <div class="toru-footer-divider"></div>

        <div class="toru-footer-bottom">
            <p class="toru-footer-copy">
                © {{ date('Y') }} <strong>Torucorp.</strong> — PT. Taruwara Karya Persada. All Rights Reserved.
            </p>
            <div class="toru-footer-legal">
                <a href="/privacy-policy">Privacy Policy</a>
                <span class="dot">·</span>
                <a href="/terms">Terms of Use</a>
                <span class="dot">·</span>
                <a href="/whistleblowing">Whistleblowing</a>
            </div>
        </div>

    </div>

    <style>
        /* ═══════════════════════════════
           TORUCORP FOOTER
        ═══════════════════════════════ */
        .toru-footer {
            position: relative;
            background: #002863;
            overflow: hidden;
        }

        .toru-footer-bg { position: absolute; inset: 0; pointer-events: none; }

        .toru-footer-grid {
            position: absolute; inset: 0;
            background-image: radial-gradient(rgba(59,130,246,0.10) 1px, transparent 1px);
            background-size: 28px 28px;
            mask-image: linear-gradient(to bottom, transparent, rgba(0,0,0,0.5) 25%, rgba(0,0,0,0.5) 75%, transparent);
            -webkit-mask-image: linear-gradient(to bottom, transparent, rgba(0,0,0,0.5) 25%, rgba(0,0,0,0.5) 75%, transparent);
        }

        .toru-footer-glow-left {
            position: absolute; top: -100px; left: -100px;
            width: 480px; height: 380px;
            background: radial-gradient(ellipse, rgba(37,99,235,0.10) 0%, transparent 65%);
        }

        .toru-footer-glow-right {
            position: absolute; bottom: 0; right: -60px;
            width: 320px; height: 280px;
            background: radial-gradient(ellipse, rgba(14,165,233,0.06) 0%, transparent 65%);
        }

        /* ── INNER ── */
        .toru-footer-inner {
            position: relative; z-index: 1;
            max-width: 1280px;
            margin: 0 auto;
            padding: 56px 40px 28px;
        }

        /* ── TOP ROW ── */
        .toru-footer-top {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 32px;
            margin-bottom: 36px;
        }

        .toru-footer-brand { display: flex; flex-direction: column; gap: 14px; }

        .toru-footer-logo {
            display: inline-flex; align-items: center; gap: 10px;
            text-decoration: none;
        }

        .toru-footer-logo span {
            font-size: 40px; font-weight: 900;
            color: #fff; letter-spacing: 0.06em;
        }

        .toru-footer-logo em { font-style: normal; color: #3b82f6; }

        .toru-footer-tagline {
            font-size: 16px; line-height: 1.7;
            color: rgba(255,255,255,0.38);
            max-width: 500px; margin: 0;
        }

        .toru-footer-social-block {
            display: flex; flex-direction: column;
            align-items: flex-end; gap: 12px;
            flex-shrink: 0;
        }

        .toru-footer-social-label {
            font-size: 10px; font-weight: 700;
            letter-spacing: 0.14em; text-transform: uppercase;
            color: #fff;
        }

        .toru-footer-socials { display: flex; gap: 8px; }

        .toru-social-btn {
            width: 36px; height: 36px;
            background: rgba(255,255,255,0.05);
            border: 1px solid #fff;
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            color: #fff; font-size: 14px; text-decoration: none;
            transition: all 0.22s ease;
        }

        .toru-social-btn:hover {
            background: #2563eb; border-color: #2563eb;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(37,99,235,0.35);
        }

        /* ── THIN RULE ── */
        .toru-footer-rule {
            height: 1px;
            background: linear-gradient(to right,
                transparent,
                rgba(255,255,255,0.08) 20%,
                rgba(59,130,246,0.2) 50%,
                rgba(255,255,255,0.08) 80%,
                transparent);
            margin-bottom: 36px;
        }

        /* ── MAIN NAV GRID ── */
        .toru-footer-main {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1.3fr;
            gap: 32px 40px;
            align-items: start;
        }

        .toru-footer-col h5 {
            font-size: 12px; font-weight: 700;
            letter-spacing: 0.13em; text-transform: uppercase;
            color: rgba(255,255,255,0.28);
            margin: 0 0 14px;
            padding-bottom: 10px;
            border-bottom: 1px solid rgba(255,255,255,0.07);
        }

        .toru-footer-col h5.mt { margin-top: 28px; }

        .toru-footer-col ul {
            list-style: none; padding: 0; margin: 0;
            display: flex; flex-direction: column; gap: 9px;
        }

        .toru-footer-col ul li a {
            font-size: 14.5px;
            color: rgba(255,255,255,0.46);
            text-decoration: none; display: block;
            transition: color 0.18s, padding-left 0.18s;
        }

        .toru-footer-col ul li a:hover { color: #fff; padding-left: 5px; }

        /* ── CONTACT ── */
        .toru-company-name {
            font-size: 15px; font-weight: 700;
            letter-spacing: 0.06em; text-transform: uppercase;
            color: #3b82f6; margin: 0 0 14px;
        }

        .toru-contact-block { display: flex; flex-direction: column; gap: 12px; }

        .toru-contact-row { display: flex; align-items: flex-start; gap: 10px; }

        .toru-contact-row i {
            font-size: 13px; color: #3b82f6;
            flex-shrink: 0; margin-top: 2px;
        }

        .toru-contact-row span,
        .toru-contact-row a {
            font-size: 15px; color: rgba(255,255,255,0.46);
            line-height: 1.55; text-decoration: none;
            transition: color 0.18s;
        }

        .toru-contact-row a:hover { color: #fff; }

        .toru-footer-cta {
            display: inline-flex; align-items: center; gap: 8px;
            margin-top: 20px; padding: 9px 18px;
            background: rgba(37,99,235,0.15);
            border: 1px solid rgba(37,99,235,0.35);
            border-radius: 6px;
            font-size: 12px; font-weight: 700;
            letter-spacing: 0.05em; color: #60a5fa;
            text-decoration: none; transition: all 0.22s ease;
        }

        .toru-footer-cta:hover {
            background: #2563eb; border-color: #2563eb; color: #fff; gap: 12px;
        }

        /* ── DIVIDER ── */
        .toru-footer-divider {
            height: 1px; background: rgba(255,255,255,0.07);
            margin: 40px 0 24px;
        }

        /* ── BOTTOM ── */
        .toru-footer-bottom {
            display: flex; align-items: center;
            justify-content: space-between;
            flex-wrap: wrap; gap: 12px;
        }

        .toru-footer-copy { font-size: 14px; color: #fff; margin: 0; }
        .toru-footer-copy strong { color: #3b82f6; }

        .toru-footer-legal { display: flex; align-items: center; gap: 10px; }

        .toru-footer-legal a {
            font-size: 14px; color: #fff; text-decoration: none;
            transition: color 0.18s;
        }

        .toru-footer-legal a:hover { color: rgba(255,255,255,0.65); }
        .toru-footer-legal .dot { color: rgba(255,255,255,0.12); font-size: 10px; }

        /* ═══════════════════════════════
           RESPONSIVE
        ═══════════════════════════════ */

        /* Tablet */
        @media (max-width: 1100px) {
            .toru-footer-inner { padding: 48px 32px 28px; }

            .toru-footer-main {
                grid-template-columns: 1fr 1fr;
                gap: 28px 36px;
            }

            .toru-footer-contact-col {
                grid-column: span 2;
                border-top: 1px solid rgba(255,255,255,0.07);
                padding-top: 24px;
            }
        }

        /* Mobile landscape / 768px */
        @media (max-width: 768px) {
            .toru-footer-inner { padding: 40px 20px 24px; }

            /* Top row tetap berdampingan, lebih compact */
            .toru-footer-top { gap: 16px; margin-bottom: 24px; }

            .toru-footer-logo span { font-size: 30px; }

            .toru-footer-tagline { font-size: 13.5px; max-width: 260px; }

            /* Nav: 2 kolom */
            .toru-footer-main {
                grid-template-columns: 1fr 1fr;
                gap: 22px 16px;
            }

            .toru-footer-contact-col {
                grid-column: span 2;
                border-top: 1px solid rgba(255,255,255,0.07);
                padding-top: 22px;
            }

            /* Contact: item-item horizontal kalau cukup lebar */
            .toru-contact-block {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 12px 24px;
            }

            .toru-contact-row:first-child {
                grid-column: span 2; /* alamat full width */
            }

            .toru-footer-cta { align-self: flex-start; }

            .toru-footer-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }

            .toru-footer-copy,
            .toru-footer-legal a { font-size: 12.5px; }
        }

        /* Mobile portrait */
        @media (max-width: 480px) {
            .toru-footer-inner { padding: 32px 16px 20px; }

            /* Top: stack logo + tagline + social vertikal */
            .toru-footer-top {
                flex-direction: column;
                gap: 18px;
                margin-bottom: 20px;
            }

            .toru-footer-logo span { font-size: 26px; }

            .toru-footer-tagline { font-size: 13px; max-width: 100%; }

            /* Social rata kiri sejajar brand */
            .toru-footer-social-block {
                flex-direction: row;
                align-items: center;
                gap: 14px;
            }

            .toru-footer-social-label { white-space: nowrap; }

            /* Nav: 2 kolom tetap — cukup untuk link pendek */
            .toru-footer-main {
                grid-template-columns: 1fr 1fr;
                gap: 18px 14px;
            }

            .toru-footer-col h5 {
                font-size: 10.5px;
                margin-bottom: 10px;
                padding-bottom: 8px;
            }

            .toru-footer-col h5.mt { margin-top: 18px; }

            .toru-footer-col ul { gap: 8px; }
            .toru-footer-col ul li a { font-size: 13px; }

            /* Contact: kembali stack vertikal */
            .toru-footer-contact-col { grid-column: span 2; }

            .toru-contact-block {
                display: flex;
                flex-direction: column;
                gap: 12px;
            }

            .toru-company-name { font-size: 12px; }

            .toru-contact-row span,
            .toru-contact-row a { font-size: 13.5px; }

            /* CTA full width */
            .toru-footer-cta {
                width: 100%;
                justify-content: center;
                padding: 12px 18px;
            }

            .toru-footer-divider { margin: 24px 0 18px; }

            .toru-footer-copy { font-size: 12px; }

            .toru-footer-legal {
                flex-wrap: wrap;
                gap: 6px 10px;
            }

            .toru-footer-legal a { font-size: 12px; }
        }

        /* Layar sangat kecil ≤ 360px */
        @media (max-width: 360px) {
            .toru-footer-inner { padding: 28px 14px 18px; }

            .toru-footer-logo span { font-size: 22px; }

            /* Nav: 1 kolom agar tidak terlalu sempit */
            .toru-footer-main { grid-template-columns: 1fr; }

            .toru-footer-contact-col { grid-column: span 1; }

            .toru-footer-social-block { flex-direction: column; align-items: flex-start; gap: 8px; }
        }

        /* iPhone safe area (notch / home bar gesture) */
        @supports (padding: env(safe-area-inset-bottom)) {
            .toru-footer-inner {
                padding-bottom: calc(28px + env(safe-area-inset-bottom));
            }

            @media (max-width: 480px) {
                .toru-footer-inner {
                    padding-bottom: calc(20px + env(safe-area-inset-bottom));
                }
            }
        }
    </style>

</footer>