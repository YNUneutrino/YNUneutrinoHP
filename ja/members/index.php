<?php
$lang = 'ja';
$title = 'メンバー - 南野・Bronner研@YNU';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>


<div id="main">

  <!-- HEADER -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>


  <!-- MAIN CONTENT -->
  <div id="container">
    <div id="contents">

      <h2>メンバー</h2>
        <div id="members-area"></div>
        <script src="members.js"></script>

      <br>

      <h2>OB/OG</h2>
      <div id="alumni-area"></div>
      <script src="alumni.js"></script>

      <br>
    </div>
  </div>


  <!-- FOOTER -->
  <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
  
</div>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/foot.php'; ?>