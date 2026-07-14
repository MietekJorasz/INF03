<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>

    <div class="center">
        <h1>Parafia Ustrobna</h1>
        <form action="connect.php" method="post">
            <div class="inputbox">
                <input type="text" name="login" required="required">
                <span id="log">Login</span>
            </div>
            <div class="inputbox">
                <input type="password" name="password" required="required">
                <span id="pass">Hasło</span>
            </div>
            
            <input id="btn" type="submit" value="Zaloguj">
        </form>
    </div>

</body>
</html>