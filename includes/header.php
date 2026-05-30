<?php $lang = $lang ?? 'ja'; ?>

<?php
$current = $_SERVER['REQUEST_URI'];

function is_active($path, $exact = false) {
  $uri = $_SERVER['REQUEST_URI'];

  if ($exact) {
    return $uri === $path ? 'class="active"' : '';
  }
  return strpos($uri, $path) === 0 ? 'class="active"' : '';
}
?>


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
      <li><a href="/en/" <?= is_active('/en/', true) ?>>HOME</a></li>
      <li><a href="/en/research/" <?= is_active('/en/research/') ?>>Research</a></li>
      <li><a href="/en/members/" <?= is_active('/en/members/') ?>>Members</a></li>
      <li><a href="/en/thesis/" <?= is_active('/en/thesis/') ?>>Theses</a></li>
      <li><a href="/en/publications/" <?= is_active('/en/publications/') ?>>Papers</a></li>
      <li><a href="/en/news/" <?= is_active('/en/news/') ?>>News</a></li>
      <li><a href="/en/link/" <?= is_active('/en/link/') ?>>Links</a></li>
    <?php else: ?>
      <li><a href="/ja/" <?= is_active('/ja/', true) ?>>HOME</a></li>
      <li><a href="/ja/research/" <?= is_active('/ja/research/') ?>>研究</a></li>
      <li><a href="/ja/members/" <?= is_active('/ja/members/') ?>>メンバー</a></li>
      <li><a href="/ja/thesis/" <?= is_active('/ja/thesis/') ?>>学位論文</a></li>
      <li><a href="/ja/publications/" <?= is_active('/ja/publications/') ?>>論文</a></li>
      <li><a href="/ja/news/" <?= is_active('/ja/news/') ?>>ニュース</a></li>
      <li><a href="/ja/link/" <?= is_active('/ja/link/') ?>>リンク</a></li>
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
