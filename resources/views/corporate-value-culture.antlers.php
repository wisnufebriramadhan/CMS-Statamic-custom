<!-- ════════════════════════════════════════
     CORPORATE VALUE & CULTURE SECTION
════════════════════════════════════════ -->
<section id="features" class="features-section section" aria-labelledby="features-title">
  <div class="container" style="position:relative;">

    <!-- Watermarks -->
    <div class="watermark left" aria-hidden="true">TORU</div>
    <div class="watermark right" aria-hidden="true">CORP</div>

    <!-- HEADER -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-10">
        <div class="corporate-badge fade-down">Corporate Value &amp; Culture</div>
        <h2 class="corp-main-title fade" id="features-title">
          Our Core <span class="accent">Values</span>
        </h2>
        <p class="corporate-sub fade">
          Foundational values that shape how Torucorp works,
          innovates, and contributes to society.
        </p>
      </div>
    </div>

    <!-- GRID -->
    <div class="features-grid">

      <!-- T – Taqwa -->
      <article class="feature-box" data-index="0" data-animate tabindex="0">
        <div class="feature-icon-wrap"><i class="bi bi-check-lg"></i></div>
        <div class="card-content">
          <h3 class="value-title">
            <span class="initial-letter">T</span>
            <span class="title-text">– Taqwa (Integrity &amp; Faithfulness)</span>
          </h3>
          <p class="value-desc">Every action is grounded in devotion to Allah Subhanahu Wa Ta'ala. Toru uphold honesty, responsibility and professionalism as acts of worship.</p>
          <span class="value-tag"><i class="bi bi-heart-fill"></i> Faith &amp; Integrity</span>
        </div>
      </article>

      <!-- C – Commitment -->
      <article class="feature-box" data-index="4" data-animate tabindex="0">
        <div class="feature-icon-wrap"><i class="bi bi-hand-thumbs-up-fill"></i></div>
        <div class="card-content">
          <h3 class="value-title">
            <span class="initial-letter">C</span>
            <span class="title-text">– Commitment</span>
          </h3>
          <p class="value-desc">Toru fulfill every promise with sincerity, ensuring our partners' trust and satisfaction. Managing field service efficiently and safely during challenging times.</p>
          <span class="value-tag"><i class="bi bi-shield-check"></i> Promise &amp; Trust</span>
        </div>
      </article>

      <!-- O – Optimized Excellence -->
      <article class="feature-box" data-index="1" data-animate tabindex="0">
        <div class="feature-icon-wrap"><i class="bi bi-gear-fill"></i></div>
        <div class="card-content">
          <h3 class="value-title">
            <span class="initial-letter">O</span>
            <span class="title-text">– Optimized Excellence</span>
          </h3>
          <p class="value-desc">Toru strive for excellence by optimizing resources, time and energy – ensuring quality and halal values remain uncompromised.</p>
          <span class="value-tag"><i class="bi bi-stars"></i> Quality &amp; Excellence</span>
        </div>
      </article>

      <!-- O – Ownership -->
      <article class="feature-box" data-index="5" data-animate tabindex="0">
        <div class="feature-icon-wrap"><i class="bi bi-award-fill"></i></div>
        <div class="card-content">
          <h3 class="value-title">
            <span class="initial-letter">O</span>
            <span class="title-text">– Ownership</span>
          </h3>
          <p class="value-desc">Toru take full accountability for every decision and result, leading with responsibility and pride.</p>
          <span class="value-tag"><i class="bi bi-person-check-fill"></i> Accountability</span>
        </div>
      </article>

      <!-- R – Responsibility -->
      <article class="feature-box" data-index="2" data-animate tabindex="0">
        <div class="feature-icon-wrap"><i class="bi bi-shield-lock-fill"></i></div>
        <div class="card-content">
          <h3 class="value-title">
            <span class="initial-letter">R</span>
            <span class="title-text">– Responsibility (Amanah &amp; Care)</span>
          </h3>
          <p class="value-desc">Toru are deeply committed to social, environmental and professional responsibility – ensuring every project brings positive impact.</p>
          <span class="value-tag"><i class="bi bi-globe2"></i> Social &amp; Environment</span>
        </div>
      </article>

      <!-- R – Reliability -->
      <article class="feature-box" data-index="6" data-animate tabindex="0">
        <div class="feature-icon-wrap"><i class="bi bi-clock-fill"></i></div>
        <div class="card-content">
          <h3 class="value-title">
            <span class="initial-letter">R</span>
            <span class="title-text">– Reliability</span>
          </h3>
          <p class="value-desc">Toru are dependable, consistent and trustworthy in delivering excellence across every project.</p>
          <span class="value-tag"><i class="bi bi-patch-check-fill"></i> Consistency</span>
        </div>
      </article>

      <!-- U – Unity -->
      <article class="feature-box" data-index="3" data-animate tabindex="0">
        <div class="feature-icon-wrap"><i class="bi bi-people-fill"></i></div>
        <div class="card-content">
          <h3 class="value-title">
            <span class="initial-letter">U</span>
            <span class="title-text">– Unity (Collaboration &amp; Brotherhood)</span>
          </h3>
          <p class="value-desc">Toru believe in teamwork and solidarity – building success together through strong collaboration and mutual respect.</p>
          <span class="value-tag"><i class="bi bi-people-fill"></i> Team &amp; Solidarity</span>
        </div>
      </article>

      <!-- P – Professional -->
      <article class="feature-box" data-index="7" data-animate tabindex="0">
        <div class="feature-icon-wrap"><i class="bi bi-briefcase-fill"></i></div>
        <div class="card-content">
          <h3 class="value-title">
            <span class="initial-letter">P</span>
            <span class="title-text">– Professional</span>
          </h3>
          <p class="value-desc">Toru maintain discipline, ethics and respect in every interaction – reflecting Sharia Law and Corporate Principles. Prioritizing product quality and clients.</p>
          <span class="value-tag"><i class="bi bi-briefcase-fill"></i> Ethics &amp; Discipline</span>
        </div>
      </article>

    </div><!-- /.features-grid -->
  </div><!-- /.container -->
</section>

<!-- ════════════════════════════════════════
     JS
════════════════════════════════════════ -->
<script>
  (function() {
    /* Scroll-triggered reveal */
    var els = document.querySelectorAll('.fade-down, .fade, [data-animate]');
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

    /* 3-D tilt — desktop only */
    if (window.matchMedia('(hover: hover)').matches) {
      document.querySelectorAll('.feature-box').forEach(function(card) {
        card.addEventListener('mousemove', function(e) {
          var r = card.getBoundingClientRect();
          var x = ((e.clientX - r.left) / r.width - 0.5) * 5;
          var y = ((e.clientY - r.top) / r.height - 0.5) * -5;
          card.style.transform = 'translateY(-6px) perspective(700px) rotateY(' + x + 'deg) rotateX(' + y + 'deg)';
        });
        card.addEventListener('mouseleave', function() {
          card.style.transform = '';
        });
      });
    }
  })();
</script>