<?php
require_once __DIR__ . '/includes/site-config.php';
require_once __DIR__ . '/includes/helpers.php';
header('Content-Type: application/xml; charset=utf-8');
$pages = ['/', '/about', '/blog', '/contact', '/elements', '/privacy', '/terms'];
foreach (get_articles() as $article) { $pages[] = '/blog/' . $article['slug']; }
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
foreach ($pages as $page) {
    echo "  <url><loc>" . e(url_path($page)) . "</loc></url>\n";
}
echo "</urlset>";
