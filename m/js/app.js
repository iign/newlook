/* global $, google */;
var $slick
(function () {
  function toggleMenu () {
    $('.js-toggle-menu').toggleClass('animate')
    $('.js-top-menu').toggleClass('show')
    $('body').toggleClass('menu-active')
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

  google.maps.event.addDomListener(window, 'load', init)

  function init () {
    var mapElement = document.getElementById('map')

    if (mapElement) {
      var map = new google.maps.Map(mapElement, {})
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(59.9138481, 10.7531298),
        map: map,
        icon: '/img/icon-pin.png',
        optimized: false
      })
    }
  }

})()
