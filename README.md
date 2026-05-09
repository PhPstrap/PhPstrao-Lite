# PhPstrap Lite

PhPstrap Lite is a lightweight PHP + Bootstrap 5 starter kit for static websites, landing pages, guide sites, affiliate pages, and small business websites.

## What is included

- Bootstrap 5 local CSS and JS
- Shared PHP header, footer, navigation, and config
- Per-page SEO title, description, canonical, and Open Graph tags
- Optional Font Awesome support
- Optional dark mode toggle
- Optional ad slots
- Contact page with mailto link and optional social links
- Flat-file article/blog system using PHP meta files
- Sitemap generator and robots.txt
- Reusable sections: hero, features, pricing, FAQs, CTA
- Starter templates: business, SaaS, affiliate, local service, coming soon
- Elements reference page showing all Bootstrap 5 components

## Requirements

- PHP 8.0 or higher
- A web server with PHP support (Apache, Nginx, LiteSpeed, etc.)

## Setup

1. Upload the files to a PHP-enabled web server.
2. Edit `includes/site-config.php` (site name, URL, email, theme, analytics).
3. Update `robots.txt` with your real domain.
4. Set `$site_og_image` in `site-config.php` for social sharing previews.
5. Add or edit pages as needed.
6. Customize `assets/css/custom.css`.

## Adding a page

Create a file such as `services.php`:

```php
<?php
$page_title = 'Services';
$page_description = 'Learn about our services.';
$page_slug = 'services';
include __DIR__ . '/includes/header.php';
?>
<section class="section-padding">
  <div class="container">
    <h1>Services</h1>
    <p>Your content here.</p>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
```

## Adding an article

1. Create `blog/example.php` and set `$page_slug = 'blog/example'`.
2. Create `blog/meta/example.php` with title, slug, date, excerpt, cover image, and tags.
3. The article will appear on `/blog` automatically and be accessible at `/blog/example`.

## Contact page

The contact page uses a `mailto:` link driven by `$site_email` in `site-config.php`. Uncomment entries in `$social_links` to add social media buttons alongside the email card.
