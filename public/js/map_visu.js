	var map;
    

      function initMap() {
		var coords = document.getElementById("coordsInput").value;
		var input = coords.substring(1, coords.length - 1);
		var latlngStr = input.split(',', 2);
        var latlng = {lat: parseFloat(latlngStr[0]), lng: parseFloat(latlngStr[1])};
        map = new google.maps.Map(document.getElementById('Map'), {
          center: latlng,
          zoom: 12
        });
		
        
        var marker = new google.maps.Marker({
			position: latlng,
			map: map
        });
	  }