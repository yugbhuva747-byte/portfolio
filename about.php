<?php
/**
 * Yug Bhuva Portfolio — About Page
 * Modular PHP Architecture
 */

$pageActive = 'about';
$pageTitle = 'The Person Behind the Pixels — Yug Bhuva';
$pageDescription = 'Meet Yug Bhuva, a full stack developer and creative thinker based in Ahmedabad.';

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
?>
<!doctype html>
<html lang="en">
<head>
  <?php require __DIR__ . '/includes/head.php'; ?>
</head>
<body data-page="about">

  <!-- Progress Bar, Page Wipe & Custom Cursor Section -->
  <?php require __DIR__ . '/sections/cursor.php'; ?>

  <!-- Site Header & Menu Drawer Section -->
  <?php require __DIR__ . '/sections/header.php'; ?>

  <main id="main">
    <!-- About Hero, Values, Capabilities & Timeline Section -->
    <?php require __DIR__ . '/sections/about-content.php'; ?>
  </main>

  <!-- Site Footer & Motion Controls Section -->
  <?php require __DIR__ . '/sections/footer.php'; ?>

</body>
</html>
