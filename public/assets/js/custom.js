// Init AOS (still useful for other elements)
AOS.init({
    once: true,
    duration: 700,
    easing: 'ease-out-cubic'
});

// IntersectionObserver to trigger the in-view animations and sequential delays
(function () {
    const section = document.querySelector('.features.section');
    if (!section) return;

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                section.classList.add('in-view');

                // add staggered delays for feature-boxes and initial-letter animations
                const boxes = section.querySelectorAll('.feature-box');
                boxes.forEach((box, i) => {
                    // stagger: base 80ms step
                    const delay = 80 * i; // ms
                    box.style.transitionDelay = (delay / 1000) + 's';
                    // initial-letter
                    const letter = box.querySelector('.initial-letter');
                    if (letter) {
                        // schedule adding animate class slightly after box transition to feel smooth
                        setTimeout(() => {
                            letter.classList.add('animate');
                        }, delay + 120);
                    }
                });

                observer.unobserve(section); // run once
            }
        });
    }, {
        threshold: 0.18
    });

    observer.observe(section);
})();

/* Optional: if your header height is dynamic, compute and set CSS var automatically.
   If your header has id="site-header" or role, change selector accordingly.
*/
(function adjustHeaderVar() {
    try {
        const header = document.querySelector('header');
        if (!header) return;
        const ht = header.getBoundingClientRect().height;
        document.documentElement.style.setProperty('--site-header-height', ht + 'px');
    } catch (e) {
        // ignore
    }
})();


//JS GOVERNANCE COMPLIANCE SECTION
(function () {
    const section = document.getElementById('governance');
    if (!section) return;

    const cards = Array.from(section.querySelectorAll('.gov-card'));
    const icons = Array.from(section.querySelectorAll('.icon-svg'));
    const aside = section.querySelector('.aside-inner');

    // Entrance: intersection observer with stagger
    const io = new IntersectionObserver(entries => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                section.classList.add('in-view');

                // stagger cards
                cards.forEach((card, i) => {
                    card.style.transitionDelay = (i * 0.08) + 's';
                });

                // stagger icon pop slightly after each card appears
                icons.forEach((icon, i) => {
                    setTimeout(() => {
                        icon.classList.add('pop');
                    }, 120 + i * 80);
                });

                if (aside) aside.style.transitionDelay = '0.12s';

                io.disconnect();
            }
        });
    }, {
        threshold: 0.12
    });

    io.observe(section);

    // Lightweight tilt effect per card
    // Only enable on devices with sufficient width and when reduced-motion is NOT requested
    const supportsTilt = window.matchMedia('(pointer: fine)').matches &&
        !window.matchMedia('(prefers-reduced-motion: reduce)').matches &&
        window.innerWidth > 768;

    if (supportsTilt) {
        cards.forEach(card => {
            let rect = null;
            let rafId = null;
            const maxTilt = 8; // degrees
            const ease = 0.12;
            let currentX = 0,
                currentY = 0,
                targetX = 0,
                targetY = 0;

            const update = () => {
                currentX += (targetX - currentX) * ease;
                currentY += (targetY - currentY) * ease;

                // apply rotation: invert Y for natural feel
                const rotateY = (currentX * maxTilt).toFixed(2);
                const rotateX = (currentY * -maxTilt).toFixed(2);

                // small translateZ effect
                const translateZ = Math.max(Math.abs(currentX), Math.abs(currentY)) * 6;

                card.style.transform = `translateY(-8px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(${translateZ}px)`;
                // subtle shadow adapt
                card.style.boxShadow = `0 ${16 + Math.abs(currentY) * 12}px ${30 + Math.abs(currentX) * 30}px rgba(17,73,140,0.10)`;

                rafId = requestAnimationFrame(update);
            };

            const onMouseMove = (evt) => {
                rect = rect || card.getBoundingClientRect();
                const px = (evt.clientX - rect.left) / rect.width; // 0..1
                const py = (evt.clientY - rect.top) / rect.height; // 0..1
                // center based -0.5..0.5
                targetX = (px - 0.5) * 2; // -1..1
                targetY = (py - 0.5) * 2;
                if (!rafId) update();
            };

            const onMouseEnter = () => {
                rect = card.getBoundingClientRect();
                card.classList.add('tilt-anim');
                // lift effect (keep sizes same)
                card.style.transition = 'transform .12s linear';
                // start anim loop
                if (!rafId) rafId = requestAnimationFrame(update);
            };

            const onMouseLeave = () => {
                // reset targets to 0
                targetX = 0;
                targetY = 0;
                // cancel after easing back
                setTimeout(() => {
                    cancelAnimationFrame(rafId);
                    rafId = null;
                    card.style.transform = '';
                    card.style.boxShadow = '';
                    card.style.transition = '';
                    card.classList.remove('tilt-anim');
                }, 220);
            };

            card.addEventListener('mousemove', onMouseMove);
            card.addEventListener('mouseenter', onMouseEnter);
            card.addEventListener('mouseleave', onMouseLeave);

            // accessibility: also allow focus/blur to trigger subtle lift
            card.addEventListener('focusin', () => {
                card.style.transform = 'translateY(-8px)';
            });
            card.addEventListener('focusout', () => {
                card.style.transform = '';
            });
        });
    }

    // Cleanup on unload (prevent RAF leak)
    window.addEventListener('beforeunload', () => {
        try {
            cards.forEach(card => {
                card.replaceWith(card.cloneNode(true));
            });
        } catch (e) {
            /* ignore */
        }
    });
})();
// END JS GOVERNANCE COMPLIANCE SECTION

