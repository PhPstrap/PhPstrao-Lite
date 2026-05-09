<?php
$page_title = 'Blog';
$page_description = 'Latest articles and guides from PhPstrap Lite.';
$page_slug = 'blog';
include __DIR__ . '/includes/header.php';
$articles = get_articles();
?>
<section class="section-padding">
  <div class="container">
    <div class="text-center mb-5">
      <h1 class="fw-bold">Articles</h1>
      <p class="text-muted">Flat-file articles powered by PHP meta files.</p>
    </div>
    <div class="row g-4">
      <?php foreach ($articles as $article): ?>
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 border-0 shadow-sm rounded-4 card-hover">
          <?php if (!empty($article['cover_image'])): ?><img src="<?= e($article['cover_image']) ?>" class="card-img-top article-cover" alt="<?= e($article['title']) ?>"><?php endif; ?>
          <div class="card-body p-4">
            <p class="small text-muted mb-2"><?= e($article['date'] ?? '') ?></p>
            <h5 class="fw-bold"><a href="/blog/<?= e($article['slug']) ?>"><?= e($article['title']) ?></a></h5>
            <p class="text-muted"><?= e($article['excerpt'] ?? '') ?></p>
            <a href="/blog/<?= e($article['slug']) ?>" class="btn btn-outline-primary btn-sm">Read More</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>
