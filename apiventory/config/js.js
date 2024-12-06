 $(function(){
  document.addEventListener("touchstart", function() {}, true);
    //toggleClass Menu
     $('#toggle').click(function(){
     	$('body').toggleClass('is-open');
     });
	//menu scroll 
  $(window).scroll(function() {
    //au-delà de 150 au scroll
      var scroll = $(window).scrollTop();
        if (scroll >= 150) {
          //un scroll down ajoute la class OU un scroll up retire la class
          //à partir de 768px de large
              $('html').on('DOMMouseScroll mousewheel', function (e) {
          	  if(e.originalEvent.detail > 0 || e.originalEvent.wheelDelta < 0 && !$(".dropdown-menu").hasClass("show")&&($(document).width() > 768 )) { 
          	    $( "body" ).addClass( "hide-nav-bar" );
          	  } else {
          		$( "body" ).removeClass( "hide-nav-bar" );
          	  }
          	});
      };  
    });

    //stop propagation dropdown BS
    $('#topPage').click(function(){
      $('html, body').animate({scrollTop:$('body').offset().top},1000);
        if ($("body").hasClass("hide-nav-bar")) {
          $( "body" ).removeClass( "hide-nav-bar" );
        };
    });    
    //stop propagation dropdown BS
    $(document).on('click', '.stopPropa', function (e) {e.stopPropagation();})  
});	
$(document).ready(function(){
    //animated    
    setTimeout(
    function(){
      $('.animated').addClass("started");
        },
    200); 
});