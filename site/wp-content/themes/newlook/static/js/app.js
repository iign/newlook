/* global $, google */ ;
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

  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init)

  function init () {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map')

      // Create the Google Map using our element and options defined above
      if (mapElement) {
          var map = new google.maps.Map(mapElement, {})
          // Let's also add a marker while we're at it
          var marker = new google.maps.Marker({
              position: new google.maps.LatLng(59.9138481, 10.7531298),
              map: map,
              icon: '/img/icon-pin.png',
              optimized: false
          })
      }


  }

})()
