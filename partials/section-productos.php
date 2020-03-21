<?php
// WP_Query arguments
$args = array(
  'post_type'              => array( 'productos' ),
  'nopaging'               => true,
  'posts_per_page'         => '99',
);

// The Query
$query = new WP_Query( $args );
?>
<div class="products-section" id="productos">
  <img class="sabila-02" src="<?= get_template_directory_uri() . '/assets/img/sabila-shape.svg'; ?>">
  <div class="container products-section__container mt-5 pt-5">
    <div class="row mb-4">
      <div class="col-12">
        <h2 class="heading-font text-center position-relative">
          Nuestras Presentaciones
          <img src="<?= get_template_directory_uri() . '/assets/img/title-01.svg'; ?>">
        </h2>
      </div>
    </div>
    <div class="row pb-5 mb-5">
      <?php
      if ( $query->have_posts() ) : while ( $query->have_posts() ) :
      $query->the_post(); ?>
      <div class="col-sm-6 col-lg-3 mb-4" data-animation="fade-down" data-animation-delay="<?=$key * 150;?>">
        <div class="product-item">
          <div class="product-item__container">
            <p class="product-item__description"><?= get_the_excerpt(); ?></p>
            <h4 class="product-item__title"><?= get_the_title(); ?></h4>
            <?php the_post_thumbnail('medium', array('class' => 'product-item__image')); ?>
          </div>
        </div>
      </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</div>