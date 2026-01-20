<!-- ================= HERO SECTION ================= -->
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
  .hero-video {
    position: relative;
    width: 100vw;
    /* ⬅️ PENTING */
    min-height: 100vh;
    overflow: hidden;
    color: #fff;
    padding: 0;
    /* ⬅️ hilangkan padding section */
  }

  /* VIDEO BACKGROUND */
  .hero-bg-video {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100vw;
    /* ⬅️ full viewport */
    height: 100vh;
    object-fit: cover;
    transform: translate(-50%, -50%);
    z-index: 1;
  }

  /* OVERLAY */
  .hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.45);
    z-index: 2;
  }

  /* CONTENT WRAPPER */
  .hero-video .container {
    position: relative;
    z-index: 3;
    max-width: 1320px;
    /* tetap rapi di desktop */
    padding-left: 24px;
    /* custom padding */
    padding-right: 24px;
  }

  .hero-video h1,
  .hero-video p {
    color: #fff;
  }

  /* MOBILE FIX */
  @media (max-width: 768px) {
    .hero-video {
      min-height: 100vh;
    }

    .hero-bg-video {
      width: 100%;
      height: 100%;
    }
  }
</style>

<section id="hero" class="hero section hero-video">

  <!-- Video Background -->
  <video autoplay muted loop playsinline class="hero-bg-video">
    <source src="https://www.torucorp.id/assets/torucorp-asset-home.mp4" type="video/mp4">
    Browser Anda tidak mendukung video.
  </video>

  <!-- Overlay -->
  <div class="hero-overlay"></div>

  <!-- Content -->
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">Torucorp.</h1>
        <h1 data-aos="fade-up">Build The Dignity</h1>
        <p data-aos="fade-up" data-aos-delay="100">
          Building a Dignified Legacy with <br>
          Digital Innovation and Sharia Integrity
        </p>
      </div>
    </div>
  </div>

</section>
<!-- =============== /HERO SECTION ================= -->