<?php
/**
 * Single Project Case Study Detail Section
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/data.php';

// Retrieve requested project by 'id' query param, or default to first project
$currentId = $_GET['id'] ?? 'placement';
$project = getProjectById($currentId, $projects) ?? ($projects[0] ?? []);

// Find next project in the array for recommendation
$currentIndex = 0;
foreach ($projects as $idx => $p) {
    if (($p['id'] ?? '') === ($project['id'] ?? '')) {
        $currentIndex = $idx;
        break;
    }
}
$nextIndex = ($currentIndex + 1) % count($projects);
$nextProject = $projects[$nextIndex] ?? [];
?>
<!-- Case Study Header -->
<section class="case-heading section">
  <a class="back-link" href="<?= url('work.php') ?>">← ALL WORK</a>
  
  <div class="case-meta">
    <span>PROJECT <?= escape($project['number'] ?? '01') ?> / 08</span>
    <span><?= strtoupper(escape($project['type'] ?? 'DEVELOPMENT')) ?></span>
    <span><?= strtoupper(escape($project['status'] ?? 'PROJECT STUDY')) ?></span>
  </div>

  <h1 class="case-title display" data-line-reveal><?= escape($project['name'] ?? 'Project') ?></h1>
  <p class="case-headline"><?= escape($project['headline'] ?? '') ?></p>
</section>

<!-- Case Study Visual Artwork -->
<section class="case-visual-wrap">
  <?= renderProjectCover($project, 'case-visual') ?>
</section>

<!-- Case Summary & Scope -->
<section class="case-summary section">
  <div class="case-info">
    <span>THE PROJECT</span>
    <h2><?= escape($project['short'] ?? ($project['name'] ?? '')) ?></h2>
    
    <div class="case-tags">
      <?php foreach (($project['tags'] ?? []) as $t): ?>
        <span><?= escape($t) ?></span>
      <?php endforeach; ?>
    </div>

    <div class="case-links">
      <?php if (!empty($project['url']) && empty($project['unavailable'])): ?>
        <a class="text-cta" href="<?= escape($project['url']) ?>" target="_blank" rel="noopener noreferrer">
          <?= strtoupper(escape($project['link'] ?? 'OPEN PROJECT')) ?> <span>↗</span>
        </a>
      <?php endif; ?>
      <a class="underlined-link" href="https://github.com/yugbhuva747-byte" target="_blank" rel="noopener noreferrer">
        GITHUB PROFILE <span>↗</span>
      </a>
    </div>
  </div>

  <div class="case-description">
    <span>CONTEXT & SCOPE</span>
    <p class="large-copy"><?= escape($project['description'] ?? '') ?></p>
    <?php if (!empty($project['note'])): ?>
      <p><?= escape($project['note']) ?></p>
    <?php endif; ?>

    <?php if (!empty($project['focus'])): ?>
      <h3>WHAT IT EXPLORES</h3>
      <ul>
        <?php foreach ($project['focus'] as $f): ?>
          <li><?= escape($f) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>

<!-- Next Project Recommendation Banner -->
<section class="next-project section">
  <span>KEEP EXPLORING / NEXT PROJECT</span>
  <a href="<?= url('project.php?id=' . urlencode($nextProject['id'] ?? '')) ?>" data-cursor="NEXT">
    <h2 class="display"><?= escape($nextProject['short'] ?? ($nextProject['name'] ?? 'Next')) ?></h2>
    <span>↗</span>
  </a>
</section>

<style>
.case-heading {
  padding-top: 40px;
  padding-bottom: 65px;
}

.back-link {
  font-size: 9px;
  font-weight: 700;
  letter-spacing: .05em;
  transition: color .2s ease;
}

.back-link:hover {
  color: var(--red);
}

.case-meta {
  display: flex;
  justify-content: space-between;
  gap: 25px;
  border-top: 1px solid var(--ink);
  margin-top: 45px;
  padding-top: 15px;
  font-size: 9px;
  font-weight: 700;
  letter-spacing: .06em;
}

.case-title {
  font-size: clamp(65px, 9.7vw, 155px);
  margin: 50px 0 25px;
  max-width: 1000px;
  text-transform: uppercase;
}

.case-headline {
  font-size: clamp(22px, 3vw, 44px);
  letter-spacing: -.04em;
  color: var(--muted);
  line-height: 1.35;
}

.case-visual-wrap {
  padding: 0 var(--pad);
}

.case-visual {
  position: relative;
  overflow: hidden;
  aspect-ratio: 1.95;
  border-radius: 14px;
  background: #e4e4dd;
}

.case-visual img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
}

.case-visual .cover-number {
  position: absolute;
  top: 24px;
  left: 24px;
  z-index: 2;
  font-family: monospace;
  font-size: 11px;
  font-weight: 800;
  letter-spacing: .12em;
  color: #fff;
  background: rgba(20, 20, 18, 0.75);
  backdrop-filter: blur(8px);
  padding: 6px 14px;
  border-radius: 100px;
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.case-visual .cover-caption {
  position: absolute;
  bottom: 24px;
  left: 24px;
  z-index: 2;
  font-size: 9px;
  font-weight: 800;
  letter-spacing: .14em;
  color: #fff;
  text-transform: uppercase;
  background: rgba(20, 20, 18, 0.7);
  backdrop-filter: blur(8px);
  padding: 7px 14px;
  border-radius: 4px;
  border: 1px solid rgba(255, 255, 255, 0.15);
}

.case-visual .type-art {
  font-size: clamp(70px, 12vw, 180px);
  padding: 7%;
}

.case-visual.art-api .type-art {
  font-size: clamp(35px, 6vw, 100px);
}

.case-visual .cover-view {
  display: none;
}

.case-visual.art-portfolio img {
  object-position: center 35%;
}

.case-summary {
  display: grid;
  grid-template-columns: 1fr 1.3fr;
  gap: 12vw;
}

.case-info > span, .case-description > span {
  font-size: 9px;
  letter-spacing: .04em;
  font-weight: 700;
}

.case-info h2 {
  font-size: 36px;
  letter-spacing: -.05em;
  line-height: 1.3;
  margin: 20px 0;
}

.case-tags {
  display: flex;
  gap: 6px;
  flex-wrap: wrap;
}

.case-tags > span {
  font-size: 9px;
  font-weight: 600;
  border: 1px solid var(--line);
  border-radius: 30px;
  padding: 5px 12px;
}

.case-links {
  display: flex;
  align-items: flex-start;
  flex-direction: column;
  gap: 15px;
  margin-top: 35px;
}

.case-description .large-copy {
  font-size: clamp(24px, 2.5vw, 38px);
  margin: 20px 0;
  line-height: 1.4;
}

.case-description > p:not(.large-copy) {
  font-size: 13px;
  color: var(--muted);
  line-height: 1.7;
}

.case-description h3 {
  font-size: 10px;
  font-weight: 700;
  margin-top: 35px;
  letter-spacing: .06em;
}

.case-description ul {
  list-style: none;
  padding: 0;
  margin: 15px 0 0;
}

.case-description li {
  font-size: 12px;
  padding: 12px 0;
  border-top: 1px solid var(--line);
}

.next-project {
  padding-top: 20px;
}

.next-project > span {
  font-size: 9px;
  font-weight: 700;
  letter-spacing: .06em;
}

.next-project > a {
  display: flex;
  align-items: center;
  justify-content: space-between;
  border-block: 1px solid var(--ink);
  padding: 30px 0;
  margin-top: 18px;
  gap: 35px;
  transition: color .3s ease;
}

.next-project h2 {
  font-size: clamp(45px, 7vw, 110px);
  text-transform: uppercase;
  transition: color .3s ease;
}

.next-project > a > span {
  font-size: 70px;
  line-height: 1;
}

.next-project a:hover {
  color: var(--red);
}

@media (max-width: 760px) {
  .case-heading {
    padding-top: 30px;
    padding-bottom: 35px;
  }
  .case-meta {
    margin-top: 25px;
    font-size: 7px;
    gap: 15px;
    flex-wrap: wrap;
  }
  .case-title {
    font-size: 14vw;
    margin: 30px 0 20px;
  }
  .case-headline {
    font-size: 25px;
    line-height: 1.4;
  }
  .case-visual {
    aspect-ratio: 1.15;
  }
  .case-visual .type-art {
    font-size: 17vw;
  }
  .case-visual.art-api .type-art {
    font-size: 8vw;
  }
  .case-summary {
    grid-template-columns: 1fr;
    gap: 50px;
  }
  .case-info h2 {
    font-size: 32px;
  }
  .case-links {
    margin-top: 20px;
  }
  .case-description .large-copy {
    font-size: 27px;
  }
  .next-project {
    padding-top: 0;
  }
  .next-project > a {
    gap: 25px;
  }
  .next-project h2 {
    font-size: 12vw;
  }
  .next-project > a > span {
    font-size: 40px;
  }
}
</style>

<script>
(() => {
  if (window.gsap && !document.body.classList.contains('motion-paused')) {
    gsap.from('.case-title', {
      y: 50,
      opacity: 0,
      clipPath: 'inset(0 0 100% 0)',
      duration: 1.05,
      ease: 'power4.out',
      clearProps: 'transform,opacity,clipPath'
    });
    
    if (window.ScrollTrigger) {
      $$('.case-info, .case-description, .next-project').forEach(el => {
        gsap.from(el, {
          y: 40,
          opacity: 0,
          duration: .8,
          ease: 'power3.out',
          clearProps: 'transform,opacity',
          scrollTrigger: {
            trigger: el,
            start: 'top 90%',
            once: true
          }
        });
      });
    }
  }
})();
</script>
