<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wizard-v3</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="asset/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="asset/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- datepicker -->
	<link rel="stylesheet" type="text/css" href="asset/css/jquery-ui.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="asset/css/style.css"/>

	<!-- Icon css link -->
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Rev slider css -->
	<link href="vendors/revolution/css/settings.css" rel="stylesheet">
	<link href="vendors/revolution/css/layers.css" rel="stylesheet">
	<link href="vendors/revolution/css/navigation.css" rel="stylesheet">

	<!-- Extra plugin css -->
	<link href="vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">

	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
</head>
<body>
<header class="main_menu_area">
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<!-- <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>-->
		<a class="navbar-brand" href="#"><h4 style="color: darkblue; font-weight: bold">Logo Here</h4></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span></span>
			<span></span>
			<span></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
				<li class="nav-item"><a class="nav-link" href="about-us.php">About Us</a></li>
				<li class="nav-item"><a class="nav-link" href="service.html">How it Works</a></li>
				<li class="nav-item"><a class="nav-link" href="portfolio.html">Order Trackers</a></li>
				<li class="nav-item"><a class="nav-link" href="portfolio.html">Locations</a></li>
				<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>

				<li class="nav-item dropdown submenu">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						join us
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li class="nav-item"><a class="nav-link" href="register.php">Register To Ship</a></li>
						<li class="nav-item"><a class="nav-link" href="single-blog.html">Sign in / Login</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>


<div class="page-content" style="background-image: url('asset/images/wizard-v3.jpg')">
		<div class="wizard-v3-content">
			<div class="wizard-form">
				<div class="wizard-header">
					<h3 class="heading">Sign Up Your User Account</h3>
					<p>Fill all form field to go next step</p>
				</div>
		        <form class="form-register" action="#" method="post">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-account"></i></span>
			            	<span class="step-text">About</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Account Information:</h3>
			                	<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" name="email" id="email" class="form-control" style="width: 700px;" required>
											<span class="label">Email Address</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="username" name="username" required>
											<span class="label">Username</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="password" name="password_1" id="password_1" class="form-control" required>
											<span class="label">Password</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="password" name="comfirm_password_1" id="comfirm_password_1" class="form-control" required>
											<span class="label">Comfirm Password</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
							</div>
			            </section>
						<!-- SECTION 2 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-lock"></i></span>
			            	<span class="step-text">Personal</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Personal Information:</h3>
			                	<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="first_name" name="first_name" required>
											<span class="label">First Name*</span>
					  						<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="last_name" name="last_name" required>
											<span class="label">Last Name*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div id="radio">
										<label>Gender*:</label>
										<input type="radio" name="gender" value="male" checked class="radio-1"> Male
  										<input type="radio" name="gender" value="female"> Female
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Date of Birth*:</label>
										<select name="date" id="date">
											<option value="Day" disabled selected>Day</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
										</select>
										<select name="month" id="month">
											<option value="Month" disabled selected>Month</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
										</select>
										<select name="year" id="year">
											<option value="Year" disabled selected>Year</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="phone" name="phone" required>
											<span class="label">Phone Number*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-1">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="address" name="address" required>
											<span class="label">Address*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 3 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-card"></i></span>
			            	<span class="step-text">Payment</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Payment Information:</h3>
			                	<div class="form-row">
			                		<div class="form-holder form-holder-2">
			                			<input type="radio" name="radio1" id="pay-1" value="pay-1" checked>
			                			<label class="pay-1-label" for="pay-1"><img src="images/wizard_v3_icon_1.png" alt="pay-1">Credit Card</label>
										<input type="radio" name="radio1" id="pay-2" value="pay-2">
										<label class="pay-2-label" for="pay-2"><img src="images/wizard_v3_icon_2.png" alt="pay-2">Paypal</label>
			                		</div>
			                	</div>
			                	<div class="form-row">
									<div class="form-holder form-holder-2">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="holder" name="holder" required>
											<span class="label">Holder Name*</span>
					  						<span class="border"></span>
										</label>
									</div>
								</div>
			                	<div class="form-row">
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="card" name="card" required>
											<span class="label">Card Number*</span>
											<span class="border"></span>
										</label>
									</div>
									<div class="form-holder">
										<label class="form-row-inner">
											<input type="text" class="form-control" id="cvc" name="cvc" required>
											<span class="label">CVC*</span>
											<span class="border"></span>
										</label>
									</div>
								</div>
			                	<div class="form-row form-row-date form-row-date-1">
									<div class="form-holder form-holder-2">
										<label for="date" class="special-label">Expiry Date*:</label>
										<select name="month_1" id="month_1">
											<option value="Month" disabled selected>Month</option>
											<option value="Feb">Feb</option>
											<option value="Mar">Mar</option>
											<option value="Apr">Apr</option>
											<option value="May">May</option>
										</select>
										<select name="year_1" id="year_1">
											<option value="Year" disabled selected>Year</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
										</select>
									</div>
								</div>
							</div>
			            </section>
			            <!-- SECTION 4 -->
			            <h2>
			            	<span class="step-icon"><i class="zmdi zmdi-receipt"></i></span>
			            	<span class="step-text">Confirm</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<h3>Confirm Details:</h3>
			                	<div class="form-row table-responsive">
									<table class="table">
										<tbody>
											<tr class="space-row">
												<th>Full Name:</th>
												<td id="fullname-val"></td>
											</tr>
											<tr class="space-row">
												<th>Email Address:</th>
												<td id="email-val"></td>
											</tr>
											<tr class="space-row">
												<th>Phone Number:</th>
												<td id="phone-val"></td>
											</tr>
											<tr class="space-row">
												<th>User:</th>
												<td id="username-val"></td>
											</tr>
											<tr class="space-row">
												<th>Gender:</th>
												<td id="gender-val"></td>
											</tr>
											<tr class="space-row">
												<th>Address:</th>
												<td id="address-val"></td>
											</tr>
											<tr class="space-row">
												<th>Card Type:</th>
												<td id="pay-val">Credit Card</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>



