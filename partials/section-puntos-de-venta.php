<?php

$distribuciones = array();

// WP_Query arguments
$args = array(
  'post_type'              => array( 'distribucion' ),
  'nopaging'               => true,
  'posts_per_page'         => '99',
);

// The Query
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post();
    $post_id = get_the_ID();

    $dist = array(
      'title' => get_the_title(),
      'address_line_1'  => get_field('direccion_linea_1'),
      'address_line_2'  => get_field('direccion_linea_2'),
      'phone'  => get_field('telefono'),
      'image' => get_the_post_thumbnail_url()
    );

    array_push($distribuciones, $dist);
  }
}

wp_reset_postdata();

if(count($distribuciones) == 0) {
  $distribuciones_left = $distribuciones;
  $distribuciones_right = array();
} else {
  $left = ceil(count($distribuciones)/2);
  $right = count($distribuciones) - $left;

  $distribuciones_left = array_slice($distribuciones, 0, $left);
  $distribuciones_right = array_slice($distribuciones, $left, $right);
}
?>
<div class="container main-bg__container mb-5 pb-lg-5 position-relative" id="puntos-de-venta">
  <div class="bubble bubble--sm" style="bottom:0;left:0"></div>
  <div class="bubble bubble--sm" style="bottom:-4rem;right:0"></div>
  <div class="row mb-3">
    <div class="col-12">
      <h2 class="h1 heading-font text-center text-white">Puntos de distribución</h2>
    </div>
  </div>
  <div class="row align-items-center">
    <?php foreach($distribuciones_left as $item) : ?>
      <div class="col-md-12 col-lg-5">
        <div class="card rounded-1rem shadow p-3 my-3 my-lg-5 location" data-animation="fade-down" data-animation-delay="null">
          <div class="location-content">
            <div class="location-content__image">
              <img src="<?= $item['image']; ?>">
            </div>
            <p class="location-content__description">
              <?= $item['address_line_1']; ?><br>
              <?= $item['address_line_2']; ?><br>
              <?= $item['phone']; ?>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <div class="col-lg-2 px-0 d-none d-lg-block">
      <img class="w-100 animation-bounce" src="<?= get_template_directory_uri() . '/assets/img/botella-flechas.png'; ?>">
    </div>
    <?php foreach($distribuciones_right as $item) : ?>
      <div class="col-md-12 col-lg-5 mt-n4 mt-lg-0">
        <div class="card rounded-1rem shadow p-3 my-5 location" data-animation="fade-down" data-animation-delay="null">
          <div class="location-content">
            <div class="location-content__image">
              <img src="<?= $item['image']; ?>" alt="">
            </div>
            <p class="location-content__description">
              <?= $item['address_line_1']; ?><br>
              <?= $item['address_line_2']; ?><br>
              <?= $item['phone']; ?>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>