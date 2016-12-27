<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	function add_message($message, $type) {
		$_SESSION["message"] = "<div class='alert alert-$type alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" . $message . "</div>";
	}

	function show_message() {
		if (isset($_SESSION["message"])) {
			echo $_SESSION["message"];
		}

		unset($_SESSION["message"]);
	}
?>