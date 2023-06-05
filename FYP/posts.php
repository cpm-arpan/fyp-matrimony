<?php
session_start();

require_once('db_connect.php');
if (!isset($_SESSION['user'])) {
	if (isset($_COOKIE['user'])) {
		$user = $_COOKIE['user'];
	} else {
		$user = "";
	}
} else {
	$user = $_SESSION['user'];
}
if (isset($_POST['delete'])) {
	$pid = $_POST['post_id'];
	$qr = mysqli_query($con, "DELETE FROM `posts` WHERE `posts`.`id` = '$pid'");
	$imageName = $user . '_' . $pid . '.png';
	$path = 'post/' . $imageName;
	unlink($path);
	if ($qr) {
		header('Location:posts.php');
	}
}
//		echo $user;

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

		/* .topnav {
		  overflow: hidden;
		  background-color: #fff;
		  margin-left: 17.5%;
		  z-index: 100000;
		}

		
		.topnav a {
		  float: left;
		  display: block;
		  color: #7F7F7F;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 24px;
		} */

		.topnav {
			overflow: hidden;
			background-color: #fff;
			margin-left: 17.5%;
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

		/* .dropdownx {
			float: left;
			overflow: hidden;
		}

		.dropdownx .dropbtn {
			font-size: 24px;    
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

			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}

		.dropdownx-content a {
			float: none;
			color: #7f7f7f;
			padding: 12px 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		} */

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

		#image_demo {
			margin-left: -115px;
		}

		@media screen and (max-width: 390px) {
			#image_demo {
				margin-left: -165px;
			}
		}

		@media screen and (max-width: 330px) {
			#image_demo {
				margin-left: -195px;
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

				<a href="blog.php" class="nav_content">Blog</a>
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


		<div class="row blog_sec">



			<div class="col-md-1"></div>
			<div class="col-md-10" style="margin: 0; padding: 0; min-height: 500px;">
				<?php if ($user == "admin@admin.com") { ?>
					<button type="button" id="post_now"
						style="font-family: 'Poppins', sans-serif; margin-top: 60px; margin-bottom: -50px; font-weight: bold;"
						class="btn btn-info form-control">Post</button>
					<button type="button" id="hide_now" style="margin-top: 60px; margin-bottom: -50px;"
						class="btn btn-info form-control">Hide</button>
					<div class="b_posts" id="post_area">
						<h4 style="color: #32BEF0;">Attach picture:</h4>
						<input type="file" class="form-control" name="upload_image" id="upload_image" />
						<br>

						<div id="uploaded_image"></div>
						<form method="post" id="posts" action="" enctype="multipart/formdata">
							<h4 style="color: #32BEF0;">Name: </h4>
							<input type="text" name="" id="hisname" class="form-control">
							<h4 style="color: #32BEF0;">Gender:</h4>
							<label class="radio-inline"><input required class="gender" type="radio" name="gender"
									value="Male"> Male</label>
							<label class="radio-inline"><input type="radio" class="gender" name="gender" value="Female">
								Female</label>
							<br>
							<h4 style="color: #32BEF0;">Enter Post:</h4>
							<input type="hidden" id="user" name="" value="<?php echo $user; ?>">

							<textarea rows="10" class="form-control" required id="post_content"
								placeholder="Enter your post here ..."></textarea>
							<br>
							<button type="submit" id="submit_post" class="btn btn-info"
								style="font-family: 'Poppins', sans-serif;">Post</button>
						</form>
						<div id="result">

						</div>
					</div>
				<?php } ?>
				<script type="text/javascript">

				</script>

				<div class="" style="margin:0;" id="post_load1">
					<?php
					$qr = "SELECT * FROM posts ORDER BY id DESC;";
					$rn = mysqli_query($con, $qr);
					if (mysqli_num_rows($rn) > 0) {
						while ($row = mysqli_fetch_array($rn)) {
							$post_id = $row['id'];
							$content = nl2br($row['content']);
							$content1 = mb_substr(nl2br($row['content']), 0, 600);
							$hisname = $row['name'];
							$image = $row['image'];
							// $gender = $row['gender'];
							$time = strtotime($row['time']);
							$date = date('d / m / y', $time);
							$time = date('h:i A', $time);


							if (!empty($image)) {




								?>
								<a href="post_s.php?id=<?php echo $post_id; ?>" style="text-decoration: none; color: black;">
									<div class="b_posts" style="padding-top: 0px; padding-bottom: 1px; ">

										<div class="time" style="padding: 20px 5px;">
											<h6 style="color: #7f7f7f;">
												<?php echo $time; ?>&nbsp;&nbsp;&nbsp;&nbsp;
												<?php echo $date; ?>
											</h6>
											<h6 style="color: #7f7f7f;"></h6>
										</div>

										<div class="row" style="padding: 15px 10px;">
											<div class="col-md-5">
												<img class="img-thumbnail rounded-circle" src="post/<?php echo $image; ?>"
													width="280">
											</div>
											<div class="col-md-7" style="padding: 10px;">

												<h5>
													<?php echo "<b style='color:#9e54ff;'>" . $hisname . "</b>" ?>
												</h5>
												<h5 id="your-div-id" style="color:#7f7f7f; font-size: 18px;">
													<?php echo $content1;
													if ($content == $content1) {
													} else {
														echo "... <h6 style='color: blue;'>See More</h6>";
													} ?>
												</h5>
											</div>
										</div>

									</div>
								</a>

								<?php
								if ($user == "admin@admin.com") {
									?>

									<form method="post" action="">
										<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
										<button type="submit" name="delete" class="btn btn-danger form-control">Delete Post</button>
									</form>

									<?php
								}
							}
						}
					}
					?>
				</div>

			</div>
		</div>

		<?php
		if (isset($_SESSION['user'])) {
			//echo $_SESSION['user'];
		
		}
		?>
		<script type="text/javascript">
			$('#post_area').hide();
			$('#hide_now').hide();
			$('#post_now').click(function () {
				$('#post_area').show();
				$('#post_now').hide();
				$('#hide_now').show();
			});
			$('#hide_now').click(function () {
				$('#post_area').hide();
				$('#post_now').show();
				$('#hide_now').hide();
			});

			var img;
			$(document).ready(function () {
				$("#posts").submit(function () {
					//alert("Hello adil");
					var hisname = $("#hisname").val();
					var adil = $("#post_content").val();
					var data2 = $("#user").val();
					var gender = $("input[type='radio'].gender:checked").val();
					var datastring = 'name11=' + adil + '&name22=' + data2 + '&gender=' + gender + '&hisname=' + hisname;

					if (adil != "") {
						$.ajax({
							type: "post",
							url: "post_upload.php",
							data: datastring,
							dataType: "json",
							cache: false,
							success: function (JSONObject) {
								var msg = JSONObject.c;
								console.log(msg);
								$("#result").html(msg);
								var ac = JSONObject.b;
								if (ac == 1) {
									$('#uploaded_image').hide();
									$("#post_content").val("");
									$("#upload_image").val("");
									setTimeout(function () {
										window.location.href = 'posts.php'
									}, 1000);
								}

							}

						});
					}
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

						<div id="image_demo" style="width:430px;"></div>

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
									href="#">https://www.facebook.com/MarriageCenter/</a></small>
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
					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-youtube"></a>
					<a href="#" class="fa fa-linkedin"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
				</div>
				<div class="col-md-6" style="padding: 10px 10px;">
					<h6 style=" color: white; text-align: center;"><b>&copy Project Developed by Arpan, Razan,
							Prasiddhan All Right
							Reserved.
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
		$(document).ready(function () {
			var name = $("#name_img").val();
			$image_crop = $('#image_demo').croppie({
				enableExif: true,
				viewport: {
					width: 390,
					height: 390,
					type: 'square' //circle
				},
				boundary: {
					width: 405,
					height: 405,
				}
			});

			$('#upload_image').on('change', function () {
				var reader = new FileReader();
				reader.onload = function (event) {
					$image_crop.croppie('bind', {
						url: event.target.result
					}).then(function () {
						console.log('jQuery bind complete');
					});
				}
				reader.readAsDataURL(this.files[0]);
				$('#uploadimageModal').modal('show');
			});

			$('.crop_image').click(function (event) {
				$image_crop.croppie('result', {
					type: 'canvas',
					size: 'viewport'
				}).then(function (response) {
					$.ajax({
						url: "post_upload.php",
						type: "POST",

						data: {
							"image": response,
							"name": name
						},
						success: function (data) {
							$('#uploadimageModal').modal('hide');
							$('#uploaded_image').html(data);


						}
					});
				})
			});

		});
	</script>

	<script type="text/javascript">

	</script>
</body>

</html>