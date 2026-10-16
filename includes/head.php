<?php
/**
 * Global Document Head, Design Tokens, Typography, and Core Libraries
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/config.php';

$pageTitle = $pageTitle ?? 'Digital work. Human touch. — Yug Bhuva';
$pageDescription = $pageDescription ?? 'Yug Bhuva, a full stack developer at Social Amplifiers in Ahmedabad. Explore his projects, background and creative approach.';
$pageActive = $pageActive ?? 'index';
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#fbfbf8">
<title><?= escape($pageTitle) ?></title>
<meta name="description" content="<?= escape($pageDescription) ?>">

<!-- SVG Favicon with YB Red Badge -->
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'%3E%3Crect width='64' height='64' fill='%23fa452a'/%3E%3Ctext x='8' y='45' font-family='Arial' font-size='34' font-weight='bold' fill='white'%3EYB%3C/text%3E%3C/svg%3E">

<!-- External animation & smooth scroll libraries -->
<script src="<?= url('assets/lenis.min.js') ?>"></script>
<script src="<?= url('assets/gsap.min.js') ?>"></script>
<script src="<?= url('assets/ScrollTrigger.min.js') ?>"></script>

<style>
/* Lenis Smooth Scroll Engine Styles */
html.lenis, html.lenis body {
  height: auto;
}
.lenis.lenis-smooth {
  scroll-behavior: auto !important;
}
.lenis.lenis-smooth [data-lenis-prevent] {
  overscroll-behavior: contain;
}
.lenis.lenis-stopped {
  overflow: hidden;
}
.lenis.lenis-scrolling iframe {
  pointer-events: none;
}

/* Typography Font Faces */
@font-face {
  font-family: 'Anton';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?= url('assets/editorial-font-0.ttf') ?>') format('truetype');
}
@font-face {
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url('<?= url('assets/editorial-font-1.ttf') ?>') format('truetype');
}
@font-face {
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 500;
  font-display: swap;
  src: url('<?= url('assets/editorial-font-2.ttf') ?>') format('truetype');
}
@font-face {
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 600;
  font-display: swap;
  src: url('<?= url('assets/editorial-font-3.ttf') ?>') format('truetype');
}
@font-face {
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 700;
  font-display: swap;
  src: url('<?= url('assets/editorial-font-4.ttf') ?>') format('truetype');
}
@font-face {
  font-family: 'Manrope';
  font-style: normal;
  font-weight: 800;
  font-display: swap;
  src: url('<?= url('assets/editorial-font-5.ttf') ?>') format('truetype');
}

/* Global Tokens & Reset */
:root {
  --paper: #fbfbf8;
  --ink: #20201e;
  --red: #fa452a;
  --line: #d8d8d1;
  --muted: #73736b;
  --pad: 4.1vw;
  --display: 'Anton', Impact, sans-serif;
  --body: 'Manrope', Arial, sans-serif;
}

* {
  box-sizing: border-box;
}

html {
  scroll-behavior: auto;
  scroll-padding-top: 110px;
}

body {
  margin: 0;
  background: var(--paper);
  color: var(--ink);
  font-family: var(--body);
  font-size: 15px;
  line-height: 1.6;
}

body.menu-open {
  overflow: hidden;
}

::selection {
  background: var(--red);
  color: white;
}

a {
  color: inherit;
  text-decoration: none;
}

button, input, textarea {
  font: inherit;
}

button, a {
  -webkit-tap-highlight-color: transparent;
}

button {
  cursor: pointer;
  color: inherit;
  border: 0;
  background: none;
}

button:focus-visible, a:focus-visible, summary:focus-visible {
  outline: 2px solid var(--red);
  outline-offset: 6px;
}

img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
}

h1, h2, h3, p {
  margin: 0;
}

h1, h2, h3 {
  font-weight: 500;
}

p {
  line-height: 1.7;
}

button:disabled {
  cursor: default;
}

a, button {
  touch-action: manipulation;
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
}

.section {
  padding: 100px var(--pad);
}

.display, .hero-line {
  font-family: var(--display);
  font-weight: 400;
  line-height: 1.02;
  letter-spacing: -.025em;
}

.display {
  font-size: clamp(54px, 7.2vw, 125px);
}

.display > [data-line-reveal] {
  display: block;
}

.red-type {
  color: var(--red);
}

.outline-type {
  -webkit-text-stroke: 1px var(--ink);
  color: transparent;
}

.red-type .outline-type {
  -webkit-text-stroke-color: var(--red);
}