<!--================Footer Area =================-->
<footer class="footr_area">
	<div class="footer_widget_area">
		<div class="container">
			<div class="row footer_widget_inner">
				<div class="col-lg-4 col-sm-6">
					<aside class="f_widget f_about_widget">
						<!--<img src="img/footer-logo.png" alt="">-->
						<p style="color: white; font-weight: bold;">Logo Here</p><br/>
						<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>
					</aside>
				</div>
				<div class="col-lg-4 col-sm-6">
					<aside class="f_widget f_insta_widget">
						<div class="f_title">
							<h3>Instagram</h3>
						</div>
						<ul>
							<li><a href="#"><img src="img/instagram/ins-1.jpg" alt=""></a></li>
							<li><a href="#"><img src="img/instagram/ins-2.jpg" alt=""></a></li>
							<li><a href="#"><img src="img/instagram/ins-3.jpg" alt=""></a></li>
							<li><a href="#"><img src="img/instagram/ins-4.jpg" alt=""></a></li>
							<li><a href="#"><img src="img/instagram/ins-5.jpg" alt=""></a></li>
							<li><a href="#"><img src="img/instagram/ins-6.jpg" alt=""></a></li>
							<li><a href="#"><img src="img/instagram/ins-7.jpg" alt=""></a></li>
							<li><a href="#"><img src="img/instagram/ins-8.jpg" alt=""></a></li>
						</ul>
					</aside>
				</div>
				<div class="col-lg-4 col-sm-6">
					<aside class="f_widget f_subs_widget">
						<div class="f_title">
							<h3>Subscribe to newsletter</h3>
						</div>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Your e-mail address here" aria-label="Your e-mail address here">
							<span class="input-group-btn">
                                        <button class="btn btn-secondary submit_btn" type="button">Subscribe</button>
                                    </span>
						</div>
					</aside>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_copyright">
		<div class="container">
			<div class="float-sm-left">
				<h5><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></h5>
			</div>
			<div class="float-sm-right">
				<ul>
					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#"><i class="fa fa-behance"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!--================End Footer Area =================-->


<script src="asset/js/jquery-3.3.1.min.js"></script>
<script src="asset/js/jquery.steps.js"></script>
<script src="asset/js/jquery-ui.min.js"></script>
<script src="asset/js/main.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<!-- Rev slider js -->
<script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<!-- Extra plugin css -->
<script src="vendors/counterup/jquery.waypoints.min.js"></script>
<script src="vendors/counterup/jquery.counterup.min.js"></script>
<script src="vendors/counterup/apear.js"></script>
<script src="vendors/counterup/countto.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
<script src="js/smoothscroll.js"></script>

<script src="js/theme.js"></script>



</body>
</html>