var hw, hh, hp;

$(window).on("load resize", function(){
	hw = $('#title').width();
	hh = hw/8;
	hp = hh/2;
	$('#title').height(hh);
	$('#title').css({"padding": + hp +"px 25px"});
	// console.log(w,h,p);	
});


bh = $('#banner').height();
wh = $(window).height();
bp = 20;

function getVisible() {    
    var $el = $('#contact'),
        scrollTop = $(this).scrollTop(),
        scrollBot = scrollTop + $(this).height(),
        elTop = $el.offset().top,
        elBottom = elTop + $el.outerHeight(),
        visibleTop = elTop < scrollTop ? scrollTop : elTop,
        visibleBottom = elBottom > scrollBot ? scrollBot : elBottom,
        visible = (visibleTop - visibleBottom)*(-1);
        dif = wh - bh - visible; //Distane between banner and contact
        console.log(dif);
    if (dif<0){
    	// bp += visible2/4;
    	$("#banner").css({"top": + dif + "px"});
    	console.log('daddy');
	}else{
		$("#banner").css({"top": "0px"});
	}
}

$(window).on('scroll', getVisible);