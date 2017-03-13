$(document).ready(function() {
    $('.sign > a.option').click(function(){
        $('.sign > a.option').removeClass('active');
        $(this).addClass('active');
    });
    
    var emailApproved = false;
    
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    
    $('#email').on('keyup', function() {
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
    
    $('#password').on('keyup', function() {
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
    
    $('#email, #password').keyup(function() {
        if (emailApproved == true && passwordApproved == true) {
            $('#submit').removeAttr('disabled');
        } else {
            $('#submit').prop('disabled', true);
        }
    });
    
});