<?php
/**
 * Yug Bhuva Portfolio — Contact Page
 * Modular PHP Architecture
 */

$pageActive = 'contact';
$pageTitle = 'Start a Conversation — Yug Bhuva';
$pageDescription = 'Contact Yug Bhuva about an idea, opportunity, or collaboration.';

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';
?>
<!doctype html>
<html lang="en">
<head>
  <?php require __DIR__ . '/includes/head.php'; ?>
</head>
<body data-page="contact">

  <!-- Progress Bar, Page Wipe & Custom Cursor Section -->
  <?php require __DIR__ . '/sections/cursor.php'; ?>

  <!-- Site Header & Menu Drawer Section -->
  <?php require __DIR__ . '/sections/header.php'; ?>

  <main id="main">
    <!-- Contact Details & Interactive Email Composer Section -->
    <?php require __DIR__ . '/sections/contact-content.php'; ?>
  </main>

  <!-- Site Footer & Motion Controls Section -->
  <?php require __DIR__ . '/sections/footer.php'; ?>

</body>
</html>
