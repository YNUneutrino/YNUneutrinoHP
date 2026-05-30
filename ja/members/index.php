<?php
$lang = 'ja';
$title = 'メンバー - 南野・Bronner研@YNU';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<body>

  <!-- メイン -->

  <div id="main">

    <!-- ヘッダー -->

    <?php $lang = 'ja'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

    <!-- ヘッダー終わり -->

    <!-- コンテンツ -->

    <!-- メインコンテンツ -->

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

      <!-- メインコンテンツ終わり -->


    </div>

    <!-- コンテンツ終わり -->

    <!-- フッター -->

    <?php $lang = 'ja'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>

    <!-- フッター終わり -->

  </div>

  <!-- メイン終わり -->

</body>

</html>