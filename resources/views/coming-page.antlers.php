<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torucorp — Sedang Dipersiapkan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --blue: #2563eb;
            --cyan: #06b6d4;
            --navy: #0b1f3a;
            --muted: #7a8fa6;
            --soft: #4a5f78;
            --bg: #f7fafd;
            --white: #ffffff;
        }

        html,
        body {
            height: 100%;
            font-family: 'Sora', sans-serif;
            background: var(--bg);
            color: var(--navy);
            overflow-x: hidden;
        }

        /* ═══════════════════════════════════
           BACKGROUND — mirrors features-section
        ═══════════════════════════════════ */
        .page-bg {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            background: var(--bg);
        }

        .page-bg::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(circle at 5% 15%, rgba(37, 99, 235, 0.05) 0%, transparent 45%),
                radial-gradient(circle at 95% 85%, rgba(6, 182, 212, 0.05) 0%, transparent 45%);
        }

        /* ── WATERMARKS (exact copy from doc-1) ── */
        .watermark {
            position: fixed;
            top: 18%;
            transform: translateY(-50%);
            font-family: 'Sora', sans-serif;
            font-size: clamp(80px, 14vw, 160px);
            font-weight: 900;
            letter-spacing: -0.04em;
            color: rgba(37, 99, 235, 0.04);
            pointer-events: none;
            user-select: none;
            line-height: 1;
            z-index: 0;
        }

        .watermark.left {
            left: -2%;
        }

        .watermark.right {
            right: -2%;
        }

        @media (max-width: 768px) {
            .watermark {
                font-size: clamp(60px, 10vw, 100px);
            }
        }

        @media (max-width: 576px) {
            .watermark {
                display: none;
            }
        }

        /* ═══════════════════════════════════
           LAYOUT
        ═══════════════════════════════════ */
        .page-wrapper {
            position: relative;
            z-index: 1;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: clamp(72px, 10vw, 130px) 24px;
        }

        /* ── LOGO ── */
        .tc-logo {
            font-size: 1.4rem;
            font-weight: 900;
            color: var(--navy);
            letter-spacing: -0.04em;
            margin-bottom: 52px;
            opacity: 0;
            animation: fadeDown .7s ease .1s forwards;
        }

        .tc-logo span {
            background: linear-gradient(135deg, var(--blue), var(--cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── BADGE — exact .corporate-badge from doc-1 ── */
        .corporate-badge {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            background: rgba(37, 99, 235, 0.07);
            border: 1px solid rgba(37, 99, 235, 0.18);
            color: var(--blue);
            font-family: 'Sora', sans-serif;
            font-size: 0.72rem;
            font-weight: 700;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            padding: 9px 22px;
            border-radius: 999px;
            margin-bottom: 20px;
            opacity: 0;
            animation: fadeDown .7s ease .25s forwards;
        }

        .corporate-badge::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--cyan);
            animation: corpBadgePulse 2.4s ease-in-out infinite;
        }

        @keyframes corpBadgePulse {
            0% {
                box-shadow: 0 0 0 0 rgba(6, 182, 212, 0.7);
            }

            60% {
                box-shadow: 0 0 0 8px rgba(6, 182, 212, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(6, 182, 212, 0);
            }
        }

        /* ── MAIN TITLE — exact .corp-main-title from doc-1 ── */
        .corp-main-title {
            font-family: 'Sora', sans-serif;
            font-size: clamp(2rem, 4.5vw, 3rem);
            font-weight: 900;
            color: var(--navy);
            letter-spacing: -0.03em;
            line-height: 1.12;
            margin-bottom: 16px;
            text-align: center;
            opacity: 0;
            animation: fadeDown .7s ease .4s forwards;
        }

        .corp-main-title .accent {
            background: linear-gradient(135deg, var(--blue) 0%, var(--cyan) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── SUBTITLE — exact .corporate-sub from doc-1 ── */
        .corporate-sub {
            font-size: clamp(0.95rem, 1.8vw, 1.1rem);
            color: var(--muted);
            max-width: 580px;
            margin: 0 auto;
            line-height: 1.8;
            text-align: center;
        }

        .cs-sub {
            opacity: 0;
            animation: fadeDown .7s ease .55s forwards;
        }

        .cs-sub-id {
            font-size: clamp(0.82rem, 1.5vw, 0.95rem);
            color: rgba(122, 143, 166, 0.65);
            text-align: center;
            font-style: italic;
            margin-top: 6px;
            margin-bottom: 52px;
            opacity: 0;
            animation: fadeDown .7s ease .65s forwards;
        }

        /* ═══════════════════════════════════
           PROGRESS CARD — .feature-box style from doc-1
        ═══════════════════════════════════ */
        .progress-card {
            background: var(--white);
            border-radius: 20px;
            border: 1px solid rgba(37, 99, 235, 0.09);
            box-shadow: 0 4px 24px rgba(11, 31, 58, 0.07);
            padding: clamp(20px, 2.5vw, 28px);
            width: 100%;
            max-width: 560px;
            position: relative;
            overflow: hidden;
            margin-bottom: 44px;
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .65s ease, transform .65s ease, box-shadow .32s ease, border-color .32s ease;
            animation: fadeUp .8s ease .75s forwards;
        }

        .progress-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            border-radius: 20px 20px 0 0;
            background: linear-gradient(90deg, #1d4ed8, #2563eb, #06b6d4);
        }

        .progress-card::after {
            content: '';
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: radial-gradient(circle at 95% 5%, rgba(37, 99, 235, 0.02) 0%, transparent 55%);
        }

        .progress-card:hover {
            box-shadow: 0 18px 48px rgba(11, 31, 58, 0.13);
            border-color: rgba(37, 99, 235, 0.2);
        }

        /* ── icon wrap — exact .feature-icon-wrap from doc-1 ── */
        .cs-icon-wrap {
            width: 48px;
            height: 48px;
            min-width: 48px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            color: #fff;
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #1d4ed8, #3b82f6);
            box-shadow: 0 5px 16px rgba(37, 99, 235, 0.30);
            margin: 0 auto 24px;
            animation: iconPulseRing 3s ease-in-out infinite;
            transition: transform .32s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .cs-icon-wrap::before {
            content: '';
            position: absolute;
            top: -25%;
            left: -25%;
            width: 60%;
            height: 60%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.28) 0%, transparent 70%);
            border-radius: 50%;
        }

        .progress-card:hover .cs-icon-wrap {
            transform: scale(1.1) rotate(-5deg);
        }

        @keyframes iconPulseRing {

            0%,
            100% {
                box-shadow: 0 5px 16px rgba(37, 99, 235, 0.30);
            }

            50% {
                box-shadow: 0 5px 28px rgba(37, 99, 235, 0.52), 0 0 0 8px rgba(37, 99, 235, 0.06);
            }
        }

        /* ── progress bar ── */
        .progress-label-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            position: relative;
            z-index: 1;
        }

        .progress-label {
            font-family: 'Sora', sans-serif;
            font-size: 0.8rem;
            font-weight: 800;
            color: var(--navy);
        }

        .progress-pct {
            font-family: 'Sora', sans-serif;
            font-size: 0.78rem;
            font-weight: 800;
            color: var(--blue);
        }

        .progress-track {
            width: 100%;
            height: 8px;
            background: rgba(37, 99, 235, 0.08);
            border-radius: 999px;
            overflow: hidden;
            margin-bottom: 22px;
            position: relative;
            z-index: 1;
        }

        .progress-fill {
            height: 100%;
            border-radius: 999px;
            background: linear-gradient(90deg, #1d4ed8, #06b6d4);
            box-shadow: 0 2px 10px rgba(37, 99, 235, 0.35);
            animation: fillBar 1.6s cubic-bezier(0.4, 0, 0.2, 1) 1.2s both;
            width: 0%;
        }

        @keyframes fillBar {
            to {
                width: 65%;
            }
        }

        /* ── task list — uses .value-tag colours from doc-1 ── */
        .task-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 10px;
            position: relative;
            z-index: 1;
        }

        .task-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 11px 14px;
            border-radius: 12px;
            background: rgba(37, 99, 235, 0.03);
            border: 1px solid rgba(37, 99, 235, 0.07);
            font-size: 0.82rem;
            color: var(--soft);
            transition: background .2s, border-color .2s;
        }

        .task-item:hover {
            background: rgba(37, 99, 235, 0.06);
            border-color: rgba(37, 99, 235, 0.13);
        }

        .task-check {
            width: 28px;
            height: 28px;
            min-width: 28px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.72rem;
            color: #fff;
            flex-shrink: 0;
        }

        /* mirrors data-index colours from doc-1 */
        .task-check.done {
            background: linear-gradient(135deg, #065f46, #10b981);
            box-shadow: 0 3px 10px rgba(16, 185, 129, .28);
        }

        .task-check.inpro {
            background: linear-gradient(135deg, #1d4ed8, #3b82f6);
            box-shadow: 0 3px 10px rgba(37, 99, 235, .28);
        }

        .task-check.todo {
            background: rgba(37, 99, 235, 0.10);
            color: var(--muted);
            box-shadow: none;
        }

        .task-text {
            flex: 1;
            line-height: 1.4;
            min-width: 0;
        }

        .task-text strong {
            display: block;
            color: var(--navy);
            font-weight: 700;
            font-size: 0.82rem;
        }

        .task-text span {
            font-size: 0.72rem;
            color: var(--muted);
        }

        /* mirrors .value-tag from doc-1 */
        .task-pill {
            font-family: 'Sora', sans-serif;
            font-size: 0.68rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 999px;
            white-space: nowrap;
        }

        .task-pill.done {
            background: rgba(16, 185, 129, .08);
            color: #065f46;
            border: 1px solid rgba(16, 185, 129, .15);
        }

        .task-pill.inpro {
            background: rgba(37, 99, 235, .08);
            color: var(--blue);
            border: 1px solid rgba(37, 99, 235, .15);
        }

        .task-pill.todo {
            background: rgba(122, 143, 166, .10);
            color: var(--muted);
            border: 1px solid rgba(122, 143, 166, .15);
        }

        /* regards strip */
        .regards-strip {
            margin-top: 18px;
            padding: 12px 16px;
            background: rgba(37, 99, 235, 0.04);
            border-left: 3px solid var(--blue);
            border-radius: 0 12px 12px 0;
            font-size: 0.80rem;
            color: var(--soft);
            line-height: 1.7;
            position: relative;
            z-index: 1;
        }

        /* ═══════════════════════════════════
           COUNTDOWN — same card style as .feature-box
        ═══════════════════════════════════ */
        .countdown-wrap {
            display: flex;
            gap: 14px;
            justify-content: center;
            margin-bottom: 44px;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeUp .8s ease .9s forwards;
        }

        .cd-box {
            background: var(--white);
            border-radius: 20px;
            border: 1px solid rgba(37, 99, 235, 0.09);
            box-shadow: 0 4px 24px rgba(11, 31, 58, 0.07);
            padding: 18px 22px;
            min-width: 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: transform .32s ease, box-shadow .32s ease, border-color .32s ease;
        }

        .cd-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--blue), var(--cyan));
            border-radius: 20px 20px 0 0;
        }

        .cd-box:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 48px rgba(11, 31, 58, 0.13);
            border-color: rgba(37, 99, 235, 0.2);
        }

        .cd-num {
            font-family: 'Sora', sans-serif;
            font-size: clamp(1.6rem, 3.5vw, 2.2rem);
            font-weight: 900;
            letter-spacing: -0.04em;
            line-height: 1;
            background: linear-gradient(135deg, var(--blue), var(--cyan));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .cd-unit-id {
            font-family: 'Sora', sans-serif;
            font-size: 0.64rem;
            font-weight: 700;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-top: 5px;
        }

        .cd-unit-en {
            font-size: 0.58rem;
            color: rgba(122, 143, 166, 0.6);
            font-style: italic;
            margin-top: 1px;
        }

        .cd-colon {
            font-size: 2rem;
            font-weight: 900;
            color: rgba(37, 99, 235, 0.20);
            align-self: center;
            margin-top: -12px;
        }

        /* ═══════════════════════════════════
           NOTIFY CARD — .feature-box[data-index="2"] style (green)
        ═══════════════════════════════════ */
        .notify-card {
            background: var(--white);
            border-radius: 20px;
            border: 1px solid rgba(37, 99, 235, 0.09);
            box-shadow: 0 4px 24px rgba(11, 31, 58, 0.07);
            padding: clamp(20px, 3vw, 30px) clamp(22px, 3.5vw, 36px);
            width: 100%;
            max-width: 560px;
            position: relative;
            overflow: hidden;
            margin-bottom: 52px;
            opacity: 0;
            animation: fadeUp .8s ease 1.05s forwards;
            transition: transform .32s ease, box-shadow .32s ease, border-color .32s ease;
        }

        .notify-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            border-radius: 20px 20px 0 0;
            background: linear-gradient(90deg, #065f46, #10b981, #06b6d4);
        }

        .notify-card::after {
            content: '';
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: radial-gradient(circle at 95% 5%, rgba(16, 185, 129, 0.02) 0%, transparent 55%);
        }

        .notify-card:hover {
            box-shadow: 0 18px 48px rgba(11, 31, 58, 0.13);
            border-color: rgba(37, 99, 235, 0.2);
        }

        /* notify inner */
        .notify-header {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 16px;
            position: relative;
            z-index: 1;
        }

        .notify-icon-wrap {
            width: 40px;
            height: 40px;
            min-width: 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            color: #fff;
            background: linear-gradient(135deg, #065f46, #10b981);
            box-shadow: 0 4px 12px rgba(16, 185, 129, .28);
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
            transition: transform .32s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .notify-icon-wrap::before {
            content: '';
            position: absolute;
            top: -25%;
            left: -25%;
            width: 60%;
            height: 60%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.28) 0%, transparent 70%);
            border-radius: 50%;
        }

        .notify-card:hover .notify-icon-wrap {
            transform: scale(1.1) rotate(-5deg);
        }

        .notify-text-block {
            flex: 1;
        }

        .notify-title {
            font-family: 'Sora', sans-serif;
            font-size: 0.88rem;
            font-weight: 800;
            color: var(--navy);
            margin-bottom: 3px;
        }

        .notify-sub {
            font-size: 0.76rem;
            color: var(--muted);
            line-height: 1.6;
        }

        .notify-row {
            display: flex;
            gap: 10px;
            position: relative;
            z-index: 1;
        }

        .notify-input {
            flex: 1;
            background: #f4f8fc;
            border: 1.5px solid rgba(37, 99, 235, 0.12);
            border-radius: 12px;
            padding: 11px 14px;
            font-family: 'Sora', sans-serif;
            font-size: 0.83rem;
            color: var(--navy);
            outline: none;
            transition: border-color .25s, box-shadow .25s, background .25s;
        }

        .notify-input::placeholder {
            color: #aab8c8;
        }

        .notify-input:focus {
            border-color: rgba(37, 99, 235, 0.40);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.08);
            background: #fff;
        }

        .notify-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            background: linear-gradient(135deg, #065f46, #10b981);
            color: #fff;
            font-family: 'Sora', sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 11px 20px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 14px rgba(16, 185, 129, .28);
            transition: transform .25s, box-shadow .25s;
            white-space: nowrap;
        }

        .notify-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 22px rgba(16, 185, 129, .40);
        }

        /* value-tag style for notify tag */
        .notify-tag {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-family: 'Sora', sans-serif;
            font-size: 0.68rem;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 999px;
            background: rgba(16, 185, 129, .08);
            color: #065f46;
            border: 1px solid rgba(16, 185, 129, .15);
            margin-bottom: 12px;
            position: relative;
            z-index: 1;
        }

        #notify-msg {
            margin-top: 10px;
            font-size: 0.76rem;
            color: #065f46;
            display: none;
            position: relative;
            z-index: 1;
        }

        /* ═══════════════════════════════════
           LINKS ROW
        ═══════════════════════════════════ */
        .links-row {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            opacity: 0;
            animation: fadeUp .7s ease 1.2s forwards;
            margin-bottom: 40px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Sora', sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--blue);
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 999px;
            border: 1.5px solid rgba(37, 99, 235, 0.18);
            transition: background .25s, transform .25s;
        }

        .back-link:hover {
            background: rgba(37, 99, 235, 0.06);
            transform: translateX(-3px);
        }

        .contact-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: 'Sora', sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            color: var(--soft);
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 999px;
            border: 1.5px solid rgba(11, 31, 58, 0.12);
            transition: background .25s, transform .25s;
        }

        .contact-link:hover {
            background: rgba(11, 31, 58, 0.04);
            transform: translateX(3px);
            color: var(--navy);
        }

        .divider-dot {
            width: 4px;
            height: 4px;
            border-radius: 50%;
            background: rgba(37, 99, 235, 0.20);
        }

        /* ── FOOTER ── */
        .footer-note {
            font-size: 0.72rem;
            color: rgba(122, 143, 166, 0.6);
            text-align: center;
            opacity: 0;
            animation: fadeUp .6s ease 1.35s forwards;
        }

        /* ═══════════════════════════════════
           ANIMATIONS — same names as doc-1
        ═══════════════════════════════════ */
        .fade-down {
            opacity: 0;
            transform: translateY(-14px);
            transition: opacity .6s ease, transform .6s ease;
        }

        .fade {
            opacity: 0;
            transform: translateY(10px);
            transition: opacity .6s ease .1s, transform .6s ease .1s;
        }

        [data-animate] {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity .65s ease, transform .65s ease;
        }

        .in-view {
            opacity: 1 !important;
            transform: none !important;
        }

        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(22px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ═══════════════════════════════════
           RESPONSIVE — mirrors doc-1 breakpoints
        ═══════════════════════════════════ */
        @media (max-width: 576px) {
            .corp-main-title {
                font-size: 1.7rem;
            }

            .corporate-badge {
                font-size: 0.66rem;
                padding: 7px 16px;
                letter-spacing: 2px;
            }

            .corporate-sub {
                font-size: 0.9rem;
            }

            .notify-row {
                flex-direction: column;
            }

            .notify-btn {
                justify-content: center;
            }

            .countdown-wrap {
                gap: 10px;
            }

            .cd-box {
                min-width: 64px;
                padding: 14px 16px;
            }

            .cd-colon {
                font-size: 1.4rem;
            }

            .progress-card {
                padding: 20px 16px;
            }

            .cs-icon-wrap {
                width: 40px;
                height: 40px;
                min-width: 40px;
                font-size: 1.1rem;
                border-radius: 12px;
            }
        }

        @media (max-width: 380px) {
            .corp-main-title {
                font-size: 1.45rem;
            }
        }

        @media (hover: none) and (pointer: coarse) {

            .progress-card:hover,
            .notify-card:hover,
            .cd-box:hover,
            .back-link:hover,
            .contact-link:hover {
                transform: none;
            }

            .progress-card:hover .cs-icon-wrap,
            .notify-card:hover .notify-icon-wrap {
                transform: none;
            }
        }
    </style>
</head>

<body>

    <!-- background layers -->
    <div class="page-bg"></div>
    <div class="watermark left">BUILD</div>
    <div class="watermark right">SOON</div>

    <div class="page-wrapper">

        <!-- logo -->
        <div class="tc-logo">Toru<span>corp</span></div>

        <!-- badge -->
        <div class="corporate-badge">Governance &amp; Compliance</div>

        <!-- title -->
        <h1 class="corp-main-title">
            Sedang <span class="accent">Dipersiapkan</span><br>
            Untuk Anda
        </h1>

        <!-- subtitle -->
        <p class="corporate-sub cs-sub">
            This page is currently under development. We're working hard to bring you an outstanding experience.
        </p>
        <p class="cs-sub-id">
            Halaman ini sedang dalam pengembangan. Kami bekerja keras untuk menghadirkan pengalaman terbaik.
        </p>

        <!-- progress card -->
        <div class="progress-card">

            <div class="cs-icon-wrap">
                <i class="bi bi-tools"></i>
            </div>

            <div class="progress-label-row">
                <span class="progress-label">Progress Pengembangan</span>
                <span class="progress-pct">65%</span>
            </div>
            <div class="progress-track">
                <div class="progress-fill"></div>
            </div>

            <ul class="task-list">
                <li class="task-item">
                    <div class="task-check done"><i class="bi bi-check-lg"></i></div>
                    <div class="task-text">
                        <strong>Desain UI/UX</strong>
                        <span>Wireframe &amp; visual design finalized</span>
                    </div>
                    <span class="task-pill done">Selesai</span>
                </li>
                <li class="task-item">
                    <div class="task-check done"><i class="bi bi-check-lg"></i></div>
                    <div class="task-text">
                        <strong>Arsitektur Sistem</strong>
                        <span>Backend &amp; database architecture</span>
                    </div>
                    <span class="task-pill done">Selesai</span>
                </li>
                <li class="task-item">
                    <div class="task-check inpro"><i class="bi bi-arrow-repeat"></i></div>
                    <div class="task-text">
                        <strong>Pengembangan Frontend</strong>
                        <span>Pages &amp; interactive components</span>
                    </div>
                    <span class="task-pill inpro">On Progress</span>
                </li>
                <li class="task-item">
                    <div class="task-check todo"><i class="bi bi-hourglass"></i></div>
                    <div class="task-text">
                        <strong>Integrasi &amp; Testing</strong>
                        <span>QA testing &amp; system integration</span>
                    </div>
                    <span class="task-pill todo">Segera</span>
                </li>
                <li class="task-item">
                    <div class="task-check todo"><i class="bi bi-hourglass"></i></div>
                    <div class="task-text">
                        <strong>Peluncuran / Launch</strong>
                        <span>Go-live &amp; deployment</span>
                    </div>
                    <span class="task-pill todo">Segera</span>
                </li>
            </ul>

            <div class="regards-strip" style="margin-top:22px;">
                Terima kasih atas kesabaran Anda. &nbsp;·&nbsp;
                <em>Thank you for your patience.</em><br>
                <strong>— Torucorp's Team</strong>
            </div>

        </div>

        <!-- countdown -->
        <div class="countdown-wrap">
            <div class="cd-box">
                <div class="cd-num" id="cd-days">00</div>
                <div class="cd-unit-id">Hari</div>
                <div class="cd-unit-en">Days</div>
            </div>
            <div class="cd-colon">:</div>
            <div class="cd-box">
                <div class="cd-num" id="cd-hours">00</div>
                <div class="cd-unit-id">Jam</div>
                <div class="cd-unit-en">Hours</div>
            </div>
            <div class="cd-colon">:</div>
            <div class="cd-box">
                <div class="cd-num" id="cd-mins">00</div>
                <div class="cd-unit-id">Menit</div>
                <div class="cd-unit-en">Minutes</div>
            </div>
            <div class="cd-colon">:</div>
            <div class="cd-box">
                <div class="cd-num" id="cd-secs">00</div>
                <div class="cd-unit-id">Detik</div>
                <div class="cd-unit-en">Seconds</div>
            </div>
        </div>

        <!-- notify card -->
        <div class="notify-card">
            <div class="notify-tag">
                <i class="bi bi-bell-fill"></i>
                Notifikasi
            </div>
            <div class="notify-header">
                <div class="notify-icon-wrap">
                    <i class="bi bi-envelope-fill"></i>
                </div>
                <div class="notify-text-block">
                    <p class="notify-title">Ingin Diberitahu Saat Sudah Siap?</p>
                    <p class="notify-sub">Masukkan email Anda dan kami akan menghubungi Anda saat halaman ini telah tersedia. · <em>Enter your email and we'll notify you when this page goes live.</em></p>
                </div>
            </div>
            <div class="notify-row">
                <input
                    type="email"
                    class="notify-input"
                    id="notifyEmail"
                    placeholder="nama@email.com"
                    autocomplete="off">
                <button class="notify-btn" onclick="handleNotify()">
                    <i class="bi bi-bell-fill"></i>
                    Beritahu Saya
                </button>
            </div>
            <div id="notify-msg">
                <i class="bi bi-check-circle-fill"></i>
                &nbsp;Berhasil! Kami akan memberitahu Anda. · <em>We'll notify you soon!</em>
            </div>
        </div>

        <!-- links -->
        <div class="links-row">
            <a href="javascript:history.back()" class="back-link">
                <i class="bi bi-arrow-left"></i>
                Kembali &nbsp;·&nbsp; Go Back
            </a>
            <div class="divider-dot"></div>
            <a href="mailto:admin@torucorp.id" class="contact-link">
                <i class="bi bi-envelope-fill"></i>
                admin@torucorp.id
            </a>
        </div>

        <!-- footer -->
        <p class="footer-note">
            &copy; 2025 Torucorp &nbsp;·&nbsp; Whistleblower System &nbsp;·&nbsp;
            Governance &amp; Compliance
        </p>

    </div>

    <script>
        // ── COUNTDOWN ──
        (function() {
            var target = new Date();
            target.setDate(target.getDate() + 30);

            function pad(n) {
                return String(n).padStart(2, '0');
            }

            function tick() {
                var diff = target.getTime() - Date.now();
                if (diff <= 0) {
                    ['cd-days', 'cd-hours', 'cd-mins', 'cd-secs'].forEach(function(id) {
                        document.getElementById(id).textContent = '00';
                    });
                    return;
                }
                document.getElementById('cd-days').textContent = pad(Math.floor(diff / 86400000));
                document.getElementById('cd-hours').textContent = pad(Math.floor((diff % 86400000) / 3600000));
                document.getElementById('cd-mins').textContent = pad(Math.floor((diff % 3600000) / 60000));
                document.getElementById('cd-secs').textContent = pad(Math.floor((diff % 60000) / 1000));
            }
            tick();
            setInterval(tick, 1000);
        })();

        // ── NOTIFY ──
        function handleNotify() {
            var input = document.getElementById('notifyEmail');
            var msg = document.getElementById('notify-msg');
            if (!input.value.trim() || !input.value.includes('@')) {
                input.style.borderColor = 'rgba(239,68,68,0.45)';
                input.focus();
                return;
            }
            input.style.borderColor = '';
            msg.style.display = 'block';
            input.value = '';
            setTimeout(function() {
                msg.style.display = 'none';
            }, 5000);
        }
        document.getElementById('notifyEmail').addEventListener('keydown', function(e) {
            if (e.key === 'Enter') handleNotify();
        });

        // ── INTERSECTION OBSERVER for [data-animate] ──
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (e.isIntersecting) {
                    e.target.classList.add('in-view');
                    observer.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.15
        });
        document.querySelectorAll('[data-animate], .fade-down, .fade').forEach(function(el) {
            observer.observe(el);
        });
    </script>
</body>

</html>