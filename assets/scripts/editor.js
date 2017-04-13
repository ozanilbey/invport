$(document).ready(function() {
    var currentNumber = $('#projectindustry').attr('value');
    if(currentNumber != '0') {
        $('a[data-number="0"]').remove();
        $('a[data-number="' + currentNumber + '"]').prependTo('.dropdown');
    }
    $('.dropdown a').click(function() {
        $('a[data-number="0"]').remove();
        if($('.dropdown').hasClass('open')) {
            $(this).prependTo('.dropdown');
            var number = $(this).data('number');
            $('#projectindustry').attr('value', number);
            var id = $(this).attr('href').substring(1);
            var src = $('.icon').attr('src');
            var path = src.substring(0, src.lastIndexOf("/"));
            $('.icon').attr('src', path + '/' + id + '.png');
            $('.dropdown').removeClass('open');
        } else {
            $('.dropdown').addClass('open');
        }
    });
});