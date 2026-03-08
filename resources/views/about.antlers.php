<section id="about" class="about-section section">
  <div class="container">

    <!-- HEADER -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-10">
        <div class="about-badge fade-down">{{heading}}</div>
        <h2 class="biz-main-title fade">Our Vision & <span class="accent">Mission</span></h2>
        <p class="about-lead fade">
          {{page_desc}}
        </p>
      </div>
    </div>

    <!-- TWO COLUMNS -->
    <div class="about-grid">

      <!-- LEFT: Vision + Quotes -->
      <div class="col-inner left-wrap fade-up">

        <div>
          <div class="section-label">Vision</div>
        </div>

        <blockquote class="quote-box stagger-1" aria-label="Vision quote">
          "Torucorp as an Indonesian brand to become a leading Sharia based holding company in construction,
          property development and digitalization, recognized for integrity, innovation and impact."
        </blockquote>

        <div>
          <div class="section-label">QS An-Nur : 37</div>
        </div>

        <blockquote class="quote-box stagger-2" aria-label="QS An-Nur quote">
          "Those who are not distracted by trade and buying and selling from the remembrance of Allah, the prayer,
          and the giving of alms. They fear the day when hearts and sight will be shaken (the Day of Judgement)."
          <span class="quote-source"><i class="bi bi-book"></i> Al-Qur'an · An-Nur 37</span>
        </blockquote>

        <div>
          <div class="section-label">HR Bukhari, 2/1966</div>
        </div>

        <blockquote class="quote-box stagger-3" aria-label="Hadith">
          "There is no food that is better for a person to eat, than eating from the work of his own hands.
          And indeed Prophet Dawud, he ate from the labor of his own hands."
          <span class="quote-source"><i class="bi bi-journal-bookmark"></i> HR Bukhari · 2/1966</span>
        </blockquote>

      </div>

      <!-- RIGHT: Mission -->
      <div class="col-inner right-wrap fade-up">

        <div>
          <div class="section-label">Mission</div>
        </div>

        <ul class="mission-list" aria-label="Mission list">
          <li class="stagger-1">
            <span class="mi-icon" aria-hidden="true"><i class="bi bi-building-check"></i></span>
            <div class="mi-text">
              <span class="mi-label">Deliver sustainable and ethical construction projects that reflect Sharia values</span>
            </div>
          </li>
          <li class="stagger-2">
            <span class="mi-icon" aria-hidden="true"><i class="bi bi-people"></i></span>
            <div class="mi-text">
              <span class="mi-label">Empower human potential through teamwork, responsibility and excellence</span>
            </div>
          </li>
          <li class="stagger-3">
            <span class="mi-icon" aria-hidden="true"><i class="bi bi-handshake"></i></span>
            <div class="mi-text">
              <span class="mi-label">Build partnerships rooted in trust, transparency and mutual growth</span>
            </div>
          </li>
          <li class="stagger-4">
            <span class="mi-icon" aria-hidden="true"><i class="bi bi-lightbulb"></i></span>
            <div class="mi-text">
              <span class="mi-label">Foster innovation that benefits society and preserves the environment</span>
            </div>
          </li>
        </ul>

        <div class="values-row">
          <span class="value-pill"><i class="bi bi-star-fill"></i> Integrity</span>
          <span class="value-pill"><i class="bi bi-shield-check"></i> Sharia-aligned</span>
          <span class="value-pill"><i class="bi bi-recycle"></i> Sustainability</span>
          <span class="value-pill"><i class="bi bi-rocket-takeoff"></i> Innovation</span>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ═══ JS — paste before </body> ═══ -->
<script>
  (function() {
    var els = document.querySelectorAll('.fade-down,.fade,.fade-up');
    var io = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (e.isIntersecting) {
          e.target.classList.add('in-view');
          io.unobserve(e.target);
        }
      });
    }, {
      threshold: 0.1
    });
    els.forEach(function(el) {
      io.observe(el);
    });
  })();
</script>