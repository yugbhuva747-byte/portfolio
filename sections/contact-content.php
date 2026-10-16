<?php
/**
 * Contact Page Content & Interactive Email Composer
 * Yug Bhuva Portfolio
 */

require_once __DIR__ . '/../includes/config.php';
?>
<!-- Contact Page Section -->
<section class="contact-page section">
  <div class="section-label">
    <span>A GOOD PLACE TO START</span>
    <span>04 / CONTACT</span>
  </div>

  <h1 class="display contact-display">
    <span data-line-reveal>GOOD THINGS</span>
    <span data-line-reveal>START WITH</span>
    <span class="red-type" data-line-reveal>HELLO<span class="outline-type">.</span></span>
  </h1>

  <div class="contact-grid">
    <div class="contact-info">
      <p class="large-copy">An idea, an opportunity,<br>or a conversation.<br>I’d like to hear it.</p>
      
      <a class="contact-email" href="mailto:yugbhuva747@gmail.com">yugbhuva747@gmail.com ↗</a>
      
      <button class="copy-email" id="copy-email-btn" type="button">
        COPY EMAIL <span>⧉</span>
      </button>
      <span class="copy-status" id="copy-status-msg" role="status"></span>

      <div class="contact-info-list">
        <div>
          <span>BASED IN</span>
          <p>Ahmedabad, Gujarat, India</p>
        </div>
        <div>
          <span>PHONE</span>
          <a href="tel:+919016788545">+91 90167 88545 ↗</a>
        </div>
        <div>
          <span>ELSEWHERE</span>
          <p>
            <a href="https://github.com/yugbhuva747-byte" target="_blank" rel="noopener">GitHub ↗</a>
            <a href="https://www.linkedin.com/in/yug-bhuva-80682a366/" target="_blank" rel="noopener">LinkedIn ↗</a>
          </p>
        </div>
      </div>
    </div>

    <!-- Interactive Email Composer Form -->
    <form class="contact-form" id="contact-form">
      <span class="form-intro">TELL ME A LITTLE ABOUT IT.</span>
      
      <label>
        <span>01 / YOUR NAME</span>
        <input name="name" id="form-name" required autocomplete="name" placeholder="What should I call you?" maxlength="100">
      </label>

      <label>
        <span>02 / YOUR EMAIL</span>
        <input type="email" name="email" id="form-email" required autocomplete="email" placeholder="you@example.com" maxlength="200">
      </label>

      <label>
        <span>03 / WHAT’S ON YOUR MIND?</span>
        <textarea name="message" id="form-message" required minlength="10" maxlength="5000" rows="4" placeholder="The idea, the opportunity, the details…"></textarea>
      </label>

      <button type="submit" class="draft-button">
        <span>CREATE EMAIL DRAFT</span>
        <span>↗</span>
      </button>
      
      <p class="form-note">Opens your default email client with these details prefilled so you can review and send.</p>
      <p id="draft-status" role="status"></p>
    </form>
  </div>
</section>

<style>
.contact-page {
  padding-top: 45px;
}

.contact-display {
  font-size: clamp(80px, 12.5vw, 200px);
}

.contact-grid {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 11vw;
  margin-top: 90px;
}

.contact-info .large-copy {
  margin-bottom: 35px;
}

.contact-email {
  display: block;
  font-size: clamp(16px, 1.9vw, 30px);
  letter-spacing: -.045em;
  line-height: 1.5;
  word-break: break-word;
  transition: color .25s ease;
}

.contact-email:hover {
  color: var(--red);
}

.copy-email {
  padding: 13px 0;
  font-size: 9px;
  font-weight: 800;
  letter-spacing: .06em;
  display: inline-flex;
  align-items: center;
  gap: 30px;
  transition: color .25s ease;
}

.copy-email:hover {
  color: var(--red);
}

.copy-status {
  font-size: 10px;
  display: block;
  min-height: 18px;
  color: var(--muted);
  margin-bottom: 10px;
}

.contact-info-list {
  margin-top: 40px;
  display: grid;
  gap: 22px;
}

.contact-info-list span {
  font-size: 8px;
  letter-spacing: .08em;
  color: var(--muted);
  font-weight: 700;
  display: block;
  margin-bottom: 4px;
}

