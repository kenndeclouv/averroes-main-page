<div id="averroes-cursor" class="averroes-cursor" aria-hidden="true">
    <div id="averroes-cursor-dot" class="averroes-cursor-dot"></div>
    <div id="averroes-cursor-ring" class="averroes-cursor-ring"></div>
</div>

<script>
(function() {
    if (typeof window === 'undefined') return;

    // Only enable on desktop devices with fine pointer (mouse)
    var isTouch = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);
    if (isTouch && window.matchMedia && window.matchMedia('(hover: none) and (pointer: coarse)').matches) {
        return;
    }

    var cursor = document.getElementById('averroes-cursor');
    var dot = document.getElementById('averroes-cursor-dot');
    var ring = document.getElementById('averroes-cursor-ring');
    if (!cursor || !dot || !ring) return;

    var mouseX = -200, mouseY = -200;
    var dotX = -200, dotY = -200;
    var ringX = -200, ringY = -200;
    var hasMoved = false;

    var isHovered = false;
    var isMouseDown = false;
    var currentRingScale = 1;
    var targetRingScale = 1;
    var currentDotScale = 1;
    var targetDotScale = 1;

    // Track mouse position
    window.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;

        if (!hasMoved) {
            hasMoved = true;
            dotX = mouseX;
            dotY = mouseY;
            ringX = mouseX;
            ringY = mouseY;
            cursor.classList.add('is-visible');
            document.documentElement.classList.add('has-custom-cursor');
        }
    }, { passive: true });

    // Interactive element hover detection via event delegation
    var interactiveSelector = 'a, button, [role="button"], input[type="submit"], input[type="button"], .w-button, .button-primary, .home-services_content-link, .cursor-pointer, .averroes-slide, .averroes-slider-btn, .nav_item, .footer_content-link, [data-cursor="hover"]';

    document.addEventListener('mouseover', function(e) {
        if (e.target && e.target.closest && e.target.closest(interactiveSelector)) {
            isHovered = true;
            cursor.classList.add('is-hovered');
        }
    }, { passive: true });

    document.addEventListener('mouseout', function(e) {
        if (e.target && e.target.closest && e.target.closest(interactiveSelector)) {
            isHovered = false;
            cursor.classList.remove('is-hovered');
        }
    }, { passive: true });

    // Click / Mouse down states
    window.addEventListener('mousedown', function() {
        isMouseDown = true;
        cursor.classList.add('is-active');
    }, { passive: true });

    window.addEventListener('mouseup', function() {
        isMouseDown = false;
        cursor.classList.remove('is-active');
    }, { passive: true });

    // Window leave / enter
    document.addEventListener('mouseleave', function() {
        cursor.classList.remove('is-visible');
    });

    document.addEventListener('mouseenter', function() {
        if (hasMoved) {
            cursor.classList.add('is-visible');
        }
    });

    window.addEventListener('blur', function() {
        cursor.classList.remove('is-visible');
    });

    window.addEventListener('focus', function() {
        if (hasMoved) {
            cursor.classList.add('is-visible');
        }
    });

    // Fluid Animation Loop (Trailing / "Lemes" Inertia)
    function loop() {
        if (hasMoved) {
            // Dot tracks swiftly
            dotX += (mouseX - dotX) * 0.68;
            dotY += (mouseY - dotY) * 0.68;

            // Ring trails with lazy elastic easing (lemes)
            ringX += (mouseX - ringX) * 0.125;
            ringY += (mouseY - ringY) * 0.125;

            // Target scales
            targetRingScale = isMouseDown ? 0.82 : (isHovered ? 1.65 : 1);
            currentRingScale += (targetRingScale - currentRingScale) * 0.16;

            targetDotScale = isHovered ? 0.6 : 1;
            currentDotScale += (targetDotScale - currentDotScale) * 0.2;

            dot.style.transform = 'translate3d(' + dotX + 'px, ' + dotY + 'px, 0) scale(' + currentDotScale + ')';
            ring.style.transform = 'translate3d(' + ringX + 'px, ' + ringY + 'px, 0) scale(' + currentRingScale + ')';
        }
        requestAnimationFrame(loop);
    }
    requestAnimationFrame(loop);
})();
</script>
