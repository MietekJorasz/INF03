<?php
    session_start();

    if(!isset($_POST['login']) && !isset($_POST['password']) && !isset($_POST['repeatpassword'])){
        header("Location: ../signup.php?e1=true");
        exit();
    }

    $login = $_POST['login'];
    $password = $_POST['password'];
    $repeatPassword = $_POST['repeatpassword'];

    if($password != $repeatPassword){
        header("Location: ../signup.php?e5=true");
        exit();
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    require_once("connection.php");

    if(!$conn){
        header("Location: ../signup.php?e2=true");
        exit();
    }

    $statement = $conn->prepare("INSERT INTO users VALUES('', ?, ?);");

    $statement->bind_param("ss", $login, $password);

    $statement->execute();

    $result = $statement->get_result();

    header("Location: ../index.php?info=true");
?>