.section-label {
  display: flex;
  justify-content: space-between;
  gap: 20px;
  border-top: 1px solid var(--ink);
  padding-top: 15px;
  margin-bottom: 58px;
  font-size: 10px;
  letter-spacing: .07em;
  font-weight: 700;
}

.section-title {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  gap: 40px;
  margin-bottom: 54px;
}

.section-title > p {
  font-size: 14px;
  min-width: 210px;
}

.large-copy {
  font-size: clamp(24px, 2.6vw, 41px);
  line-height: 1.4;
  letter-spacing: -.045em;
}

.text-cta {
  display: inline-flex;
  justify-content: space-between;
  align-items: center;
  gap: 45px;
  font-size: 11px;
  font-weight: 800;
  border-bottom: 1px solid var(--ink);
  padding: 18px 0;
  transition: color .25s ease;
}

.text-cta > span {
  font-size: 27px;
  transition: transform .3s ease;
}

.text-cta:hover > span {
  transform: translate(4px, -4px);
}

.underlined-link {
  display: inline-flex;
  gap: 50px;
  align-items: center;
  font-size: 11px;
  font-weight: 800;
  border-bottom: 1px solid var(--ink);
  padding: 12px 0;
  transition: color .25s ease, border-color .25s ease;
}

.underlined-link:hover {
  color: var(--red);
  border-color: var(--red);
}

@media (min-width: 1600px) {
  :root {
    --pad: max(4.1vw, calc((100vw - 1600px) / 2));
  }
}

@media (max-width: 1100px) {
  .section {
    padding-top: 80px;
    padding-bottom: 80px;
  }
}

@media (max-width: 760px) {
  :root {
    --pad: 6vw;
  }
  .section {
    padding: 60px var(--pad);
  }
  .section-label {
    font-size: 7px;
    margin-bottom: 35px;
    gap: 15px;
  }
  .section-label > span:last-child {
    text-align: right;
    white-space: nowrap;
  }
  .section-title {
    display: block;
    margin-bottom: 30px;
  }
  .display {
    font-size: clamp(46px, 10vw, 76px);
  }
  .section-title > p {
    font-size: 11px;
    min-width: 0;
    margin-top: 25px;
  }
}

@media (prefers-reduced-motion: reduce) {
  html {
    scroll-behavior: auto;
  }
  *, *:before, *:after {
    animation: none !important;
    transition: none !important;
  }
}
</style>

<script>
// Base Utility Functions
const $ = (s, root = document) => root.querySelector(s);
const $$ = (s, root = document) => [...root.querySelectorAll(s)];

// Initialize Lenis Smooth Scroll Engine
(() => {
  if (typeof Lenis === 'undefined') return;

  const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  let isPaused = reduced;
  try {
    isPaused = isPaused || sessionStorage.getItem('yb-motion') === 'off';
  } catch (err) {}

  const lenis = new Lenis({
    duration: 1.15,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    orientation: 'vertical',
    gestureOrientation: 'vertical',
    smoothWheel: true,
    smoothTouch: false,
    touchMultiplier: 1.5,
    wheelMultiplier: 1.0,
    infinite: false,
    autoRaf: false
  });

  window.lenis = lenis;

  // Bind Lenis with GSAP ScrollTrigger
  if (window.ScrollTrigger) {
    lenis.on('scroll', ScrollTrigger.update);
  }

  // Bind Lenis RAF to GSAP Ticker for smooth hardware sync
  if (window.gsap) {
    gsap.ticker.add((time) => {
      lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);
  } else {
    function fallbackRaf(time) {
      lenis.raf(time);
      requestAnimationFrame(fallbackRaf);
    }
    requestAnimationFrame(fallbackRaf);
  }

  if (isPaused) {
    lenis.stop();
  }

  // Smooth anchor scrolling
  document.addEventListener('DOMContentLoaded', () => {
    document.addEventListener('click', (e) => {
      const a = e.target.closest('a[href^="#"]');
      if (a) {
        const hash = a.getAttribute('href');
        if (hash && hash.length > 1) {
          const target = document.querySelector(hash);
          if (target) {
            e.preventDefault();
            lenis.scrollTo(target, { offset: -60, duration: 1.1 });
          }
        }
      }
    });

    if (window.ScrollTrigger) {
      ScrollTrigger.refresh();
    }
  });

  window.addEventListener('load', () => {
    lenis.resize();
    if (window.ScrollTrigger) ScrollTrigger.refresh();
  });
})();
</script>
