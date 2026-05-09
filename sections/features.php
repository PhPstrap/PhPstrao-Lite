<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Everything you need for a quick static site</h2>
      <p class="text-muted">Useful defaults without forcing a database, login system, or admin panel.</p>
    </div>
    <div class="row g-4">
      <?php $features = [
        ['icon'=>'fa-layer-group','title'=>'Reusable Sections','text'=>'Hero, features, pricing, FAQs, testimonials, and CTA blocks.'],
        ['icon'=>'fa-magnifying-glass','title'=>'SEO Friendly','text'=>'Page titles, descriptions, canonicals, Open Graph, robots, and sitemap.'],
        ['icon'=>'fa-newspaper','title'=>'Flat-File Blog','text'=>'Article pages powered by simple PHP meta files.'],
        ['icon'=>'fa-envelope','title'=>'Contact Form','text'=>'Simple PHP contact script with validation and spam honeypot.'],
        ['icon'=>'fa-palette','title'=>'Theme Options','text'=>'Adjust brand colours, navbar style, footer style, and dark mode.'],
        ['icon'=>'fa-rocket','title'=>'Landing Templates','text'=>'Business, SaaS, affiliate, local service, and coming soon starter layouts.'],
      ]; ?>
      <?php foreach ($features as $feature): ?>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm card-hover rounded-4">
          <div class="card-body p-4">
            <div class="fs-2 text-primary mb-3"><i class="fa-solid <?= e($feature['icon']) ?>"></i></div>
            <h5 class="fw-bold"><?= e($feature['title']) ?></h5>
            <p class="text-muted mb-0"><?= e($feature['text']) ?></p>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
