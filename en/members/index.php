<?php
$lang = 'en';
$title = 'Members - Minamino & Bronner lab@YNU';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>


<div id="main">

  <!-- HEADER -->
  <?php $lang = 'en'; ?>
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


  <!-- MAIN CONTENT -->
  <div id="container">
    <div id="contents">

      <h2>Members</h2>
        <div id="members-area"></div>
        <script src="members.js"></script>

      <br>

      <h2>OB/OG</h2>
        <div id="alumni-area"></div>
        <script src="alumni.js"></script>

      <br>
  </div>


  <!-- FOOTER -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
  
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/foot.php'; ?>