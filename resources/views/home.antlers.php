<!-- ================= HERO SECTION — GLOBE WITH BUILDINGS ================= -->
<style>
  html,
  body {
    margin: 0;
    padding: 0;
    width: 100%;
    overflow-x: hidden;
  }

  .hero-premium {
    position: relative;
    width: 100vw;
    min-height: 100vh;
    min-height: 100dvh;
    overflow: hidden;
    color: #fff;
    display: flex;
    align-items: center;
    background: #050d1a;
  }

  /* ── BACKGROUND LAYERS ── */
  .gradient-bg {
    position: absolute;
    inset: 0;
    z-index: 1;
    background:
      radial-gradient(ellipse 80% 60% at 20% 30%, rgba(30, 80, 180, 0.40) 0%, transparent 60%),
      radial-gradient(ellipse 60% 50% at 80% 70%, rgba(10, 50, 130, 0.30) 0%, transparent 55%),
      linear-gradient(160deg, #050d1a 0%, #0a1628 45%, #0d1f3c 75%, #071220 100%);
  }

  .nebula {
    position: absolute;
    inset: 0;
    z-index: 2;
    pointer-events: none;
  }

  .nebula-1 {
    background:
      radial-gradient(ellipse 70% 40% at 15% 25%, rgba(59, 130, 246, 0.10) 0%, transparent 60%),
      radial-gradient(ellipse 50% 60% at 85% 60%, rgba(99, 102, 241, 0.08) 0%, transparent 55%);
    animation: nebulaFloat 25s ease-in-out infinite;
  }

  @keyframes nebulaFloat {

    0%,
    100% {
      transform: scale(1) translate(0, 0);
    }

    33% {
      transform: scale(1.05) translate(12px, -8px);
    }

    66% {
      transform: scale(0.97) translate(-8px, 12px);
    }
  }

  /* star canvas */
  #star-canvas {
    position: absolute;
    inset: 0;
    z-index: 3;
    pointer-events: none;
    width: 100%;
    height: 100%;
  }

  /* grid overlay */
  .grid-overlay {
    position: absolute;
    inset: 0;
    z-index: 4;
    background-image:
      linear-gradient(rgba(59, 130, 246, 0.05) 1px, transparent 1px),
      linear-gradient(90deg, rgba(59, 130, 246, 0.05) 1px, transparent 1px);
    background-size: 60px 60px;
    animation: gridMove 28s linear infinite;
  }

  @keyframes gridMove {
    0% {
      transform: translate(0, 0);
    }

    100% {
      transform: translate(60px, 60px);
    }
  }

  /* pulsing rings */
  .pulsing-rings {
    position: absolute;
    inset: 0;
    z-index: 5;
    overflow: hidden;
    pointer-events: none;
  }

  .pulse-ring {
    position: absolute;
    border: 1px solid rgba(59, 130, 246, 0.3);
    border-radius: 50%;
    animation: pulseExpand 8s ease-out infinite;
  }

  .pulse-ring-1 {
    top: 20%;
    left: 10%;
    width: 100px;
    height: 100px;
  }

  .pulse-ring-2 {
    top: 60%;
    right: 15%;
    width: 160px;
    height: 160px;
    animation-delay: 2.5s;
  }

  .pulse-ring-3 {
    bottom: 20%;
    left: 40%;
    width: 120px;
    height: 120px;
    animation-delay: 5s;
  }

  @keyframes pulseExpand {
    0% {
      transform: scale(0.4);
      opacity: 0;
    }

    30% {
      opacity: 0.6;
    }

    100% {
      transform: scale(2.8);
      opacity: 0;
    }
  }

  /* ── GLOBE CANVAS ── */
  #globe-canvas {
    position: absolute;
    right: 10%;
    top: 50%;
    transform: translateY(-50%);
    z-index: 6;
    pointer-events: none;
  }

  /* ── CONTENT ── */
  .hero-premium .container {
    position: relative;
    z-index: 10;
    max-width: 1320px;
    width: 100%;
    margin: 0 auto;
    padding: 0 24px;
  }

  .hero-content {
    max-width: 680px;
  }

  .hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.06);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.12);
    padding: 10px 24px;
    border-radius: 50px;
    font-size: 0.80rem;
    font-weight: 600;
    letter-spacing: 1.8px;
    text-transform: uppercase;
    margin-bottom: 32px;
    transition: all 0.3s ease;
  }

  .hero-badge:hover {
    border-color: rgba(59, 130, 246, 0.4);
    background: rgba(255, 255, 255, 0.10);
    transform: translateY(-2px);
  }

  .badge-dot {
    width: 8px;
    height: 8px;
    background: #4ade80;
    border-radius: 50%;
    animation: pulseDot 2s infinite;
    flex-shrink: 0;
  }

  @keyframes pulseDot {

    0%,
    100% {
      box-shadow: 0 0 0 0 rgba(74, 222, 128, 0.7);
    }

    50% {
      box-shadow: 0 0 0 8px rgba(74, 222, 128, 0);
      transform: scale(1.2);
    }
  }

  .hero-premium h1 {
    font-size: 5.8rem;
    font-weight: 900;
    line-height: 1;
    margin-bottom: 20px;
    letter-spacing: -3px;
  }

  .hero-premium .brand-name {
    display: block;
    background: linear-gradient(135deg, #ffffff 0%, #93c5fd 40%, #3b82f6 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin-bottom: 12px;
    animation: shimmer 4s ease-in-out infinite;
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
    font-size: 4.8rem;
    font-weight: 800;
    background: linear-gradient(135deg, #f8fafc 0%, #cbd5e1 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .hero-description {
    font-size: 1.15rem;
    font-weight: 400;
    line-height: 1.85;
    color: rgba(255, 255, 255, 0.68);
    margin: 28px 0 48px;
    max-width: 560px;
  }

  .hero-description .highlight {
    color: rgba(147, 197, 253, 0.92);
    font-weight: 500;
  }

  .hero-cta-wrapper {
    display: flex;
    gap: 14px;
    flex-wrap: wrap;
    align-items: center;
  }

  .btn-primary-hero {
    position: relative;
    background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
    color: #fff;
    padding: 16px 40px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: 1px solid rgba(59, 130, 246, 0.5);
    box-shadow: 0 8px 32px rgba(37, 99, 235, 0.4);
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .btn-primary-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    opacity: 0;
    transition: opacity 0.3s;
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
    transform: translateY(-3px);
    color: #fff;
    box-shadow: 0 16px 48px rgba(37, 99, 235, 0.55);
  }

  .btn-secondary-hero {
    background: rgba(255, 255, 255, 0.05);
    color: #fff;
    padding: 16px 40px;
    border-radius: 50px;
    font-weight: 700;
    font-size: 1rem;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    border: 1px solid rgba(255, 255, 255, 0.20);
    backdrop-filter: blur(12px);
    transition: all 0.4s ease;
  }

  .btn-secondary-hero:hover {
    background: rgba(255, 255, 255, 0.10);
    border-color: rgba(255, 255, 255, 0.40);
    transform: translateY(-3px);
    color: #fff;
  }

  /* scroll hint */
  .scroll-hint {
    position: absolute;
    bottom: 36px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    opacity: 0.55;
    transition: opacity 0.3s;
  }

  .scroll-hint:hover {
    opacity: 1;
  }

  .scroll-text {
    font-size: 0.68rem;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.8);
  }

  .scroll-mouse {
    width: 24px;
    height: 38px;
    border: 1.5px solid rgba(255, 255, 255, 0.4);
    border-radius: 12px;
    position: relative;
  }

  .scroll-mouse::before {
    content: '';
    position: absolute;
    top: 7px;
    left: 50%;
    transform: translateX(-50%);
    width: 3px;
    height: 7px;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 2px;
    animation: scrollWheel 2s infinite;
  }

  @keyframes scrollWheel {
    0% {
      opacity: 1;
      top: 7px;
    }

    100% {
      opacity: 0;
      top: 22px;
    }
  }

  /* ════════════════════════════════════
     RESPONSIVE
  ════════════════════════════════════ */
  @media (max-width: 1200px) {
    .hero-premium h1 {
      font-size: 4.8rem;
    }

    .hero-premium .tagline {
      font-size: 4rem;
    }

    #globe-canvas {
      right: -8%;
    }
  }

  @media (max-width: 992px) {
    .hero-premium h1 {
      font-size: 3.8rem;
      letter-spacing: -2px;
    }

    .hero-premium .tagline {
      font-size: 3.2rem;
    }

    .hero-description {
      font-size: 1.1rem;
    }

    #globe-canvas {
      right: -15%;
      width: 480px;
      height: 480px;
    }

    .hero-content {
      max-width: 560px;
    }
  }

  /* Mobile: sembunyikan globe canvas sepenuhnya */
  @media (max-width: 768px) {
    .hero-premium {
      min-height: 100dvh;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 0;
    }

    .hero-premium .container {
      padding: 0 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100dvh;
    }

    .hero-content {
      max-width: 100%;
      padding: 100px 0 80px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    /* Sembunyikan globe di mobile - tidak perlu render */
    #globe-canvas {
      display: none;
    }

    .hero-premium h1 {
      font-size: clamp(2.4rem, 10vw, 3.4rem);
      letter-spacing: -1.5px;
      margin-bottom: 14px;
    }

    .hero-premium .tagline {
      font-size: clamp(2rem, 8.5vw, 2.9rem);
    }

    .hero-badge {
      font-size: 0.72rem;
      padding: 8px 16px;
      margin-bottom: 22px;
      letter-spacing: 1.2px;
    }

    .hero-description {
      font-size: 1rem;
      line-height: 1.75;
      margin: 18px 0 32px;
    }

    .hero-cta-wrapper {
      flex-direction: column;
      gap: 12px;
    }

    .btn-primary-hero,
    .btn-secondary-hero {
      width: 100%;
      justify-content: center;
      padding: 15px 28px;
      font-size: 1rem;
      border-radius: 14px;
    }

    .scroll-hint {
      display: none;
    }

    .pulsing-rings {
      display: none;
    }

    .grid-overlay {
      opacity: 0.4;
    }
  }

  @media (max-width: 480px) {
    .hero-premium .container {
      padding: 0 16px;
    }

    .hero-content {
      padding: 88px 0 60px;
    }

    .hero-badge {
      font-size: 0.66rem;
      padding: 7px 13px;
      letter-spacing: 1px;
      margin-bottom: 18px;
    }

    .hero-premium h1 {
      font-size: clamp(2rem, 9vw, 2.6rem);
      letter-spacing: -1px;
      line-height: 1.05;
    }

    .hero-premium .tagline {
      font-size: clamp(1.7rem, 7.5vw, 2.2rem);
    }

    .hero-description {
      font-size: 0.95rem;
      margin: 14px 0 26px;
    }

    .btn-primary-hero,
    .btn-secondary-hero {
      padding: 14px 22px;
      font-size: 0.92rem;
      border-radius: 12px;
    }
  }

  @supports (padding: env(safe-area-inset-bottom)) {
    @media (max-width: 768px) {
      .hero-content {
        padding-bottom: calc(80px + env(safe-area-inset-bottom));
      }
    }
  }

  @media (max-width: 896px) and (orientation: landscape) {
    .hero-premium {
      min-height: 100dvh;
      padding: 0;
    }

    .hero-content {
      padding: 76px 0 46px;
    }

    .hero-premium h1 {
      font-size: clamp(1.8rem, 6vw, 2.8rem);
      letter-spacing: -1.5px;
    }

    .hero-premium .tagline {
      font-size: clamp(1.5rem, 5vw, 2.4rem);
    }

    .hero-description {
      font-size: 0.9rem;
      margin: 10px 0 20px;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .hero-cta-wrapper {
      flex-direction: row;
    }

    .btn-primary-hero,
    .btn-secondary-hero {
      flex: 1;
      justify-content: center;
      padding: 12px 18px;
      font-size: 0.88rem;
    }

    #globe-canvas {
      display: none;
    }

    .scroll-hint {
      display: none;
    }
  }
