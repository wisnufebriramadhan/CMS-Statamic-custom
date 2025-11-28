<!-- <section id="hero" class="hero section">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h1>{{ heading }}</h1>
              <p>{{ page_desc }}</p>
            </div>
          </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          <img src="{{ hero_image }}" class="img-fluid animated" alt="Hero illustration">
        </div>
      </div>
    </div>
  </section>/Hero Section -->

<section id="features" class="features section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Torucorp</h2>
    <p>{{ page_desc }}<br></p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-5">

      <div class="col-xl-6" data-aos="zoom-out" data-aos-delay="100">
        <img src="assets/img/features.png" class="img-fluid" alt="">
      </div>

      <div class="col-xl-6 d-flex">
        <div class="row align-self-center gy-4">
          {{corporate_value}}
          <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="feature-box d-flex align-items-center">
              <i class="bi bi-check"></i>
              <h3>{{ value_heading }}</h3>
            </div>
          </div><!-- End Feature Item -->
          {{/corporate_value}}
        </div>
      </div>

    </div>

  </div>

</section><!-- /Features Section -->