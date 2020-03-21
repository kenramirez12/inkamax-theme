<div class="main-bg position-relative">
  <div class="bubble" style="top:0;left:1rem"></div>
  <div class="bubble bubble--sm" style="top:0;right:1rem"></div>
  <img class="main-bg-top" src="<?= get_template_directory_uri() . '/assets/img/main_bg_top.svg';?>" style="width:100%">
  <?php echo get_template_part('partials/section', 'puntos-de-venta'); ?>
  <div class="container footer-container">
    <img class="footer-car d-none d-md-block" src="<?= get_template_directory_uri() . '/assets/img/car-footer.png';?>">
    <img class="footer-bg d-none d-lg-block" src="<?= get_template_directory_uri() . '/assets/img/footer-bg.svg';?>">
    <?php echo get_template_part('partials/section', 'contactanos'); ?>
  </div>
  <img class="main-bg-bottom" src="<?= get_template_directory_uri() . '/assets/img/main_bg_bottom.svg';?>" style="width:100%">
</div>