<?php
    session_start();

    if (!isset($_SESSION['status'])) {
        header('Location: ../');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Via | Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="app.js" defer></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="shortcut icon" href="../assets/planet.png" type="image/x-icon">
</head>
<body>
    <nav id="side" class="prevent-select">
        <div id="viaLogo">
            Via
        </div>

        <div id="links">
            <div>
                <span class="material-symbols-outlined active">chat_bubble</span>
            </div> 
        </div>

        <div id="user">
            <?php
                echo"<div id='profileLogo' class='prevent-select'>{$_SESSION['uname'][0]}</div>";
            ?>
        </div>
    </nav>
    <main>
        <div id="friendsList">
            <div id="header">
     
                <h2>Czats</h2>

                <div id='searchCon'>
                    <span id="icon" class="material-symbols-outlined prevent-select">search</span>
                    <!-- arrow_back -->
                    <div id='searchBorder'>
                        <input type='text' id='search' name='message' placeholder='Search in Via'/>
                    </div>
                </div>
                <div id="friendsCon">

                </div>
            </div>
        </div>
        <div id="openChat">
            <?php
                if(isset($_GET['id']) && isset($_GET['uname'])){
                    echo"
                        <div id='topBar'>
                            <div id='nickSec'>
                                <div class='friendsLogo prevent-select'>{$_GET['uname'][0]}</div>
                                <div class='cardTitle'>{$_GET['uname']}</div>
                            </div>
                            <div id='iconsCon'>
                                <span class='material-symbols-outlined prevent-select'>call</span>
                                <span class='material-symbols-outlined prevent-select'>videocam</span>
                                <span class='material-symbols-outlined prevent-select'>more_horiz</span>
                            </div>
                        </div>
            
                        <div id='messageCon'>
                            
                        </div>    
                    
                        <div class='messageFormCon'>
                            <div id='writeBorder'>
                                <input type='text' id='message' name='message' placeholder='Aa'/>
                            </div>
                            <span id='send' class='material-symbols-outlined prevent-select'>send</span>
                        </div>
                    ";
                }else{
                    echo"
                        <div id='welcome'>
                            <h2 style='text-align:left'>No chat <br> has been <br> selected !</h2>
                            <img width='100px' alt='robot' src='../assets/robot.png'>
                        </div>
                    ";
                }
            ?>


            
        </div>
    </main>

    <div id="dropdown">
        <div class="item">
            Profile
        </div>
        <div class="item">
            Notifications
        </div>
        <div class="item">
            <a href="logout.php">Log out</a>
        </div>
    </div>

</body>
</html>