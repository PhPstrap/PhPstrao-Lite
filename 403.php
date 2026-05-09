<?php
http_response_code(403);
$page_title = '403 Forbidden';
$page_description = 'You do not have permission to access this page.';
$page_slug = '403';
include __DIR__ . '/includes/header.php';
?>
<section class="section-padding">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-6">
        <p class="display-1 fw-bold text-warning">403</p>
        <h1 class="h2 fw-bold">Forbidden</h1>
        <p class="text-muted mt-3">You don't have permission to access this page.</p>
        <a href="/" class="btn btn-primary mt-3">Go Home</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