</style>

<section id="hero" class="hero section hero-premium">

  <div class="gradient-bg"></div>
  <div class="nebula nebula-1"></div>
  <canvas id="star-canvas"></canvas>
  <div class="grid-overlay"></div>

  <div class="pulsing-rings">
    <div class="pulse-ring pulse-ring-1"></div>
    <div class="pulse-ring pulse-ring-2"></div>
    <div class="pulse-ring pulse-ring-3"></div>
  </div>

  <!-- THREE.JS GLOBE — hanya tampil di desktop -->
  <canvas id="globe-canvas"></canvas>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="hero-content">
          <div class="hero-badge" data-aos="fade-up">
            <span class="badge-dot"></span>
            <span>Construction & Digital Excellence</span>
          </div>
          <h1 data-aos="fade-up" data-aos-delay="100">
            <span class="brand-name">Torucorp.</span>
            <span class="tagline">Build The Dignity</span>
          </h1>
          <p class="hero-description" data-aos="fade-up" data-aos-delay="200">
            <span class="highlight">Building a Dignified Legacy with Digital Innovation and Sharia
              Integrity. Transforming visions into reality through excellence in construction and
              cutting-edge digital solutions.</span>
          </p>
          <div class="hero-cta-wrapper" data-aos="fade-up" data-aos-delay="300">
            <a href="/torucorp-businesses" class="btn-primary-hero">
              <span>Explore Our Work</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
            <a href="#contact" class="btn-secondary-hero">
              <span>Start a Project</span>
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4M10 17l5-5-5-5M13.8 12H3" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="scroll-hint">
    <span class="scroll-text">Scroll</span>
    <div class="scroll-mouse"></div>
  </div>

