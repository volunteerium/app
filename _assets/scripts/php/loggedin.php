<?php
	if (!isset($_SESSION)) {
		session_start();
	}

	$loggedin;

	if(session_is_registered("email")){
		$loggedin = true;
	} else {
		$loggedin = false;
	}
?>