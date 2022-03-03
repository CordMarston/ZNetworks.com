jQuery(function($) {
    // Asynchronously Load the map API 
    var script = document.createElement('script');
    script.src = "http://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize&key=AIzaSyDV2unNIeVY-6skqGPFfYMiKvzwrYU8Sts";
    document.body.appendChild(script);
});