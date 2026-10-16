<?php
/**
 * Home Hero Section - 3D Scroll Edition (3-act story)
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/../includes/config.php';
?>
<!-- Home Hero Section -->
<section class="home-hero" data-hero>
  <div class="hero-sticky">
    <div class="hero-floor" aria-hidden="true"></div>
    <div class="hero-progress" aria-hidden="true"><i></i></div>

    <div class="hero-topline">
      <span>FULL STACK DEVELOPER</span>
      <span>THOUGHTFUL DESIGN. REAL-WORLD CODE.</span>
      <span>SELECTED PORTFOLIO / 2026</span>
    </div>

    <!-- Act 3: final frame (name sits BEHIND the portrait) -->
    <div class="hero-final">
      <div class="final-name" aria-hidden="true">
        <div class="final-group final-group--left" data-word="YUG"></div>
        <div class="final-group final-group--right" data-word="BHUVA."></div>
      </div>
      <p class="final-copy">Full stack developer in Ahmedabad.<br>Django, PHP &amp; motion that feels alive.</p>
      <a class="final-cta text-cta" href="<?= url('work.php') ?>">SEE THE WORK <span>↘</span></a>
    </div>

    <div class="hero-layout">
      <div class="hero-type">
        <h1 aria-label="Digital work. Human touch.">
          <span class="hero-line" data-dir="-1" aria-hidden="true">DIGITAL</span>
          <span class="hero-line outline-type" data-dir="1" aria-hidden="true">WORK.</span>
          <span class="hero-line red-type" data-dir="-1" aria-hidden="true">HUMAN</span>
          <span class="hero-line" data-dir="1" aria-hidden="true">TOUCH<span class="red-type">.</span></span>
        </h1>
        <div class="hero-side-note">
          <span>01 / THE INTRODUCTION</span>
          <p>I’m Yug. I turn ideas into<br>websites, applications,<br>and experiences with character.</p>
        </div>
      </div>

      <div class="hero-portrait-area">
        <div class="portrait-stage" data-stage>
          <div class="hero-orbit" data-orbit aria-hidden="true"></div>

          <div class="portrait-interactive hero-portrait" data-portrait>
            <img class="portrait-base" src="<?= url('assets/portrait.jpeg') ?>" alt="Yug Bhuva" width="960" height="1280">
            <img class="portrait-color" src="<?= url('assets/portrait.jpeg') ?>" alt="" aria-hidden="true" width="960" height="1280">
            <div class="portrait-shutters" aria-hidden="true">
              <span></span><span></span><span></span><span></span><span></span>
            </div>
            <span class="portrait-corner top-left">＋</span>
            <span class="portrait-corner bottom-right">＋</span>
            <span class="portrait-caption">YUG BHUVA / AHMEDABAD</span>
            <span class="portrait-hint">MOVE TO REVEAL</span>
          </div>

          <span class="float-chip chip-a" data-z="110">&lt;/&gt; DJANGO / PHP</span>
          <span class="float-chip chip-b" data-z="-70">UI + MOTION</span>
        </div>

        <div class="hero-image-label">
          <span>THE PERSON BEHIND THE PIXELS</span>
          <span>↙</span>
        </div>

        <div class="hero-current">
          <span>CURRENTLY AT</span>
          <a href="https://socialamplifiers.com/" target="_blank" rel="noopener">SOCIAL AMPLIFIERS ↗</a>
          <span>FULL STACK DEVELOPMENT</span>
        </div>
      </div>
    </div>

    <div class="hero-bottom">
      <a class="text-cta" href="<?= url('work.php') ?>">EXPLORE THE WORK <span>↘</span></a>
      <span>CODE WITH INTENTION.<br>CREATE WITH CURIOSITY.</span>
      <a href="#perspective" class="scroll-cue">KEEP EXPLORING <i>↓</i></a>
    </div>
  </div>
</section>

<style>
.home-hero { position: relative; height: 460vh; /* longer runway: 3 acts + a hold */ }

.hero-sticky {
  position: sticky; top: 0; height: 100vh; min-height: 600px; overflow: hidden;
  display: flex; flex-direction: column; padding: 20px var(--pad) 28px;
}

