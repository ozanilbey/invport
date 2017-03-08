$(document).ready(function() {
    var main = $('body').attr('id');
    $('.menu > a').removeClass('active');
    $('.menu > a.' + main).addClass('active');
    var viewportHeight;
    viewportHeight = $(window).height();
    $('body').css('min-height', viewportHeight + 'px');
    $('a[href="#"]').click(function(e){
        e.preventDefault();
    });
    if($(window).scrollTop() <= 0){
        $('nav').css('background-color', 'rgba(255, 255, 255, 0)').css('box-shadow', '0 1px 5px rgba(0, 0, 0, 0), 0 1px 3px rgba(0, 0, 0, 0)');
    } else if ($(window).scrollTop() > 0 && $(window).scrollTop() <= 100) {
        $('nav').css('background-color', 'rgba(255, 255, 255, ' + $(window).scrollTop() / 100 + ')').css('box-shadow', '0 1px 5px rgba(0, 0, 0, ' + $(window).scrollTop() / 2000 + '), 0 1px 3px rgba(0, 0, 0, ' + $(window).scrollTop() / 1000 + ')');
    } else {
        $('nav').css('background-color', 'rgba(255, 255, 255, 1)').css('box-shadow', '0 1px 5px rgba(0, 0, 0, .05), 0 1px 3px rgba(0, 0, 0, .1)');
    }
    $('body.logged .menu > a').last().click(function(){
        $('.menu > a').last().toggleClass('clicked');
        $('.submenu').toggleClass('open');
    });
    $('body.logged .submenu > a').click(function(){
        $('.menu > a').last().toggleClass('clicked');
        $('.submenu').toggleClass('open');
    });
});

$(window).resize(function() {
    var viewportHeight;
    viewportHeight = $(window).height();
    $('body').css('min-height', viewportHeight + 'px');
    $('section.overlay').css('height', viewportHeight + 'px');
});


$(window).scroll(function() {
    if($(window).scrollTop() <= 0){
        $('nav').css('background-color', 'rgba(255, 255, 255, 0)').css('box-shadow', '0 1px 5px rgba(0, 0, 0, 0), 0 1px 3px rgba(0, 0, 0, 0)');
    } else if ($(window).scrollTop() > 0 && $(window).scrollTop() <= 100) {
        $('nav').css('background-color', 'rgba(255, 255, 255, ' + $(window).scrollTop() / 100 + ')').css('box-shadow', '0 1px 5px rgba(0, 0, 0, ' + $(window).scrollTop() / 2000 + '), 0 1px 3px rgba(0, 0, 0, ' + $(window).scrollTop() / 1000 + ')');
    } else {
        $('nav').css('background-color', 'rgba(255, 255, 255, 1)').css('box-shadow', '0 1px 5px rgba(0, 0, 0, .05), 0 1px 3px rgba(0, 0, 0, .1)');
    }
});