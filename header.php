<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="hfeed">
  <!-- Modal -->
  <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Términos y condiciones</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam laudantium consequatur iste exercitationem voluptatum accusantium unde, repudiandae repellat obcaecati tempora non quia dignissimos! Perspiciatis odio vero ratione ea! Recusandae, aliquid!
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam laudantium consequatur iste exercitationem voluptatum accusantium unde, repudiandae repellat obcaecati tempora non quia dignissimos! Perspiciatis odio vero ratione ea! Recusandae, aliquid!
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam laudantium consequatur iste exercitationem voluptatum accusantium unde, repudiandae repellat obcaecati tempora non quia dignissimos! Perspiciatis odio vero ratione ea! Recusandae, aliquid!
            </p>
          </div>
        </div>
      </div>
    </div>
  <div class="responsive-menu d-lg-none">
    <div class="container responsive-menu__container">
      <a class="responsive-menu-btn-close" href="#">
        <img src="<?= get_template_directory_uri() . '/assets/img/menu.svg'; ?>">
      </a>
      <ul class="list-unstyled">
        <li class="text-center mb-5"><a class="main-menu__link" href="#recetas">Recetas</a></li>
        <li class="text-center mb-5"><a class="main-menu__link" href="#productos">Productos</a></li>
        <li class="text-center mb-5"><a class="main-menu__link" href="#puntos-de-venta">Puntos de venta</a></li>
        <li class="text-center mb-5"><a class="main-menu__link" href="#contacto">Contacto</a></li>
      </ul>
    </div>
  </div>
  <header class="main-header">
    <div class="container position-relative">
      <a class="responsive-menu-btn d-lg-none" href="#"><img src="<?= get_template_directory_uri() . '/assets/img/menu.svg'; ?>"></a>
      <div class="row align-items-center justify-content-between">
        <div class="col-12 col-lg-4 d-flex d-lg-block">
          <div class="logo mx-auto mx-lg-0">
            <a href="#page" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
              <img src="<?= get_template_directory_uri() . '/assets/img/main-logo.svg'; ?>" style="width:95px" alt="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>">
            </a>
          </div>
        </div>
        <div class="col-8 d-none d-lg-flex">
          <nav class="ml-auto" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation" id="main-menu">
            <ul class="main-menu">
              <li class="main-menu__item" itemprop="url"><a class="main-menu__link" href="#recetas" itemprop="name">Recetas</a></li>
              <li class="main-menu__item" itemprop="url"><a class="main-menu__link" href="#productos" itemprop="name">Productos</a></li>
              <li class="main-menu__item" itemprop="url"><a class="main-menu__link" href="#puntos-de-venta" itemprop="name">Puntos de venta</a></li>
              <li class="main-menu__item" itemprop="url"><a class="main-menu__link" href="#contactanos" itemprop="name">Contacto</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>