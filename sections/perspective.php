<?php
/**
 * Perspective Section
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/../includes/config.php';
?>
<!-- Perspective Section -->
<section class="perspective section" id="perspective">
  <div class="section-label">
    <span>THE WAY I SEE IT</span>
    <span>01 — PERSPECTIVE</span>
  </div>

  <div class="perspective-grid">
    <span class="pl-br pl-br--l" aria-hidden="true"></span>
    <h2 class="word-reveal pl-text" aria-label="The best digital work has a clear purpose. And a little personality.">
      <span class="pl-line">The best digital work</span>
      <span class="pl-line">has a <span class="pl-ul">clear purpose.</span></span>
      <span class="pl-line">And a little <em class="pl-pers">personality.<svg class="pl-squig" viewBox="0 0 300 14" preserveAspectRatio="none" aria-hidden="true"><path pathLength="1" d="M2 8 Q 20 0 38 8 T 74 8 T 110 8 T 146 8 T 182 8 T 218 8 T 254 8 T 298 8"/></svg></em></span>
    </h2>
    <span class="pl-br pl-br--r" aria-hidden="true"></span>
  </div>

  <div class="perspective-bottom">
    <span>BASED IN AHMEDABAD.<br>CURIOUS ABOUT EVERYWHERE.</span>
    <p>I connect frontend expression with backend thinking.<br>Making things that look considered and work beautifully.</p>
    <a class="underlined-link" href="<?= url('about.php') ?>">MEET THE PERSON <span>↗</span></a>
  </div>
</section>

<style>
.perspective { padding-top: 100px; padding-bottom: 105px; }
.perspective.is-pin { min-height: 100svh; display: flex; flex-direction: column; justify-content: center; padding-top: 40px; padding-bottom: 40px; }

/* viewfinder brackets (static: they simply frame the whole statement) */
.perspective-grid { position: relative; display: flex; align-items: stretch; justify-content: space-between; gap: 35px; }
.pl-br { flex: none; width: clamp(14px, 2vw, 30px); border: clamp(2px, .3vw, 4px) solid var(--red); user-select: none; will-change: transform, height; }
.pl-br--l { border-right: 0; }
.pl-br--r { border-left: 0; }
.perspective.is-fx .pl-br { position: absolute; top: 0; }
.perspective.is-fx .pl-br--l { left: 0; }
.perspective.is-fx .pl-br--r { right: 0; }
.perspective.is-fx .perspective-grid > h2 { flex: 1; padding: 0 clamp(36px, 6vw, 90px); }

.perspective-grid h2 { text-align: center; }
.word-reveal { font-size: clamp(30px, 4.5vw, 74px); font-weight: 500; line-height: 1.2; letter-spacing: -.055em; }
.word-reveal em { font-family: Georgia, serif; font-weight: 400; font-style: italic; }
.pl-line { display: block; }
.word-reveal .word { display: inline-block; will-change: transform, opacity, filter; }

/* "clear purpose." gets a ruler-straight underline */
.pl-ul { position: relative; display: inline-block; }
.pl-ul::after { content: ""; position: absolute; left: 0; right: 0; bottom: .04em; height: 2px; background: currentColor; transform: scaleX(var(--u, 1)); transform-origin: left; }

/* "personality." is the loose, expressive one */
.pl-pers { position: relative; display: inline-block; }
.pl-pers .c { display: inline-block; will-change: transform, opacity, filter; }
.pl-pers .ci { display: inline-block; }
.pl-squig { position: absolute; left: 0; bottom: -.16em; width: 100%; height: .26em; overflow: visible; pointer-events: none; }
.pl-squig path { fill: none; stroke: var(--red); stroke-width: 3; stroke-linecap: round; stroke-linejoin: round; vector-effect: non-scaling-stroke; }

.perspective-bottom { margin-top: 55px; display: flex; justify-content: space-between; gap: 30px; align-items: flex-end; font-size: 11px; }
.perspective-bottom > span { font-size: 9px; letter-spacing: .05em; font-weight: 700; }
.perspective-bottom > p { max-width: 380px; font-size: 13px; }

@media (max-width: 760px) {
  .perspective-grid { gap: 12px; }
  .perspective.is-fx .perspective-grid > h2 { padding: 0 26px; }
  .word-reveal { font-size: 6vw; letter-spacing: -.06em; }
  .perspective-bottom { margin-top: 30px; display: grid; grid-template-columns: 1fr 1fr; gap: 20px; }
  .perspective-bottom > span { font-size: 7px; }
  .perspective-bottom > p { font-size: 10px; }
  .perspective-bottom .underlined-link { grid-column: 2; font-size: 8px; gap: 15px; justify-self: start; }
}
</style>

