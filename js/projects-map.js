var map;

function initialize() {
    
    var styles = [
        {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [{
                "color": "#DDDDDD"
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry",
            "stylers": [{
                "color": "#FFFFFF"
            }, {
            "weight": 1,
            }]
        }, {
            "featureType": "administrative",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "water",
            "elementType": "all",
            "stylers": [{
                "color": "#FFFFFF"
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "road",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "poi",
            "elementType": "all",
            "stylers": [{
                "visibility": "off"
            }]
        }
    ];
    
    var myOptions = {
        zoom: 2,
        center: new google.maps.LatLng(10, 0),
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: styles,
        scrollwheel: false,
    };

    map = new google.maps.Map(document.getElementById('projects-map'),
        myOptions);

    // Initialize JSON Request for Country Boundaries
    var country_script = document.createElement('script');
    var country_url = ['https://www.googleapis.com/fusiontables/v1/query?'];
    country_url.push('sql=');
    var country_query = 'SELECT name, kml_4326, iso_a2 FROM ' + '1foc3xO9DyfSIF6ofvN0kp2bxSfSeKog5FbdWdQ';
    var country_encodedQuery = encodeURIComponent(country_query);
    country_url.push(country_encodedQuery);
    country_url.push('&callback=drawCountries');
    country_url.push('&key=AIzaSyAm9yWCV7JPCTHCJut8whOjARd7pwROFDQ');
    country_script.src = country_url.join('');
    var body = document.getElementsByTagName('body')[0];
    body.appendChild(country_script);
    
    // Initialize JSON Request for US State Boundaries
    var state_script = document.createElement('script');
    var state_url = ['https://www.googleapis.com/fusiontables/v1/query?'];
    state_url.push('sql=');
    var state_query = 'SELECT name, geometry, id FROM ' + '1-v6i33Lf_FjhRZcHKO0PG2DADipCg4L-dGiucAE';
    var state_encodedQuery = encodeURIComponent(state_query);
    state_url.push(state_encodedQuery);
    state_url.push('&callback=drawStates');
    state_url.push('&key=AIzaSyAm9yWCV7JPCTHCJut8whOjARd7pwROFDQ');
    state_script.src = state_url.join('');
    var body = document.getElementsByTagName('body')[0];
    body.appendChild(state_script);
}

function drawStates(data) {
    var rows = data['rows'];
    var newCoordinates = [];
    for (var k in rows) {
    
        if (rows[k][2] == 'AL' || rows[k][2] == 'MT') {
            var geometries = rows[k][1]['geometries'];
            if (geometries) {
                for (var j in geometries) {
                    newCoordinates.push(constructNewCoordinates(geometries[j]));
                }
            } else {
                newCoordinates = constructNewCoordinates(rows[k][1]['geometry']);
            }
            
            var state = new google.maps.Polygon({
                paths: newCoordinates,
                strokeColor: "#FFFFFF",
                strokeOpacity: 1,
                strokeWeight: 1,
                fillColor: "#999999",
                fillOpacity: 1,
                countryName: rows[k][0],
            });
            
            state.setMap(map);
            
            google.maps.event.addListener(state, 'mouseover', function () {
                this.setOptions({
                    fillColor: "#77CCD6",
                    fillOpacity: 1
                });

            });

            google.maps.event.addListener(state, 'mouseout', function () {
                this.setOptions({
                    fillColor: "#999999"
                });
            });
        }
    }
    
    console.log(rows);
}



/**
 *  Function: Draw Countries
 *  This functions draws, and highlights all of the countries in the world,
 *  excluding the United States which is handled by state. It also sets up hover
 *  states on an object basis.
 */
function drawCountries(data) {
    var rows = data['rows'];
    var countries_with_projects = [];
    var infoBoxes = {};
    
    for (var i in rows) {
        if (rows[i][0] != 'United States') {
            var newCoordinates = [];
            var geometries = rows[i][1]['geometries'];
            if (geometries) {
                for (var j in geometries) {
                    newCoordinates.push(constructNewCoordinates(geometries[j]));
                }
            } else {
                newCoordinates = constructNewCoordinates(rows[i][1]['geometry']);
            }
            
            if (rows[i][2] in map_project_data) {
                var country = new google.maps.Polygon({
                    paths: newCoordinates,
                    strokeColor: "#FFFFFF",
                    strokeOpacity: 1,
                    strokeWeight: 1,
                    fillColor: "#999999",
                    fillOpacity: 1,
                    countryName: rows[i][0],
                });
                
                if (rows[i][2] == 'US') {
                    console.log('United States');
                }

                country.setMap(map);
                
                var marker = new google.maps.Marker({
                 map: map,
                 position: newCoordinates[0],
                 visible: false
                });

                    var boxText = document.createElement("div");
                    boxText.style.cssText = "border: 1px solid #77CCD6; margin-top: 8px; background: #EFEFEF; padding: 5px;";
                    boxText.innerHTML = rows[i][0];

                var myIBOptions = {
                     content: boxText
                    ,disableAutoPan: false
                    ,maxWidth: 0
                    ,pixelOffset: new google.maps.Size(-140, 0)
                    ,zIndex: null
                    ,boxStyle: {
                      opacity: 1
                      ,width: "280px"
                     }
                    ,closeBoxMargin: "10px 2px 2px 2px"
                    ,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
                    ,infoBoxClearance: new google.maps.Size(1, 1)
                    ,isHidden: false
                    ,pane: "floatPane"
                    ,enableEventPropagation: false
                    ,visible: 0
                };
                
                var infoBox_name = 'ib_' + country.countryName;
                console.log(infoBox_name);
                
                infoBoxes[infoBox_name] = new InfoBox(myIBOptions);
                infoBoxes[infoBox_name].open(map, marker);
                
                google.maps.event.addListener(country, 'mouseover', function () {
                    this.setOptions({
                        fillColor: "#77CCD6",
                        fillOpacity: 1
                    });
                    infoBoxes['ib_' + this.countryName].setVisible(1);
                    
                });

                google.maps.event.addListener(country, 'mouseout', function () {
                    this.setOptions({
                        fillColor: "#999999"
                    });
                    infoBoxes['ib_' + this.countryName].setVisible(0);
                });
            
            }
        }
    }
    
}

function constructNewCoordinates(polygon) {
    var newCoordinates = [];
    var coordinates = polygon['coordinates'][0];
    for (var i in coordinates) {
        newCoordinates.push(
            new google.maps.LatLng(coordinates[i][1], coordinates[i][0]));
    }
    return newCoordinates;
}

google.maps.event.addDomListener(window, 'load', initialize);