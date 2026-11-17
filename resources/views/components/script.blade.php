<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<script src="{{ asset('assets/js/webflow-1.min.js') }}"></script>
<script src="{{ asset('assets/js/webflow-2.min.js') }}"></script>
<script src="{{ asset('assets/js/webflow-3.min.js') }}"></script>

<script src="{{ asset('assets/js/gsap/3.15.0/gsap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/Flip.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/ScrollTrigger.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/SplitText.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/Draggable.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/DrawSVGPlugin.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/InertiaPlugin.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/ScrollSmoother.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/TextPlugin.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/ScrollToPlugin.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/gsap/3.15.0/CustomEase.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">
    gsap.registerPlugin(Flip, ScrollTrigger, SplitText, Draggable, DrawSVGPlugin, InertiaPlugin, ScrollSmoother, TextPlugin, ScrollToPlugin, CustomEase);
</script>

<script src="https://unpkg.com/@studio-freight/lenis@1.0.33/dist/lenis.min.js"></script>
<script>
    // Initialisation de Lenis
    const lenis = new Lenis({
        duration: 1.2, // durée de l’inertie (en secondes)
        smooth: true, // active le scroll smooth
        direction: 'vertical', // ou 'horizontal'
        gestureDirection: 'vertical',
        smoothTouch: false, // désactive le smooth sur mobile si tu veux
        touchMultiplier: 2, // ajustement de la sensibilité
    });

    // Synchroniser Lenis avec le render loop
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);

    // Synchroniser Lenis et ScrollTrigger
    lenis.on('scroll', ScrollTrigger.update);

    gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
    });

    gsap.ticker.lagSmoothing(0);

    window.Webflow && window.Webflow.require('ix2').init();

</script>

{{-- <script>function loadScript(a) { var b = document.getElementsByTagName("head")[0], c = document.createElement("script"); c.type = "text/javascript", c.src = "https://tracker.metricool.com/resources/be.js", c.onreadystatechange = a, c.onload = a, b.appendChild(c) } loadScript(function () { beTracker.t({ hash: "9e4e5196ddc893f32a6b8f9236c1039b" }) });</script> --}}

<!--🤙 https://slater.app/16764.js-->
{{-- <script>document.addEventListener("DOMContentLoaded", function () { function loadaverroescode(e) { let t = document.createElement("script"); t.setAttribute("src", e), t.setAttribute("type", "module"), document.body.appendChild(t), t.addEventListener("load", () => { console.log("Slater loaded Averroes code.js 🤙") }), t.addEventListener("error", e => { console.log("Error loading file", e) }) } let src = window.location.host.includes("webflow.io") ? "https://slater.app/16764.js" : "https://assets.slater.app/slater/16764.js?v=1.0"; loadaverroescode(src); })</script> --}}

<script src="{{ asset('assets/js/slater.min.js') }}?v={{ file_exists(public_path('assets/js/slater.min.js')) ? filemtime(public_path('assets/js/slater.min.js')) : '1.1' }}"></script>
<script src="{{ asset('assets/js/studio.min.js') }}?v={{ file_exists(public_path('assets/js/studio.min.js')) ? filemtime(public_path('assets/js/studio.min.js')) : '1.1' }}"></script>

