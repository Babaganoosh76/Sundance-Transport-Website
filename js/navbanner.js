function getVisible() {
    var $el = $('#contact'),
        scrollTop = $(window).scrollTop(),
        scrollBot = scrollTop + $(window).height(),
        elTop = $el.offset().top,
        elBottom = elTop + $el.outerHeight(),
        visibleTop = elTop < scrollTop ? scrollTop : elTop,
        visibleBottom = elBottom > scrollBot ? scrollBot : elBottom,
        visible = (visibleTop - visibleBottom)*(-1);
        visDif = window.innerHeight - $('#visible').height() - visible; //Distane between visible and contact
        visSub = window.innerHeight - $('#banner1').height() - visible; //Distane between subhaul and contact
    if (visDif<0)
        $("#visible").css({"top": + visDif + "px"});
    else
        $("#visible").css({"top": "0px"});

    if (visSub<0)
        $("#banner1 #subhaul").css({"left": + visSub + "px"});
    else
        $("#banner1 #subhaul").css({"left": "0px"});
}

$(window).on('scroll', getVisible);

function getVisibleCont(dur) {
    var bioTransition = setInterval(getVisible, 10);
    setTimeout(function(){
        clearInterval(bioTransition);
    }, dur);
}
