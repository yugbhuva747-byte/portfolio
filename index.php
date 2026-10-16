<?php
/**
 * Yug Bhuva Portfolio — Home Page
 * Modular PHP Architecture
 */

$pageActive = 'index';
$pageTitle = 'Digital work. Human touch. — Yug Bhuva';
$pageDescription = 'Yug Bhuva, a full stack developer at Social Amplifiers in Ahmedabad. Explore his projects, background and creative approach.';

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
?>
<!doctype html>
<html lang="en">
<head>
  <?php require __DIR__ . '/includes/head.php'; ?>
</head>
<body data-page="index">

  <!-- Progress Bar, Page Wipe & Custom Cursor Section -->
  <?php require __DIR__ . '/sections/cursor.php'; ?>

  <!-- Site Header & Menu Drawer Section -->
  <?php require __DIR__ . '/sections/header.php'; ?>

  <main id="main">
    <!-- Hero Section -->
    <?php require __DIR__ . '/sections/home-hero.php'; ?>

    <!-- Infinite Marquee Ticker Section -->
    <?php require __DIR__ . '/sections/ticker.php'; ?>

    <!-- Perspective Statement Section -->
    <?php require __DIR__ . '/sections/perspective.php'; ?>

    <!-- Featured Selected Work Section -->
    <?php require __DIR__ . '/sections/featured-work.php'; ?>

    <!-- Home About Teaser Section -->
    <?php require __DIR__ . '/sections/home-about.php'; ?>
  </main>

  <!-- Site Footer & Motion Controls Section -->
  <?php require __DIR__ . '/sections/footer.php'; ?>

</body>
</html>
