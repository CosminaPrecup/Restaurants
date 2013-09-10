function initialize($mapLat,$mapLng)
{   
var mapProp = {
  center:new google.maps.LatLng($mapLat,$mapLng),
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}


