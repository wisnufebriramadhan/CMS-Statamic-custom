<!-- ════════════════════════════════════════
     PORTFOLIO SECTION
════════════════════════════════════════ -->
<section id="portofolio-portfolio" class="portofolio-section">
    <!-- lightbox (shared, one instance) -->
    <div class="vl-modal" id="vlModal" role="dialog" aria-modal="true" aria-label="Image lightbox">
        <div class="vl-modal-panel">
            <button class="vl-prev" id="vlPrev" aria-label="Previous"><i class="bi bi-chevron-left"></i></button>
            <div class="vl-slide">
                <img id="vlImg" src="" alt="">
                <div class="vl-caption" id="vlCaption"></div>
                <button class="vl-close" id="vlClose" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                <div class="vl-counter" id="vlCounter"></div>
            </div>
            <button class="vl-next" id="vlNext" aria-label="Next"><i class="bi bi-chevron-right"></i></button>
        </div>
    </div>
    <div class="container" style="position:relative;">

        <!-- HEADER -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-10">
                <div class="porto-badge fade-down">Our Portfolio</div>
                <h2 class="porto-main-title fade" data-autoaccent>
                    {{ title }}
                </h2>
                <p class="porto-sub fade">
                    Showcasing our finest completed projects — delivering quality craftsmanship
                    and timeless design across every property.
                </p>
            </div>
        </div>

        {{ portofolio_list }}
        <article class="portofolio-block" data-animate aria-labelledby="portofolio-label-{{ id }}">
            <div class="portofolio-card-frame" role="group" aria-roledescription="portofolio card">

                <!-- LEFT: info + cover image -->
                <div class="portofolio-left">
                    <div class="portofolio-left-meta">
                        <h3 id="portofolio-label-{{ id }}" class="portofolio-left-title">{{ portofolio_title }}</h3>
                        <p class="portofolio-left-desc">{{ portofolio_description }}</p>
                    </div>

                    <!-- First image (limit 1) -->
                    <div class="portofolio-left-imgwrap loading" aria-hidden="false">
                        {{ portofolio_image limit="1" }}
                        <button class="img-btn" aria-label="Open image of {{ portofolio_title }}">
                            <img
                                class="lazy-img"
                                src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='600' height='600'></svg>"
                                data-src="{{ url }}"
                                alt="{{ alt }}"
                                loading="lazy"
                                decoding="async">
                        </button>
                        {{ /portofolio_image }}

                        {{ if not portofolio_image }}
                        <div class="placeholder">No image</div>
                        {{ /if }}

                        <span class="img-pill">{{ portofolio_title }}</span>
                    </div>
                </div>

                <!-- RIGHT: gallery of all remaining images (offset=1) -->
                <div class="portofolio-right" aria-hidden="false">
                    {{ portofolio_image offset="1" }}
                    <figure class="portofolio-right-item loading" data-slot="{{ index }}">
                        <button class="img-btn" aria-label="Open image {{ index }} of {{ portofolio_title }}">
                            <img
                                class="lazy-img"
                                src="data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='800' height='1200'></svg>"
                                data-src="{{ url }}"
                                alt="{{ alt }}"
                                loading="lazy"
                                decoding="async">
                            <figcaption class="item-caption">{{ portofolio_title }}</figcaption>
                        </button>
                    </figure>
                    {{ /portofolio_image }}
                </div>

            </div>
        </article>
        {{ /portofolio_list }}

    </div><!-- /.container -->
</section>
<!-- ════════════════════════════════════════
     JS
