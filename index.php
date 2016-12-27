<?php
	include "base.php";
	head("Home");
?>

<header class="bg-gray text-center">
	<div class="container">
		<div class="intro-lead-in">Floral and Gardening Supplies</div>
		<div class="intro-heading">At Unbeatable Prices</div>
		<a href="#locations" class="btn btn-primary btn-xl">See Locations</a>
		<?php
			show_message();
		?>
	</div>
</header>

<section id="locations">
	<div class="container">
		<h2 class="section-heading">Locations</h2>
		<h3 class="section-subheading text-muted">With four locations, you&#8217;re never far from Brian&#8217;s Flowers.</h3>
		<div class="row text-center">
			<div class="col-md-4">
				<h4 class="service-heading">Albert Lea</h4>
				<p class="text-muted">If you&#8217;re in the area, come visit Brian&#8217;s Flowers in Albert Lea, conveniently located for your floral and gardening needs.</p>
			</div>
			<div class="col-md-4">
				<h4 class="service-heading">Winona</h4>
				<p class="text-muted">For all of the gardeners in Winona, there&#8217;s a store for you. Drop by Brian&#8217;s Flowers to pick up your floral and gardening supplies today.</p>
			</div>
			<div class="col-md-4">
				<h4 class="service-heading">Rochester</h4>
				<p class="text-muted">With two locations in Rochester, there&#8217;s no excuse not to stop in at one of the conveniently placed Brian&#8217;s Flowers locations.</p>
			</div>
		</div>
	</div>
</section>

<section id="about" class="bg-gray">
	<div class="container">
		<h2 class="section-heading">About</h2>
		<h3 class="section-subheading text-muted">The success story of Brian's Flowers.</h3>
	</div>
</section>

<section id="team">
	<div class="container">
		<h2 class="section-heading">Our Amazing Team</h2>
		<h3 class="section-subheading text-muted">The people that make this store happen.</h3>
		<div class="row">
			<div class="col-lg-12">
				<div class="team-member text-center">
					<img src="_assets/images/team/profile-leo.jpg" class="img-responsive img-circle img-profile" alt="">
					<h4>Leo Alfred</h4>
					<p class="text-muted">Lead Developer</p>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	if ($loggedin) {
?>

<section id="logout" class="bg-gray">
	<div class="container">
		<h2 class="section-heading">Log Out</h2>
		<h3 class="section-subheading text-muted">Do you have all the seeds and supplies that you want?</h3>
		<a href="_assets/scripts/php/logout.php" class="signup-link">
			<img src="_assets/images/signup/logout.jpg" class="img-responsive" alt="">
		</a>
		<div class="signup-caption">
			<h4>Log Out</h4>
		</div>
	</div>
</section>

<?php
	} else {
?>

<section id="signup" class="bg-gray">
	<div class="container">
		<h2 class="section-heading">Log In</h2>
		<h3 class="section-subheading text-muted">Want seeds and supplies? Log in now.</h3>
		<div class="row">
			<div class="col-sm-6 signup-item">
				<a href="#signup-modal" class="signup-link" data-toggle="modal">
					<img src="_assets/images/signup/signup.jpg">
				</a>
				<div class="signup-caption text-center">
					<h4>Sign Up</h4>
				</div>
			</div>
			<div class="col-sm-6 signup-item">
				<a href="#login-modal" class="signup-link" data-toggle="modal">
					<img src="_assets/images/signup/login.jpg">
				</a>
				<div class="signup-caption text-center">
					<h4>Log In</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
	}
?>

<div class="modal fade" id="signup-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
				<h2 class="text-center">Sign Up</h2>
				<form action="_assets/scripts/php/signup.php" method="post" name="signup" id="signup">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Enter Your Password" id="password" name="password" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Re-enter Your Password" id="confirm_password" name="confirm_password" required>
					</div>
					<button class="btn btn-primary btn-wide" type="submit">Sign Up</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal">
					<span aria-hidden="true">&times;</span>
				</button>
				<h2 class="text-center">Log In</h2>
				<form action="_assets/scripts/php/login.php" method="post" name="login" id="login">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Enter Your Email" id="email" name="email" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" placeholder="Enter Your Password" id="loginpassword" name="password" required>
					</div>
					<button class="btn btn-primary btn-wide" type="submit">Log In</button>
				</form>
			</div>
		</div>
	</div>
</div>

<script src="_assets/scripts/js/confirmpassword.js"></script>

<?php
	footer();
?>