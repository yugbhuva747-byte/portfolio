<?php
/**
 * Site Footer & Motion Toggle Section
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/../includes/config.php';
?>
<!-- Site Footer -->
<footer class="site-footer">
  <div class="footer-marquee" aria-hidden="true"><div class="fm-track"></div></div>

  <div class="footer-top">
    <p>THE NEXT CHAPTER<br>STARTS WITH A CONVERSATION.</p>
    <a href="mailto:yugbhuva747@gmail.com">yugbhuva747@gmail.com ↗</a>
    <a class="footer-contact-button" href="<?= url('contact.php') ?>" aria-label="Go to contact page"><span>↗</span></a>
  </div>

  <a href="<?= url('contact.php') ?>" class="footer-masthead" data-cursor="LET'S TALK">
    <span>LET'S</span>
    <span class="footer-word">TALK<span class="footer-dot">.</span></span>
    <span class="footer-side">GOOD IDEAS<br>DESERVE TO EXIST.</span>
  </a>

  <div class="footer-bottom">
    <a class="footer-name" href="<?= url('index.php') ?>">YUG BHUVA®</a>

    <nav aria-label="Footer navigation">
      <a href="<?= url('work.php') ?>">WORK</a>
      <a href="<?= url('about.php') ?>">ABOUT</a>
      <a href="<?= url('contact.php') ?>">CONTACT</a>
    </nav>

    <div class="footer-social">
      <a href="https://github.com/yugbhuva747-byte" target="_blank" rel="noopener noreferrer">GITHUB ↗</a>
      <a href="https://www.linkedin.com/in/yug-bhuva-80682a366/" target="_blank" rel="noopener noreferrer">LINKEDIN ↗</a>
    </div>

    <button class="footer-totop" type="button">BACK TO TOP ↑</button>

    <span>© <span class="current-year"><?= date('Y') ?></span> · <span class="footer-time">AHMEDABAD</span></span>
  </div>
</footer>

<!-- Floating Motion Toggle Button -->
<button class="motion-control" aria-pressed="false" type="button">
  <span class="motion-icon">Ⅱ</span>
  <span class="motion-label">PAUSE MOTION</span>
</button>

<style>
.site-footer {
  padding: 55px var(--pad) 30px;
  background: var(--red);
  color: var(--ink);
  position: relative;
  z-index: 20;
  overflow: hidden;
}
.site-footer > * { position: relative; z-index: 1; }

/* cursor spotlight */
.site-footer::before {
  content: ""; position: absolute; inset: 0; z-index: 0; pointer-events: none;
  background: radial-gradient(520px circle at var(--fx, 70%) var(--fy, 30%), rgba(255, 255, 255, .22), transparent 60%);
  opacity: var(--glow, 0); transition: opacity .5s ease;
}

/* scroll-speed marquee */
.footer-marquee {
  margin: -55px calc(var(--pad) * -1) 42px;
  padding: 14px 0;
  border-bottom: 1px solid rgba(32, 32, 30, .33);
  overflow: hidden;
}
.fm-track { display: flex; width: max-content; will-change: transform; }
.fm-track span {
  flex: none; padding-right: 2.2em; white-space: nowrap;
  font-size: clamp(12px, 1.4vw, 18px); font-weight: 800; letter-spacing: .12em;
}
.fm-track span i { font-style: normal; color: var(--paper); margin-left: 2.2em; }

.footer-top { display: flex; align-items: center; justify-content: space-between; gap: 30px; font-size: 11px; }
.footer-top > p { font-size: 10px; font-weight: 700; letter-spacing: .05em; }
.footer-top > a:nth-child(3) { margin-left: 0; }
.footer-top > a:nth-child(2) {
  border-bottom: 1px solid rgba(32, 32, 30, .33);
  padding-bottom: 5px; margin-left: auto; font-weight: 700; transition: color .25s ease;
}
.footer-top > a:nth-child(2):hover { color: var(--paper); }

/* contact button: ink floods in from where the cursor entered */
.footer-contact-button {
  position: relative; overflow: hidden;
  border: 1px solid var(--ink); border-radius: 50%;
  width: 70px; height: 70px; display: grid; place-items: center; font-size: 35px;
  transition: color .35s ease; will-change: transform;
}
.footer-contact-button::before {
  content: ""; position: absolute; left: var(--x, 50%); top: var(--y, 50%);
  width: 320%; aspect-ratio: 1; border-radius: 50%; background: var(--ink);
  transform: translate(-50%, -50%) scale(0); transition: transform .6s cubic-bezier(.2, .7, .2, 1);
}
.footer-contact-button > span { position: relative; z-index: 1; display: block; transition: transform .5s cubic-bezier(.2, .7, .2, 1); }
.footer-contact-button:hover { color: var(--red); }
.footer-contact-button:hover::before { transform: translate(-50%, -50%) scale(1); }
.footer-contact-button:hover > span { transform: rotate(45deg); }

