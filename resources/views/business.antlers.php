<section id="businesses" class="business-section section">
    <div class="container">

        <!-- HEADER -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-10">
                <div class="business-badge fade-down">Torucorp Businesses</div>
                <p class="business-sub fade">
                    The diversification of Torucorp reflects our commitment to innovation, sustainability,
                    and long-term value creation across multiple industries.
                </p>
            </div>
        </div>

        <!-- TWO COLUMNS WITH VERTICAL DIVIDER -->
        <div class="row gx-5 gy-4 mt-3 equal-cols position-relative">

            <!-- Vertical Divider -->
            <div class="vertical-divider"></div>

            <!-- LEFT -->
            <div class="col-lg-6 animate-left">
                <div class="biz-col tilt-card">

                    <h3 class="biz-title">Core Industries</h3>
                    <ul class="biz-list">

                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-building"></i></span>
                            <span>Construction and Engineering Services</span>
                        </li>

                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-house-check"></i></span>
                            <span>Property and Real Estate Development</span>
                        </li>

                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-kanban"></i></span>
                            <span>Project Management and Consulting</span>
                        </li>

                    </ul>

                </div>
            </div>

            <!-- RIGHT -->
            <div class="col-lg-6 animate-right">
                <div class="biz-col tilt-card">

                    <h3 class="biz-title">Innovation & Future Growth</h3>
                    <ul class="biz-list">

                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-recycle"></i></span>
                            <span>Renewable and Sustainable Infrastructure Initiative</span>
                        </li>

                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-diagram-3"></i></span>
                            <span>Strategic Investment and Holding Management</span>
                        </li>

                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-robot"></i></span>
                            <span>AI for Living</span>
                        </li>

                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-display"></i></span>
                            <span>Digital Future in Software House</span>
                        </li>

                    </ul>

                </div>
            </div>

        </div>

    </div>

    <!-- STYLES: using Toru base palette -->
    <style>
        /* ===========================
       ANIMATIONS
    ============================*/

        .fade,
        .fade-up,
        .fade-down,
        .stagger-1,
        .stagger-2,
        .stagger-3,
        .stagger-4 {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeUp .8s ease forwards;
        }

        .fade {
            animation-delay: .15s;
            transform: translateY(10px);
        }

        .fade-down {
            transform: translateY(-20px);
            animation-name: fadeDown;
            animation-duration: .9s;
        }

        .fade-up {
            animation-delay: .2s;
        }

        .stagger-1 {
            animation-delay: .25s;
        }

        .stagger-2 {
            animation-delay: .40s;
        }

        .stagger-3 {
            animation-delay: .55s;
        }

        .stagger-4 {
            animation-delay: .70s;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeDown {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        :root {
            --accent: #0d6efd;
            --soft: #f8f9fb;
            --text: #222;
            --muted: #6c757d;
        }

        .business-section {
            padding: 60px 0 90px;
            background: #ffffff;
            position: relative;
        }

        /* Header */
        .business-badge {
            display: inline-block;
            background: rgba(69, 115, 180, 0.08);
            color: var(--blue-2);
            font-weight: 800;
            padding: 14px 26px;
            border-radius: 999px;
            font-size: 1.15rem;
            margin-top: 60px;
            margin-bottom: 20px;
            letter-spacing: .6px;
            box-shadow: 0 6px 20px rgba(17, 73, 140, 0.04);
        }

        .business-sub {
            max-width: 720px;
            margin: 0 auto;
            color: var(--muted);
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Equal Height */
        .equal-cols {
            display: flex;
            align-items: stretch;
        }

        .equal-cols>div {
            display: flex;
        }

        .biz-col {
            height: 100%;
            background: linear-gradient(180deg, #fff 0%, var(--bg-soft)10%);
            padding: 22px;
            border-radius: var(--card-radius);
            box-shadow: 0 8px 24px rgba(17, 73, 128, 0.06);
            display: flex;
            flex-direction: column;
            gap: 18px;
            transition: all .28s ease;
            border: 1px solid rgba(17, 73, 128, 0.04);
        }

        /* 3D Hover Tilt */
        .tilt-card {
            transform-style: preserve-3d;
            transition: transform .28s cubic-bezier(.2, .9, .2, 1), box-shadow .28s ease;
            will-change: transform;
            perspective: 800px;
            border-radius: 15px;
        }

        .tilt-card:hover {
            transform: translateY(-10px) rotate3d(1, 1, 0, 4deg);
            border-radius: 15px;

        }

        /* Titles */
        .biz-title {
            font-weight: 700;
            font-size: 1.15rem;
            color: var(--blue-2);
            margin-bottom: 4px;
        }

        /* List */
        .biz-list {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .biz-list li {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            font-size: 1rem;
            color: var(--text);
            line-height: 1.6;
            background: #fff;
            padding: 12px 14px;
            border-radius: 10px;
            box-shadow: 0 6px 18px rgba(17, 73, 128, 0.03);
            transition: .22s ease;
            border: 1px solid rgba(75, 123, 166, 0.06);
        }

        .biz-list li:hover {
            transform: translateX(6px);
            background: linear-gradient(90deg, #fff, var(--bg-soft));
            box-shadow: 0 12px 28px rgba(17, 73, 128, 0.06);
        }

        .biz-icon {
            min-width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: linear-gradient(180deg, rgba(45, 97, 166, 0.12), rgba(75, 123, 166, 0.06));
            color: var(--blue-1);
            font-size: 1.2rem;
            flex-shrink: 0;
            box-shadow: inset 0 -2px 6px rgba(17, 73, 128, 0.02);
        }

        /* Vertical Divider */
        .vertical-divider {
            position: absolute;
            left: 50%;
            top: 36px;
            width: 2px;
            height: calc(100% - 72px);
            transform: translateX(-1px);
            z-index: 1;
        }

        /* Animations */
        @keyframes fadeUp {
            0% {
                opacity: 0;
                transform: translateY(36px)
            }

            100% {
                opacity: 1;
                transform: translateY(0)
            }
        }

        @keyframes slideLeft {
            0% {
                opacity: 0;
                transform: translateX(-50px)
            }

            100% {
                opacity: 1;
                transform: translateX(0)
            }
        }

        @keyframes slideRight {
            0% {
                opacity: 0;
                transform: translateX(50px)
            }

            100% {
                opacity: 1;
                transform: translateX(0)
            }
        }

        @keyframes fadeMatch {
            0% {
                opacity: 0;
                filter: blur(4px)
            }

            100% {
                opacity: 1;
                filter: blur(0)
            }
        }

        .business-sub {
            opacity: 0;
            animation: fadeUp 1s ease forwards;
            animation-delay: .15s;
        }

        .animate-left {
            opacity: 0;
            animation: slideLeft .9s ease forwards, fadeMatch 1.2s ease forwards;
            animation-delay: .25s;
        }

        .animate-right {
            opacity: 0;
            animation: slideRight .9s ease forwards, fadeMatch 1.2s ease forwards;
            animation-delay: .3s;
        }

        .biz-item {
            opacity: 0;
            animation: fadeMatch .8s ease forwards;
        }

        .biz-item:nth-child(1) {
            animation-delay: .45s;
        }

        .biz-item:nth-child(2) {
            animation-delay: .6s;
        }

        .biz-item:nth-child(3) {
            animation-delay: .75s;
        }

        .biz-item:nth-child(4) {
            animation-delay: .9s;
        }

        /* Responsive */
        @media(max-width:991px) {
            .equal-cols {
                flex-direction: column;
                gap: 16px;
            }

            .biz-col {
                width: 100%;
            }

            .vertical-divider {
                display: none;
            }

            .business-section {
                padding: 40px 0;
            }

            .business-badge {
                padding: 10px 18px;
                font-size: 1rem;
            }
        }
    </style>
</section>