var map;
      var coords;
      var address;
      var markers = [];

      function initMap() {
        map = new google.maps.Map(document.getElementById('Map'), {
          center: {lat: 48.692055, lng: 6.184417},
          zoom: 8
        });

        
        var infowindow = new google.maps.InfoWindow;
        var geocoder = new google.maps.Geocoder;
        
        google.maps.event.addListener(map, 'click', function(event) {
          coords = event.latLng.toString();
          document.getElementById("coordsInput").value = coords;
          coords = coords.substring(1, coords.length - 1)
          geocodeLatLng(geocoder, map, infowindow,coords);
        });

        

        function geocodeLatLng(geocoder, map, infowindow,coords) {
        var input = coords;
        var latlngStr = input.split(',', 2);
        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        geocoder.geocode({'location': latlng}, function(results, status) {
          if (status === 'OK') {
            if (results[0]) {
              var marker = new google.maps.Marker({
                position: latlng,
                map: map
              });
              for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
              }
              markers = []
              markers.push(marker)
              address = results[0].formatted_address;
              document.getElementById("addressInput").value = address;
              infowindow.setContent(address);
              infowindow.open(map, marker);
            } else {
              window.alert('No results found');
            }
          } else {
            window.alert('Geocoder failed due to: ' + status);
          }
        });
        }



      }

      function update() {
        address = document.getElementById("addressInput").value;
        updateCoords(address);
      }

      function updateCoords(address) {
        var geocoder = new google.maps.Geocoder;
        geocoder.geocode({ address: address}, function(results, status){
        coords = results[0].geometry.location;
        document.getElementById("coordsInput").value = coords;
        map.setCenter(coords);
        var marker = new google.maps.Marker({
          position: coords,
          map: map
        });
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        markers = [];
        markers.push(marker);
      })}