<?php
/**
 * SELECTED WORK / A SCROLLING PROJECT EXHIBITION
 * Replace your complete old featured section, style and script.
 * Keeps your config, data, renderProjectCover(), and project.php links.
 * Optional fixed-header offset: set --fw-nav:80px on .featured-work.
 */
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/data.php';
$featuredList = [];
foreach ([0, 2, 1] as $featuredIndex) {
    if (isset($projects[$featuredIndex])) $featuredList[] = $projects[$featuredIndex];
}
$featuredCount = count($featuredList);
$totalWork = isset($projects) && is_array($projects) ? count($projects) : 0;
?>
<section class="featured-work fw" aria-labelledby="fw-title" data-featured-showcase>
  <header class="fw__heading">
    <div class="fw__eyebrow"><span>A FEW THINGS I’VE MADE</span><span>02 / SELECTED WORK</span></div>
    <div class="fw__title-row"><h2 id="fw-title"><span>BUILT TO</span><span>MEAN <em>SOMETHING.</em></span></h2><p>Useful ideas.<br>Considered details.<br>Real things you can explore.</p></div>
  </header>

  <?php if ($featuredCount): ?>
  <div class="fw__journey">
    <div class="fw__stage">
      <div class="fw__toolbar"><span class="fw__chapter">THE SELECTED COLLECTION</span><div class="fw__index" aria-label="Choose a featured project">
      <?php foreach ($featuredList as $index => $p): ?>
        <button type="button" data-project-index="<?= $index ?>" aria-label="Show <?= escape($p['short'] ?? $p['name'] ?? 'project') ?>" <?= $index === 0 ? 'aria-current="true"' : '' ?>><span><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></span><i aria-hidden="true"></i></button>
      <?php endforeach; ?>
      </div><span class="fw__total"><?= str_pad((string)$featuredCount, 2, '0', STR_PAD_LEFT) ?> PROJECTS</span></div>

      <div class="fw__stack">
      <?php foreach ($featuredList as $index => $p): ?>
        <article class="fw__panel" data-category="<?= escape($p['category'] ?? '') ?>" data-project-name="<?= escape($p['short'] ?? $p['name'] ?? 'Project') ?>">
          <a class="fw__card" href="<?= escape(url('project.php?id=' . urlencode($p['id'] ?? ''))) ?>" data-cursor="EXPLORE">
            <div class="fw__info">
              <div class="fw__project-kicker"><span class="fw__number"><?= str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT) ?></span><span><?= escape(strtoupper($p['type'] ?? 'DEVELOPMENT')) ?></span></div>
              <h3><?= escape($p['short'] ?? $p['name'] ?? 'Project') ?></h3>
              <?php if (!empty($p['category'])): ?><p class="fw__category"><?= escape($p['category']) ?></p><?php endif; ?>
              <span class="fw__explore">EXPLORE PROJECT <span aria-hidden="true">↗</span></span>
              <span class="fw__edition" aria-hidden="true">SELECTED WORK / YUG BHUVA</span>
            </div>
            <div class="fw__visual">
              <div class="fw__cover"><?= renderProjectCover($p) ?></div>
              <span class="fw__visual-border" aria-hidden="true"></span>
              <span class="fw__corner fw__corner--tl" aria-hidden="true">+</span><span class="fw__corner fw__corner--br" aria-hidden="true">+</span>
            </div>
          </a>
        </article>
      <?php endforeach; ?>
      </div>
      <div class="fw__stage-footer"><span class="fw__instruction">SCROLL THROUGH THE WORK <span aria-hidden="true">↓</span></span><span class="fw__now" aria-hidden="true">01 / <?= str_pad((string)$featuredCount, 2, '0', STR_PAD_LEFT) ?></span></div>
      <div class="fw__progress" aria-hidden="true"><i></i></div>
    </div>
  </div>
  <?php endif; ?>

  <a class="fw__all" href="<?= escape(url('work.php')) ?>"><span>THERE’S MORE TO THE STORY</span><strong>All work <sup><?= str_pad((string)$totalWork, 2, '0', STR_PAD_LEFT) ?></sup></strong><span class="fw__all-arrow" aria-hidden="true">↗</span></a>
</section>

