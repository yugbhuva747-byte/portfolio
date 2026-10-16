<?php
/**
 * Site Header & Fullscreen Menu Drawer
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/../includes/config.php';

$pageActive = $pageActive ?? 'index';

$navLinks = [
    ['url' => url('index.php'), 'name' => 'Index', 'key' => 'index', 'num' => '01'],
    ['url' => url('work.php'), 'name' => 'Work', 'key' => 'work', 'num' => '02'],
    ['url' => url('about.php'), 'name' => 'About', 'key' => 'about', 'num' => '03'],
    ['url' => url('contact.php'), 'name' => 'Contact', 'key' => 'contact', 'num' => '04'],
];

$currentIndexNumber = '01';
$currentLabel = strtoupper($pageActive);
foreach ($navLinks as $item) {
    if ($item['key'] === $pageActive) {
        $currentIndexNumber = $item['num'];
        $currentLabel = strtoupper($item['name']);
        break;
    }
}
if ($pageActive === 'project') {
    $currentIndexNumber = '02';
    $currentLabel = 'PROJECT';
}
?>
<!-- Site Header -->
<header class="site-header">
  <a class="identity" href="<?= url('index.php') ?>" aria-label="Yug Bhuva home">
    <span class="identity-mark">YB<span>®</span></span>
    <span class="identity-name">YUG BHUVA<br><span>DEVELOPER & CREATIVE THINKER</span></span>
  </a>

  <div class="header-index">
    <span><?= $currentIndexNumber ?> / 04</span>
    <span><?= $currentLabel ?></span>
  </div>

  <div class="header-actions">
    <a class="header-contact" href="<?= url('contact.php') ?>">START A CONVERSATION <span>↗</span></a>
    <button class="menu-button" aria-haspopup="dialog" aria-expanded="false" aria-controls="site-menu">
      INDEX <span class="menu-lines"><i></i><i></i></span>
    </button>
  </div>
</header>

<!-- Fullscreen Navigation Menu Modal -->
<dialog id="site-menu" class="site-menu" aria-labelledby="menu-title">
  <div class="menu-head">
    <span class="menu-logo">YB®</span>
    <span id="menu-title">A LOOK AROUND</span>
    <button class="menu-close" aria-label="Close navigation">CLOSE <span>×</span></button>
  </div>
  
  <div class="menu-body">
    <div class="menu-portrait">
      <img src="<?= url('assets/portrait.jpeg') ?>" alt="Yug Bhuva" width="960" height="1280">
      <p>ONE DEVELOPER.<br>MANY POSSIBILITIES.</p>
    </div>
    <nav aria-label="Main navigation">
      <?php foreach ($navLinks as $l): ?>
        <a href="<?= $l['url'] ?>" <?= $pageActive === $l['key'] ? 'aria-current="page"' : '' ?>>
          <span><?= $l['num'] ?></span>
          <strong><?= $l['name'] ?></strong>
          <span class="menu-arrow">↗</span>
        </a>
      <?php endforeach; ?>
    </nav>
  </div>

  <div class="menu-bottom">
    <a href="mailto:yugbhuva747@gmail.com">yugbhuva747@gmail.com ↗</a>
    <span>AHMEDABAD, INDIA / <span class="local-time">--:-- IST</span></span>
  </div>
</dialog>

<style>
.site-header {
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 var(--pad);
  gap: 25px;
  border-bottom: 1px solid var(--line);
  background: var(--paper);
  position: relative;
  z-index: 25;
}

.identity {
  display: flex;
  align-items: center;
  gap: 18px;
}

.identity-mark {
  font-family: var(--display);
  font-size: 43px;
  line-height: 1;
  letter-spacing: -3px;
}

.identity-mark > span {
  font-size: 12px;
  vertical-align: top;
  letter-spacing: 0;
  position: relative;
  top: 5px;
}

.identity-name {
  font-size: 10px;
  font-weight: 800;
  line-height: 1.6;
  letter-spacing: .04em;
}

.identity-name > span {
  font-size: 8px;
  font-weight: 500;
  color: var(--muted);
}

.header-index {
  font-size: 9px;
  display: flex;
  gap: 20px;
  color: var(--muted);
  margin-left: auto;
  margin-right: 6vw;
  letter-spacing: .05em;
  font-weight: 700;
}

.header-index > span:last-child {
  color: var(--ink);
}

.header-actions {
  display: flex;
  align-items: center;
  gap: 35px;
  font-size: 9px;
  font-weight: 700;
}

.header-contact {
  border-bottom: 1px solid var(--line);
  padding: 8px 0;
  transition: color .25s ease, border-color .25s ease;
}

.header-contact:hover {
  color: var(--red);
  border-color: var(--red);
}

.header-contact span {
  padding-left: 16px;
}

.menu-button {
  display: flex;
  align-items: center;
  gap: 16px;
  font-size: 10px;
  font-weight: 700;
  min-height: 44px;
}

.menu-lines {
  display: grid;
  gap: 6px;
  width: 24px;
}

.menu-lines i {
  height: 1px;
  background: var(--ink);
  transition: width .3s ease;
}

.menu-button:hover .menu-lines i:last-child {
  width: 60%;
}

/* Fullscreen Menu Dialog */
.site-menu {
  border: 0;
  padding: 30px var(--pad);
  background: var(--red);
  color: var(--ink);
  width: 100vw;
  max-width: 100vw;
  height: 100dvh;
  max-height: 100dvh;
  margin: 0;
  overflow: auto;
}

.site-menu::backdrop {
  background: var(--red);
}

