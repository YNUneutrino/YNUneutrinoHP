<?php
$lang = 'en';
$title = 'News - Minamino & Bronner lab@YNU';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>


<div id="main">

  <!-- HEADER -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


  <!-- MAIN CONTENT -->
  <div id="container">
    <div id="contents">
      <h2>News</h2>

      <?php include 'news_content.html'; ?>

      <br />
    </div>
  </div>


  <!-- FOOTER -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
  
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/foot.php'; ?>