<style>
.fw{--fw-paper:#f0f0e9;--fw-ink:var(--ink,#20201e);--fw-red:var(--red,#e44132);--fw-line:var(--line,#cfcfc5);--fw-pad:var(--pad,clamp(20px,4.5vw,76px));--fw-nav:0px;position:relative;isolation:isolate;background:var(--fw-paper);color:var(--fw-ink);padding:clamp(60px,7vw,110px) var(--fw-pad) 70px;font-family:Arial,Helvetica,sans-serif}
.fw,.fw *{box-sizing:border-box}.fw a{color:inherit;text-decoration:none}.fw a:focus-visible,.fw button:focus-visible{outline:3px solid var(--fw-red);outline-offset:6px}
.fw__eyebrow{display:flex;justify-content:space-between;gap:20px;font-size:9px;letter-spacing:.12em;font-weight:600;margin-bottom:33px}
.fw__title-row{display:flex;justify-content:space-between;align-items:flex-end;gap:35px;margin-bottom:55px}
.fw h2{font-size:clamp(39px,6.4vw,110px);font-weight:900;line-height:1;letter-spacing:-.065em;margin:0}.fw h2>span{display:block}.fw h2 em{font-style:normal;color:var(--fw-red)}.fw__title-row>p{font-size:12px;line-height:1.8;margin:0 0 5px;flex-shrink:0;color:var(--muted,#72746b)}
.fw__stage{position:relative}.fw__toolbar{display:flex;justify-content:space-between;align-items:center;gap:20px;border-top:1px solid var(--fw-line);padding:18px 0;font-size:8px;letter-spacing:.13em}.fw__chapter{font-weight:700}.fw__total{color:var(--muted,#72746b)}
.fw__index{display:flex;gap:8px}.fw__index button{display:flex;gap:12px;align-items:center;background:transparent;border:1px solid transparent;color:inherit;font:500 10px/1 Arial,sans-serif;padding:11px 12px;cursor:pointer;min-height:38px}.fw__index button i{height:1px;width:16px;background:currentColor;opacity:.35}.fw__index button[aria-current=true]{color:var(--fw-red);border-color:var(--fw-red)}.fw__index button:hover{background:#e5e6dc}
.fw__panel{margin:15px 0 55px;position:relative;background:var(--fw-paper)}
.fw__card{display:grid;grid-template-columns:.45fr 1fr;gap:clamp(25px,5vw,80px);align-items:stretch}
.fw__info{display:flex;flex-direction:column;align-items:flex-start;justify-content:center;padding:20px 0;min-width:0}
.fw__project-kicker{display:flex;align-items:center;gap:22px;margin-bottom:34px}.fw__number{font-family:Georgia,serif;font-size:48px;line-height:1;color:var(--fw-red);font-style:italic}.fw__project-kicker>span:last-child{font-size:8px;letter-spacing:.12em;line-height:1.7}
.fw h3{font-size:clamp(30px,3.5vw,60px);font-weight:600;line-height:1.04;letter-spacing:-.055em;margin:0;overflow-wrap:anywhere}
.fw__category{font-size:11px;line-height:1.7;color:var(--muted,#72746b);margin:16px 0 0}
.fw__explore{display:inline-flex;align-items:center;gap:35px;font-size:9px;font-weight:700;letter-spacing:.08em;margin-top:32px;border-bottom:1px solid var(--fw-line);padding-bottom:12px}.fw__explore>span{font-size:26px;transition:transform .25s,color .25s}.fw__card:hover .fw__explore>span{transform:translate(4px,-4px);color:var(--fw-red)}
.fw__edition{margin-top:45px;font-size:6px;letter-spacing:.15em;color:var(--muted,#72746b)}
.fw__visual{position:relative;min-width:0;overflow:hidden;background:#e3e4db;aspect-ratio:1.42;transform-origin:50% 65%}
.fw__cover,.fw .project-art{position:relative;width:100%;height:100%;overflow:hidden}.fw .project-art{background:#e4e4dd;aspect-ratio:auto}
.fw .project-art>img{display:block;width:100%;height:100%;object-fit:cover;transition:transform .8s cubic-bezier(.2,.6,.2,1)}.fw__card:hover .project-art>img{transform:scale(1.035)}
.fw__visual-border{position:absolute;inset:0;border:1px solid #20201e10;pointer-events:none}.fw__corner{position:absolute;z-index:3;font:300 26px/1 Arial,sans-serif;mix-blend-mode:difference;color:white;pointer-events:none}.fw__corner--tl{left:13px;top:11px}.fw__corner--br{right:13px;bottom:11px}
.fw .cover-number,.fw .cover-caption{position:absolute;left:23px;z-index:2;font-size:8px;font-weight:700;letter-spacing:.06em}.fw .cover-number{top:25px;left:43px}.fw .cover-caption{bottom:22px;font-size:7px}.fw .cover-view{position:absolute;right:23px;bottom:23px;display:flex;align-items:center;gap:16px;font-size:8px;font-weight:700}.fw .cover-view b{display:grid;place-items:center;width:33px;height:33px;border-radius:50%;background:var(--paper,#f6f5f0);color:var(--fw-ink);font-size:21px;font-weight:400}
.fw .type-art{height:100%;display:flex;justify-content:center;flex-direction:column;padding:10%;font:400 clamp(30px,5vw,85px)/1.05 var(--display,Arial,sans-serif);letter-spacing:-.03em}.fw .type-art .outlined{color:transparent;-webkit-text-stroke:1px var(--fw-ink)}
.fw .art-api{background:#dbe8f2}.fw .art-api .type-art{font-family:monospace;font-size:clamp(21px,3.4vw,55px);letter-spacing:-.09em;color:#1f4563;line-height:1.35}.fw .art-api .code-line:nth-child(2){padding-left:15%}.fw .art-chat{background:#dfed66}.fw .art-creative{background:var(--fw-red)}.fw .art-creative .type-art{font-size:clamp(48px,7vw,110px);transform:rotate(-7deg);line-height:.92}.fw .art-creative .type-art span:nth-child(2){padding-left:23%}.fw .art-data{background:#e3d8f2}.fw .art-data .type-art{color:#684c87}.fw .art-data .outlined{-webkit-text-stroke-color:#684c87}.fw .art-face{background:#e8a681}.fw .art-face .type-art{font-size:clamp(32px,4.5vw,72px)}.fw .art-face .outlined{-webkit-text-stroke-color:#6c352a}.fw .art-portfolio img{object-position:50% 35%;filter:grayscale(1)}.fw .art-portfolio .cover-number,.fw .art-portfolio .cover-caption,.fw .art-portfolio .cover-view{color:white;text-shadow:0 1px 4px #000}
.fw__stage-footer{display:flex;align-items:center;justify-content:space-between;gap:25px;font-size:8px;letter-spacing:.12em;padding:22px 0}.fw__instruction{display:flex;align-items:center;gap:18px}.fw__instruction>span{font-size:20px}.fw__now{font-variant-numeric:tabular-nums}.fw__progress{height:2px;background:var(--fw-line)}.fw__progress>i{display:block;height:100%;background:var(--fw-red);transform:scaleX(0);transform-origin:left}
.fw__all{position:relative;display:grid;grid-template-columns:1fr auto auto;align-items:center;gap:50px;border-block:1px solid var(--fw-ink);padding:30px 0;margin-top:70px;overflow:hidden}.fw__all>span:first-child{font-size:9px;letter-spacing:.09em;font-weight:700}.fw__all strong{font-size:clamp(40px,5vw,76px);font-weight:400;line-height:1.1;letter-spacing:-.055em}.fw__all sup{font-size:12px;vertical-align:top;letter-spacing:0;margin-left:8px}.fw__all-arrow{display:block;font-size:55px;transition:transform .35s,color .35s}.fw__all:hover{color:var(--fw-red)}.fw__all:hover .fw__all-arrow{transform:translate(6px,-6px)}
/* Enhancements activate only when viewport and accessibility settings allow. */
.fw.is-showcase .fw__journey{height:var(--fw-runway,340svh)}
.fw.is-showcase .fw__stage{position:sticky;top:var(--fw-nav);height:calc(100svh - var(--fw-nav));display:flex;flex-direction:column;overflow:hidden}
.fw.is-showcase .fw__toolbar{flex:0 0 72px}
.fw.is-showcase .fw__stack{flex:1;min-height:0;position:relative;perspective:1400px}
.fw.is-showcase .fw__panel{position:absolute;inset:0;margin:0;visibility:hidden;pointer-events:none;background:transparent}
.fw.is-showcase .fw__panel.is-current{pointer-events:auto}
.fw.is-showcase .fw__card{height:100%;padding:12px 0}
.fw.is-showcase .fw__visual{aspect-ratio:auto;height:100%;max-height:650px;align-self:center}
.fw.is-showcase .fw__info{background:var(--fw-paper)}
.fw.is-showcase .fw__stage-footer{flex:0 0 66px}
.fw.is-showcase .fw__progress{flex:0 0 2px}
@media(max-width:900px){.fw__title-row{align-items:flex-start;flex-direction:column;gap:22px}.fw__title-row>p{font-size:11px}.fw__title-row>p br{display:none}.fw__card{grid-template-columns:.55fr 1fr;gap:25px}.fw h3{font-size:30px}.fw__project-kicker{gap:15px;margin-bottom:22px}.fw__number{font-size:35px}.fw__edition{margin-top:25px}.fw__chapter{font-size:7px}.fw__all{gap:25px}}
@media(max-width:650px){
 .fw{padding-top:55px;padding-bottom:45px}.fw__eyebrow{font-size:7px;margin-bottom:25px}.fw h2{font-size:clamp(35px,8.7vw,55px)}.fw__title-row{margin-bottom:35px;gap:18px}
 .fw__card{display:flex;flex-direction:column;gap:18px}.fw__info{padding:0}.fw__project-kicker{margin:0 0 12px;gap:15px}.fw__number{font-size:30px}.fw__project-kicker>span:last-child{font-size:7px}.fw h3{font-size:clamp(27px,7.8vw,40px);line-height:1.08}.fw__category{font-size:10px;margin:7px 0 0}.fw__edition{display:none}.fw__explore{font-size:8px;gap:20px;margin-top:14px;padding-bottom:6px}.fw__explore>span{font-size:20px}
 .fw__visual{aspect-ratio:1.18}.fw .type-art{font-size:12vw}.fw .art-api .type-art{font-size:7vw}.fw .art-creative .type-art{font-size:18vw}.fw .art-face .type-art{font-size:11vw}.fw .cover-caption{font-size:6px;left:16px}.fw .cover-view{font-size:6px;gap:10px;right:16px}.fw .cover-number{font-size:7px}
 .fw__total{display:none}.fw__toolbar{gap:10px}.fw__index{gap:2px}.fw__index button{padding:9px;font-size:9px;gap:8px}.fw__index button i{width:10px}.fw__chapter{font-size:6px}.fw__stage-footer{font-size:7px}
 .fw.is-showcase .fw__toolbar{flex-basis:60px}.fw.is-showcase .fw__card{gap:20px;padding:12px 0 5px}.fw.is-showcase .fw__info{flex-shrink:0}.fw.is-showcase .fw__visual{flex:1;width:100%;min-height:0}.fw.is-showcase .fw__stage-footer{flex-basis:55px}
 .fw__all{grid-template-columns:1fr auto;gap:15px;margin-top:45px;padding:22px 0}.fw__all>span:first-child{grid-column:1/-1;font-size:8px}.fw__all strong{font-size:42px}.fw__all-arrow{font-size:40px}
}
@media(prefers-reduced-motion:reduce){.fw *{animation:none!important;transition:none!important}}
</style>

<script>
(() => {
 const root=document.querySelector('[data-featured-showcase]');if(!root||root.dataset.ready)return;root.dataset.ready='1';
 const $=s=>root.querySelector(s),$$=s=>[...root.querySelectorAll(s)];
 const panels=$$('.fw__panel'),buttons=$$('.fw__index button'),journey=$('.fw__journey'),stage=$('.fw__stage');
 if(!panels.length||!journey)return;
 const visual=panels.map(el=>el.querySelector('.fw__visual')),info=panels.map(el=>el.querySelector('.fw__info')),covers=panels.map(el=>el.querySelector('.fw__cover'));
 const progress=$('.fw__progress>i'),counter=$('.fw__now'),instruction=$('.fw__instruction');
 const media=matchMedia('(prefers-reduced-motion:no-preference) and (min-height:680px)');
 const clamp=x=>Math.max(0,Math.min(1,x)),ease=t=>t*t*(3-2*t);
 let active=false,raf=0,last=-1;
 const count=panels.length,terminal=.90;
 function render(){
  raf=0;if(!active)return;
  const travel=Math.max(1,journey.offsetHeight-stage.offsetHeight),p=clamp(- (journey.getBoundingClientRect().top-parseFloat(getComputedStyle(stage).top||0))/travel);
  let position=clamp(p/terminal)*(count-1);
  // Preserve visibility of a project being navigated with the keyboard.
  const focused=panels.findIndex(el=>el.contains(document.activeElement));if(focused>=0)position=focused;
  const base=Math.floor(position),fraction=position-base;
  // Each project holds for a portion of its chapter before the next cover rises.
  const transition=ease(clamp((fraction-.30)/.65));
  const selected=Math.min(count-1,base+(transition>.5?1:0));
  panels.forEach((el,i)=>{
   const incoming=i===base+1&&transition>0,outgoing=i===base;
   const visible=incoming||outgoing;
   el.style.visibility=visible?'visible':'hidden';el.style.zIndex=String(i+1);
   const current=i===selected;el.classList.toggle('is-current',current);el.inert=!current;
   if(current)el.removeAttribute('aria-hidden');else el.setAttribute('aria-hidden','true');
   if(!visible)return;
   if(incoming){
    visual[i].style.clipPath=`inset(${100*(1-transition)}% 0 0 0)`;
    visual[i].style.transform=`translateY(${35*(1-transition)}px) rotateX(${6*(1-transition)}deg)`;
    covers[i].style.transform=`scale(${1.12-.12*transition})`;
    info[i].style.opacity=clamp((transition-.35)/.65);
    info[i].style.transform=`translateY(${30*(1-transition)}px)`;
   }else{
    visual[i].style.clipPath='inset(0% 0 0 0)';
    visual[i].style.transform=`scale(${1-.055*transition}) translateY(${-22*transition}px) rotateX(${-3*transition}deg)`;
    covers[i].style.transform=`scale(${1+.035*transition})`;
    info[i].style.opacity=1-clamp(transition/.60);
    info[i].style.transform=`translateY(${-24*transition}px)`;
   }
  });
  if(last!==selected){last=selected;buttons.forEach((b,i)=>{if(i===selected)b.setAttribute('aria-current','true');else b.removeAttribute('aria-current')});counter.textContent=String(selected+1).padStart(2,'0')+' / '+String(count).padStart(2,'0')}
  progress.style.transform=`scaleX(${clamp(p/terminal)})`;
  instruction.firstChild.textContent=p>=terminal?'THE COLLECTION CONTINUES BELOW ':'SCROLL THROUGH THE WORK ';
 }
 function schedule(){if(active&&!raf)raf=requestAnimationFrame(render)}
 function configure(){
  cancelAnimationFrame(raf);raf=0;active=media.matches&&count>1&&!document.body.classList.contains('motion-paused');last=-1;
  root.classList.toggle('is-showcase',active);root.style.setProperty('--fw-runway',(100+count*85)+'svh');
  panels.forEach((el,i)=>{el.removeAttribute('style');el.classList.remove('is-current');el.inert=false;el.removeAttribute('aria-hidden');[visual[i],info[i],covers[i]].forEach(n=>n.removeAttribute('style'))});
  progress.style.transform='scaleX(0)';if(active)render();
 }
 buttons.forEach((b,i)=>b.addEventListener('click',()=>{
  if(active){const travel=journey.offsetHeight-stage.offsetHeight,offset=parseFloat(getComputedStyle(stage).top)||0;
   const y=window.scrollY+journey.getBoundingClientRect().top-offset+travel*(i/(count-1))*terminal;
   window.scrollTo({top:y,behavior:'smooth'});
  }else panels[i].scrollIntoView({behavior:'auto',block:'center'});
 }));
 window.addEventListener('scroll',schedule,{passive:true});window.addEventListener('resize',schedule,{passive:true});window.addEventListener('pageshow',schedule);root.addEventListener('focusout',schedule);media.addEventListener('change',configure);
 if('ResizeObserver' in window){const ro=new ResizeObserver(schedule);ro.observe(stage);ro.observe(journey)}
 if('MutationObserver' in window)new MutationObserver(configure).observe(document.body,{attributes:true,attributeFilter:['class']});
 configure();
})();
</script>
