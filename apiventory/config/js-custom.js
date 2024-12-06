$(document).ready(function() {
    var speed = 1000;
    var container =  $('.start-effect');
    container.each(function() {
        var elements = $(this).children();
        elements.each(function() {
            var elementOffset = $(this).offset();
            var offset = elementOffset.left*0.8 + elementOffset.top;
            var delay = parseFloat(offset/speed).toFixed(2);
            $(this)
                .css("-webkit-animation-delay", delay+'s')
                .css("-o-animation-delay", delay+'s')
                .css("animation-delay", delay+'s')
                .addClass('smooth');
        });
    });
    $('.toggleBtn').click(function(){
      $('.heroTitle').toggleClass('reduit');
    });

    $(function () {
      $('[data-toggle="popover"]').popover()
    })
    // List / Grid toggle
    $('.toggleBtn').click(function(){
      $('.parentMainSidebar').toggleClass('reduit');
      $('.mainSidebar.toggleZone').fadeToggle();
    });
});
