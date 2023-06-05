<?php
session_start();

require_once('db_connect.php');
if (!isset($_SESSION['user'])) {
	header('Location:index.php');
} else {
	$user = $_SESSION['user'];
	$sname = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
	$row2 = mysqli_fetch_array($sname);
	$myuser = $row2['id'];
}
if (isset($_GET['user_id'])) {
	$receiver_user = $_GET['user_id'];
	$rname = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$receiver_user';");
	$row = mysqli_fetch_array($rname);
	$receiver_name = $row['name'];
	$sname = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user';");
	$row2 = mysqli_fetch_array($sname);
	$sender_name = $row2['name'];
	$_SESSION['receiver_user'] = $receiver_user;
	$_SESSION['receiver_name'] = $receiver_name;
	$_SESSION['sender_name'] = $sender_name;
}
//		echo $user;
$q = "select * from  member where member_id = '" . $_SESSION['id'] . "'";

$q1 = $con->query($q);
while ($row = mysqli_fetch_array($q1)) {
	$db_pass = $row['password'];
}

if (isset($_POST["btn_password"])) {

	$old = hash('sha256', $_POST['old_password']);
	$pass_new = hash('sha256', $_POST['new_password']);
	$confirm_new = hash('sha256', $_POST['confirm_password']);
	//$passw = hash('sha256',$p);
//echo $pass_new;
	function createSalt()
	{
		return '2123293dsj2hu2nikhiljdsd';
	}
	$salt = createSalt();
	$old_pass = hash('sha256', $salt . $old);
	$new_pass = hash('sha256', $salt . $pass_new);
	$confirm = hash('sha256', $salt . $confirm_new);

	if ($new_pass != $confirm) { ?>
		<?php

		echo "<script>alert(' NEW Password and CONFIRM password not Matched');</script>";


		?>


	<?php } else {
		//$pass = md5($_POST['password']);

		$sql = "update  members set `password`='$confirm_new' where member_id= '" . $_SESSION['id'] . "'";


		$res = $con->query($sql);
		echo "<script>alert(' Password Change Successfully.');</script>";

	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>MarriageCenter</title>
	<!--  Project Developed by: Arpan, Razan, PrasiddhaK. 
 for any PHP, Codeignitor or Laravel work contact me through www.Arpan, Razan, Prasiddhak.com  -->

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
			color: #7F7F7F;
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
			width: 70%;
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

		.noti {
			list-style: none;
			margin: 0;
			padding: 0;
			margin-top: -20px;
		}

		.noti li {
			border-bottom: 1px solid #fff;
			margin: 0;
		}

		.noti li a {
			color: black;
			text-decoration: none;
		}

		.commenter {
			color: #662e91;
		}

		.post_cont {
			color: #555;
		}

		.noti li a:hover {
			color: #7f7f7f;
		}

		.noti li a:hover .commenter {
			color: #81D2FF;
		}

		.noti li a:hover .post_cont {
			color: #7f7f7f;
		}

		.noti_div {
			width: 90%;
		}

		@media screen and (max-width: 900px) {
			.noti_div {
				width: 99%;
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
						<a href="search.php?gender=male" class="nav_content">Male</a>
						<a href="search.php?gender=female" class="nav_content">Female</a>
					</div>
				</div>

				<a href="blog.php" class="nav_content">Blog</a>

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
				<a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i
						class="fa fa-bars" aria-hidden="true"></i></a>
			</div>
		</div>


		<div class="row blog_sec">
			<div style="margin-top: 60px;" class="col-md-2 sidenav">
				<ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a class="sidnav_a" href="profile.php?us1031gdh312k=<?php echo $myuser; ?>">Profile</a>

					</li>
					<li id="" class="list-group-item d-flex justify-content-between align-items-center">

						<a class="sidnav_a" href="message_notification.php">Messages</a>
						<span id="no_m" class="badge badge-info badge-pill"></span>



					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a class="sidnav_a" href="comment_notification.php">Notifications</a>
						<span id="no_m2" class="badge badge-warning badge-pill"></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a class="sidnav_a" href="change_password.php">Password</a>
						<span id="no_m2" class="badge badge-warning badge-pill"></span>
					</li>
				</ul>


			</div>
			<script type="text/javascript">
				/*$('#m_n').hide();
				$('#m_n_bx').hide();
				$('#m_n_b').click(function(){
					$('#m_n').show();
					$('#m_n_bx').show();
					$('#m_n_b').hide();
				});
		
				$('#m_n_bx').click(function(){
					$('#m_n').hide();
					$('#m_n_b').show();
					$('#m_n_bx').hide();
				})*/
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

				function ajax2() {
					var req = new XMLHttpRequest();
					req.onreadystatechange = function () {
						if (req.readyState == 4 && req.status == 200) {
							document.getElementById('no_m').innerHTML = req.responseText;

						}
					}
					req.open('POST', 'pmnotify.php', true);
					req.send();
				}
				setInterval(function () { ajax2() }, 1200);
			</script>

			<div class="col-md-2"></div>
			<div class="col-md-8" style=" margin: 0; padding: 0; margin-top: 50px; min-height: 400px;">



				<div class="noti_div" style="margin: 10px auto; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
					<div
						style=" border-radius: 5px; padding: 8px 10px; margin: 0;background: #feffe8; /* Old browsers */
					background: -moz-linear-gradient(top, #feffe8 0%, #d6dbbf 100%); /* FF3.6-15 */
					background: -webkit-linear-gradient(top, #feffe8 0%,#d6dbbf 100%); /* Chrome10-25,Safari5.1-6 */
					background: linear-gradient(to bottom, #feffe8 0%,#d6dbbf 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
					filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffe8', endColorstr='#d6dbbf',GradientType=0 );">
						<h4 style="padding: 5px; color: #662e91;">Change Password</h4>
						<form class="form-horizontal" method="POST">

							<div class="form-group">
								<div class="row">
									<label class="col-sm-3 control-label">New Password</label>
									<div class="col-sm-9">
										<input type="text" placeholder="New-Password" name="new_password"
											class="form-control" required="">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<label class="col-sm-3 control-label">Confirm Password</label>
									<div class="col-sm-9">
										<input type="text" placeholder="Confirm-Password" name="confirm_password"
											class="form-control" required="">
									</div>
								</div>
							</div>




							<button type="submit" name="btn_password"
								class="btn btn-primary btn-flat m-b-30 m-t-30">Update</button>
						</form>

					</div>

				</div>

			</div>

		</div>
		<script type="text/javascript">
			var myDiv = $('#your-div-id');
			myDiv.text(myDiv.text().substring(0, 5) + '....');
			function ajax() {
				var req = new XMLHttpRequest();
				var nakib = "nakib";
				req.onreadystatechange = function () {
					if (req.readyState == 4 && req.status == 200) {
						document.getElementById('chat').innerHTML = req.responseText;

					}
				}
				req.open('POST', 'loadpm.php?receiver=<?php echo $receiver_user; ?>', true);
				var datastring = 'name11=' + nakib;
				req.send();
			}
			setInterval(function () { ajax() }, 200);
		</script>


		<script type="text/javascript">
			$(document).ready(function () {
				$("#pm").submit(function () {
					//alert("Hello adil");
					var adil = $("#user").val();
					var data2 = $("#receiver_user").val();
					var data3 = $("#m").val();
					var datastring = 'name11=' + adil + '&name22=' + data2 + '&name33=' + data3;


					$.ajax({
						type: "post",
						url: "pmsend.php",
						data: datastring,

						cache: false,
						success: function (data) {
							$("#m").val("");
						}

					});
					return false;

				});

			});
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
						<h6 style="color: #7f7f7f; text-align: center;">Email: MarriageCenter@gmail.com</h6>
						<h6 style="color: #7f7f7f; text-align: center;">Facebook: <small><a
									href="https://www.facebook.com/MarriageCenterbd/">https://www.facebook.com/MarriageCenterbd/</a></small>
						</h6>
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
					<a href="https://www.facebook.com/MarriageCenterbd/" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="#" class="fa fa-linkedin"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
				</div>
				<div class="col-md-6" style="padding: 10px 10px;">
					<h6 style=" color: white; text-align: center;"><b>&copy Project Developed by Arpan, Razan,
							Prasiddha.K All Right Reserved. <small>Developed by <a href="#" class="myname"><u>Nikhil
										Bhalerao</u></a></small></b></h6>
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


	<script type="text/javascript">

	</script>

</body>
<!--  Project Developed by: Arpan, Razan, Prasiddha


</html>