.hero-floor {
  position: absolute; left: -20%; right: -20%; bottom: -8%; height: 60%; z-index: 0; pointer-events: none;
  background-image: linear-gradient(var(--line) 1px, transparent 1px), linear-gradient(90deg, var(--line) 1px, transparent 1px);
  background-size: 70px 70px;
  transform: perspective(520px) rotateX(68deg); transform-origin: bottom;
  -webkit-mask-image: linear-gradient(to top, #000 15%, transparent 90%);
  mask-image: linear-gradient(to top, #000 15%, transparent 90%);
  opacity: .8;
}

.hero-progress { position: absolute; left: var(--pad); right: var(--pad); bottom: 0; height: 2px; background: var(--line); z-index: 5; }
.hero-progress i { display: block; height: 100%; width: 100%; background: var(--red); transform: scaleX(0); transform-origin: left; }

.hero-topline { position: relative; z-index: 2; display: flex; justify-content: space-between; font-size: 9px; letter-spacing: .045em; font-weight: 600; }

.hero-layout {
  position: relative; z-index: 2; flex: 1; display: grid; grid-template-columns: 1.23fr 1fr;
  gap: 7.6vw; padding-top: 3vh; align-content: center;
}

.hero-type { position: relative; perspective: 900px; perspective-origin: 50% 40%; }
.hero-type h1 { position: relative; z-index: 2; transform-style: preserve-3d; }
.hero-line {
  display: block; font-size: clamp(80px, min(10.7vw, 15vh), 184px); line-height: 1.02; white-space: nowrap;
  transform-style: preserve-3d; will-change: transform, opacity;
}
.hero-line .ch { display: inline-block; transform-style: preserve-3d; will-change: transform; }

.hero-side-note { position: absolute; right: -1vw; bottom: 5px; font-size: 11px; max-width: 175px; }
.hero-side-note > span { font-size: 8px; color: var(--muted); display: block; margin-bottom: 14px; }

.hero-portrait-area { position: relative; padding-top: 10px; perspective: 1300px; }
.portrait-stage { position: relative; transform-style: preserve-3d; will-change: transform; }

.hero-orbit { position: absolute; left: 50%; top: 50%; width: 0; height: 0; transform-style: preserve-3d; pointer-events: none; z-index: 3; --R: min(26vw, 360px); }
.hero-orbit span {
  position: absolute; left: 0; top: 0; font-size: 10px; font-weight: 700; letter-spacing: .3em; white-space: nowrap;
  color: var(--red); backface-visibility: visible;
}

.portrait-interactive {
  position: relative; overflow: hidden; background: #e3e2dc;
  --mx: 50%; --my: 50%; --reveal: 0px; --scr: 0px;
  box-shadow: 0 40px 80px -30px rgba(0,0,0,.45); transform: translateZ(0);
}
.hero-portrait { aspect-ratio: 4 / 4.5; max-height: 52vh; width: 100%; }
.portrait-base { filter: grayscale(1); object-position: center 38%; }
.portrait-color {
  position: absolute; inset: 0; object-position: center 38%;
  /* hover reveal + scroll reveal add up: by the end the whole portrait is in colour */
  clip-path: circle(calc(var(--reveal) + var(--scr)) at var(--mx) var(--my));
  transition: clip-path .25s ease-out; will-change: clip-path;
}
.portrait-interactive:hover { --reveal: 135px; }

.portrait-shutters { position: absolute; inset: 0; display: flex; pointer-events: none; }
.portrait-shutters span { background: var(--paper); width: 20%; transform: scaleY(0); transform-origin: bottom; }

.portrait-corner { position: absolute; line-height: 1; font-size: 25px; color: white; }
.top-left { top: 15px; left: 15px; }
.bottom-right { bottom: 15px; right: 15px; }
.portrait-caption { position: absolute; bottom: 17px; left: 18px; font-size: 8px; font-weight: 600; letter-spacing: .08em; color: white; text-shadow: 0 1px 6px #000; }
.portrait-hint { position: absolute; top: 20px; right: 17px; font-size: 8px; letter-spacing: .07em; color: white; text-shadow: 0 1px 6px #000; }

.float-chip {
  position: absolute; z-index: 4; font-size: 8px; font-weight: 700; letter-spacing: .12em; padding: 9px 12px;
  background: var(--paper); border: 1px solid var(--line); box-shadow: 0 18px 40px -14px rgba(0,0,0,.35); will-change: transform;
}
.chip-a { left: -9%; top: 16%; transform: translateZ(110px); }
.chip-b { right: -6%; bottom: 14%; transform: translateZ(-70px); }

.hero-image-label { display: flex; justify-content: space-between; align-items: center; font-size: 8px; border-bottom: 1px solid var(--line); padding: 10px 0; }
.hero-image-label > span:last-child { font-size: 25px; }

.hero-current { display: grid; grid-template-columns: 1fr; gap: 3px; margin-top: 14px; font-size: 8px; }
.hero-current > a { font-weight: 800; font-size: 12px; line-height: 1.8; }
.hero-current > a:hover { color: var(--red); }
.hero-current > span { color: var(--muted); }

.hero-bottom { position: relative; z-index: 2; display: flex; justify-content: space-between; align-items: center; margin-top: 20px; font-size: 9px; }
.hero-bottom .text-cta { padding: 6px 0; width: 31%; }
.hero-bottom > span { margin-left: auto; margin-right: 11vw; }

.scroll-cue { display: flex; align-items: center; gap: 35px; }
.scroll-cue i { font-size: 25px; font-style: normal; animation: nudge 1.5s ease-in-out infinite; }
@keyframes nudge { 50% { transform: translateY(5px); } }

/* ---------- Act 3: final frame ---------- */
.hero-final { position: absolute; inset: 0; pointer-events: none; z-index: 1; }
.final-name {
  position: absolute; left: 0; right: 0; top: 48%; transform: translateY(-50%);
  display: flex; justify-content: space-between; align-items: center;
  padding: 0 var(--pad); pointer-events: none;
  font-family: var(--display);
  font-size: clamp(80px, 16vw, 290px);
  line-height: .9;
  letter-spacing: -.045em;
  perspective: 900px;
  overflow: hidden;
}
.final-group {
  display: flex;
  align-items: baseline;
  white-space: nowrap;
  overflow: hidden;
  padding-bottom: .08em;
}
.final-group--left { justify-content: flex-start; }
.final-group--right { justify-content: flex-end; }
.final-name .fch {
  display: inline-block;
  transform-style: preserve-3d;
  transform-origin: 50% 100%;
  color: var(--ink, #141414);
  -webkit-text-stroke: 0;
  will-change: transform, opacity;
  opacity: 0;
  transform: translateY(120%) rotateX(-85deg);
}
.final-name .fch.dot { color: var(--red); }
.final-copy {
  position: absolute; left: var(--pad); bottom: 76px; z-index: 6; margin: 0;
  max-width: 260px; font-size: 11px; line-height: 1.7; opacity: 0;
  transform: translateY(16px); transition: opacity .6s ease, transform .6s ease;
}
.final-cta {
  position: absolute; right: var(--pad); bottom: 72px; z-index: 6;
  font-size: 10px; opacity: 0; pointer-events: none;
  transform: translateY(16px); transition: opacity .6s ease, transform .6s ease;
}
.final-copy.is-shown, .final-cta.is-shown { opacity: 1; transform: translateY(0); }
.final-cta.is-shown { pointer-events: auto; }

@media (max-width: 1100px) {
  .hero-side-note { position: static; margin-top: 25px; display: flex; max-width: none; gap: 30px; }
  .hero-side-note p { font-size: 10px; }
  .hero-side-note > span { max-width: 100px; }
  .hero-line { font-size: min(11.6vw, 14vh); }
  .hero-layout { gap: 5vw; }
  .hero-bottom > span { margin-right: 6vw; }
  .final-name { font-size: clamp(65px, 15vw, 190px); }
}

@media (max-width: 760px) {
  .home-hero { height: 400vh; }
  .hero-sticky { padding-top: 18px; }
  .hero-topline { font-size: 7px; }
  .hero-topline > span:nth-child(2) { display: none; }
  .hero-layout { grid-template-columns: 1.05fr 1fr; gap: 3vw; padding-top: 2vh; align-items: center; }
  .hero-line { font-size: 12vw; }
  .hero-portrait-area { padding-top: 4px; }
  .hero-portrait { aspect-ratio: 3 / 4; }
  .hero-orbit { --R: 30vw; }
  .hero-orbit span { font-size: 6px; }
  .float-chip { display: none; }
  .portrait-caption { font-size: 5px; left: 10px; bottom: 10px; }
  .portrait-hint { display: none; }
  .portrait-corner { font-size: 15px; }
  .top-left { left: 8px; top: 8px; }
  .bottom-right { right: 8px; bottom: 8px; }
  .hero-image-label { font-size: 6px; gap: 10px; line-height: 1.4; padding: 6px 0; }
  .hero-image-label > span:last-child { font-size: 18px; }
  .hero-current { margin-top: 10px; font-size: 6px; }
  .hero-current > a { font-size: 8px; }
  .hero-side-note { display: block; margin-top: 25px; }
  .hero-side-note > span { font-size: 6px; max-width: none; margin-bottom: 8px; }
  .hero-side-note p { font-size: 9px; line-height: 1.6; }
  .hero-bottom { margin-top: 20px; gap: 20px; }
  .hero-bottom > span { display: none; }
  .hero-bottom .text-cta { width: auto; gap: 25px; font-size: 8px; }
  .scroll-cue { font-size: 7px; gap: 15px; }
  .final-name { font-size: clamp(40px, 13vw, 84px); top: 50%; }
  .final-copy { font-size: 9px; bottom: 64px; max-width: 150px; }
  .final-cta { font-size: 8px; bottom: 60px; }
}

@media (prefers-reduced-motion: reduce) {
  .home-hero { height: auto; }
  .hero-sticky { position: relative; height: auto; }
  .hero-final { display: none; }
}
</style>

<script>
(() => {
  const hero = document.querySelector('[data-hero]');
  if (!hero) return;
  const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
  const clamp = (v, a, b) => Math.min(b, Math.max(a, v));
  const seg = (v, a, b) => clamp((v - a) / (b - a), 0, 1);
  const ease = t => t * t * (3 - 2 * t);

  /* ---- Split headline into 3D letters ---- */
  hero.querySelectorAll('.hero-line').forEach(line => {
    const out = [];
    line.childNodes.forEach(n => {
      if (n.nodeType === 3) {
        [...n.textContent].forEach(c => { const s = document.createElement('span'); s.className = 'ch'; s.textContent = c; out.push(s); });
      } else {
        const w = document.createElement('span'); w.className = 'ch'; w.appendChild(n.cloneNode(true)); out.push(w);
      }
    });
    line.textContent = '';
    out.forEach(o => line.appendChild(o));
  });

  /* ---- Final name letters (hidden until act 3) ---- */
  const finalGroups = hero.querySelectorAll('.final-group[data-word]');
  finalGroups.forEach(grp => {
    [...grp.dataset.word].forEach(c => {
      const s = document.createElement('span');
      s.className = 'fch' + (c === '.' ? ' dot' : '');
      s.textContent = c === ' ' ? '\u00A0' : c;
      grp.appendChild(s);
    });
  });

  /* ---- Orbiting ring ---- */
  const orbit = hero.querySelector('[data-orbit]');
  const words = ['CODE', 'DESIGN', 'MOTION', 'DJANGO', 'PHP', 'GSAP', 'THINK', 'BUILD', 'SHIP', 'CRAFT', 'DETAIL', 'PLAY'];
  words.forEach((w, i) => {
    const s = document.createElement('span');
    s.textContent = w + ' •';
    s.style.transform = `translate(-50%,-50%) rotateY(${i * (360 / words.length)}deg) translateZ(var(--R))`;
    orbit.appendChild(s);
  });

  /* ---- Intro animation ---- */
  if (window.gsap && !document.body.classList.contains('motion-paused') && !reduce) {
    gsap.from('.hero-line .ch', { rotateX: -95, y: 90, z: -200, opacity: 0, transformOrigin: '50% 100% -40px', duration: 1.2, stagger: .045, ease: 'power4.out' });
    gsap.fromTo('.portrait-shutters span', { scaleY: 1 }, { scaleY: 0, duration: 1.25, stagger: .09, ease: 'power4.inOut', delay: .1 });
    gsap.from('.float-chip', { opacity: 0, scale: .6, duration: .9, stagger: .15, delay: 1, ease: 'back.out(2)' });
    gsap.from('.hero-topline, .hero-bottom, .hero-current', { opacity: 0, y: 12, duration: .8, stagger: .1, delay: .6, clearProps: 'all' });
  }

  /* ---- Portrait colour reveal (hover) ---- */
  hero.querySelectorAll('[data-portrait]').forEach(el => {
    el.addEventListener('pointermove', e => {
      if (document.body.classList.contains('motion-paused') || e.pointerType === 'touch') return;
      const r = el.getBoundingClientRect();
      el.style.setProperty('--mx', `${e.clientX - r.left}px`);
      el.style.setProperty('--my', `${e.clientY - r.top}px`);
    });
  });

  if (reduce) return;

  /* ============================================================
     Scroll + pointer engine: 3 acts
       Act 1  0.00-0.45  headline breaks apart in 3D, portrait leans in
       Act 2  0.40-0.80  portrait glides to centre, turns to camera, goes full colour, ring becomes a halo
       Act 3  0.62-0.92  YUG BHUVA rises behind the portrait, copy + CTA arrive. Then a hold.
     ============================================================ */
  const lines = [...hero.querySelectorAll('.hero-line')];
  const letters = [...hero.querySelectorAll('.hero-line .ch')];
  const fch = [...hero.querySelectorAll('.fch')];
  const stage = hero.querySelector('[data-stage]');
  const area = hero.querySelector('.hero-portrait-area');
  const sticky = hero.querySelector('.hero-sticky');
  const portrait = hero.querySelector('[data-portrait]');
  const chips = [...hero.querySelectorAll('.float-chip')];
  const floor = hero.querySelector('.hero-floor');
  const bar = hero.querySelector('.hero-progress i');
  const fades = [...hero.querySelectorAll('.hero-topline, .hero-bottom, .hero-current, .hero-side-note')];
  const fcopy = hero.querySelector('.final-copy');
  const fcta = hero.querySelector('.final-cta');

  let target = 0, cur = 0, px = 0, py = 0, tx = 0, ty = 0, visible = true, dx = 0, dy = 0;
  let nameShown = false, nameTween = null;

  const showFinalName = () => {
    if (nameShown) return;
    nameShown = true;
    fcopy?.classList.add('is-shown');
    fcta?.classList.add('is-shown');

    if (window.gsap && !document.body.classList.contains('motion-paused')) {
      if (nameTween) nameTween.kill();
      nameTween = gsap.fromTo(fch,
        { yPercent: 120, rotateX: -85, opacity: 0, transformPerspective: 700, transformOrigin: '50% 100%' },
        { yPercent: 0, rotateX: 0, opacity: 1, duration: 1.15, stagger: 0.05, ease: 'power4.out', overwrite: true }
      );
    } else {
      fch.forEach(c => { c.style.opacity = '1'; c.style.transform = 'none'; });
    }
  };

  const hideFinalName = () => {
    if (!nameShown) return;
    nameShown = false;
    fcopy?.classList.remove('is-shown');
    fcta?.classList.remove('is-shown');

    if (window.gsap && !document.body.classList.contains('motion-paused')) {
      if (nameTween) nameTween.kill();
      nameTween = gsap.to(fch, {
        yPercent: 120, rotateX: -85, opacity: 0, duration: 0.45, stagger: { each: 0.025, from: 'end' }, ease: 'power3.in', overwrite: true
      });
    } else {
      fch.forEach(c => { c.style.opacity = '0'; c.style.transform = 'translateY(120%) rotateX(-85deg)'; });
    }
  };

  /* how far the portrait must travel to sit in the middle of the screen */
  const measure = () => {
    const s = sticky.getBoundingClientRect(), a = area.getBoundingClientRect();
    dx = (s.left + s.width / 2) - (a.left + a.width / 2);
    dy = (s.top + s.height * 0.47) - (a.top + 10 + stage.offsetHeight / 2);
  };
  const readScroll = () => {
    const r = hero.getBoundingClientRect();
    target = clamp(-r.top / (r.height - innerHeight), 0, 1);
  };
  addEventListener('scroll', readScroll, { passive: true });
  addEventListener('resize', () => { measure(); readScroll(); });
  addEventListener('load', measure);
  readScroll(); measure();

  hero.addEventListener('pointermove', e => {
    if (e.pointerType === 'touch') return;
    px = (e.clientX / innerWidth - .5) * 2;
    py = (e.clientY / innerHeight - .5) * 2;
  });
  hero.addEventListener('pointerleave', () => { px = 0; py = 0; });
  new IntersectionObserver(([e]) => { visible = e.isIntersecting; }).observe(hero);

  const tick = time => {
    requestAnimationFrame(tick);
    if (!visible) return;
    cur += (target - cur) * .08;
    tx += (px - tx) * .06;
    ty += (py - ty) * .06;

    const p = cur, W = innerWidth;
    const e1 = ease(seg(p, .04, .45)), e2 = ease(seg(p, .40, .80));

    /* Act 1: each line flies off in 3D, alternating directions */
    lines.forEach((l, i) => {
      const d = +l.dataset.dir, lp = seg(p, .05 + i * .05, .36 + i * .05);
      l.style.transform = `translate3d(${d * lp * W * .22 + tx * -8 * (i + 1)}px,${lp * -30}px,${-lp * 420}px) rotateX(${lp * 55}deg) rotateY(${d * lp * 25}deg)`;
      l.style.opacity = 1 - clamp((lp - .45) * 1.9, 0, 1);
    });
    if (e1 < 1) letters.forEach((c, i) => {
      c.style.transform = `translateZ(${Math.sin(i * .6 + p * 7) * 40 * p}px) rotateZ(${Math.sin(i + p * 5) * 6 * p}deg)`;
    });

    /* Acts 1+2: portrait leans in, then glides to the centre and faces the camera */
    stage.style.transform =
      `translate3d(${dx * e2}px,${-70 * e1 * (1 - e2) + dy * e2}px,${220 * e1 * (1 - .7 * e2)}px) ` +
      `rotateX(${(-ty * 7 + 14 * e1) * (1 - e2) - ty * 3}deg) rotateY(${(tx * 10 - 38 * e1) * (1 - e2) + tx * 5}deg) ` +
      `scale(${1 + .12 * e1 + .14 * e2})`;
    portrait.style.setProperty('--scr', (e2 * 900) + 'px');          // scroll-driven colour reveal

    /* ring: spins, then lies flat like a halo around the portrait */
    orbit.style.transform = `rotateX(${-14 - 58 * e2}deg) rotateZ(${-6 + 20 * e1}deg) rotateY(${time * .012 + p * 900}deg) scale(${1 + .3 * e2})`;

    chips.forEach((c, i) => {
      const z = +c.dataset.z, s = i ? 1 : -1;
      c.style.transform = `translate3d(${tx * z * .15 + s * e1 * 50}px,${ty * z * .12 - e1 * 90 * (1 + i)}px,${z + e1 * z * 1.4}px) rotateY(${s * e1 * 40}deg)`;
      c.style.opacity = 1 - e2;
    });

    floor.style.backgroundPosition = `${tx * -30}px ${p * 900 + time * .02}px`;
    floor.style.opacity = .8 - e1 * .5;

    /* Act 3: When hero portrait ends animation, reveal text in 3D footer style */
    if (e2 >= 0.85 || p >= 0.68) {
      showFinalName();
    } else if (p < 0.48) {
      hideFinalName();
    }

    fades.forEach(f => { f.style.opacity = 1 - clamp((p - .3) * 3.5, 0, 1); });
    bar.style.transform = `scaleX(${p})`;
  };
  requestAnimationFrame(tick);
})();
</script>