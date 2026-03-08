<section id="whistleblower" class="whistleblower-section">
  <div class="whistleblower-container">

    <!-- Header -->
    <div class="whistleblower-header">
      <h1 class="whistleblower-title">Torucorp Whistleblower System (TWS)</h1>
      <p class="whistleblower-subtitle">Integrity • Transparency • Accountability</p>
    </div>

    <!-- Introduction -->
    <div class="whistleblower-block">
      <div class="whistleblower-card">
        <p class="whistleblower-desc">
          Torucorp is committed to building healthy businesses with integrity and aims to become a
          trusted company in providing high-quality services by applying Good Corporate Governance (GCG)
          within the company.
        </p>
        <p class="whistleblower-desc" style="margin-top: 16px;">
          Torucorp provides opportunities for Clients, Partners, Employees, and other parties to report
          suspected fraud, gratification, ethical violations, conflicts of interest, occupational safety
          and health violations, information security violations, or other legal violations committed by
          internal company parties.
        </p>
        <p class="whistleblower-desc" style="margin-top: 16px;">
          To preserve this commitment, Torucorp has implemented a complaint handling policy through the
          Torucorp Whistleblower System (TWS), which is available via an electronic reporting (e-form) system.
        </p>
      </div>
    </div>

    <!-- Values -->
    <div class="whistleblower-block">
      <div class="values-grid">
        <div class="value-item">
          <div class="value-icon">🛡️</div>
          <h5>Confidentiality</h5>
          <p>Personal identification of the Informant will be protected and treated with strict confidentiality.</p>
        </div>

        <div class="value-item">
          <div class="value-icon">✓</div>
          <h5>Presumption of Innocence</h5>
          <p>All reports are handled fairly with the presumption of innocence.</p>
        </div>

        <div class="value-item">
          <div class="value-icon">🔍</div>
          <h5>Objective Investigation</h5>
          <p>Each complaint will be reviewed and investigated objectively based on valid evidence.</p>
        </div>
      </div>
    </div>

    <!-- Policy Explanation -->
    <div class="whistleblower-block">
      <div class="whistleblower-card">
        <p class="policy-text">
          Complaints can be submitted without personal identification (anonymous). However, it is mandatory
          to attach supporting evidence as an indication of the occurrence, such as transaction records,
          photographs, or other relevant documents.
        </p>
        <p class="policy-text">
          If the investigation concludes that the submitted complaint is not proven, the complaint
          will be closed and discontinued.
        </p>

        <div class="reporting-methods">
          <h5>How to Submit a Report</h5>
          <ol>
            <li>Fill out the Torucorp Whistleblower System (TWS) e-form below.</li>
            <li>Send an email to <strong>admin@torucorp.id</strong>.</li>
            <li>Report directly to the Head of Internal Audit in person.</li>
          </ol>
        </div>

        <p class="regards">
          Warmest Regards,<br>
          Torucorp's Management
        </p>
      </div>
    </div>

    <!-- Reporting Form -->
    <div class="whistleblower-block">
      <div class="form-card">
        <div class="form-header">
          <h3>📝 Submit a Report</h3>
        </div>

        <form method="POST" enctype="multipart/form-data">

          <!-- Description -->
          <div style="margin-bottom: 24px;">
            <label for="description" class="form-label">
              Detailed Description <span class="text-danger">*</span>
            </label>
            <textarea
              class="form-control"
              id="description"
              name="description"
              rows="5"
              required
              placeholder="Please describe the incident in detail (Who, What, When, Where, How)...">{{ old:description }}</textarea>
          </div>

          <!-- Evidence -->
          <div style="margin-bottom: 24px;">
            <label for="evidence" class="form-label">
              Attach Supporting Evidence <span class="text-danger">*</span>
            </label>
            <input
              type="file"
              class="form-control"
              id="evidence"
              name="evidence"
              required>
            <div class="form-text">
              Supported formats: PDF, JPG, PNG, DOCX. Maximum file size 5MB.
            </div>
          </div>

          <hr class="section-divider">

          <!-- Reporter Info -->
          <h5 class="optional-header">Reporter Information (Optional)</h5>
          <p class="optional-desc">
            Reports may be submitted anonymously. Providing contact information allows follow-up
            if additional clarification is required.
          </p>

          <div class="form-row">
            <div>
              <label for="reporter_name" class="form-label">Name</label>
              <input
                type="text"
                class="form-control"
                id="reporter_name"
                name="reporter_name"
                value="{{ old:reporter_name }}">
            </div>

            <div>
              <label for="reporter_email" class="form-label">Email / Phone</label>
              <input
                type="text"
                class="form-control"
                id="reporter_email"
                name="reporter_email"
                value="{{ old:reporter_email }}">
            </div>
          </div>

          <!-- Submit -->
          <div style="margin-top: 32px;">
            <button type="submit" class="btn-submit">
              Submit Report
            </button>
          </div>

        </form>
      </div>
    </div>

  </div>
</section>