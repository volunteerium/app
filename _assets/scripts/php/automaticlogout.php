<?php
	if (isset($_SESSION["automatic_log_out"]) && time() - $_SESSION["automatic_log_out"] >= 900) {
		header("Location: scripts/php/logout.php");
	}
?>