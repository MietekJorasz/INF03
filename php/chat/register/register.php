<?php
session_start();

if(isset($_POST['email']) ){

    require_once "../dbconnect.php";

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if($conn->connect_error){
        echo "false";
        exit();
    }

    $query = "INSERT INTO users VALUES ('', '{$_POST['username']}', '{$_POST['email']}', '{$password}')";

    $result = $conn->query($query);

    if($result){
        echo "true";
        exit();
    }
    else{
        echo "false";
        exit();
    }
}

?>