$(document).ready(function() {
    var viewportHeight;
    viewportHeight = $(window).height();
    $('body').css('min-height', viewportHeight + 'px');
    $('a[href="#"]').click(function(e){
        e.preventDefault();
    });
});

$(window).resize(function() {
    var viewportHeight;
    viewportHeight = $(window).height();
    $('body').css('min-height', viewportHeight + 'px');
    $('section.overlay').css('height', viewportHeight + 'px');
});

$(window).scroll(function() {
    
});