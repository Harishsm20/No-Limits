<?php
    require './../db/connection.php';
    $db = db();
    session_name("NoLimits");
    session_start();
    if ($db) {
        try {
            if (1)
             {
                extract($_POST);
                $user_id = $_SESSION['user_id'];
                if($_SESSION['role']==1){
                $stmt = $db->prepare("INSERT INTO comments ( comments, subject, user_id) VALUES (?, ?, ?)");
                $stmt->bind_param('ssi',$comment,$subject,$user_id);
                $stmt->execute();
                if ($stmt->error) {
                   echo ($stmt->error) ;
                }
                else{
                    echo "Hello";
                }
            }
        
            }
         } catch (Exception $ex) {
               echo $ex->__toString();
            }
        
    }
    else {
        die('Database error');
    }

