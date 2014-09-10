    function initialize1() {

            navigator.geolocation.getCurrentPosition(
               function (position) {

                   var maploc = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                   
                  plotmap1(maploc);
               });
           }

        function  plotmap1(maploc){

            map = new google.maps.Map(document.getElementById('map-canvas'), {
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: maploc,
                zoom:15
            });

            var newmarker = new google.maps.Marker({
                map: map,
                title: "You are Here",
                position: maploc,
                //size: 20
            });

            //var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var input = document.getElementById('TextField1');
            var autocomplete = new google.maps.places.Autocomplete(input);

            autocomplete.bindTo('bounds', map);

            var infowindow = new google.maps.InfoWindow();
            var marker = new google.maps.Marker({
                map: map
            });

            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                infowindow.close();
                marker.setVisible(false);
                input.className = '';
                var place = autocomplete.getPlace();
                if (!place.geometry) {
                    // Inform the user that the place was not found and return.
                    input.className = 'notfound';
                    return;
                }

                // If the place has a geometry, then present it on a map.
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } 
                else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);  // Why 17? Because it looks good.
                }

                var image = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(35, 35)
                };

                marker.setIcon(image);
                marker.setPosition(place.geometry.location);
                marker.setVisible(true);

                if(place.rating)
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + place.formatted_address + '<br>Ratings: ' + place.rating);
                
                else
                infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + place.formatted_address);

                infowindow.open(map, marker);
            });

            
        }
        google.maps.event.addDomListener(window, 'load', initialize1);