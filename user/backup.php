<?php
	include("connection.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Map Of India</title>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height:100%;
        width:100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;

      }
   }
    </style>
       <a style="text-decoration:none;color:black" class="btn btn-warning btn-md" href="disastercenter.php" 
          onclick="return confirm('Sure to Move?');"><b><center>
           <font style="font-size:20px;text-decoration:NULL;border-style:solid;">&nbsp;Click here to go Back To Dashboard&nbsp;</font>
          </center></b></a>
          <hr/>
  </head>
  <body>
    <div id="map"></div>
    <script>
      // This example creates circles on the map, representing populations in North
      // America.

      // First, create an object containing LatLng and population for each city.
      var citymap = {
        AndhraPradesh: {
          center: {lat: 15.9129, lng: 79.74},
          population: 557794,name:'AndhraPradesh'
        },
        ArunachalPradesh: {
          center: {lat: 28.218, lng: 94.7278},
          population: 840583,name:'ArunachalPradesh'
        },
        Assam: {
          center: {lat: 26.2006, lng: 92.9376},
          population: 385779,name:'Assam'
        },
      Assam: {
          center: {lat: 26.2006, lng: 92.9376},
          population: 603502,name:'Assam'
        },
        Bihar: {
            center: {lat:25.0961, lng: 85.3131},
            population: 603502,name:'Bihar'
          },
          Chattisgarh: {
              center: {lat:21.2787, lng: 81.8661},
              population: 603502,name:'Chattisgarh'
            },
          Delhi: {
            center: {lat:28.6863, lng: 77.2218},
            population: 603502,name:'Delhi'
          },
          Gujarat: {
            center: {lat:22.2587, lng: 71.1924},
            population: 603502,name:'Gujarat'
          },
          Haryana: {
            center: {lat:29.0588, lng: 76.0856},
            population: 603502,name:'Haryana'
          },
           HimachalPradesh: {
            center: {lat:31.1048, lng: 77.1734},
            population: 603502,name:'HimachalPradesh'
          },
           JammuKashmir: {
            center: {lat:33.7782, lng: 76.5762},
            population: 603502,name:'JammuKashmir'
          },
             Jharkhand: {
            center: {lat:23.6102, lng: 85.2799},
            population: 603502,name:'Jharkhand'
          },
             Karnataka: {
            center: {lat:15.3173, lng: 75.7139},
            population: 603502,name:'Karnataka'
          },
           Kerala: {
            center: {lat:10.8505, lng: 76.2711},
            population: 603502,name:'Kerala'
          },
           MadhyaPradesh: {
            center: {lat:22.9734, lng: 78.6569},
            population: 603502,name:'MadhyaPradesh'
          },
          Maharashtra: {
            center: {lat:19.7515, lng: 75.7139},
            population: 603502,name:'Maharashtra'
          },
            Manipur: {
            center: {lat:23.7072, lng: 73.5211},
            population: 603502,name:'Manipur'
          },
          Meghalaya: {
            center: {lat:25.467, lng: 91.3662},
            population: 603502,name:'Meghalaya'
          },
          Mizoram: {
            center: {lat:23.1645, lng: 92.9376},
            population: 603502,name:'Mizoram'
          },
          Nagaland: {
            center: {lat:26.1584, lng: 94.5624},
            population: 603502,name:'Nagaland'
          },
          Orissa: {
            center: {lat:20.9517, lng: 85.0985},
            population: 603502,name:'Orissa'
          },
          Punjab: {
            center: {lat:31.1471, lng: 75.3412},
            population: 603502,name:'Punjab'
          },
          Rajasthan: {
            center: {lat:27.0238, lng: 74.2179},
            population: 603502,name:'Orissa'
          },
          Sikkim: {
            center: {lat:27.533, lng: 88.5122},
            population: 603502,name:'Sikkim'
          },
          TamilNadu: {
            center: {lat:20.9517, lng: 85.0985},
            population: 603502,name:'78.6569'
          }
      };
                        
      function initMap() {
        // Create the map.
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4.9,
          center: {lat: 22.2587, lng: 71.1924},
          mapTypeId: 'terrain'
        });
        for (var city in citymap) {
                  var marker = new google.maps.Marker({
                    map: map,
                       draggable: true,
                    center: citymap[city].center,
                    //label :citymap[city].name,
                    animation: google.maps.Animation.DROP,
                    radius: Math.sqrt(citymap[city].population) * 100,
                    position: citymap[city].center,
                    //icon: {
      //url: "http://maps.google.com/mapfiles/ms/icons/yellow-dot.png"
  //  }           
          label: {
          color: 'magneta', // <= HERE
          fontSize: '15px',
          fontWeight: '850',
          text: citymap[city].name
        }

            });

        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC96m1QCMXwfjaBie9X-iJB8zBnfqffahg&callback=initMap">
    </script>
  </body>
</html>
