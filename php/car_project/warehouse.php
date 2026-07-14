<?php
     require("connect.php");
        
     if(!$connect)
     {
         echo "Błąd połączenia";
         exit();
     }
 
     $sql = "SELECT * FROM `cars`";
     $result = mysqli_query($connect, $sql);

     echo "<h2 style='text-align: center; margin: 50px 0;'>Car Warehouse</h2>";

     echo "<p style='text-align: center; background-color: white; padding: 15px; margin-bottom: 40px'><a style='padding: 10px; border-radius: 10px 0;   background-color: rgba(0, 123, 255, 1);
     background-image: linear-gradient(82deg, rgba(0, 123, 255, 1) -50%, rgba(32, 16, 91, 1) 85%); color: white; text-decoration:none' href='add.php?type=car'>Add new car</a></p>";

     echo "<div class='branch-main'><table style='width: 90%' class='w3-table-all'><tr class='sticky'><th>Brand</th><th>Model</th><th>Model year</th><th>Prize</th><th>Quantity</th><th>Branch ID</th><th>Edit</th><th>Delete</th></tr>";
 
     if($result){
         while( $row = mysqli_fetch_assoc($result)){
            echo"
                <tr><td>{$row['brand']}</td><td>{$row['model']}</td><td>{$row['model_year']}</td><td>{$row['prize']}</td><td>{$row['quantity']}</td><td>{$row['branch_id']}</td><td><a href='edit.php?id={$row['car_id']}&type=cars'>Edit</a></td><td><a href='delete.php?id={$row['car_id']}&type=cars'>Delete</a></td></tr>
            ";
         }
     }

     echo"</table></div>";

     echo"<footer style='text-align: center; margin-top: 50px; padding: 20px 0;'>All rights reserved &copy; Cars Matters</footer>"

?>