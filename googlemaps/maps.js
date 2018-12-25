function initMap() {
        var myLatLng = {lat: -6.931105, lng: 107.717351}; 

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 4
        });
    }
