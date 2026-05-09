<?php
function e($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

function url_path($path) {
    global $site_url;
    if (str_starts_with($path, 'http')) return $path;
    return rtrim($site_url, '/') . '/' . ltrim($path, '/');
}

function active_nav($url) {
    $current = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
    return $current === $url ? 'active' : '';
}

function article_meta_files() {
    return glob(__DIR__ . '/../blog/meta/*.php') ?: [];
}

function get_articles() {
    $articles = [];
    foreach (article_meta_files() as $file) {
        $meta = include $file;
        if (is_array($meta)) {
            $articles[] = $meta;
        }
    }
    usort($articles, fn($a, $b) => strcmp($b['date'] ?? '', $a['date'] ?? ''));
    return $articles;
}
