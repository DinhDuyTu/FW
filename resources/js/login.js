$(document).ready(function () {
    $('#login_name').blur(function () {
        let name = $(this).val();
        name = name.trim();
        if (!name) {
            $('.alert-name').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Name is not null!</p>');
        } else {
            $('.alert-name').html('');
        }
    })
    $(document).on('blur', '#login_username', function () {
        let email = $(this).val();
        email = email.trim();
        if (!email) {
            $('.alert-email').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Email is not null!</p>');
        } else {
            $('.alert-email').html('');
        }
    })
    $(document).on('blur', '#login_password', function () {
        let password = $(this).val();
        password = password.trim();
        if (!password) {
            $('.alert-password').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Password is not null!</p>');
        } else {
            $('.alert-password').html('');
        }
    })
    $(document).on('blur', '#login_confirm_password', function () {
        let confirm_password = $(this).val();
        confirm_password = confirm_password.trim();
        if (!confirm_password) {
            $('.alert-confirm-password').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Confirm Password is not null!</p>');
        } else {
            $('.alert-confirm-password').html('');
        }
    })

    $(document).on('click', '.btn-submit-register', function () {
        let name = $(this).val();
        name = name.trim();
        if (!name) {
            $('.alert-name').html('<p style="color: red; margin-left: 10px "><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Name is not null!</p>');
        } else {
            $('.alert-name').html('');
        }
    });
});