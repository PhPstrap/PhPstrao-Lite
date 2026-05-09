<?php
$nav_class = $navbar_style === 'light' ? 'navbar-light bg-light' : 'navbar-dark bg-dark';
$toggle_btn_class = $navbar_style === 'light' ? 'btn-outline-secondary' : 'btn-outline-light';
?>
<nav class="navbar navbar-expand-lg <?= e($nav_class) ?> sticky-top shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="/">
      <?php if (!empty($site_logo)): ?>
        <img src="<?= e($site_logo) ?>" alt="<?= e($site_name) ?>" style="height:32px;width:auto" class="me-2">
      <?php else: ?>
        <i class="fa-solid fa-code me-2"></i>
      <?php endif; ?>
      <?= e($site_name) ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php foreach ($nav_items as $item): ?>
          <li class="nav-item"><a class="nav-link <?= e(active_nav($item['url'])) ?>" href="<?= e($item['url']) ?>"><?= e($item['label']) ?></a></li>
        <?php endforeach; ?>
      </ul>
      <?php if ($enable_dark_mode): ?>
        <button class="btn <?= e($toggle_btn_class) ?> btn-sm ms-lg-3" id="themeToggle" type="button" aria-label="Toggle dark mode"><i class="fa-solid fa-moon"></i></button>
      <?php endif; ?>
    </div>
  </div>
</nav>
