<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="navbar.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Cars Matters</title>
    <script src='main.js' defer></script>
  </head>
  <body>
    <!-- ----------------------------- -->
    <nav>
      <div class="right">
        <div class="link">
          <a class="links" href="carsMatters.php?page=main">Home</a>
        </div>
        <div class="link">
          <a class="links" href="carsMatters.php?page=branch">Branch</a>
        </div>
        <div class="link">
          <a class="links" href="carsMatters.php?page=warehouse" >Warehouse</a>
        </div>
        <div class="link">
          <a class="links" href="carsMatters.php?page=employees">Employees</a>
        </div>
      </div>
    </nav>
    <!-- --------------------------------------------------------- -->

    <?php
      if(isset($_GET['git']) ){
          if($_GET['git'] == 'ok'){
              echo "
                  <div class='w3-panel w3-green w3-display-container'>
                  <span onclick='this.parentElement.style.display=\"none\"'
                  class='w3-button w3-large w3-display-topright'>&times;</span>
                  <h3>Udało się!</h3>
                  <p>Pomyślnie usunięte.</p>
                  </div>
              ";
          }
          if($_GET['git'] == 'ok1'){
            echo "
                <div class='w3-panel w3-green w3-display-container'>
                <span onclick='this.parentElement.style.display=\"none\"'
                class='w3-button w3-large w3-display-topright'>&times;</span>
                <h3>Udało się!</h3>
                <p>Edycja została wykonana pomyślnie.</p>
                </div>
            ";
          }
          if($_GET['git'] == 'ok3'){
            echo "
                <div class='w3-panel w3-green w3-display-container'>
                <span onclick='this.parentElement.style.display=\"none\"'
                class='w3-button w3-large w3-display-topright'>&times;</span>
                <h3>Udało się!</h3>
                <p>Dodano pomyślnie.</p>
                </div>
            ";
          }
      }
      if(isset($_GET['page'])){
        if($_GET['page'] == 'branch'){
          include('branch.php');
        }
        if($_GET['page'] == 'warehouse'){
          include('warehouse.php');
        }
        if($_GET['page'] == 'employees'){
          include('employees.php');
        }
        if($_GET['page'] == 'main'){
          echo
          "
          <div class='main'>
            <div class='img-container'>
              <img src='logo.png' alt='logo'>
            </div>
            <div>
              <p class='words'>Welcome to Your Dashboard <br> <span id='name'>Cars Matters</span></p>
            </div>
          </div>
          ";
          echo"<footer style='text-align: center; margin-top: 50px; padding: 20px 0;'>All rights reserved &copy; Cars Matters</footer>";
        }
      }
    ?>

  </body>
</html>