/* giant masthead */
.footer-masthead {
  display: flex; align-items: baseline; gap: 3vw;
  font: 400 clamp(80px, 19.5vw, 310px) / 1.35 var(--display);
  letter-spacing: -.045em; margin: 30px 0 10px; position: relative;
  transform-origin: 0 100%;
}
.footer-masthead .mc { display: inline-block; will-change: transform; }
.footer-word { color: var(--paper); transition: color .4s ease; }
.footer-masthead:hover .footer-word { color: var(--ink); }
.footer-dot { color: var(--ink); }
.footer-side {
  font: 700 9px / 1.6 var(--body); letter-spacing: 0;
  position: absolute; bottom: 18%; right: 0;
  transform: rotate(-90deg); transform-origin: right bottom; color: var(--ink);
}

.footer-bottom {
  border-top: 1px solid rgba(32, 32, 30, .33); padding-top: 23px;
  display: flex; justify-content: space-between; align-items: center; gap: 20px;
  font-size: 9px; font-weight: 700; letter-spacing: .05em;
}
.footer-name { font-weight: 800; font-size: 12px; }
.footer-bottom nav, .footer-social { display: flex; gap: 25px; }
.footer-bottom nav a:hover, .footer-social a:hover, .footer-totop:hover { color: var(--paper); }
.footer-totop { background: none; border: 0; padding: 0; font: inherit; letter-spacing: inherit; color: inherit; cursor: pointer; transition: color .25s ease; }
.footer-time { font-variant-numeric: tabular-nums; }

/* rolling link text (JS wraps link text into .roll) */
.roll { display: inline-flex; position: relative; overflow: hidden; vertical-align: top; }
.roll__b { position: absolute; left: 0; top: 0; display: inline-flex; }
.roll__a, .roll__b { white-space: pre; }
.rc { display: inline-block; transition: transform .55s cubic-bezier(.2, .7, .2, 1); transition-delay: calc(var(--i) * 16ms); }
.roll__b .rc { transform: translateY(115%); }
a:hover > .roll .roll__a .rc, button:hover > .roll .roll__a .rc { transform: translateY(-115%); }
a:hover > .roll .roll__b .rc, button:hover > .roll .roll__b .rc { transform: translateY(0); }

/* Motion Control Floating Pill */
.motion-control {
  position: fixed; bottom: 16px; right: 17px; background: var(--paper); padding: 8px 12px;
  border: 1px solid var(--line); z-index: 90; font-size: 8px; font-weight: 800; letter-spacing: .05em;
  display: flex; align-items: center; gap: 8px; border-radius: 30px; box-shadow: 0 4px 15px rgba(0, 0, 0, .07);
  transition: background .25s ease, color .25s ease;
}
.motion-control:hover { border-color: var(--ink); }
.motion-icon { font-size: 12px; line-height: 1; }
.motion-paused * { animation-play-state: paused !important; scroll-behavior: auto !important; }

@media (max-width: 1100px) { .footer-side { display: none; } }

@media (max-width: 760px) {
  .site-footer { padding: 35px var(--pad) 65px; }
  .footer-marquee { margin-top: -35px; margin-bottom: 28px; padding: 10px 0; }
  .footer-top { gap: 20px; flex-wrap: wrap; }
  .footer-top > p { font-size: 8px; }
  .footer-top > a:nth-child(2) { font-size: 9px; margin: 0; order: 3; width: 100%; border: 0; }
  .footer-contact-button { margin-left: auto; width: 50px; height: 50px; font-size: 27px; }
  .footer-masthead { font-size: 18vw; gap: 3vw; margin: 20px 0 15px; }
  .footer-bottom { font-size: 8px; flex-wrap: wrap; gap: 23px 15px; padding-top: 20px; }
  .footer-name { font-size: 10px; }
  .footer-bottom nav { gap: 15px; margin-left: auto; }
  .footer-social { gap: 20px; }
  .footer-bottom > span { margin-left: auto; }
  .motion-control { bottom: 12px; right: 12px; padding: 7px 9px; font-size: 7px; }
}
</style>

