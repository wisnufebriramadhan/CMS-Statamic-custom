<section id="about" class="about-section section">
  <div class="container">

    <!-- Hero header -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-10">
        <div class="about-badge fade-down">{{heading}}</div>
        <p class="about-lead fade">
          Torucorp Indonesia is committed to the highest ethical, legal and Sharia-aligned standards.
          Our governance model ensures integrity, accountability and sustainability across all operations.
        </p>
      </div>
    </div>

    <!-- TWO COLUMNS -->
    <div class="row gx-5 gy-4 align-items-start">
      <!-- LEFT -->
      <div class="col-lg-6">
        <div class="col-inner left-wrap d-flex flex-column h-100 fade-up">

          <h3 class="section-label">Vision</h3>
          <blockquote class="quote-box stagger-1" aria-label="Vision quote">
            “Torucorp as an Indonesian brand to become a leading Sharia based holding company in construction,
            property development and digitalization, recognized for integrity, innovation and impact.”
          </blockquote>

          <h3 class="section-label mt-3">QS An-Nur : 37</h3>
          <blockquote class="quote-box stagger-2" aria-label="QS An-Nur quote">
            “Those who are not distracted by trade and buying and selling from the remembrance of Allah, the prayer,
            and the giving of alms. They fear the day when hearts and sight will be shaken (the Day of Judgement).”
          </blockquote>

          <h3 class="section-label mt-3">HR Bukhari, 2/1966</h3>
          <blockquote class="quote-box stagger-3" aria-label="Hadith">
            “There is no food that is better for a person to eat, than eating from the work of his own hands. And indeed
            Prophet Dawud, he ate from the labor of his own hands.”
          </blockquote>

        </div>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-6">
        <div class="col-inner right-wrap d-flex flex-column h-100 fade-up">

          <h3 class="section-label">Mission</h3>
          <ul class="mission-list" aria-label="Mission list">
            <li class="stagger-1">
              <span class="mi-icon" aria-hidden="true"><i class="bi bi-check2"></i></span>
              <span>Deliver sustainable and ethical construction projects that reflect Sharia values</span>
            </li>

            <li class="stagger-2">
              <span class="mi-icon" aria-hidden="true"><i class="bi bi-check2"></i></span>
              <span>Empower human potential through teamwork, responsibility and excellence</span>
            </li>

            <li class="stagger-3">
              <span class="mi-icon" aria-hidden="true"><i class="bi bi-check2"></i></span>
              <span>Build partnerships rooted in trust, transparency and mutual growth</span>
            </li>

            <li class="stagger-4">
              <span class="mi-icon" aria-hidden="true"><i class="bi bi-check2"></i></span>
              <span>Foster innovation that benefits society and preserves the environment</span>
            </li>
          </ul>

          <div class="mt-auto" aria-hidden="true"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- STYLES + ANIMATIONS -->
  <style>
    :root {
      --blue-1: #2D61A6;
      --blue-2: #11538C;
      --blue-3: #4B7BA6;
      --blue-4: #84A4BF;
      --muted: #5b6b76;
      --card-radius: 14px;
      --shadow: 0 16px 40px rgba(17, 73, 140, 0.06);
    }

    /* ===========================
       BASE PAGE STYLE
    ============================*/
    .about-section {
      padding: 60px 0 90px;
      background: #ffffff;
      position: relative;
    }

    .about-badge {
      display: inline-block;
      background: rgba(69, 115, 180, 0.08);
      color: var(--blue-2);
      font-weight: 800;
      padding: 14px 26px;
      border-radius: 999px;
      font-size: 1.15rem;
      margin-top: 60px;
      margin-bottom: 10px;
      letter-spacing: .6px;
      box-shadow: 0 6px 20px rgba(17, 73, 140, 0.04);
    }

    .about-lead {
      color: var(--muted);
      margin-top: 14px;
      font-size: 1rem;
      line-height: 1.7;
      max-width: 100%;
      margin-left: auto;
      margin-right: auto;
    }

    .col-inner {
      background: #fff;
      padding: 22px;
      border-radius: var(--card-radius);
      min-height: 100%;
      display: flex;
      flex-direction: column;
      gap: 16px;
      box-shadow: 0 10px 30px rgba(17, 73, 140, 0.04);
      border: 1px solid rgba(75, 123, 166, 0.06);
    }

    .section-label {
      font-weight: 700;
      color: var(--blue-2);
      margin-bottom: 8px;
      font-size: 1.02rem;
    }

    .quote-box {
      background: var(--bg-soft);
      border-left: 4px solid var(--blue-2);
      padding: 14px 18px;
      border-radius: 8px;
      font-style: italic;
      color: var(--text);
      line-height: 1.6;
      box-shadow: 0 6px 18px rgba(17, 73, 140, 0.03);
      margin-bottom: 0;
    }

    .mission-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 12px;
      margin-top: 8px;
    }

    .mission-list li {
      display: flex;
      gap: 12px;
      align-items: flex-start;
      color: var(--text);
      line-height: 1.6;
      background: #fff;
      padding: 12px;
      border-radius: 8px;
      box-shadow: 0 8px 20px rgba(17, 73, 140, 0.03);
      border: 1px solid rgba(75, 123, 166, 0.05);
      transition: transform .18s ease, box-shadow .18s ease;
    }

    .mission-list li:hover {
      transform: translateX(6px);
      box-shadow: 0 12px 30px rgba(17, 73, 140, 0.06);
    }

    .mi-icon {
      min-width: 36px;
      height: 36px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
      background: linear-gradient(180deg, rgba(45, 97, 166, 0.12), rgba(75, 123, 166, 0.06));
      color: var(--blue-1);
      font-size: 1.05rem;
      flex-shrink: 0;
      margin-top: 2px;
      box-shadow: inset 0 -2px 6px rgba(17, 73, 140, 0.02);
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


    /* Responsive */
    @media (max-width: 991px) {
      .about-section {
        padding: 40px 0;
      }

      .about-badge {
        padding: 10px 18px;
        font-size: 1rem;
      }

      .col-inner {
        padding: 14px;
        gap: 12px;
      }

      .mission-list li {
        padding: 10px;
      }
    }

    @media (max-width: 575px) {
      .about-lead {
        padding: 0 8px;
      }

      .mi-icon {
        min-width: 32px;
        height: 32px;
      }
    }
  </style>
</section>