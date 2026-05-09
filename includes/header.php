<?php
require_once __DIR__ . '/site-config.php';
require_once __DIR__ . '/helpers.php';
$page_title = $page_title ?? $site_name;
$page_description = $page_description ?? $site_description;
$page_slug = $page_slug ?? trim(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH), '/');
$canonical = $canonical ?? url_path($page_slug ? $page_slug : '/');
$page_og_image = $page_og_image ?? $site_og_image ?? '';
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($page_title === $site_name ? $site_name : $page_title . ' | ' . $site_name) ?></title>
  <meta name="description" content="<?= e($page_description) ?>">
  <?php if (!empty($site_favicon)): ?><link rel="icon" href="<?= e($site_favicon) ?>"><?php endif; ?>
  <link rel="canonical" href="<?= e($canonical) ?>">
  <meta property="og:title" content="<?= e($page_title) ?>">
  <meta property="og:description" content="<?= e($page_description) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= e($canonical) ?>">
  <?php if (!empty($page_og_image)): ?><meta property="og:image" content="<?= e($page_og_image) ?>"><?php endif; ?>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <?php if ($use_fontawesome): ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <?php endif; ?>
  <link rel="stylesheet" href="/assets/css/custom.css">
  <?php if (!empty($google_analytics_id)): ?>
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= e($google_analytics_id) ?>"></script>
  <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','<?= e($google_analytics_id) ?>');</script>
  <?php endif; ?>
</head>
<body>
<?php include __DIR__ . '/nav.php'; ?>
<main>
