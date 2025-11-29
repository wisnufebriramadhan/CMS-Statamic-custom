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


$(document).ready(function () {
    //responsive menu toggle
    $("#menutoggle").click(function () {
        $('.xs-menu').toggleClass('displaynone');

    });
    //add active class on menu
    $('ul li').click(function (e) {
        e.preventDefault();
        $('li').removeClass('active');
        $(this).addClass('active');
    });
    //drop down menu	
    $(".drop-down").hover(function () {
        $('.mega-menu').addClass('display-on');
    });
    $(".drop-down").mouseleave(function () {
        $('.mega-menu').removeClass('display-on');
    });

});


