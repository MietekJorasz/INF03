$(function() {
    // register.php - email section
    $("#email").on("input", function(){
        if (checkEmail()){
            $.ajax({
                url: 'check.php',
                method: 'POST',
                data: {
                    email: $("#email").val()
                }
            })
            .then(function(response) {
                if(response == "true"){
                    $("p").fadeOut("fast");
                    $("#btn-email").addClass("active");
                }
                else{
                    if($("#btn-email").hasClass("active")){
                        $("#btn-email").removeClass("active");
                    }
                    $("p").html("Email is invalid or already taken").fadeIn("fast");
                }
            });
            
        }
        else{
            if($("#btn-email").hasClass("active")){
                $("#btn-email").removeClass("active");
            }
            $("p").html("Email is invalid or already taken").fadeIn("fast");
        }
    });

    $("#btn-email").click(function(){
        if (checkEmail()){
            $.ajax({
                url: 'check.php',
                method: 'POST',
                data: {
                    email: $("#email").val()
                }
            })
            .then(function(response) {
                if(response == "true"){
                    $("#btn-email").fadeOut("fast");
                    $("#pass-con").fadeIn("fast");
                    $("#btn-password").fadeIn("fast");
                    $("#email").css({
                        border: 0,
                        backgroundColor: "transparent"
                    });
                }
            });
        }
    });

    $("#email").click(function(){
        $("#btn-email").fadeIn("fast");
        $("#btn-password").fadeOut("fast");
        $("#btn-username").fadeOut("fast");
        $("#dash-con").fadeOut("fast");
    });

    // register.php - password section
    $(".reg>#password").on("input", function(){
        if(checkPass() == 0 || checkPass() == 1 ){
            $("#dash-con").fadeIn("fast");
            $("#g").css("background-color", "red");
            $("#gg").css("background-color", "#bbb");
            $("#ggg").css("background-color", "#bbb");
        }

        if (checkPass() == 2){
            $("#g").css("background-color", "orange");
            $("#gg").css("background-color", "orange");
            $("#ggg").css("background-color", "#bbb");
        }

        if(checkPass() == 3){
            $("#btn-password").addClass("active");
            $("#dash-con").fadeIn("fast");
            $("p").fadeOut("fast");
            $(".dash").each(function(){
                $(this).css("background-color", "green");
            });
        }else{
            $("p").html("Make sure it's at least 8 characters including number, <br> lowercase letter and uppercase letter.").fadeIn("fast");
            if($("#btn-password").hasClass("active")){
                $("#btn-password").removeClass("active");
            } 
        }

    });

    $("#btn-password").click(function(){
        if (checkPass() == 3){
            $("#dash-con").fadeOut("fast");
            $("#btn-password").fadeOut("fast");
            $("#btn-username").fadeIn("fast")
            $("#uname-con").fadeIn("fast");
            $(".reg>#password").css({
                border: 0,
                backgroundColor: "transparent"
            });
        }
    });

    $(".reg>#password").click(function(){
        $("#btn-email").fadeOut("fast");
        $("#btn-password").fadeIn("fast");
        $("#btn-username").fadeOut("fast");
    });

    // register.php - username section
    $("#uname").on("input", function(){
        if(checkUsername()){
            $.ajax({
                url: 'check.php',
                method: 'POST',
                data: {
                    username: $("#uname").val()
                }
            })
            .then(function(response) {
                if(response == "true"){
                    $("p").fadeOut("fast");
                    $("#btn-username").addClass("active");
                }
                else{
                    if($("#btn-username").hasClass("active")){
                        $("#btn-username").removeClass("active");
                    }
                    $("p").html("Username is invalid (only letters and numbers, more than 3 characters) or allready taken").fadeIn("fast");
                }
            });
        }
        else{
            if($("#btn-username").hasClass("active")){
                $("#btn-username").removeClass("active");
            }
            $("p").html("Username is invalid (only letters and numbers, more than 2 signs) or allready taken").fadeIn("fast");
        }
        
    });

    $("#btn-username").click(function(){
        if(checkUsername()){
            $("#btn-username").fadeOut("fast");
            $("#btn").fadeIn("fast")
            $("#uname").css({
                border: 0,
                backgroundColor: "transparent"
            });
        }
    });

    $("#uname").click(function(){
        $("#btn-email").fadeOut("fast");
        $("#btn-password").fadeOut("fast");
        $("#btn-username").fadeIn("fast");
        $("#dash-con").fadeOut("fast");
    });


    $("#btn").click(function() {            
        $(this).html("<span class='loader'></span>");

        let formData = $('form').serialize();

        $.ajax({
            url: 'register.php',
            method: 'POST',
            data: formData
        })
        .then(function(response) {
            if (response == 'true') {
                window.location.href = '../';
            } else {
                $("#btn").html("Login");
                $("p").html("Something went wrong.").fadeIn("fast");
            }
        });
    });



    //register.php - username
    function checkUsername(){
        if($("#uname").val().length >= 3) return true;
    }

    //register.php - password
    function checkPass(){
        temp = 0;
        for(let i = 0; i <= $(".reg>#password").val().length; i++){
            for(let j = 0; j <= 9; j++){
                if($(".reg>#password").val()[i] == j){
                    temp++;
                    break;
                }
            }
        }
        if(temp > 0) temp = 1;

        if($(".reg>#password").val().length >= 8) temp++;

        if(/[A-Z]/.test($(".reg>#password").val()) && /[a-z]/.test($(".reg>#password").val())) temp++;

        return temp;
    }

    // register.php - email
    function checkEmail(){
        let pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        return pattern.test($("#email").val());
    }
});