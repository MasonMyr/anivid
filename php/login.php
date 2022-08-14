<?php 
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$remember = $_POST['remember'];
	$error_fields = [];
	$mysql = new mysqli('localhost','root','','practice');
	

	if ($email === '') {
		$error_fields[] = 'LoginNoneEmail';
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error_fields[] = 'LoginEmailIncorrect';
	}

	$result = $mysql->query("SELECT * FROM `registration` WHERE `Email` = '$email' AND `Password` = '$pass'");
	
	$user = $result->fetch_assoc();

	if(count($user) == 0){
		if ($pass === '') {
			$error_fields[] = 'LoginNonePass';
		} else {
			$error_fields[] = 'LoginWrongPass';
		}
	}
	
	if (!empty($error_fields)) {
		$response = [
			"status" => "false",
			"error_fields" => $error_fields
		];

		echo json_encode($response);
		die();
	} else {
		if ($_POST['remember'] === 'remember') {
			setcookie('user', $user['Username'], time() + (1000 * 60 * 60 * 24 * 30), "/");
		} else {
			 setcookie('user', $user['Username'], 0, '/');
		}
		$response = [
			"status" => "true"
		];
		echo json_encode($response);
	}

	$mysql->close();
?>