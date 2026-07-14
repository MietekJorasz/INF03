<?php
    session_start();

    if(isset($_SESSION['loggedIn'])){
        if(!$_SESSION['loggedIn']){
            header("Location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDoList</title>
    <link rel="stylesheet" href="css/todolist.css">
    <link rel="shortcut icon" href="img/logoTODO.png" type="image/x-icon">
    <script defer src="js/todolist.js"></script>
</head>
<body class="roboto-regular">
    <div id="main">
        <nav class="prevent-select">
            <p>Logged as <span id='user'><?php echo $_SESSION['uname'] ?></span></p>
            <button id='addBtn'>Add new list</button>
        </nav>
        <div class="prevent-select" id="dropdown">
            <a href="./php/logout.php">Log out</a>
            <a href="">Settings</a>
            <a href="">Appearence</a>
         </div> 
        <div id="layout">
            <?php
                require_once("./php/connection.php");
    
                if(!$conn){
                    echo"Something went wrong. Try again later.";
                    exit();
                }
    
                $statement = $conn->prepare("SELECT lists.Name, points.Title, points.Content, points.Checked FROM `lists` INNER JOIN points ON lists.ListID = points.ListID WHERE lists.UserID = ?;");
                
                $statement->bind_param("i", $_SESSION['userID']);
    
                $statement->execute();
    
                $result = $statement->get_result();
    
                if($result->num_rows > 0){
                    $temp = "";
                    echo "<div>";
                    while($row = $result->fetch_assoc()){
                        if($row['Name'] != $temp){
                            echo "</div>";
                            echo"<div class='list'>";
                            echo"<div class='listName'>{$row['Name']}</div>";
                            $temp = $row['Name'];
                        }
    
                        echo
                        "<div>
                            <ul>
                                <li>{$row['Title']} <br> Notes. {$row['Content']}</li>
                            </ul>    
                        </div>";
                    }
                    // print_r($tab);
                }else{
                    echo"<h2 id='info'>You dont have any lists.</h2>";
                }   
            ?>
        </div>
    </div>
    <div id="modal" class="modal">
        <header>
            <button id="closeBtn">Close</button>
        </header>
        <div id="form">
            <div class="inp-con">
                <label class="h3" for="login">List title:</label> <br>
                <input name='login' type="text">
            </div>
            <div id="point-con">
                <div class="inp-con">
                    <label for="point[]">Point title:</label> <br>
                    <input name='point[]' type="text"><br>
                    <label for="pointdes[]">Point description:</label> <br>
                    <textarea max="20" name="pointdes[]"></textarea>
                </div>
            </div>
            <div id="icon-con">
                <img id="previous" src="img/arrowLeft.svg" alt="Previos point" title="Previos point">
                <img id="next" src="img/arrowRight.svg" alt="Next point" title="Next point">
            </div>

            <input type="submit" value="Add">
        </div>
    </div>
</body>
</html>