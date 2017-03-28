$(document).ready(function() {
    
    $('.sign > a.option').click(function(){
        $('.sign > a.option').removeClass('active');
        $(this).addClass('active');
    });
    
    var fullnameApproved = false;
    
    var requiredFullnameLength = 6;
    
    $('#fullname').bind('change keyup', function() {
        if($('#fullname').val().length >= requiredFullnameLength) {
            fullnameApproved = true;
            $('#fullname').addClass('valid');
            $('#fullname').removeClass('invalid');
        } else {
            fullnameApproved = false;
            $('#fullname').addClass('invalid');
            $('#fullname').removeClass('valid');
        }
    });
    
    var emailApproved = false;
    
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    
    $('#email').bind('change keyup', function() {
        var emailAddress = $('#email').val();
        if(pattern.test(emailAddress) == true) {
            emailApproved = true;
            $('#email').addClass('valid');
            $('#email').removeClass('invalid');
        } else {
            emailApproved = false;
            $('#email').addClass('invalid');
            $('#email').removeClass('valid');
        }
    });
    
    var passwordApproved = false;
    
    var requiredPasswordLength = 6;
    
    $('#password').bind('change keyup', function() {
        if($('#password').val().length >= requiredPasswordLength) {
            passwordApproved = true;
            $('#password').addClass('valid');
            $('#password').removeClass('invalid');
        } else {
            passwordApproved = false;
            $('#password').addClass('invalid');
            $('#password').removeClass('valid');
        }
    });
    
    var authorizationApproved = false;
    
    $('.checkbox .boolean').click(function() {
        if ($(this).hasClass('true')) {
            $(this).parent().children('input[type="checkbox"]').removeAttr('checked');
            authorizationApproved = false;
            $('#submit').prop('disabled', true);
        } else {
            $(this).parent().children('input[type="checkbox"]').attr('checked', true);
            authorizationApproved = true;
            if(fullnameApproved == true && emailApproved == true && passwordApproved == true) {
                $('#submit').removeAttr('disabled');
            } else {
                $('#submit').prop('disabled', true);
            }
        }
        $(this).toggleClass('true');
    });
    
    $('#fullname, #email, #password').bind('change keyup', function() {
        if(fullnameApproved == true && emailApproved == true && passwordApproved == true && authorizationApproved == true) {
            $('#submit').removeAttr('disabled');
        } else {
            $('#submit').prop('disabled', true);
        }
    });
    
});