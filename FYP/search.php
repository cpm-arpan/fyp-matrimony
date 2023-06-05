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
//		echo $user;

?>
<!DOCTYPE html>
<html>

<head>
	<title>SoulMate</title>


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
					<button class="dropbtn" style="color: #662e91;">Find Pratner
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdownx-content">
						<a href="search.php?gender=Male" class="nav_content">Male</a>
						<a href="search.php?gender=Female" class="nav_content">Female</a>
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
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a class="sidnav_a" href="message_notification.php">Messages</a>
						<span id="no_m" class="badge badge-info badge-pill"></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a class="sidnav_a" href="comment_notification.php">Notifications</a>
						<span id="no_m2" class="badge badge-warning badge-pill"></span>
					</li>
				</ul>
			</div>
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

				function ajax23() {
					var req = new XMLHttpRequest();
					req.onreadystatechange = function () {
						if (req.readyState == 4 && req.status == 200) {
							document.getElementById('no_m').innerHTML = req.responseText;

						}
					}
					req.open('POST', 'pmnotify.php', true);
					req.send();
				}
				setInterval(function () { ajax23() }, 1200);
			</script>

			<div class="col-md-1"></div>
			<div class="col-md-9" style="margin: 0; padding: 0; margin-top: 60px; min-height: 400px;">
				<?php
				if (isset($_GET['gender'])) {
					$gender = $_GET['gender'];
					//Created a template
					$sql = "SELECT * FROM tipshoi WHERE gender = ? ORDER BY id DESC";
					//Create a prepared statement
					$stmt = mysqli_stmt_init($con);
					if (!mysqli_stmt_prepare($stmt, $sql)) {
						echo "Sql statement failed!";
					} else {
						//bind parameter
						mysqli_stmt_bind_param($stmt, 's', $gender);
						//run
						mysqli_stmt_execute($stmt);
						$result = mysqli_stmt_get_result($stmt);
						/*}
												/*$rn = mysqli_query($con, "SELECT * FROM tipshoi WHERE gender = '$gender' ORDER BY id DESC");*/
						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_array($result)) {
								$name = $row['name'];
								$mail = $row['mail'];
								$user_id = $row['id'];
								if ($mail != "admin@admin.com" && $mail != $user) {
									$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$mail'");
									if (mysqli_num_rows($rdp) > 0) {
										$rww = mysqli_fetch_array($rdp);
										$val = $rww['num'];
										$imageName = $mail . '_dp' . $val . '.png';
									} else {
										$imageName = 'avatar.png';
									}
									?>
									<div
										style="background: white; width: 100%;  height: inherit; border-radius: 35px 0 0 35px; margin-bottom: 10px;">
										<div class="pull-left">
											<img src="dp/<?php echo $imageName; ?>" width="70" class="rounded-circle">

										</div>
										<div style="padding: 17px 0px;">
											<h3 style="margin-left: 90px;"><a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>"
													style="color: #7f7f7f;"><?php echo $name ?></a></h3>
										</div>
									</div>
									<?php
								}
							}
						}
					}
				} else if (isset($_POST['search'])) {
					$m_stat = $_POST['m_stat'];
					$gender = $_POST['gender'];


					$religion = $_POST['religion'];
					//echo $gender;
					//echo $religion;
					//echo $m_stat;
					$rn = mysqli_query($con, "SELECT * FROM biodata WHERE gender = '$gender' AND religion = '$religion' AND m_stat = '$m_stat'");
					if (mysqli_num_rows($rn) > 0) {

						while ($row = mysqli_fetch_array($rn)) {
							$dm_stat = $row['m_stat'];
							$dreligion = $row['religion'];
							$dgender = $row['gender'];
							$name = $row['name'];
							$user = $row['user'];
							$idfind = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user'");
							$idrow = mysqli_fetch_array($idfind);
							$user_id = $idrow['id'];
							//if($m_stat == $dm_stat && $gender = $dgender && $religion == $dreligion){
							$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$user'");
							if (mysqli_num_rows($rdp) > 0) {
								$rww = mysqli_fetch_array($rdp);
								$val = $rww['num'];
								$imageName = $user . '_dp' . $val . '.png';
							} else {
								$imageName = 'avatar.png';
							}

							?>
								<div
									style="background: white; width: 100%;  height: inherit; border-radius: 35px 0 0 35px; margin-bottom: 10px;">
									<div class="pull-left">
										<img src="dp/<?php echo $imageName; ?>" width="70" class="rounded-circle">

									</div>
									<div style="padding: 17px 0px;">
										<h3 style="margin-left: 90px;"><a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>"
												style="color: #7f7f7f;"><?php echo $name ?></a></h3>
									</div>
								</div>
							<?php

						}
						//}
				
					} else {
						?>
							<h4 style="color: #7f7f7f; font-style: italic;"> Sorry! No one found!</h4>
						<?php
					}

				} else {
					$rn = mysqli_query($con, "SELECT * FROM tipshoi ORDER BY id DESC");
					if (mysqli_num_rows($rn) > 0) {
						while ($row = mysqli_fetch_array($rn)) {
							$name = $row['name'];
							$mail = $row['mail'];
							$idfind = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$mail'");
							$idrow = mysqli_fetch_array($idfind);
							$user_id = $idrow['id'];
							$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$mail'");
							if (mysqli_num_rows($rdp) > 0) {
								$rww = mysqli_fetch_array($rdp);
								$val = $rww['num'];
								$imageName = $mail . '_dp' . $val . '.png';
							} else {
								$imageName = 'avatar.png';
							}
							if ($mail != "admin@admin.com") {
								?>
									<div
										style="background: white; width: 100%;  height: inherit; border-radius: 35px 0 0 35px; margin-bottom: 10px;">
										<div class="pull-left">
											<img src="dp/<?php echo $imageName; ?>" width="70" class="rounded-circle">

										</div>
										<div style="padding: 17px 0px;">
											<h3 style="margin-left: 90px;"><a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>"
													style="color: #7f7f7f;"><?php echo $name ?></a></h3>
										</div>
									</div>
								<?php
							}
						}
					}
				}
				?>


			</div>
		</div>

		<?php
		if (isset($_SESSION['user'])) {
			//echo $_SESSION['user'];
		
		}
		?>
		<script type="text/javascript">

			$(document).ready(function () {
				$("#submit_post").click(function () {
					//alert("Hello adil");
					var adil = $("#post_content").val();
					var data2 = $("#user").val();

					var datastring = 'name11=' + adil + '&name22=' + data2;


					$.ajax({
						type: "post",
						url: "upload.php",
						data: datastring,
						dataType: "json",
						cache: false,
						success: function (JSONObject) {
							var msg = JSONObject.c;
							$("#result").html(msg);
							var ac = JSONObject.b;
							if (ac == 1) {
								$('#uploaded_image').hide();
								$("#post_content").val("");
								$("#upload_image").val("");
							}

						}

					});
					return false;

				});

			});
		</script>
		<div id="uploadimageModal" class="modal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">

						<h4 style="color: #32BEF0;" class="modal-title">Crop Image</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="">

						<div id="image_demo" style="width:430px; margin-left:-115px;"></div>

					</div>
					<br>
					<div class="modal-footer">
						<div style="margin-top: -40px;" class="btn-group">
							<button class="btn btn-info crop_image">Upload</button>
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>

					</div>
				</div>
			</div>
		</div>

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
									href="#">https://www.facebook.com/SoulMatebd/</a></small></h6>
						<h6 style="color: #7f7f7f; text-align: center;">9 AM - 12 PM, Saturday - Friday</h6>
					</div>
					<div class="col-md-4">
						<h5 style="color: #662e91; text-align: center;">Support:</h5>
						<h6 style="color: #7f7f7f; text-align: center;">FAQ</h6>
						<h6 style="color: #7f7f7f; text-align: center;">Terms of Services</h6>
						<h6 style="color: #7f7f7f; text-align: center;">Privacy Policy</h6>
					</div>
				</div>
				<center><button class="btn btn-info">Contact Us</button></center>
			</div>
			<div class="row"
				style=" background: rgb(237,6,143); /* Old 	browsers */background: -moz-linear-gradient(-45deg, rgba(237,6,143,1) 0%, rgba(169,228,247,1) 100%); /* 			FF3.6-15 */background: -webkit-linear-gradient(-45deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* 		Chrome10-25,Safari5.1-6 */background: linear-gradient(135deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0fb4e7', endColorstr='#a9e4f7',GradientType=1 ); /* IE6-9 fallback on horizontal 		gradient */ width: 100%; margin: 0; padding-top: 5px;">
				<div class="col-md-1"></div>
				<div style="width: 220px; margin: 0 auto;" class="col-md-4 social">
					<a href="https://www.facebook.com/SoulMatebd/" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="#" class="fa fa-linkedin"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
				</div>
				<div class="col-md-6" style="padding: 10px 10px;">
					<h6 style=" color: white; text-align: center;"><b>&copy Project Developed by Arpan, Razan,
							Prasiddha.K All Right
							Reserved. <small>Developed by <a href="#" class="myname"><u>Nikhil
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
	<script>
	</script>

	<script type="text/javascript">

	</script>
</body>

</html>