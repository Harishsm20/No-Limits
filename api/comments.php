<?php
require './../db/connection.php';
include './../db/main.php';
checkSession();
CheckRole("0-1",$_SESSION['role']);
$db = db();
$res = array();
$data = array();
if ($db) {
    try {
        extract($_POST);
        if ($_SESSION['role'] == 0){
        $sql = "SELECT q.username, q.email, s.comments, s.subject, s.date,s.user_id FROM user_details q JOIN comments s ON q.id = s.user_id";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) >= 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;

            }
            $res['success'] = true;
            $res['data'] = $data;
            $res['check'] = $_SESSION['role'];
        }else{
            $res['success'] = false;
            $res['message'] = "No Records Found";
        }
        header('Content-Type: application/json');
        echo json_encode($data);
    }
    } catch (Exception $ex) {
        die('Error: ' . $ex->__toString());
    }
} else {
    die('Database error');
}
