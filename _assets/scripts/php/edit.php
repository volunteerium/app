<?php
	include 'base.php';

	if ($loggedin) {
		head("Edit");

		$id = mysql_real_escape_string($_GET["id"]);
		$sel = mysql_query("SELECT * FROM table WHERE id=$id");
		$item = mysql_fetch_array($sel);

		if ($_POST["name"] && $_POST["type"]) {
			$name = mysql_real_escape_string($_POST["name"]);
			$type = mysql_real_escape_string($_POST["type"]);
			
			$up = mysql_query("UPDATE table SET name='$name', type='$type' WHERE id=$id");

			if (!$up) {
				add_message("The item failed to be edited.", "danger");
				header("Location: ../../index.php");
			} else {
				add_message("The item was successfully edited.", "success");
				header("Location: ../../index.php");
			}
		}
?>

		<form method='post'>
			<input type="text" name="name" class="form-control" placeholder="Name" maxlength="20" value="<?php echo $item["name"]?>" required>
			<select name="type" class="form-control" required>
				<option value="a">A</option>
				<option value="b">B</option>
			</select>
			<button type="submit" class="btn btn-default">Edit</button>
		</form>

<?php
		footer();
	} else {
		add_message("Please login to view that page.", "danger");
		header("Location: ../../index.php");
	}
?>