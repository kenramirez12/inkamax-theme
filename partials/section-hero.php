<div class="main-hero">
  <div class="main-hero__container">
    <div class="container my-auto">
      <div class="row">
        <div class="col-md-4 col-lg-6 d-flex flex-column align-items-center justify-content-center mb-4 mb-md-0">
          <img class="main-hero__botella mb-4" src="<?= get_template_directory_uri() . '/assets/img/botella_optimizada.svg'; ?>">
          <a class="btn btn-primary px-5" href="#contactanos">Compra ahora</a>
        </div>
        <div class="col-md-8 col-lg-6 d-none d-md-block">
          <div class="main-hero__video-poster">
            <img class="main-hero__play-btn" src="<?= get_template_directory_uri() . '/assets/img/play-btn.svg'; ?>">
            <img class="main-hero__poster" src="<?= get_template_directory_uri() . '/assets/img/poster-video.jpg'; ?>">
          </div>
        </div>
        <div class="col-12 d-md-none">
          <div id="video" class="embed-responsive embed-responsive-4by3">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7JoTDVjbh1s?rel=0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-hero__video">
    <div id="video" class="embed-responsive embed-responsive-21by9">
      <a id="stop-video">
        <img src="<?= get_template_directory_uri() . '/assets/img/close-btn.svg'; ?>" style="width:50px">
      </a>
      <iframe class="embed-responsive-item embed-responsive-item-full" src="https://www.youtube.com/embed/7JoTDVjbh1s?rel=0" allowfullscreen></iframe>
    </div>
  </div>
</div>