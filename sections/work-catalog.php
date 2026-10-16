<?php
/**
 * All Work Catalog & Interactive Filtering Section
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/data.php';

$totalCount = count($projects);
$formattedCount = str_pad((string)$totalCount, 2, '0', STR_PAD_LEFT);
?>
<!-- Work Page Heading -->
<section class="page-heading section">
  <div class="section-label">
    <span>AN INDEX OF IDEAS MADE REAL</span>
    <span>02 / WORK</span>
  </div>

  <h1 class="display page-display">
    <span data-line-reveal>SELECTED</span>
    <span data-line-reveal class="outline-type">WORK<span class="red-type">(<?= $formattedCount ?>)</span></span>
  </h1>

  <div class="page-intro">
    <p>Web applications, interfaces, and experiments.<br>A collection of things I’ve learned by making.</p>
    <span>PYTHON / DJANGO / FRONTEND / AI</span>
  </div>
</section>

<!-- Projects Grid with Real-Time Category Filters -->
<section class="all-work section">
  <div class="work-toolbar">
    <span id="work-count"><?= $formattedCount ?> PROJECTS</span>
    <div class="filters" role="group" aria-label="Filter projects">
      <button data-filter="all" aria-pressed="true" class="active">ALL WORK</button>
      <button data-filter="fullstack" aria-pressed="false">FULL STACK</button>
      <button data-filter="frontend" aria-pressed="false">FRONTEND</button>
      <button data-filter="ai" aria-pressed="false">AI & AUTOMATION</button>
    </div>
  </div>

  <div class="work-grid">
    <?php foreach ($projects as $i => $p): 
      $num = str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT);
      $tags = $p['tags'] ?? [];
      $headline = $p['headline'] ?? '';
      $catKey = escape($p['category'] ?? '');
      $catLabel = strtoupper($p['label'] ?? ($p['category'] ?? 'PROJECT'));
    ?>
      <article class="project-card" data-category="<?= $catKey ?>">
        <a class="project-card-link" href="<?= url('project.php?id=' . urlencode($p['id'] ?? '')) ?>" data-cursor="EXPLORE" aria-label="Explore <?= escape($p['name'] ?? ($p['short'] ?? 'Project')) ?>">
          
          <div class="project-card-visual">
            <?= renderProjectCover($p) ?>
            <span class="project-card-status" aria-hidden="true">
              <i class="status-dot"></i>
              <span><?= escape(strtoupper($p['status'] ?? 'LIVE PROJECT')) ?></span>
            </span>
          </div>

          <div class="project-card-meta">
            <div class="meta-kicker">
              <div class="meta-kicker-left">
                <span class="meta-num">№ <?= $num ?></span>
                <span class="meta-type"><?= strtoupper(escape($p['type'] ?? 'DEVELOPMENT')) ?></span>
              </div>
              <span class="meta-pill"><?= $catLabel ?></span>
            </div>

            <div class="project-card-heading">
              <h3 class="project-card-title"><?= escape($p['short'] ?? ($p['name'] ?? '')) ?></h3>
              <span class="project-card-btn" aria-hidden="true">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="7" y1="17" x2="17" y2="7"></line>
                  <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
              </span>
            </div>

            <?php if (!empty($headline)): ?>
              <p class="project-card-desc"><?= escape($headline) ?></p>
            <?php endif; ?>

            <?php if (!empty($tags)): ?>
              <div class="project-card-tags" aria-hidden="true">
                <?php foreach (array_slice($tags, 0, 4) as $tag): ?>
                  <span class="tag-chip"><?= escape($tag) ?></span>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <div class="project-card-footer" aria-hidden="true">
              <span class="footer-label">EXPLORE CASE STUDY</span>
              <span class="footer-line"></span>
              <span class="footer-icon">↗</span>
            </div>
          </div>

        </a>
      </article>
    <?php endforeach; ?>
  </div>

  <p class="sr-only" id="filter-status" aria-live="polite"></p>
  <p class="artwork-note">Project previews showcase authentic interfaces and case studies. Explore each project for its live demo, scope, and repository.</p>
</section>

<style>
.page-heading {
  padding-top: 45px;
  padding-bottom: 60px;
}

.page-display {
  font-size: clamp(90px, 16vw, 245px);
  line-height: 1.03;
}

.page-display .red-type {
  font-size: .53em;
  vertical-align: middle;
  -webkit-text-stroke: 0;
  margin-left: 4vw;
}

.page-intro {
  display: flex;
  align-items: flex-end;
  justify-content: space-between;
  margin-top: 38px;
}

.page-intro p {
  font-size: 17px;
}

.page-intro > span {
  font-size: 9px;
  font-weight: 700;
  letter-spacing: .06em;
  color: var(--muted);
}

/* All Work & Project Cards */
.all-work {
  padding-top: 0;
}

