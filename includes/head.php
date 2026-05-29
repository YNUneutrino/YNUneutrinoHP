<?php
$lang = $lang ?? 'ja';
$title = $title ?? 'YNU Neutrino Group';
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $title ?></title>

  <?php if ($lang === 'en'): ?>
    <meta name="keywords" content="neutrino,YNU">
  <?php else: ?>
    <meta name="keywords" content="ニュートリノ,neutrino,YNU">
  <?php endif; ?>

  <link rel="stylesheet" href="/style.css">
</head>
<body>
