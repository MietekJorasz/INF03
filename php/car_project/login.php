<?php

    session_start();
    
    if(isset($_POST['login'])){
        $login = $_POST['login'];
        $haslo = $_POST['pass'];

        require("connect.php");

        if(!$connect){
            header("Location: index.php?error=1");
            exit();
        }

        $query = "SELECT * FROM users WHERE login = '{$login}' &&  password = '{$haslo}'";

        $result = mysqli_query($connect, $query);

        if($result){
            if(mysqli_num_rows($result) == 1){
                while( $row = mysqli_fetch_assoc($result)){
                    $_SESSION['login'] = $row['login'];
                }
                header("Location: carsMatters.php?page=main");
                exit();
            }
            else{
                header("Location: index.php?error=2");
                exit();
            }
            
        }


    }
    else{
        header("Location: index.php?error=3");
        exit();
    }

?>