<div class="recetas-section" id="recetas">
  <img class="sabila-01" src="<?= get_template_directory_uri() . '/assets/img/sabila-shape.svg';?>">
  <div class="container mt-5 pt-5">
    <div class="row mb-5">
      <div class="col-12">
        <h2 class="heading-font text-center position-relative px-3 px-md-0">
          Descubre nuestras recetas
          <img src="<?= get_template_directory_uri() . '/assets/img/title-02.svg';?>" style="transform: translate(-1.5rem, 10px)">
        </h2>
      </div>
    </div>
    <div class="recetas-slider">
      <img class="recetas-slider-prev" src="<?= get_template_directory_uri() . '/assets/img/left-arrow.svg';?>">
      <img class="recetas-slider-next" src="<?= get_template_directory_uri() . '/assets/img/right-arrow.svg';?>">
      <div class="mb-5 pb-5" id="recetasSlider">
        <?php
          // WP_Query arguments
          $args = array(
            'post_type'              => array( 'recetas' ),
            'nopaging'               => true,
            'posts_per_page'         => '99',
          );

          // The Query
          $query = new WP_Query( $args );

          // The Loop
          if ( $query->have_posts() ) :
            $flag = 0;
            while ( $query->have_posts() ) : $flag++; $query->the_post(); ?>
          <div class="col-md-4 mt-4 mt-md-0" data-animation="fade-down" data-animation-delay="<?= $flag * 150 ;?>">
            <div class="receta-item" data-toggle="modal" data-target="#recetaModal">
              <div class="receta-item__container">
                <h4 class="receta-item__title"><?= get_the_title(); ?></h4>
                <?php the_post_thumbnail('medium', array('class' => 'receta-item__image')); ?>
                <a href="<?php the_field('enlace'); ?>" target="_blank" class="btn btn-primary mt-3">Ver más</a>
              </div>
            </div>
          </div>
        <?php
          endwhile; endif;
          wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>