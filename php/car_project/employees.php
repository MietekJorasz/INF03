<?php
     require("connect.php");
        
     if(!$connect)
     {
         echo "Błąd połączenia";
         exit();
     }
 
     $sql = "SELECT * FROM `employee`";
     $result = mysqli_query($connect, $sql);

     echo "<h2 style='text-align: center; margin: 50px 0;'>Employees</h2>";
     echo "<p class='sticky' style='text-align: center; background-color: white; padding: 15px; margin-bottom: 40px'><a style='padding: 10px; border-radius: 10px 0;   background-color: rgba(0, 123, 255, 1);
     background-image: linear-gradient(82deg, rgba(0, 123, 255, 1) -50%, rgba(32, 16, 91, 1) 85%); color: white; text-decoration:none' href='add.php?type=employee'>Add new employee</a></p>";
     echo "<div class='branch-main'>";

 
     if($result){
         while( $row = mysqli_fetch_assoc($result)){
            echo"
            <div class='w3-card-4' style='width:300px'>
                <img src='".$row['img']."' alt='' style='width:100%'>
                <p style='text-align: center'>".$row['first_name']." ".$row['last_name']."</p>
                <div class='dropdown'>
                    <p style='text-align: center'>Gender: ".$row['gender']."</p>
                    <p style='text-align: center'>E-mail: ".$row['email']."</p>
                    <p style='text-align: center'>Income: ".$row['income']."</p>
                    <p style='text-align: center'>Proffession: ".$row['proffession']."</p>
                    <p style='text-align: center'>Branch number: ".$row['branch_id']."</p>
                </div>
                <div style='display: flex; justify-content: space-around; align-items: center'>
                    <a title='Edit' href='edit.php?id={$row['employee_id']}&type=employee'><span style='color: green' class='material-symbols-outlined'>edit</span></a>
                    <span title='view' style='cursor: pointer; font-size: 35px; transition: 0.5s ' class='view material-symbols-outlined'>expand_more</span>
                    <a title='Delete' href='delete.php?id={$row['employee_id']}&type=employee'><span style='color: red' class='material-symbols-outlined'>delete</span></a>
                </div>
               
            </div>
            ";

        }
     }

     echo"</div>";

     echo"<footer style='text-align: center; margin-top: 50px; padding: 20px 0;'>All rights reserved &copy; Cars Matters</footer>"

?>