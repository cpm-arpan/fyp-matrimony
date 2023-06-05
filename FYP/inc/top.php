<!DOCTYPE html>
<html>

<head>
	<title>MarriageCenter</title>

	<link rel="icon" href="img/Logos.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/croppie.css">

	<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
	<script type="text/javascript" language="javascript" src="js/bal.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="js/validation.js"></script>
	<script src="./js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
		integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
		integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
		crossorigin="anonymous"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/croppie.js"></script>
	<style type="text/css">
		body {
			margin: 0;
			font-family: 'Poppins', sans-serif;
			background: #e6f5ff;
			height: 100%;
		}

		.highlight {
			/*background-color: #fff34d;*/
			font-weight: bold;
			color: blue;
			/*-moz-border-radius: 5px; /* FF1+ */
			/*-webkit-border-radius: 5px; /* Saf3-4 */
			/*border-radius: 5px; /* Opera 10.5, IE 9, Saf5, Chrome */
			/*-moz-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.7); /* FF3.5+ */
			/*-webkit-box-shadow: 0 1px 4px rgba(0, 0, 0, 0.7); /* Saf3.0+, Chrome */
			/*box-shadow: 0 1px 4px rgba(0, 0, 0, 0.7); /* Opera 10.5+, IE 9.0 */
		}

		.highlight {
			padding: 1px 4px;
			margin: 0 -4px;
		}

		#wrapper {
			min-height: 100%;
			position: relative;
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

		.sidenav {
			overflow: hidden;
			background: #683193;
			box-shadow: 0px 6px 14px 0px rgba(0, 0, 0, 0.15);
			padding: 0px;
			padding-top: 25px;
			height: 100%;
			border-radius: 5px;

		}

		.sidenav:hover {
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);

		}

		.blog_sec {
			width: 95%;
			margin: 50px auto;
		}

		.active {
			color: #4CAF50;
		}

		.topnav .icon {
			display: none;
		}

		.modal-content {
			padding: 0px 100px;
		}

		.sidnav_a {
			text-decoration: none;
			color: #7f7f7f;
		}

		.sidnav_a:hover {
			text-decoration: none;
			color: #662e91;
		}

		select option {
			font-family: 'Poppins', sans-serif;

		}

		select {
			font-family: 'Poppins', sans-serif;
		}

		.dp {
			width: 305px;
			margin-top: 13%;
			margin-left: 30px;
		}

		.cover_pic {
			height: 280px;
			width: 95%;
		}

		.bio_fil {
			width: 95%;
		}

		@media screen and (min-width: 220px) {
			.dp {
				width: 120px;
				margin-top: 19%;
				margin-left: 110px;

			}

			.cover_pic {
				height: 150px;
				width: 99%;
			}

			.bio_fil {
				width: 99%;
			}
		}

		@media screen and (min-width: 320px) {
			.dp {
				width: 160px;
				margin-top: 18%;
				margin-left: 110px;

			}

			.cover_pic {
				height: 190px;
			}
		}

		@media screen and (min-width: 350px) {
			.dp {
				width: 175px;
				margin-top: 16%;
				margin-left: 125px;

			}

			.cover_pic {
				height: 200px;
			}
		}

		@media screen and (min-width: 400px) {
			.dp {
				width: 190px;
				margin-top: 20%;
				margin-left: 150px;

			}

			.cover_pic {
				height: 230px;
			}
		}

		@media screen and (min-width: 475px) {
			.dp {
				width: 210px;
				margin-top: 21%;
				margin-left: 200px;

			}

			.cover_pic {
				height: 250px;
			}
		}

		@media screen and (min-width: 550px) {
			.dp {
				width: 210px;
				margin-top: 16%;
				margin-left: 250px;

			}
		}

		@media screen and (min-width: 600px) {
			.dp {
				width: 220px;
				margin-top: 15%;
				margin-left: 300px;

			}

			.cover_pic {
				height: 260px;
			}
		}

		@media screen and (min-width: 700px) {
			.dp {
				width: 220px;
				margin-top: 13%;
				margin-left: 360px;

			}
		}

		@media screen and (min-width: 770px) {
			.dp {
				width: 245px;
				margin-top: 13%;
				margin-left: 30px;
			}

			.cover_pic {
				height: 280px;
				width: 95%;
			}

			.bio_fil {
				width: 95%;
			}
		}

		@media screen and (min-width: 1000px) {
			.dp {
				width: 305px;
				margin-top: 13%;
				margin-left: 30px;
			}

			.cover_pic {
				height: 280px;
			}
		}
	</style>