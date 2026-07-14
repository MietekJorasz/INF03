<?php
session_start();

if(isset($_POST['email']) ){

    require_once "../dbconnect.php";

    if($conn->connect_error){
        echo "false";
        exit();
    }

    $query = "SELECT * FROM users WHERE Email = '{$_POST['email']}'";

    $result = $conn->query($query);

    if($result->num_rows == 0){
        echo "true";
        exit();
    }
    else{
        echo "false";
        exit();
    }
}

if(isset($_POST['username']) ){

    require_once "../dbconnect.php";

    if($conn->connect_error){
        echo "false";
        exit();
    }

    $query = "SELECT * FROM users WHERE Username = '{$_POST['username']}'";

    $result = $conn->query($query);

    if($result->num_rows == 0){
        echo "true";
        exit();
    }
    else{
        echo "false";
        exit();
    }
}
?>