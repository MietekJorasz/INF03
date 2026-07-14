<?php
    session_start();

    if(!isset($_POST['login']) && !isset($_POST['password'])){
        header("Location: ../index.php?e1=true");
        exit();
    }

    $login = $_POST['login'];
    $password = $_POST['password'];

    require_once("connection.php");

    if(!$conn){
        header("Location: ../index.php?e2=true");
        exit();
    }

    $statement = $conn->prepare("SELECT * FROM users WHERE Login=?");

    $statement->bind_param("s", $login);

    $statement->execute();

    $result = $statement->get_result();

    if($result->num_rows != 1){
        header("Location: ../index.php?e3=true");
        exit();
    }else{
        $row = $result->fetch_assoc();
        if(password_verify($password , $row['Password'])){
            $_SESSION['loggedIn'] = true;
            $_SESSION['userID'] = $row['UserID'];
            $_SESSION['uname'] = $row['Login'];
            
            header("Location: ../todolist.php");
        }else{  
            header("Location: ../index.php?e3=true");
            exit();
        }
    }

    
?>