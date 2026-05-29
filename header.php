<?php $lang = $lang ?? 'ja'; ?>

<div id="header">

  <table border="0" cellpadding="0" cellspacing="0" width="800">
    <tr>
      <td>
        <h2>
          <?php if ($lang === 'en'): ?>
            Neutrino and Astroparticle Physics Laboratory<br>Minamino & Bronner lab＠Yokohama National University
          <?php else: ?>
            ニュートリノ・宇宙素粒子物理学実験<br>南野・Bronner研究室＠横浜国立大学(YNU) 理工学部・理工学府
          <?php endif; ?>
        </h2>
      </td>
    </tr>
  </table>

</div>

<div id="header-menu">
  <ul>
    <?php if ($lang === 'en'): ?>
      <li><a href="index-e.php">HOME</a></li>
      <li><a href="research-e.php">Researches</a></li>
      <li><a href="members-e.php">Members</a></li>
      <li><a href="thesis-e.php">Theses</a></li>
      <li><a href="publications-e.php">Papers</a></li>
      <li><a href="news-e.php">News</a></li>
      <li><a href="link-e.php">Links</a></li>
      
      <?php
        // 現在のファイル名（例: index-e.php や research-e.php）を取得
        $current_file = basename($_SERVER['SCRIPT_NAME']);
        // 「-e」を取り除いたファイル名にする（例: index.php や research.php）
        $ja_file = str_replace('-e', '', $current_file);
      ?>
      <li><a href="<?php echo $ja_file; ?>"><b>Japanese</b></a></li>

    <?php else: ?>
      <li><a href="index.php">HOME</a></li>
      <li><a href="research.php">研究</a></li>
      <li><a href="members.php">メンバー</a></li>
      <li><a href="thesis.php">学位論文</a></li>
      <li><a href="publications.php">論文</a></li>
      <li><a href="news.php">ニュース</a></li>
      <li><a href="link.php">リンク</a></li>
      
      <?php
        $current_file = basename($_SERVER['SCRIPT_NAME']);
        // 拡張子（.php や .html）の直前に「-e」を挿入する
        $en_file = preg_replace('/(\.php|\.html)$/', '-e$1', $current_file);
      ?>
      <li><a href="<?php echo $en_file; ?>"><b>English</b></a></li>
      
    <?php endif; ?>
  </ul>
</div>
