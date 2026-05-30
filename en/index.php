<?php
$lang = 'en';
$title = 'Minamino & Bronner lab@YNU';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
?>

<body>

  <!-- メイン -->

  <div id="main">

    <!-- ヘッダー -->

    <?php $lang = 'en'; ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'; ?>

    <div style="text-align: center; clear: both;">
      <img src="/img/hk_image.jpg" width="600px" alt="" class="photo01" border="0"/>
      <!-- <img src="../img/hk_image.jpg" width="600px" alt="" class="photo01" border="0" /> -->
      <br />
      Hyper-Kamiokande（NIKKEN SEKKEI）
    </div>

    <!-- ヘッダー終わり -->


    <!-- コンテンツ -->

    <!-- メインコンテンツ -->

    <div id="container">
      <div id="contents">

        <h2>Welcome</h2>
        <p>Minamino & Bronner Laboratory @ Yokohama National University (YNU) is exploring the fundamental laws governing the
          universe through particle physics experiments focusing on neutrino research.</p>

        <center>
          <img src="/img/neutrino-3mix.jpg" width="200px" alt="" class="photo01" border="0" />

        </center>

        <br />

        <h2>To students considering to go to graduate school</h2>
        <p>We are recuruting master's and doctoral graduate studetns.<br>
        Details are written in <a href="https://www.fse.ynu.ac.jp/english/exam/">Yokohama National
          University entrance examination information</a>.<br>
        For details, please contact me by e-mail, minamino-akihiro-nx[at]ynu.ac.jp .<br>
        </p>

        <br />


        <h2>Latest News</h2>

        <?php
          $lines = file('news/news_content.html'); // ファイルを1行ずつ配列で取得

          $count = 0;
          foreach ($lines as $line) {
            echo $line;

            // </p> が出たら1件とカウント
            if (strpos($line, '</p>') !== false) {
              $count++;
            }

            if ($count >= 3) {
              break;
            }
          }
        ?>
      </div>

      <!-- メインコンテンツ終わり -->


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