<?php
    session_start();

    if(isset($_POST['username']) ){
        $password = $_POST['password'];   
        $username = $_POST['username'];

        require_once "dbconnect.php";

        if($conn->connect_error){
            echo "index.php";
            exit();
        }

        if( strpos($_POST['username'], "@") ){
            $query = "SELECT * FROM users WHERE Email = '{$username}'";
        }
        else{
            $query = "SELECT * FROM users WHERE Username = '{$username}'";
        }

        $result = $conn->query($query);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                if(password_verify($password, $row['Password'])){
                    $_SESSION['status'] = true;
                    $_SESSION['uname'] = $row["Username"];
                    $_SESSION['userID'] = $row["UserID"];
                    echo 'success';
                }
                else{
                    echo"index.php";
                    exit();
                }
            }
        }
        else{
            echo "index.php";
            exit();
        }
    }else{
        echo "index.php";
        exit();
    }

?>