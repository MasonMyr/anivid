<?php
	$mysql = new mysqli('localhost','root','','practice');

	$email = $_POST['email'];
	$username = $_POST['username']; 
	$password = $_POST['password']; 
	$confpassword = $_POST['confpassword'];
	$terms = $_POST['terms'];
	$avatar = 'img/avatars/avatar_std.jpg';
	

	$error_fields = [];

	$username_check = $mysql->query("SELECT * FROM `registration` WHERE `Username` = '$username'");
	$username_count = $username_check->fetch_assoc();

	if (count($username_count) > 0) {
		$error_fields[] = 'UsernameAlreadyUsed';
	}

	$email_check = $mysql->query("SELECT * FROM `registration` WHERE `Email` = '$email'");
	$email_count = $email_check->fetch_assoc();

	if(count($email_count) >= 1){
		$error_fields[] = 'EmailAlreadyUsed';
	}

	if ($username === '') {
		$error_fields[] = 'NoneUsername';
	}

	if ($terms === '') {
		$error_fields[] = 'ConfTerms';
	}
	
	if ($email === '') {
		$error_fields[] = 'NoneEmail';
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$error_fields[] = 'EmailIncorrect';
	}
	
	if ($password === '') {
		$error_fields[] = 'NonePass';
	}

	
	if ($confpassword === '') {
		$error_fields[] = 'NoneConfPass';
	} else if ($password != $confpassword) {
		$error_fields[] = 'ConfPassError';
	}

	if (!empty($error_fields)) {
		$response = [
			"status" => "false",
			"error_fields" => $error_fields
		];

		echo json_encode($response);
		die();
	} else {
		setcookie('user', $username, 0, '/');
		$response = [
			"status" => "true"
		];
		echo json_encode($response);
	}

	$mysql -> query("INSERT INTO `registration`(`Email`, `Username`, `Password`, `Avatar`) VALUES ('$email', '$username', '$password', '$avatar')");
	$mysql -> close();
?>