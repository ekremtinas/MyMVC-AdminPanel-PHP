$(document).ready(() => {

    var sign_out = $('#sign-out');
    var token = sign_out.data('id');
    sign_out.on('click', () => {
        $.ajax({
            url: "?url=sign-out",
            type: "POST",
            data: {
                token: token
            },
            success: function (result) {
                window.location.href="?url=login";
            }
        });

    });



});