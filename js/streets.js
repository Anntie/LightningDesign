function initialize() {
  var input = document.getElementById("adress");

  var options = {
    bounds: new google.maps.Circle({center: new google.maps.LatLng(50.436338, 30.577387), radius: 200}).getBounds(),
    componentRestrictions: {country: "ua"},
    types: ['address']
  };

  var autocomplete = new google.maps.places.Autocomplete(input, options);
}

google.maps.event.addDomListener(window, 'load', initialize);
