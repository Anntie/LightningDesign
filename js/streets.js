function initialize() {
  var input = document.getElementById("adress");
  var defaultBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(50.590866, 30.239638),
    new google.maps.LatLng(50.226001, 30.900607));

  var options = {
    bounds: defaultBounds,
    componentRestrictions: {country: "ua"},
    types: ['address']
  };

  var autocomplete = new google.maps.places.Autocomplete(input, options);
}

google.maps.event.addDomListener(window, 'load', initialize);
