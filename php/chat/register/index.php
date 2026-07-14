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
    <link rel="shortcut icon" href="../assets/planet.png" type="image/x-icon">
</head>
<body>
    <div id="form">
        <div id="viaLogo" class="prevent-select">Via</div>
        <h1>Register to Via</h1>
        <form>
            <div class="input-con">
                <label for="email">Enter your email*</label> <br>
                <div class="reg">
                    <input type="email" name="email" id="email" required>
                    <button type="button" id="btn-email" class="reg-btn">Continue</button>
                </div>
            </div>

            <div class="input-con" id="pass-con">
                <label for="password">Create a password*</label> <br>
                <div class="reg">
                    <input type="password" name="password" id="password" required>
                    <button type="button" id="btn-password" class="reg-btn">Continue</button>
                </div>
            </div>

            <div class="input-con" id="uname-con">
                <label for="username">Enter a username*</label> <br>
                <div class="reg">
                    <input type="text" name="username" id="uname" required>
                    <button type="button" id="btn-username" class="reg-btn">Continue</button>
                </div>
            </div>

            <button type="button" id="btn">Register</button>
        </form>
        <div id="dash-con">
            <div>
                <div class="dash" id="g"></div>
                <div class="dash" id="gg"></div>
                <div class="dash" id="ggg"></div>
            </div>
        </div>
        <p id="info-reg">
            
        </p>
        <div id="link">Allready have an account? <a href="../">Sign in</a>
    </div>
</body>
</html>