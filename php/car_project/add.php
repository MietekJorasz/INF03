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
        if($_GET['type'] == 'car'){
                echo "
                    <div class='formCon'>
                        <div class='w3-container w3-blue'>
                            <h2>Cars matters - Add new car</h2>
                        </div>
                        <div>
                            <form method='post' class='w3-container'>
                                <p>
                                    <label>Brand:</label> <br>
                                    <input class='w3-input' type='text' name='brand'></p>
                                <p>
                                    <label>Model:</label> <br>
                                    <input class='w3-input' type='text' name='model' ></p>
                                <p>
                                    <label>Model year:</label> <br>
                                    <input class='w3-input' type='number' name='model_year' ></p>    
                                <p>
                                    <label>Prize:</label> <br>
                                    <input class='w3-input' type='number' name='prize'></p>
                                <p>
                                    <label>Quantity:</label> <br>
                                    <input class='w3-input' min='0' type='number' name='quantity' ></p>
                                <p>
                                    <label>Branch: </label> <br>
                                    <select style='border: none' name='branch'><option value='1'>1. Philadelphia</option><option value='2'>2. Washington</option><option value='3'>3. New York</option><option value='4'>4. Boston</option><option value='5'>5. Baltimore</option> </p>
                                <input type='hidden'>
                                <p>
                                    <input style='transition: 1s;' class='w3-btn w3-blue' type='submit' value='Save'></p>
                            </form>
                        </div>
                    </div>
                ";
            }
        
            if(isset($_POST['brand'])) {
                require('connect.php');
                $query = "INSERT INTO `cars`(`car_id`, `brand`, `model`, `model_year`, `prize`, `quantity`, `branch_id`) VALUES ('','{$_POST['brand']}','{$_POST['model']}','{$_POST['model_year']}','\${$_POST['prize']}','{$_POST['quantity']}','{$_POST['branch']}')";
                mysqli_query($connect, $query);
                header("Location: carsMatters.php?git=ok3&page=warehouse");
            }
        }
        if($_GET['type'] == 'employee'){
                echo "
                    <div class='formCon'>
                        <div class='w3-container w3-blue'>
                            <h2>Cars matters - Add new employee</h2>
                        </div>
                        <div>
                            <form method='post' class='w3-container'>
                                <p>
                                    <label>Name:</label> <br>
                                    <input class='w3-input' type='text' name='f_name'></p>
                                <p>
                                    <label>Last name:</label> <br>
                                    <input class='w3-input' type='text' name='l_name' ></p>
                                <p>
                                    <label>E-mail:</label> <br>
                                    <input class='w3-input' type='email' name='email' ></p>    
                                <p>
                                    <label>Gender:</label> <br>
                                    <input class='w3-radio' type='radio' name='gender' value='male'>
                                    <label>Male</label>
                                    
                                    <input class='w3-radio' type='radio' name='gender' value='female'>
                                    <label>Female</label>
                                <p>
                                    <label>Income:</label> <br>
                                    <input class='w3-input' min='0' type='number' name='income' ></p>
                                <p>
                                    <label>Proffession:</label> <br>
                                    <input class='w3-input' type='text' name='proffession' ></p>   
                                <p>
                                    <label>Branch: </label> <br>
                                    <select style='border: none' name='branch'><option value='1'>1. Philadelphia</option><option value='2'>2. Washington</option><option value='3'>3. New York</option><option value='4'>4. Boston</option><option value='5'>5. Baltimore</option> </p>
                                <input type='hidden'>
                                <p>
                                    <input style='transition: 1s;' class='w3-btn w3-blue' type='submit' value='Save'></p>
                            </form>
                        </div>
                    </div>
                ";
        
            if(isset($_POST['f_name'])) {
                require('connect.php');
                if($_POST['gender'] == 'male'){
                    $img = 'https://www.w3schools.com/howto/img_avatar.png';
                }
                else{
                    $img = 'https://www.w3schools.com/howto/img_avatar2.png';
                }

                $query = "INSERT INTO `employee`(`employee_id`, `first_name`, `last_name`, `email`, `gender`, `income`, `proffession`, `branch_id`, `img`) VALUES ('','{$_POST['f_name']}','{$_POST['l_name']}','{$_POST['email']}','{$_POST['gender']}','\${$_POST['income']}','{$_POST['proffession']}','{$_POST['branch']}','{$img}')";
                mysqli_query($connect, $query);
                header("Location: carsMatters.php?git=ok1&page=employees");
            }
        }
    


?>
</body>
</html>