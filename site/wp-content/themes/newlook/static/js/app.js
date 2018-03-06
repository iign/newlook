/* global $, google, jQuery */ ;
jQuery(document).ready(function ($) {
  function toggleMenu () {
    $('.js-toggle-menu').toggleClass('animate')
    $('.js-top-menu').toggleClass('show')
    $('body').toggleClass('menu-active')
  }

  if (window.location.pathname.split('/').indexOf('product') > 0) {
    $('.nav__item').each(function (index) {
      var $a = $(this).find('.nav__link')
      if ($a.text() === 'Productos' || $a.text() === 'Produtos' || $a.text() === 'Products') {
        $(this).addClass('current-menu-item')
      }
    })
  }

  $('.js-menu').on('click', function (e) {
    toggleMenu()
    e.preventDefault()
  })

  $('.prod__list-item--active').on('click', function (e) {
    $('.prod__list').toggleClass('active')
    e.preventDefault()
    return false
  })

    var $slick = $('.p-carousel').slick({
    dots: false,
    draggable: false,
    fade: true,
    infinite: true,
    speed: 400,
    autoplaySpeed: 4000,
    autoplay: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    lazyLoad: 'ondemand'
  })


  $('.js-slick-btn-prev').on('click', function () {
   console.log('prev')
   $slick.slick('slickPrev')
 })
 $('.js-slick-btn-next').on('click', function () {
     console.log('next')
   $slick.slick('slickNext')
 })

})
