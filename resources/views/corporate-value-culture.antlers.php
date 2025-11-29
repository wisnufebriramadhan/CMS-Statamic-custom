<!-- FEATURES SECTION — Toru palette adapted -->
<style>
  :root {
    --blue-1: #2D61A6;
    /* primary */
    --blue-2: #11538C;
    /* deep */
    --blue-3: #4B7BA6;
    /* mid */
    --blue-4: #84A4BF;
    /* light */
    --bg-soft: #F2F2F2;
    --text: #12202b;
    --muted: #5b6b76;
    --card-radius: 12px;
  }

  /* Section container */
  .features-section {
    padding: 60px 0 90px;
    background: #ffffff;
    position: relative;
  }

  /* Header */
  .corporate-badge {
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

  .corporate-sub {
    max-width: 720px;
    margin: 0 auto;
    color: var(--muted);
    font-size: 1rem;
    line-height: 1.6;
  }

  /* Main layout: two columns wrapper */
  .features-grid {
    display: flex;
    gap: 40px;
    align-items: flex-start;
    position: relative;
  }

  /* Columns each hold stacked cards */
  .left-col,
  .right-col {
    width: 50%;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  /* Vertical divider (subtle using Toru deep color) */
  .features-grid:after {
    content: "";
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    top: 8px;
    bottom: 8px;
    width: 2px;
    background: linear-gradient(180deg,
        rgba(17, 83, 140, 0.08),
        rgba(17, 83, 140, 0.02));
    border-radius: 2px;
    pointer-events: none;
  }

  /* Watermark texts */
  .watermark {
    position: absolute;
    top: 15%;
    font-weight: 900;
    letter-spacing: 8px;
    font-size: 100px;
    color: rgba(45, 97, 166, 0.03);
    /* using blue-1 soft */
    pointer-events: none;
    user-select: none;
    z-index: 0;
  }

  .watermark.left {
    left: 12%;
    transform: translateY(25%);
    text-align: left;
  }

  .watermark.right {
    right: 12%;
    transform: translateY(25%);
    text-align: right;
  }

  /* Card / feature item */
  .feature-box {
    z-index: 2;
    /* above watermark */
    background: var(--card-bg, #ffffff);
    border-radius: var(--card-radius);
    padding: 18px;
    box-shadow: 0 18px 44px rgba(17, 73, 140, 0.06);
    /* tinted by Toru mid */
    transition: transform .24s cubic-bezier(.2, .9, .2, 1), box-shadow .24s ease;
    display: flex;
    align-items: flex-start;
    gap: 14px;
    min-height: 82px;
    overflow: hidden;
    position: relative;
    border: 1px solid rgba(75, 123, 166, 0.06);
  }

  .feature-box:hover {
    transform: translateY(-8px);
    box-shadow: 0 28px 60px rgba(17, 73, 140, 0.10);
  }

  /* Icon box */
  .feature-icon {
    min-width: 58px;
    min-height: 58px;
    border-radius: 12px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    /* subtle two-tone using palette */
    background: linear-gradient(135deg,
        rgba(45, 97, 166, 0.10),
        rgba(75, 123, 166, 0.04));
    color: var(--blue-1);
    flex-shrink: 0;
    box-shadow: inset 0 -2px 6px rgba(17, 73, 140, 0.02);
  }

  /* Title with initial letter styling */
  .value-title {
    font-size: clamp(15px, 1.6vw, 18px);
    font-weight: 700;
    color: var(--text);
    display: flex;
    align-items: center;
    gap: 10px;
    margin: 6px 0 8px 0;
    line-height: 1.12;
  }

  .initial-letter {
    display: inline-block;
    font-weight: 900;
    color: var(--blue-1);
    /* primary */
    margin-right: 8px;
    font-size: clamp(30px, 3.6vw, 40px);

    /* initial state for animation */
    opacity: 0;
    transform: translateY(-8px) scale(.6);
    will-change: transform, opacity;
  }

  .value-desc {
    color: var(--muted);
    margin: 0;
    font-size: clamp(13px, 1.4vw, 15px);
  }

  /* Animation: slide down/up when parent gets .in-view */
  .feature-box {
    opacity: 0;
    transform: translateY(12px);
    transition: transform .6s cubic-bezier(.2, .9, .2, 1), opacity .6s ease, box-shadow .18s ease;
  }

  .left-col .feature-box {
    transform: translateY(-18px);
  }

  /* slightly above */
  .right-col .feature-box {
    transform: translateY(18px);
  }

  /* slightly below */

  .features.section.in-view .left-col .feature-box {
    opacity: 1;
    transform: translateY(0);
  }

  .features.section.in-view .right-col .feature-box {
    opacity: 1;
    transform: translateY(0);
  }

  /* Pop animation for initial-letter */
  .initial-letter.animate {
    animation: letterPop 0.62s cubic-bezier(.2, .9, .2, 1) forwards;
  }

  @keyframes letterPop {
    0% {
      opacity: 0;
      transform: translateY(-12px) scale(.5);
    }

    60% {
      opacity: 1;
      transform: translateY(0) scale(1.12);
    }

    100% {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  /* Accessibility focus style */
  .feature-box:focus-within {
    outline: 3px solid rgba(17, 73, 140, 0.08);
    outline-offset: 6px;
  }

  /* Responsive: stacked columns */
  @media (max-width: 991.98px) {
    .features-grid {
      flex-direction: column;
      gap: 18px;
    }

    .left-col,
    .right-col {
      width: 100%;
    }

    .features-grid:after {
      display: none;
    }

    .features-section {
      padding: 40px 0;
    }

    .corporate-badge {
      padding: 10px 18px;
      font-size: 1rem;
    }

    .watermark {
      display: none;
    }
  }

  /* Small screens tweaks */
  @media (max-width: 420px) {
    .feature-icon {
      min-width: 46px;
      min-height: 46px;
      font-size: 18px;
      border-radius: 10px;
    }

    .initial-letter {
      font-size: 28px;
      margin-right: 6px;
    }

    .value-title {
      font-size: 15px;
    }

    .value-desc {
      font-size: 14px;
    }

    .corporate-sub {
      font-size: 15px;
    }
  }

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

  /* helper for staggering (JS sets delays) */
</style>

<section id="features" class="features section" aria-labelledby="features-title">
  <div class="container">

    <!-- HEADER -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-10">
        <div class="corporate-badge fade-down">Corporate Value & Culture</div>
        <p class="corporate-sub fade">
          Foundational values that shape how Torucorp works, <br>innovates, and contributes to society.
        </p>
      </div>
    </div>

    <!-- Watermarks -->
    <div class="watermark left" aria-hidden="true">TORU</div>
    <div class="watermark right" aria-hidden="true">CORP</div>

    <!-- Grid (two columns) -->
    <div class="features-grid" role="list">
      <!-- LEFT column -->
      <div class="left-col" role="list">
        <article class="feature-box" role="listitem" data-index="0" tabindex="0">
          <div class="feature-icon" aria-hidden="true"><i class="bi bi-check-lg"></i></div>
          <div>
            <h3 class="value-title"><span class="initial-letter">T</span> – Taqwa (Integrity &amp; Faithfulness)</h3>
            <p class="value-desc">Every action is grounded in devotion to Allah Subhanahu Wa Ta’ala. <br> Toru uphold honesty, responsibility and professionalism <br>as acts of worship.</p>
          </div>
        </article>

        <article class="feature-box" role="listitem" data-index="1" tabindex="0">
          <div class="feature-icon" aria-hidden="true"><i class="bi bi-gear-fill"></i></div>
          <div>
            <h3 class="value-title"><span class="initial-letter">O</span> – Optimized Excellence</h3>
            <p class="value-desc">Toru strive for excellence by optimizing resources, time and energy – ensuring quality and halal values remain uncompromised.</p>
          </div>
        </article>

        <article class="feature-box" role="listitem" data-index="2" tabindex="0">
          <div class="feature-icon" aria-hidden="true"><i class="bi bi-shield-lock-fill"></i></div>
          <div>
            <h3 class="value-title"><span class="initial-letter">R</span> – Responsibility (Amanah &amp; Care)</h3>
            <p class="value-desc">Toru are deeply committed to social, environmental and professional responsibility – ensuring every project brings positive impact.</p>
          </div>
        </article>

        <article class="feature-box" role="listitem" data-index="3" tabindex="0">
          <div class="feature-icon" aria-hidden="true"><i class="bi bi-people-fill"></i></div>
          <div>
            <h3 class="value-title"><span class="initial-letter">U</span> – Unity (Collaboration &amp; Brotherhood)</h3>
            <p class="value-desc">Toru believe in teamwork and solidarity – building success together through strong collaboration and mutual respect.</p>
          </div>
        </article>
      </div>

      <!-- RIGHT column -->
      <div class="right-col" role="list">
        <article class="feature-box" role="listitem" data-index="4" tabindex="0">
          <div class="feature-icon" aria-hidden="true"><i class="bi bi-hand-thumbs-up-fill"></i></div>
          <div>
            <h3 class="value-title"><span class="initial-letter">C</span> – Commitment</h3>
            <p class="value-desc">Toru fulfill every promise with sincerity, ensuring our partners trust and satisfaction. Manage field service efficiently and safely during challenging times.</p>
          </div>
        </article>

        <article class="feature-box" role="listitem" data-index="5" tabindex="0">
          <div class="feature-icon" aria-hidden="true"><i class="bi bi-award-fill"></i></div>
          <div>
            <h3 class="value-title"><span class="initial-letter">O</span> – Ownership</h3>
            <p class="value-desc">Toru take full accountability for every decision and result, <br> leading with responsibility and pride.</p>
          </div>
        </article>

        <article class="feature-box" role="listitem" data-index="6" tabindex="0">
          <div class="feature-icon" aria-hidden="true"><i class="bi bi-clock-fill"></i></div>
          <div>
            <h3 class="value-title"><span class="initial-letter">R</span> – Reliability</h3>
            <p class="value-desc">Toru are dependable, consistent and trustworthy in delivering excellence across every project.</p>
          </div>
        </article>

        <article class="feature-box" role="listitem" data-index="7" tabindex="0">
          <div class="feature-icon" aria-hidden="true"><i class="bi bi-briefcase-fill"></i></div>
          <div>
            <h3 class="value-title"><span class="initial-letter">P</span> – Professional</h3>
            <p class="value-desc">Toru maintain discipline, ethics and respect in every interaction – reflecting Sharia Law and Corporate Principles. Prioritizing product quality and clients.</p>
          </div>
        </article>
      </div>
    </div> <!-- /features-grid -->
  </div> <!-- /container-inner -->
</section>

<!-- Optional small JS to add .in-view when section enters viewport and animate initials -->
<script>
  (function() {
    const section = document.querySelector('.features.section');
    if (!section) return;

    // Intersection observer to toggle .in-view
    const io = new IntersectionObserver((entries) => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          section.classList.add('in-view');

          // stagger initial-letter pop
          const initials = section.querySelectorAll('.initial-letter');
          initials.forEach((el, i) => {
            setTimeout(() => el.classList.add('animate'), i * 120 + 80);
          });

          io.disconnect();
        }
      });
    }, {
      threshold: 0.18
    });

    io.observe(section);

    // Add small stagger delays to feature-box children for nicer entrance
    const leftBoxes = section.querySelectorAll('.left-col .feature-box');
    leftBoxes.forEach((el, i) => el.style.transitionDelay = (i * 0.08) + 's');
    const rightBoxes = section.querySelectorAll('.right-col .feature-box');
    rightBoxes.forEach((el, i) => el.style.transitionDelay = (i * 0.08 + 0.06) + 's');
  })();
</script>