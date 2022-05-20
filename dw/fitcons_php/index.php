<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>:: Tarblazers - Become an Inspiration ::</title>

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
	<!-- //css files -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->

	<!-- online-fonts -->
	<link href="http://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700&amp;subset=gujarati,latin-ext" rel="stylesheet">
	<!-- //online-fonts -->
	<style type="text/css">
		.navbar-toggle {

			margin-top: 33px !important;

		}

		html body {
			overflow-y: hidden !important;
			/* Hide vertical scrollbar */
			overflow-x: hidden !important;
			/* Hide horizontal scrollbar */
		}

		body {
			overflow-y: hidden !important;

			padding: 0;
			margin: 0;
			font-family: 'Hind Vadodara', sans-serif;
			background: #000;
			position: relative;

		}

		html {

			overflow-y: hidden !important;
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

			.slider-img {
				height: 100%;
				min-height: 100% !important;
			}

			.rslides img {
				height: auto;
				border: 0;
				height: 100%;
				width: 100%;
			}

			.slider-info h1 {
				color: #d43f3a;
				font-size: 3em !important;
				padding-top: 5%;
				font-style: normal;
				text-transform: uppercase;
				border: none;
				font-weight: 800;
				line-height: 1.3em;
				margin-bottom: 5%;
			}
		}

		@media screen and (min-width: 350px) and (max-width: 760px) {
			.footer {
				position: fixed;
				left: 0;
				bottom: 0;
				width: 100%;
				background-color: #0d334a;
				color: white;
				text-align: center;
			}

			.slider-img {
				height: 500px;
				min-height: 500px !important;
			}

			.rslides img {
				height: auto;
				border: 0;
				height: 100%;
				width: 100%;
			}

			.slider-info h1 {
				color: #d43f3a;
				font-size: 3em !important;
				padding-top: 5%;
				font-style: normal;
				text-transform: uppercase;
				border: none;
				font-weight: 800;
				line-height: 1.3em;
				margin-bottom: 5%;
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

			.slider-img {
				height: 500px;
				min-height: 500px !important;
			}

			.rslides img {
				height: auto;
				border: 0;
				height: 100%;
				width: 100%;
			}

			.slider-info h1 {
				color: #d43f3a;
				font-size: 3em !important;
				padding-top: 5%;
				font-style: normal;
				text-transform: uppercase;
				border: none;
				font-weight: 800;
				line-height: 1.3em;
				margin-bottom: 5%;
				color: white;
				text-shadow: 2px 2px 4px #000000;
			}
		}

		html body {
			overflow: scroll;
			overflow-x: hidden;
		}

		.navbar-default .navbar-nav>.open>a,
		.navbar-default .navbar-nav>.open>a:hover,
		.navbar-default .navbar-nav>.open>a:focus {
			color: #22e27d;
			background-color: transparent;
		}

		.dropdown-menu {
			position: absolute;
			top: 100%;
			left: 0;
			z-index: 1000;
			display: none;
			float: left;
			min-width: 160px;
			padding: 5px 0;
			margin: 2px 0 0;
			font-size: 14px;
			text-align: left;
			list-style: none;
			background-color: #0d334a;
			-webkit-background-clip: padding-box;
			background-clip: padding-box;
			border: 1px solid #ccc;

			border-radius: 4px;
			-webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
			box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
		}

		.dropdown-menu>li>a {
			display: block;
			padding: 3px 20px;
			clear: both;
			font-weight: normal;
			line-height: 1.42857143;
			color: #ffffff;
			white-space: nowrap;
		}


		.dropdown:hover a:hover {
			background-color: transparent;
			color: #19d478;
		}


		.navbar-nav>li>.dropdown-menu {
			margin-top: 28px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}

		.navbar-nav {
			float: left;
			padding-top: 0.5%;
			margin-left: 5%
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

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-1" id="cl-effect-1">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.php">Home</a></li>
								<li><a href="signup.php">Register</a></li>
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
		<style type="text/css">
			.slider-info h1 {

				font-size: 5em;
				padding-top: 5%;
				font-style: normal;
				text-transform: uppercase;
				border: none;
				font-weight: 800;
				line-height: 1.3em;
				margin-bottom: 5%;
				color: white;
				text-shadow: 1px 1px 2px #000000, 0 0 25px #0681d7, 0 0 5px #000000;
			}
		</style>
		<!-- Slider -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>
						<div class="slider-img">
							<img src="images/bg2.jpg" class="img-responsive" alt="education">
						</div>
						<div class="slider-info">
							<h1>LET'S START


								RUNNING</h1>

						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/bg4.jpg" class="img-responsive" alt="education">
						</div>
						<div class="slider-info">
							<h1>LETS'S START


								YOGA</h1>

						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/bg1.jpg" class="img-responsive" alt="education">
						</div>
						<div class="slider-info">
							<h1>LETS'S START


								AEROBICS</h1>

						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/bg5.jpg" class="img-responsive" alt="education">
						</div>
						<div class="slider-info">
							<h1>LETS'S START


								GYM</h1>

						</div>
					</li>

					<li>
						<div class="slider-img">
							<img src="images/bg7.jpg" class="img-responsive" alt="education">
						</div>
						<div class="slider-info">
							<h1>LETS'S START


								CYCLING</h1>

						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/bg8.jpg" class="img-responsive" alt="education">
						</div>
						<div class="slider-info">
							<h1>LETS'S START


								DANCING</h1>

						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/bg3.jpg" class="img-responsive" alt="education">
						</div>
						<div class="slider-info">
							<h1>LETS'S START


								WALKING</h1>

						</div>
					</li>
					<li>
						<div class="slider-img">
							<img src="images/bg6.jpg" class="img-responsive" alt="education">
						</div>
						<div class="slider-info">
							<h1>LET'S START


								RUNNING</h1>

						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<!-- Modal5 -->
		<div class="modal fade" id="myModal5" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4>Blog Post</h4>
						<h5>Lorem ipsum dolor sit amet</h5>
						<img src="images/b3.jpg" alt="blog-image" />
						<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
					</div>
				</div>

			</div>
		</div>
		<!-- //Modal5 -->
		<!-- //Slider -->
		<!-- //header -->
		<!-- banner-bottom -->

	</div>
	<!-- //banner-bottom -->

	<!-- //main -->
	<!-- About -->

	<!-- //About -->


	<!-- //Services -->

	<!-- Blogs -->

	<!-- Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Blog Post</h4>
					<h5>Lorem ipsum dolor sit amet</h5>
					<img src="images/b1.jpg" alt="blog-image" />
					<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
				</div>
			</div>

		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Blog Post</h4>
					<h5>Lorem ipsum dolor sit amet</h5>
					<img src="images/b4.jpg" alt="blog-image" />
					<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
				</div>
			</div>

		</div>
	</div>
	<!-- //Modal2 -->
	<!-- Modal3 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Blog Post</h4>
					<h5>Lorem ipsum dolor sit amet</h5>
					<img src="images/b2.jpg" alt="blog-image" />
					<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
				</div>
			</div>

		</div>
	</div>
	<!-- //Modal3 -->
	<!-- Modal4 -->
	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Blog Post</h4>
					<h5>Lorem ipsum dolor sit amet</h5>
					<img src="images/b3.jpg" alt="blog-image" />
					<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
				</div>
			</div>

		</div>
	</div>
	<!-- //Modal4 -->

	<!-- //Blogs -->
	<!-- team -->
	<script src="js/jquery.vide.min.js"></script>

	<!--//team  -->

	<!-- portfolio -->

	<!-- //portfolio -->

	<!-- Contact -->

	<!-- //Contact -->
	<!-- //main -->
	<style type="text/css">
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
		<p style="text-align: left;padding-left: 5%" class="agileinfo"> &copy; 2022 tarblazers.com</p>
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
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
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