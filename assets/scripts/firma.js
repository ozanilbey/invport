$(document).ready(function() {
    
    var authorizationApproved = false;
    
    $('.checkbox .boolean').click(function() {
        if ($(this).hasClass('true')) {
            $(this).parent().children('input[type="checkbox"]').removeAttr('checked');
        } else {
            $(this).parent().children('input[type="checkbox"]').attr('checked', true);
        }
        $(this).toggleClass('true');
    });
    
    $('.picker').click(function() {
        $('.segments > h1').hide();
        $('.explanation').show();
        $('.segment .button').show();
        $('.action .button').hide();
        $('.caution').show();
    });
    
    $('.cancel').click(function() {
        $('.segments > h1').show();
        $('.explanation').hide();
        $('.segment .button').hide();
        $('.action .button').show();
        $('.caution').hide();
    });
    
});