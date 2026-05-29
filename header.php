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
      <li><a href="/en/">HOME</a></li>
      <li><a href="/en/research/">Research</a></li>
      <li><a href="/en/members/">Members</a></li>
      <li><a href="/en/thesis/">Theses</a></li>
      <li><a href="/en/publications/">Papers</a></li>
      <li><a href="/en/news/">News</a></li>
      <li><a href="/en/link/">Links</a></li>
    <?php else: ?>
      <li><a href="/ja/">HOME</a></li>
      <li><a href="/ja/research/">研究</a></li>
      <li><a href="/ja/members/">メンバー</a></li>
      <li><a href="/ja/thesis/">学位論文</a></li>
      <li><a href="/ja/publications/">論文</a></li>
      <li><a href="/ja/news/">ニュース</a></li>
      <li><a href="/ja/link/">リンク</a></li>
    <?php endif; ?>

    <?php
      $current = $_SERVER['REQUEST_URI'];
      if ($lang === 'en') {
          $switch = str_replace('/en/', '/ja/', $current);
      } else {
          $switch = str_replace('/ja/', '/en/', $current);
      }
    ?>
    <li><a href="<?= $switch ?>"><b>
      <?= $lang === 'en' ? '🇯🇵日本語' : '🇬🇧English' ?>
    </b></a></li>

  </ul>
</div>
