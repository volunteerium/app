<?php
	include "_assets/scripts/php/connect.php";
	include "_assets/scripts/php/loggedin.php";
	include "_assets/scripts/php/messaging.php";

	function head ($title) {
?>

<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Base Website - <?php echo $title; ?></title>
		<link href="_assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="_assets/css/styles.css" rel="stylesheet">
	</head>
	<body id="page-top" class="index">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="#page-top">Base Website</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="index.php">Home</a>
						</li>
						<?php
							if ($loggedin) {
						?>
						<li>
							<a href="index.php#logout">Log Out</a>
						</li>
						<?php
							} else {
						?>
						<li>
							<a href="index.php#signup">Log In</a>
						</li>
						<?php
							}
						?>
					</ul>
				</div>
			</div>
		</nav>

<?php
	}

	function footer () {
?>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span class="copyright">Copyright &copy; Brian's Flowers 2015</span>
					</div>
				</div>
			</div>
		</footer>

		<script src="_assets/scripts/js/jquery.min.js"></script>
		<script src="_assets/scripts/js/bootstrap.min.js"></script>
	</body>
</html>

<?php
	}
?>