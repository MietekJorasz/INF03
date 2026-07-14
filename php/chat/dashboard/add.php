<?php
    session_start();

    if(isset($_GET['id'])){

        require_once "../dbconnect.php";
            
        if($conn->connect_error){
            echo "Something went wrong.";
            exit();
        }

        $query1 = "INSERT INTO conversations VALUES ('', '{$_SESSION['userID']}','{$_GET['id']}')";

        $result = $conn->query($query1);
        
        Header("Location: ./");
    }

?>