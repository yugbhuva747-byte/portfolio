<!-- Infinite Marquee Ticker -->
<div class="ticker" aria-hidden="true">
  <div>
    DIGITAL CRAFT <b>×</b> HUMAN PERSPECTIVE <b>×</b> ALWAYS EVOLVING <b>×</b>
    DIGITAL CRAFT <b>×</b> HUMAN PERSPECTIVE <b>×</b> ALWAYS EVOLVING <b>×</b>
    DIGITAL CRAFT <b>×</b> HUMAN PERSPECTIVE <b>×</b> ALWAYS EVOLVING <b>×</b>
  </div>
</div>

<style>
.ticker {
  overflow: hidden;
  margin-top: 45px;
  border-block: 1px solid var(--line);
  padding: 18px 0;
  background: var(--paper);
}

.ticker > div {
  white-space: nowrap;
  font: 400 30px / 1.2 var(--display);
  word-spacing: 12px;
  width: max-content;
  animation: marquee 32s linear infinite;
}

.ticker b {
  font-weight: 400;
  color: var(--red);
  padding: 0 20px;
}

@keyframes marquee {
  to {
    transform: translateX(-50%);
  }
}

@media (max-width: 760px) {
  .ticker {
    margin-top: 20px;
    padding: 14px 0;
  }
  .ticker > div {
    font-size: 22px;
  }
}
</style>

<script>
(() => {
  // Ticker animation respects reduced motion or global motion-paused class
  const tickerEl = $('.ticker > div');
  if (tickerEl && window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    tickerEl.style.animation = 'none';
  }
})();
</script>