<script>
(function() {
    // Averroes Seamless Page Transition & Loader Controller
    var hasRunIn = false;

    // Arah transisi: 'bawah-ke-atas' (default) atau 'atas-ke-bawah'
    // Bisa diatur lewat config('navigation.transition_direction') atau di console via window.AverroesTransitionDirection
    var configuredDirection = @json(config('navigation.transition_direction', 'bawah-ke-atas'));

    function getDirection() {
        var dir = window.AverroesTransitionDirection || configuredDirection || 'bawah-ke-atas';
        return dir === 'atas-ke-bawah' ? 'atas-ke-bawah' : 'bawah-ke-atas';
    }

    function initAverroesLoader() {
        var loader = document.querySelector('.loader');
        var loaderPercent = document.querySelector('.loader_percent');
        var loaderBarFill = document.querySelector('.loader_bar-fill');
        var maskRect = document.querySelector('#mask-rect');
        var pageWrapper = document.querySelector('.page-wrapper');

        if (!loader || typeof gsap === 'undefined') return;

        var currentDirection = getDirection();
        // bawah-ke-atas: keluar ke atas (-100%)
        // atas-ke-bawah: keluar ke bawah (100%)
        var inExitY = currentDirection === 'atas-ke-bawah' ? 100 : -100;

        // --- 1. ANIMASI IN (Membuka halaman saat selesai load) ---
        if (!hasRunIn) {
            hasRunIn = true;

            var isTransition = false;
            try {
                isTransition = sessionStorage.getItem('averroes_transition') === 'true';
                sessionStorage.removeItem('averroes_transition');
            } catch(e) {}

            var duration = isTransition ? 1.2 : 2.0;
            var counter = { val: 0 };

            // Pastikan loader tampil di tengah layar (yPercent: 0)
            loader.style.display = 'flex';
            loader.style.justifyContent = 'center';
            loader.style.alignItems = 'center';
            loader.style.pointerEvents = 'all';
            gsap.set(loader, { yPercent: 0, force3D: true });

            if (loaderPercent) loaderPercent.textContent = '0%';
            if (loaderBarFill) loaderBarFill.style.width = '0%';
            if (maskRect) maskRect.setAttribute('width', '0');

            var tlIn = gsap.timeline({
                onComplete: function() {
                    if (pageWrapper) pageWrapper.classList.remove('is-fixed');
                }
            });

            tlIn.to(counter, {
                val: 100,
                duration: duration,
                ease: 'power2.inOut',
                onUpdate: function() {
                    if (loaderPercent) loaderPercent.textContent = Math.round(counter.val) + '%';
                }
            }, 0);

            if (loaderBarFill) {
                tlIn.to(loaderBarFill, {
                    width: '100%',
                    duration: duration,
                    ease: 'power2.inOut'
                }, 0);
            }

            if (maskRect) {
                tlIn.to(maskRect, {
                    attr: { width: 250 },
                    duration: duration,
                    ease: 'power2.inOut'
                }, 0);
            }

            // Animasi kebuka in: loader meluncur keluar membuka halaman baru (sangat mulus dengan power4.inOut)
            tlIn.to(loader, {
                yPercent: inExitY,
                duration: 0.8,
                ease: 'power4.inOut',
                force3D: true,
                onComplete: function() {
                    loader.style.display = 'none';
                    loader.style.pointerEvents = 'none';
                }
            }, '+=0.15');
        }

        // --- 2. ANIMASI OUT (Saat user klik link untuk ganti halaman) ---
        if (window.__averroesTransitionAttached) return;
        window.__averroesTransitionAttached = true;

        var isNavigating = false;

        document.addEventListener('click', function(e) {
            var link = e.target.closest('a');
            if (!link) return;

            var href = link.getAttribute('href');
            if (!href) return;

            // Abaikan anchor (#), javascript:, mailto:, tel:
            if (href.startsWith('#') || href.startsWith('javascript:') || href.startsWith('mailto:') || href.startsWith('tel:')) {
                return;
            }

            // Abaikan jika menahan tombol modifier (Ctrl/Cmd/Shift/Alt/middle click)
            if (e.ctrlKey || e.metaKey || e.shiftKey || e.altKey || e.which === 2 || e.button === 1 || link.target === '_blank') {
                return;
            }

            var targetUrl;
            try {
                targetUrl = new URL(link.href, window.location.href);
            } catch (err) {
                return;
            }

            // Abaikan domain eksternal
            if (targetUrl.origin !== window.location.origin) {
                return;
            }

            // Abaikan jika menuju halaman & query yang sama persis
            if (targetUrl.pathname === window.location.pathname && targetUrl.search === window.location.search) {
                return;
            }

            // Abaikan file unduhan
            if (/\.(pdf|zip|rar|jpg|jpeg|png|webp|svg|mp4|doc|docx|xls|xlsx)$/i.test(targetUrl.pathname)) {
                return;
            }

            if (isNavigating) {
                e.preventDefault();
                e.stopPropagation();
                return;
            }

            e.preventDefault();
            e.stopPropagation();
            isNavigating = true;

            // Tentukan arah gerakan saat keluar
            var activeDirection = getDirection();
            // bawah-ke-atas: mulai dari bawah layar (100%)
            // atas-ke-bawah: mulai dari atas layar (-100%)
            var outStartY = activeDirection === 'atas-ke-bawah' ? -100 : 100;

            // 1. Reset progress ke 0 agar langsung sinkron dengan halaman berikutnya
            if (loaderPercent) loaderPercent.textContent = '0%';
            if (loaderBarFill) loaderBarFill.style.width = '0%';
            if (maskRect) maskRect.setAttribute('width', '0');

            // 2. Siapkan loader di posisi awal di luar layar
            loader.style.display = 'flex';
            loader.style.pointerEvents = 'all';
            gsap.killTweensOf(loader);
            gsap.set(loader, { yPercent: outStartY, force3D: true });

            // 3. Animasi OUT: loader meluncur super mulus menutup layar ke yPercent: 0
            // Menggunakan durasi 0.75s dengan kurva power4.inOut untuk transisi yang sangat halus & mewah
            gsap.to(loader, {
                yPercent: 0,
                duration: 0.75,
                ease: 'power4.inOut',
                force3D: true,
                onComplete: function() {
                    try {
                        sessionStorage.setItem('averroes_transition', 'true');
                    } catch(err) {}
                    window.location.href = targetUrl.href;
                }
            });

            // Fallback keselamatan jika navigasi tertunda
            setTimeout(function() {
                window.location.href = targetUrl.href;
            }, 850);
        }, true); // useCapture = true agar mendahului event listener lain

        // Tangani navigasi browser Back/Forward (BFCache)
        window.addEventListener('pageshow', function(ev) {
            isNavigating = false;
            if (ev.persisted && loader) {
                loader.style.display = 'none';
                loader.style.pointerEvents = 'none';
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAverroesLoader);
    } else {
        initAverroesLoader();
    }
})();
</script>

<script>
    function initAllAverroesSliders() {
        document.querySelectorAll('.averroes-slider-track').forEach(track => {
            if (track.dataset.sliderInitialized === 'true') return;
            track.dataset.sliderInitialized = 'true';

            const idPrefix = track.id ? track.id.replace('-track', '') : '';
            const prevBtn = idPrefix ? document.getElementById(idPrefix + '-prev') : null;
            const nextBtn = idPrefix ? document.getElementById(idPrefix + '-next') : null;
            const counter = idPrefix ? document.getElementById(idPrefix + '-counter') : null;

            function getStepWidth() {
                const card = track.querySelector('.averroes-slide-card');
                if (!card) return 320;
                const gap = parseFloat(window.getComputedStyle(track).gap) || 20;
                return card.offsetWidth + gap;
            }

            function updateControls() {
                const cards = track.querySelectorAll('.averroes-slide-card');
                if (!cards.length) return;

                const trackRect = track.getBoundingClientRect();
                let closestIndex = 1;
                let minDiff = Infinity;

                cards.forEach((card, idx) => {
                    const cardRect = card.getBoundingClientRect();
                    const diff = Math.abs(cardRect.left - trackRect.left);
                    if (diff < minDiff) {
                        minDiff = diff;
                        closestIndex = idx + 1;
                    }
                });

                if (counter) {
                    const pad = (n) => String(n).padStart(2, '0');
                    counter.textContent = `${pad(closestIndex)} / ${pad(cards.length)}`;
                }

                if (prevBtn) {
                    if (track.scrollLeft <= 10) {
                        prevBtn.classList.add('is-disabled');
                    } else {
                        prevBtn.classList.remove('is-disabled');
                    }
                }

                if (nextBtn) {
                    if (track.scrollLeft + track.clientWidth >= track.scrollWidth - 10) {
                        nextBtn.classList.add('is-disabled');
                    } else {
                        nextBtn.classList.remove('is-disabled');
                    }
                }
            }

            if (prevBtn) {
                prevBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    track.scrollBy({ left: -getStepWidth(), behavior: 'smooth' });
                });
            }

            if (nextBtn) {
                nextBtn.addEventListener('click', (e) => {
                    e.preventDefault();
                    track.scrollBy({ left: getStepWidth(), behavior: 'smooth' });
                });
            }

            let isScrolling = false;
            track.addEventListener('scroll', () => {
                if (!isScrolling) {
                    window.requestAnimationFrame(() => {
                        updateControls();
                        isScrolling = false;
                    });
                    isScrolling = true;
                }
            }, { passive: true });

            // Desktop Mouse Drag Support
            let isDown = false;
            let startX = 0;
            let scrollLeft = 0;

            track.addEventListener('mousedown', (e) => {
                isDown = true;
                track.classList.add('is-dragging');
                startX = e.pageX - track.offsetLeft;
                scrollLeft = track.scrollLeft;
            });

            window.addEventListener('mouseup', () => {
                if (isDown) {
                    isDown = false;
                    track.classList.remove('is-dragging');
                }
            });

            track.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - track.offsetLeft;
                const walk = (x - startX) * 1.3;
                track.scrollLeft = scrollLeft - walk;
            });

            // Update on load & resize
            updateControls();
            window.addEventListener('resize', updateControls);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAllAverroesSliders);
    } else {
        initAllAverroesSliders();
    }

    if (typeof barba !== 'undefined') {
        barba.hooks.after(() => {
            initAllAverroesSliders();
        });
    }
</script>