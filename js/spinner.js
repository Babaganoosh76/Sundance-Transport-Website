var rot;
$(window).scroll( function(){
	rot = $(window).scrollTop()/10;
	$('.sunburst').css({"transform": "rotate("+rot+"deg)"});
});

$(window).on("load resize", function(){
    var w = $('#banner1 .spinner').width();
    $('#banner1 .spinner').css({"height": w/2 +"px"});
});

$(window).on("load", function(){
    $('.sunburst').attr("src", "pics/sunburst.png");
});