<script>
(() => {
  const root = document.querySelector('.perspective');
  if (!root) return;

  /* ---- split: words everywhere, letters (double-wrapped) inside "personality." ---- */
  const h2 = root.querySelector('.pl-text');
  const walk = document.createTreeWalker(h2, NodeFilter.SHOW_TEXT);
  const nodes = []; while (walk.nextNode()) nodes.push(walk.currentNode);
  nodes.forEach(node => {
    const inPers = !!node.parentElement.closest('.pl-pers');
    const frag = document.createDocumentFragment();
    if (inPers) {
      [...node.textContent].forEach(ch => {
        const c = document.createElement('span'); c.className = 'c';
        const i = document.createElement('span'); i.className = 'ci'; i.textContent = ch;
        c.appendChild(i); frag.append(c);
      });
    } else {
      node.textContent.split(/(\s+)/).forEach(w => {
        if (/\S/.test(w)) { const s = document.createElement('span'); s.className = 'word'; s.textContent = w; frag.append(s); }
        else frag.append(document.createTextNode(w));
      });
    }
    node.replaceWith(frag);
  });

  if (!window.gsap || !window.ScrollTrigger || document.body.classList.contains('motion-paused')) return;
  gsap.registerPlugin(ScrollTrigger);

  const grid = root.querySelector('.perspective-grid');
  const bl = root.querySelector('.pl-br--l'), br = root.querySelector('.pl-br--r'), brs = [bl, br];
  const lines = [...root.querySelectorAll('.pl-line')];
  const words = lines.map(l => [...l.querySelectorAll('.word')].filter(w => !w.closest('.pl-pers')));
  const chars = [...root.querySelectorAll('.pl-pers .c')], inner = [...root.querySelectorAll('.pl-pers .ci')];
  const squig = root.querySelector('.pl-squig path');
  const red = getComputedStyle(root).getPropertyValue('--red').trim() || '#e5322d';

  /* where a bracket must sit to frame an element */
  const frame = el => { const g = grid.getBoundingClientRect(), r = el.getBoundingClientRect(); return { y: r.top - g.top - 10, h: r.height + 20 }; };
  const to = (el, dur, ease = 'power3.inOut') => ({ y: () => frame(el).y, height: () => frame(el).h, duration: dur, ease });

  const mm = gsap.matchMedia();

  mm.add('(prefers-reduced-motion: no-preference)', () => {
    const pin = window.matchMedia('(min-width: 901px)').matches;
    root.classList.add('is-fx'); root.classList.toggle('is-pin', pin);

    gsap.set([...words.flat(), ...chars], { opacity: .12, filter: 'blur(8px)' });
    gsap.set('.pl-ul', { '--u': 0 });
    gsap.set(squig, { strokeDasharray: 1, strokeDashoffset: 1 });
    gsap.set(brs, { y: () => frame(h2).y, height: () => frame(h2).h });

    const tl = gsap.timeline(pin
      ? { scrollTrigger: { trigger: root, start: 'top top', end: '+=300%', pin: true, scrub: .6, anticipatePin: 1, invalidateOnRefresh: true } }
      : { scrollTrigger: { trigger: grid, start: 'top 72%', once: true, invalidateOnRefresh: true } });
    if (!pin) tl.timeScale(1.8);

    const focus = { opacity: 1, filter: 'blur(0px)', duration: .6, ease: 'power2.out' };

    tl.from(brs, { opacity: 0, x: i => (i ? 40 : -40), duration: .8, ease: 'power3.out' }, 0)

      /* 1 · lens locks onto line one */
      .to(brs, to(lines[0], .8), .6)
      .to(words[0], { ...focus, stagger: .12 }, 1)

      /* 2 · line two: precise, with a ruler-straight underline */
      .to(brs, to(lines[1], .8), 3)
      .to(words[1], { ...focus, stagger: .12 }, 3.4)
      .to('.pl-ul', { '--u': 1, duration: .8, ease: 'power3.inOut' }, 4.3)

      /* 3 · line three: the focus gets loose, playful */
      .to(brs, to(lines[2], .9, 'back.out(1.8)'), 6)
      .to(words[2], { ...focus, stagger: .12 }, 6.4)
      .to(chars, { ...focus, stagger: .05 }, 7)
      .from(chars, { y: 34, duration: .9, stagger: .05, ease: 'elastic.out(1, .45)' }, 7)
      .to(chars, { color: red, duration: .4, stagger: .04, ease: 'none' }, 7.4)
      .to(squig, { strokeDashoffset: 0, duration: .9, ease: 'power2.inOut' }, 7.7)

      /* 4 · step back: brackets spring around the whole thought */
      .to(brs, to(h2, 1.4, 'elastic.out(1, .5)'), 9)
      .from('.perspective-bottom > *', { y: 24, opacity: 0, duration: .8, stagger: .12, ease: 'power3.out' }, 9.6)
      .to({}, { duration: 2.2 });                                  // hold the finished frame

    /* "personality." never sits still */
    const idle = chars.map((c, i) => gsap.to(c, { rotation: gsap.utils.random(-5, 5), duration: gsap.utils.random(.9, 1.7), ease: 'sine.inOut', yoyo: true, repeat: -1, delay: i * .05 }));

    return () => { root.classList.remove('is-fx', 'is-pin'); idle.forEach(t => t.kill()); };
  });

  /* ---- letters of "personality." bulge toward the cursor ---- */
  mm.add('(hover: hover) and (pointer: fine) and (prefers-reduced-motion: no-preference)', () => {
    let seen = false;
    new IntersectionObserver(([e]) => { seen = e.isIntersecting; }).observe(root);
    const onMove = e => {
      if (!seen || document.body.classList.contains('motion-paused')) return;
      inner.forEach(el => {
        const r = el.getBoundingClientRect();
        const dx = e.clientX - (r.left + r.width / 2), dy = e.clientY - (r.top + r.height / 2);
        const f = Math.pow(Math.max(0, 1 - Math.hypot(dx, dy) / 170), 2);
        gsap.to(el, { y: -f * 26, scale: 1 + f * .35, rotation: dx / 170 * f * 18, duration: .45, ease: 'power3.out', overwrite: 'auto' });
      });
    };
    const settle = () => gsap.to(inner, { y: 0, scale: 1, rotation: 0, duration: 1.2, ease: 'elastic.out(1, .4)', stagger: .02, overwrite: 'auto' });
    root.addEventListener('pointermove', onMove);
    root.addEventListener('pointerleave', settle);
    return () => { root.removeEventListener('pointermove', onMove); root.removeEventListener('pointerleave', settle); };
  });
})();
</script>