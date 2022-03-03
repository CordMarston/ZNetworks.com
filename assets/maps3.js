
jQuery(function($) {
    // Asynchronously Load the map API 
    var new_script = document.createElement('script');
    script.src = "https://maps.googleapis.com/maps/api/js?sensor=false&callback=initialize&key=AIzaSyDLVMoKbVaQdo_VHlkrXMc4rhmGEfs1Vng";
    document.body.appendChild(script);
});

function initialize() {
    var new_map;
    var new_bounds = new google.maps.LatLngBounds();
    var new_mapOptions = {
		scrollwheel: false,
        mapTypeId: 'roadmap',
		styles: [
    { 
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#5692CD"
            },
            {
                "lightness": 17
            }
        ]
    }
]
    };
                    
    // Display a map on the page
    map = new google.maps.Map(document.getElementById("map"), mapOptions);
    map.setTilt(45);
        
    // Multiple Markers
    var new_markers = [
		['Z Networks - Marysville', 48.064277, -122.177425],
['Z Networks - Seattle', 47.551295, -122.325745],
['Z Networks - Portland', 45.533988, -122.688837],
['Z Networks - Orange County', 33.720828, -117.826234],
['Z Networks - Concord', 37.972107, -122.049946],
['Z Networks - Beverly Hills', 34.062930, -118.376480],
['Z Networks - Las Vegas', 36.1699, -115.1398]   ];
                        
    // Info Window Content
    var new_infoWindowContent = [
		['<div class="info_content">' +
'<h3>Z Networks - Marysville</h3>' +
'<p>1289 State Ave, Suite E<br/>Marysville, WA 98270</p>' + '</div>'],
['<div class="info_content">' +
'<h3>Z Networks - Seattle</h3>' +
'<p>655 S. Orcas Street, Suite 200<br/>Seattle, WA 98108</p>' + '</div>'],
['<div class="info_content">' +
'<h3>Z Networks - Portland</h3>' +
'<p>3880 SE 8th Ave, Suite 205<br/>Portland, OR 97202</p>' + '</div>'],
['<div class="info_content">' +
'<h3>Z Networks - Orange County</h3>' +
'<p>1580 E. Edinger Ave, Suite O<br/>Santa Ana, CA 92705</p>' + '</div>'],
['<div class="info_content">' +
'<h3>Z Networks - Concord</h3>' +
'<p>3350 Clayton Rd, Suite 100<br/>Concord, CA 94520</p>' + '</div>'],
['<div class="info_content">' +
'<h3>Z Networks - Beverly Hills</h3>' +
'<p>291 La Cienega Blvd, Suite 406, Beverly Hills 90211</p>' + '</div>'],
['<div class="info_content">' +
'<h3>Z Networks - Las Vegas</h3>' +
'<p>3305 Spring Mountain Road #64<br/>Las Vegas, NV</p>' + '</div>']
    ];
        
    // Display multiple markers on a map
    var new_infoWindow = new google.maps.InfoWindow(), marker, i;
    
    // Loop through our array of markers & place each one on the map  
    for( i = 0; i < markers.length; i++ ) {
        var new_position = new google.maps.LatLng(markers[i][1], markers[i][2]);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: markers[i][0]
        });
        
        // Allow each marker to have an info window    
        google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
            return function() {
                infoWindow.setContent(infoWindowContent[i][0]);
                infoWindow.open(map, marker);
            }
        })(marker, i));

        // Automatically center the map fitting all markers on the screen
        map.fitBounds(bounds);
    }

    // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    var new_boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
        this.setZoom(4);
        google.maps.event.removeListener(boundsListener);
    });
    
}