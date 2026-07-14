<?php
    session_start();

    if(isset($_POST['conversationID'])){

        require_once "../dbconnect.php";
            
        if($conn->connect_error){
            echo "Something went wrong.";
            exit();
        }


        $query = "SELECT * FROM conversations WHERE ConversationID = '{$_POST['conversationID']}'";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $User1ID = $row['User1ID'];
                $User2ID = $row['User2ID'];
            }
        }
        
        if($_SESSION['userID'] == $User1ID){
            $ReceiverID = $User2ID;
        }else{
            $ReceiverID = $User1ID; 
        }

        $date = date('Y-m-d H:i:s');

        $query2 = "INSERT INTO messages VALUES ('', '{$_POST['conversationID']}', '{$_SESSION['userID']}', '{$ReceiverID}', '{$_POST['message']}', '{$date}')";

        $result2 = $conn->query($query2);

    }

?>