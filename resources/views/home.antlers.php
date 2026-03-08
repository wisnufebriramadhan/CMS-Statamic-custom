<!-- ================= ENHANCED HERO SECTION WITH CLOUD GRADIENT ================= -->
<style>
  /* RESET GLOBAL (WAJIB) */
  html,
  body {
    margin: 0;
    padding: 0;
    width: 100%;
    overflow-x: hidden;
  }

  /* HERO BASE */
  .hero-premium {
    position: relative;
    width: 100vw;
    min-height: 100vh;
    overflow: hidden;
    color: #fff;
    padding: 120px 0 80px;
    display: flex;
    align-items: center;
    background: #0a1628;
  }

  /* CLOUD-LIKE TOP GRADIENT OVERLAY - PREMIUM EFFECT */
  .top-gradient-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 300px;
    z-index: 9;
    background:
      radial-gradient(ellipse 150% 100% at 30% -20%, rgba(255, 255, 255, 0.95) 0%, transparent 50%),
      radial-gradient(ellipse 150% 100% at 70% -20%, rgba(255, 255, 255, 0.9) 0%, transparent 50%),
      radial-gradient(ellipse 200% 120% at 50% -30%, rgba(255, 255, 255, 0.85) 0%, transparent 60%),
      linear-gradient(180deg,
        rgba(255, 255, 255, 0.98) 0%,
        rgba(255, 255, 255, 0.8) 15%,
        rgba(255, 255, 255, 0.5) 35%,
        rgba(255, 255, 255, 0.2) 60%,
        transparent 100%);
    pointer-events: none;
    animation: cloudFloat 20s ease-in-out infinite;
  }

  @keyframes cloudFloat {

    0%,
    100% {
      opacity: 1;
      transform: translateY(0);
    }

    50% {
      opacity: 0.95;
      transform: translateY(-5px);
    }
  }

  /* ADDITIONAL CLOUD LAYERS */
  .cloud-layer-1,
  .cloud-layer-2 {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 250px;
    z-index: 8;
    pointer-events: none;
  }

  .cloud-layer-1 {
    background: radial-gradient(ellipse 100% 80% at 20% 10%, rgba(255, 255, 255, 0.4) 0%, transparent 50%);
    animation: cloudDrift1 25s ease-in-out infinite;
  }

  .cloud-layer-2 {
    background: radial-gradient(ellipse 100% 80% at 80% 15%, rgba(255, 255, 255, 0.3) 0%, transparent 50%);
    animation: cloudDrift2 30s ease-in-out infinite;
  }

  @keyframes cloudDrift1 {

    0%,
    100% {
      transform: translateX(0);
    }

    50% {
      transform: translateX(20px);
    }
  }

  @keyframes cloudDrift2 {

    0%,
    100% {
      transform: translateX(0);
    }

    50% {
      transform: translateX(-15px);
    }
  }

  /* ADVANCED GRADIENT BACKGROUND - ENHANCED */
  .gradient-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
    background:
      radial-gradient(circle at 20% 30%, rgba(45, 97, 166, 0.5) 0%, transparent 50%),
      radial-gradient(circle at 80% 70%, rgba(17, 83, 140, 0.4) 0%, transparent 50%),
      radial-gradient(circle at 50% 50%, rgba(59, 130, 246, 0.3) 0%, transparent 70%),
      linear-gradient(135deg, #0a1628 0%, #1a2d4d 50%, #0f2544 100%);
    animation: gradientShift 15s ease-in-out infinite;
  }

  @keyframes gradientShift {

    0%,
    100% {
      opacity: 1;
      transform: scale(1) rotate(0deg);
    }

    50% {
      opacity: 0.8;
      transform: scale(1.1) rotate(2deg);
    }
  }

  /* ANIMATED WAVE OVERLAY */
  .wave-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    opacity: 0.15;
    background: linear-gradient(180deg, transparent 0%, rgba(45, 97, 166, 0.1) 50%, transparent 100%);
    animation: waveMove 8s ease-in-out infinite;
  }

  @keyframes waveMove {

    0%,
    100% {
      transform: translateY(0) scaleY(1);
    }

    50% {
      transform: translateY(-30px) scaleY(1.05);
    }
  }

  /* ANIMATED GRID OVERLAY - ENHANCED */
  .grid-overlay {
    position: absolute;
    inset: 0;
    z-index: 2;
    background-image:
      linear-gradient(rgba(59, 130, 246, 0.08) 1px, transparent 1px),
      linear-gradient(90deg, rgba(59, 130, 246, 0.08) 1px, transparent 1px);
    background-size: 50px 50px;
    animation: gridMove 20s linear infinite;
  }

  @keyframes gridMove {
    0% {
      transform: translate(0, 0);
      opacity: 0.5;
    }

    50% {
      opacity: 1;
    }

    100% {
      transform: translate(50px, 50px);
      opacity: 0.5;
    }
  }

  /* FLOATING ORBS */
  .floating-orbs {
    position: absolute;
    inset: 0;
    z-index: 2;
    overflow: hidden;
  }

  .orb {
    position: absolute;
    border-radius: 50%;
    filter: blur(60px);
    animation: orbFloat 20s infinite ease-in-out;
  }

  .orb-1 {
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(59, 130, 246, 0.4) 0%, transparent 70%);
    top: -10%;
    left: -10%;
    animation-delay: 0s;
    animation-duration: 25s;
  }

  .orb-2 {
    width: 350px;
    height: 350px;
    background: radial-gradient(circle, rgba(139, 92, 246, 0.3) 0%, transparent 70%);
    top: 50%;
    right: -10%;
    animation-delay: 3s;
    animation-duration: 30s;
  }

  .orb-3 {
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(45, 97, 166, 0.35) 0%, transparent 70%);
    bottom: -10%;
    left: 40%;
    animation-delay: 6s;
    animation-duration: 28s;
  }

  @keyframes orbFloat {

    0%,
    100% {
      transform: translate(0, 0) scale(1);
    }

    33% {
      transform: translate(100px, -80px) scale(1.1);
    }

    66% {
      transform: translate(-80px, 100px) scale(0.9);
    }
  }

  /* PARTICLE DOTS - ENHANCED */
  .particles {
    position: absolute;
    inset: 0;
    z-index: 3;
    overflow: hidden;
  }

  .particle {
    position: absolute;
    width: 3px;
    height: 3px;
    background: rgba(255, 255, 255, 0.6);
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
    animation: particleFloat 15s infinite;
  }

  .particle:nth-child(1) {
    left: 10%;
    top: 20%;
    animation-delay: 0s;
    animation-duration: 12s;
  }

  .particle:nth-child(2) {
    left: 70%;
    top: 40%;
    animation-delay: 2s;
    animation-duration: 16s;
  }

  .particle:nth-child(3) {
    left: 30%;
    top: 60%;
    animation-delay: 4s;
    animation-duration: 14s;
  }

  .particle:nth-child(4) {
    left: 85%;
    top: 15%;
    animation-delay: 1s;
    animation-duration: 18s;
  }

  .particle:nth-child(5) {
    left: 50%;
    top: 80%;
    animation-delay: 3s;
    animation-duration: 13s;
  }

  .particle:nth-child(6) {
    left: 15%;
    top: 45%;
    animation-delay: 5s;
    animation-duration: 15s;
  }

  .particle:nth-child(7) {
    left: 60%;
    top: 70%;
    animation-delay: 7s;
    animation-duration: 17s;
  }

  .particle:nth-child(8) {
    left: 25%;
    top: 35%;
    animation-delay: 2.5s;
    animation-duration: 14s;
  }

  .particle:nth-child(9) {
    left: 75%;
    top: 55%;
    animation-delay: 4.5s;
    animation-duration: 19s;
  }

  .particle:nth-child(10) {
    left: 40%;
    top: 25%;
    animation-delay: 6s;
    animation-duration: 16s;
  }

  @keyframes particleFloat {

    0%,
    100% {
      transform: translateY(0) translateX(0) scale(1);
      opacity: 0;
    }

    10% {
      opacity: 1;
    }

    90% {
      opacity: 1;
    }

    100% {
      transform: translateY(-150px) translateX(80px) scale(0.5);
      opacity: 0;
    }
  }

  /* GEOMETRIC SHAPES - ENHANCED */
  .geo-shape {
    position: absolute;
    z-index: 2;
    opacity: 0.12;
    border: 2px solid rgba(255, 255, 255, 0.15);
  }

  .geo-1 {
    top: 20%;
    right: 8%;
    width: 400px;
    height: 400px;
    border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
    animation: morph 15s infinite ease-in-out, geoFloat 20s infinite ease-in-out;
  }

  .geo-2 {
    bottom: 10%;
    left: 5%;
    width: 300px;
    height: 300px;
    border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
    animation: morph 20s infinite ease-in-out reverse, geoFloat 25s infinite ease-in-out reverse;
  }

  .geo-3 {
    top: 50%;
    left: 50%;
    width: 250px;
    height: 250px;
    border-radius: 50% 50% 30% 70% / 50% 50% 70% 30%;
    animation: morph 18s infinite ease-in-out, geoRotate 30s linear infinite;
  }

  @keyframes morph {

    0%,
    100% {
      border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
    }

    25% {
      border-radius: 58% 42% 75% 25% / 76% 46% 54% 24%;
    }

    50% {
      border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
    }

    75% {
      border-radius: 42% 58% 50% 50% / 28% 67% 33% 72%;
    }
  }

  @keyframes geoFloat {

    0%,
    100% {
      transform: translate(0, 0) rotate(0deg);
    }

    33% {
      transform: translate(30px, -30px) rotate(120deg);
    }

    66% {
      transform: translate(-20px, 40px) rotate(240deg);
    }
  }

  @keyframes geoRotate {
    from {
      transform: rotate(0deg);
    }

    to {
      transform: rotate(360deg);
    }
  }

  /* LIGHT RAYS - ENHANCED */
  .light-rays {
    position: absolute;
    top: -50%;
    right: -20%;
    width: 100%;
    height: 100%;
    z-index: 1;
    opacity: 0.08;
    background: conic-gradient(from 0deg at 50% 50%,
        transparent 0deg,
        rgba(255, 255, 255, 0.3) 45deg,
        transparent 90deg,
        transparent 180deg,
        rgba(59, 130, 246, 0.25) 225deg,
        transparent 270deg);
    animation: rotate 30s linear infinite;
  }

  @keyframes rotate {
    from {
      transform: rotate(0deg);
    }

    to {
      transform: rotate(360deg);
    }
  }

  /* DIGITAL RAIN EFFECT */
  .digital-rain {
    position: absolute;
    inset: 0;
    z-index: 2;
    overflow: hidden;
    opacity: 0.1;
  }

  .rain-column {
    position: absolute;
    top: -100%;
    width: 2px;
    height: 100px;
    background: linear-gradient(to bottom, transparent, rgba(59, 130, 246, 0.8), transparent);
    animation: rainFall 15s linear infinite;
  }

  .rain-column:nth-child(1) {
    left: 10%;
    animation-delay: 0s;
    animation-duration: 12s;
  }

  .rain-column:nth-child(2) {
    left: 25%;
    animation-delay: 2s;
    animation-duration: 15s;
  }

  .rain-column:nth-child(3) {
    left: 40%;
    animation-delay: 4s;
    animation-duration: 13s;
  }

  .rain-column:nth-child(4) {
    left: 55%;
    animation-delay: 1s;
    animation-duration: 14s;
  }

  .rain-column:nth-child(5) {
    left: 70%;
    animation-delay: 3s;
    animation-duration: 16s;
  }

  .rain-column:nth-child(6) {
    left: 85%;
    animation-delay: 5s;
    animation-duration: 11s;
  }

  .rain-column:nth-child(7) {
    left: 17%;
    animation-delay: 6s;
    animation-duration: 17s;
  }

  .rain-column:nth-child(8) {
    left: 63%;
    animation-delay: 2.5s;
    animation-duration: 13.5s;
  }

  @keyframes rainFall {
    0% {
      transform: translateY(0);
      opacity: 0;
    }

    10% {
      opacity: 1;
    }

    90% {
      opacity: 1;
    }

    100% {
      transform: translateY(120vh);
      opacity: 0;
    }
  }

  /* PULSING RINGS */
  .pulsing-rings {
    position: absolute;
    inset: 0;
    z-index: 2;
    overflow: hidden;
  }

  .pulse-ring {
    position: absolute;
    border: 2px solid rgba(59, 130, 246, 0.4);
    border-radius: 50%;
    animation: pulseExpand 6s ease-out infinite;
  }

  .pulse-ring-1 {
    top: 30%;
    left: 20%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
  }

  .pulse-ring-2 {
    top: 60%;
    right: 25%;
    width: 200px;
    height: 200px;
    animation-delay: 2s;
  }

  .pulse-ring-3 {
    bottom: 20%;
    left: 50%;
    width: 180px;
    height: 180px;
    animation-delay: 4s;
  }

  @keyframes pulseExpand {
    0% {
      transform: scale(0.5);
      opacity: 0;
    }

    50% {
      opacity: 0.6;
    }

    100% {
      transform: scale(2);
      opacity: 0;
    }
  }

  /* CONTENT WRAPPER */
  .hero-premium .container {
    position: relative;
    z-index: 10;
    max-width: 1320px;
    padding-left: 24px;
    padding-right: 24px;
  }

  /* HERO CONTENT */
  .hero-content {
    max-width: 800px;
  }

  /* TOP BADGE */
  .hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 10px 24px;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 32px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
  }

  .hero-badge:hover {
    background: rgba(255, 255, 255, 0.12);
    transform: translateY(-2px);
  }

  .badge-dot {
    width: 8px;
    height: 8px;
    background: #4ade80;
    border-radius: 50%;
    animation: pulse 2s infinite;
  }

  @keyframes pulse {

    0%,
    100% {
      opacity: 1;
      transform: scale(1);
      box-shadow: 0 0 0 0 rgba(74, 222, 128, 0.7);
    }

    50% {
      opacity: 0.7;
      transform: scale(1.3);
      box-shadow: 0 0 0 10px rgba(74, 222, 128, 0);
    }
  }

  /* MAIN HEADING */
  .hero-premium h1 {
    font-size: 6rem;
    font-weight: 900;
    line-height: 1;
    margin-bottom: 20px;
    letter-spacing: -3px;
    position: relative;
  }

  .hero-premium .brand-name {
    display: block;
    background: linear-gradient(135deg, #ffffff 0%, #60a5fa 50%, #3b82f6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 16px;
    position: relative;
    animation: shimmer 3s ease-in-out infinite;
    background-size: 200% auto;
  }

  @keyframes shimmer {

    0%,
    100% {
      background-position: 0% center;
    }

    50% {
      background-position: 100% center;
    }
  }

  .hero-premium .tagline {
    display: block;
    font-size: 5rem;
    font-weight: 800;
    background: linear-gradient(135deg, #ffffff 0%, #e0e7ff 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  /* TAGLINE DESCRIPTION - FIXED VISIBILITY */
  .hero-description {
    font-size: 1.4rem;
    font-weight: 400;
    line-height: 1.8;
    color: rgba(255, 255, 255, 0.98);
    margin: 32px 0 48px;
    max-width: 650px;
    text-shadow:
      0 2px 8px rgba(0, 0, 0, 0.4),
      0 4px 16px rgba(0, 0, 0, 0.3),
      0 1px 2px rgba(0, 0, 0, 0.6);
    position: relative;
    z-index: 10;
  }

  .hero-description .highlight {
    color: #93c5fd;
    font-weight: 700;
    text-shadow:
      0 2px 12px rgba(59, 130, 246, 0.8),
      0 0 20px rgba(59, 130, 246, 0.5),
      0 4px 16px rgba(0, 0, 0, 0.4);
  }

  /* CTA BUTTONS */
  .hero-cta-wrapper {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    align-items: center;
  }

  .btn-primary-hero {
    position: relative;
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    color: #fff;
    padding: 20px 48px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.1rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: 2px solid transparent;
    box-shadow: 0 10px 40px rgba(37, 99, 235, 0.4);
    overflow: hidden;
  }

  .btn-primary-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    opacity: 0;
    transition: opacity 0.4s ease;
  }

  .btn-primary-hero:hover::before {
    opacity: 1;
  }

  .btn-primary-hero span,
  .btn-primary-hero svg {
    position: relative;
    z-index: 1;
  }

  .btn-primary-hero:hover {
    transform: translateY(-4px);
    box-shadow: 0 20px 60px rgba(37, 99, 235, 0.5);
    color: #fff;
  }

  .btn-secondary-hero {
    background: transparent;
    color: #fff;
    padding: 20px 48px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1.1rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    transition: all 0.4s ease;
    border: 2px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(10px);
  }

  .btn-secondary-hero:hover {
    background: rgba(255, 255, 255, 0.1);
    border-color: rgba(255, 255, 255, 0.5);
    transform: translateY(-4px);
    color: #fff;
  }

  /* STATS SHOWCASE */
  .hero-stats-premium {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 48px;
    margin-top: 80px;
    padding-top: 60px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }

  .stat-box {
    position: relative;
    padding: 28px;
    background: rgba(255, 255, 255, 0.04);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.08);
    border-radius: 20px;
    transition: all 0.4s ease;
  }

  .stat-box::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(59, 130, 246, 0.1) 0%, transparent 100%);
    border-radius: 20px;
    opacity: 0;
    transition: opacity 0.4s ease;
  }

  .stat-box:hover::before {
    opacity: 1;
  }

  .stat-box:hover {
    transform: translateY(-8px);
    border-color: rgba(59, 130, 246, 0.3);
    box-shadow: 0 20px 60px rgba(59, 130, 246, 0.2);
  }

  .stat-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
  }

  .stat-icon svg {
    width: 26px;
    height: 26px;
    color: #fff;
  }

  .stat-number-premium {
    font-size: 3.5rem;
    font-weight: 900;
    line-height: 1;
    margin-bottom: 12px;
    background: linear-gradient(135deg, #ffffff 0%, #93c5fd 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    position: relative;
    z-index: 1;
  }

  .stat-label-premium {
    font-size: 1.05rem;
    color: rgba(255, 255, 255, 0.7);
    font-weight: 500;
    letter-spacing: 0.5px;
    position: relative;
    z-index: 1;
  }

  /* FLOATING ILLUSTRATION */
  .hero-illustration {
    position: absolute;
    right: -5%;
    top: 50%;
    transform: translateY(-50%);
    width: 550px;
    z-index: 3;
    opacity: 0.15;
    animation: floatIllustration 20s infinite ease-in-out;
  }

  @keyframes floatIllustration {

    0%,
    100% {
      transform: translateY(-50%) translateX(0) rotate(0deg);
    }

    50% {
      transform: translateY(-55%) translateX(-20px) rotate(2deg);
    }
  }

  /* SCROLL INDICATOR */
  .scroll-hint {
    position: absolute;
    bottom: 50px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 14px;
    cursor: pointer;
  }

  .scroll-text {
    font-size: 0.75rem;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.6);
  }

  .scroll-mouse {
    width: 30px;
    height: 50px;
    border: 2px solid rgba(255, 255, 255, 0.3);
    border-radius: 25px;
    position: relative;
    animation: scrollBounce 2s infinite;
  }

  .scroll-mouse::before {
    content: '';
    position: absolute;
    top: 10px;
    left: 50%;
    transform: translateX(-50%);
    width: 4px;
    height: 10px;
    background: rgba(255, 255, 255, 0.6);
    border-radius: 2px;
    animation: scrollWheel 2s infinite;
  }

  @keyframes scrollBounce {

    0%,
    100% {
      transform: translateY(0);
    }

    50% {
      transform: translateY(-12px);
    }
  }

  @keyframes scrollWheel {
    0% {
      opacity: 1;
      top: 10px;
    }

    100% {
      opacity: 0;
      top: 30px;
    }
  }

  /* RESPONSIVE */
  @media (max-width: 1400px) {
    .hero-illustration {
      width: 450px;
    }
  }

  @media (max-width: 1200px) {
    .hero-premium h1 {
      font-size: 5rem;
    }

    .hero-premium .tagline {
      font-size: 4rem;
    }

    .hero-illustration {
      width: 400px;
      opacity: 0.1;
    }
  }

  @media (max-width: 992px) {
    .hero-premium {
      padding: 100px 0 60px;
    }

    .hero-premium h1 {
      font-size: 4rem;
      letter-spacing: -2px;
    }

    .hero-premium .tagline {
      font-size: 3.2rem;
    }

    .hero-description {
      font-size: 1.25rem;
    }

    .hero-stats-premium {
      grid-template-columns: repeat(2, 1fr);
      gap: 32px;
      margin-top: 60px;
    }

    .hero-illustration {
      display: none;
    }

    .geo-1,
    .geo-2,
    .geo-3 {
      display: none;
    }

    .orb-1,
    .orb-2,
    .orb-3 {
      opacity: 0.5;
    }

    .top-gradient-overlay {
      height: 250px;
    }
  }

  @media (max-width: 768px) {
    .hero-premium {
      min-height: auto;
      padding: 140px 0 60px;
    }

    .hero-premium h1 {
      font-size: 3rem;
      letter-spacing: -1.5px;
    }

    .hero-premium .tagline {
      font-size: 2.5rem;
    }

    .hero-description {
      font-size: 1.15rem;
      margin: 24px 0 36px;
    }

    .hero-cta-wrapper {
      flex-direction: column;
      width: 100%;
    }

    .btn-primary-hero,
    .btn-secondary-hero {
      width: 100%;
      justify-content: center;
      padding: 18px 40px;
    }

    .hero-stats-premium {
      grid-template-columns: 1fr;
      gap: 24px;
      margin-top: 50px;
      padding-top: 40px;
    }

    .stat-box {
      text-align: center;
      padding: 24px;
    }

    .stat-icon {
      margin: 0 auto 16px;
    }

    .stat-number-premium {
      font-size: 3rem;
    }

    .scroll-hint {
      display: none;
    }

    .digital-rain {
      opacity: 0.05;
    }

    .top-gradient-overlay {
      height: 180px;
    }

    .cloud-layer-1,
    .cloud-layer-2 {
      height: 180px;
    }
  }

  @media (max-width: 480px) {
    .hero-premium {
      padding: 120px 0 50px;
    }

    .hero-premium h1 {
      font-size: 2.2rem;
      letter-spacing: -1px;
    }

    .hero-premium .tagline {
      font-size: 1.9rem;
    }

    .hero-badge {
      font-size: 0.75rem;
      padding: 8px 18px;
    }

    .hero-description {
      font-size: 1rem;
    }

    .btn-primary-hero,
    .btn-secondary-hero {
      padding: 16px 32px;
      font-size: 1rem;
    }

    .stat-number-premium {
      font-size: 2.5rem;
    }

    .top-gradient-overlay {
      height: 150px;
    }

    .cloud-layer-1,
    .cloud-layer-2 {
      height: 140px;
    }
  }
