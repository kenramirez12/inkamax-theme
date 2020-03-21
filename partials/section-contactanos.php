<div class="footer-content" id="contactanos">
  <div class="bubble bubble--sm"></div>
  <div class="bubble bubble--sm" style="top:25%;right:0"></div>
  <div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-7 mb-4">
      <h2 class="heading-font text-center">Contáctanos</h2>
      <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, maxime doloremque id suscipit voluptas tenetur fuga inventore? Ipsa quam expedita.</p>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-5 col-lg-4 order-md-1 mb-5 mb-md-0">
      <?php echo do_shortcode('[contact-form-7 id="16" title="Formulario de contacto"]'); ?>
    </div>
    <div class="col-md-5 col-lg-4">
      <h4 class="heading-font mb-3">¡Visítanos!</h4>
      <ul class="list-unstyled">
        <li class="list-unstyled-item mb-4">
          <img src="<?= get_template_directory_uri() . '/assets/img/email-icon.svg';?>" width="20" class="mr-2">
          Jr. Antonio Miro Quesada 1308 - Cercado de Lima
        </li>
        <li class="list-unstyled-item mb-4">
          <a class="text-dark" href="tel:13282196" target="_blank">
            <img src="<?= get_template_directory_uri() . '/assets/img/phone-icon.svg';?>" width="20" class="mr-2">
              328 2196
          </a>
        </li>
        <li class="list-unstyled-item mb-4">
          <a class="text-dark" href="tel:987200579" target="_blank">
            <img src="<?= get_template_directory_uri() . '/assets/img/phone-icon.svg';?>" width="20" class="mr-2">
            987 200 579
          </a>
        </li>
        <li class="list-unstyled-item mb-4">
          <a class="text-dark" href="mailto:info@inkamax.com">
            <img src="<?= get_template_directory_uri() . '/assets/img/map-icon.svg';?>" width="20" class="mr-2">
            info@inkamax.com
          </a>
        </li>
      </ul>
      <h5 class="heading-font mt-5 mt-md-4 mb-3">¡Síguenos!</h5>
      <div class="d-flex">
        <a class="mr-2" href="https://facebook.com/InkamaxLatino/" target="_blank">
          <img src="<?= get_template_directory_uri() . '/assets/img/fb-icon.svg';?>" alt="Facebook" width="40">
        </a>
        <a href="#" target="_blank">
          <img src="<?= get_template_directory_uri() . '/assets/img/instagram-icon.svg';?>" alt="Instagram" width="40">
        </a>
      </div>
    </div>
  </div>
</div>