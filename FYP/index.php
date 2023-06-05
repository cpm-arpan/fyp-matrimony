<?php
//	$lifetime=3600;
//	session_set_cookie_params($lifetime);
session_start();
require_once('db_connect.php');

?>
<!DOCTYPE html>
<html>

<head>
	<title>MarriageCenter</title>
	<!--  Project Developed by: Arpan, Razan, Prasiddha.  -->

	<link rel="icon" href="img/Logos.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
	<script type="text/javascript" language="javascript" src="js/bal.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
	<script src="./js/bootstrap.bundle.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
		integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
		crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

	<style>
		body {
			margin: 0;
			font-family: 'Poppins', sans-serif;
			background-color: #f9f9f9;

		}

		input::-moz-placeholder {
			font-family: 'Poppins', sans-serif;
		}

		input:-ms-input-placeholder {
			font-family: 'Poppins', sans-serif;
		}

		input::-ms-input-placeholder {
			font-family: 'Poppins', sans-serif;
		}

		input::-webkit-input-placeholder {
			font-family: 'Poppins', sans-serif;
		}

		input:-moz-placeholder {
			/* Firefox 18- */
			font-family: 'Poppins', sans-serif;
		}

		.slider {
			background: white;
			margin-top: 20px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
			padding: 15px 15px;
			border-radius: 5px;
		}

		.slider:hover {
			background: white;
			margin-top: 20px;
			box-shadow: 0 10px 16px rgba(0, 0, 0, 0.2);
			padding: 15px 15px;
			border-radius: 8px;
		}

		.login {
			margin-top: 20px;
			padding: 15px;
			background: white;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
			border-radius: 5px;
			padding: 20px;
			margin-left: -5px;
		}

		.login:hover {
			margin-top: 20px;
			background: white;
			box-shadow: 0 10px 16px rgba(0, 0, 0, 0.2);
			border-radius: 8px;

		}

		.section1 {
			width: 80%;
			margin: 0 auto;
		}

		.section2 {
			background: white;

			width: 80%;
			margin: 17px auto;
			padding: 10px 15px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
			border-radius: 5px;
		}

		.section2:hover {
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
			border-radius: 10px;
		}

		.section3 {
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
			border-radius: 5px;

		}

		.section3:hover {
			box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
			border-radius: 10px;
		}

		.section4 {
			width: 80%;
			border-radius: 5px 5px 0px 0px;
			box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.15);
		}

		.section5 {
			width: 80%;
			box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.15);
			border-radius: 0px 0px 5px 5px;

		}

		.section5:hover {
			box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.25);
			border-radius: 0px 0px 10px 10px;
		}

		.p_sec3 {
			width: 80%;
			margin: 0 auto;
		}

		.sp3 {
			width: 93%;
			margin: 0 auto;
			background: white;
			padding: 10px 15px;
		}

		.logo {
			margin-right: 270px;
		}

		.topnav {
			overflow: hidden;
			background-color: #842222;
			margin-left: 10%;
			z-index: 100000;
		}

		.topnav a {
			float: left;
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 16px;
		}

		.active {
			color: #4CAF50;
			;
		}

		.topnav .icon {
			display: none;
		}

		.dropdownx {
			float: left;
			overflow: hidden;
		}

		.dropdownx .dropbtn {
			font-size: 16px;
			border: none;
			outline: none;
			color: white;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
		}

		.dropdownx-content {
			display: none;
			position: absolute;
			background-color: white;
			min-width: 160px;

			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
			z-index: 1;
		}

		.dropdownx-content a {
			float: none;
			color: #7f7f7f;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}

		.nav_content:hover,
		.dropdownx:hover .dropbtn {
			color: white;
		}

		.dropdownx-content a:hover {
			color: #662e91;
		}

		.dropdownx:hover .dropdownx-content {
			display: block;
		}

		.nothing {
			margin-left: 42%;
		}

		@media screen and (max-width: 1280px) {
			.logo {
				margin-right: 50px;
			}

			.topnav {
				margin-left: 7%;
			}

			.nothing {
				margin-left: 40%;
			}
		}

		@media screen and (max-width: 1180px) {
			.logo {
				margin-right: 30px;
			}

			.topnav {
				margin-left: 1%;
			}

			.nothing {
				margin-left: 40%;
			}
		}

		@media screen and (max-width: 900px) {

			.topnav a:not(:first-child),
			.dropdownx .dropbtn {
				display: none;
			}

			.topnav a.icon {
				float: right;
				display: block;
			}

			.topnav {
				margin-left: 4%;
			}

			.section1 {
				width: 95%;
			}

			.section2 {
				width: 95%;
			}

			.p_sec3 {
				width: 95%;
			}

			.sp3 {
				width: 100%;
				margin: 10px 0;
			}

			.login {
				margin-left: 0px;
			}

			.section4 {
				width: 95%;
			}

			.section5 {
				width: 95%;
			}

			.nothing {
				margin-left: 35%;
			}

		}

		@media screen and (max-width: 800px) {
			.topnav.responsive {
				position: relative;
			}

			.topnav.responsive .icon {
				position: absolute;
				right: 0;
				top: 0;
			}

			.topnav.responsive a {
				float: none;
				display: block;
				text-align: left;
			}

			.topnav.responsive .dropdownx {
				float: none;
			}

			.topnav.responsive .dropdownx-content {
				position: relative;
			}

			.topnav.responsive .dropdownx .dropbtn {
				display: block;
				width: 100%;
				text-align: left;
			}
		}

		@media screen and (max-width: 480px) {
			.img_slider {
				height: 250px;
			}

			.nothing {
				margin-left: 25%;
			}
		}

		.social a {
			padding: 10px 10px;
			color: white;
		}
	</style>


</head>

<body>

	<div
		style="z-index: 10; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: white; position: fixed; top: 0; width: 100%;">
		<div class="topnav" id="myTopnav">
			<a><img class="logo" style="margin-top: -5px;" src="img/logo.png" height="40px"></a>
			<a href="index.php" class="nav_content" style="color: #662e91;">Home</a>
			<?php
			$sql = "SELECT * FROM payment WHERE member_id='" . $_SESSION['id'] . "' and approvestatus='1' ";
			$result = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($result);
			$count = mysqli_num_rows($result);
			$enddate = $row['enddate'];
			$startdate = $row['startdate'];
			$currentdate = date('Y-m-d');



			if ($count == 1 && $currentdate < $enddate) {
				?>
				<div class="dropdownx">
					<button class="dropbtn">Find Partner
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdownx-content">
						<?php

						if (isset($_SESSION['user']) || isset($_COOKIE['user'])) {
							$_SESSION['user'] = $_COOKIE['user'];
							?>
							<a href="search.php?gender=Male" class="nav_content">Male</a>
							<a href="search.php?gender=Female" class="nav_content">Female</a>
							<?php
						} else {
							?>
							<a href="#" onclick="openModal1()" class="nav_content">Male</a>
							<a href="#" onclick="openModal1()" class="nav_content">Female</a>
							<?php
						}
						?>
					</div>
				</div>
			<?php } ?>

			<a href="blog.php" class="nav_content">Blog</a>
			<?php
			if (isset($_SESSION['user'])) {

				$user = $_SESSION['user'];
				$r = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
				if (mysqli_num_rows($r) > 0) {
					$temp = mysqli_fetch_array($r);
					$user_id = $temp['id'];
					$name = $temp['name'];
					$_SESSION['name'] = $name;
					$_SESSION['id'] = $temp['id'];
				}

				?>

				<div class="dropdownx">
					<button class="dropbtn">Help
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdownx-content">
						<a href="terms.php" class="nav_content">Terms and conditions</a>
						<a href="services.php" class="nav_content">Services</a>
						<a href="faq.php" class="nav_content">Questions and Answers - FAQ</a>
					</div>
				</div>
				<a href="membership/membership.php" class="nav_content">Membership</a>
				<a href="logout.php" class="nav_content"><i class="fa fa-power-off" aria-hidden="true"></i>Log out</a>
				<?php
			} else {



				?>
				<a href="#" onclick="openModal1()" class="nav_content">Log in</a>
				<a href="#" onclick="openModal()" class="nav_content">Registration</a>


				<div class="dropdownx">
					<button class="dropbtn">Help
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdownx-content">
						<a href="terms.php" class="nav_content">Terms and conditions</a>
						<a href="services.php" class="nav_content">Services</a>
						<a href="faq.php" class="nav_content">Questions and Answers - FAQ</a>
					</div>
				</div>

				<?php
			}
			?>
			<a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i
					class="fa fa-bars" aria-hidden="true"></i></a>
		</div>
	</div>

	<div style="width: 100%; margin-top: 73px;">
		<div class="section1 row">
			<div class="slider col-md-7">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100 img_slider" src="img/1.jpg" alt="First slide">
							<div class="carousel-caption d-none d-md-block">

							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 img_slider" src="img/2.jpg" alt="Second slide">
							<div class="carousel-caption d-none d-md-block">

								<p></p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="d-block w-100 img_slider" src="img/3.jpg" alt="Third slide">
							<div class="carousel-caption d-none d-md-block">

								<p></p>
							</div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col-md-1"></div>
			<?php
			if (isset($_SESSION['user']) /*|| isset($_COOKIE['user'])*/) {
				//$_SESSION['user'] = $_COOKIE['user'];
				$user = $_SESSION['user'];
				$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$user'");
				if (mysqli_num_rows($rdp) > 0) {
					$rww = mysqli_fetch_array($rdp);
					$val = $rww['num'];
					$imageName = $user . '_dp' . $val . '.png';
				} else {
					$imageName = 'avatar.png';
				}

				?>

				<div class="login col-md-4">
					<h3 style="color: #FF8D8D; text-align: center; font-family: 'Galada', cursive;">Congratulations, <span
							style="color: #7F7F7F;">
							<?php echo $name; ?>
						</span></h3>
					<center><img src="dp/<?php echo $imageName; ?>" class="rounded-circle img-thumbnail" width="150">
					</center>
					<hr>
					<a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>">
						<h5 style="color: #7f7f7f; font-weight: bold; text-align: center;">Profile</h5>
					</a>
					<hr>
					<a href="message_notification.php">
						<h5 style="color: #7f7f7f; text-align: center; font-weight: bold;">Messages <span id="no_m"
								onload="ajaxy()" class="badge badge-primary badge-pill"></span></h5>
					</a>
					<hr>
					<a href="comment_notification.php">
						<h5 style="color: #7f7f7f; text-align: center; font-weight: bold;">Notificaion <span id="no_m2"
								class="badge badge-danger badge-pill"></span></h5>
					</a>
				</div>
				<?php
			} else {


				?>
				<div class="login col-md-4">
					<form method="post" action="" id="lgform1">
						<h3 style="color: #662e91;">Log in:</h3>
						<label style="font-size: 16px; color: #202340;">Email / Mobile:</label>
						<input type="text" required id="Email" class="form-control"
							placeholder="example@gmail.com/019xxxxxxxx" autocomplete="off">
						<h6 id="xmail_error_message" style="color: red;"></h6>
						<label style="font-size: 16px; margin-top: 17px; color: #202340;">Password:</label>
						<input type="password" class="form-control" required id="Password"
							style="font-family: 'Poppins',sans-serif; font-size: 18px;" placeholder="**********">
						<button type="submit" id="lgin" class="btn btn-info"
							style="margin-top:10px; font-family: 'Poppins', sans-serif; font-size: 19px;">Log in</button>
					</form>

					<div id="report"></div>

					<hr>

					<h5 style="margin-top: 20px; color: #7f7f7f;">Don't have an account?</h5>
					<button class="btn btn-danger" data-toggle="modal" data-target="#reg"
						style="font-family: 'Poppins', sans-serif; font-size: 19px;">Register</button>
				</div>

				<?php
			}
			if (isset($_SESSION['user'])) {
				?>
				<script type="text/javascript">
					function ajaxx() {
						var req = new XMLHttpRequest();
						req.onreadystatechange = function () {
							if (req.readyState == 4 && req.status == 200) {
								document.getElementById('no_m2').innerHTML = req.responseText;

							}
						}
						req.open('POST', 'cnotify.php', true);
						req.send();

					}
					setInterval(function () {
						ajaxx()
					}, 3200);

					function ajaxy() {
						var req = new XMLHttpRequest();
						req.onreadystatechange = function () {
							if (req.readyState == 4 && req.status == 200) {
								document.getElementById('no_m').innerHTML = req.responseText;

							}
						}
						req.open('POST', 'pmnotify.php', true);
						req.send();
					}
					setInterval(function () {
						ajaxy()
					}, 3200);
				</script>
			<?php } ?>
		</div>
		<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" id="exampleModalLabel"
							style="color: #662e91; text-align: center; margin-left: 15px;">Register: </h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
						<form id="registration_form" class="" method="post">


							<h5 style="margin-left: 3px; margin-top: 10px;">Name</h5>
							<input type="text" required id="name" class="form-control" name="name33"
								placeholder="Enter Your Name" autocomplete="off">
							<h6 id="name_error_message" style="color: red;"></h6>
							<h5 style="margin-left: 3px; margin-top: 10px;">Gender</h5>
							<label class="radio-inline"><input required class="gender" type="radio" name="gender"
									value="Male"> Male</label>
							<label class="radio-inline"><input type="radio" class="gender" name="gender" value="Female">
								Female</label>

							<h5 style="margin-left: 3px; margin-top: 10px;">Email / Mobile No:</h5>
							<input type="text" required id="email" class="form-control" name=""
								placeholder="Ex: example@mail.com / 019xxxxxxxx" autocomplete="off">
							<h6 id="mail_error_message" style="color: red;"></h6>
							<h5 style="margin-left: 3px;  margin-top: 10px;">Password:</h5>
							<input required id="form_password" type="password" class="form-control" name=""
								placeholder="Enter your password">
							<h6 id="password_error_message" style="color: red;"></h6>
							<h5 style="margin-left: 3px; margin-top: 10px;">Confirm Password:</h5>
							<input required id="form_retype_password" type="password" class="form-control" name=""
								placeholder="Confirm Password..">
							<h6 id="retype_password_error_message" style="color: red;"></h6>
							<h6 id="retype_password_match_message" style="color: green;"></h6>
							<br>
							<input type="checkbox" required id="check" name="rules" value="YES">
							<label for="rules"><a href="terms.php">Terms</a> I agreed with the terms</label>
							<div id="result"></div>
							<button class="btn btn-info form-control" id="regbtn"
								style="font-family: 'Poppins'">Register</button>
						</form>

						<h5>Already have an acount? <a href="#" onclick="openModal1()" class="nav_content">Log in</a>
						</h5>


					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" style="color: #662e91; margin-left: 15px; " id="exampleModalLabel">Log
							in:</h3>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
						<form id="login" method="post" action="">

							<h5 style="margin-left: 3px; margin-top: 10px;">Email / Mobile:</h5>
							<input type="text" required id="mail" class="form-control" name=""
								placeholder="example@gmail.com/019xxxxxxxx" autocomplete="off">
							<h6 id="ymail_error_message" style="color: red;"></h6>
							<h5 style="margin-left: 3px; margin-top: 10px;">Password:</h5>
							<input type="password" required id="pass" class="form-control" name=""
								placeholder="Enter password ...">
							<br>
							<button type="submit" id="logn" class="btn btn-info form-control"
								style="font-family: 'Poppins'">Log in</button>
						</form>
						<br>
						<div id="resultx">

						</div>
						<div id="resultx1">

						</div>
						<h5>Don't have an account? <a href="#" onclick="openModal()" class="nav_content">Register</a>
						</h5>

					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			$(document).ready(function () {
				$("#login").submit(function () {
					//alert("Hello adil");
					var eror_mail = 0;
					var pat1 = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
					var pat3 = new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/);

					var adil = $("#mail").val();
					if (pat1.test($("#mail").val()) && $("#mail").val().length > 10) {
						eror_mail = 0;
					} else if (pat3.test($("#mail").val())) {
						eror_mail = 0;
					} else {
						eror_mail = 1;
					}

					var data2 = $("#pass").val();

					if (eror_mail == 0) {

						var datastring = 'name11=' + adil + '&name22=' + data2;

						$.ajax({
							type: "post",
							url: "logprocess.php",
							data: datastring,
							dataType: "json",
							cache: false,
							success: function (JSONObject) {
								console.log(JSONObject.c);
								console.log(JSONObject.d);
								var ac = JSONObject.b;
								var mail = JSONObject.d;
								var msg = JSONObject.c;
								var error = JSONObject.e;
								if (ac === 1) {

									setTimeout(function () {
										window.location.href = 'index.php'
									}, 2000);
									$("#resultx").html(msg);
								} else {
									$("#resultx").html(error);
								}
							}

						});
						return false;
					} else {
						$("#resultx").html("<h5	style='color:red;'>Please insert valid email or mobile number.</h5>");
					}

				});

			});
		</script>
		<script type="text/javascript">
			$(document).ready(function () {
				$("#registration_form").submit(function () {

					//alert("Hello adil");
					var name_error = 0;
					var mail_error = 0;
					var pass_error = 0;
					var con_pass_error = 0;
					var pat1 = new RegExp(/(\%27)|(\')|(\-\-)|(\%23)|(#)/i);
					var pat2 = new RegExp(/[1-9][0-9]*|0/);
					var pat3 = new RegExp(/[-!$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/);
					var pat4 = new RegExp(/[!$%^&*()|~=`{}\[\]:";'<>?,\/]/);


					var adil = $("#name").val();


					if (pat1.test($("#name").val())) {
						name_error = 1;
					} else if (pat2.test($("#name").val())) {
						name_error = 1;
					} else if (pat3.test($("#name").val())) {
						name_error = 1;
					}

					var data1 = $("input[type='radio'].gender:checked").val();
					var data2 = $("#email").val();


					if (pat1.test($("#email").val())) {
						mail_error = 1;
					} else if (pat4.test($("#email").val())) {
						mail_error = 1;
					}


					var data31 = $("#form_password").val();
					var pass_len = $("#form_password").val().length;

					if (pat4.test($("#form_password").val())) {
						pass_error = 1;
					} else if (pass_len < 6 || pass_len > 16) {
						pass_error = 1;
					}

					var data3 = $("#form_retype_password").val();
					if (data3 != data31) {
						con_pass_error = 1;
					}

					if (name_error == 0 && mail_error == 0 && pass_error == 0 && con_pass_error == 0) {
						var datastring = 'name11=' + adil + '&name22=' + data1 + '&name33=' + data2 + '&name44=' + data3;
						//alert(data2);

						$.ajax({
							type: "post",
							url: "regprocess.php",
							data: datastring,
							dataType: "json",
							cache: false,
							success: function (JSONObject) {
								//console.log(JSONObject.c);
								//console.log(JSONObject.d);
								var ac = JSONObject.b;
								var mail = JSONObject.d;
								var msg = JSONObject.c;
								if (ac == 1) {
									$("#result").html(msg);
									setTimeout(function () {
										window.location.href = 'profile.php'
									}, 2000);
								} else if (ac == 2) {
									$("#result").html(msg);
								} else {
									$("#result").html(msg);
								}

							}

						});
						return false;
					} else {
						$("#result").html("<h5 style='color:red;'>Please Fill the form correctly.</h5>");
					}

				});

			});
		</script>
		<script type="text/javascript">
			$(document).ready(function () {
				$("#lgform1").submit(function () {
					//alert("Hello adil");
					var eror_mail1 = 0;
					var pat1 = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
					var pat3 = new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/);

					var adil = $("#Email").val();
					if (pat1.test($("#Email").val()) && $("#Email").val().length > 10) {
						eror_mail1 = 0;
					} else if (pat3.test($("#Email").val())) {
						eror_mail1 = 0;
					} else {
						eror_mail1 = 1;
					}

					var data2 = $("#Password").val();

					if (eror_mail1 == 0) {
						var datastring = 'name11=' + adil + '&name22=' + data2;
						//alert(data2);
						//var confirm_new = hash('sha256',data2);



						$.ajax({
							type: "post",
							url: "logprocess.php",
							data: datastring,
							dataType: "json",
							cache: false,
							success: function (JSONObject) {
								//console.log(JSONObject.c);
								//console.log(JSONObject.e);
								var ac = JSONObject.b;
								var mail = JSONObject.d;
								var msg = JSONObject.c;
								var error = JSONObject.e;
								if (ac === 1) {

									setTimeout(function () {
										window.location.href = 'index.php'
									}, 2000);
									$("#report").html(msg);
								} else {
									$("#report").html(error);
								}
							}

						});
						return false;
					} else {
						$("#report").html("<br><h5 style='color:red;'>Please insert valid email or mobile number.</h5>");
					}
				});

			});
		</script>
		<?php

		?>
		<div class="section2">
			<h1 style="color: #662e91; font-size: 30px;text-align: center;">Smart, reliable, and easy solution for
				finding a partner
			</h1>

			<h5 style="color: #7f7f7f;text-align: center;">Welcome to the country's self-contained online wedding
				service. The simplest way to find a mate is MarriageCenter.com and not just go behind the wheel, find a
				partner of your choice. You can also exchange information through your web site. So don't hesitate to
				register now at MarriageCenter.com and enjoy something new.</h5>
			<?php
			if (isset($_SESSION['user']) /* || isset($_COOKIE['user'])*/) {
			} else {


				?>
				<center><button class="btn btn-danger"
						style="font-family: 'Poppins', sans-serif; font-size: 19px; margin-bottom: 10px;"
						data-toggle="modal" data-target="#reg">Register</button></center>
				<?php
			}
			?>
		</div>
	</div>
	<div class="p_sec3 row">
		<div class="section3 col-md-4" style="background: white; padding: 10px 25px;">
			<h2 style="color: #662e91">Find a partner</h2>
			<?php if (isset($_SESSION['user']) /* || isset($_COOKIE['user'])*/) {

				?>
				<form method="post" action="search.php">
					<h5 style="color: #7f7f7f;">Gender:</h5>
					<label class="radio-inline"><input type="radio" name="gender" autocomplete="off" value="Male">
						Male</label>
					<label class="radio-inline" autocomplete="off"><input type="radio" name="gender" value="Female">
						Female</label>
					<hr style="margin-top: 3px;">
					<h5 style="color: #7f7f7f;">Marital Status:</h5>

					<label class="radio-inline"><input required="m_stat" type="radio" name="m_stat" autocomplete="off"
							value="Married"> Married</label>
					<label class="radio-inline"><input type="radio" name="m_stat" value="Unmarried"> Unmarried</label>
					<label class="radio-inline"><input type="radio" name="m_stat" value="Divorced"> Divorced</label>
					<label class="radio-inline"><input type="radio" name="m_stat" value="Widow"> Widow</label>
					<hr style="margin-top: 3px;">
					<h5 style="color: #7f7f7f;">Religion:</h5>
					<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="Hindu">
						Hindu</label>
					<label class="radio-inline"><input required="religion" type="radio" name="religion" autocomplete="off"
							value="Islam">Muslim</label>
					<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="Buddhist">
						Buddhist</label>
					<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="Christian">
						Christian</label>
					<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="Other">
						Other</label>
					<br>
					<button style="margin: 10px 0px;" type="submit" name="search" class="btn btn-info">Search</button>
				</form>
				<?php
			} else {
				?>
				<form method="post" action="">
					<h5 style="color: #7f7f7f;">Gender:</h5>
					<label class="radio-inline"><input type="radio" required="gender" name="gender" autocomplete="off"
							value="Male"> Male</label>
					<label class="radio-inline" autocomplete="off"><input type="radio" name="gender" value="Female">
						Female</label>
					<hr style="margin-top: 3px;">
					<h5 style="color: #7f7f7f;">Marital Status:</h5>

					<label class="radio-inline"><input required="m_stat" type="radio" name="m_stat" autocomplete="off"
							value="Married"> Married</label>
					<label class="radio-inline"><input type="radio" name="m_stat" value="Unmarried"> Unmarried</label>
					<label class="radio-inline"><input type="radio" name="m_stat" value="Divorced"> Divorced</label>
					<label class="radio-inline"><input type="radio" name="m_stat" value="Widow"> Widow</label>
					<hr style="margin-top: 3px;">
					<h5 style="color: #7f7f7f;">Religion:</h5>

					<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="Hindu">
						Hindu</label>
					<label class="radio-inline"><input required="religion" type="radio" name="religion" autocomplete="off"
							value="Islam">Muslim</label>
					<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="Buddhist">
						Buddhist</label>
					<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="Christian">
						<label class="radio-inline"><input type="radio" name="religion" autocomplete="off"
								value="Christian">
							Christian</label>
						<label class="radio-inline"><input type="radio" name="religion" autocomplete="off" value="Other">
							Other</label>
						<br>
						<button style="margin: 10px 0px;" type="button" name="" class="btn btn-info" onclick="openModal1()"
							id="">Search</button>
				</form>
				<?php
			}

			?>
		</div>
		<div class="col-md-4" style="width: 100%; margin: 0; padding: 0;">
			<?php if (isset($_SESSION['user']) /* || isset($_COOKIE['user'])*/) {


				?>
				<div class="sp3 section3">
					<h4 style="color:#662e91; margin-bottom: 10px;">Most recent members:</h4>
					<?php
					$rm = mysqli_query($con, "SELECT * FROM tipshoi ORDER BY id DESC;");
					if (mysqli_num_rows($rm) > 1) {
						$no = mysqli_num_rows($rm);
						if ($no > 3) {
							$no = 3;
						}

						for ($i = 0; $i < $no; $i++) {
							$rowm = mysqli_fetch_array($rm);
							$member = $rowm['mail'];
							$user_id = $rowm['id'];
							$mem_name = $rowm['name'];
							$gender = $rowm['gender'];
							if ($gender == "Male") {
								$gender = "Male";
							} else {
								$gender = "Female";
							}

							$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$member'");
							if (mysqli_num_rows($rdp) > 0) {
								$rww = mysqli_fetch_array($rdp);
								$val = $rww['num'];
								$imageName = $member . '_dp' . $val . '.png';
							} else {
								$imageName = 'avatar.png';
							}
							if ($member != "admin@admin.com") {


								?>
								<div class="pull-left" style="margin-right: 30px;">
									<img src="dp/<?php echo $imageName; ?>" class="rounded-circle" width="70">
								</div>

								<div class="">
									<a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>">
										<h5 style="color: #7f7f7f;">
											<?php echo $mem_name; ?>
										</h5>
									</a>

									<h6>
										<?php echo $gender; ?>
									</h6>
								</div>
								<?php
								if ($i < $no - 1) {
									?>
									<hr style="margin-top: 3px;">
									<br>
									<?php
								}
							}
						}
						?>
						<br>
						<a href="search.php"><button class="btn btn-outline-info"
								style=" margin-top: 10px; margin-bottom: 10px;">See more</button></a>
						<?php
					} else {
						?>
						<h5 style="color: #7f7f7f; text-align: center;">Nothing to show</h5>
						<?php
					}
					?>



				</div>
				<?php
			} else {
				?>
				<div style="min-height: 400px;" class="sp3 section3">
					<h2 style="color:#662e91; margin-bottom: 10px;">Most recent members:</h2>
					<?php
					$rm = mysqli_query($con, "SELECT * FROM tipshoi ORDER BY id DESC;");
					if (mysqli_num_rows($rm) > 1) {
						$no = mysqli_num_rows($rm);
						if ($no > 3) {
							$no = 3;
						}

						for ($i = 0; $i < $no; $i++) {
							$rowm = mysqli_fetch_array($rm);
							$member = $rowm['mail'];
							$mem_name = $rowm['name'];
							$gender = $rowm['gender'];
							if ($gender == "Male") {
								$gender = "Male";
							} else {
								$gender = "Female";
							}
							$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$member'");
							if (mysqli_num_rows($rdp) > 0) {
								$rww = mysqli_fetch_array($rdp);
								$val = $rww['num'];
								$imageName = $member . '_dp' . $val . '.png';
							} else {
								$imageName = 'avatar.png';
							}
							if ($member != "admin@admin.com") {

								?>
								<div class="pull-left" style="margin-right: 30px;">
									<img src="dp/<?php echo $imageName; ?>" class="rounded-circle" width="70">
								</div>

								<div class="">
									<a href="#" onclick="openModal1()">
										<h5 style="color: #7f7f7f;">
											<?php echo $mem_name; ?>
										</h5>
									</a>

									<h6>
										<?php echo $gender; ?>
									</h6>
								</div>
								<?php
								if ($i < $no - 1) {
									?>
									<hr style="margin-top: 3px;">
									<br>
									<?php
								}
							}
						}
						?>

						<br>
						<button class="btn btn-outline-info" onclick="openModal1()"
							style=" margin-top: 10px; margin-bottom: 10px;">See more</button>
						<?php
					} else {
						?>
						<h5 style="color: #7f7f7f; text-align: center;">Nothing to show</h5>
						<?php
					}
					?>


				</div>
				<?php
			}
			?>
		</div>
		<!-- <div class="section3 col-md-4" style="background: white; height: inherit; padding: 10px 17px;">
			<h4 style="color: #662e91;">Let's take a look at how to complete Registration and Biodata at Marriage 20:
			</h4>
			<iframe width="100%" height="270" src="" alt="video">
			</iframe>
		</div> -->
	</div>
	<div style="width: 100%; margin-top: 15px; ">
		<div style=" background: white; margin: 0 auto; padding-bottom: 5px; padding-top: 10px;" class="section4">
			<h2 style="text-align: center; color: #662e91;">Most recent wedding post</h2>

		</div>
		<div style="background: white; margin: -5px auto; padding-bottom: 15px;" class="section5 row">
			<?php
			$qr = mysqli_query($con, "SELECT * FROM posts ORDER BY id DESC");
			if (mysqli_num_rows($qr) > 0) {
				$cn = mysqli_num_rows($qr);
				if ($cn >= 3) {
					$t = 3;
				} else {
					$t = $cn;
				}
				for ($i = 0; $i < $t; $i++) {
					$row = mysqli_fetch_array($qr);
					$post_id = $row['id'];
					$content = mb_substr($row['content'], 0, 60);
					$hisname = $row['name'];
					$image = $row['image'];
					?>
					<div class="col-md-4" style="padding: 15px;">

						<center><img src="post/<?php echo $image; ?>" width="130" class="rounded-circle"></center>
						<br>
						<h5 style="text-align:center; "><span> </span>
							<?php echo "<b style='color:#9e54ff;'>" . $hisname . "</b>"; ?>
						</h5>
						<h5 style="text-align:center; color:#7f7f7f; font-size: 18px;" class="your-div-id">
							<?php echo $content; ?>...
						</h5>
						<center><a href="post_s.php?id=<?php echo $post_id; ?>"><button class="btn btn-outline-info">See
									more</button></a></center>

					</div>
					<?php
				}
			} else {
				?>
				<h5 class="nothing" style="color: #7f7f7f;">Nothing to show</h5>
				<?php
			}
			?>

		</div>

	</div>


	<div
		style="margin-top: 50px;   background-image: url('img/f.png'); background-size: 100% 100%; padding-bottom: 10px; box-shadow: 0 -5px 8px -5px rgba(0,0,0,0.2); background-color: #f9f9f9;">
		<div style="width: 80%; margin: 0 auto; padding: 10px; 
" class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<h5 style="color: #662e91; text-align: center;">Contact Info:</h5>
				<h6 style="color: #7f7f7f; text-align: center;">Email: MarriageCenter@gmail.com</h6>
				<h6 style="color: #7f7f7f; text-align: center;">Facebook: <small><a
							href="https://www.facebook.com">https://www.facebook.com</a></small></h6>
				<h6 style="color: #7f7f7f; text-align: center;">9 AM - 12 PM, Saturday - Friday</h6>
			</div>
			<div class="col-md-4">
				<h5 style="color: #662e91; text-align: center;">Support:</h5>
				<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;" href="faq.php">FAQ</a>
				</h6>
				<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;" href="terms.php">Terms
						of Services</a></h6>
				<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;"
						href="services.php">Privacy Policy</h6>
			</div>
		</div>
		<center><button class="btn btn-info">Contact Us</button></center>
	</div>
	<div class="row"
		style="background: rgb(237,6,143); /* Old browsers */
background: -moz-linear-gradient(-45deg, rgba(237,6,143,1) 0%, rgba(169,228,247,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0fb4e7', endColorstr='#a9e4f7',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */ width: 100%; margin: 0; padding-top: 5px;">
		<div class="col-md-1"></div>
	</div>
	<div class="flex-grow-1"></div>

	<script>
		function myFunction() {
			var x = document.getElementById("myTopnav");
			if (x.className === "topnav") {
				x.className += " responsive";
			} else {
				x.className = "topnav";
			}
		}
	</script>
	<script src="./js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript">
		function openModal() {
			$('#reg').modal('show');
			$('#log').modal('hide');
		}

		function openModal1() {
			$('#log').modal('show');
			$('#reg').modal('hide');
		}
	</script>


</body>
<!--  Project Developed by: Arpan, Prasiddha, Razan. 


</html>
<?php //} ?>