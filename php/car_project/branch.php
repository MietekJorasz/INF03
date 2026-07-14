<?php
     require("connect.php");
        
     if(!$connect)
     {
         echo "Błąd połączenia";
         exit();
     }
 
     $sql = "SELECT * FROM `branch`";
     $result = mysqli_query($connect, $sql);

     echo "<h2 style='text-align: center; margin: 50px 0;'>Branch</h2>";
     echo "<div class='branch-main'>";
 
     if($result){
         while( $row = mysqli_fetch_assoc($result)){
            echo"
                <div class='w3-card-4' style='width:500px; height: 550px'>
                    <img src='".$row['img']."' alt='".$row['city']."' style='width:100%; height: 65%'>
                    <div style='display: flex; flex-direction: column;'>
                        <p class='paragraph'>City: ".$row['city']."</p>
                        <p class='paragraph'>Open hour: ".$row['opening_hour']."</p>
                        <p class='paragraph'>Close hour: ".$row['closing_hour']."</p>
                        <p class='paragraph'>Address: ".$row['address']."</p>
                    </div>
                </div>
            ";
         }
     }

     echo"</div>";

     echo"<footer style='text-align: center; margin-top: 50px; padding: 20px 0;'>All rights reserved &copy; Cars Matters</footer>"

?>