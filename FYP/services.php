<?php
session_start();
require_once('db_connect.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>MarriageCenter</title>

	<link rel="icon" href="img/Logos.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
	<script type="text/javascript" language="javascript" src="js/bal.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
	<script src="./js/bootstrap.bundle.min.js"></script>
	<script src="./js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
		integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
		crossorigin="anonymous"></script>
	<style>
		body {
			margin: 0;
			font-family: 'Poppins', sans-serif;
			background-color: #E9EBEE;

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
			background-color: #fff;
			margin-left: 10%;
			z-index: 100000;
		}

		.topnav a {
			float: left;
			display: block;
			color: #7F7F7F;
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
			color: #7F7F7F;
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
			color: #662e91;
		}

		.dropdownx-content a:hover {
			color: #662e91;
		}

		.dropdownx:hover .dropdownx-content {
			display: block;
		}

		@media screen and (max-width: 1280px) {
			.logo {
				margin-right: 50px;
			}

			.topnav {
				margin-left: 7%;
			}
		}

		@media screen and (max-width: 1180px) {
			.logo {
				margin-right: 30px;
			}

			.topnav {
				margin-left: 1%;
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
			<a href="index.php" class="nav_content">Home</a>
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
					<button class="dropbtn">Find Pratner
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdownx-content">
						<a href="search.php?gender=Male" class="nav_content">Male</a>
						<a href="search.php?gender=Female" class="nav_content">Female</a>
					</div>
				</div>
			<?php } ?>

			<a href="blog.php" class="nav_content">Blog</a>
			<?php
			if (!isset($_SESSION['user'])) {


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
			} else {
				$user = $_SESSION['user'];
				$r = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
				if (mysqli_num_rows($r) > 0) {
					$temp = mysqli_fetch_array($r);
					$name = $temp['name'];
					$_SESSION['name'] = $name;
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
			}
			?>
			<a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i
					class="fa fa-bars" aria-hidden="true"></i></a>
		</div>
	</div>
	<div class="container">
		<div class="row" style="margin-top: 100px;">
			<div class="col-md-3" style="margin-bottom: 20px;">
				<div style="background: white; border-radius: 5px;box-shadow: 0 4px 10px rgba(0,0,0,0.15);"
					class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a style="font-size:19px;" class="nav-link" href="terms.php">Terms and conditions</a>
					<a style="font-size:19px;" class="nav-link active" href="services.php">Services</a>
					<a style="font-size:19px;" class="nav-link" href="faq.php">Questions and Answers - FAQ</a>


				</div>
			</div>
			<div class="col-md-9">
				<div class="tab-content" id="v-pills-tabContent"
					style="min-height: 500px; padding: 20px; width: 98%; margin:0 auto;background: white;  border: 0.5px solid #f2f2f2;border-radius: 4px;">
					<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
						aria-labelledby="v-pills-home-tab">
						<h4 style="color: #662e91;">Services:</h4>

						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Free
							Registration and Free Services.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Arrangements
							for exchanging the necessary messages regarding marriage.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Easily
							Male-Female Full Biodata.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Free to create
							your own biodata.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Protecting
							Male-Female Privacy</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Support through
							Facebook Groups and Pages.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Benefits of
							expressing marriage opinions through the blog.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Especially
							arrangement for publication of marriage notice on an urgent basis.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Creating your
							own profile and modifying or deleting it as needed.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Find a partner
							by searching at your own convenience.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Staying up to
							date on the latest wedding news.</h5>
						<h5 style="color: #7f7f7f;"><i class="fa fa-snowflake-o" aria-hidden="true"></i> Besides,
							universal support for any legal issues related to marriage.</h5>

					</div>
					<div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
						aria-labelledby="v-pills-profile-tab"></div>
					<div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
						aria-labelledby="v-pills-messages-tab"></div>

				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="exampleModalLabel"
						style="color: #662e91; text-align: center; margin-left: 15px;">Registerঃ </h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
					<form id="registration_form" class="" method="post">


						<h5 style="margin-left: 3px; margin-top: 10px;">Full Name: </h5>
						<input type="text" required id="name" class="form-control" name=""
							placeholder="Enter Full Name">
						<h6 id="name_error_message" style="color: red;"></h6>
						<h5 style="margin-left: 3px; margin-top: 10px;">Gender:</h5>
						<label class="radio-inline"><input required class="gender" type="radio" name="gender"
								value="Male"> Male</label>
						<label class="radio-inline"><input type="radio" class="gender" name="gender" value="Female">
							Female</label>

						<h5 style="margin-left: 3px; margin-top: 10px;">Email / Mobile No:</h5>
						<input type="text" required id="email" class="form-control" name=""
							placeholder="Ex: example@mail.com / 019xxxxxxxx">
						<h6 id="mail_error_message" style="color: red;"></h6>

						<h5 style="margin-left: 3px;  margin-top: 10px;">Enter Password:</h5>
						<input required id="form_password" type="password" class="form-control" name=""
							placeholder="Enter password ...">
						<h6 id="password_error_message" style="color: red;"></h6>
						<h5 style="margin-left: 3px; margin-top: 10px;">Confirm Password</h5>
						<input required id="form_retype_password" type="password" class="form-control" name=""
							placeholder="Confirm Password...">
						<h6 id="retype_password_error_message" style="color: red;"></h6>
						<h6 id="retype_password_match_message" style="color: green;"></h6>
						<br>
						<input type="checkbox" required id="check" name="rules" value="YES">
						<label for="rules"><a href="help.php#v-pills-home">Terms and conditions</a> I have read and
							agreed</label>
						<div id="result"></div>
						<button class="btn btn-info form-control" style="font-family: 'Poppins'">Open an
							account</button>
					</form>

					<h5>Have an account? <a href="#" onclick="openModal1()" class="nav_content">Login</a></h5>


				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" style="color: #662e91; margin-left: 15px; " id="exampleModalLabel">Log in:
					</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
					<form id="login" method="post" action="">

						<h5 style="margin-left: 3px; margin-top: 10px;">Email:</h5>
						<input type="text" required id="mail" class="form-control" name=""
							placeholder="example@gmail.com/019xxxxxxxx">
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
					<h5>Don't have an account? <a href="#" onclick="openModal()" class="nav_content">Register</a></h5>

				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#login").submit(function () {
				//alert("Hello adil");
				var adil = $("#mail").val();
				var data2 = $("#pass").val();
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

							setTimeout(function () { window.location.href = 'index.php' }, 2000);
							$("#resultx").html(msg);
						}
						else {
							$("#resultx").html(error);
						}
					}

				});
				return false;

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
				var pat4 = new RegExp(/[!$%^&*()+|~=`{}\[\]:";'<>?,\/]/);


				var adil = $("#name").val();


				if (pat1.test($("#name").val())) {
					name_error = 1;
				}
				else if (pat2.test($("#name").val())) {
					name_error = 1;
				}
				else if (pat3.test($("#name").val())) {
					name_error = 1;
				}

				var data1 = $("input[type='radio'].gender:checked").val();
				var data2 = $("#email").val();


				if (pat1.test($("#email").val())) {
					mail_error = 1;
				}
				else if (pat4.test($("#email").val())) {
					mail_error = 1;
				}


				var data31 = $("#form_password").val();
				var pass_len = $("#form_password").val().length;


				if (pass_len < 6 || pass_len > 16) {
					pass_error = 1;
				}

				var data3 = $("#form_retype_password").val();
				if (data3 != data31) {
					con_pass_error = 1;
				}

				if (name_error == 0 && mail_error == 0 && pass_error == 0 && con_pass_error == 0) {
					var datastring = 'name11=' + adil + '&name22=' + data1 + '&name33=' + data2 + '&name44=' + data3;


					$.ajax({
						type: "post",
						url: "regprocess.php",
						data: datastring,
						dataType: "json",
						cache: false,
						success: function (JSONObject) {
							console.log(JSONObject.c);
							console.log(JSONObject.d);
							var ac = JSONObject.b;
							var mail = JSONObject.d;
							var msg = JSONObject.c;
							if (ac == 1) {
								$("#result").html(msg);
								setTimeout(function () { window.location.href = 'profile.php' }, 2000);
							}
							else if (ac == 2) {
								$("#result").html(msg);
							}
							else {
								$("#result").html(msg);
							}

						}

					});
					return false;
				}
				else {
					$("#result").html("<h5 style='color:red;'>Please Fill the form correctly.</h5>");
				}

			});

		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#lgform1").submit(function () {
				//alert("Hello adil");
				var adil = $("#Email").val();
				var data2 = $("#Password").val();
				var datastring = 'name11=' + adil + '&name22=' + data2;


				$.ajax({
					type: "post",
					url: "logprocess.php",
					data: datastring,
					dataType: "json",
					cache: false,
					success: function (JSONObject) {
						console.log(JSONObject.c);
						console.log(JSONObject.e);
						var ac = JSONObject.b;
						var mail = JSONObject.d;
						var msg = JSONObject.c;
						var error = JSONObject.e;
						if (ac === 1) {

							setTimeout(function () { window.location.href = 'index.php' }, 2000);
							$("#report").html(msg);
						}
						else {
							$("#report").html(error);
						}
					}

				});
				return false;

			});

		});

	</script>

	<div
		style="margin-top: 50px;   background-image: url('img/f.png'); background-size: 100% 100%; padding-bottom: 10px; box-shadow: 0 -5px 8px -5px rgba(0,0,0,0.2); background-color: #f9f9f9;">
		<div style="width: 80%; margin: 0 auto; padding: 10px; 
" class="row">
			<div class="col-md-2"></div>
			<div class="col-md-4">
				<h5 style="color: #662e91; text-align: center;">Contact Info:</h5>
				<h6 style="color: #7f7f7f; text-align: center;">Email: MarriageCentere@gmail.com</h6>
				<h6 style="color: #7f7f7f; text-align: center;">Facebook: <small><a
							href="#">https://www.facebook.com/MarriageCentere/</a></small>
				</h6>
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
	<div class="flex-grow-1"></div>
	<div class="row"
		style="background: rgb(237,6,143); /* Old browsers */
background: -moz-linear-gradient(-45deg, rgba(237,6,143,1) 0%, rgba(169,228,247,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(-45deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(135deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0fb4e7', endColorstr='#a9e4f7',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */ width: 100%; margin: 0; padding-top: 5px;">
		<div class="col-md-1"></div>
		<div class="flex-grow-1"></div>
	</div>
	<script src="./js/bootstrap.bundle.min.js"></script>
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

</html>