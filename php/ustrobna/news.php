<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aktualności - Parafia Rzymskokatolicka pw. św. Jana Kantego w Ustrobnej</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/cross.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta 
        name="keywords"
        content="parafia, kościół, Ustrobna, patron, godziny, mszy, św, świętych, transmisja, online, aktualności, kancelaria, wspólnoty, galeria, ">
    <meta name="description"
        content="Parafia Rzymskokatolicka pw. św. Jana Kantego w Ustrobnej. Strona internetowa przeznaczona dla parafian z Ustrobnej. Na tej stronie dowiesz się o 
    histrorii naszej parafii, naszym patronie, godzinach mszy świętych, wspolnotach parafialnych i wszystkiego związanego z naszą parafią. Autor strony Mieczysław Jórasz">
    <script defer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="church.php">
                <img src="img/cross.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                Parafia Ustrobna
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="news.php">Aktualności</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wspólnoty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kancelaria</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Parafia
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Galeria</a></li>
                            <li><a class="dropdown-item" href="#">Ogłoszenia</a></li>
                            <li><a class="dropdown-item" href="#">Intencje</a></li>
                            <li><a class="dropdown-item" href="#">Transmisja Mszy</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="layout">
        <a href="#cards-header-con">
            <div id="circle-con">
                <div id="circle"></div>
            </div>
        </a>
    </div>

    <div id="cards-header-con">
        <div style="margin-bottom: 20px"><h1>Aktualności</h1></div>

        <div id="cards-con">

            <?php
                function shortcontent($content, $ilosc){
                    $counter = 0;
                    
                    for ($i=0; $i < strlen($content); $i++){

                        if ($content[$i] == " "){
                            $counter += 1;
                        }
              
                        if ($counter == $ilosc){
                            $content = substr($content, 0, $i);
                            $content .= "...";
                            return $content;
                        }
                    }

                    if ($counter < $ilosc){
                        return $content;
                    }
                    
                }

                require("connect.php");

                $sql = "SELECT * FROM aktualnosci GROUP BY data DESC";

                $result = mysqli_query($conn, $sql);

                if ($result){
                    if (mysqli_num_rows($result) > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "
                            <div class='card' style='width: 18rem;'>
                                <div class='card-body'>
                                    <h5 style='text-transform: uppercase;' class='card-title'>".shortcontent($row['temat'], 3)."</h5>
                                    <p class='card-text'>".shortcontent($row['opis'], 8)."</p>
                                    <a href='eachNews.php?id=".$row['id']."' class='btn btn-outline-secondary'>Sprawdź</a>
                                </div>
                    
                                <div class='card-footer'>
                                    <small class='text-muted'>Opublikowano ".$row['data']."</small>
                                </div>
                            </div>
                            ";
                        }
                    }
                }
            ?>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>O parafii</h6>
                    <p class="text-justify">Wieś Ustrobna istnieje od 1446 r. W 1855 r. ks. Henryk Zaremba Skrzyński
                        nabył od Henryka
                        Kurdanowskiego wieś Ustrobną na własność. Ks. Henryk Skrzyński po nabyciu wsi Ustrobnej,
                        zamieszkał w niej i w 1860 r. jako główny fundator rozpoczął budowę kościoła. Poświęcenie
                        kamienia węgielnego odbyło się 13.06.1860 r. Budowa kościoła trwała przez 17 lat. <a
                            href="">czytaj więcej</a></p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Kontakt</h6>
                    <ul class="footer-links">
                        <li>Adres: Ustrobna 3, 38-406 Ustrobna</li>
                        <li>Tel: 13 431 16 92</li>
                        <li>E-mail: parafiaustrobna@gmail.com</li>
                        <li>Diecezja: rzeszowska</li>
                        <li>Proboszcz: ks. mgr Artur Progorowicz</li>
                        <li>Wikary: ks. Krzysztof Lampart</li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Linki</h6>
     
                    <a href="">Strona główna</a>
                    <a href="">Wspólnoty</a>, <a href="">Aktualności</a>
                    <a href="">Kancelaria</a>, <a href="">Intencje</a>, <a href="">Ogłoszenia</a>
                    <a href="">Galeria</a>, <a href="">Transmisje Mszy</a>
                    <a href="">O patronie</a>, <a href="">O parafii</a>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2022-23 All Rights Reserved by
                        <a href="#">Mieczysław Jórasz</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" target="_blank" href="https://www.facebook.com/parafiaustrobna/"><i style="font-size: 20px;"
                                    class="fa">&#xf09a;</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>