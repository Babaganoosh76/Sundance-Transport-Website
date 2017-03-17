function getVisible() {    
    var $el = $('#footer'),
        scrollTop = $(this).scrollTop(),
        scrollBot = scrollTop + $(this).height(),
        elTop = $el.offset().top,
        elBottom = elTop + $el.outerHeight(),
        visibleTop = elTop < scrollTop ? scrollTop : elTop,
        visibleBottom = elBottom > scrollBot ? scrollBot : elBottom,
        visible = (visibleTop - visibleBottom)*(-1);
        dif = window.innerHeight - $('#banner1').height() - visible; //Distane between banner and contact
    if (dif<0)
    	$("#banner1").css({"top": + dif + "px"});
    else
		$("#banner1").css({"top": "0px"});
}
$(window).on('scroll', getVisible);

$(window).on("load resize", function(){
    var w = $('#two.spinner').width();
    $('#two.spinner').css({"height": w/2 +"px"});
});

$(window).on("load", function(){
    $('.sunburst').attr("src", "spinner/sunburst.png");
});