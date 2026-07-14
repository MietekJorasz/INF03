<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $nameErr = $lnameErr = $emailErr =  "";
    $ok = $name = $lname = $email = $title = $comment = "";

    $is_it_ok = true;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["imie"])) {
            $nameErr = "Imie jest wymagane";
            $is_it_ok = false;
        } else {
            $name = test_input($_POST["imie"]);

            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Tylko litery - bez pol. znaków";
                $is_it_ok = false;
            }
        }

        if (empty($_POST["nazwisko"])) {
            $lnameErr = "Nazwisko jest wymagane";
            $is_it_ok = false;
        } else {
            $lname = test_input($_POST["nazwisko"]);

            if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
                $lnameErr = "Tylko litery - bez pol. znaków";
                $is_it_ok = false;
            }
        }
        
        if (empty($_POST["email"])) {
            $emailErr = "Email jest wymagany";
            $is_it_ok = false;
        } else {
            $email = test_input($_POST["email"]);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email jest niepoprawny";
            $is_it_ok = false;
            }
        }

        if (empty($_POST["title"])) {
            $title = "";
        } else {
            $title = test_input($_POST["title"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if($is_it_ok === true){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "serwis_komp_florczak";
    
            $conn = new mysqli($servername, $username, $password, $dbname);
    
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
    
            $sql = "INSERT INTO zlecenia (imie, nazwisko, email, tytul_zlecenia, opis_zlecenia) VALUES ( '$name', '$lname', '$email', '$title', '$comment');";
    
            if ($conn->query($sql) === TRUE) {
                $ok = "Sprubujemy jak najszybciej umuwić cię na wizytę.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
    
            $conn->close();
        }
        else{
            $ok = "Popraw dane.";
        }

    }
        


    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }
?>
    <div id="back">
        <a href="index.html">Powrót na stronę główną</a>
    </div>
    <div id="input-con">
        <div id="wrap">
            <div id="logo-container"><img id="logo" src="img/logo_florczak.png" alt="logo"></div>
            <div id="highline">Serwis Florczak</div>
        </div>
        <div id="inputs">
            <p><span class="error">* wymagane pola</span></p>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                Imie: <span class="error">* <?php echo $nameErr;?></span> <br><input name="imie" type="text"><br>
                Nazwisko: <span class="error">* <?php echo $lnameErr;?></span> <br><input name="nazwisko" type="text"><br>
                E-mail: <span class="error">* <?php echo $emailErr;?></span> <br><input name="email" type="text"><br>
                Tytuł problemu: <span class="error">* </span> <br><input name="title" type="text"><br>
                Opis problemu: <span class="error">* </span> <br>
                <textarea name="comment" rows="3" placeholder="Opisz problem urządzenia"></textarea>
                <input class="btn" type="submit" name="submit" value="Wyślij"><br>
                <span class="great"> * <?php echo $ok;?></span>
            </form>
        </div>
    </div>
</body>
</html>