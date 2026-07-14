<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "serwis_komp_florczak";

    // połączenie
    $conn = new mysqli($servername, $username, $password, $dbname);
    // sprawdzanie
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serwis Komputerowy</title>
    <script defer src="main.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/logo_florczak.png" type="image/x-icon">
</head>
<body>
    <header>
        <section id="logo-container">
            <img id="logo" src="img/logo_florczak.png" alt="logo firmy">
        </section>
        <section id="highline">
            Serwis Komputerowy Florczak
        </section>
        <section id="helper">
            <div id="vessel">
                <img class="helpers" id="access" src="img/accessible_FILL0_wght400_GRAD0_opsz48.png" alt="ułatwienia dla niepełnosprawnych">
                <img class="helpers" id="menu-btn" onclick="openNav()" src="img/menu_FILL0_wght400_GRAD0_opsz48.png" alt="menu">
                <a href="log.php"><img class="helpers" id="account" src="img/account_circle_FILL0_wght400_GRAD0_opsz48.png" alt="Konto"></a>    
            </div>
            <div id="option" >
                <div id="option-content" >
                    <div id="bigger" class="options">Powiększ tekst A+</div>
                    <div id="smaller" class="options">Pomniejsz tekst A-</div>
                    <div id="colors" class="options">Kontrast żółto-czarny</div>
                </div>
            </div>
            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <a href="index.html">Strona główna</a>
                    <a href="cennik.php ">Cennik</a>        
                    <a href="kontakt.html">Kontakt</a>
                </div>
            </div>
        </section>     
    </header>

    <section class="text">
        <section id="describe">
            <span id="ftitle">Wyceń naprawe </span><br>
            <span class="ltitle">swojego urządzenia</span>
            <p class="paragraph">Niezależnie od rodzaju awarii, możesz mieć pewność, że Twoim sprzętem w Serwis Florczak zajmą się fachowcy. Od lat specjalizujemy się w naprawie Laptopów i Komputerów i znamy je od podszewki, dlatego żadna usterka nie jest nam straszna.  </p>
            <a href="tel:+48733147720"><button class="btn">Zadzwoń do nas</button></a>
            <a href="cennik.php#cena"><button class="btn">Sprawdź cennik</button></a>
        </section>
        <section id="mac">
            <img id="laptop" src="img/naprawa-komputera.webp" alt="Obraz laptopa">
        </section>
    </section>
    <section id="cena">
        <span id="ftitle">Cennik diagnoz:</span>
        <table>
            <tr>
                <td>Typ usługi:</td>
                <td>Usługa:</td>
                <td>Cena:</td>
            </tr>
            <?php
                $sql = "SELECT * FROM cennik where  typ_usługi='diagnoza'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>". $row["typ_usługi"]. "</td><td>". $row["usługa"]. "</td><td>" . $row["cena"] ."</td></tr>";
                    }
                } else {
                    echo "skill issue";
                }
            ?>
        </table>
        <span id="ftitle">Cennik napraw software:</span>
        <table>
            <tr>
                <td>Typ usługi:</td>
                <td>Usługa:</td>
                <td>Cena:</td>
            </tr>
            <?php
                $sql = "SELECT * FROM cennik where  typ_usługi='Naprawa software'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>". $row["typ_usługi"]. "</td><td>". $row["usługa"]. "</td><td>" . $row["cena"] ."</td></tr>";
                    }
                } else {
                    echo "skill issue";
                }
            ?>
        </table>

        <span id="ftitle">Cennik napraw hardware:</span>
        <table>
            <tr>
                <td>Typ usługi:</td>
                <td>Usługa:</td>
                <td>Cena:</td>
            </tr>
            <?php
                $sql = "SELECT * FROM cennik where  typ_usługi='Naprawa hardware'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>". $row["typ_usługi"]. "</td><td>". $row["usługa"]. "</td><td>" . $row["cena"] ."</td></tr>";
                    }
                } else {
                    echo "skill issue";
                }
            ?>
        </table>

        <span id="ftitle">Cennik serwisu urządzeń:</span>
        <table>
            <tr>
                <td>Typ usługi:</td>
                <td>Usługa:</td>
                <td>Cena:</td>
            </tr>
            <?php
                $sql = "SELECT * FROM cennik where  typ_usługi='Serwis'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>". $row["typ_usługi"]. "</td><td>". $row["usługa"]. "</td><td>" . $row["cena"] ."</td></tr>";
                    }
                } else {
                    echo "skill issue";
                }
            ?>
        </table>


    </section>

    <footer>
        &copy; Serwis Komputerowy Floraczak 2023
    </footer>

</body>
</html>

<?php
    $conn->close();
?>