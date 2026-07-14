<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Via | Sign in to Via</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="app.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="assets/planet.png" type="image/x-icon">
</head>
<body>
    <div id="form">
        <div id="viaLogo" class="prevent-select">Via</div>
        <h1>Sign in to Via</h1>
        <p id="error">
            Incorrect username or password.
            <span id="close" class="material-symbols-outlined prevent-select">close</span>
        </p>
        <form>
            <div class="input-con">
                <label for="username">Username or email adress</label> <br>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="input-con">
                <label for="password">Password</label> <br>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="button" id="btn">Sign in</button>
        </form>
        <div id="link">New to Via? <a href="./register">Create an account</a>
    </div>
</body>
</html>