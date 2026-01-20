<section id="portofolio-portfolio" class="portofolio-section">
    <div class="portofolio-container">

        <!-- Header -->
        <div class="portofolio-header">
            <h1 class="portofolio-title">{{ title }}</h1>
            <p class="portofolio-sub">{{page_description}}</p>
        </div>

        <!-- portofolio LIST -->
        {{ portofolio_list }}
        <article class="portofolio-block" aria-labelledby="portofolio-label-{{ id }}">
            <div class="portofolio-card-frame" role="group" aria-roledescription="portofolio card">

                <!-- LEFT: info + single square image -->
                <div class="portofolio-left">
                    <div class="portofolio-left-meta">
                        <h3 id="portofolio-label-{{ id }}" class="portofolio-left-title">{{ portofolio_title }}</h3>
                        <p class="portofolio-left-desc">{{ portofolio_description }}</p>
                    </div>

                    <!-- first image (limit 1) -->
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
                            <span class="img-pill">{{ portofolio_title }}</span>
                        </button>
                        {{ /portofolio_image }}

                        {{ if not portofolio_image }}
                        <div class="placeholder">No image</div>
                        {{ /if }}
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
    </div>
</section>