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

  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init)

  function init () {
      // Basic options for a simple Google Map
      // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 18,
      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(59.9138481, 10.7531298), // New York

      // How you would like to style the map.
      // This is where you would paste any style found on Snazzy Maps.
      styles: [
    {
      "featureType": "administrative",
      "elementType": "all",
      "stylers": [
          {
              "saturation": "-100"
          }
      ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": "50"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "30"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "40"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ffff00"
            },
            {
                "lightness": -25
            },
            {
                "saturation": -97
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "lightness": -25
            },
            {
                "saturation": -100
            }
        ]
    }
]
      }

      // Get the HTML DOM element that will contain your map
      // We are using a div with id="map" seen below in the <body>
      var mapElement = document.getElementById('map')

      // Create the Google Map using our element and options defined above
      var map = new google.maps.Map(mapElement, mapOptions)


      // Let's also add a marker while we're at it
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(59.9138481, 10.7531298),
          map: map,
          icon: '/img/icon-pin.png',
          optimized: false
      })
  }

})()
