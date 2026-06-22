<?php
$lang = 'ja';
$title = 'ニュース - 南野・Bronner研@YNU';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>


<div id="main">

  <!-- HEADER -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


  <!-- MAIN CONTENT -->
  <div id="container">
    <div id="contents">

      <h2>ニュース</h2>
      <?php include 'news_content.html'; ?>

      <br />
    </div>
  </div>


  <!-- FOOTER -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/foot.php'; ?>