//  onclick="rolar_para('#ancora')"
function rolar_para(elemento) {
    $('html, body').animate({
        scrollTop: $(elemento).offset().top-65
    }, 800);
}

$('.open-menu').click(function() {
  $('#navbar-itens').addClass('opening-menu');
  $('#navbar-itens').removeClass('closing-menu');
});

$('.close-menu').click(function() {
  $('#navbar-itens').addClass('closing-menu');
  $('#navbar-itens').removeClass('opening-menu');
});


$('.carousel').slick({
    dots: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false
});

$('.carousel-multiple').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: true,
    autoplay: true,
    autoplaySpeed: 5000,
    responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: false
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false
          }
        }
    ]
});

$('.sub-images').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  focusOnSelect: true,
  arrows: false,
  asNavFor: '.origin-images',
  centerMode: true
});

$('.origin-images').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.sub-images'
});

$(document).ready(function(){
  $('.cep-results').hide();
  $('.methods-pay').hide();
});

$('#calcular-frete').click(function(){
  $('.cep-results').show('fadeIn');
})

$('#methods-pay').click(function(){
  $('.methods-pay').show('fadeIn');
})



$('.mask-cep').mask('00000-000');




/* CARRINHO */

$('.cart-btn').click(function(){
  $('.sidebar-cart').removeClass('sidebar-cart-closed').addClass('sidebar-cart-opened');
})

$('.close-sidebar-cart').click(function(){
  $('.sidebar-cart').removeClass('sidebar-cart-opened').addClass('sidebar-cart-closed');
});

/* CARRINHO */
