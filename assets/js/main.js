window.onload = function() {
  // Is on screen
  const windowHeight = document.documentElement.clientHeight
  const toAnimate = document.querySelectorAll('[data-animation]')
  toAnimate.forEach(item => {
    item.classList.add(item.dataset.animation)
  })

  const isOnScreen = (el) => {
    return el.getBoundingClientRect().top <= (windowHeight / 1.2) && !el.classList.contains('show')
  }

  const showItem = (el) => {
    el.classList.add('show')
  }

  document.addEventListener('scroll', function(e) {
    toAnimate.forEach(item => {
      if(isOnScreen(item)) showItem(item)
    })
  })

  const setHeights = () => {
    const mainBgTop = document.querySelector('.main-bg-top')
    const mainBgBottom = document.querySelector('.main-bg-bottom')

    mainBgTop.style.marginTop = (mainBgTop.clientHeight * -1) + 'px'
    mainBgBottom.style.marginBottom = (mainBgBottom.clientHeight * -1) + 'px'
  }

  setTimeout(() => {
    setHeights()
  }, 500);
}

const setHeights = () => {
  const mainBgTop = document.querySelector('.main-bg-top')
  const mainBgBottom = document.querySelector('.main-bg-bottom')

  mainBgTop.style.marginTop = (mainBgTop.clientHeight * -1) + 'px'
  mainBgBottom.style.marginBottom = (mainBgBottom.clientHeight * -1) + 'px'
}

window.addEventListener('resize', function() {
  setHeights()
})

jQuery(document).ready(function($) {
  // Smooth scroll
  $(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top - 140
    }, 500);
  });

  // Responsive menu
  $('.responsive-menu-btn').on('click', function(e) {
    e.preventDefault()
    $('.responsive-menu').toggleClass('show')
  })

  $('.responsive-menu-btn-close').on('click', function(e) {
    e.preventDefault()
    $('.responsive-menu').toggleClass('show')
  })

  $('.main-menu__link').on('click', function() {
    console.log('hola')
    $('.responsive-menu').removeClass('show')
  })

  // Main hero
  $('.main-hero__video-poster').on('click', function(ev) {
    $('.main-hero').addClass('show-video')
    $(".embed-responsive-item-full")[0].src += "&autoplay=1";
    ev.preventDefault();
  });

  $('#stop-video').on('click', function(e) {
    $('.main-hero').removeClass('show-video')
    $('.embed-responsive-item-full').each(function(index) {
      $(this).attr('src', $(this).attr('src').split('&autoplay=1')[0]);
      return false;
    });
  })

  // Sliders 
  $('#recetasSlider').slick({
    slidesToShow: 3,
    arrows: true,
    prevArrow: $('.recetas-slider-prev'),
    nextArrow: '.recetas-slider-next',
    dots: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1
        }
      }
    ]
  })

  $('#recetasModalSlider').slick({
    slidesToShow: 1,
    arrows: true,
    prevArrow: $('.recetas-modal-slider-prev'),
    nextArrow: '.recetas-modal-slider-next',
    dots: false
  })

  $('.receta-item').click(function() {
    setTimeout(() => {
      $('#recetasModalSlider').resize();
    }, 500);
  })
})