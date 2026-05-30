<?php
$lang = 'en';
$title = 'Members - Minamino & Bronner lab@YNU';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<body>

  <!-- メイン -->

  <div id="main">

    <!-- ヘッダー -->

    <?php $lang = 'en'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

    <!-- ヘッダー終わり -->

    <!-- コンテンツ -->

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

    <!-- コンテンツ終わり -->

    <!-- フッター -->

    <?php $lang = 'en'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

    <!-- フッター終わり -->

  </div>

  <!-- メイン終わり -->

</body>

</html>