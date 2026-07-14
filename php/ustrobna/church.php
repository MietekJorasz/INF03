<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="parafia, kościół, Ustrobna, patron, godziny, mszy, św, świętych, transmisja, online, aktualności, kancelaria, wspólnoty, galeria, ">
    <meta name="description"
        content="Parafia Rzymskokatolicka pw. św. Jana Kantego w Ustrobnej. Strona internetowa przeznaczona dla parafian z Ustrobnej. Na tej stronie dowiesz się o 
    histrorii naszej parafii, naszym patronie, godzinach mszy świętych, wspolnotach parafialnych i wszystkiego związanego z naszą parafią. Autor strony Mieczysław Jórasz">
    <title>Parafia Rzymskokatolicka pw. św. Jana Kantego w Ustrobnej</title>
    <link preload rel="stylesheet" href="style.css">
    <link preload href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src=""></script>
    
    <link rel="shortcut icon" href="img/cross.svg" type="image/x-icon">
    
    <link preload rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
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
                        <a class="nav-link" aria-current="page" href="news.php">Aktualności</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Wspólnoty</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kancelaria</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
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
        <a href="#carouselControls">
            <div id="circle-con">
                <div id="circle"></div>
            </div>
        </a>
    </div>

    
    <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" style="background-color: black;" data-bs-target="#carouselControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" style="background-color: black;" data-bs-target="#carouselControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container-tab">
                    <h1>Godziny mszy św. Ustrobna</h1>
                    <table>
                        <tr>
                            <th>Msza</th>
                            <th>Dzień powszedni</th>
                            <th>Niedziala i święta</th>
                        </tr>
                        <?php
                            require("connect.php");

                            $sql = "SELECT * FROM msze";
            
                            $result = mysqli_query($conn, $sql);
            
                            if ($result){
                                if (mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo "
                                            <tr>
                                                <td>".$row['msza']."</td>
                                                <td>".$row['dp']."</td>
                                                <td>".$row['nś']."</td>
                                            </tr>
                                        ";
                                    }
                                }
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-tab">
                    <h2>Godziny mszy św. Bajdy</h2>
                    <table>
                        <tr>
                            <th>Msza</th>
                            <th>Dzień powszedni</th>
                            <th>Niedziala i święta</th>
                        </tr>
                        <tr>
                            <th>Poranna</th>
                            <td>brak</td>
                            <td>7:30</td>
                        </tr>
                        <tr>
                            <th>Popołudniowa</th>
                            <td>brak</td>
                            <td>11:00</td>
                        </tr>
                        <tr>
                            <th>Wieczorna</th>
                            <td>18:00</td>
                            <td>16:00</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" style="background-color: black;" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="background-color: black;" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
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
                    <ul class="footer-links">
                        <li><a href="">Strona główna</a></li>
                        <li><a href="">Wspólnoty</a>, <a href="">Aktualności</a></li>
                        <li><a href="">Kancelaria</a>, <a href="">Intencje</a>, <a href="">Ogłoszenia</a></li>
                        <li><a href="">Galeria</a>, <a href="">Transmisje Mszy</a></li>
                        <li><a href="">O patronie</a>, <a href="">O parafii</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2022-23 All Rights Reserved by
                        <a href="https:/mietekjorasz.github.io">Mieczysław Jórasz</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" target="_blank" href="https://www.facebook.com/parafiaustrobna/"><i
                                    style="font-size: 20px;" class="fa">&#xf09a;</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>