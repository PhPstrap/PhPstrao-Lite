<?php
http_response_code(404);
$page_title = '404 Page Not Found';
$page_description = 'The page you were looking for could not be found.';
$page_slug = '404';
include __DIR__ . '/includes/header.php';
?>
<section class="section-padding">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-6">
        <p class="display-1 fw-bold text-primary">404</p>
        <h1 class="h2 fw-bold">Page Not Found</h1>
        <p class="text-muted mt-3">The page you were looking for doesn't exist or has been moved.</p>
        <a href="/" class="btn btn-primary mt-3">Go Home</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