════════════════════════════════════════ -->
<script>
    (function() {

        /* ── Scroll reveal ── */
        var revEls = document.querySelectorAll('.fade-down, .fade, [data-animate]');
        var revIo = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (e.isIntersecting) {
                    e.target.classList.add('in-view');
                    revIo.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.08
        });
        revEls.forEach(function(el) {
            revIo.observe(el);
        });

        /* ── Lazy load images ── */
        var lazyIo = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (!e.isIntersecting) return;
                var img = e.target;
                var src = img.getAttribute('data-src');
                if (!src) return;
                img.src = src;
                img.addEventListener('load', function() {
                    img.classList.add('loaded');
                    var wrap = img.closest('.portofolio-left-imgwrap, .portofolio-right-item');
                    if (wrap) wrap.classList.remove('loading');
                });
                lazyIo.unobserve(img);
            });
        }, {
            rootMargin: '200px'
        });
        document.querySelectorAll('img.lazy-img').forEach(function(img) {
            lazyIo.observe(img);
        });

        /* ── Lightbox ── */
        var modal = document.getElementById('vlModal');
        var vlImg = document.getElementById('vlImg');
        var vlCap = document.getElementById('vlCaption');
        var vlCtr = document.getElementById('vlCounter');
        var vlClose = document.getElementById('vlClose');
        var vlPrev = document.getElementById('vlPrev');
        var vlNext = document.getElementById('vlNext');

        var galleries = {};
        var curGallery = null;
        var curIdx = 0;

        /* Build gallery map from all img-btn buttons */
        document.querySelectorAll('.img-btn[data-gallery]').forEach(function(btn) {
            var g = btn.getAttribute('data-gallery');
            var idx = parseInt(btn.getAttribute('data-index'), 10);
            if (!galleries[g]) galleries[g] = [];
            var img = btn.querySelector('img');
            var cap = btn.closest('figure') ? btn.closest('figure').querySelector('.item-caption') : null;
            galleries[g][idx] = {
                src: img ? (img.getAttribute('data-src') || img.src) : '',
                alt: img ? img.alt : '',
                cap: cap ? cap.textContent : (img ? img.alt : '')
            };
            btn.addEventListener('click', function() {
                openLightbox(g, idx);
            });
        });

        /* Also open from left panel buttons */
        document.querySelectorAll('.portofolio-left-imgwrap .img-btn[data-gallery]').forEach(function(btn) {
            var g = btn.getAttribute('data-gallery');
            btn.addEventListener('click', function() {
                openLightbox(g, 0);
            });
        });

        function openLightbox(gallery, idx) {
            curGallery = gallery;
            curIdx = idx;
            showSlide();
            modal.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }

        function showSlide() {
            var g = galleries[curGallery];
            if (!g) return;
            var item = g[curIdx];
            if (!item) return;
            vlImg.src = item.src;
            vlImg.alt = item.alt;
            vlCap.textContent = item.cap;
            vlCtr.textContent = (curIdx + 1) + ' / ' + g.filter(Boolean).length;
        }

        function prevSlide() {
            var g = galleries[curGallery];
            if (!g) return;
            curIdx = (curIdx - 1 + g.length) % g.length;
            showSlide();
        }

        function nextSlide() {
            var g = galleries[curGallery];
            if (!g) return;
            curIdx = (curIdx + 1) % g.length;
            showSlide();
        }

        vlClose.addEventListener('click', closeLightbox);
        vlPrev.addEventListener('click', prevSlide);
        vlNext.addEventListener('click', nextSlide);

        modal.addEventListener('click', function(e) {
            if (e.target === modal) closeLightbox();
        });

        document.addEventListener('keydown', function(e) {
            if (!modal.classList.contains('open')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') prevSlide();
            if (e.key === 'ArrowRight') nextSlide();
        });

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('[data-autoaccent]').forEach(function(el) {
                var text = el.innerText.trim();
                var words = text.split(' ');

                // Kalau cuma 1 kata, tidak perlu accent
                if (words.length <= 1) return;

                var last = words.pop();
                var rest = words.join(' ');

                el.innerHTML = rest + ' <span class="accent">' + last + '</span>';
            });
        });

        /* ── 3D tilt on card frames ── */
        if (window.matchMedia('(hover: hover)').matches) {
            document.querySelectorAll('.portofolio-card-frame').forEach(function(card) {
                card.addEventListener('mousemove', function(e) {
                    var r = card.getBoundingClientRect();
                    var x = ((e.clientX - r.left) / r.width - 0.5) * 3;
                    var y = ((e.clientY - r.top) / r.height - 0.5) * -3;
                    card.style.transform = 'translateY(-6px) perspective(900px) rotateY(' + x + 'deg) rotateX(' + y + 'deg)';
                });
                card.addEventListener('mouseleave', function() {
                    card.style.transform = '';
                });
            });
        }

    })();
</script>