<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
  <meta name="keywords" content="neutrino,YNU" />
  <meta name="description" content="紹介文" />
  <title>Minamino & Bronner lab@YNU</title>
  <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>

  <!-- メイン -->

  <div id="main">


    <!-- ヘッダー -->

    <div id="header">

      <table border="0" cellpadding="0" cellspacing="0" width="800">
        <tr>
          <td>
            <h2>Neutrino and Astroparticle Physics Laboratory<br>Minamino & Bronner lab＠Yokohama National University</h2>
          </td>
        </tr>
      </table>

    </div>

    <div id="header-menu">
      <ul>
        <li><a href="index-e.php">HOME</a></li>
        <li><a href="research-e.html">Researches</a></li>
        <li><a href="members-e.html">Members</a></li>
        <li><a href="thesis-e.html">Theses</a></li>
        <li><a href="publications-e.html">Papers</a></li>
        <li><a href="news-e.php">News</a></li>
        <li><a href="index.php"><b>Japanease</b></a></li>
      </ul>
    </div>

    <center>
      <img src="img/hk_image.jpg" width="600px" alt="" class="photo01" border="0" />
      <br>Hyper-Kamiokande（NIKKEN SEKKEI）</br>
    </center>

    <!-- ヘッダー終わり -->


    <!-- コンテンツ -->

    <!-- メインコンテンツ -->

    <div id="container">
      <div id="contents">

        <h2>Welcome</h2>
        <p>Minamino & Bronner Laboratory @ Yokohama National University (YNU) is exploring the fundamental laws governing the
          universe through particle physics experiments focusing on neutrino research.</p>

        <center>
          <img src="img/neutrino-3mix.jpg" width="200px" alt="" class="photo01" border="0" />

        </center>

        <br />

        <h2>To students considering to go to graduate school</h2>
        <p>We are recuruting master's and doctoral graduate studetns.<br>
          For details, please contact me by e-mail, minamino-akihiro-nx[at]ynu.ac.jp .<br>
          Unfortunately, most of the contents in <a href="https://www.fse.ynu.ac.jp/exam/index.html">Yokohama National
            University entrance examination information</a> are written in Japanease...<br>
        </p>

        <br />


        <h2>Latest News</h2>

        <?php
        $lines = file('news_content-e.html'); // ファイルを1行ずつ配列で取得

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

    <div id="footer">
      79-1 Tokiwadai, Hodogaya-ku, Yokohama 240-8501, Japan<br>
      Copyright (C) 2025 YNU neutrino group All Rights Reserved.　design by <a href="http://tempnate.com/">tempnate</a>
    </div>

    <!-- フッター終わり -->

  </div>

  <!-- メイン終わり -->

</body>

</html>