</style>

<section id="hero" class="hero section hero-premium">

  <!-- PREMIUM CLOUD-LIKE TOP GRADIENT OVERLAY -->
  <div class="top-gradient-overlay"></div>
  <div class="cloud-layer-1"></div>
  <div class="cloud-layer-2"></div>

  <!-- Background Layers -->
  <div class="gradient-bg"></div>
  <div class="wave-overlay"></div>
  <div class="grid-overlay"></div>
  <div class="light-rays"></div>

  <!-- Floating Orbs -->
  <div class="floating-orbs">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
  </div>

  <!-- Particles -->
  <div class="particles">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
  </div>

  <!-- Digital Rain Effect -->
  <div class="digital-rain">
    <div class="rain-column"></div>
    <div class="rain-column"></div>
    <div class="rain-column"></div>
    <div class="rain-column"></div>
    <div class="rain-column"></div>
    <div class="rain-column"></div>
    <div class="rain-column"></div>
    <div class="rain-column"></div>
  </div>

  <!-- Pulsing Rings -->
  <div class="pulsing-rings">
    <div class="pulse-ring pulse-ring-1"></div>
    <div class="pulse-ring pulse-ring-2"></div>
    <div class="pulse-ring pulse-ring-3"></div>
  </div>

  <!-- Geometric Shapes -->
  <div class="geo-shape geo-1"></div>
  <div class="geo-shape geo-2"></div>
  <div class="geo-shape geo-3"></div>

  <!-- Floating Illustration -->
  <svg class="hero-illustration" viewBox="0 0 500 500" fill="none" xmlns="http://www.w3.org/2000/svg">
    <!-- Modern Building Silhouette -->
    <rect x="50" y="120" width="90" height="330" fill="white" opacity="0.4" />
    <rect x="160" y="160" width="90" height="290" fill="white" opacity="0.3" />
    <rect x="270" y="90" width="120" height="360" fill="white" opacity="0.5" />

    <!-- Windows Grid -->
    <g opacity="0.6">
      <rect x="65" y="140" width="18" height="25" fill="white" />
      <rect x="92" y="140" width="18" height="25" fill="white" />
      <rect x="118" y="140" width="18" height="25" fill="white" />
      <rect x="65" y="180" width="18" height="25" fill="white" />
      <rect x="92" y="180" width="18" height="25" fill="white" />
      <rect x="118" y="180" width="18" height="25" fill="white" />

      <rect x="175" y="180" width="18" height="25" fill="white" />
      <rect x="202" y="180" width="18" height="25" fill="white" />
      <rect x="228" y="180" width="18" height="25" fill="white" />

      <rect x="285" y="115" width="22" height="30" fill="white" />
      <rect x="318" y="115" width="22" height="30" fill="white" />
      <rect x="351" y="115" width="22" height="30" fill="white" />
    </g>

    <!-- Digital Elements -->
    <circle cx="420" cy="180" r="40" stroke="white" stroke-width="2" fill="none" opacity="0.3" />
    <circle cx="420" cy="180" r="25" stroke="white" stroke-width="2" fill="none" opacity="0.4" />
    <line x1="420" y1="140" x2="420" y2="220" stroke="white" stroke-width="2" opacity="0.3" />
    <line x1="380" y1="180" x2="460" y2="180" stroke="white" stroke-width="2" opacity="0.3" />
  </svg>

  <!-- Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="hero-content">

          <!-- Badge -->
          <div class="hero-badge" data-aos="fade-up">
            <span class="badge-dot"></span>
            <span>Construction & Digital Excellence</span>
          </div>

          <!-- Main Heading -->
          <h1 data-aos="fade-up" data-aos-delay="100">
            <span class="brand-name">Torucorp.</span>
            <span class="tagline">Build The Dignity</span>
          </h1>

          <!-- Description -->
          <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
            <span class="highlight">Building a Dignified Legacy with Digital Innovation and Sharia Integrity. Transforming visions into reality through excellence in construction and cutting-edge digital solutions.
            </span>
          </p>

          <!-- CTA Buttons -->
          <div class="hero-cta-wrapper" data-aos="fade-up" data-aos-delay="300">
            <a href="#portfolio" class="btn-primary-hero">
              <span>Explore Our Work</span>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
            <a href="#contact" class="btn-secondary-hero">
              <span>Start a Project</span>
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3" />
              </svg>
            </a>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- =============== /HERO SECTION ================= -->