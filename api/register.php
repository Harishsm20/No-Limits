<?php
include './../db/connection.php';
$db = db();
if ($db) {
    try {
        if (1)
         {
            extract($_POST);
            $stmt = $db->prepare("INSERT INTO user_details (username, email, phone, password, role) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param('ssisi',$username,$email,$phone,$password,$role);
            $stmt->execute();
            
            if ($stmt->error) {
                if (preg_match('/username/i',$stmt->error)){
                $res['success'] = false;
                $res['message'] = 'Username Already Exists';}

                if (preg_match('/email/i',$stmt->error)){
                $res['success'] = false;
                $res['message'] = 'Your Email Id is Already Registered';}

            } else {
                $res['success'] = true;
                $res['message'] = 'Submitted successfully';
            }
            $stmt->close();
        }else{
            $res['success']=false;
            $res['message']="Missing Values";
        }

    } catch (Exception $ex) {
        $res['success'] = false;
        $res['message'] = $ex->__toString();
    }
} else {
    die('Database error');
}
echo json_encode($res);