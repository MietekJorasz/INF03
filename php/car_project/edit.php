<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
<?php
    if ( isset($_GET['type'] )){
        if($_GET['type'] == 'cars'){
            if(isset($_GET['id'])) {

                require('connect.php');
        
                $query = "select * from cars where car_id='{$_GET['id']}'";
                $result = mysqli_query($connect, $query);
        
                $row = mysqli_fetch_assoc($result);
        
                echo "
                    <div class='formCon'>
                        <div class='w3-container w3-blue'>
                            <h2>Cars matters - Editing {$row['brand']} {$row['model']} {$row['model_year']}</h2>
                        </div>
                        <div style='display:flex'>
                            <form method='post' class='w3-container'>
                                <p>
                                    <label>Prize:</label> <br>
                                    <input class='w3-input' type='text' name='prize' value='{$row['prize']}'></p>
                                <p>
                                    <label>Quantity:</label> <br>
                                    <input class='w3-input' min='0' type='number' name='quantity' value='{$row['quantity']}'></p>
                                <p>
                                    <label>Branch (Active {$row['branch_id']}): </label> <br>
                                    <select style='border: none' name='branch'><option value='1'>1. Philadelphia</option><option value='2'>2. Washington</option><option value='3'>3. New York</option><option value='4'>4. Boston</option><option value='5'>5. Baltimore</option> </p>
                                <p>
                                <input type='hidden' name='edit_id' value='{$row['car_id']}'></p>

                                <p>
                                    <input style='transition: 1s;' class='w3-btn w3-blue' type='submit' value='Save'></p>
                            </form>
        
                            <div class='img'>
                                <img src='logo.png' alt='pixel car logo'>
                            </div>
                        </div>
                    </div>
                ";
            }
        
            if(isset($_POST['prize'])) {
                require('connect.php');
                $query = "update cars set prize='{$_POST['prize']}', quantity='{$_POST['quantity']}', branch_id='{$_POST['branch']}' where car_id='{$_POST['edit_id']}'";
                mysqli_query($connect, $query);
                header("Location: carsMatters.php?git=ok1&page=warehouse");
            }
        }
        if($_GET['type'] == 'employee'){
            if(isset($_GET['id'])) {

                require('connect.php');
        
                $query = "select * from employee where employee_id='{$_GET['id']}'";
                $result = mysqli_query($connect, $query);
        
                $row = mysqli_fetch_assoc($result);
        
                echo "
                    <div class='formCon'>
                        <div class='w3-container w3-blue'>
                            <h2>Cars matters - editing an employee {$row['first_name']} {$row['last_name']}</h2>
                        </div>
                        <div style='display: flex'>
                            <img style='width: 60%' src='{$row['img']}' alt='person image'>
                            <div>
                                <form method='post' class='w3-container'>
                                    <p>
                                        <label>Branch (Active {$row['branch_id']}): </label> <br>
                                        <select class='w3-input' style='border: none; border-bottom: 1px solid lightgray ' name='branch'><option value='1'>1. Philadelphia</option><option value='2'>2. Washington</option><option value='3'>3. New York</option><option value='4'>4. Boston</option><option value='5'>5. Baltimore</option> </p>
                                    <p>
                                    <input type='hidden' name='edit_id' value='{$row['employee_id']}'></p>
                                    <p>
                                        <label>Email:</label> <br>
                                        <input class='w3-input' type='text' name='email' value='{$row['email']}'></p>
                                    <p>
                                        <label>Income:</label> <br>
                                        <input class='w3-input' min='0' type='text' name='income' value='{$row['income']}'></p>
                                    <p>
                                        <label>Proffession:</label> <br>
                                        <input class='w3-input' type='text' name='proffession' value='{$row['proffession']}'></p>
                                        
                                    <p>
                                        <input style='transition: 1s; position: relative; left: 0; bottom:0' class='w3-btn w3-blue' type='submit' value='Save'></p>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
            }
        
            if(isset($_POST['email'])) {
                require('connect.php');
                $query = "update employee set email='{$_POST['email']}', income='{$_POST['income']}', proffession='{$_POST['proffession']}', branch_id='{$_POST['branch']}' where employee_id='{$_POST['edit_id']}'";
                mysqli_query($connect, $query);
                header("Location: carsMatters.php?git=ok1&page=employees");
            }
        }

    }


?>
</body>
</html>
