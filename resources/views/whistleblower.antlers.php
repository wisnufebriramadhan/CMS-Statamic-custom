<!-- ════════════════════════════════════════
     WHISTLEBLOWER SECTION
════════════════════════════════════════ -->
<section id="whistleblower" class="whistleblower-section">
  <div class="container" style="position:relative;">

    <!-- HEADER -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-10">
        <div class="wb-badge fade-down">Governance &amp; Compliance</div>
        <h2 class="wb-main-title fade">
          Torucorp <span class="accent">Whistleblower</span> System
        </h2>
        <p class="wb-sub fade">Integrity &nbsp;•&nbsp; Transparency &nbsp;•&nbsp; Accountability</p>
      </div>
    </div>

    <!-- MAIN LAYOUT -->
    <div class="wb-layout">

      <!-- ① INTRO CARD (full width) -->
      <div class="wb-intro" data-animate>
        <div class="wb-card intro-card">
          <div class="wb-card-body">
            <p class="wb-intro-text">
              Torucorp is committed to building healthy businesses with integrity and aims to become a
              trusted company in providing high-quality services by applying <strong>Good Corporate Governance (GCG)</strong>
              within the company.
            </p>
            <p class="wb-intro-text">
              Torucorp provides opportunities for Clients, Partners, Employees, and other parties to report
              suspected fraud, gratification, ethical violations, conflicts of interest, occupational safety
              and health violations, information security violations, or other legal violations committed by
              internal company parties.
            </p>
            <p class="wb-intro-text" style="margin-bottom:0;">
              To preserve this commitment, Torucorp has implemented a complaint handling policy through the
              <strong>Torucorp Whistleblower System (TWS)</strong>, which is available via an electronic reporting (e-form) system.
            </p>
          </div>
        </div>
      </div>

      <!-- ② VALUES ROW (3 cards full width) -->
      <div class="wb-values-row">

        <div class="wb-value-card" data-animate>
          <div class="wb-val-icon"><i class="bi bi-shield-lock-fill"></i></div>
          <h5 class="wb-val-title">Confidentiality</h5>
          <p class="wb-val-desc">Personal identification of the Informant will be protected and treated with strict confidentiality.</p>
        </div>

        <div class="wb-value-card" data-animate>
          <div class="wb-val-icon"><i class="bi bi-check-circle-fill"></i></div>
          <h5 class="wb-val-title">Presumption of Innocence</h5>
          <p class="wb-val-desc">All reports are handled fairly with the presumption of innocence for all parties involved.</p>
        </div>

        <div class="wb-value-card" data-animate>
          <div class="wb-val-icon"><i class="bi bi-search"></i></div>
          <h5 class="wb-val-title">Objective Investigation</h5>
          <p class="wb-val-desc">Each complaint will be reviewed and investigated objectively based on valid evidence.</p>
        </div>

      </div>

      <!-- ③ POLICY CARD -->
      <div data-animate>
        <div class="wb-card policy-card" style="height:100%;">
          <div class="wb-card-head">
            <div class="wb-head-icon"><i class="bi bi-file-earmark-text-fill"></i></div>
            <h3>Reporting Policy <span>Guidelines &amp; procedures</span></h3>
          </div>
          <div class="wb-card-body">
            <p class="policy-text">
              Complaints can be submitted without personal identification (anonymous). However, it is
              mandatory to attach supporting evidence as an indication of the occurrence, such as transaction
              records, photographs, or other relevant documents.
            </p>
            <p class="policy-text">
              If the investigation concludes that the submitted complaint is not proven, the complaint
              will be closed and discontinued.
            </p>

            <p class="wb-how-title">How to Submit a Report</p>
            <ol class="wb-how-list">
              <li>
                <span class="wb-how-num">1</span>
                Fill out the Torucorp Whistleblower System (TWS) e-form on this page.
              </li>
              <li>
                <span class="wb-how-num">2</span>
                Send an email to <strong>admin@torucorp.id</strong> with subject line "TWS Report".
              </li>
              <li>
                <span class="wb-how-num">3</span>
                Report directly to the Head of Internal Audit in person.
              </li>
            </ol>

            <div class="wb-regards">
              Warmest Regards,<br>
              <strong>Torucorp's Management</strong>
            </div>
          </div>
        </div>
      </div>

      <!-- ④ FORM CARD -->
      <div data-animate>
        <div class="wb-card form-card" style="height:100%;">
          <div class="wb-card-head">
            <div class="wb-head-icon"><i class="bi bi-send-fill"></i></div>
            <h3>Submit a Report <span>Secure &amp; confidential</span></h3>
          </div>
          <div class="wb-card-body">

            <form method="POST" enctype="multipart/form-data">

              <!-- Description -->
              <div class="wb-form-group">
                <label for="description" class="wb-form-label">
                  Detailed Description <span class="req">*</span>
                </label>
                <textarea
                  class="wb-form-control"
                  id="description"
                  name="description"
                  rows="5"
                  required
                  placeholder="Describe the incident in detail (Who, What, When, Where, How)..."></textarea>
              </div>

              <!-- Evidence -->
              <div class="wb-form-group">
                <label for="evidence" class="wb-form-label">
                  Supporting Evidence <span class="req">*</span>
                </label>
                <input
                  type="file"
                  class="wb-form-control"
                  id="evidence"
                  name="evidence"
                  required>
                <p class="wb-form-hint">Supported: PDF, JPG, PNG, DOCX &nbsp;·&nbsp; Max 5 MB</p>
              </div>

              <hr class="wb-form-divider">

              <!-- Optional reporter info -->
              <p class="wb-optional-title">Reporter Information <span style="font-weight:500;color:#7a8fa6;">(Optional)</span></p>
              <p class="wb-optional-desc">
                Reports may be submitted anonymously. Providing contact information allows
                follow-up if additional clarification is needed.
              </p>

              <div class="wb-form-row">
                <div class="wb-form-group">
                  <label for="reporter_name" class="wb-form-label">Full Name</label>
                  <input
                    type="text"
                    class="wb-form-control"
                    id="reporter_name"
                    name="reporter_name"
                    placeholder="Your name (optional)">
                </div>
                <div class="wb-form-group">
                  <label for="reporter_email" class="wb-form-label">Email / Phone</label>
                  <input
                    type="text"
                    class="wb-form-control"
                    id="reporter_email"
                    name="reporter_email"
                    placeholder="email or phone number">
                </div>
              </div>

              <!-- Submit -->
              <div style="margin-top: 8px;">
                <button type="submit" class="wb-btn-submit">
                  <i class="bi bi-send-fill"></i>
                  Submit Report
                </button>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div><!-- /.wb-layout -->
  </div><!-- /.container -->
</section>

<!-- ════════════════════════════════════════
     JS
════════════════════════════════════════ -->
<script>
  (function() {
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

    if (window.matchMedia('(hover: hover)').matches) {
      document.querySelectorAll('.wb-card, .wb-value-card').forEach(function(card) {
        card.addEventListener('mousemove', function(e) {
          var r = card.getBoundingClientRect();
          var x = ((e.clientX - r.left) / r.width - 0.5) * 4;
          var y = ((e.clientY - r.top) / r.height - 0.5) * -4;
          card.style.transform = 'translateY(-4px) perspective(700px) rotateY(' + x + 'deg) rotateX(' + y + 'deg)';
        });
        card.addEventListener('mouseleave', function() {
          card.style.transform = '';
        });
      });
    }
  })();
</script>