<!-- Skip Link & Progress Indicators -->
<a class="skip" href="#main">Skip to content</a>
<div class="reading-progress" aria-hidden="true"></div>
<div class="page-wipe" aria-hidden="true">
  <i></i><i></i><i></i><i></i>
  <span>YB®</span>
</div>
<div class="follow-cursor" aria-hidden="true">
  <span>VIEW</span>
</div>

<style>
.skip:not(:focus) {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  white-space: nowrap;
}

.skip:focus {
  position: fixed;
  z-index: 10000;
  left: 20px;
  top: 20px;
  background: var(--paper);
  padding: 15px;
  border: 2px solid var(--red);
}

.reading-progress {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: var(--red);
  transform: scaleX(0);
  transform-origin: left;
  z-index: 110;
  pointer-events: none;
}

.page-wipe {
  position: fixed;
  inset: 0;
  z-index: 1000;
  pointer-events: none;
  display: flex;
  visibility: hidden;
}

.page-wipe i {
  background: var(--red);
  width: 25%;
  height: 100%;
  transform: scaleY(0);
  transform-origin: bottom;
}

.page-wipe > span {
  position: absolute;
  inset: 0;
  display: grid;
  place-items: center;
  font: 400 90px var(--display);
  opacity: 0;
}

.follow-cursor {
  position: fixed;
  left: 0;
  top: 0;
  pointer-events: none;
  z-index: 50;
  width: 78px;
  height: 78px;
  border-radius: 50%;
  background: var(--red);
  color: white;
  display: grid;
  place-items: center;
  font-size: 8px;
  font-weight: 800;
  transform: translate(-50%, -50%) scale(0);
  opacity: 0;
  transition: opacity .2s ease;
}

@media (max-width: 760px) {
  .follow-cursor {
    display: none !important;
  }
}

@media (prefers-reduced-motion: reduce) {
  .follow-cursor {
    display: none !important;
  }
}
</style>

<script>
(() => {
  // Reading Progress Bar
  const progressEl = $('.reading-progress');
  function updateProgress() {
    const length = document.documentElement.scrollHeight - innerHeight;
    if (progressEl) {
      progressEl.style.transform = `scaleX(${length > 0 ? scrollY / length : 0})`;
    }
  }

  if (window.lenis && progressEl) {
    window.lenis.on('scroll', (e) => {
      progressEl.style.transform = `scaleX(${e.progress})`;
    });
  } else {
    let scrollQueued = false;
    addEventListener('scroll', () => {
      if (!scrollQueued) {
        requestAnimationFrame(() => {
          updateProgress();
          scrollQueued = false;
        });
        scrollQueued = true;
      }
    }, { passive: true });
  }
  updateProgress();

  // Follow Cursor
  const cursor = $('.follow-cursor');
  if (cursor && matchMedia('(pointer:fine)').matches) {
    let hasGsap = Boolean(window.gsap);
    
    if (hasGsap) {
      const xTo = gsap.quickTo(cursor, 'x', { duration: .2, ease: 'power3' });
      const yTo = gsap.quickTo(cursor, 'y', { duration: .2, ease: 'power3' });
      
      addEventListener('pointermove', e => {
        if (!document.body.classList.contains('motion-paused')) {
          xTo(e.clientX);
          yTo(e.clientY);
        }
      });

      $$('[data-cursor]').forEach(el => {
        el.addEventListener('pointerenter', () => {
          if (document.body.classList.contains('motion-paused')) return;
          cursor.firstElementChild.textContent = el.dataset.cursor || 'VIEW';
          gsap.to(cursor, { opacity: 1, scale: 1, duration: .25 });
        });
        el.addEventListener('pointerleave', () => {
          gsap.to(cursor, { opacity: 0, scale: 0, duration: .2 });
        });
      });
    } else {
      addEventListener('pointermove', e => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
      });
      $$('[data-cursor]').forEach(el => {
        el.addEventListener('pointerenter', () => {
          cursor.firstElementChild.textContent = el.dataset.cursor || 'VIEW';
          cursor.style.opacity = '1';
          cursor.style.transform = 'translate(-50%, -50%) scale(1)';
        });
        el.addEventListener('pointerleave', () => {
          cursor.style.opacity = '0';
          cursor.style.transform = 'translate(-50%, -50%) scale(0)';
        });
      });
    }
  }
})();
</script>
