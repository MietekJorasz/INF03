<?php
    session_start();

    if(isset($_SESSION['loggedIn'])){
        if($_SESSION['loggedIn']){
            header("Location: todolist.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in to your account.</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/logoTODO.png" type="image/x-icon">
    <script src="js/login.js"></script>
</head>
<body class="roboto-regular">
    <div id="container">
        <!-- Obsługa errorów -->
         <?php
         ?>
        <form action="php/signup.php" method="post">
            <div class="inp-con">
                <label for="login">Enter login:</label> <br>
                <input name='login' type="text">
            </div>
            <div class="inp-con">
                <label for="password">Enter password:</label> <br>
                <input name='password' type="password">
            </div>
            <div class="inp-con">
                <label for="repeatpassword">Repeat password:</label> <br>
                <input name='repeatpassword' type="password">
            </div>
            <input class="roboto-regular" type="submit" value="Sign up">
        </form>
    </div>
</body>
</html>