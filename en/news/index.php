<?php
$lang = 'en';
$title = 'News - Minamino & Bronner lab@YNU';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<body>

  <!-- メイン -->

  <div id="main">

    <!-- ヘッダー -->

    <?php $lang = 'en'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/header.php'; ?>

    <!-- ヘッダー終わり -->


    <!-- コンテンツ -->

    <!-- メインコンテンツ -->

    <div id="container">
      <div id="contents">
        <h2>News</h2>

        <?php include 'news_content.html'; ?>

        <br />
      </div>

      <!-- メインコンテンツ終わり -->


    </div>

    <!-- コンテンツ終わり -->

    <!-- フッター -->

    <?php $lang = 'en'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/footer.php'; ?>

    <!-- フッター終わり -->

  </div>

  <!-- メイン終わり -->

</body>

</html>