<?php
    session_start();
    require_once "../dbconnect.php";

    if($conn->connect_error){
        echo "Something went wrong.";
        exit();
    }

    $userID = $_SESSION['userID'];

    if(isset($_POST['string'])){
        $string = $_POST['string'];
    }else{
        $string = "";
    }


    $query = "
    SELECT c.ConversationID,
    CASE
        WHEN c.User1ID = $userID THEN u2.Username
        ELSE u1.Username
    END AS 'Partner',
    (SELECT Content FROM Messages WHERE ConversationID = c.ConversationID ORDER BY Timestamp DESC LIMIT 1) AS 'LatestMessage'
    FROM Conversations c
    LEFT JOIN Users u1 ON c.User1ID = u1.UserID
    LEFT JOIN Users u2 ON c.User2ID = u2.UserID
    WHERE $userID IN (c.User1ID, c.User2ID)     AND (
        (c.User1ID = $userID AND u2.Username LIKE '{$string}%')
        OR
        (c.User2ID = $userID AND u1.Username LIKE '{$string}%')
    )
    ORDER BY c.ConversationID DESC;
        ";


    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        if($string != "" ){
            echo"<h4>Friends</h4>";    
        }
        while ($row = $result->fetch_assoc()) {
            echo "
                <a href='?id={$row['ConversationID']}&uname={$row['Partner']}'><div id='chatCard'>
                <div class='friendsLogo prevent-select'>{$row['Partner'][0]}</div>
                <div>
                    <div class='cardTitle'>{$row['Partner']}</div> 
                    <div class='cardLastMessage'>{$row['LatestMessage']}</div> 
                </div>
                </div></a>
                ";
        }
    }

    if($string != ""){
        $query2 = "
            SELECT u.UserID, u.Username
            FROM users u
            WHERE u.UserID != $userID
            AND u.Username LIKE '{$string}%'
            AND u.UserID NOT IN (
                SELECT 
                    CASE
                        WHEN c.User1ID = $userID THEN c.User2ID
                        ELSE c.User1ID
                    END
                FROM 
                    conversations c
                WHERE 
                    $userID IN (c.User1ID, c.User2ID)
            );
        ";
        $result2 = $conn->query($query2);
        if ($result2->num_rows > 0) {
            echo"<h4>More people</h4>";
            while ($row2 = $result2->fetch_assoc()) {
                echo "
                    <div id='chatCardB'>
                        <div style='display:flex; align-items: center; gap: 10px'>                        
                            <div class='friendsLogo prevent-select'>{$row2['Username'][0]}</div>
                            <div>
                                <div class='cardTitle'>{$row2['Username']}</div> 
                            </div>
                        </div>
                        <a href='./add.php?id={$row2['UserID']}&uname={$row2['Username']}'><span id='icon' class='material-symbols-outlined prevent-select'>add</span></a>
                    </div>
                    ";
            }
        }
    }
?>