<script>
(() => {
  // Dynamic Year
  const yearEl = $('.current-year');
  if (yearEl) yearEl.textContent = new Date().getFullYear();

  // Motion Pause / Resume Toggle
  const reduced = matchMedia('(prefers-reduced-motion: reduce)');
  let paused = reduced.matches;
  try {
    paused = paused || sessionStorage.getItem('yb-motion') === 'off';
  } catch {}

  const motionBtn = $('.motion-control');

  function setMotion(isPaused) {
    paused = isPaused;
    document.body.classList.toggle('motion-paused', paused);
    motionBtn?.setAttribute('aria-pressed', String(paused));

    if (motionBtn) {
      const label = $('.motion-label', motionBtn);
      const icon = $('.motion-icon', motionBtn);
      if (label) label.textContent = paused ? 'ENABLE MOTION' : 'PAUSE MOTION';
      if (icon) icon.textContent = paused ? '▷' : 'Ⅱ';
    }

    if (window.gsap && window.ScrollTrigger) {
      if (paused) {
        gsap.globalTimeline.getChildren().forEach(a => {
          if (a.vars?.repeat === -1) a.pause();
          else a.progress(1);
        });
        ScrollTrigger.getAll().forEach(t => t.disable(false));
      } else {
        ScrollTrigger.getAll().forEach(t => t.enable());
      }
    }

    if (window.lenis) {
      if (paused) {
        window.lenis.stop();
      } else {
        window.lenis.start();
      }
    }

    try {
      sessionStorage.setItem('yb-motion', paused ? 'off' : 'on');
    } catch {}
  }

  setMotion(paused);
  motionBtn?.addEventListener('click', () => setMotion(!paused));
  reduced.addEventListener('change', e => {
    if (e.matches) setMotion(true);
  });
})();
</script>

