<?php
/**
 * Configuration & Utility Helpers
 * Yug Bhuva Portfolio
 */

// Determine base URL dynamically so it works on Vercel, in root, or in local subdirectories (e.g. XAMPP)
if (!function_exists('getBaseUrl')) {
    function getBaseUrl(): string {
        if (!empty($_SERVER['VERCEL']) || (!empty($_SERVER['SCRIPT_NAME']) && strpos($_SERVER['SCRIPT_NAME'], '/api') === 0)) {
            return '';
        }
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        if ($scriptDir === '/api' || $scriptDir === '\\api') {
            return '';
        }
        return rtrim($scriptDir, '/') ?: '';
    }
}

if (!function_exists('url')) {
    function url(string $path = ''): string {
        $base = getBaseUrl();
        $path = ltrim($path, '/');
        if (empty($path)) {
            return $base ? $base : '/';
        }
        return ($base ? $base . '/' : '/') . $path;
    }
}

if (!function_exists('escape')) {
    function escape(?string $string): string {
        return htmlspecialchars((string)$string, ENT_QUOTES, 'UTF-8');
    }
}
