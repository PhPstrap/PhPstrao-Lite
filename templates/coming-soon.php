<?php
$page_title = 'Coming Soon';
$page_description = 'A simple coming soon page.';
include __DIR__ . '/../includes/header.php';
?>
<section class="hero min-vh-100 d-flex align-items-center"><div class="container text-center"><h1 class="display-3 fw-bold">Coming Soon</h1><p class="lead">We are building something useful. Check back soon.</p><a class="btn btn-primary btn-lg" href="mailto:<?= e($site_email) ?>">Contact Us</a></div></section>
<?php include __DIR__ . '/../includes/footer.php'; ?>
