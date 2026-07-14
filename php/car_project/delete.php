<?php
    if( isset($_GET['id'])){
        require('connect.php');

        if($_GET['type'] == 'cars'){
            $query = "delete from cars where car_id = '{$_GET['id']}'";
            mysqli_query($connect, $query);
            header("Location: carsMatters.php?git=ok&page=warehouse");  
        }
        if($_GET['type'] == 'employee'){
            $query = "delete from employee where employee_id = '{$_GET['id']}'";
            mysqli_query($connect, $query);
            header("Location: carsMatters.php?git=ok&page=employees");  
        }

    }
?>