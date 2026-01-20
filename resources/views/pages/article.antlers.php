<section id="articles" class="toru-articles-section" aria-labelledby="articles-title">
  <div class="toru-container">
    <!-- Header -->
    <div class="articles-header">
      <h1 id="articles-title" class="articles-title">{{ title }}</h1>
      <p class="articles-sub">{{ short_desc }}</p>
    </div>

    <!-- Grid -->
    <div class="articles-grid" role="list">
      {{ collection:article paginate="4" as="article" }}
      {{ if no_results }}
      <h2>No Post</h2>
      {{ /if }}

      {{ article }}
      <article class="article-card" role="listitem" tabindex="0" aria-labelledby="art-{{ id }}">
        <!-- optional thumbnail; keep safe if thumbnail field missing -->
        <div class="card-media" aria-hidden="true">
          {{ if image_artikel }}
          <img src="{{ image_artikel }}" alt="{{ title }}" loading="lazy" decoding="async">
          {{ else }}
          <div class="media-fallback" aria-hidden="true">Toru Article</div>
          {{ /if }}
        </div>

        <div class="card-content">
          <div class="meta-row" aria-hidden="true">
            <time datetime="{{ date }}">{{ date format="F j, Y" }}</time>
            {{ if reading_time }}<span class="meta-dot">•</span><span class="reading">{{ reading_time }}</span>{{ /if }}
          </div>

          <h3 id="art-{{ id }}" class="card-title">{{ title }}</h3>

          <!-- truncated safely on server + clamped by CSS -->
          <p class="card-excerpt" aria-label="{{ title }} excerpt">{{ content | strip_tags | truncate:100 }}</p>

          <div class="card-bottom">
            <div class="tags" aria-hidden="true">
              {{ if tags }}
              {{ tags }}
              <span class="tag">{{ value }}</span>
              {{ /tags }}
              {{ else }}
              <span class="tag muted">Article</span>
              {{ /if }}
            </div>

            <a class="read-link" href="{{ url }}" aria-label="Baca {{ title }}">Baca Artikel →</a>
          </div>
        </div>
      </article>
      {{ /article }}

      <!-- PAGINATION (Antlers) -->
      {{ paginate }}
      <nav class="articles-pager" role="navigation" aria-label="Pagination">
        {{ if prev_page }}
        <a href="{{ prev_page }}" class="pager-btn pager-prev" rel="prev" aria-label="Previous page">
          <span class="pager-arrow">←</span>
          <span class="pager-text">Sebelumnya</span>
        </a>
        {{ /if }}

        <div class="pager-numbers" role="list">
          {{ links }}
          <a
            href="{{ url }}"
            role="listitem"
            class="pager-number {{ if current }}active{{ /if }}"
            aria-current="{{ if current }}page{{ /if }}"
            aria-label="Page {{ page }}">
            {{ page }}
          </a>
          {{ /links }}
        </div>

        {{ if next_page }}
        <a href="{{ next_page }}" class="pager-btn pager-next" rel="next" aria-label="Next page">
          <span class="pager-text">Berikutnya</span>
          <span class="pager-arrow">→</span>
        </a>
        {{ /if }}
      </nav>
      {{ /paginate }}
      {{ /collection:article }}
    </div>
  </div>

  <!-- Styles -->
  <style>
    :root {
      --blue-1: #2D61A6;
      --blue-2: #11538C;
      --blue-3: #4B7BA6;
      --blue-4: #84A4BF;
      --muted: #5b6b76;
      --bg-soft: #F7FBFF;
      --card-radius: 12px;
      --card-shadow: 0 18px 40px rgba(17, 73, 140, 0.06);
      --pager-bg: rgba(17, 83, 140, 0.06);
      --pager-active-bg: linear-gradient(90deg, var(--blue-1), var(--blue-3));
    }

    /* Container */
    .toru-container {
      max-width: 1220px;
      margin: 0 auto;
      padding: 48px 20px;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, Arial;
      color: #12202b;
      background: linear-gradient(180deg, #fff, #fbfdff);
    }

    /* Header */
    .articles-header {
      text-align: center;
      margin-bottom: 28px;
    }

    .articles-title {
      font-size: clamp(1.6rem, 2.8vw, 2.4rem);
      color: var(--blue-2);
      letter-spacing: -0.02em;
      font-weight: 800;
      margin-bottom: 8px;
    }

    .articles-sub {
      color: var(--muted);
      max-width: 980px;
      margin: 0 auto;
      line-height: 1.6;
    }

    /* Grid responsive */
    .articles-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      align-items: stretch;
      margin-top: 22px;
    }

    @media(max-width:1100px) {
      .articles-grid {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    @media(max-width:820px) {
      .articles-grid {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media(max-width:540px) {
      .articles-grid {
        grid-template-columns: 1fr;
      }
    }

    /* Card */
    .article-card {
      background: #fff;
      border-radius: var(--card-radius);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      min-height: 340px;
      border: 1px solid rgba(75, 123, 166, 0.06);
      box-shadow: var(--card-shadow);
      transform-style: preserve-3d;
      transition: transform .38s cubic-bezier(.2, .9, .2, 1), box-shadow .28s ease;
      will-change: transform;
      position: relative;
    }

    .article-card:hover,
    .article-card:focus-within {
      transform: translateY(-10px) rotateX(0.8deg);
      box-shadow: 0 30px 70px rgba(17, 73, 140, 0.12);
      z-index: 5;
    }

    /* Card media / thumbnail */
    .card-media {
      height: 168px;
      display: block;
      overflow: hidden;
      background: linear-gradient(90deg, var(--blue-3), var(--blue-4));
    }

    .card-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform .7s ease;
    }

    .article-card:hover .card-media img {
      transform: scale(1.05) translateZ(0);
    }

    .media-fallback {
      height: 100%;
      display: grid;
      place-items: center;
      color: #fff;
      font-weight: 700;
      letter-spacing: 0.6px;
      font-size: 1.05rem;
    }

    /* Card content */
    .card-content {
      padding: 16px 18px 18px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      flex: 1 1 auto;
    }

    .meta-row {
      font-size: 0.88rem;
      color: var(--muted);
      display: flex;
      gap: 8px;
      align-items: center;
    }

    .card-title {
      margin: 0;
      font-size: 1.05rem;
      color: #0b1221;
      font-weight: 700;
      line-height: 1.18;
    }

    /* Excerpt: server-truncated + client clamp fallback */
    .card-excerpt {
      color: var(--muted);
      font-size: 0.95rem;
      line-height: 1.5;
      margin: 0;
      flex: 1 1 auto;

      display: -webkit-box;
      -webkit-box-orient: vertical;
      -webkit-line-clamp: 3;
      overflow: hidden;
      text-overflow: ellipsis;
      max-height: calc(1.5em * 3);
      word-break: break-word;
    }

    /* bottom row */
    .card-bottom {
      display: flex;
      gap: 12px;
      align-items: center;
      justify-content: space-between;
      margin-top: 6px;
    }

    .tags {
      display: flex;
      gap: 8px;
      align-items: center;
      flex-wrap: wrap;
    }

    .tag {
      font-size: 0.78rem;
      padding: 6px 8px;
      border-radius: 999px;
      background: rgba(17, 83, 140, 0.06);
      color: var(--blue-2);
      font-weight: 700;
    }

    .read-link {
      text-decoration: none;
      padding: 8px 12px;
      border-radius: 8px;
      background: linear-gradient(90deg, var(--blue-1), var(--blue-3));
      color: #fff;
      font-weight: 700;
      font-size: 0.9rem;
      box-shadow: 0 8px 22px rgba(17, 73, 140, 0.08);
      transition: transform .16s ease, box-shadow .18s ease, opacity .18s;
      white-space: nowrap;
    }

    .read-link:hover {
      transform: translateY(-4px);
      box-shadow: 0 18px 44px rgba(17, 73, 140, 0.12);
      opacity: 0.98;
    }

    /* Pagination styles - improved */
    .articles-pager {
      display: flex;
      gap: 12px;
      align-items: center;
      justify-content: center;
      margin-top: 28px;
      flex-wrap: wrap;
      padding: 12px;
    }

    .pager-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 10px 14px;
      border-radius: 10px;
      background: var(--pager-bg);
      color: var(--blue-2);
      text-decoration: none;
      font-weight: 700;
      transition: transform .12s ease, box-shadow .12s ease, background .12s;
      border: 1px solid rgba(17, 83, 140, 0.06);
    }

    .pager-btn .pager-arrow {
      font-weight: 900;
      display: inline-block;
    }

    .pager-btn:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 28px rgba(17, 73, 140, 0.08);
    }

    .pager-numbers {
      display: flex;
      gap: 10px;
      align-items: center;
      overflow-x: auto;
      /* allow horizontal scroll if many pages */
      padding: 4px;
    }

    .pager-numbers::-webkit-scrollbar {
      height: 6px;
    }

    .pager-numbers::-webkit-scrollbar-thumb {
      background: rgba(17, 83, 140, 0.08);
      border-radius: 6px;
    }

    .pager-number {
      display: inline-grid;
      place-items: center;
      min-width: 44px;
      height: 44px;
      padding: 0 10px;
      border-radius: 10px;
      background: transparent;
      color: var(--blue-2);
      text-decoration: none;
      font-weight: 700;
      transition: all .12s ease;
      border: 1px solid rgba(17, 83, 140, 0.04);
      white-space: nowrap;
    }

    .pager-number:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 22px rgba(17, 73, 140, 0.06);
      background: rgba(17, 83, 140, 0.04);
    }

    .pager-number.active,
    .pager-number[aria-current="page"] {
      background: var(--pager-active-bg);
      color: #fff;
      box-shadow: 0 12px 36px rgba(17, 73, 140, 0.12);
      transform: translateY(-4px);
      border: none;
    }

    /* small screen pager adjustments */
    @media (max-width:600px) {
      .pager-number {
        min-width: 36px;
        height: 36px;
        font-size: 0.95rem;
      }

      .pager-btn {
        padding: 8px 10px;
        font-size: 0.95rem;
      }

      .articles-pager {
        gap: 8px;
        padding: 8px;
      }
    }

    /* entrance animation when grid first visible */
    .articles-grid[data-inview="true"] .article-card {
      opacity: 0;
      transform: translateY(12px);
      animation: cardIn .6s forwards;
    }

    .articles-grid[data-inview="true"] .article-card:nth-child(1) {
      animation-delay: .06s;
    }

    .articles-grid[data-inview="true"] .article-card:nth-child(2) {
      animation-delay: .12s;
    }

    .articles-grid[data-inview="true"] .article-card:nth-child(3) {
      animation-delay: .18s;
    }

    .articles-grid[data-inview="true"] .article-card:nth-child(4) {
      animation-delay: .22s;
    }

    .articles-grid[data-inview="true"] .article-card:nth-child(5) {
      animation-delay: .28s;
    }

    @keyframes cardIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* small screens tweaks */
    @media(max-width:540px) {
      .card-media {
        height: 140px;
      }

      .article-card {
        min-height: 0;
      }
    }
  </style>

  <!-- JS: add in-view attr + equalize row heights (keeps Antlers template unchanged) -->
  <script>
    (function() {
      // observe grid to trigger entrance animation
      const grid = document.querySelector('.articles-grid');
      if (grid) {
        const io = new IntersectionObserver((entries, ob) => {
          entries.forEach(e => {
            if (e.isIntersecting) {
              grid.setAttribute('data-inview', 'true');
              ob.disconnect();
            }
          });
        }, {
          threshold: 0.12
        });
        io.observe(grid);
      }

      // equalize card heights per row (fallback)
      function equalizeCards() {
        const cards = Array.from(document.querySelectorAll('.article-card'));
        if (!cards.length) return;
        cards.forEach(c => c.style.minHeight = ''); // reset
        // group by offsetTop
        const rows = {};
        cards.forEach(c => {
          const t = Math.round(c.getBoundingClientRect().top);
          (rows[t] = rows[t] || []).push(c);
        });
        Object.values(rows).forEach(group => {
          let max = 0;
          group.forEach(c => {
            const h = c.getBoundingClientRect().height;
            if (h > max) max = h;
          });
          group.forEach(c => c.style.minHeight = Math.ceil(max) + 'px');
        });
      }

      window.addEventListener('load', () => {
        setTimeout(equalizeCards, 120);
      });
      window.addEventListener('resize', () => {
        setTimeout(equalizeCards, 120);
      });

      // accessible keyboard focus helper
      document.addEventListener('keydown', (ev) => {
        if (ev.key === 'Tab') {
          document.querySelectorAll('.article-card').forEach(c => c.classList.add('keyboard-focusable'));
        }
      });
    })();
  </script>
</section>