<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>:: Fitness Icons - Become an Inspiration ::</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Craft web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel='stylesheet' type='text/css' href='css/jquery.easy-gallery.css' /> <!-- For-gallery-CSS -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<!-- //css files -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/additional-methods.min.js"></script>
	
	<!-- //js -->

	<!-- online-fonts -->
	<link href="http://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700&amp;subset=gujarati,latin-ext" rel="stylesheet">
	<!-- //online-fonts -->
	<style type="text/css">
		.navbar-toggle {
			margin-top: 33px !important;
		}
		/* Tablet */
		@media screen and (min-width: 760px) and (max-width: 980px) {
			.footer {
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
				background-color: #0d334a;
				color: white;
				text-align: center;
			}
		}
		/* Mobile LD */
		@media screen and (max-width: 350px) {
			.footer {
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
				background-color: #0d334a;
				color: white;
				text-align: center;
			}

			.form-control {

				width: 100%;

			}
		}
		.navbar-nav>li>a {
			font-size: 13.5px;
			text-transform: uppercase;
			padding: 25px 0px 0;
		}
		.navbar-nav {
    float: left;
    padding-top: 0.5%;
    margin-left: 5%;
}
	</style>
</head>

<body>
	<div class="Main-agile">
		<!-- header -->

		<div class="header-bottom">
			<div class="container-fluid">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="logo" style="margin-left: 2%;">
							<img src="images/logo10.png" width="120" height="76" alt=" ">
						</div>
					</div>

					
								<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
									<nav class="cl-effect-1" id="cl-effect-1">
										<ul class="nav navbar-nav">
											<li><a href="index.php">Home</a></li>
											<li class="active"><a href="signup.php">Register</a></li>
											<li><a href="login.php">Login</a></li>
											<li><a href="Contactus.php">Contact Us </a></li>
										</ul>
									</nav>
								</div>


							
					<!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
		<!-- //header -->

	</div>
	<!-- //banner-bottom -->
	<style type="text/css">
		#cover {

			/* The image used 
  background-image: url("images/bgser.jpg");
*/
			/* Full height */
			height: 100%;

			/* Center and scale the image nicely */
			background-position: center;
			background-repeat: no-repeat;
			background-size: cover;

			background-size: cover;
			height: 100%;
			text-align: center;
			display: flex;
			align-items: center;
			position: relative;
		}

		#cover-caption {
			width: 100%;
			position: relative;
			z-index: 1;
		}

		/* only used for background overlay not needed for centering */
		form:before {
			content: '';
			height: 100%;
			left: 0;
			position: absolute;
			top: 0;
			width: 100%;
			background-color: rgb(13 51 74);
			z-index: -1;
			border-radius: 10px;
		}


		/* Retina display */
		@media screen and (min-width: 1024px) {
			.reg_w {
				margin-left: 30%;
				margin-top: 2%;
				margin-bottom: 5%
			}

			#cover-caption {
				margin-left: 30%;
			}
		}

		/* Desktop */
		@media screen and (min-width: 980px) and (max-width: 1024px) {
			.reg_w {
				margin-left: 30%;
				margin-top: 2%;
				margin-bottom: 5%
			}

			#cover-caption {
				margin-left: 30%;
			}

			nav navbar-nav {
				margin-top: -10px;
			}
		}

		/* Tablet */
		@media screen and (min-width: 760px) and (max-width: 980px) {}

		/* Mobile HD */
		@media screen and (min-width: 350px) and (max-width: 760px) {
			.reg_m {
				margin-left: 5%;
				margin-right: 5%;
				margin-top: 2%;
			}

			#cover {


				padding-bottom: 19%;
			}
		}

		/* Mobile LD */
		@media screen and (max-width: 350px) {
			.reg_m {
				margin-left: 5%;
				margin-right: 5%;
				margin-top: 2%;
			}

		}

		html,
		body {
			max-width: 100%;
			overflow-x: hidden;
		}

		#cover {


			margin-bottom: 3%;
		}

	</style>


	<section id="cover" class="min-vh-100">
		<div id="cover-caption" class="reg_w reg_m">
			<div class="">
				<div class="row text-white">
					<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
						<h1 style="padding-top: 3%;padding-bottom: 3%; color: #fff" class="display-4 py-2 text-truncate">SIGN-UP </h1>
						<div class="px-2" style="padding-top: 3%;padding-bottom: 3%; color: #fff">
							<form id="signupform" action=signup_check.php class="justify-content-center" method="post">
								<div class="form-group">
									<label class="sr-only">First Name</label>
									<input type="text" class="form-control" required name="firstname" id="firstname" placeholder="Please enter First Name here">
								</div>
								<div class="form-group">
									<label class="sr-only">Last Name</label>
									<input type="text" class="form-control" required name="lastname" id="lastname" placeholder="Please enter Last Name here">
								</div>

								<div class="form-group">
									<select class="form-control" name="gender" id="gender" required>
										<option selected disabled> Select Gender</option>
										<option value="male">Male</option>
										<option value="female">Female</option>

									</select>
								</div>
								<div class="form-group">
									<label class="sr-only">Mobile</label>
									<input type="number" class="form-control" required name="mobile" id="mobile" placeholder="Please enter Mobile No. here">
								</div>
								<div class="form-group">
									<label class="sr-only">Date of Birth</label>
									<input type="text" class="form-control" required name="dob" id="dob" placeholder="Select Date of Birth">
								</div>
								<div class="form-group">
									<label class="sr-only">City Name</label>
									<input type="text" class="form-control" required name="city" id="city" placeholder="Please enter  City Name">
								</div>
								<div class="form-group">
									<label class="sr-only">Password</label>
									<input type="password" class="form-control" required name="password" id="password" placeholder="Please enter Password here">
								</div>
	
								<div class="form-group">
									<label class="sr-only">Email</label>
									<input type="text" class="form-control" required name="email" id="email" placeholder="Please enter E-mail address">
								</div>
								<button type="submit" class="btn btn-primary btn-lg">Register</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="js/jquery.vide.min.js"></script>
	<script>
		$(document).ready(function(){
			var email_name = $("#email").val();
			$("#signupform").validate({
				rules: {
					firstname: 'required',
         			lastname: 'required',
					gender:'required',
					city: 'required',
					dob: 'required',
					mobile :{
						required: true,
						minlength: 10,
						maxlength: 12
					},
					password :{
						required: true,
						minlength: 4,
						maxlength: 10
					},
					email:{
						required:true,
						email:true,
						remote: {                
							url: "check_email.php",
							type: "post"
      					}
					},
				},
				messages: {
					firstname: 'Please enter First Name',
         			lastname: 'Plaese enter Last Name',
					gender: "Please select Gender",
					city: "Please enter City",
					dob: "please date Of Birth",
					mobile :{
						required: "Please Enter Mobilke number",
						minlength: "Enter Minimum 10 numbers",
						maxlength: "Enter Maximum 12 numbers"
					},
					password :{
						required: "Please Enter Mobilke number",
						minlength: "Enter Minimum 4 numbers",
						maxlength: "Enter Maximum 10 numbers"
					},
					email:{
						required:"Please enter email",
						email:"Enter Valid Mail",
						remote:"This Mail Already Exists",
					},
				},
				errorClass:"text-danger",
			});	
		});
	</script>


	<!-- //main -->
	<style type="text/css">
	.error{color:red;}
		.footer {
			height: 50px;
			position: fixed;
			left: 0;
			bottom: 0;
			margin-bottom: 0px;
			width: 100%;
			background-color: #232323;
			text-align: center;
			font-weight: 300;
			font-size: 14px;
			color: #ffffff;
			z-index: 9999;
		}
	</style>

	<div class="footer">
		<p class="agileinfo"> &copy; 2020 fitcons.in, Design & Development by Shweta, Ravi & Chinmay</p>
	</div>
	<!-- js-scripts -->

	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- Baneer-js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			$("#slider").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //Baneer-js -->

	<!-- For-Gallery-js -->
	<!-- script for portfolio -->
	<script type='text/javascript' src='js/jquery.easy-gallery.js'></script>
	<script type='text/javascript'>
		//init Gallery
		$('.portfolio').easyGallery();
	</script>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true // 100% fit in a container
			});
		});
	</script>
	<!-- //script for portfolio -->
	<!-- //For-Gallery-js -->

	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- smooth scrolling-bottom-to-top -->
	<script type="text/javascript">
		$(document).ready(function() {
			$( "#dob" ).datepicker({format: 'yyyy/mm/dd',});
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling-bottom-to-top -->

	<!-- //js-scripts -->
</body>

</html>