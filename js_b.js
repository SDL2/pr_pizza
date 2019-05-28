
                    /* Google Maps settings       */
//alert("aaaaa");

window.onload = function() {
  map();
};

var galerias = {"lat" : "13.702206", "long" : "-89.229754", "name" : "Sucursal Galerias"};
var multi = {"lat" : "13.679374", "long" : "-89.248668", "name" : "Sucursal Multiplaza"};
var centroH = {"lat" : "13.699481", "long" : "-89.189592", "name" : "Sucursal Centro"};

function showGalerias(){
  map(galerias.lat, galerias.long, galerias.name);
}
function showMultiplaza(){
  map(multi.lat, multi.long, multi.name);
}
function showCentroH(){
  map(centroH.lat, centroH.long, centroH.name)
}


//

  // Regular map
  function map(lat = 13.708653, long = -89.247018, name = "BITLAB Academy") {

  document.getElementById("name_label").innerHTML = name;

    var var_location = new google.maps.LatLng(lat, long);

    var var_mapoptions = {
      center: var_location,
      zoom: 16
    };

    var var_map = new google.maps.Map(document.getElementById("map-container"),
      var_mapoptions);

    var var_marker = new google.maps.Marker({
      position: var_location,
      map: var_map,
      title: name
    });

  } //map() END

  // Initialize maps
  //google.maps.event.addDomListener(window, 'load', map);
