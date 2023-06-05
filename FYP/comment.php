<?php
session_start();

require_once('db_connect.php');
if (!isset($_SESSION['user'])) {
	//header('Location:index.php');
	$user = "";
} else {
	$user = $_SESSION['user'];
	$sname = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
	$row2 = mysqli_fetch_array($sname);
	//$myuser = $row2['id'];
}
//		echo $user;
if (isset($_GET['id'])) {
	$post_id = $_GET['id'];
	$_SESSION['post_id'] = $post_id;
}
$qr = "SELECT * FROM goppo WHERE id = $post_id;";
$rn = mysqli_query($con, $qr);
$row = mysqli_fetch_array($rn);
$poster = $row['user'];
$title = $row['title'];
$content = nl2br($row['content']);
$image = $row['image'];
$time = strtotime($row['time']);
$date = date('d / m / Y', $time);
$time = date('h:i A', $time);
$rn2 = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$poster'");
$row2 = mysqli_fetch_array($rn2);
$name = $row2['name'];
$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$poster'");
if (mysqli_num_rows($rdp) > 0) {
	$rww = mysqli_fetch_array($rdp);
	$val = $rww['num'];
	$imageName = $poster . '_dp' . $val . '.png';
} else {
	$imageName = 'avatar.png';
}
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


	<script src="js/croppie.js"></script>
	<style type="text/css">
		body {
			margin: 0;
			font-family: 'Poppins', sans-serif;
			background: #f9f9f9;
			height: 100%;
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
			background: #E1EFF9;
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
			width: 77%;
			margin: 50px auto;
		}

		.active {
			color: #4CAF50;
			;
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

		@media screen and (max-width: 900px) {
			.blog_sec {
				width: 95%;
				margin: 50px auto;
			}
		}
	</style>
</head>

<body>
	<div id="wrapper">
		<div
			style="z-index: 10; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: white; position: fixed; top: 0; width: 100%; ">
			<div class="topnav" id="myTopnav">
				<a><img class="logo" style="margin-top: -5px;" src="img/logo.png" height="40px"></a>
				<a href="index.php" class="nav_content">Home</a>

				<div class="dropdownx">
					<button class="dropbtn">Find Pratner
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdownx-content">
						<a href="search.php?gender=Male" class="nav_content">Male</a>
						<a href="search.php?gender=Female" class="nav_content">Female</a>
					</div>
				</div>

				<a href="blog.php" class="nav_content" style="color: #662e91;">Blog</a>
				<?php if (!isset($_SESSION['user'])) {

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
						<a href="membership/membership.php" class="nav_content">Membership</a>
						<a href="logout.php" class="nav_content"><i class="fa fa-power-off" aria-hidden="true"></i>Log
							out</a>
						<a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i
								class="fa fa-bars" aria-hidden="true"></i></a>
					<?php } ?>
				</div>
			</div>


			<div class="row blog_sec">
				<div style="margin-top: 60px;" class="col-md-2 sidenav">

					<ul class="list-group">
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<h5><a href="blog.php" class="sidnav_a">
									All posts</a></h5>
						</li>
						<li class="list-group-item d-flex justify-content-between align-items-center">
							<h5><a href="posts.php" class="sidnav_a">Selected posts</a></h5>
						</li>

					</ul>

					<br>
					<?php
					if (isset($_SESSION['user'])) {
						?>
						<ul class="list-group">
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<a class="sidnav_a" href="profile.php?=<?php echo $user; ?>">Profile</a>

							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<a class="sidnav_a" href="message_notification.php">Messages</a>
								<span id="no_m" class="badge badge-info badge-pill"></span>
							</li>
							<li class="list-group-item d-flex justify-content-between align-items-center">
								<a class="sidnav_a" href="comment_notification.php">Notifications</a>
								<span id="no_m2" class="badge badge-warning badge-pill"></span>
							</li>
						</ul>
					<?php } ?>
				</div>
				<?php if (isset($_SESSION['user'])) { ?>
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
						setInterval(function () { ajaxx() }, 1200);

						function ajax() {
							var req = new XMLHttpRequest();
							req.onreadystatechange = function () {
								if (req.readyState == 4 && req.status == 200) {
									document.getElementById('no_m').innerHTML = req.responseText;

								}
							}
							req.open('POST', 'pmnotify.php', true);
							req.send();
						}
						setInterval(function () { ajax() }, 1200);
					</script>
				<?php } ?>
				<div class="col-md-1"></div>
				<div class="col-md-9" style="margin: 0; padding: 0;">
					<?php

					if (!empty($image)) {
						?>
						<div class="b_posts" style="padding-top: 0px; padding-bottom: 1px; ">
							<div class="row" style="background: #f9f9f9; padding: 4px 5px; padding-top: 10px;">
								<div class="col-md-1 dp">
									<img src="dp/<?php echo $imageName; ?>" class="rounded-circle" width="45">
								</div>
								<div class="col-md-8 f_name">
									<h4 style="padding: 5px;"><a style="text-decoration: none; color: #662e91;"
											href="profile.php?us1031gdh312k=<?php echo $poster; ?>"><?php echo $name; ?></a>
									</h4>
								</div>
								<div class="col-md-3 time">

									<h6 style="color: #7f7f7f;">
										<?php echo $time; ?>
									</h6>
									<h6 style="color: #7f7f7f;">
										<?php echo $date; ?>
									</h6>
								</div>
							</div>

							<div class="row" style="padding: 15px 5px;">
								<div class="col-md-5">
									<img class="img-thumbnail" src="image/<?php echo $image; ?>" width="280">
								</div>
								<div class="col-md-7" style="padding: 10px;">

									<h4 style="color: #7f7f7f; font-weight: bold;">"
										<?php if (!empty($title)) {
											echo $title;
										} ?>"
									</h4>
									<h5 id="your-div-id">
										<?php echo $content; ?>
									</h5>
								</div>
							</div>


						</div>
						<?php if (isset($_SESSION['user'])) { ?>
							<div
								style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: #f2f2f2; margin: 0; padding: 10px 19px;">
								<form method="post" action="" id="comment_form">
									<div class="btn-group" style="width: 100%;">
										<input type="text" required id="comments" name="" class="form-control"
											placeholder="Type your comment here..." autocomplete="off">
										<input type="hidden" id="commenter" name="" value="<?php echo $user; ?>">

										<input type="hidden" id="poster" name="" value="<?php echo $poster; ?>">
										<input type="hidden" id="post_id" name="" value="<?php echo $post_id; ?>">
										<button id="s_comment" type="submit" class="btn btn-light" style="color: #662e91;"><img
												src="commen.png" width="25"></button>
									</div>
								</form>
							</div>
							<?php
						}
						?>
						<div id="show_comment" onload="ajax1()"
							style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: #f9f9f9; margin: 0; padding: 10px 20px; border-radius: 4px;">

						</div>
						<?php
					} else {
						?>
						<div class="b_posts" style="padding-top: 0px; padding-bottom: 1px; ">
							<div class="row" style="background: #f9f9f9; padding: 4px 5px; padding-top: 10px;">
								<div class="col-md-1 dp">
									<img src="dp/<?php echo $imageName; ?>" class="rounded-circle" width="45">
								</div>
								<div class="col-md-8 f_name">
									<h4 style="padding: 5px;"><a href="profile.php?us1031gdh312k=<?php echo $poster; ?>"
											style="text-decoration: none; color: #662e91;"><?php echo $name; ?></a></h4>
								</div>
								<div class="col-md-3 time">
									<h6 style="color: #7f7f7f;">
										<?php echo $time; ?>
									</h6>
									<h6 style="color: #7f7f7f;">
										<?php echo $date; ?>
									</h6>
								</div>
							</div>

							<div class="" style="padding: 15px 5px;">
								<div class=""></div>
								<div class="" style="padding: 5px;">
									<h4 style="color: #7f7f7f; font-weight: bold;">"
										<?php if (!empty($title)) {
											echo $title;
										} ?>"
									</h4>
									<h5 id="your-div-id">
										<?php echo $content; ?>
									</h5>
								</div>
							</div>

						</div>
						<?php if (isset($_SESSION['user'])) { ?>
							<div
								style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: #f2f2f2; margin: 0; padding: 10px 19px;">
								<form method="post" action="" id="comment_form">
									<div class="btn-group" style="width: 100%;">
										<input type="text" required id="comments" name="" class="form-control"
											placeholder="Type your comment here...">
										<input type="hidden" id="commenter" name="" value="<?php echo $user; ?>">

										<input type="hidden" id="poster" name="" value="<?php echo $poster; ?>">
										<input type="hidden" id="post_id" name="" value="<?php echo $post_id; ?>">
										<button id="s_comment" type="submit" class="btn btn-light" style="color: #662e91;"><img
												src="commen.png" width="25"></button>
									</div>
								</form>
							</div>
						<?php } ?>
						<div id="show_comment" onload="ajax1()"
							style="box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: #f9f9f9; margin: 0; padding: 10px 20px; border-radius: 4px;">

						</div>
						<?php

					}
					?>
					<script type="text/javascript">
						/* For Loading Data */
						function ajax1() {
							var req = new XMLHttpRequest();
							req.onreadystatechange = function () {
								if (req.readyState == 4 && req.status == 200) {
									document.getElementById('show_comment').innerHTML = req.responseText;

								}
							}
							req.open('POST', 'commentload.php', true);
							req.send();
						}

						setInterval(function () { ajax1() }, 2200);
					</script>


				</div>
			</div>

			<?php
			if (isset($_SESSION['user'])) {
				//echo $_SESSION['user'];
			
			}
			?>
			<script type="text/javascript">

				$(document).ready(function () {
					$("#comment_form").submit(function () {
						//alert("Hello adil");
						var adil = $("#post_id").val();
						var data2 = $("#commenter").val();
						var data3 = $("#poster").val();
						var data4 = $("#comments").val();
						var datastring = 'name11=' + adil + '&name22=' + data2 + '&name33=' + data3 + '&name44=' + data4;


						$.ajax({
							type: "post",
							url: "commentsubmit.php",
							data: datastring,

							cache: false,
							success: function (data) {
								$("#comments").val("");

							}

						});
						return false;

					});

				});
			</script>
			<div class="modal fade" id="reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content" style="padding: 0">
						<div class="modal-header">
							<h3 class="modal-title" id="exampleModalLabel"
								style="color: #662e91; text-align: center; margin-left: 15px;">Register: </h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
							<form id="registration_form" class="" method="post">


								<h5 style="margin-left: 3px; margin-top: 10px;">Full Name: </h5>
								<input type="text" required id="name" class="form-control" name=""
									placeholder="Enter Full Name ">
								<h6 id="name_error_message" style="color: red;"></h6>
								<h5 style="margin-left: 3px; margin-top: 10px;">Gender:</h5>
								<label class="radio-inline"><input required class="gender" type="radio" name="gender"
										value="Male"> Male</label>
								<label class="radio-inline"><input type="radio" class="gender" name="gender"
										value="Female"> Female</label>

								<h5 style="margin-left: 3px; margin-top: 10px;">Email / Mobile No:</h5>
								<input type="text" required id="email" class="form-control" name=""
									placeholder="Ex: example@mail.com / 019xxxxxxxx">
								<h6 id="mail_error_message" style="color: red;"></h6>
								<h5 style="margin-left: 3px;  margin-top: 10px;">Password:</h5>
								<input required id="form_password" type="password" class="form-control" name=""
									placeholder="Enter password ...">
								<h6 id="password_error_message" style="color: red;"></h6>
								<h5 style="margin-left: 3px; margin-top: 10px;">Confirm password:</h5>
								<input required id="form_retype_password" type="password" class="form-control" name=""
									placeholder="Confirm password ...">
								<h6 id="retype_password_error_message" style="color: red;"></h6>
								<h6 id="retype_password_match_message" style="color: green;"></h6>
								<br>
								<input type="checkbox" required id="check" name="rules" value="YES">
								<label for="rules"><a href="help.php">Terms and conditions</a> Terms and
									conditions</label>
								<div id="result"></div>
								<button class="btn btn-info form-control" id="regbtn"
									style="font-family: 'Poppins'">Open an account</button>
							</form>

							<h5>Have an account? <a href="#" onclick="openModal1()" class="nav_content">Login</a></h5>


						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
				aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content" style="padding: 0;">
						<div class="modal-header">
							<h3 class="modal-title" style="color: #662e91; margin-left: 15px; " id="exampleModalLabel">
								Log in:</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
							<form id="login" method="post" action="">

								<h5 style="margin-left: 3px; margin-top: 10px;">Email / Mobile:</h5>
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
							<h5>Don't have an account? <a href="#" onclick="openModal()"
									class="nav_content">Register</a></h5>

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
						}
						else if (pat3.test($("#mail").val())) {
							eror_mail = 0;
						}
						else {
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

										setTimeout(function () { window.location.href = 'comment.php?post_id=<?php echo $post_id; ?>' }, 2000);
										$("#resultx").html(msg);
									}
									else {
										$("#resultx").html(error);
									}
								}

							});
							return false;
						}
						else {
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

						if (pat4.test($("#form_password").val())) {
							pass_error = 1;
						}

						else if (pass_len < 6 || pass_len > 16) {
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
									//console.log(JSONObject.c);
									//console.log(JSONObject.d);
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

				function openModal() {
					$('#reg').modal('show');
					$('#log').modal('hide');
				}

				function openModal1() {
					$('#log').modal('show');
					$('#reg').modal('hide');
				}


			</script>
			<?php

			?>
			<div style="position: absolute;  bottom: 0; width: 100%; height: 10px;">
				<div
					style="margin-top: 50px;   background-image: url('img/f.png'); background-size: 100% 100%; padding-bottom: 10px; box-shadow: 0 -5px 8px -5px rgba(0,0,0,0.2); ">
					<div style="width: 80%; margin: 0 auto; padding: 10px;" class="row">
						<div class="col-md-2"></div>
						<div class="col-md-4">
							<h5 style="color: #662e91; text-align: center;">Contact Info:</h5>
							<h6 style="color: #7f7f7f; text-align: center;">Email:MarriageCenter@gmail.com</h6>
							<h6 style="color: #7f7f7f; text-align: center;">Facebook: <small><a
										href="https://www.facebook.com">https://www.facebook.com</a></small></h6>
							<h6 style="color: #7f7f7f; text-align: center;">9 AM - 12 PM, Saturday - Friday</h6>
						</div>
						<div class="col-md-4">
							<h5 style="color: #662e91; text-align: center;">Support:</h5>
							<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;"
									href="faq.php">FAQ</a></h6>
							<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;"
									href="terms.php">Terms of Services</a></h6>
							<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;"
									href="services.php">Privacy Policy</h6>
						</div>
					</div>
					<center><button class="btn btn-info">Contact Us</button></center>
				</div>
				<div class="row"
					style=" background: rgb(237,6,143); /* Old 	browsers */background: -moz-linear-gradient(-45deg, rgba(237,6,143,1) 0%, rgba(169,228,247,1) 100%); /* 			FF3.6-15 */background: -webkit-linear-gradient(-45deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* 		Chrome10-25,Safari5.1-6 */background: linear-gradient(135deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0fb4e7', endColorstr='#a9e4f7',GradientType=1 ); /* IE6-9 fallback on horizontal 		gradient */ width: 100%; margin: 0; padding-top: 5px;">
					<div class="col-md-1"></div>
					<div style="width: 220px; margin: 0 auto;" class="col-md-4 social">
						<a href="#" class="fa fa-facebook"></a>
						<a href="#" class="fa fa-youtube"></a>
						<a href="#" class="fa fa-linkedin"></a>
						<a href="#" class="fa fa-twitter"></a>
						<a href="#" class="fa fa-instagram"></a>
					</div>
					<div class="col-md-6" style="padding: 10px 10px;">
						<h6 style=" color: white; text-align: center;"><b>&copy Project Developed by Arpan, Razan,
								Prasiddha</u></a></small></b></h6>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" name="" id="name_img" value="<?php echo $user; ?>">
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

</body>

</html>