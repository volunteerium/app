<?php
	include "connect.php";
	include "messaging.php";

	$email = $_POST["email"];
	$password = md5($_POST["password"]);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysql_query($sql);

	if (!$result) {
		add_message("There was an error with your username or password!", "danger");
	} else {
		$count = mysql_num_rows($result);

		if ($count == 1) {
			session_register("email");
			$_SESSION["email"] = $email;
							
			add_message("You have been successfully logged in!", "success");
		} else {
			add_message("You entered an incorrect username or password!", "danger");
		}
	}

	header("Location: ../../index.php");

	ob_end_flush();
?>