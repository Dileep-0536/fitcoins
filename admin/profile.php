<?php 
	include '../db_connection.php';
	if( (!isset($_SESSION['id'])) && $_SESSION['id'] == '') 
    {
        header('Location: ../login.php');
	}
	// get the details of the user details
	$user_id = $_SESSION['id'];
	$query = "SELECT `user_id`, `firstname`, `lastname`, `mobile`, `email`, `city`, `password`, `dob`, `gender`, `role`, `status`, `created_on` FROM `users` WHERE `user_id` = '".$user_id."' ";
	$res = $conn->query($query);
	$res_data = $res->fetch_assoc();
	// echo "<pre>";print_r($res_data);die;
?>
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
    <link rel="stylesheet" href="../css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="../css/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
    <link rel="stylesheet" href="../css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <link rel='stylesheet' type='text/css' href='../css/jquery.easy-gallery.css' /> <!-- For-gallery-CSS -->
    <!-- //css files -->

    <!-- js -->
    <script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
    <!-- //js -->
    <!-- jquery UI plugins cdns start -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- jquery UI plugins Cdns stops -->
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
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
                            <img src="../images/logo10.png" width="120" height="76" alt=" ">
                        </div>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                        <nav class="cl-effect-1" id="cl-effect-1">
                            <ul class="nav navbar-nav">
								<li><a href="dashboard.php">DashBoard</a></li>
								<li><a href="users.php">USERS</a></li>
                                <li><a href="upcoming_events.php">Upcoming Events</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="coreteam.php">Core Team</a></li>
                                <li><a href="100dayschallenge.php"> 100 Days Challenge</a></li>
                                <li><a href="beyond_running.php">Beyond Running</a></li>
                                <li class="active"><a href="profile.php">Profile</a></li>
                                <li><a href="logout.php">Signout</a></li>
                            </ul>
                            
                 <!--           <span class="pull-right" style="color:white;font-size:25px;margin-top:15px;">Welcome <?php echo $_SESSION['name']?></span> -->
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

            /* The image used */
            background-image: url("../images/bgser.jpg");

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
            background-color: rgba(0, 0, 0, 0.3);
            z-index: -1;
            border-radius: 10px;
        }


        /* Retina display */
        @media screen and (min-width: 1024px) {
            .reg_w {
                margin-left: 30%;
                margin-top: 3%;
                margin-bottom: 5%
            }

            .Challenge_w {
                height: 500px;
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

            .Challenge_w {
                height: 500px;
            }
        }

        /* Tablet */
        @media screen and (min-width: 760px) and (max-width: 980px) {
            .Challenge_w {
                height: 500px;
            }
        }

        /* Mobile HD */
        @media screen and (min-width: 350px) and (max-width: 760px) {
            .reg_m {
                margin-left: 5%;
                margin-right: 5%;
                margin-top: 2%;
            }

            .Challenge_m {
                height: 550px;
            }

            .beyond-info_m h1 {

                padding-top: 40%;

            }
        }

        /* Mobile LD */
        @media screen and (max-width: 350px) {
            .reg_m {
                margin-left: 5%;
                margin-right: 5%;
                margin-top: 2%;
            }

            .Challenge_m {
                height: 550px;
            }

            .beyond-info_m h1 {

                padding-top: 40%;

            }
        }

        html,
        body {
            max-width: 100%;

        }

        .beyond-info h1 {
            color: #fff;
            font-size: 25px;
            padding-top: 5%;
            font-style: normal;

            border: none;

            line-height: 1.3em;
            margin-bottom: 5%;
        }

        .hovereffect {
            width: 100%;
            height: 160px;
            float: left;
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
        }

        .hovereffect .overlay {
            width: 100%;
            height: 140px;
            position: absolute;
            overflow: hidden;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.6);
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transform: translate(460px, -100px) rotate(180deg);
            -ms-transform: translate(460px, -100px) rotate(180deg);
            transform: translate(460px, -100px) rotate(180deg);
            -webkit-transition: all 0.2s 0.4s ease-in-out;
            transition: all 0.2s 0.4s ease-in-out;
        }

        .hovereffect img {
            display: block;
            position: relative;
            -webkit-transition: all 0.2s ease-in;
            transition: all 0.2s ease-in;
        }

        .hovereffect h2 {
            text-transform: uppercase;
            color: #fff;
            text-align: center;
            position: relative;
            font-size: 17px;
            padding: 10px;
            background: rgba(0, 0, 0, 0.6);
        }

        .hovereffect a.info {
            display: inline-block;
            text-decoration: none;
            padding: 7px 14px;
            text-transform: uppercase;
            color: #fff;
            border: 1px solid #fff;
            margin: 50px 0 0 0;
            background-color: transparent;
            -webkit-transform: translateY(-200px);
            -ms-transform: translateY(-200px);
            transform: translateY(-200px);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .hovereffect a.info:hover {
            box-shadow: 0 0 5px #fff;
        }

        .hovereffect:hover .overlay {
            opacity: 1;
            filter: alpha(opacity=100);
            -webkit-transition-delay: 0s;
            transition-delay: 0s;
            -webkit-transform: translate(0px, 0px);
            -ms-transform: translate(0px, 0px);
            transform: translate(0px, 0px);
        }

        .hovereffect:hover h2 {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition-delay: 0.5s;
            transition-delay: 0.5s;
        }

        .hovereffect:hover a.info {
            -webkit-transform: translateY(0px);
            -ms-transform: translateY(0px);
            transform: translateY(0px);
            -webkit-transition-delay: 0.3s;
            transition-delay: 0.3s;
        }

        .img-responsivesmall,
        .thumbnail>img,
        .thumbnail a>img,
        .carousel-inner>.item>img,
        .carousel-inner>.item>a>img {
            display: block;
            max-width: 100%;
            height: 140px;
            width: 300px;
        }

        img {
            vertical-align: middle;
        }

        img {
            border: 0;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        a:hover,
        a:focus {
            color: #2a6496;
            text-decoration: underline;
        }

        a:link,
        a:visited,
        a:active,
        a:hover {
            color: #333;
        }

        a {
            color: #428bca;
            text-decoration: none;
        }

        a {
            color: #333;
            outline: none;
            padding-left: 3px;
            padding-right: 3px;

        }

        a:-webkit-any-link {
            color: -webkit-link;
            cursor: pointer;
        }

        .view {
            overflow: hidden;
            position: relative;
            text-align: center;
            cursor: default;
        }

        .m_4 {
            margin-bottom: 0px;
        }

        h4.m_4 a {
            color: #000;
            font-size: 1em;
            text-decoration: none;
            font-weight: 600;
            padding: 10px;
        }

        .panel>.panel-heading {
            background-image: none;
            background-color: #06427b;
            color: white;

        }

        .panel-primary {
            border-color: #ffffff;
        }

        h1,
        .h1 {
            font-size: 26px !important;
        }
    </style>

    <section id="cover" class="min-vh-100">
		<div id="cover-caption" class="reg_w reg_m">
			<div class="">
				<div class="row text-white">
					<div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
						<h1 style="padding-top: 3%;padding-bottom: 3%; color: #fff" class="display-4 py-2 text-truncate">Profile Details</h1>
						<div class="px-2" style="padding-top: 3%;padding-bottom: 3%; color: #fff">
                            <span style="color: white;font-size: 15px;margin-bottom: 10px;">
                            <?php
                                if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset($_SESSION['msg']);//if user refresh index.php after 1st time it will not see the message
                                }
                            ?>
                            </span>
							<form id="signupform" action="update_profile.php" method="post" class="  justify-content-center">
								<input type="hidden" name="user_id" value="<?php echo $res_data['user_id']; ?>">
								<div class="form-group">
									<label class="sr-only">First Name</label>
									<input type="text" class="form-control" required name="firstname" id="firstname" placeholder="Please enter First Name here" value="<?php echo $res_data['firstname']; ?>">
								</div>
								<div class="form-group">
									<label class="sr-only">Last Name</label>
									<input type="text" class="form-control" required name="lastname" id="lastname" placeholder="Please enter Last Name here" value="<?php echo $res_data['lastname']; ?>">
								</div>

								<div class="form-group">
									<select class="form-control" name="gender" id="gender" required>
										<option selected disabled> Select Gender</option>
										<option value="male" <?php if($res_data['gender'] == "male"){echo "selected";}?> >Male</option>
										<option value="female" <?php if($res_data['gender'] == "female"){echo "selected";}?> >Female</option>

									</select>
								</div>
								<div class="form-group">
									<label class="sr-only">Mobile</label>
									<input type="number" class="form-control" required name="mobile" id="mobile" placeholder="Please enter Mobile No. here" value="<?php echo $res_data['mobile']; ?>">
								</div>
								<div class="form-group">
									<label class="sr-only">Date of Birth</label>
									<input type="text" class="form-control" value="<?php echo $res_data['dob']; ?>" required name="dob" id="dob" placeholder="Select Date of Birth">
								</div>
								<div class="form-group">
									<label class="sr-only">City Name</label>
									<input type="text" class="form-control" required name="city" id="city" placeholder="Please enter  City Name" value="<?php echo $res_data['city']; ?>">
								</div>
	
								<div class="form-group">
									<label class="sr-only">Email</label>
									<input type="text" class="form-control" required name="email" id="email" placeholder="Please enter E-mail address" value="<?php echo $res_data['email']; ?>" readonly="true">
								</div>
								<button type="submit" class="btn btn-primary btn-lg">Update Profile</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


    <script src="../js/jquery.vide.min.js"></script>


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
        <p class="agileinfo"> &copy; 2022 tarblazers.com</p>
    </div>
    <!-- js-scripts -->

    <script type="text/javascript" src="../js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->

    <!-- Baneer-js -->
    <script src="../js/responsiveslides.min.js"></script>

    <script>
		$(document).ready(function(){
			$( "#dob" ).datepicker({format: 'yyyy/mm/dd'});
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
				},
				errorClass:"text-danger",
			});	
		});
	</script>


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
    <script type='text/javascript' src='../js/jquery.easy-gallery.js'></script>
    <script type='text/javascript'>
        //init Gallery
        $('.portfolio').easyGallery();
    </script>
    <script src="../js/easyResponsiveTabs.js" type="text/javascript"></script>
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
    <script type="text/javascript" src="../js/move-top.js"></script>
    <script type="text/javascript" src="../js/easing.js"></script>
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
            $( "#dob" ).datepicker({
                format: 'yyyy/mm/dd',
                changeYear: true,
                maxDate: '+0D',
            });

            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>