<!-- Footer motion -->
<script>
(() => {
  const foot = document.querySelector('.site-footer');
  if (!foot) return;
  const q = s => foot.querySelector(s), qa = s => [...foot.querySelectorAll(s)];
  const clamp = (v, a, b) => Math.min(b, Math.max(a, v));
  const isPaused = () => document.body.classList.contains('motion-paused');

  /* ---- live Ahmedabad clock ---- */
  const clock = q('.footer-time');
  const setClock = () => { clock.textContent = 'AHMEDABAD ' + new Date().toLocaleTimeString('en-GB', { timeZone: 'Asia/Kolkata', hour12: false }) + ' IST'; };
  setClock(); setInterval(setClock, 1000);

  /* ---- back to top ---- */
  q('.footer-totop').addEventListener('click', () => {
    if (window.lenis) window.lenis.scrollTo(0, { duration: 1.6 });
    else window.scrollTo({ top: 0, behavior: isPaused() ? 'auto' : 'smooth' });
  });

  /* ---- contact button: flood starts where the cursor enters ---- */
  const cbtn = q('.footer-contact-button');
  cbtn.addEventListener('pointerenter', e => {
    const r = cbtn.getBoundingClientRect();
    cbtn.style.setProperty('--x', (e.clientX - r.left) + 'px');
    cbtn.style.setProperty('--y', (e.clientY - r.top) + 'px');
  });

  /* ---- rolling link text ---- */
  const roll = el => {
    const t = el.textContent.trim(); if (!t) return;
    el.setAttribute('aria-label', t);
    el.textContent = '';
    const wrap = document.createElement('span'); wrap.className = 'roll'; wrap.setAttribute('aria-hidden', 'true');
    ['roll__a', 'roll__b'].forEach(cls => {
      const layer = document.createElement('span'); layer.className = cls;
      [...t].forEach((c, i) => { const s = document.createElement('span'); s.className = 'rc'; s.style.setProperty('--i', i); s.textContent = c; layer.appendChild(s); });
      wrap.appendChild(layer);
    });
    el.appendChild(wrap);
  };
  qa('.footer-top > a:nth-child(2), .footer-bottom nav a, .footer-social a, .footer-totop').forEach(roll);

  if (!window.gsap || !window.ScrollTrigger || isPaused()) return;
  gsap.registerPlugin(ScrollTrigger);
  const mm = gsap.matchMedia();

  mm.add('(prefers-reduced-motion: no-preference)', () => {
    let seen = false;
    new IntersectionObserver(([e]) => { seen = e.isIntersecting; }).observe(foot);

    /* ---- marquee: speeds up and skews with scroll velocity ---- */
    const track = q('.fm-track');
    const item = '<span>LET\u2019S BUILD SOMETHING GOOD<i>\u2736</i></span>';
    track.innerHTML = '<div style="display:flex">' + item.repeat(6) + '</div><div style="display:flex">' + item.repeat(6) + '</div>';
    const loop = gsap.to(track, { xPercent: -50, duration: 38, ease: 'none', repeat: -1 });
    let dir = 1, ts = 1, sk = 0;
    const st = ScrollTrigger.create({ trigger: foot, start: 'top bottom', end: 'bottom bottom', onUpdate: s => { dir = s.direction || dir; } });
    const frame = () => {
      if (!seen || isPaused()) return;
      const v = st.getVelocity();
      ts += (dir * (1 + Math.min(Math.abs(v) / 220, 9)) - ts) * .1;
      loop.timeScale(ts);
      sk += (clamp(-v / 130, -12, 12) - sk) * .12;
      gsap.set(track, { skewX: sk });
    };
    gsap.ticker.add(frame);

    /* ---- split masthead into letters ---- */
    const mast = q('.footer-masthead');
    const splitEl = el => {
      const nodes = [...el.childNodes], out = []; el.textContent = '';
      nodes.forEach(n => {
        if (n.nodeType === 3) [...n.textContent].forEach(c => { const s = document.createElement('span'); s.className = 'mc'; s.textContent = c; el.appendChild(s); out.push(s); });
        else { n.classList.add('mc'); el.appendChild(n); out.push(n); }
      });
      return out;
    };
    const dot = q('.footer-dot');
    const letters = [...splitEl(q('.footer-masthead > span:first-child')), ...splitEl(q('.footer-word'))];
    const movers = letters.filter(l => l !== dot);

    /* ---- entrance: rows slide in, letters rise in 3D ---- */
    gsap.timeline({ scrollTrigger: { trigger: foot, start: 'top 78%', once: true } })
      .from('.footer-marquee', { yPercent: -100, duration: .9, ease: 'power3.out' })
      .from('.footer-top > *', { y: 22, opacity: 0, duration: .8, stagger: .1, ease: 'power3.out' }, '-=.5')
      .from(letters, { yPercent: 120, rotateX: -85, opacity: 0, transformPerspective: 700, transformOrigin: '50% 100%', duration: 1.2, stagger: .07, ease: 'power4.out' }, '-=.5')
      .from('.footer-side', { opacity: 0, x: 14, duration: .8, ease: 'power2.out' }, '-=.6')
      .from('.footer-bottom > *', { y: 14, opacity: 0, duration: .7, stagger: .07, ease: 'power3.out' }, '-=.6');

    /* masthead grows into place as the footer scrolls up */
    gsap.fromTo(mast, { yPercent: 10, scale: .94 }, {
      yPercent: 0, scale: 1, ease: 'none',
      scrollTrigger: { trigger: foot, start: 'top bottom', end: 'top 25%', scrub: true }
    });

    /* the dot hops now and then */
    let hopT;
    const hop = () => {
      if (seen && !isPaused()) gsap.timeline().to(dot, { y: '-.32em', duration: .26, ease: 'power2.out' }).to(dot, { y: 0, duration: .95, ease: 'bounce.out' });
      hopT = setTimeout(hop, 3800);
    };
    hopT = setTimeout(hop, 3200);

    /* ---- pointer: spotlight + giant letters get pushed away, then spring back ---- */
    const fine = matchMedia('(hover: hover) and (pointer: fine)').matches;
    const R = () => Math.min(innerWidth * .2, 300);
    const onMove = e => {
      if (!seen || isPaused()) return;
      const fr = foot.getBoundingClientRect();
      foot.style.setProperty('--fx', (e.clientX - fr.left) + 'px');
      foot.style.setProperty('--fy', (e.clientY - fr.top) + 'px');
      const r0 = R();
      movers.forEach(l => {
        const r = l.getBoundingClientRect();
        const dx = e.clientX - (r.left + r.width / 2), dy = e.clientY - (r.top + r.height / 2), d = Math.hypot(dx, dy) || 1;
        const f = Math.pow(clamp(1 - d / r0, 0, 1), 2);
        gsap.to(l, { x: -dx / d * f * 70, y: -dy / d * f * 46, rotation: -dx / r0 * f * 22, duration: .55, ease: 'power3.out', overwrite: 'auto' });
      });
    };
    const settle = () => {
      foot.style.setProperty('--glow', 0);
      gsap.to(movers, { x: 0, y: 0, rotation: 0, duration: 1.3, ease: 'elastic.out(1, .4)', stagger: .02, overwrite: 'auto' });
    };
    if (fine) {
      foot.addEventListener('pointermove', onMove);
      foot.addEventListener('pointerenter', () => foot.style.setProperty('--glow', 1));
      foot.addEventListener('pointerleave', settle);
    }

    /* magnetic contact button */
    let mx, my, magnet;
    if (fine) {
      mx = gsap.quickTo(cbtn, 'x', { duration: .5, ease: 'power3.out' });
      my = gsap.quickTo(cbtn, 'y', { duration: .5, ease: 'power3.out' });
      magnet = e => { const r = cbtn.getBoundingClientRect(); mx((e.clientX - (r.left + r.width / 2)) * .3); my((e.clientY - (r.top + r.height / 2)) * .3); };
      cbtn.addEventListener('pointermove', magnet);
      cbtn.addEventListener('pointerleave', () => { mx(0); my(0); });
    }

    return () => { gsap.ticker.remove(frame); clearTimeout(hopT); };
  });
})();
</script>