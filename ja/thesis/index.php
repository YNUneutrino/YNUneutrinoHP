<?php
$lang = 'ja';
$title = '学位論文 - 南野・Bronner研@YNU';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<body>

  <!-- メイン -->

  <div id="main">

    <!-- ヘッダー -->

    <?php $lang = 'ja'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

    <center>
      <img src="/img/theses.jpg" width="300px" alt="" class="photo01" border="0" />
    </center>

    <!-- ヘッダー終わり -->

    <!-- コンテンツ -->

    <div id="container">
      <div id="contents">
        
        <div id="thesis-area"></div>
        <script src="script.js"></script>
      
      </div>
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