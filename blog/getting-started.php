<?php
$meta = include __DIR__ . '/meta/getting-started.php';
$page_title = $meta['title'];
$page_description = $meta['excerpt'];
$page_slug = 'blog/getting-started';
include __DIR__ . '/../includes/header.php';
?>
<article class="section-padding">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <p class="text-muted"><?= e($meta['date']) ?></p>
        <h1 class="fw-bold"><?= e($meta['title']) ?></h1>
        <p class="lead"><?= e($meta['excerpt']) ?></p>
        <hr>
        <h2>1. Edit your config</h2>
        <p>Open <code>includes/site-config.php</code> and update your site name, URL, description, email, analytics, and theme options.</p>
        <h2>2. Add pages</h2>
        <p>Create a PHP file, set <code>$page_title</code>, <code>$page_description</code>, and include the shared header and footer.</p>
        <h2>3. Reuse sections</h2>
        <p>Copy blocks from the <code>sections</code> folder into any page.</p>
      </div>
    </div>
  </div>
</article>
<?php include __DIR__ . '/../includes/footer.php'; ?>
