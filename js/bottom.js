
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})


// var __ez_dims = (function() {
// 	var setCookie = function( name, content, expiry ) {
// 		return document.cookie = name+'='+content+((expiry)?';expires='+(new Date(Math.floor(new Date().getTime()+expiry*1000)).toUTCString()):'');
// 	};
// 	var ffid = 1;
// 	var oh = window.screen.height;
// 	var ow = window.screen.width;
// 	var h = ffid === 1 ? oh : (oh > ow) ? oh : ow;
// 	var w = ffid === 1 ? ow : (oh > ow) ? ow : oh;
// 	var uh = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
// 	var uw = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
// 	setCookie('ezds', encodeURIComponent('ffid='+ffid+',w='+w+',h='+h), (31536e3*7));
// 	setCookie('ezohw', encodeURIComponent('w='+uw+',h='+uh), (31536e3*7));
// })();

//   if(typeof ezosuigeneris != "undefined") {
//     var ezosuigenerisDate = new Date();
//     ezosuigenerisDate.setMonth(ezosuigenerisDate.getMonth() + 24);
//     document.cookie = "ezosuigeneris=" + ezosuigeneris + ";expires=" + ezosuigenerisDate.toUTCString() + ";domain="+ezdomain+";path=/";
// }
