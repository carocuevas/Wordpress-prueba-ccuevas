function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(-33.4169657, -70.56143179999998),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}


$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});


$(document).ready(function(){

	$('#caro').submit(function(){

		var datos = $(this).serialize();

		$.ajax({
		  url: "http://186.64.118.50/~feg7carolina",
		  context: document.body,
		  data: datos,
		}).done(function() {
		  alert('Enviado con éxito');
		});
	});

});

