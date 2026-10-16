<?php
/**
 * About Page Content (Philosophy, Capabilities & Timeline)
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/../includes/config.php';

$capabilities = [
  ['01', 'INTERFACE & MOTION', 'HTML / CSS / JavaScript / jQuery / Tailwind / Bootstrap / GSAP', 'Responsive interfaces, visual hierarchy, and interactions with personality.'],
  ['02', 'BACKEND & DATA', 'Python / Django / REST APIs / MySQL / SQLite / PHP / Laravel', 'Applications, authentication, APIs, and the structure behind the experience.'],
  ['03', 'TOOLS & PROCESS', 'Git / GitHub / VS Code / Database design', 'Maintainable code, version control, and practical collaboration.'],
  ['04', 'ALWAYS EXPLORING', 'Local LLMs / n8n / NumPy / OpenCV', 'AI, automation, and experiments that stretch the way I think.']
];

$journey = [
  ['CURRENT ROLE', 'Social Amplifiers', 'Full Stack Developer', 'Currently building frontend experiences and full stack projects with the team.'],
  ['PREVIOUS EXPERIENCE', 'ExcelPTP', 'Web Development Internship & Training', 'Hands-on Python and Django development, APIs, databases, and the College Placement Portal.'],
  ['2022 — 2025', 'Government Polytechnic, Gandhinagar', 'Diploma in Information Technology', 'A foundation in programming, web development, databases, and computer science under the GTU curriculum.']
];
?>
<!-- About Hero -->
<section class="about-hero section">
  <div class="section-label">
    <span>INTRODUCING THE HUMAN</span>
    <span>03 / ABOUT</span>
  </div>

  <div class="about-hero-grid">
    <div>
      <h1 class="display" aria-label="More than the code.">
        <span data-line-reveal aria-hidden="true">MORE THAN</span>
        <span data-line-reveal data-scramble class="red-type" aria-hidden="true">THE CODE.</span>
      </h1>
      <p class="large-copy">
        <span class="ln"><span>I’m Yug Bhuva.</span></span>
        <span class="ln"><span>Developer by profession.</span></span>
        <span class="ln"><span>Curious by default.</span></span>
      </p>
      <p class="about-intro">Based in Ahmedabad, I build full stack applications and expressive interfaces. I’m
        interested in the details that turn functional software into something people enjoy using.</p>
      <a class="underlined-link" href="<?= url('assets/Yug_Bhuva_Resume.pdf') ?>" target="_blank" rel="noopener">VIEW
        RÉSUMÉ <span>↗</span></a>
    </div>

    <figure class="ya-scene" data-about-photo aria-label="Portrait of Yug Bhuva">
      <span class="ya-outline" aria-hidden="true"></span>
      <div class="ya-photo">
        <div class="ya-image-window">
          <img src="<?= url('assets/portrait.jpeg') ?>" alt="Yug Bhuva" width="960" height="1280" fetchpriority="high"
            decoding="async">
          <span class="ya-photo-shade" aria-hidden="true"></span>
          <span class="ya-photo-shine" aria-hidden="true"></span>
        </div>
        <figcaption><span>YUG BHUVA</span><span>THE PERSON BEHIND THE PIXELS ↗</span></figcaption>
      </div>
      <span class="ya-tape" aria-hidden="true">A WORK IN PROGRESS. ALWAYS.</span>
      <span class="ya-sticker ya-sticker--seal"
        aria-hidden="true"><span>BUILT<br>WITH<br><em>CARE.</em></span><i>✳</i></span>
      <span class="ya-sticker ya-sticker--code" aria-hidden="true"><b>&lt;/&gt;</b><span>CODE
          +<br>CHARACTER</span></span>
      <span class="ya-sticker ya-sticker--place" aria-hidden="true"><i></i> AHMEDABAD, INDIA <span>↗</span></span>
      <svg class="ya-doodle" viewBox="0 0 180 100" fill="none" aria-hidden="true">
        <path pathLength="1" d="M12 80C45 88 110 66 94 31C83 7 60 27 87 47C108 62 145 48 164 22M143 23L164 22 162 43" />
      </svg>
      <span class="ya-note" aria-hidden="true">a human touch.</span>
    </figure>
  </div>
</section>

<!-- About Approach / Statement -->
<section class="about-statement section">
  <div class="section-label">
    <span>A MINDSET, NOT A JOB TITLE</span>
    <span>01 — APPROACH</span>
  </div>

  <h2 class="word-reveal">
    I like understanding<br>
    how things work.<br>
    Then asking how they<br>
    could <em>work differently.</em>
  </h2>

  <div class="about-values">
    <article><span>01</span>
      <h3>Think it through.</h3>
      <p>Understand the problem, the people using it, and the simplest path to something useful.</p>
    </article>
    <article><span>02</span>
      <h3>Make it feel right.</h3>
      <p>Give the layout, interactions, and small details the same attention as the underlying code.</p>
    </article>
    <article><span>03</span>
      <h3>Keep getting better.</h3>
      <p>Learn through real projects, new tools, and the questions that appear along the way.</p>
    </article>
  </div>
</section>

<!-- Capabilities Accordions -->
<section class="capabilities section">
  <div class="section-label">
    <span>THE TOOLS CHANGE. THE CURIOSITY STAYS.</span>
    <span>02 — CAPABILITIES</span>
  </div>

  <div class="section-title">
    <h2 class="display" aria-label="The full picture.">
      <span class="cp-line" aria-hidden="true">THE FULL</span>
      <span class="cp-line outline-type" aria-hidden="true">PICTURE.</span>
    </h2>
    <p>From the interface<br>to the infrastructure.</p>
  </div>

  <div class="capability-list">
    <?php foreach ($capabilities as [$num, $title, $tools, $desc]): ?>
      <details>
        <summary>
          <span><?= $num ?></span>
          <h3><?= $title ?></h3>
          <span class="detail-plus">＋</span>
        </summary>
        <div class="capability-content">
          <p><?= $desc ?></p>
          <p class="cap-tools"><?= $tools ?></p>
        </div>
      </details>
    <?php endforeach; ?>
  </div>
</section>

<!-- Career Journey Timeline -->
<section class="experience section">
  <div class="section-label">
    <span>EVERY CHAPTER ADDS SOMETHING</span>
    <span>03 — THE JOURNEY</span>
  </div>

  <h2 class="display" aria-label="Always in the making.">
    <span class="cp-line" aria-hidden="true">ALWAYS</span>
    <span class="cp-line red-type" aria-hidden="true">IN THE MAKING.</span>
  </h2>

  <div class="timeline">
    <?php foreach ($journey as $i => [$date, $org, $role, $text]): ?>
      <article class="timeline-row">
        <span><?= $date ?></span>
        <div>
          <h3><?= $org ?></h3>
          <p><?= $role ?></p>
        </div>
        <p><?= $text ?></p>
        <span>0<?= $i + 1 ?></span>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<style>
  .about-hero {
    padding-top: 45px;
  }

  .about-hero-grid {
    display: grid;
    grid-template-columns: 1.35fr 1fr;
    gap: 8vw;
    align-items: start;
  }

  .about-hero-grid h1 {
    font-size: clamp(65px, 8.2vw, 130px);
    margin-bottom: 45px;
  }

  .about-hero-grid h1>span {
    display: block;
    overflow: hidden;
    padding-bottom: .08em;
  }

  .about-hero .large-copy {
    font-size: clamp(25px, 2.4vw, 40px);
  }

  .ln,
  .cp-line {
    display: block;
    overflow: hidden;
    padding-bottom: .1em;
  }

  .ln>span {
    display: block;
  }

  .c {
    display: inline-block;
    will-change: transform, opacity;
  }

  .about-intro {
    font-size: 13px;
    max-width: 410px;
    margin: 24px 0;
    line-height: 1.7;
  }

  /* Statement */
  .about-statement {
    background: #eeeee7;
  }

  .about-statement .word-reveal {
    font-size: clamp(36px, 6vw, 90px);
    font-weight: 500;
    line-height: 1.2;
    letter-spacing: -.055em;
  }

  .about-statement .word-reveal em {
    font-family: Georgia, serif;
    font-style: italic;
  }

  .word-reveal .word {
    display: inline-block;
    will-change: opacity;
  }

  .about-values {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 40px;
    margin-top: 80px;
  }

  .about-values article {
    position: relative;
    padding-top: 15px;
    transition: transform .5s cubic-bezier(.2, .7, .2, 1);
  }

  .about-values article::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: var(--ink);
    transform: scaleX(var(--l, 1));
    transform-origin: left;
  }

  .about-values article:hover {
    transform: translateY(-8px);
  }

  .about-values article:hover h3 {
    color: var(--red);
  }

  .about-values article>span {
    font-size: 10px;
    font-weight: 700;
  }

  .about-values h3 {
    font-size: 25px;
    letter-spacing: -.04em;
    margin: 25px 0 12px;
    transition: color .3s;
  }

  .about-values p {
    font-size: 12px;
    max-width: 310px;
    line-height: 1.6;
  }

  /* Capabilities accordion */
  .capability-list details {
    position: relative;
    isolation: isolate;
    border-top: 1px solid var(--ink);
  }

  .capability-list details:last-child {
    border-bottom: 1px solid var(--ink);
  }

  .capability-list summary {
    position: relative;
    display: flex;
    align-items: center;
    gap: 35px;
    padding: 27px 0;
    cursor: pointer;
    list-style: none;
    transition: padding .5s cubic-bezier(.2, .7, .2, 1), color .35s;
  }

  .capability-list summary::-webkit-details-marker {
    display: none;
  }

  .capability-list summary::before {
    content: "";
    position: absolute;
    inset: 0 calc(var(--pad) * -1);
    z-index: -1;
    background: var(--ink);
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .55s cubic-bezier(.2, .7, .2, 1);
  }

  .capability-list details:not([open]) summary:hover {
    padding-left: 22px;
    color: var(--paper);
  }

  .capability-list details:not([open]) summary:hover::before {
    transform: scaleX(1);
  }

  .capability-list summary>span:first-child {
    font-size: 10px;
    width: 40px;
    font-weight: 700;
  }

  .capability-list h3 {
    font-size: clamp(22px, 3vw, 48px);
    letter-spacing: -.045em;
  }

  .detail-plus {
    margin-left: auto;
    font-size: 35px;
    transition: transform .4s ease;
    line-height: 1;
  }

  .capability-list details[open] .detail-plus {
    transform: rotate(45deg);
    color: var(--red);
  }

  .capability-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    font-size: 13px;
    padding: 0 70px 30px;
    overflow: hidden;
  }

  .cap-tools {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    align-content: flex-start;
  }

  .chip {
    display: inline-block;
    border: 1px solid var(--ink);
    border-radius: 30px;
    padding: 7px 13px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: .02em;
  }

  /* Timeline */
  .experience {
    padding-top: 20px;
  }

  .timeline {
    margin-top: 55px;
  }

  .timeline-row {
    position: relative;
    display: grid;
    grid-template-columns: 1fr 1.4fr 1.4fr 30px;
    gap: 40px;
    padding: 30px 0;
  }

  .timeline-row::before,
  .timeline-row::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
  }

  .timeline-row::before {
    background: var(--line);
  }

  .timeline-row::after {
    background: var(--red);
    transform: scaleX(var(--l, 1));
    transform-origin: left;
  }

  .timeline-row>span {
    font-size: 9px;
    font-weight: 700;
    letter-spacing: .06em;
    transition: color .4s;
  }

  .timeline-row h3 {
    font-size: 23px;
    letter-spacing: -.04em;
    line-height: 1.3;
    margin-bottom: 8px;
    transition: transform .6s cubic-bezier(.2, .7, .2, 1), color .4s;
  }

  .timeline-row p {
    font-size: 12px;
    line-height: 1.6;
  }

  .timeline-row>p {
    color: var(--muted);
  }

  .timeline-row.is-on h3 {
    transform: translateX(14px);
    color: var(--red);
  }

  .timeline-row.is-on>span:last-child {
    color: var(--red);
  }

  @media (max-width: 1100px) {
    .timeline-row {
      gap: 20px;
    }
  }

  @media (max-width: 760px) {
    .about-hero {
      padding-top: 30px;
    }

    .about-hero-grid {
      grid-template-columns: 1fr;
      gap: 40px;
    }

    .about-hero-grid h1 {
      font-size: 14.5vw;
      margin-bottom: 30px;
    }

    .about-hero .large-copy {
      font-size: 28px;
    }

    .about-statement .word-reveal {
      font-size: 8.5vw;
    }

    .about-values {
      grid-template-columns: 1fr;
      gap: 30px;
      margin-top: 40px;
    }

    .about-values h3 {
      margin-top: 15px;
    }

    .about-values p {
      max-width: none;
    }

    .capability-list summary {
      gap: 15px;
      padding: 20px 0;
    }

    .capability-list summary>span:first-child {
      width: 20px;
      font-size: 8px;
    }

    .capability-list h3 {
      font-size: 22px;
    }

    .detail-plus {
      font-size: 24px;
    }

    .capability-content {
      display: block;
      padding: 0 0 25px 35px;
      font-size: 12px;
    }

    .capability-content>p+p {
      margin-top: 15px;
    }

    .experience {
      padding-top: 0;
    }

    .timeline-row {
      grid-template-columns: 1fr 35px;
      gap: 16px;
    }

    .timeline-row>span:first-child,
    .timeline-row>div,
    .timeline-row>p {
      grid-column: 1;
    }

    .timeline-row>span:last-child {
      grid-column: 2;
      grid-row: 1;
    }

    .timeline-row h3 {
      font-size: 25px;
    }
  }

  /* One image, one fixed-ratio window. No duplicate colour overlay or global portrait dependency. */
  .ya-scene,
  .ya-scene * {
    box-sizing: border-box
  }

  .about-hero-grid>div {
    min-width: 0
  }

  .ya-scene {
    --ya-paper: var(--paper, #f7f6f1);
    --ya-ink: var(--ink, #20201e);
    --ya-red: var(--red, #e44132);
    position: relative;
    isolation: isolate;
    width: 100%;
    max-width: 540px;
    min-width: 0;
    margin: 35px auto 25px;
    padding: 26px 22px 48px;
    perspective: 1200px
  }

  .ya-photo {
    position: relative;
    z-index: 2;
    background: #fffef9;
    padding: 10px 10px 0;
    transform: rotate(2.5deg);
    transform-origin: 50% 55%;
    border: 1px solid #22221f20;
    box-shadow: 0 24px 55px -25px #20201e50;
    will-change: transform
  }

  .ya-image-window {
    position: relative;
    width: 100%;
    aspect-ratio: 3/4;
    overflow: hidden;
    background: #e5e3da
  }

  .ya-image-window>img {
    position: absolute !important;
    inset: 0;
    display: block !important;
    width: 100% !important;
    height: 100% !important;
    max-width: 100%;
    object-fit: cover;
    object-position: center 38%;
    margin: 0;
    border-radius: 0;
    clip-path: none;
    transform-origin: 50% 45%
  }

  .ya-photo-shade {
    position: absolute;
    inset: 0;
    background: linear-gradient(0deg, #18201855, transparent 35%);
    pointer-events: none
  }

  .ya-photo-shine {
    position: absolute;
    inset: -30%;
    background: linear-gradient(115deg, transparent 36%, #ffffff28 47%, transparent 58%);
    transform: translateX(-80%);
    pointer-events: none;
    opacity: 0
  }

  .ya-photo figcaption {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 15px;
    min-height: 43px;
    padding: 10px 5px;
    font: 600 8px/1.5 Arial, sans-serif;
    letter-spacing: .1em;
    color: var(--ya-ink)
  }

  .ya-photo figcaption>span:last-child {
    font-size: 6px;
    font-weight: 400;
    text-align: right
  }

  .ya-outline {
    position: absolute;
    inset: 18px 35px 50px 13px;
    z-index: 0;
    border: 1px solid var(--ya-red);
    transform: rotate(-4deg);
    opacity: .4;
    pointer-events: none
  }

  .ya-tape {
    position: absolute;
    z-index: 6;
    top: 14px;
    left: 23%;
    width: 60%;
    padding: 12px 9px;
    background: #e9e6d5e8;
    clip-path: polygon(2% 0, 98% 0, 100% 15%, 98% 30%, 100% 45%, 98% 60%, 100% 75%, 98% 100%, 0 100%, 2% 80%, 0 60%, 2% 40%, 0 20%);
    transform: rotate(-5deg);
    text-align: center;
    font: 600 7px/1.5 Arial, sans-serif;
    letter-spacing: .1em;
    color: #605e52;
    pointer-events: none
  }

  .ya-sticker {
    position: absolute;
    z-index: 7;
    display: flex;
    pointer-events: none;
    will-change: transform;
    box-shadow: 0 8px 20px #20201e20
  }

  .ya-sticker--seal {
    right: -5px;
    top: 18%;
    width: clamp(85px, 8vw, 125px);
    aspect-ratio: 1;
    background: var(--ya-red);
    color: #fffaf1;
    border: 5px solid #fffaf1;
    border-radius: 50%;
    align-items: center;
    justify-content: center;
    transform: rotate(12deg);
    outline: 1px solid #e4413220
  }

  .ya-sticker--seal>span {
    font: 800 clamp(11px, 1.25vw, 18px)/1.05 Arial, sans-serif;
    letter-spacing: -.03em;
    text-align: center
  }

  .ya-sticker--seal em {
    font-family: Georgia, serif;
    font-size: 1.3em;
    font-weight: 400
  }

  .ya-sticker--seal>i {
    position: absolute;
    right: 9%;
    bottom: 13%;
    font-size: 14px;
    font-style: normal
  }

  .ya-sticker--code {
    left: -9px;
    bottom: 20%;
    align-items: center;
    gap: 12px;
    background: #dce7aa;
    color: #293321;
    padding: 14px 18px;
    border: 4px solid #fffef8;
    border-radius: 5px;
    transform: rotate(-8deg)
  }

  .ya-sticker--code>b {
    font: 800 24px/1 monospace
  }

  .ya-sticker--code>span {
    font: 800 10px/1.2 Arial, sans-serif;
    letter-spacing: .02em
  }

  .ya-sticker--place {
    right: 15px;
    bottom: 16px;
    align-items: center;
    gap: 11px;
    background: #242b23;
    color: #f3f3e9;
    padding: 12px 16px;
    border: 3px solid #fffef8;
    border-radius: 3px;
    transform: rotate(4deg);
    font: 500 8px/1.4 Arial, sans-serif;
    letter-spacing: .08em
  }

  .ya-sticker--place>i {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #c7db8f
  }

  .ya-sticker--place>span {
    font-size: 16px
  }

  .ya-doodle {
    position: absolute;
    left: -19px;
    top: 4%;
    width: 34%;
    height: auto;
    z-index: 8;
    pointer-events: none;
    stroke: var(--ya-red);
    stroke-width: 2.3;
    stroke-linecap: round;
    stroke-linejoin: round
  }

  .ya-note {
    position: absolute;
    left: 9px;
    bottom: 13px;
    font: italic 16px/1.2 Georgia, serif;
    color: var(--ya-ink);
    transform: rotate(-6deg)
  }

  @media(max-width:1100px) and (min-width:761px) {
    .about-hero-grid {
      gap: 4vw;
      grid-template-columns: 1.2fr 1fr
    }

    .ya-scene {
      padding-inline: 14px
    }

    .ya-sticker--code {
      padding: 10px 12px;
      gap: 8px
    }

    .ya-sticker--code>span {
      font-size: 8px
    }

    .ya-sticker--code>b {
      font-size: 20px
    }

    .ya-sticker--place {
      font-size: 7px;
      right: 0;
      padding: 10px
    }

    .ya-note {
      font-size: 13px
    }
  }

  @media(max-width:760px) {
    .ya-scene {
      width: min(94%, 480px);
      margin: 0 auto 24px;
      padding: 24px 18px 50px
    }

    .ya-photo {
      transform: rotate(1.5deg)
    }

    .ya-sticker--seal {
      right: -1px;
      top: 19%;
      width: 95px
    }

    .ya-sticker--seal>span {
      font-size: 13px
    }

    .ya-sticker--code {
      left: -5px;
      bottom: 21%;
      padding: 11px 14px
    }

    .ya-sticker--code>span {
      font-size: 9px
    }

    .ya-sticker--place {
      font-size: 7px;
      right: 4px
    }

    .ya-note {
      font-size: 14px;
      bottom: -5px
    }

    .ya-tape {
      font-size: 6px
    }

    .ya-doodle {
      left: -10px
    }
  }

  @media(prefers-reduced-motion:reduce) {
    .ya-scene * {
      animation: none !important;
      transition: none !important;
      will-change: auto !important
    }

    .ya-photo-shine {
      display: none
    }
  }
</style>

<script>
  (() => {
    const $1 = s => document.querySelector(s), all = s => [...document.querySelectorAll(s)];
    const paused = () => document.body.classList.contains('motion-paused');

    /* Single-portrait engine: independent from GSAP and the site's generic portrait script. */
    const scene = $1('[data-about-photo]');
    if (scene && !scene.dataset.photoReady) {
      scene.dataset.photoReady = '1';
      const photo = scene.querySelector('.ya-photo'), image = scene.querySelector('img');
      const stickers = [...scene.querySelectorAll('.ya-sticker')], tape = scene.querySelector('.ya-tape');
      const outline = scene.querySelector('.ya-outline'), path = scene.querySelector('.ya-doodle path'), shine = scene.querySelector('.ya-photo-shine');
      const reduced = matchMedia('(prefers-reduced-motion:reduce)'), fine = matchMedia('(hover:hover) and (pointer:fine)');
      const limit = (x, a, b) => Math.max(a, Math.min(b, x)), smooth = x => x * x * (3 - 2 * x);
      let frame = 0, px = 0, py = 0, visible = true;
      function draw() {
        frame = 0;
        if (reduced.matches || paused() || !visible) return;
        const r = scene.getBoundingClientRect(), h = innerHeight;
        const enter = smooth(limit((h * .96 - r.top) / (h * .62), 0, 1));
        const scroll = limit((h * .75 - r.top) / Math.max(h, r.height), 0, 1);
        photo.style.transform = `translateY(${28 * (1 - enter) - scroll * 18}px) rotate(${3 - 5 * scroll}deg) rotateX(${-py * 5}deg) rotateY(${px * 7}deg)`;
        image.style.transform = `scale(${1.055 - .055 * enter})`;
        image.style.filter = `grayscale(${.75 * (1 - scroll)})`;
        outline.style.transform = `rotate(${-5 + scroll * 3}deg) translateY(${-scroll * 12}px)`;
        tape.style.transform = `translateY(${-20 * (1 - enter)}px) rotate(${-8 + 3 * enter}deg)`;
        stickers.forEach((el, i) => {
          const t = smooth(limit((enter - i * .07) / (.82 - i * .07), 0, 1));
          const rotation = [12, -8, 4][i], direction = i === 1 ? -1 : 1;
          el.style.opacity = String(.25 + .75 * t);
          el.style.transform = `translate3d(${direction * 22 * (1 - t) + px * (i + 1) * 4}px,${35 * (1 - t) - scroll * (i + 1) * 5 + py * (i + 1) * 3}px,0) rotate(${rotation + direction * (1 - t) * 17 + direction * scroll * 4}deg) scale(${.75 + .25 * t})`;
        });
        path.style.strokeDasharray = '1'; path.style.strokeDashoffset = String(1 - enter);
        shine.style.opacity = String(.8 * enter); shine.style.transform = `translateX(${-65 + scroll * 100 + px * 12}%)`;
      }
      function schedule() { if (!frame && !reduced.matches && !paused() && visible) frame = requestAnimationFrame(draw) }
      function reset() {
        cancelAnimationFrame(frame); frame = 0; px = py = 0;
        [photo, image, ...stickers, tape, outline, path, shine].forEach(el => el.removeAttribute('style'));
        schedule();
      }
      scene.addEventListener('pointermove', e => { if (!fine.matches || e.pointerType === 'touch' || paused() || reduced.matches) return; const r = scene.getBoundingClientRect(); px = limit((e.clientX - r.left) / r.width - .5, -.5, .5) * 2; py = limit((e.clientY - r.top) / r.height - .5, -.5, .5) * 2; schedule() });
      scene.addEventListener('pointerleave', () => { px = py = 0; schedule() });
      window.addEventListener('scroll', schedule, { passive: true }); window.addEventListener('resize', schedule, { passive: true }); window.addEventListener('pageshow', schedule); image.addEventListener('load', schedule); reduced.addEventListener('change', reset);
      if ('IntersectionObserver' in window) { const io = new IntersectionObserver(entries => { visible = entries[0].isIntersecting; if (visible) schedule() }); io.observe(scene) }
      if ('MutationObserver' in window) new MutationObserver(reset).observe(document.body, { attributes: true, attributeFilter: ['class'] });
      schedule();
    }

    const refresh = () => { window.lenis?.resize(); if (window.ScrollTrigger) ScrollTrigger.refresh(); };
    const details = all('.capability-list details');

    if (!window.gsap || !window.ScrollTrigger || paused()) {
      details.forEach(d => d.addEventListener('toggle', refresh));
      return;
    }
    gsap.registerPlugin(ScrollTrigger);

    const red = getComputedStyle(document.documentElement).getPropertyValue('--red').trim() || '#e5322d';
    const clamp = (v, a, b) => Math.min(b, Math.max(a, v));

    const chars = el => { const t = el.textContent; el.textContent = ''; return [...t].map(ch => { const s = document.createElement('span'); s.className = 'c'; s.innerHTML = ch === ' ' ? '&nbsp;' : ch; el.appendChild(s); return s; }); };
    const words = el => {
      const w = document.createTreeWalker(el, NodeFilter.SHOW_TEXT), nodes = []; while (w.nextNode()) nodes.push(w.currentNode);
      nodes.forEach(n => {
        const f = document.createDocumentFragment();
        n.textContent.split(/(\s+)/).forEach(t => { if (/\S/.test(t)) { const s = document.createElement('span'); s.className = 'word'; s.textContent = t; f.append(s); } else f.append(document.createTextNode(t)); });
        n.replaceWith(f);
      });
      return [...el.querySelectorAll('.word')];
    };

    /* decode: letters scramble through code symbols, then lock in one by one */
    const decode = (cs, dur, delay) => {
      const pool = '{}[]<>/;=+*#01', finals = cs.map(c => c.textContent);
      cs.forEach(c => { if (c.textContent.trim()) c.style.minWidth = c.offsetWidth + 'px'; c.style.textAlign = 'center'; });
      const o = { p: 0 };
      return gsap.to(o, {
        p: 1, duration: dur, delay, ease: 'none',
        onUpdate() { cs.forEach((c, i) => { if (finals[i] === '\u00A0') return; c.textContent = o.p > .2 + i / cs.length * .7 ? finals[i] : pool[(Math.random() * pool.length) | 0]; }); },
        onComplete() { cs.forEach((c, i) => { c.textContent = finals[i]; c.style.minWidth = ''; }); }
      });
    };

    const mm = gsap.matchMedia();
    mm.add('(prefers-reduced-motion: no-preference)', () => {

      /* ===== 1 · HERO ===== */
      const l1 = chars($1('.about-hero [data-line-reveal]:not([data-scramble])'));
      const l2 = chars($1('.about-hero [data-scramble]'));
      gsap.set(l2, { opacity: 0 });
      gsap.timeline({ delay: .1 })
        .from('.about-hero .section-label span', { y: 14, opacity: 0, duration: .7, stagger: .1, ease: 'power3.out' })
        .from(l1, { yPercent: 120, rotateX: -80, transformOrigin: '50% 100%', transformPerspective: 700, opacity: 0, duration: 1.1, stagger: .045, ease: 'power4.out' }, .2)
        .to(l2, { opacity: 1, duration: .2, stagger: .04 }, .7)
        .add(decode(l2, 1.4, 0), .7)
        .from('.about-hero .ln > span', { yPercent: 115, duration: .9, stagger: .12, ease: 'power4.out' }, 1.1)
        .from('.about-intro, .about-hero .underlined-link', { y: 18, opacity: 0, duration: .8, stagger: .12, ease: 'power3.out' }, 1.6);

      /* ===== 2 · STATEMENT: the sentence is "read" as you scroll ===== */
      const sw = words($1('.about-statement .word-reveal'));
      const em = sw.filter(w => w.closest('em'));
      gsap.set(sw, { opacity: .14 });
      gsap.timeline({ scrollTrigger: { trigger: '.about-statement .word-reveal', start: 'top 78%', end: 'bottom 52%', scrub: .6 } })
        .to(sw, { opacity: 1, stagger: .1, ease: 'none', duration: .4 })
        .to(em, { color: red, y: -6, stagger: .12, duration: .5, ease: 'back.out(2)' }, '>-.2');
      all('.about-statement .section-label span').forEach(s => gsap.from(s, { y: 14, opacity: 0, duration: .7, scrollTrigger: { trigger: s, start: 'top 92%', once: true } }));
      all('.about-values article').forEach((a, i) => {
        gsap.from(a, { y: 40, opacity: 0, duration: .8, ease: 'power3.out', scrollTrigger: { trigger: a, start: 'top 92%', once: true }, delay: i * .08 });
        gsap.fromTo(a, { '--l': 0 }, { '--l': 1, duration: 1.1, ease: 'power3.inOut', scrollTrigger: { trigger: a, start: 'top 92%', once: true }, delay: i * .08 });
      });

      /* ===== 3 · CAPABILITIES ===== */
      const cap = chars($1('.capabilities .cp-line:not(.outline-type)')).concat(chars($1('.capabilities .outline-type')));
      gsap.from(cap, { yPercent: 115, rotateX: -80, transformOrigin: '50% 100%', transformPerspective: 700, opacity: 0, duration: 1.1, stagger: .05, ease: 'power4.out', scrollTrigger: { trigger: '.capabilities .section-title', start: 'top 82%', once: true } });
      gsap.from('.capabilities .section-title p', { y: 16, opacity: 0, duration: .8, scrollTrigger: { trigger: '.capabilities .section-title', start: 'top 82%', once: true } });
      gsap.from('.capability-list details', { y: 30, opacity: 0, duration: .8, stagger: .1, ease: 'power3.out', scrollTrigger: { trigger: '.capability-list', start: 'top 85%', once: true } });

      /* tools become chips */
      all('.cap-tools').forEach(p => {
        const parts = p.textContent.split('/').map(s => s.trim()); p.textContent = '';
        parts.forEach(t => { const c = document.createElement('span'); c.className = 'chip'; c.textContent = t; p.appendChild(c); });
      });

      /* smooth accordion: height + chips pop */
      const open = d => {
        const box = d.querySelector('.capability-content'), chips = d.querySelectorAll('.chip');
        d.open = true;
        gsap.fromTo(box, { height: 0, opacity: 0 }, { height: 'auto', opacity: 1, duration: .65, ease: 'power3.out', clearProps: 'height,opacity', onUpdate: () => window.lenis?.resize(), onComplete: refresh });
        gsap.from(chips, { scale: .5, y: 14, opacity: 0, duration: .6, stagger: .05, delay: .15, ease: 'back.out(2)' });
      };
      const close = d => {
        gsap.to(d.querySelector('.capability-content'), { height: 0, opacity: 0, duration: .45, ease: 'power3.inOut', onUpdate: () => window.lenis?.resize(), onComplete: () => { d.open = false; gsap.set(d.querySelector('.capability-content'), { clearProps: 'height,opacity' }); refresh(); } });
      };
      const handlers = details.map(d => {
        const h = e => { e.preventDefault(); if (gsap.isTweening(d.querySelector('.capability-content'))) return; d.open ? close(d) : open(d); };
        d.querySelector('summary').addEventListener('click', h);
        return [d, h];
      });
      /* first row opens itself once, to show what's inside */
      ScrollTrigger.create({ trigger: '.capability-list', start: 'top 60%', once: true, onEnter: () => { if (!details[0].open) open(details[0]); } });

      /* ===== 4 · TIMELINE ===== */
      const tl = chars($1('.experience .cp-line:not(.red-type)')).concat(chars($1('.experience .red-type')));
      gsap.from(tl, { yPercent: 115, rotateX: -80, transformOrigin: '50% 100%', transformPerspective: 700, opacity: 0, duration: 1.1, stagger: .045, ease: 'power4.out', scrollTrigger: { trigger: '.experience h2', start: 'top 85%', once: true } });
      all('.timeline-row').forEach(row => {
        gsap.fromTo(row, { '--l': 0 }, { '--l': 1, ease: 'none', scrollTrigger: { trigger: row, start: 'top 88%', end: 'top 52%', scrub: .5 } });
        gsap.from(row.children, { y: 28, opacity: 0, duration: .8, stagger: .08, ease: 'power3.out', scrollTrigger: { trigger: row, start: 'top 88%', once: true } });
        ScrollTrigger.create({ trigger: row, start: 'top 62%', end: 'bottom 38%', toggleClass: { targets: row, className: 'is-on' } });
      });

      return () => handlers.forEach(([d, h]) => d.querySelector('summary').removeEventListener('click', h));
    });
  })();
</script>