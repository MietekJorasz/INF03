$(function() {

    // index.php - error
    $("#error").css("display", "none");

    $("#close").click(function(){
        $("#error").fadeOut();
    });
    
    // $("#visibility").click(function(){
    //     let passwordInput = $('#password');
    //     let currentType = passwordInput.attr('type');

    //     if (currentType === 'password') {
    //         passwordInput.attr('type', 'text');
    //         $("#visibility").attr('src', 'assets/visibility.png');

    //     } else {
    //         passwordInput.attr('type', 'password');
    //         $("#visibility").attr('src', 'assets/visibility_off.png');
    //     }
    // });

    // index.php
    $("#btn").click(function() {
        if ($("#username").val().length > 0 && $("#password").val().length > 0) {
            
            $(this).html("<span class='loader'></span>");

            let formData = $('form').serialize();

            $.ajax({
                url: 'login.php',
                method: 'POST',
                data: formData
            })
            .then(function(response) {
                if (response == 'success') {
                    window.location.href = './dashboard/';
                } else {
                    $("#btn").html("Login");
                    $("#password").attr("value", " ");
                    $("#error").fadeIn();
                }
            });
        }
    });
});