.work-toolbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 24px 0;
  border-block: 1px solid var(--ink);
  margin-bottom: 50px;
  gap: 20px;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: .08em;
}

#work-count {
  display: inline-flex;
  align-items: center;
  gap: 8px;
}
#work-count::before {
  content: "";
  display: inline-block;
  width: 6px;
  height: 6px;
  background: var(--red);
  border-radius: 50%;
}

.filters {
  display: flex;
  gap: 8px;
  flex-wrap: wrap;
}

.filters button {
  font-size: 9px;
  font-weight: 800;
  letter-spacing: .08em;
  border: 1px solid var(--line);
  border-radius: 40px;
  padding: 10px 18px;
  background: transparent;
  color: var(--ink);
  transition: all .25s cubic-bezier(.2, .7, .2, 1);
}

.filters button:hover {
  background: rgba(32, 32, 30, 0.05);
  border-color: var(--ink);
}

.filters button.active {
  background: var(--ink);
  color: var(--paper);
  border-color: var(--ink);
  box-shadow: 0 4px 14px rgba(32, 32, 30, 0.18);
}

/* Work Grid & Layout */
.work-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 60px 40px;
  align-items: start;
}

.work-grid .project-card:nth-child(even) {
  margin-top: 80px;
}

.project-card[hidden] {
  display: none !important;
}

/* Individual Card Styling */
.project-card {
  position: relative;
  background: #fdfdfa;
  border: 1px solid rgba(32, 32, 30, 0.12);
  border-radius: 16px;
  padding: 16px;
  box-shadow: 0 12px 36px -12px rgba(32, 32, 30, 0.08);
  transition: transform .5s cubic-bezier(.16, 1, .3, 1), box-shadow .5s cubic-bezier(.16, 1, .3, 1), border-color .35s ease;
  will-change: transform;
}

.project-card:hover {
  transform: translateY(-9px);
  border-color: rgba(250, 69, 42, 0.45);
  box-shadow: 0 30px 60px -15px rgba(32, 32, 30, 0.18), 0 0 0 1px rgba(250, 69, 42, 0.25);
}

.project-card-link {
  display: flex;
  flex-direction: column;
  height: 100%;
  color: inherit;
  text-decoration: none;
}

/* Project Visual Frame & Cover */
.project-card-visual {
  position: relative;
  width: 100%;
  border-radius: 12px;
  overflow: hidden;
  background: #e6e5dd;
  isolation: isolate;
}

/* Artwork container generated by renderProjectCover */
.project-card .project-art {
  position: relative;
  width: 100%;
  aspect-ratio: 16 / 10.5;
  overflow: hidden;
  background: #e4e4dd;
  display: block;
}

.project-card .project-art img {
  display: block;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center 35%;
  transition: transform .85s cubic-bezier(.16, 1, .3, 1), filter .5s ease;
}

.project-card:hover .project-art img {
  transform: scale(1.055);
}

/* Dark gradient vignette over the artwork so all stamps/labels stand out crisp */
.project-card .project-art::after {
  content: "";
  position: absolute;
  inset: 0;
  pointer-events: none;
  z-index: 2;
  background: linear-gradient(180deg, rgba(18, 20, 18, 0.6) 0%, rgba(18, 20, 18, 0.05) 35%, rgba(18, 20, 18, 0.2) 65%, rgba(18, 20, 18, 0.75) 100%);
  transition: opacity .4s ease;
}

