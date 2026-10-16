<?php
/**
 * Vercel Serverless Function Router
 * Yug Bhuva Portfolio
 */

// Root directory of the repository
$rootDir = dirname(__DIR__);

// Normalize requested URI path
$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($requestUri, PHP_URL_PATH) ?? '/';
$path = trim($path, '/');

// 1. Direct or extensionless PHP page routing
$target = null;
if ($path === '' || $path === 'index' || $path === 'index.php') {
    $target = $rootDir . '/index.php';
} elseif (file_exists($rootDir . '/' . $path) && is_file($rootDir . '/' . $path) && substr($path, -4) === '.php') {
    $target = $rootDir . '/' . $path;
} elseif (file_exists($rootDir . '/' . $path . '.php') && is_file($rootDir . '/' . $path . '.php')) {
    $target = $rootDir . '/' . $path . '.php';
}

if ($target && file_exists($target)) {
    chdir($rootDir);
    require $target;
    exit;
}

// 2. Fallback to index.php
chdir($rootDir);
require $rootDir . '/index.php';
