<section class="section-padding bg-body-tertiary">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Starter Templates</h2>
      <p class="text-muted">Copy a template to your root directory and customise it as your homepage.</p>
    </div>
    <div class="row g-4">
      <?php $templates = [
        ['icon' => 'fa-building',      'title' => 'Business',      'text' => 'Hero, features, and CTA for local businesses.',            'url' => '/templates/business-home'],
        ['icon' => 'fa-rocket',        'title' => 'SaaS',          'text' => 'Hero, pricing table, and FAQs for software products.',     'url' => '/templates/saas-home'],
        ['icon' => 'fa-star',          'title' => 'Affiliate',     'text' => 'Hero and feature comparison for affiliate pages.',         'url' => '/templates/affiliate-home'],
        ['icon' => 'fa-map-location-dot', 'title' => 'Local Service', 'text' => 'Simple hero and features for tradespeople and services.', 'url' => '/templates/local-service-home'],
        ['icon' => 'fa-clock',         'title' => 'Coming Soon',   'text' => 'Minimal placeholder page for sites in progress.',          'url' => '/templates/coming-soon'],
      ]; ?>
      <?php foreach ($templates as $tpl): ?>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm card-hover rounded-4">
          <div class="card-body p-4">
            <div class="fs-2 text-primary mb-3"><i class="fa-solid <?= e($tpl['icon']) ?>"></i></div>
            <h5 class="fw-bold"><?= e($tpl['title']) ?></h5>
            <p class="text-muted mb-3"><?= e($tpl['text']) ?></p>
            <a href="<?= e($tpl['url']) ?>" class="btn btn-outline-primary btn-sm" target="_blank">Preview</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
