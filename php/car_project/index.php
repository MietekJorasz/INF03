<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="formCon">

        <div class="w3-container w3-blue">
            <h2>Cars matters</h2>
        </div>
        <form action="login.php" method="post" class="w3-container">
            <p>
                <label>Login:</label>
                <input name="login" class="w3-input" type="text"></p>
            <p>
                <label>Password:</label>
                <input name="pass" class="w3-input" type="password"></p>
            <p>
                <input style="transition: 1s;" class="w3-btn w3-blue" type="submit" value="Log in"></p>
        </form>

        <div class="img">
            <img src="logo.png" alt="pixel car logo">
        </div>

    <?php
        if(isset($_GET['error']) ){
            if($_GET['error'] == 1){
                echo "
                    <div class='w3-panel w3-red w3-display-container'>
                    <span onclick='this.parentElement.style.display=\"none\"'
                    class='w3-button w3-large w3-display-topright'>&times;</span>
                    <h3>Błąd!</h3>
                    <p>Spróbuj zalogować się jeszcze raz.</p>
                    </div>
                ";
            }
            if($_GET['error'] == 2){
                echo "
                    <div class='w3-panel w3-red w3-display-container'>
                    <span onclick='this.parentElement.style.display=\"none\"'
                    class='w3-button w3-large w3-display-topright'>&times;</span>
                    <h3>Błąd!</h3>
                    <p>Niepoprawny login lub hasło.</p>
                    </div>
                ";    
            }
            if($_GET['error'] == 3){
                echo "
                    <div class='w3-panel w3-red w3-display-container'>
                    <span onclick='this.parentElement.style.display=\"none\"'
                    class='w3-button w3-large w3-display-topright'>&times;</span>
                    <h3>Błąd!</h3>
                    <p>Wpisz login i hasło.</p>
                    </div>
                ";
            }
        }
    ?>
    </div>
    
</body>
</html>