// JS CORPORATE VALUE CULTURE SECTION
(function () {
    const section = document.querySelector('.features.section');
    if (!section) return;

    // Intersection observer to toggle .in-view
    const io = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                section.classList.add('in-view');

                // stagger initial-letter pop
                const initials = section.querySelectorAll('.initial-letter');
                initials.forEach((el, i) => {
                    setTimeout(() => el.classList.add('animate'), i * 120 + 80);
                });

                io.disconnect();
            }
        });
    }, {
        threshold: 0.18
    });

    io.observe(section);

    // Add small stagger delays to feature-box children for nicer entrance
    const leftBoxes = section.querySelectorAll('.left-col .feature-box');
    leftBoxes.forEach((el, i) => el.style.transitionDelay = (i * 0.08) + 's');
    const rightBoxes = section.querySelectorAll('.right-col .feature-box');
    rightBoxes.forEach((el, i) => el.style.transitionDelay = (i * 0.08 + 0.06) + 's');
})();
// END JS CORPORATE VALUE CULTURE SECTION

// JS portofolio SECTION
(function () {
    /* Lazy load (data-src -> src) */
    function initLazy() {
        const imgs = Array.from(document.querySelectorAll('img.lazy-img'));
        if (!imgs.length) return;
        if ('IntersectionObserver' in window) {
            const io = new IntersectionObserver((entries, obs) => {
                entries.forEach(en => {
                    if (en.isIntersecting) {
                        const img = en.target;
                        const src = img.dataset.src;
                        if (src) img.src = src;
                        img.addEventListener('load', () => {
                            img.classList.add('loaded');
                            img.closest('.loading')?.classList.remove('loading');
                        }, {
                            once: true
                        });
                        obs.unobserve(img);
                    }
                });
            }, {
                rootMargin: '200px 0px'
            });
            imgs.forEach(i => io.observe(i));
        } else {
            imgs.forEach(img => {
                const src = img.dataset.src;
                if (src) img.src = src;
                img.onload = () => {
                    img.classList.add('loaded');
                    img.closest('.loading')?.classList.remove('loading');
                }
            });
        }
    }

    /* Build modal DOM and functions */
    function buildModal() {
        const modal = document.createElement('div');
        modal.className = 'vl-modal';
        modal.setAttribute('role', 'dialog');
        modal.setAttribute('aria-hidden', 'true');
        modal.innerHTML = `
          <div class="vl-modal-panel" role="document">
            <div class="vl-slide" aria-live="polite">
              <button class="vl-close" aria-label="Close (Esc)">✕</button>
              <button class="vl-prev" aria-label="Previous (Left)">&larr;</button>
              <button class="vl-next" aria-label="Next (Right)">&rarr;</button>
              <div class="vl-content" style="width:100%;height:100%;display:grid;place-items:center;">
                <img src="" alt="" />
                <div class="vl-caption" aria-hidden="false"></div>
              </div>
            </div>
          </div>
        `;
        document.body.appendChild(modal);
        return modal;
    }

    function initModalLightbox() {
        const modal = buildModal();
        const modalImg = modal.querySelector('.vl-content img');
        const caption = modal.querySelector('.vl-caption');
        const closeBtn = modal.querySelector('.vl-close');
        const prevBtn = modal.querySelector('.vl-prev');
        const nextBtn = modal.querySelector('.vl-next');

        // Build gallery array from all cards; group per card-frame so we don't mix different portofolios
        // Structure: [ { root: cardFrameElement, images: [ {src, alt, title} ] }, ... ]
        const galleries = [];
        document.querySelectorAll('.portofolio-card-frame').forEach(frame => {
            const imgs = Array.from(frame.querySelectorAll('img.lazy-img'));
            const items = imgs.map(i => ({
                src: i.dataset.src || i.src,
                alt: i.alt || '',
                title: frame.querySelector('.portofolio-left-title')?.textContent?.trim() || ''
            }));
            if (items.length) galleries.push({
                root: frame,
                items
            });
        });

        // helper to open modal for a specific gallery + index
        function openGallery(rootFrame, startIndex) {
            const g = galleries.find(x => x.root === rootFrame);
            if (!g) return;
            let idx = Math.max(0, Math.min(startIndex || 0, g.items.length - 1));
            modal.classList.add('open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.style.overflow = 'hidden';
            showSlide();

            // focus management
            closeBtn.focus();

            function showSlide() {
                const it = g.items[idx];
                // ensure image is loaded (if lazy, set src)
                if (it.src && modalImg.src !== it.src) {
                    modalImg.src = it.src;
                }
                modalImg.alt = it.alt || it.title || '';
                caption.textContent = it.title || it.alt || '';
                // update prev/next visibility
                prevBtn.style.display = (idx > 0) ? '' : 'none';
                nextBtn.style.display = (idx < g.items.length - 1) ? '' : 'none';
                modal.dataset.index = idx;
            }

            // handlers
            function onKey(e) {
                if (e.key === 'Escape') {
                    closeAll();
                }
                if (e.key === 'ArrowLeft') {
                    if (idx > 0) {
                        idx--;
                        showSlide();
                    }
                }
                if (e.key === 'ArrowRight') {
                    if (idx < g.items.length - 1) {
                        idx++;
                        showSlide();
                    }
                }
            }

            function prev() {
                if (idx > 0) {
                    idx--;
                    showSlide();
                }
            }

            function next() {
                if (idx < g.items.length - 1) {
                    idx++;
                    showSlide();
                }
            }

            function closeAll() {
                document.removeEventListener('keydown', onKey);
                prevBtn.removeEventListener('click', prev);
                nextBtn.removeEventListener('click', next);
                closeBtn.removeEventListener('click', closeAll);
                modal.classList.remove('open');
                modal.setAttribute('aria-hidden', 'true');
                document.body.style.overflow = '';
                // restore focus to the triggering element (if we stored it)
                lastTrigger?.focus?.();
            }

            // wire up
            const lastTrigger = document.activeElement;
            document.addEventListener('keydown', onKey);
            prevBtn.addEventListener('click', prev);
            nextBtn.addEventListener('click', next);
            closeBtn.addEventListener('click', closeAll);
            // close when clicking overlay but not inside content
            modal.addEventListener('click', (ev) => {
                if (ev.target === modal) closeAll();
            }, {
                once: false
            });
        }

        // click handlers: when any .img-btn inside a card is clicked, open that card's gallery
        document.querySelectorAll('.portofolio-card-frame').forEach(frame => {
            const btns = Array.from(frame.querySelectorAll('.img-btn'));
            btns.forEach((btn, i) => {
                btn.addEventListener('click', (ev) => {
                    ev.preventDefault();
                    // ensure lazy images in this frame are loaded before opening (trigger load)
                    const imgs = Array.from(frame.querySelectorAll('img.lazy-img'));
                    imgs.forEach(im => {
                        if (!im.src || im.src.indexOf('data:image/svg+xml') === 0) {
                            const s = im.dataset.src;
                            if (s) im.src = s;
                        }
                    });
                    // open gallery for this frame at index i
                    openGallery(frame, i);
                });
            });
        });
    }

    // init on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', () => {
            initLazy();
            initModalLightbox();
        });
    } else {
        initLazy();
        initModalLightbox();
    }
})();
// END JS portofolio SECTION
