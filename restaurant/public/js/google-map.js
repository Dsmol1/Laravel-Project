var google;

var map;
function initMap(){
  var myLatLng = {lat: 54.694330, lng: 25.282907};

  map = new google.maps.Map(document.getElementById('map'), {
      center: myLatLng,
      zoom: 17
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'kavine'
  });
}
