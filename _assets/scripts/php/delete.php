<?php
include "base.php";

if ($loggedin) {
	head("Delete");

	if ($_GET["id"]) {
		$id = mysql_real_escape_string($_GET["id"]);
		$query = mysql_query("DELETE FROM arbor WHERE id=$id");

		if (!$query) {
			add_message("The item was not deleted.", "danger");
			header("Location: ../../index.php");
		} else {
			add_message("You have successfully deleted the item.", "success");
			header("Location: ../../index.php");
		}

		footer();
	} else {
		add_message("Please login to view that page.", "danger");
		header("Location: ../../index.php");
	}
?>