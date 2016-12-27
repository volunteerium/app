<?php
	include "connect.php";
	include "messaging.php";

	$email = $_POST["email"];
	$password = md5($_POST["password"]);
	
	$sql = "SELECT email FROM users WHERE email='$email'";
	$result = mysql_query($sql);

	if (!$result) {
		add_message("There was an error with your username or password!", "danger");
	} else {
		$count = mysql_num_rows($result);

		if ($count == 1) {
			add_message("Your email has already been registered!", "danger");
		} else {
			$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
			$query = mysql_query($sql);

			session_register("email");
			$_SESSION["email"] = $email;

			add_message("Your account has been successfully registered! You were successfully logged in!", "success");
		}
	}

	header("Location: ../../index.php");

	ob_end_flush();
?>