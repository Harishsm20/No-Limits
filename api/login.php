<?php
		require './../db/connection.php';
		$db = db();
		$username = $_POST['username'];
		$password = $_POST['password'];
		$checkSql = "SELECT * FROM user_details WHERE username = '$username'";
		$checkResult = mysqli_query($db, $checkSql);
		if ($checkResult->num_rows > 0) {
			session_name("NoLimits");
			session_start();
			$PassCheck = "SELECT * FROM user_details WHERE username = '$username' AND password = '$password'";
			$checkPass = mysqli_query($db, $PassCheck);
			$userData = mysqli_fetch_assoc($checkPass);
			$_SESSION['auth-state'] = true;
			$_SESSION['role'] = $userData["role"];
			$_SESSION['user_id'] = $userData["id"];
			
			if ($checkPass->num_rows > 0){
				$res['success'] = true;
				$res['message'] = 'Authorized User';
			}
			else {
			$res['success'] = false;
			$res['message'] = 'Incorrect Password';
			}  
			}
			else {
				$res['success'] = false;
				$res['message'] = 'Username Not Found';
		}
		echo json_encode($res);


