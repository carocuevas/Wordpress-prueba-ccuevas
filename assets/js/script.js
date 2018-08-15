(function($){

	function mycarousel_initCallback(carousel) {

		$('#forw').bind('click', function() {
			carousel.next();
			return false;
		});

		$('#prev').bind('click', function() {
			carousel.prev();
			return false;
		});
	};

	$("#carrusel").jcarousel({
		scroll :1,
		auto: 0,
		wrap : "both",
		initCallback: mycarousel_initCallback,
		buttonNextHTML: null,
		buttonPrevHTML: null
	});

})(jQuery);

function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(51.5, -0.12),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}


$(document).ready() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
 });