/* Dynamic reflective sheen sweep on hover */
.project-card-visual::before {
  content: "";
  position: absolute;
  inset: -60%;
  z-index: 3;
  pointer-events: none;
  background: linear-gradient(115deg, transparent 40%, rgba(255, 255, 255, 0.25) 48%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0.25) 52%, transparent 60%);
  transform: translateX(-130%) rotate(12deg);
  transition: transform .95s cubic-bezier(.2, .7, .2, 1);
}

.project-card:hover .project-card-visual::before {
  transform: translateX(130%) rotate(12deg);
}

/* Styled Overlays Inside Artwork */
.project-card .cover-number {
  position: absolute;
  top: 14px;
  left: 14px;
  z-index: 4;
  font-family: monospace;
  font-size: 10px;
  font-weight: 800;
  letter-spacing: .12em;
  color: #ffffff;
  background: rgba(20, 20, 18, 0.78);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  padding: 5px 12px;
  border-radius: 100px;
  border: 1px solid rgba(255, 255, 255, 0.25);
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.25);
  line-height: 1.4;
}

.project-card .cover-caption {
  position: absolute;
  bottom: 14px;
  left: 14px;
  z-index: 4;
  font-size: 8px;
  font-weight: 800;
  letter-spacing: .14em;
  color: rgba(255, 255, 255, 0.95);
  text-transform: uppercase;
  background: rgba(20, 20, 18, 0.7);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  padding: 6px 12px;
  border-radius: 4px;
  border: 1px solid rgba(255, 255, 255, 0.16);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  line-height: 1.4;
}

.project-card .cover-view {
  position: absolute;
  bottom: 14px;
  right: 14px;
  z-index: 4;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-size: 9px;
  font-weight: 800;
  letter-spacing: .1em;
  color: #ffffff;
  background: rgba(255, 255, 255, 0.22);
  backdrop-filter: blur(12px);
  -webkit-backdrop-filter: blur(12px);
  padding: 6px 14px;
  border-radius: 100px;
  border: 1px solid rgba(255, 255, 255, 0.4);
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.2);
  transition: all .35s cubic-bezier(.2, .7, .2, 1);
}

.project-card .cover-view b {
  display: inline-grid;
  place-items: center;
  font-size: 14px;
  line-height: 1;
  font-weight: 400;
  transition: transform .3s ease;
}

.project-card:hover .cover-view {
  background: var(--red);
  border-color: var(--red);
  color: #fff;
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(250, 69, 42, 0.45);
}

.project-card:hover .cover-view b {
  transform: translate(2px, -2px);
}

/* Status indicator on top right */
.project-card-status {
  position: absolute;
  top: 14px;
  right: 14px;
  z-index: 4;
  display: inline-flex;
  align-items: center;
  gap: 7px;
  font-size: 8px;
  font-weight: 700;
  letter-spacing: .12em;
  color: #fff;
  background: rgba(20, 20, 18, 0.75);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
  padding: 5px 11px;
  border-radius: 100px;
  border: 1px solid rgba(255, 255, 255, 0.2);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
}

.status-dot {
  width: 6px;
  height: 6px;
  background: #22c55e;
  border-radius: 50%;
  box-shadow: 0 0 8px #22c55e;
  display: inline-block;
}

