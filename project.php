<?php
/**
 * Yug Bhuva Portfolio — Project Case Study Page
 * Modular PHP Architecture
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/data.php';

$requestedId = $_GET['id'] ?? 'placement';
$project = getProjectById($requestedId, $projects) ?? ($projects[0] ?? []);

$pageActive = 'project';
$pageTitle = ($project['name'] ?? 'Project') . ' — Yug Bhuva';
$pageDescription = $project['description'] ?? 'Project details, scope, and technologies used by Yug Bhuva.';
?>
<!doctype html>
<html lang="en">
<head>
  <?php require __DIR__ . '/includes/head.php'; ?>
</head>
<body data-page="project">

  <!-- Progress Bar, Page Wipe & Custom Cursor Section -->
  <?php require __DIR__ . '/sections/cursor.php'; ?>

  <!-- Site Header & Menu Drawer Section -->
  <?php require __DIR__ . '/sections/header.php'; ?>

  <main id="main">
    <!-- Dynamic Case Study Detail Section -->
    <?php require __DIR__ . '/sections/project-detail.php'; ?>
  </main>

  <!-- Site Footer & Motion Controls Section -->
  <?php require __DIR__ . '/sections/footer.php'; ?>

</body>
</html>
