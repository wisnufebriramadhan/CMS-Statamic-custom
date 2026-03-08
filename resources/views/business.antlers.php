<!-- ════════════ HTML/PHP TEMPLATE ════════════ -->
<section id="businesses" class="business-section section">
    <div class="container">

        <!-- HEADER -->
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-10">
                <div class="business-badge fade-down">Torucorp Businesses</div>
                <h2 class="biz-main-title fade">Our Business <span class="accent">Portfolio</span></h2>
                <p class="business-sub fade">
                    The diversification of Torucorp reflects our commitment to innovation, sustainability,
                    and long-term value creation across multiple industries.
                </p>
            </div>
        </div>

        <!-- GRID -->
        <div class="biz-grid mt-3">

            <!-- LEFT: Core Industries -->
            <div class="animate-left">
                <div class="biz-col card-core tilt-card">

                    <div class="biz-title-wrap">
                        <div class="biz-title-icon">
                            <i class="bi bi-buildings"></i>
                        </div>
                        <h3 class="biz-title">
                            Core Industries
                            <span>Established business pillars</span>
                        </h3>
                    </div>

                    <ul class="biz-list">
                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-building"></i></span>
                            <div class="biz-item-text">
                                <span class="biz-item-label">Construction & Engineering Services</span>
                                <span class="biz-item-sub">Full-scale civil & structural services</span>
                            </div>
                        </li>
                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-house-check"></i></span>
                            <div class="biz-item-text">
                                <span class="biz-item-label">Property & Real Estate Development</span>
                                <span class="biz-item-sub">Development & asset management</span>
                            </div>
                        </li>
                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-kanban"></i></span>
                            <div class="biz-item-text">
                                <span class="biz-item-label">Project Management & Consulting</span>
                                <span class="biz-item-sub">End-to-end delivery expertise</span>
                            </div>
                        </li>
                    </ul>

                    <div class="biz-stat-row">
                        <div class="biz-stat"><i class="bi bi-check-circle-fill"></i> 3 Divisions</div>
                        <div class="biz-stat-divider"></div>
                        <div class="biz-stat"><i class="bi bi-geo-alt-fill"></i> Established</div>
                        <div class="biz-stat-divider"></div>
                        <div class="biz-stat"><i class="bi bi-people-fill"></i> Core Team</div>
                    </div>

                </div>
            </div>

            <!-- RIGHT: Innovation & Future Growth -->
            <div class="animate-right">
                <div class="biz-col card-future tilt-card">

                    <div class="biz-title-wrap">
                        <div class="biz-title-icon">
                            <i class="bi bi-rocket-takeoff"></i>
                        </div>
                        <h3 class="biz-title">
                            Innovation & Future Growth
                            <span>Next-generation ventures</span>
                        </h3>
                    </div>

                    <ul class="biz-list">
                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-recycle"></i></span>
                            <div class="biz-item-text">
                                <span class="biz-item-label">Renewable & Sustainable Infrastructure</span>
                                <span class="biz-item-sub">Green energy & ESG initiatives</span>
                            </div>
                        </li>
                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-diagram-3"></i></span>
                            <div class="biz-item-text">
                                <span class="biz-item-label">Strategic Investment & Holding</span>
                                <span class="biz-item-sub">Portfolio & capital allocation</span>
                            </div>
                        </li>
                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-robot"></i></span>
                            <div class="biz-item-text">
                                <span class="biz-item-label">AI for Living</span>
                                <span class="biz-item-sub">Human-centered artificial intelligence</span>
                            </div>
                        </li>
                        <li class="biz-item">
                            <span class="biz-icon"><i class="bi bi-display"></i></span>
                            <div class="biz-item-text">
                                <span class="biz-item-label">Digital Future — Software House</span>
                                <span class="biz-item-sub">Custom software & digital products</span>
                            </div>
                        </li>
                    </ul>

                    <div class="biz-stat-row">
                        <div class="biz-stat"><i class="bi bi-lightning-charge-fill"></i> 4 Ventures</div>
                        <div class="biz-stat-divider"></div>
                        <div class="biz-stat"><i class="bi bi-graph-up-arrow"></i> High Growth</div>
                        <div class="biz-stat-divider"></div>
                        <div class="biz-stat"><i class="bi bi-stars"></i> Future-ready</div>
                    </div>

                </div>
            </div>

        </div><!-- /.biz-grid -->

    </div><!-- /.container -->
</section>

<!-- ════════════ JS (paste before </body>) ════════════ -->
<script>
    // Scroll-triggered reveal
    (function() {
        var els = document.querySelectorAll('.fade-down, .fade, .animate-left, .animate-right');
        var io = new IntersectionObserver(function(entries) {
            entries.forEach(function(e) {
                if (e.isIntersecting) {
                    e.target.classList.add('in-view');
                    io.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.12
        });
        els.forEach(function(el) {
            io.observe(el);
        });

        // Tilt effect (desktop only)
        if (window.matchMedia('(hover: hover)').matches) {
            document.querySelectorAll('.tilt-card').forEach(function(card) {
                card.addEventListener('mousemove', function(e) {
                    var r = card.getBoundingClientRect();
                    var x = ((e.clientX - r.left) / r.width - 0.5) * 6;
                    var y = ((e.clientY - r.top) / r.height - 0.5) * -6;
                    card.style.transform = 'translateY(-6px) perspective(800px) rotateY(' + x + 'deg) rotateX(' + y + 'deg)';
                });
                card.addEventListener('mouseleave', function() {
                    card.style.transform = '';
                });
            });
        }
    })();
</script>