/* Type Art Artwork Fallbacks (for non-image or dynamic code states) */
.project-card .type-art {
  height: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
  padding: 10%;
  font: 400 clamp(24px, 3.8vw, 55px)/1.1 var(--display, Arial, sans-serif);
  letter-spacing: -.03em;
}
.project-card .type-art .outlined {
  color: transparent;
  -webkit-text-stroke: 1px var(--ink);
}
.project-card .art-api { background: #dbe8f2; }
.project-card .art-api .type-art {
  font-family: monospace;
  font-size: clamp(18px, 2.5vw, 36px);
  letter-spacing: -.07em;
  color: #1f4563;
  line-height: 1.35;
}
.project-card .art-chat { background: #dfed66; }
.project-card .art-creative { background: var(--red); color: white; }
.project-card .art-data { background: #e3d8f2; }
.project-card .art-face { background: #e8a681; }
.project-card .art-portfolio { background: #20201e; color: white; }

/* Metadata below the image */
.project-card-meta {
  padding: 22px 6px 8px;
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.meta-kicker {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 12px;
  font-size: 9px;
  font-weight: 700;
  letter-spacing: .12em;
}

.meta-kicker-left {
  display: flex;
  align-items: baseline;
  gap: 10px;
}

.meta-num {
  font-family: Georgia, serif;
  font-style: italic;
  font-size: 16px;
  color: var(--red);
  line-height: 1;
}

.meta-type {
  color: var(--ink);
  font-weight: 800;
}

.meta-pill {
  font-size: 8px;
  font-weight: 800;
  letter-spacing: .1em;
  padding: 3px 9px;
  border-radius: 4px;
  background: rgba(32, 32, 30, 0.06);
  color: var(--muted);
  white-space: nowrap;
}

.project-card-heading {
  display: flex;
  align-items: baseline;
  justify-content: space-between;
  gap: 16px;
  margin: 0;
}

.project-card-title {
  font-size: clamp(25px, 2.4vw, 36px);
  font-weight: 600;
  line-height: 1.12;
  letter-spacing: -.045em;
  color: var(--ink);
  margin: 0;
  transition: color .3s ease;
  overflow-wrap: anywhere;
}

.project-card:hover .project-card-title {
  color: var(--red);
}

.project-card-btn {
  display: grid;
  place-items: center;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  border: 1px solid var(--line);
  color: var(--ink);
  flex-shrink: 0;
  transition: all .35s cubic-bezier(.2, .7, .2, 1);
}

.project-card:hover .project-card-btn {
  background: var(--red);
  border-color: var(--red);
  color: #fff;
  transform: translate(3px, -3px) rotate(45deg);
  box-shadow: 0 4px 14px rgba(250, 69, 42, 0.35);
}

.project-card-desc {
  font-size: 13px;
  line-height: 1.6;
  color: var(--muted);
  margin: 0;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.project-card-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
  margin-top: 2px;
}

.tag-chip {
  font-size: 10px;
  font-weight: 600;
  letter-spacing: .02em;
  padding: 4px 11px;
  border-radius: 30px;
  background: #f0efe8;
  color: var(--ink);
  border: 1px solid rgba(32, 32, 30, 0.08);
  transition: all .25s ease;
}

.project-card:hover .tag-chip {
  background: #e6e5dc;
  border-color: rgba(32, 32, 30, 0.16);
}

.project-card-footer {
  display: flex;
  align-items: center;
  gap: 14px;
  margin-top: 8px;
  padding-top: 14px;
  border-top: 1px dashed rgba(32, 32, 30, 0.14);
}

.footer-label {
  font-size: 9px;
  font-weight: 800;
  letter-spacing: .14em;
  color: var(--ink);
  transition: color .3s ease;
}

.footer-line {
  flex: 1;
  height: 1px;
  background: rgba(32, 32, 30, 0.14);
  transform-origin: left;
  transition: transform .4s ease, background .3s ease;
}

.footer-icon {
  font-size: 15px;
  line-height: 1;
  color: var(--muted);
  transition: transform .3s ease, color .3s ease;
}

.project-card:hover .footer-label {
  color: var(--red);
}

.project-card:hover .footer-line {
  background: var(--red);
  transform: scaleX(1.04);
}

.project-card:hover .footer-icon {
  color: var(--red);
  transform: translate(3px, -3px);
}

.artwork-note {
  font-size: 11px;
  color: var(--muted);
  margin-top: 60px;
  max-width: 540px;
  line-height: 1.6;
}

@media (max-width: 900px) {
  .work-grid {
    gap: 40px 24px;
  }
  .work-grid .project-card:nth-child(even) {
    margin-top: 40px;
  }
}

@media (max-width: 760px) {
  .page-heading {
    padding-top: 30px;
    padding-bottom: 40px;
  }
  .page-display {
    font-size: 19vw;
  }
  .page-intro {
    display: block;
    margin-top: 25px;
  }
  .page-intro p {
    font-size: 13px;
  }
  .page-intro > span {
    display: block;
    margin-top: 20px;
    font-size: 8px;
  }
  .work-toolbar {
    display: block;
    padding: 17px 0;
    margin-bottom: 30px;
  }
  .work-toolbar > span {
    font-size: 8px;
  }
  .filters {
    gap: 6px;
    margin-top: 12px;
  }
  .filters button {
    padding: 8px 12px;
    font-size: 8px;
  }
  .work-grid {
    grid-template-columns: 1fr;
    gap: 32px;
  }
  .work-grid .project-card:nth-child(even) {
    margin-top: 0;
  }
  .project-card {
    padding: 12px;
  }
  .project-card-title {
    font-size: 24px;
  }
  .project-card .cover-number,
  .project-card-status {
    top: 10px;
    font-size: 7px;
    padding: 4px 8px;
  }
  .project-card .cover-number {
    left: 10px;
  }
  .project-card-status {
    right: 10px;
  }
  .project-card .cover-caption,
  .project-card .cover-view {
    bottom: 10px;
    font-size: 7px;
    padding: 5px 9px;
  }
  .project-card .cover-caption {
    left: 10px;
  }
  .project-card .cover-view {
    right: 10px;
  }
}
</style>

<script>
(() => {
  // Category Filter Functionality
  const filterButtons = $$('.filters button');
  const cards = $$('.work-grid .project-card');
  const countEl = $('#work-count');
  const statusEl = $('#filter-status');

  filterButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const filter = btn.dataset.filter;
      
      filterButtons.forEach(b => {
        b.classList.remove('active');
        b.setAttribute('aria-pressed', 'false');
      });
      btn.classList.add('active');
      btn.setAttribute('aria-pressed', 'true');

      let visibleCount = 0;
      cards.forEach(card => {
        const cat = card.dataset.category;
        const matches = (filter === 'all' || cat === filter);
        if (matches) {
          card.removeAttribute('hidden');
          visibleCount++;
        } else {
          card.setAttribute('hidden', '');
        }
      });

      const formatted = String(visibleCount).padStart(2, '0');
      if (countEl) countEl.textContent = `${formatted} ${visibleCount === 1 ? 'PROJECT' : 'PROJECTS'}`;
      if (statusEl) statusEl.textContent = `Showing ${visibleCount} projects for ${btn.textContent.trim()}`;

      if (window.gsap && !document.body.classList.contains('motion-paused')) {
        const visibleCards = cards.filter(c => !c.hasAttribute('hidden'));
        gsap.fromTo(visibleCards, { opacity: 0, y: 25 }, { opacity: 1, y: 0, duration: 0.45, stagger: 0.06, ease: 'power3.out' });
      }

      window.lenis?.resize();
      if (window.ScrollTrigger) ScrollTrigger.refresh();
    });
  });

  // Entrance animations
  if (window.gsap && !document.body.classList.contains('motion-paused')) {
    gsap.from('.page-heading [data-line-reveal]', {
      y: 60,
      opacity: 0,
      clipPath: 'inset(0 0 100% 0)',
      duration: 1.05,
      stagger: .1,
      ease: 'power4.out',
      clearProps: 'transform,opacity,clipPath'
    });
    
    if (window.ScrollTrigger) {
      cards.forEach(card => {
        gsap.from(card, {
          y: 40,
          opacity: 0,
          duration: .8,
          ease: 'power3.out',
          clearProps: 'transform,opacity',
          scrollTrigger: {
            trigger: card,
            start: 'top 92%',
            once: true
          }
        });
      });
    }
  }
})();
</script>
