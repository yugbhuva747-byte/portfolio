<?php
/**
 * Configuration & Utility Helpers
 * Yug Bhuva Portfolio
 */

// Determine base URL dynamically so it works in root, in /php/, or in subdirectories
if (!function_exists('getBaseUrl')) {
    function getBaseUrl(): string {
        $scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
        return rtrim($scriptDir, '/') ?: '';
    }
}

if (!function_exists('url')) {
    function url(string $path = ''): string {
        $base = getBaseUrl();
        $path = ltrim($path, '/');
        if (empty($path)) {
            return $base ?: '/';
        }
        return ($base ? $base . '/' : '') . $path;
    }
}

if (!function_exists('escape')) {
    function escape(?string $string): string {
        return htmlspecialchars((string)$string, ENT_QUOTES, 'UTF-8');
    }
}