.menu-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  border-bottom: 1px solid rgba(32, 32, 30, .33);
  padding-bottom: 20px;
  font-size: 10px;
  font-weight: 700;
  letter-spacing: .06em;
}

.menu-logo {
  font-family: var(--display);
  font-size: 40px;
}

.menu-close {
  font-size: 11px;
  font-weight: 800;
  display: flex;
  align-items: center;
  gap: 25px;
  min-height: 44px;
}

.menu-close > span {
  font-size: 32px;
  line-height: 1;
}

.menu-body {
  display: grid;
  grid-template-columns: 1fr 1.8fr;
  gap: 12vw;
  align-items: center;
  min-height: calc(100dvh - 195px);
}

.menu-portrait {
  max-width: 270px;
  transform: rotate(-5deg);
  margin-left: 3vw;
}

.menu-portrait img {
  height: 280px;
  filter: grayscale(1);
  border: 1px solid rgba(32, 32, 30, .2);
}

.menu-portrait p {
  font-size: 12px;
  font-weight: 800;
  margin-top: 20px;
  line-height: 1.5;
}

.menu-body nav {
  padding: 25px 0;
}

.menu-body nav a {
  display: flex;
  align-items: center;
  gap: 25px;
  border-bottom: 1px solid rgba(32, 32, 30, .33);
  transition: color .25s ease;
  padding: 10px 0;
}

.menu-body nav a:hover {
  color: var(--paper);
}

.menu-body nav a > span:first-child {
  font-size: 10px;
  align-self: flex-start;
  margin-top: 20px;
  font-weight: 700;
}

.menu-body nav strong {
  font: 400 clamp(60px, 7vw, 120px) / 1.27 var(--display);
  text-transform: uppercase;
  letter-spacing: -.02em;
}

.menu-arrow {
  margin-left: auto;
  font-size: 50px;
  transition: transform .3s ease;
}

.menu-body nav a:hover .menu-arrow {
  transform: rotate(45deg);
}

.menu-bottom {
  display: flex;
  justify-content: space-between;
  font-size: 10px;
  font-weight: 700;
  border-top: 1px solid rgba(32, 32, 30, .33);
  padding-top: 20px;
}

@media (max-width: 1100px) {
  .header-index {
    display: none;
  }
}

@media (max-width: 760px) {
  .site-header {
    height: 80px;
  }
  .identity-mark {
    font-size: 36px;
  }
  .identity-name {
    font-size: 8px;
  }
  .identity-name > span {
    font-size: 6px;
  }
  .identity {
    gap: 12px;
  }
  .header-contact {
    display: none;
  }
  .header-actions {
    gap: 0;
  }
  .menu-button {
    font-size: 9px;
    gap: 10px;
  }
  .site-menu {
    padding: 20px var(--pad);
  }
  .menu-head {
    padding-bottom: 14px;
  }
  .menu-logo {
    font-size: 34px;
  }
  .menu-head > span:nth-child(2) {
    font-size: 8px;
  }
  .menu-close {
    font-size: 9px;
    gap: 12px;
  }
  .menu-body {
    display: block;
    min-height: calc(100dvh - 200px);
    padding: 20px 0;
  }
  .menu-portrait {
    display: none;
  }
  .menu-body nav strong {
    font-size: clamp(65px, 17vw, 100px);
  }
  .menu-body nav a {
    gap: 20px;
  }
  .menu-arrow {
    font-size: 38px;
  }
  .menu-bottom {
    flex-direction: column;
    gap: 20px;
    font-size: 9px;
  }
}
</style>

<script>
(() => {
  const menu = $('#site-menu');
  const menuButton = $('.menu-button');
  const menuClose = $('.menu-close');

  function closeMenu() {
    if (!menu) return;
    menu.close();
    document.body.classList.remove('menu-open');
    menuButton?.setAttribute('aria-expanded', 'false');
    if (!document.body.classList.contains('motion-paused')) {
      window.lenis?.start();
    }
  }

  menuButton?.addEventListener('click', () => {
    if (!menu) return;
    menu.showModal();
    document.body.classList.add('menu-open');
    menuButton.setAttribute('aria-expanded', 'true');
    window.lenis?.stop();

    if (window.gsap && !document.body.classList.contains('motion-paused')) {
      gsap.fromTo('.menu-body nav a', 
        { y: 45, opacity: 0 }, 
        { y: 0, opacity: 1, duration: .65, stagger: .065, ease: 'power3.out' }
      );
      gsap.fromTo('.menu-portrait', 
        { rotation: -12, opacity: 0 }, 
        { rotation: -5, opacity: 1, duration: .8 }
      );
    }
  });

  menuClose?.addEventListener('click', closeMenu);
  menu?.addEventListener('cancel', closeMenu);
  menu?.addEventListener('close', () => {
    document.body.classList.remove('menu-open');
    menuButton?.setAttribute('aria-expanded', 'false');
    if (!document.body.classList.contains('motion-paused')) {
      window.lenis?.start();
    }
  });

  // Live IST Clock
  const updateTime = () => {
    try {
      const formatted = new Intl.DateTimeFormat('en-GB', {
        timeZone: 'Asia/Kolkata',
        hour: '2-digit',
        minute: '2-digit',
        hour12: false
      }).format(new Date()) + ' IST';
      $$('.local-time').forEach(e => e.textContent = formatted);
    } catch (err) {
      $$('.local-time').forEach(e => e.textContent = 'IST');
    }
  };
  updateTime();
  setInterval(updateTime, 60000);
})();
</script>