</section>

<!-- ═══════════════════════════════════════
     STAR FIELD
═══════════════════════════════════════ -->
<script>
  (function() {
    var canvas = document.getElementById('star-canvas');
    if (!canvas) return;
    var ctx = canvas.getContext('2d');
    var W, H, stars = [],
      frameCount = 0;
    var isMobile = window.innerWidth <= 768;

    function resize() {
      var section = canvas.closest('section') || canvas.parentElement;
      W = canvas.width = section ? section.offsetWidth : window.innerWidth;
      H = canvas.height = section ? section.offsetHeight : window.innerHeight;
      isMobile = W <= 768;
    }

    function rand(a, b) {
      return a + Math.random() * (b - a);
    }

    function initStars() {
      stars = [];
      var density = isMobile ? 7000 : 3500;
      var count = Math.max(60, Math.floor((W * H) / density));
      for (var i = 0; i < count; i++) {
        var roll = Math.random();
        stars.push({
          x: Math.random() * W,
          y: Math.random() * H,
          r: roll < 0.65 ? rand(0.2, 0.7) : roll < 0.90 ? rand(0.7, 1.4) : rand(1.4, 2.0),
          alpha: rand(0.2, 0.8),
          dir: Math.random() > 0.5 ? 1 : -1,
          speed: rand(0.002, 0.005),
          blue: Math.random() > 0.75
        });
      }
    }

    function draw() {
      ctx.clearRect(0, 0, W, H);
      for (var i = 0; i < stars.length; i++) {
        var s = stars[i];
        s.alpha += s.dir * s.speed;
        if (s.alpha > 0.9) {
          s.alpha = 0.9;
          s.dir = -1;
        }
        if (s.alpha < 0.1) {
          s.alpha = 0.1;
          s.dir = 1;
        }
        ctx.beginPath();
        ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
        ctx.fillStyle = s.blue ?
          'rgba(180,210,255,' + s.alpha + ')' :
          'rgba(255,255,255,' + s.alpha + ')';
        ctx.fill();
      }
      frameCount++;
      requestAnimationFrame(draw);
    }

    window.addEventListener('resize', function() {
      resize();
      initStars();
    });
    resize();
    initStars();
    draw();
  })();
