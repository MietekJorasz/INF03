<?php
    session_start();

    if(isset($_POST['login'])){
        $login = $_POST['login'];
        $haslo = $_POST['password'];

        $connect = mysqli_connect("localhost", "root", "", "parafia_ustrobna");

        if(!$connect){
            $_SESSION['error'] = "Błąd. Spróbuj zalogować się jeszcze raz.";
            header("Location: index.php");
            exit();
        }

        $query = "SELECT * FROM admin WHERE login = '{$login}' &&  hasło = '{$haslo}'";

        $result = mysqli_query($connect, $query);

        if($result){
            if(mysqli_num_rows($result) == 1){
                while( $row = mysqli_fetch_assoc($result)){
                    $_SESSION['login'] = $row['login'];
                    $_SESSION['ranga'] = $row['uprawnienia'];
                }
                header("Location: admin.php");
                exit();
            }
            else{
                $_SESSION['error'] = "Błąd. Niepoprawny login lub hasło.";
                header("Location: index.php");
                exit();
            }
            
        }


    }
    else{
        $_SESSION['error'] = "Błąd. Wpisz login i hasło.";
        header("Location: index.php");
        exit();
    }

?>