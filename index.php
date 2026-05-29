<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">

<head>
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="keywords" content="ニュートリノ,neutrino,YNU" />
  <meta name="description" content="紹介文" />
  <title>南野・Bronner研@YNU</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

  <!-- メイン -->

  <div id="main">


    <!-- ヘッダー -->

    <?php $lang = 'ja'; ?>
    <?php include 'header.php'; ?>

    <div style="text-align: center; clear: both;">
      <img src="img/hk_image.jpg" width="600px" alt="" class="photo01" border="0" />
      <br />
      Hyper-Kamiokande（NIKKEN SEKKEI）
    </div>

    <!-- ヘッダー終わり -->


    <!-- コンテンツ -->

    <!-- メインコンテンツ -->

    <div id="container">
      <div id="contents">

        <h2>ようこそ</h2>
        <p>南野・Bronner研究室@横浜国立大学(YNU)は、ニュートリノ研究を中心とした宇宙素粒子物理学実験を通じて、宇宙を支配する根本的な法則を探求しています。</p>

        <center>
          <img src="img/neutrino-3mix.jpg" width="200px" alt="" class="photo01" border="0" />
        </center>

        <br />


        <h2>修士課程・博士課程への進学を検討中のみなさんへ</h2>
        <p></p>
        本研究室では修士課程・博士課程の大学院生を募集しています。<br />
        詳細は<a href="https://www.fse.ynu.ac.jp/exam/index.html">横浜国立大学理工学府入試情報</a>をご確認ください。<br />
        興味を持たれた方は、南野までメールでご連絡ください。
        E-mail. minamino-akihiro-nx[at]ynu.ac.jp<br>
        <br />


        <h2>最新ニュース</h2>

        <?php
        $lines = file('news_content.html'); // ファイルを1行ずつ配列で取得

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

    <?php $lang = 'ja'; ?>
    <?php include 'footer.php'; ?>

    <!-- フッター終わり -->

  </div>

  <!-- メイン終わり -->

</body>

</html>