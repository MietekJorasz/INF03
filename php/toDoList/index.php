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
        <form action="php/login.php" method="post">
            <div class="inp-con">
                <label for="login">Login:</label> <br>
                <input name='login' type="text">
            </div>
            <div class="inp-con">
                <label for="password">Password:</label> <br>
                <input name='password' type="password">
            </div>
            <input class="roboto-regular" type="submit" value="Sign in">
        </form>
    </div>
    <!-- <img src="img/pearlgirl.png" alt="Pearl girl"> -->
    <p>Don't have an account. <br> No problem you can create one <a href="signup.php">here</a>.</p>
</body>
</html>