var rot;
$(window).scroll( function(){
	rot = $(window).scrollTop()/10;
	$('.sunburst').css({"transform": "rotate("+rot+"deg)"});
});