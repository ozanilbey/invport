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
    
});