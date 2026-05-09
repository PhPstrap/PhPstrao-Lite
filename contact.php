<?php
$page_title = 'Contact';
$page_description = 'Get in touch — we\'d love to hear from you.';
$page_slug = 'contact';
include __DIR__ . '/includes/header.php';
?>
<section class="section-padding">
  <div class="container">

    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-6">
        <h1 class="fw-bold">Get in touch</h1>
        <p class="lead text-muted">Have a question or want to work together? Drop us an email and we'll get back to you.</p>
      </div>
    </div>

    <div class="row justify-content-center g-4">

      <!-- Email card -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4 card-hover">
          <div class="card-body">
            <div class="fs-1 text-primary mb-3"><i class="fa-solid fa-envelope"></i></div>
            <h5 class="fw-bold mb-1">Email us</h5>
            <p class="text-muted small mb-3">We typically reply within one business day.</p>
            <a href="mailto:<?= e($site_email) ?>" class="btn btn-primary">
              <?= e($site_email) ?>
            </a>
          </div>
        </div>
      </div>

      <?php if (!empty(array_filter($social_links))): ?>
      <!-- Social card -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm rounded-4 text-center p-4">
          <div class="card-body">
            <div class="fs-1 text-primary mb-3"><i class="fa-solid fa-share-nodes"></i></div>
            <h5 class="fw-bold mb-1">Follow us</h5>
            <p class="text-muted small mb-3">Find us on social media.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
              <?php foreach ($social_links as $icon => $url): ?>
                <?php if (!empty($url)): ?>
                  <a href="<?= e($url) ?>" class="btn btn-outline-secondary btn-sm" target="_blank" rel="noopener noreferrer">
                    <i class="<?= e($icon) ?>"></i>
                  </a>
                <?php endif; ?>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
