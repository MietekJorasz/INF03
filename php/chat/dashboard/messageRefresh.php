<?php
    session_start();

    if(isset($_POST["conversationID"])){
        if($_POST["conversationID"] != "" && $_SESSION['userID'] != ""){
            require_once "../dbconnect.php";
            
            if($conn->connect_error){
                echo "Something went wrong.";
                exit();
            }
    
    
            $query = "SELECT 
                        CASE
                            WHEN m.SenderID = {$_SESSION['userID']} THEN 'You'
                            ELSE u.Username
                        END AS 'Sender',
                        m.Content
                    FROM Messages m
                    LEFT JOIN Users u ON m.SenderID = u.UserID
                    WHERE m.ConversationID = {$_POST["conversationID"]}";
    
            $result = $conn->query($query);
    
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    if($row["Sender"] == "You"){
                        echo"<div id='rightMessage'>";
                    }
                    else{
                        echo"
                            <div id='leftMessage'>
                            <div style='width: 30px; height: 30px;' class='friendsLogo prevent-select'>{$_POST['uname'][0]}</div>
                        ";
                    }
                    echo"
                            <div id='messageBorder'>
                                {$row["Content"]}
                            </div>
                        </div>
                        ";
                }
            } else {
                // echo "<div id='messageInfo'>Start a chat.</div>";
            }

        }
    }
?>