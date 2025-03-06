jQuery(document).ready(function($) {
    
    jQuery(".med-forgot-form").on("submit", function(e){
        var username = jQuery('#username').val();
        var newPass = jQuery('#new_password').val();
        var confirmPass = jQuery('#confirm_password').val();
        // if(username == '' || newPass == '' || confirmPass == ''){
        //     jQuery(".msg-text").html('Please enter all <strong>required</strong> detail.');
        //     jQuery(".message").removeClass('no-display');
        //     e.preventDefault();
        //     return false;
        // }
        // Invalid log in or password.
        if (newPass != confirmPass) {
            jQuery(".msg-text").html('Password not <strong>match!</strong>.');
            jQuery(".message").removeClass('no-display');
            jQuery(".message .alert").removeClass('no-display');
            e.preventDefault();
            return false;
        } else {
            return true;
        }
    });

    jQuery(".med-forgot-form").on("keyup", function(e){
        if(!jQuery(".message").hasClass('no-display')){
            jQuery(".message").addClass('no-display')
        }
    });

    jQuery(".toggle-password").on('click', function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
          input.attr("type", "text");
        } else {
          input.attr("type", "password");
        }
      });

    jQuery(".forgot-button").on("click", function(e) {
        window.location.href = jQuery(this).data('url');
    });

    jQuery(".closebtn").on("click", function(e) {
        jQuery(this).parent().addClass('no-display');
    });
});