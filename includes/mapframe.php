<html>
<head>
<script src="../js/jquery.min.js"></script>
<script async defer src="../assets/maps.js"></script>
</head>
<body>
<div id="map" style="width:100%; height:100%;"></div>
<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: -25.344, lng: 131.036};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 4, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}

</script>
</body>
</html>