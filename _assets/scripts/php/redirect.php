<?php
	function redirect($type) {
		if(session_is_registered("email")){
			$loggedin = true;
		} else {
			$loggedin = false;
		}

		if (!$loggedin || $_SESSION["account_type"] != $type) {
			header("Location: ../../index.php");
		}
	}
?>