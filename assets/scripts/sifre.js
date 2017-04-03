$(document).ready(function() {
    
    var requiredPasswordLength = 6;
    
    var passwordApproved = false;
    
    $('#password').bind('change keyup', function() {
        if($('#password').val().length >= requiredPasswordLength) {
            passwordApproved = true;
        } else {
            passwordApproved = false;
        }
    });
    
    var newPasswordApproved = false;
    
    $('#newpassword').bind('change keyup', function() {
        if($('#newpassword').val().length >= requiredPasswordLength) {
            newPasswordApproved = true;
            $('#newpassword').addClass('valid');
            $('#newpassword').removeClass('invalid');
        } else {
            newPasswordApproved = false;
            $('#newpassword').addClass('invalid');
            $('#newpassword').removeClass('valid');
        }
    });
    
    $('#password, #newpassword').bind('change keyup', function() {
        if (passwordApproved == true && newPasswordApproved == true) {
            $('#submit').removeAttr('disabled');
        } else {
            $('#submit').prop('disabled', true);
        }
    });
    
});