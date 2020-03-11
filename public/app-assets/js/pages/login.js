/*
 *  Document   : login.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Log In page
 */

var Login = function() {

    return {
        init: function() {
            /* Jquery Validation, Check out more examples and documentation at https://github.com/jzaefferer/jquery-validation */
            /* Log In form - Initialize Validation */
            $('#form-log-in').validate({
                errorClass: 'help-block animation-slideDown', // You can change the animation class for a different entrance animation - check animations page
                errorElement: 'div',
                errorPlacement: function(error, e) {
                    e.parents('.form-group > div').append(error);
                },
                highlight: function(e) {
                    $(e).closest('.form-group').removeClass('has-success has-error').addClass('has-error');
                    $(e).closest('.help-block').remove();
                },
                success: function(e) {
                    e.closest('.form-group').removeClass('has-success has-error');
                    e.closest('.help-block').remove();
                },
                rules: {
                    'login-email': {
                        required: true,
                        email: true
                    },
                    'login-password': {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    'login-email': 'Por favor, entre com o email de sua conta',
                    'login-password': {
                        required: 'digite uma senha',
                        minlength: 'Sua senha deve ter mais de 5 caracteres'
                    }
                }
            });
        }
    };
}();