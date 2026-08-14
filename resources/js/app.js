import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);
window.gsap = gsap;

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (!prefersReducedMotion) {
    const lenis = new Lenis({
        autoRaf: false,
        duration: 2.5,
        smoothWheel: true,
        wheelMultiplier: 1,
        touchMultiplier: 2,
        infinite: false,
    });

    lenis.on('scroll', ScrollTrigger.update);

    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);
}

document.addEventListener('DOMContentLoaded', function () {
    initScrollReveal();
    initPortfolioHorizontalScroll();
});

function initScrollReveal() {
    const revealTargets = document.querySelectorAll('[data-reveal]');

    if (revealTargets.length === 0) return;

    if (prefersReducedMotion || typeof IntersectionObserver === 'undefined') {
        gsap.set(revealTargets, { opacity: 1, y: 0, clearProps: 'transform' });
        return;
    }

    gsap.set(revealTargets, { opacity: 0, y: 24 });

    // clearProps: 'transform' matters beyond tidiness — a lingering transform
    // (even an identity one left over from animating y back to 0) creates a
    // new CSS containing block, which breaks position:fixed for any
    // descendant (e.g. the portfolio section's pinned horizontal scroll).
    const reveal = (el) =>
        gsap.to(el, { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out', clearProps: 'transform' });

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    reveal(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        },
        { threshold: 0.1, rootMargin: '0px 0px -10% 0px' },
    );

    revealTargets.forEach((el) => observer.observe(el));

    // Safety net: content must never stay permanently invisible if the
    // observer doesn't fire for some reason (unexpected layout timing,
    // an element outside any scrollable ancestor, etc).
    window.setTimeout(() => {
        revealTargets.forEach((el) => {
            if (gsap.getProperty(el, 'opacity') < 1) reveal(el);
        });
    }, 2000);
}

// Portfolio section: heading and track scroll together normally, at their
// normal document-flow distance, until the track itself reaches the vertical
// center of the viewport — that's the moment app.js pins the whole block.
// From there, further scrolling pans the track horizontally while the
// heading simultaneously animates upward and fades, so focus hands off to
// the gallery smoothly instead of the heading just vanishing. Releases to
// the next section once the pan finishes. On mobile (and with reduced
// motion) it's left as a plain, native horizontally-swipeable row.
function initPortfolioHorizontalScroll() {
    const pinWrap = document.querySelector('#work-pin');
    const heading = document.querySelector('#work');
    const track = document.querySelector('#work-track');

    if (!pinWrap || !heading || !track || prefersReducedMotion) return;

    const desktopQuery = window.matchMedia('(min-width: 768px)');
    let scrollTween = null;

    function destroy() {
        scrollTween?.scrollTrigger?.kill();
        scrollTween = null;
        gsap.set(track, { clearProps: 'transform' });
        gsap.set(heading, { clearProps: 'transform,opacity' });
        track.style.overflowX = 'auto';
    }

    function create() {
        // Native scroll and the GSAP-driven pan would fight each other, so the
        // track only becomes overflow:visible once the pin is actually active.
        track.style.overflowX = 'visible';
        const distance = track.scrollWidth - pinWrap.clientWidth;
        if (distance <= 0) {
            track.style.overflowX = 'auto';
            return;
        }

        const tl = gsap.timeline({
            scrollTrigger: {
                // Trigger off the track itself (not the whole pinned block), so
                // pinning engages exactly when the cards reach viewport center —
                // the heading stays at its normal distance above until then.
                trigger: track,
                start: 'center center',
                end: '+=' + distance,
                scrub: 1,
                pin: pinWrap,
                // pinSpacing defaults to resizing the spacer's `height`, but inside
                // this flex-column section that silently reserves 0 extra scroll
                // room (spacer height only reflects the block's own natural
                // height). 'margin' reserves the distance via margin-bottom
                // instead, which works correctly here.
                pinSpacing: 'margin',
            },
        });

        // Own height (plus a margin of safety) guarantees it clears the
        // viewport regardless of how tall the heading renders at a given
        // breakpoint, rather than a guessed fixed pixel amount.
        const headingExitDistance = heading.offsetHeight + 60;

        tl.to(track, { x: -distance, ease: 'none', duration: 1 }, 0);
        // Short duration relative to the track's — the heading fully exits
        // within the first ~18% of the pinned scroll range and then simply
        // stays gone (opacity 0, scrolled fully out of view) for the rest of
        // the pan, so what's on screen for most of the gallery is cards only.
        tl.to(heading, { y: -headingExitDistance, opacity: 0, ease: 'none', duration: 0.18 }, 0);

        scrollTween = tl;
    }

    function sync() {
        destroy();
        if (desktopQuery.matches) create();
        ScrollTrigger.refresh();
    }

    sync();

    // Card widths are fixed by CSS regardless of image load state (each image
    // sits absolutely-positioned inside an explicitly-sized container), so
    // image loading doesn't affect track.scrollWidth — no resync needed there.
    // Web font loading can reflow text above this section and shift its
    // vertical start position, so recalculate trigger positions once fonts
    // settle — a plain refresh (not a full destroy/recreate) avoids racing
    // with ScrollTrigger's own pin-spacer DOM mutations.
    document.fonts?.ready?.then(() => ScrollTrigger.refresh());

    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(sync, 200);
    });
}