.contact-info-list p, .contact-info-list a {
  font-size: 13px;
  transition: color .25s ease;
}

.contact-info-list a:hover {
  color: var(--red);
}

.contact-info-list p a + a {
  margin-left: 25px;
}

/* Contact Form */
.contact-form {
  border-top: 1px solid var(--ink);
  padding-top: 22px;
}

.form-intro {
  font-size: 10px;
  font-weight: 700;
  letter-spacing: .05em;
}

.contact-form label {
  display: block;
  padding: 30px 0 5px;
  border-bottom: 1px solid var(--line);
  transition: border-color .25s ease;
}

.contact-form label > span {
  display: block;
  font-size: 8px;
  font-weight: 700;
  letter-spacing: .06em;
  margin-bottom: 8px;
}

.contact-form input, .contact-form textarea {
  width: 100%;
  background: transparent;
  border: 0;
  outline: none;
  padding: 15px 0;
  font-size: 16px;
  color: var(--ink);
  border-radius: 0;
  resize: vertical;
}

.contact-form label:focus-within {
  border-color: var(--red);
}

.contact-form input::placeholder, .contact-form textarea::placeholder {
  color: #7d7d75;
}

.draft-button {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  background: var(--ink);
  color: var(--paper);
  padding: 20px;
  margin-top: 30px;
  font-size: 10px;
  font-weight: 800;
  letter-spacing: .06em;
  transition: background .3s ease, color .3s ease;
}

.draft-button:hover {
  background: var(--red);
  color: white;
}

.draft-button > span:last-child {
  font-size: 24px;
  line-height: 1;
}

.form-note, #draft-status {
  font-size: 10px;
  color: var(--muted);
  margin-top: 13px;
  line-height: 1.5;
}

@media (max-width: 760px) {
  .contact-page {
    padding-top: 30px;
  }
  .contact-display {
    font-size: 15vw;
  }
  .contact-grid {
    grid-template-columns: 1fr;
    gap: 50px;
    margin-top: 45px;
  }
  .contact-info .large-copy {
    font-size: 28px;
  }
  .contact-email {
    font-size: 23px;
  }
  .contact-info-list {
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-top: 30px;
  }
  .contact-info-list > div:last-child {
    grid-column: 1 / -1;
  }
}
</style>

<script>
(() => {
  // Copy Email to Clipboard
  const copyBtn = $('#copy-email-btn');
  const copyStatus = $('#copy-status-msg');

  copyBtn?.addEventListener('click', async () => {
    try {
      await navigator.clipboard.writeText('yugbhuva747@gmail.com');
      if (copyStatus) {
        copyStatus.textContent = 'Email address copied to clipboard!';
        setTimeout(() => copyStatus.textContent = '', 4000);
      }
    } catch {
      if (copyStatus) copyStatus.textContent = 'Please copy manually: yugbhuva747@gmail.com';
    }
  });

  // Contact Draft Composer
  const form = $('#contact-form');
  const draftStatus = $('#draft-status');

  form?.addEventListener('submit', e => {
    e.preventDefault();
    const name = $('#form-name')?.value.trim() || '';
    const email = $('#form-email')?.value.trim() || '';
    const message = $('#form-message')?.value.trim() || '';

    const subject = encodeURIComponent(`Portfolio Inquiry from ${name}`);
    const body = encodeURIComponent(`Hello Yug,\n\n${message}\n\nFrom,\n${name}\n${email}`);
    const mailto = `mailto:yugbhuva747@gmail.com?subject=${subject}&body=${body}`;

    if (draftStatus) draftStatus.textContent = 'Opening your email client with your prefilled draft…';
    window.location.href = mailto;
  });

  // Line reveal animations
  if (window.gsap && !document.body.classList.contains('motion-paused')) {
    gsap.from('.contact-page [data-line-reveal]', {
      y: 60,
      opacity: 0,
      clipPath: 'inset(0 0 100% 0)',
      duration: 1.05,
      stagger: .1,
      ease: 'power4.out',
      clearProps: 'transform,opacity,clipPath'
    });
  }
})();
</script>
