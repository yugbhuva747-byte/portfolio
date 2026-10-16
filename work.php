<?php
/**
 * Yug Bhuva Portfolio — All Work Catalog Page
 * Modular PHP Architecture
 */

$pageActive = 'work';
$pageTitle = 'Selected Work — Yug Bhuva';
$pageDescription = 'Eight projects exploring full stack applications, frontend experiences, AI and automation.';

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
?>
<!doctype html>
<html lang="en">
<head>
  <?php require __DIR__ . '/includes/head.php'; ?>
</head>
<body data-page="work">

  <!-- Progress Bar, Page Wipe & Custom Cursor Section -->
  <?php require __DIR__ . '/sections/cursor.php'; ?>

  <!-- Site Header & Menu Drawer Section -->
  <?php require __DIR__ . '/sections/header.php'; ?>

  <main id="main">
    <!-- Work Catalog & Real-Time Filter Section -->
    <?php require __DIR__ . '/sections/work-catalog.php'; ?>
  </main>

  <!-- Site Footer & Motion Controls Section -->
  <?php require __DIR__ . '/sections/footer.php'; ?>

</body>
</html>
