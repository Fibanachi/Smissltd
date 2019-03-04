<!DOCTYPE html>
<html>
<head>
    <!-- This stylesheet contains specific styles for displaying
         the map on this page. Replace it with your own styles as
         described in the documentation:
         https://developers.google.com/maps/documentation/javascript/tutorial
    -->
    <link rel="stylesheet" href="/maps/documentation/javascript/cgc/demos.css">
</head>
<body>
<div id="map"></div>
<script>
    function initMap() {
        var myLatLng = {lat: 50.010345, lng: 36.318756};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: myLatLng,
            zoom: 10
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            title: 'Hello World!'
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_Xks3cuR65qU9KJDkNStT-OZYxUj7CPg&callback=initMap"
        async defer></script>
</body>
</html>