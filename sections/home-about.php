<?php
/**
 * Home About Teaser Section (v2: each word acts out its meaning)
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/../includes/config.php';
?>
<!-- Home About Section -->
<section class="home-about section">
  <div class="section-label">
    <span>THE SHORT VERSION</span>
    <span>03 — ABOUT</span>
  </div>
  <div class="ab-rule" aria-hidden="true"></div>
  <p class="ab-state" aria-hidden="true"><b>01</b> / 03 &nbsp;<span>BUILDING</span></p>

  <div class="home-about-grid">
    <h2 class="display ab-title" aria-label="A builder. A thinker. Still curious.">
      <span class="ab-line" aria-hidden="true"><span data-split>A BUILDER.</span></span>
      <span class="ab-line" aria-hidden="true"><span data-split>A THINKER.</span></span>
      <span class="ab-line outline-type" aria-hidden="true"><span data-split data-fill>STILL CURIOUS.</span></span>

      <!-- curious eyes: they follow your cursor -->
      <svg class="ab-eyes" viewBox="0 0 120 56" aria-hidden="true" focusable="false">
        <g class="ab-eye" data-eye="30">
          <ellipse cx="30" cy="28" rx="26" ry="24" class="ab-eye__white"/>
          <circle class="ab-pupil" cx="30" cy="28" r="9"/>
        </g>
        <g class="ab-eye" data-eye="90">
          <ellipse cx="90" cy="28" rx="26" ry="24" class="ab-eye__white"/>
          <circle class="ab-pupil" cx="90" cy="28" r="9"/>
        </g>
      </svg>
    </h2>

    <div class="ab-col">
      <p class="large-copy ab-copy">
        <span class="ab-line"><span>A developer’s precision.</span></span>
        <span class="ab-line"><span>A creative’s curiosity.</span></span>
        <span class="ab-line"><span>Both, on <span class="ab-ul">the same page.</span></span></span>
      </p>
      <p class="ab-body">From Python and Django to expressive frontend development, I care about the full experience. I’m currently putting that into practice at Social Amplifiers.</p>
      <a class="text-cta ab-cta" href="<?= url('about.php') ?>">A LITTLE MORE ABOUT ME <span>↗</span></a>
    </div>
  </div>
</section>

<style>
.home-about.is-pin { min-height: 100svh; display: flex; flex-direction: column; justify-content: center; }

.ab-rule { height: 1px; background: var(--line); margin: 14px 0 12px; transform-origin: left; }
.ab-state { margin: 0 0 clamp(28px, 5vw, 64px); font-size: 9px; letter-spacing: .08em; font-weight: 600; color: var(--muted); display: none; }
.ab-state b { color: var(--ink); font-weight: 700; }
.ab-state span { color: var(--red); display: inline-block; }
.home-about.is-pin .ab-state { display: block; }
.home-about:not(.is-pin) .ab-rule { margin-bottom: clamp(36px, 6vw, 80px); }

.home-about-grid { position: relative; display: grid; grid-template-columns: 1.2fr 1fr; gap: 10vw; align-items: center; }
.home-about-grid .display { font-size: clamp(45px, 6vw, 95px); }
.ab-title { position: relative; }

.ab-line { display: block; overflow: hidden; padding-bottom: .1em; }
.ab-line > span { display: block; }
.ab-title .c { display: inline-block; will-change: transform, opacity, filter; }

/* eyes */
.ab-eyes { position: absolute; right: 0; top: -.55em; width: clamp(74px, 9vw, 132px); overflow: visible; }
.ab-eye__white { fill: #fff; stroke: var(--ink); stroke-width: 2.5; }
.ab-pupil { fill: var(--ink); }

.ab-col { position: relative; }
.home-about-grid .large-copy { margin-bottom: 25px; }
.ab-ul { position: relative; display: inline-block; }
.ab-ul::after { content: ""; position: absolute; left: 0; right: 0; bottom: .02em; height: 2px; background: var(--red); transform: scaleX(var(--u, 1)); transform-origin: left; }

.home-about-grid > .ab-col > p.ab-body { max-width: 420px; font-size: 13px; color: var(--ink); line-height: 1.7; }
.ab-body .w { display: inline-block; white-space: pre; }

.home-about-grid .text-cta { margin-top: 30px; display: inline-flex; align-items: center; gap: 18px; will-change: transform; }
.home-about-grid .text-cta span { display: inline-block; transition: transform .35s cubic-bezier(.2, .7, .2, 1); }
.home-about-grid .text-cta:hover span { transform: translate(4px, -4px); }

@media (max-width: 1100px) { .home-about-grid { gap: 6vw; } }
@media (max-width: 760px) {
  .home-about-grid { grid-template-columns: 1fr; gap: 35px; }
  .home-about-grid .display { font-size: 12vw; }
  .home-about-grid .large-copy { font-size: 28px; }
  .home-about-grid > .ab-col > p.ab-body { font-size: 12px; }
  .ab-eyes { width: 70px; top: -.7em; }
}
</style>

<script>
(() => {
  const root = document.querySelector('.home-about');
  if (!root || !window.gsap || !window.ScrollTrigger || document.body.classList.contains('motion-paused')) return;
  gsap.registerPlugin(ScrollTrigger);

  const q = s => root.querySelector(s), qa = s => [...root.querySelectorAll(s)];
  const red = getComputedStyle(root).getPropertyValue('--red').trim() || '#e5322d';

  const splitChars = el => {
    const t = el.textContent; el.textContent = '';
    return [...t].map(ch => { const s = document.createElement('span'); s.className = 'c'; s.innerHTML = ch === ' ' ? '&nbsp;' : ch; el.appendChild(s); return s; });
  };
  const splitWords = el => {
    const w = el.textContent.trim().split(/\s+/); el.textContent = '';
    return w.map((t, i) => { const s = document.createElement('span'); s.className = 'w'; s.textContent = t + (i < w.length - 1 ? ' ' : ''); el.appendChild(s); return s; });
  };

  const [builder, thinker, curious] = qa('[data-split]').map(splitChars);
  const words = splitWords(q('.ab-body'));
  const copy = qa('.ab-copy .ab-line > span');
  const mm = gsap.matchMedia();

  mm.add('(prefers-reduced-motion: no-preference)', () => {
    const pin = window.matchMedia('(min-width: 901px)').matches;
    root.classList.toggle('is-pin', pin);

    gsap.set(words, { opacity: .2 });

    const tl = gsap.timeline(pin
      ? { scrollTrigger: { trigger: root, start: 'top top', end: '+=260%', pin: true, scrub: .6, anticipatePin: 1, onUpdate: s => setState(s.progress < .24 ? 0 : s.progress < .48 ? 1 : 2) } }
      : { scrollTrigger: { trigger: '.home-about-grid', start: 'top 78%', once: true } });
    if (!pin) tl.timeScale(2.4);

    /* label + rule */
    tl.from('.home-about .section-label span', { y: 14, opacity: 0, duration: .6, stagger: .1, ease: 'power3.out' }, 0)
      .from('.ab-rule', { scaleX: 0, duration: 1, ease: 'power3.inOut' }, 0.1)

      /* BUILDER: letters drop in and settle, like blocks being stacked */
      .from(builder, { yPercent: -160, opacity: 0, rotation: () => gsap.utils.random(-14, 14), duration: .9, stagger: .07, ease: 'bounce.out' }, 0.6)
      .from(copy[0], { yPercent: 115, duration: .8, ease: 'power4.out' }, 1.5)

      /* THINKER: letters surface out of a blur, in random order, like an idea forming */
      .from(thinker, { opacity: 0, filter: 'blur(16px)', scale: 1.18, y: 8, duration: .9, stagger: { each: .07, from: 'random' }, ease: 'power2.out' }, 2.7)
      .from(copy[1], { yPercent: 115, duration: .8, ease: 'power4.out' }, 3.6)

      /* CURIOUS: letters pop with spring, then fill with colour; the eyes open */
      .from(curious, { scale: 0, opacity: 0, rotation: () => gsap.utils.random(-45, 45), duration: .9, stagger: .05, ease: 'elastic.out(1, .5)' }, 5.2)
      .to(curious, { color: red, duration: .5, stagger: .05, ease: 'none' }, 6.1)
      .from('.ab-eyes', { scale: 0, rotation: -25, transformOrigin: '50% 100%', duration: 1, ease: 'elastic.out(1, .45)' }, 6.5)
      .from(copy[2], { yPercent: 115, duration: .8, ease: 'power4.out' }, 6.0)
      .fromTo('.ab-ul', { '--u': 0 }, { '--u': 1, duration: .8, ease: 'power3.inOut' }, 6.8)

      /* body is read word by word, then the CTA arrives */
      .to(words, { opacity: 1, stagger: .09, duration: .3, ease: 'none' }, 7.2)
      .from('.ab-cta', { y: 16, opacity: 0, duration: .7, ease: 'power3.out' }, 9.2)
      .to({}, { duration: 1.2 });                                 // hold the finished frame

    /* step label: 01 BUILDING, 02 THINKING, 03 WONDERING */
    const st = q('.ab-state'), num = st.querySelector('b'), tag = st.querySelector('span');
    const labels = ['BUILDING', 'THINKING', 'WONDERING'];
    let cur = -1;
    function setState(i) {
      if (i === cur) return; cur = i;
      num.textContent = '0' + (i + 1);
      gsap.fromTo(tag, { yPercent: 80, opacity: 0 }, { yPercent: 0, opacity: 1, duration: .45, ease: 'power3.out' });
      tag.textContent = labels[i];
    }
    setState(0);

    return () => root.classList.remove('is-pin');
  });

  /* ---------- Eyes: follow the cursor, wander when idle, blink ---------- */
  mm.add('(prefers-reduced-motion: no-preference)', () => {
    const svg = q('.ab-eyes'), eyes = qa('.ab-eye');
    const pupils = eyes.map(e => e.querySelector('.ab-pupil'));
    const mv = pupils.map(p => ({ x: gsap.quickTo(p, 'x', { duration: .35, ease: 'power3.out' }), y: gsap.quickTo(p, 'y', { duration: .35, ease: 'power3.out' }) }));
    let seen = true, last = 0;

    new IntersectionObserver(([e]) => { seen = e.isIntersecting; }).observe(svg);

    const look = (cx, cy) => {
      const r = svg.getBoundingClientRect(), k = r.width / 120;
      eyes.forEach((eye, i) => {
        const ex = r.left + (+eye.dataset.eye) * k, ey = r.top + 28 * k;
        const dx = cx - ex, dy = cy - ey, d = Math.hypot(dx, dy) || 1, m = Math.min(d / (120 * k), 1) * 13;
        mv[i].x(dx / d * m); mv[i].y(dy / d * m * .85);
      });
    };
    const onMove = e => { last = performance.now(); if (seen) look(e.clientX, e.clientY); };
    window.addEventListener('pointermove', onMove, { passive: true });

    const idle = setInterval(() => {                       // nobody is moving the mouse: look around on its own
      if (!seen || performance.now() - last < 2200) return;
      const r = svg.getBoundingClientRect();
      look(r.left + r.width / 2 + gsap.utils.random(-400, 400), r.top + r.height / 2 + gsap.utils.random(-220, 220));
    }, 1600);

    const blink = () => {
      if (seen) gsap.to(eyes, { scaleY: .08, transformOrigin: '50% 50%', duration: .07, yoyo: true, repeat: 1 });
      blinkT = setTimeout(blink, gsap.utils.random(2800, 5200));
    };
    let blinkT = setTimeout(blink, 3500);

    return () => { window.removeEventListener('pointermove', onMove); clearInterval(idle); clearTimeout(blinkT); };
  });

  /* ---------- Desktop: magnetic CTA ---------- */
  mm.add('(min-width: 901px) and (prefers-reduced-motion: no-preference) and (hover: hover)', () => {
    const cta = q('.ab-cta');
    const mx = gsap.quickTo(cta, 'x', { duration: .5, ease: 'power3.out' });
    const my = gsap.quickTo(cta, 'y', { duration: .5, ease: 'power3.out' });
    const move = e => { const r = cta.getBoundingClientRect(); mx((e.clientX - (r.left + r.width / 2)) * .22); my((e.clientY - (r.top + r.height / 2)) * .35); };
    const leave = () => { mx(0); my(0); };
    cta.addEventListener('pointermove', move);
    cta.addEventListener('pointerleave', leave);
    return () => { cta.removeEventListener('pointermove', move); cta.removeEventListener('pointerleave', leave); };
  });
})();
</script>