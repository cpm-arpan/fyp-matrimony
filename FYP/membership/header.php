<?php
//	$lifetime=3600;
//	session_set_cookie_params($lifetime);
session_start();
require_once('../db_connect.php');



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
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
	<script src="./js/bootstrap.bundle.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
		integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
		crossorigin="anonymous"></script>
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

		@medi$(function() {
				$('form.require-validation').bind('submit', function(e) {
						var $form =$(e.target).closest('form'),
						inputSelector=['input[type=email]', 'input[type=password]',
						'input[type=text]', 'input[type=file]',
						'textarea'].join(', '),
						$inputs =$form.find('.required').find(inputSelector),
						$errorMessage =$form.find('div.error'),
						valid=true;

						$errorMessage.addClass('hide');
						$('.has-error').removeClass('has-error');

						$inputs.each(function(i, el) {
								var $input =$(el);

								if ($input.val()==='') {
									$input.parent().addClass('has-error');
									$errorMessage.removeClass('hide');
									e.preventDefault(); // cancel on first error
								}
							});
					});
			});

		$(function() {
				var $form =$("#payment-form");

				$form.on('submit', function(e) {
						if ( !$form.data('cc-on-file')) {
							e.preventDefault();
							Stripe.setPublishableKey($form.data('stripe-publishable-key'));

							Stripe.createToken({
								number: $('.card-number').val(),
								cvc: $('.card-cvc').val(),
								exp_month: $('.card-expiry-month').val(),
								exp_year: $('.card-expiry-year').val()
							}

							, stripeResponseHandler);
					}
				});

			function stripeResponseHandler(status, response) {
				if (response.error) {
					$('.error') .removeClass('hide') .find('.alert') .text(response.error.message);
				}

				else {
					// token contains id, last4, and card type
					var token=response['id'];
					// insert the token into the form so it gets submitted to the server
					$form.find('input[type=text]').empty();
					$form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");
					$form.get(0).submit();
				}
			}

		})a screen and (max-width: 1180px) {
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
			<a><img class="logo" style="margin-top: -5px;" src="../img/logo.png" height="40px"></a>
			<a href="../index.php" class="nav_content" style="color: #662e91;">Home</a>
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
					<button class="dropbtn">Find Paratner
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdownx-content">
						<?php

						if (isset($_SESSION['user']) || isset($_COOKIE['user'])) {
							$_SESSION['user'] = $_COOKIE['user'];
							?>
							<a href="../search.php?gender=Male" class="nav_content">Male</a>
							<a href="../search.php?gender=Female" class="nav_content">Female</a>
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

			<a href="../blog.php" class="nav_content">Blog</a>
			<?php
			if (isset($_SESSION['user'])) {

				$user = $_SESSION['user'];
				$r = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
				if (mysqli_num_rows($r) > 0) {
					$temp = mysqli_fetch_array($r);
					$user_id = $temp['id'];
					$name = $temp['name'];
					$_SESSION['name'] = $name;
				}

				?>

				<div class="dropdownx">
					<button class="dropbtn">Help
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdownx-content">
						<a href="../terms.php" class="nav_content">Terms and conditions</a>
						<a href="../services.php" class="nav_content">Services</a>
						<a href="../faq.php" class="nav_content">Questions and Answers - FAQ</a>
					</div>
				</div>
				<a href="../membership/membership.php" class="nav_content">Membership</a>
				<a href="../logout.php" class="nav_content"><i class="fa fa-power-off" aria-hidden="true"></i>Log out</a>
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
						<a href="../terms.php" class="nav_content">Terms and conditions</a>
						<a href="../services.php" class="nav_content">Services</a>
						<a href="../faq.php" class="nav_content">Questions and Answers - FAQ</a>
					</div>
				</div>

				<?php
			}
			?>
			<a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i
					class="fa fa-bars" aria-hidden="true"></i></a>
		</div>
	</div>
</body>

</html>