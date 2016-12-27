<?php
	include "base.php";

	if ($loggedin) {
		head("Add");

		if ($_POST["name"] && $_POST["type"]) {
			$name = mysql_real_escape_string($_POST ["name"]);
			$type = mysql_real_escape_string($_POST ["type"]);
			
			$query = mysql_query("INSERT INTO table (name, type) VALUES ('$name', '$type')");
			
			if ($query) {
				add_message("The item has been successfully added.", "success");
				header("Location: ../../index.php");
			}
		}
?>
		<form method='post'>
			<input type="text" name="name" class="form-control" placeholder="Name" maxlength="20" required>
			<select name="type" class="form-control" required>
				<option value="a">A</option>
				<option value="b">B</option>
			</select>
			<button class="btn btn-primary" type="submit">Add</button>
		</form>

<?php
		footer();
	} else {
		add_message("Please login to view that page.", "danger");
		header("Location: ../../index.php");
	}
?>