</script>

<!-- ═══════════════════════════════════════
     THREE.JS GLOBE — HANYA LOAD DI DESKTOP
═══════════════════════════════════════ -->
<script>
  // Hanya load Three.js jika layar lebih dari 768px (desktop/tablet besar)
  if (window.innerWidth > 768) {
    var threeScript = document.createElement('script');
    threeScript.src = 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js';
    threeScript.onload = function() {
      (function() {
        var canvas = document.getElementById('globe-canvas');
        if (!canvas || typeof THREE === 'undefined') return;

        var isMobile = window.innerWidth <= 768;
        var SIZE = isMobile ? 340 : 560;

        canvas.width = SIZE;
        canvas.height = SIZE;
        canvas.style.width = SIZE + 'px';
        canvas.style.height = SIZE + 'px';

        /* ── Renderer ── */
        var renderer = new THREE.WebGLRenderer({
          canvas: canvas,
          antialias: true,
          alpha: true
        });
        renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
        renderer.setSize(SIZE, SIZE);
        renderer.setClearColor(0x000000, 0);

        /* ── Scene / Camera ── */
        var scene = new THREE.Scene();
        var camera = new THREE.PerspectiveCamera(45, 1, 0.1, 100);
        camera.position.set(0, 0, 3.2);

        /* ── Lights ── */
        var ambient = new THREE.AmbientLight(0x223366, 1.2);
        scene.add(ambient);

        var sun = new THREE.DirectionalLight(0x6699ff, 2.0);
        sun.position.set(4, 3, 4);
        scene.add(sun);

        var rimLight = new THREE.DirectionalLight(0x3b82f6, 0.8);
        rimLight.position.set(-3, -1, -2);
        scene.add(rimLight);

        /* ── Globe ── */
        var globeGeo = new THREE.SphereGeometry(1, 64, 64);

        var wireGeo = new THREE.SphereGeometry(1.003, 32, 32);
        var wireMat = new THREE.MeshBasicMaterial({
          color: 0x2563eb,
          wireframe: true,
          transparent: true,
          opacity: 0.07
        });
        var wireMesh = new THREE.Mesh(wireGeo, wireMat);
        scene.add(wireMesh);

        var globeMat = new THREE.MeshPhongMaterial({
          color: 0x0a1628,
          emissive: 0x071020,
          emissiveIntensity: 0.4,
          shininess: 40,
          transparent: true,
          opacity: 0.92
        });
        var globe = new THREE.Mesh(globeGeo, globeMat);
        scene.add(globe);

        var atmoGeo = new THREE.SphereGeometry(1.08, 64, 64);
        var atmoMat = new THREE.MeshBasicMaterial({
          color: 0x1e40af,
          transparent: true,
          opacity: 0.12,
          side: THREE.BackSide
        });
        var atmo = new THREE.Mesh(atmoGeo, atmoMat);
        scene.add(atmo);

        var outerGeo = new THREE.SphereGeometry(1.14, 64, 64);
        var outerMat = new THREE.MeshBasicMaterial({
          color: 0x3b82f6,
          transparent: true,
          opacity: 0.05,
          side: THREE.BackSide
        });
        scene.add(new THREE.Mesh(outerGeo, outerMat));

        /* ── Continent dots ── */
        var landPoints = [
          [25, 80],
          [30, 105],
          [35, 110],
          [22, 114],
          [28, 77],
          [37, 127],
          [35, 139],
          [40, 116],
          [15, 100],
          [20, 85],
          [10, 77],
          [5, 100],
          [55, 60],
          [50, 80],
          [45, 85],
          [60, 90],
          [48, 135],
          [43, 125],
          [51, 0],
          [48, 2],
          [52, 13],
          [41, 29],
          [55, 37],
          [50, 30],
          [45, 25],
          [46, 14],
          [40, 3],
          [37, 15],
          [53, -3],
          [48, 17],
          [50, 20],
          [43, 5],
          [30, 30],
          [0, 20],
          [10, 10],
          [-10, 20],
          [-20, 30],
          [-30, 25],
          [5, 37],
          [15, 30],
          [20, 10],
          [25, 15],
          [35, 35],
          [-5, 37],
          [-15, 27],
          [8, 3],
          [40, -100],
          [35, -80],
          [30, -90],
          [45, -75],
          [55, -95],
          [25, -100],
          [20, -100],
          [10, -75],
          [-10, -60],
          [-20, -48],
          [-30, -60],
          [-15, -75],
          [45, -65],
          [-5, -77],
          [50, -110],
          [60, -100],
          [-25, 133],
          [-30, 150],
          [-20, 140],
          [-35, 145],
          [-15, 130],
          [-27, 120],
        ];

        var dotGeo = new THREE.SphereGeometry(0.008, 6, 6);
        var dotMat = new THREE.MeshBasicMaterial({
          color: 0x3b82f6
        });

        landPoints.forEach(function(coord) {
          var lat = coord[0] * Math.PI / 180;
          var lng = coord[1] * Math.PI / 180;
          var r = 1.01;
          var dot = new THREE.Mesh(dotGeo, dotMat.clone());
          dot.position.set(r * Math.cos(lat) * Math.cos(lng), r * Math.sin(lat), r * Math.cos(lat) * Math.sin(lng));
          dot.material.opacity = 0.5 + Math.random() * 0.3;
          dot.material.transparent = true;
          globe.add(dot);
        });

        /* ── City lights ── */
        var cities = [
          [51.5, -0.1, 'london'],
          [48.9, 2.3, 'paris'],
          [52.5, 13.4, 'berlin'],
          [41.0, 29.0, 'istanbul'],
          [55.7, 37.6, 'moscow'],
          [40.7, -74, 'newyork'],
          [34.0, -118, 'la'],
          [41.8, -87.6, 'chicago'],
          [19.4, -99.1, 'mexico'],
          [-23.5, -46.6, 'saopaulo'],
          [35.7, 139.7, 'tokyo'],
          [31.2, 121.5, 'shanghai'],
          [22.3, 114.2, 'hongkong'],
          [28.6, 77.2, 'delhi'],
          [1.3, 103.8, 'singapore'],
          [-33.9, 151.2, 'sydney'],
          [30.0, 31.2, 'cairo'],
          [6.5, 3.4, 'lagos'],
          [-26, 28, 'joburg'],
          [19.1, 72.9, 'mumbai'],
          [37.6, 127, 'seoul'],
          [13.75, 100.5, 'bangkok'],
          [-6.2, 106.8, 'jakarta'],
        ];

        var cityGeo = new THREE.SphereGeometry(0.014, 8, 8);

        cities.forEach(function(city) {
          var lat = city[0] * Math.PI / 180;
          var lng = city[1] * Math.PI / 180;
          var r = 1.012;
          var cityMat = new THREE.MeshBasicMaterial({
            color: 0x60a5fa,
            transparent: true,
            opacity: 0.85
          });
          var dot = new THREE.Mesh(cityGeo, cityMat);
          dot.position.set(r * Math.cos(lat) * Math.cos(lng), r * Math.sin(lat), r * Math.cos(lat) * Math.sin(lng));
          globe.add(dot);
        });

        /* ── Buildings ── */
        function latLngToVec3(lat, lng, radius) {
          var phi = (90 - lat) * Math.PI / 180;
          var theta = (lng + 180) * Math.PI / 180;
          return new THREE.Vector3(
            -radius * Math.sin(phi) * Math.cos(theta),
            radius * Math.cos(phi),
            radius * Math.sin(phi) * Math.sin(theta)
          );
        }

        function addBuilding(lat, lng, height, width, color) {
          var surfacePos = latLngToVec3(lat, lng, 1.0);
          var normal = surfacePos.clone().normalize();
          var bGeo = new THREE.BoxGeometry(width, height, width);
          var bMat = new THREE.MeshPhongMaterial({
            color: color,
            emissive: color,
            emissiveIntensity: 0.25,
            transparent: true,
            opacity: 0.88
          });
          var building = new THREE.Mesh(bGeo, bMat);
          var pos = normal.clone().multiplyScalar(1.0 + height / 2);
          building.position.copy(pos);
          var up = new THREE.Vector3(0, 1, 0);
          var quaternion = new THREE.Quaternion().setFromUnitVectors(up, normal);
          building.quaternion.copy(quaternion);
          globe.add(building);

          var glowGeo = new THREE.SphereGeometry(width * 0.6, 8, 8);
          var glowMat = new THREE.MeshBasicMaterial({
            color: color,
            transparent: true,
            opacity: 0.35
          });
          var glow = new THREE.Mesh(glowGeo, glowMat);
          var glowPos = normal.clone().multiplyScalar(1.0 + height + 0.01);
          glow.position.copy(glowPos);
          globe.add(glow);
          return building;
        }

        var buildingDefs = [{
            lat: -6.2,
            lng: 106.8,
            buildings: [{
                h: 0.18,
                w: 0.028,
                color: 0x2563eb
              },
              {
                h: 0.14,
                w: 0.022,
                color: 0x3b82f6,
                dLat: 0.6,
                dLng: 0.5
              },
              {
                h: 0.10,
                w: 0.020,
                color: 0x60a5fa,
                dLat: -0.4,
                dLng: 0.8
              },
              {
                h: 0.12,
                w: 0.018,
                color: 0x1d4ed8,
                dLat: 0.8,
                dLng: -0.4
              },
              {
                h: 0.08,
                w: 0.016,
                color: 0x93c5fd,
                dLat: -0.6,
                dLng: -0.7
              },
            ]
          },
          {
            lat: 35.7,
            lng: 139.7,
            buildings: [{
                h: 0.16,
                w: 0.026,
                color: 0x1e40af
              },
              {
                h: 0.12,
                w: 0.020,
                color: 0x2563eb,
                dLat: 0.5,
                dLng: 0.6
              },
              {
                h: 0.09,
                w: 0.018,
                color: 0x3b82f6,
                dLat: -0.5,
                dLng: 0.4
              },
              {
                h: 0.11,
                w: 0.022,
                color: 0x60a5fa,
                dLat: 0.7,
                dLng: -0.5
              },
            ]
          },
          {
            lat: 25.2,
            lng: 55.3,
            buildings: [{
                h: 0.22,
                w: 0.025,
                color: 0x60a5fa
              },
              {
                h: 0.16,
                w: 0.020,
                color: 0x2563eb,
                dLat: 0.4,
                dLng: 0.5
              },
              {
                h: 0.12,
                w: 0.018,
                color: 0x3b82f6,
                dLat: -0.5,
                dLng: 0.4
              },
              {
                h: 0.18,
                w: 0.022,
                color: 0x1d4ed8,
                dLat: 0.6,
                dLng: -0.5
              },
            ]
          },
          {
            lat: 40.7,
            lng: -74.0,
            buildings: [{
                h: 0.20,
                w: 0.026,
                color: 0x2563eb
              },
              {
                h: 0.15,
                w: 0.022,
                color: 0x3b82f6,
                dLat: 0.4,
                dLng: 0.5
              },
              {
                h: 0.11,
                w: 0.018,
                color: 0x60a5fa,
                dLat: -0.4,
                dLng: 0.4
              },
              {
                h: 0.13,
                w: 0.020,
                color: 0x1e40af,
                dLat: 0.6,
                dLng: -0.4
              },
            ]
          },
          {
            lat: 1.3,
            lng: 103.8,
            buildings: [{
                h: 0.15,
                w: 0.023,
                color: 0x3b82f6
              },
              {
                h: 0.11,
                w: 0.018,
                color: 0x60a5fa,
                dLat: 0.4,
                dLng: 0.5
              },
              {
                h: 0.09,
                w: 0.016,
                color: 0x2563eb,
                dLat: -0.3,
                dLng: 0.4
              },
            ]
          },
          {
            lat: 31.2,
            lng: 121.5,
            buildings: [{
                h: 0.18,
                w: 0.025,
                color: 0x1e40af
              },
              {
                h: 0.13,
                w: 0.020,
                color: 0x2563eb,
                dLat: 0.4,
                dLng: 0.5
              },
              {
                h: 0.10,
                w: 0.017,
                color: 0x3b82f6,
                dLat: -0.4,
                dLng: 0.4
              },
              {
                h: 0.14,
                w: 0.021,
                color: 0x60a5fa,
                dLat: 0.6,
                dLng: -0.5
              },
            ]
          },
          {
            lat: 51.5,
            lng: -0.1,
            buildings: [{
                h: 0.13,
                w: 0.022,
                color: 0x2563eb
              },
              {
                h: 0.10,
                w: 0.018,
                color: 0x3b82f6,
                dLat: 0.4,
                dLng: 0.5
              },
              {
                h: 0.08,
                w: 0.015,
                color: 0x60a5fa,
                dLat: -0.4,
                dLng: 0.4
              },
            ]
          },
          {
            lat: -33.9,
            lng: 151.2,
            buildings: [{
                h: 0.12,
                w: 0.021,
                color: 0x3b82f6
              },
              {
                h: 0.09,
                w: 0.017,
                color: 0x60a5fa,
                dLat: 0.4,
                dLng: 0.5
              },
              {
                h: 0.07,
                w: 0.015,
                color: 0x2563eb,
                dLat: -0.3,
                dLng: 0.4
              },
            ]
          },
        ];

        buildingDefs.forEach(function(cluster) {
          cluster.buildings.forEach(function(b) {
            addBuilding(cluster.lat + (b.dLat || 0), cluster.lng + (b.dLng || 0), b.h, b.w, b.color);
          });
        });

        /* ── Connection arcs ── */
        var arcConnections = [
          [
            [-6.2, 106.8],
            [35.7, 139.7]
          ],
          [
            [-6.2, 106.8],
            [1.3, 103.8]
          ],
          [
            [25.2, 55.3],
            [51.5, -0.1]
          ],
          [
            [40.7, -74.0],
            [51.5, -0.1]
          ],
          [
            [31.2, 121.5],
            [35.7, 139.7]
          ],
        ];

        arcConnections.forEach(function(pair) {
          var p1 = latLngToVec3(pair[0][0], pair[0][1], 1.02);
          var p2 = latLngToVec3(pair[1][0], pair[1][1], 1.02);
          var mid = p1.clone().add(p2).multiplyScalar(0.5);
          mid.normalize().multiplyScalar(1.25);
          var curve = new THREE.QuadraticBezierCurve3(p1, mid, p2);
          var pts = curve.getPoints(40);
          var arcGeo = new THREE.BufferGeometry().setFromPoints(pts);
          var arcMat = new THREE.LineBasicMaterial({
            color: 0x3b82f6,
            transparent: true,
            opacity: 0.25
          });
          globe.add(new THREE.Line(arcGeo, arcMat));
        });

        /* ── Rotation group ── */
        var pivot = new THREE.Group();
        pivot.add(globe);
        pivot.add(wireMesh);
        pivot.add(atmo);
        scene.add(pivot);
        pivot.rotation.x = 0.25;

        /* ── Animate ── */
        var clock = new THREE.Clock();

        function animate() {
          requestAnimationFrame(animate);
          var t = clock.getElapsedTime();
          globe.rotation.y = t * 0.12;
          wireMesh.rotation.y = t * 0.12;
          pivot.rotation.z = Math.sin(t * 0.3) * 0.04;
          atmo.material.opacity = 0.10 + Math.sin(t * 0.8) * 0.03;
          renderer.render(scene, camera);
        }

        animate();

        /* ── Resize handler ── */
        window.addEventListener('resize', function() {
          var newSize = window.innerWidth <= 768 ? 340 : 560;
          if (newSize !== SIZE) {
            SIZE = newSize;
            canvas.width = newSize;
            canvas.height = newSize;
            canvas.style.width = newSize + 'px';
            canvas.style.height = newSize + 'px';
            renderer.setSize(newSize, newSize);
          }
        });

      })();
    };
    document.head.appendChild(threeScript);
  }
</script>
<!-- =============== /HERO SECTION ================= -->