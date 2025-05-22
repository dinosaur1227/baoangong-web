<?php
$bannerDir = 'uploads/banner/';
$banners = glob($bannerDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
?>
<div class="hero-slider swiper">
  <div class="swiper-wrapper">
    <?php foreach ($banners as $img): ?>
      <div class="swiper-slide"><img src="<?= $img ?>" alt="輪播圖"></div>
    <?php endforeach; ?>
  </div>
  <div class="swiper-pagination"></div>
</div>
