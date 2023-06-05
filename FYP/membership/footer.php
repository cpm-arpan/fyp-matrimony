<!DOCTYPE html>
<html>

<head>
	<title>MarriageCenter</title>

	<link rel="icon" href="../img/Logos.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

	<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
	<script type="text/javascript" language="javascript" src="../js/bal.min.js"></script>
	<script type="text/javascript" language="javascript" src="../js/validation.js"></script>
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
		style="margin-top: 50px;   background-image: url('../img/f.png'); background-size: 100% 100%; padding-bottom: 10px; box-shadow: 0 -5px 8px -5px rgba(0,0,0,0.2); background-color: #f9f9f9;">
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
				<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;"
						href="../faq.php">FAQ</a></h6>
				<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;"
						href="../terms.php">Terms of Services</a></h6>
				<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;"
						href="../services.php">Privacy Policy</h6>
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
		<div style="width: 220px; margin: 0 auto;" class="col-md-4 social">
			<a href="https://www.facebook.com" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-youtube"></a>
			<a href="#" class="fa fa-linkedin"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-instagram"></a>
		</div>
		<div class="col-md-6" style="padding: 10px 10px;">
			<h6 style=" color: white; text-align: center;"><b>&copy Project Developed by Arpan, Razan, Prasiddha All
					Right Reserved. </h6>
		</div>
	</div>
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