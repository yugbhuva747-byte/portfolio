# Yug Bhuva — Digital work. Human touch.

Modular PHP Architecture for Yug Bhuva's portfolio. Every section is encapsulated in its own `.php` file containing its HTML markup, scoped CSS (`<style>`), and JavaScript (`<script>`). No separate section CSS or JS files are needed.

## Run Locally

Run the PHP built-in server from the root of this folder:

```bash
php -S 127.0.0.1:8000
```

Open your browser at:
- **Root Website**: `http://127.0.0.1:8000/`
- **Standalone `php/` Folder**: `http://127.0.0.1:8000/php/`

You can also drop this folder into Apache, XAMPP (`htdocs`), WampServer, or any standard PHP host (PHP 7.4+ or 8.x).

---

## Folder Architecture

```
yug-portfolio/
├── index.php                      # Home page entry point
├── work.php                       # All Work catalog with real-time category filtering
├── about.php                      # About, Philosophy, Capabilities & Journey
├── contact.php                    # Contact information & email draft composer
├── project.php                    # Dynamic case study detail (?id=placement, etc.)
├── content/
│   └── projects.json              # Project database
├── assets/                        # Fonts, images, icons, and animation libraries
├── includes/
│   ├── config.php                 # Dynamic base URL resolution & escaping utilities
│   ├── data.php                   # Project data loader & cover artwork renderer
│   └── head.php                   # Meta tags, typography, CSS tokens & resets
├── sections/                      # Modular section files (HTML + <style> + <script>)
│   ├── cursor.php                 # Reading progress, page wipe & follow cursor
│   ├── header.php                 # Site header, identity & fullscreen menu drawer
│   ├── home-hero.php              # Headline with line reveals & interactive portrait hover
│   ├── ticker.php                 # Infinite animated marquee banner
│   ├── perspective.php            # Big bracket statement with word-by-word reveal
│   ├── featured-work.php          # 3 featured editorial project cards & wide CTA
│   ├── home-about.php             # About teaser section with large copy
│   ├── work-catalog.php           # 8-project grid with real-time category filters
│   ├── about-content.php          # Philosophy values, capabilities accordions & timeline
│   ├── contact-content.php        # Contact info, copy-email toast & mailto composer
│   ├── project-detail.php         # Dynamic case study layout, tags & next project banner
│   └── footer.php                 # Giant masthead, footer links, dynamic year & motion toggle
└── php/                           # Self-contained mirror folder
```

---

## Modular Sections (HTML + CSS + JS in Each File)

1. **[sections/home-hero.php](file:///sections/home-hero.php)**: Hero markup with Anton typography, line reveals, interactive portrait with hover circle mask (`--mx`, `--my`), and CTAs.
2. **[sections/header.php](file:///sections/header.php)**: Identity mark, index counter, and fullscreen menu drawer with rotated portrait, nav links, and live IST clock.
3. **[sections/cursor.php](file:///sections/cursor.php)**: Reading progress indicator, page wipe transition, and follow cursor with pointer tracking.
4. **[sections/ticker.php](file:///sections/ticker.php)**: Infinite animated ticker marquee.
5. **[sections/perspective.php](file:///sections/perspective.php)**: Big bracket statement with word-by-word reveal text splitting.
6. **[sections/featured-work.php](file:///sections/featured-work.php)**: 3 featured project cards with custom typographic cover arts.
7. **[sections/home-about.php](file:///sections/home-about.php)**: About teaser section with large copy and CTA button.
8. **[sections/work-catalog.php](file:///sections/work-catalog.php)**: Grid of all 8 projects with category filter buttons (`ALL WORK`, `FULL STACK`, `FRONTEND`, `AI & AUTOMATION`).
9. **[sections/about-content.php](file:///sections/about-content.php)**: About hero, 3 philosophy values, 4 interactive capabilities accordions (`<details>`), and journey timeline.
10. **[sections/contact-content.php](file:///sections/contact-content.php)**: Contact information, clipboard copy of email, and email draft composer form.
11. **[sections/project-detail.php](file:///sections/project-detail.php)**: Dynamic case study layout displaying project details, tools tags, links, and next project banner.
12. **[sections/footer.php](file:///sections/footer.php)**: Giant "LET'S TALK" masthead, footer links, dynamic year, and motion pause/resume toggle.
