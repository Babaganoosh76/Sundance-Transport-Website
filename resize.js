var hw, hh, hp;

// $(window).on("load resize", function(){
// 	hw = $('#title').width();
// 	hh = hw/8;
// 	hp = hh/2;
// 	// $('#title').height(hh);
// 	$('#title').css({"padding": + hp +"px 25px"});
// });

function getVisible() {    
    var $el = $('#footer'),
        scrollTop = $(this).scrollTop(),
        scrollBot = scrollTop + $(this).height(),
        elTop = $el.offset().top,
        elBottom = elTop + $el.outerHeight(),
        visibleTop = elTop < scrollTop ? scrollTop : elTop,
        visibleBottom = elBottom > scrollBot ? scrollBot : elBottom,
        visible = (visibleTop - visibleBottom)*(-1);
        dif = window.innerHeight - $('#banner').height() - visible; //Distane between banner and contact
    if (dif<0)
    	$("#banner").css({"top": + dif + "px"});
    else
		$("#banner").css({"top": "0px"});
}
$(window).on('scroll', getVisible);



var w;
$(window).on("load resize", function(){
    w = $('#two.spinner').width();
    $('#two.spinner').css({"height": w/2 +"px"});
});