<?php
session_start();

require_once('db_connect.php');
if (!isset($_SESSION['user'])) {
	header('Location:index.php');
} else {
	$user = $_SESSION['user'];
	$qr = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$user'");
	$qrow = mysqli_fetch_array($qr);
	$myuser = $qrow['id'];
}
//		echo $user;
if (isset($_GET['us1031gdh312k'])) {
	$user_id =  $_GET['us1031gdh312k'];
} else {
	$user_id = $myuser;
}
//Created a template
$sql = "SELECT * FROM tipshoi WHERE id = ?";
//Create a prepared statement
$stmt = mysqli_stmt_init($con);
if (!mysqli_stmt_prepare($stmt, $sql)) {
	echo "Sql statement failed!";
} else {
	//bind parameter
	mysqli_stmt_bind_param($stmt, 'i', $user_id);
	//run
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);

	//$sname = mysqli_query($con, "SELECT * FROM tipshoi WHERE id = '$user_id';");
	$row2 = mysqli_fetch_array($result);
	$name = $row2['name'];
	$member = $row2['mail'];
}
$full_name = "";
$father_name = "";
$father_work = "";
$mother_name = "";
$mother_work = "";
$family_member_no = "";
$gender = "";
$bdate = "";

$date = "";
$age =  "";
$weight = "";
$height = "";
$body_color = "";

$blood = "";
$religion = "";
$occupasion = "";
$m_stat = "";
$smoking = "";

$protibondhi = "";

$abroad = "";

$cur_address = "";
$per_address = "";
$mobile = "";
$gmail = "";
$jsc = "";
$jsc_board = "";
$jsc_year = "";
$ssc = "";
$ssc_board = "";
$ssc_year = "";
$hsc = "";
$hsc_board = "";
$hsc_year = "";
$bsc = "";
$bsc_year = "";
$msc = "";
$msc_year = "";
$last_ins = "";
$about_me =  "";
$about_her =  "";
$nid =  "";
require_once('inc/top.php');
?>
</head>

<body>
	<div id="wrapper">

		<?php
		?>
		<div style="z-index: 10; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); background: white; position: fixed; top: 0; width: 100%; ">
			<div class="topnav" id="myTopnav">
				<a><img class="logo" style="margin-top: -5px;" src="img/logo.png" height="50px"></a>
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
				<a href="javascript:void(0);" style="font-size:24px;" class="icon" onclick="myFunction()"><i class="fa fa-bars" aria-hidden="true"></i></a>
			</div>
		</div>


		<div class="row blog_sec">
			<div style="margin-top: 40px; " class="col-md-2 sidenav">
				<ul class="list-group">
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a class="sidnav_a" href="profile.php?us1031gdh312k=<?php echo $myuser; ?>">My Profile</a>

					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a class="sidnav_a" href="message_notification.php">Messages</a>
						<span id="no_m" class="badge badge-info badge-pill"></span>
					</li>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<a class="sidnav_a" href="comment_notification.php">Notifications</a>
						<span id="no_m2" class="badge badge-warning badge-pill"></span>
					</li>
					 <li class="list-group-item d-flex justify-content-between align-items-center">
				    <a class="sidnav_a"  href="change_password.php">Change Password</a>
				    <span id="no_m2" class="badge badge-warning badge-pill"></span>
				  </li>
				</ul>
				<?php if ($user == $member) { ?>
					<a href="delete.php"><button type="submit" class="btn btn-dark form-control">Delete Profile</button></a>
				<?php } ?>
			</div>
			<script type="text/javascript">
				function ajaxx() {
					var req = new XMLHttpRequest();
					req.onreadystatechange = function() {
						if (req.readyState == 4 && req.status == 200) {
							document.getElementById('no_m2').innerHTML = req.responseText;

						}
					}
					req.open('POST', 'cnotify.php', true);
					req.send();
				}
				setInterval(function() {
					ajaxx()
				}, 1200);

				function ajax() {
					var req = new XMLHttpRequest();
					req.onreadystatechange = function() {
						if (req.readyState == 4 && req.status == 200) {
							document.getElementById('no_m').innerHTML = req.responseText;

						}
					}
					req.open('POST', 'pmnotify.php', true);
					req.send();
				}
				setInterval(function() {
					ajax()
				}, 1200);
			</script>

			<div class="col-md-8" style="margin: 0;  margin-top: 40px; padding: 0; ">
				<div class="cover_pic" style="margin: 0 auto; padding: 0; background-image: url('img/color.jpg');background-size: 100% 100%; border: 4px solid #f2f2f2;box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);	">
					<?php
					$cq = "SELECT * FROM dp WHERE user = '$member';";
					$cr = mysqli_query($con, $cq);
					if (mysqli_num_rows($cr) > 0) {
						$row = mysqli_fetch_array($cr);
						$image = $row['dp'];
					?>
						<img src="dp/<?php echo $image; ?>" class="img-thumbnail rounded-circle dp">
					<?php
					} else {
					?>
						<img src="dp/avatar.png" class="img-thumbnail rounded-circle dp">
					<?php
					}
					?>
				</div>
				<div class="row bio_fil" style="background: white;  margin: 0 auto; padding: 10px; margin-top: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<h2 style="color: #662e91;"><?php echo $name; ?></h2>
						<?php
						if ($user != $member) {
						?>
							<a href="messenger.php?us9349y9hfk=<?php echo $user_id; ?>"><button style="margin-bottom: 30px;" type="button" class="btn btn-infos">Message <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button></a>
						<?php
						} else {


						?>
							<h4 style="color: #7f7f7f;">Change profile picture:</h4>
							<input type="file" class="form-control" name="upload_image" id="upload_image" />
							<input type="hidden" name="" id="name_img" value="<?php echo $user; ?>">
						<?php
						}
						?>
					</div>


				</div>
				<?php
				if ($member == $user) {
					$query = mysqli_query($con, "SELECT * FROM biodata WHERE user = '$user'");
					if (mysqli_num_rows($query) > 0) {
						$row = mysqli_fetch_array($query);
						$full_name = $row['name'];
						$father_name = $row['father_name'];
						$father_work = $row['father_work'];
						$mother_name = $row['mother_name'];
						$mother_work = $row['mother_work'];
						$family_member_no = $row['family_member'];
						$gender = $row['gender'];
						$bdate = $row['bday'];
						$time = strtotime($bdate);
						$date = date('d/m/y', $time);
						$age =  $row['age'];
						$weight = $row['weight'];
						$height = $row['height'];
						$body_color = $row['body_color'];
						if ($body_color == "undefined") $body_color = "";
						$blood = $row['blood_group'];
						$religion = $row['religion'];
						$occupasion = $row['occupasion'];
						$m_stat = $row['m_stat'];
						$smoking = $row['smoking'];
						if ($smoking == "undefined") $smoking = "";
						$protibondhi = $row['physical_disability'];
						if ($protibondhi == "undefined") $protibondhi = "";
						$abroad = $row['abroad_or_not'];
						if ($abroad == "undefined") $abroad = "";
						$cur_address = $row['cur_address'];
						$per_address = $row['per_address'];
						$mobile = $row['mobile'];
						$gmail = $row['email'];
						$jsc = $row['jsc'];
						$jsc_board = $row['jsc_board'];
						$jsc_year = $row['jsc_year'];
						$ssc = $row['ssc'];
						$ssc_board = $row['ssc_board'];
						$ssc_year = $row['ssc_year'];
						$hsc = $row['hsc'];
						$hsc_board = $row['hsc_board'];
						$hsc_year = $row['hsc_year'];
						$bsc = $row['bsc'];
						$bsc_year = $row['bsc_year'];
						$msc = $row['msc'];
						$msc_year = $row['msc_year'];
						$last_ins = $row['last_ins'];
						$about_me =  $row['about_me'];
						$about_her =  $row['about_her'];
						$nid =  $row['nid'];
					}
				} else {
					$full_name = "";
					$father_name = "";
					$father_work = "";
					$mother_name = "";
					$mother_work = "";
					$family_member_no = "";
					$gender = "";
					$bdate = "";

					$date = "";
					$age =  "";
					$weight = "";
					$height = "";
					$body_color = "";

					$blood = "";
					$religion = "";
					$occupasion = "";
					$m_stat = "";
					$smoking = "";

					$protibondhi = "";

					$abroad = "";

					$cur_address = "";
					$per_address = "";
					$mobile = "";
					$gmail = "";
					$jsc = "";
					$jsc_board = "";
					$jsc_year = "";
					$ssc = "";
					$ssc_board = "";
					$ssc_year = "";
					$hsc = "";
					$hsc_board = "";
					$hsc_year = "";
					$bsc = "";
					$bsc_year = "";
					$msc = "";
					$msc_year = "";
					$last_ins = "";
					$about_me =  "";
					$about_her =  "";
					$nid =  "";
				}

				?>
				<div class="bio_fil" style="background: white;margin: 0 auto; padding: 10px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); border-radius: 0px 0px 8px 8px;">
					<?php
					if ($member == $user) {
					?>
						<div style="margin-top: 10px;">
							<button id="show_bio" type="button" class="btn btn-danger form-control" style="font-family: 'Poppins';">
								<h5>Fill / edit biodata <i class="fa fa-pencil-square-o" aria-hidden="true"></i></h5>
							</button>
						</div>
					<?php
					}
					?>
				</div>
				<div id="bio" class="bio_fil" style="background: white; margin: 0 auto; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); border-radius: 5px; margin-top: 10px;">
					<div class="row" style="padding: 20px 15px;">
						<h3 style="margin-left: 13px; color: #662e91; margin-bottom: 10px;">Biodata</h3>
						<h6 id="close" style="margin-left: 98%; margin-top: -30px;"><i class="fa fa-times"></i></h6>

						<div class="col-md-6">
							<form method="post" id="bio_form">


								<h5 style="margin-left: 3px;">Full Name: </h5>
								<input type="text" required id="full_name" class="form-control" name="" placeholder="Male / Female Full Name" value="<?php echo $full_name; ?>">


								<h5 style="margin-left: 3px;">Father Name: </h5>
								<input type="text" required id="father_name" class="form-control" name="" placeholder="Father Name" value="<?php echo $father_name; ?>">

								<h5 style="margin-left: 3px;">Father Occupation:</h5>
								<input type="text" id="father_work" class="form-control" name="" placeholder="Father Occupation" value="<?php echo $father_work; ?>">

								<h5 style="margin-left: 3px;">Mother Name: </h5>
								<input type="text" required id="mother_name" class="form-control" name="" placeholder="Mother Name" value="<?php echo $mother_name; ?>">

								<h5 style="margin-left: 3px;">Mother Occupation:</h5>
								<input type="text" id="mother_work" class="form-control" name="" placeholder="Mother Occupation" value="<?php echo $mother_work; ?>">


								<h5 style="margin-left: 3px;">Number of brothers and sisters:</h5>
								<input type="text" id="family_member_no" class="form-control" name="" placeholder="Ex: 5 " value="<?php echo $family_member_no; ?>">


								<h5 style="margin-left: 3px;">Date of birth:</h5>
								<input type="date" required id="birthday" class="form-control" name="" placeholder="" value="<?php echo $bdate; ?>">

								<h5 style="margin-left: 3px;">Age:</h5>
								<input type="number" required id="age" class="form-control" name="" placeholder="Ex: 32 (Write in English)" value="<?php echo $age; ?>">

								<h5 style="margin-left: 3px; margin-top: 10px;">Gender:</h5>
								<label class="radio-inline"><input required class="gender" type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {
																																		echo "checked";
																																	} ?>> Male</label>
								<label class="radio-inline"><input type="radio" class="gender" name="gender" value="Female" <?php if ($gender == 'Female') {
																																echo "checked";
																															} ?>> Female</label>

								<h5 style="margin-left: 3px; margin-top: 10px;">Weight:</h5>

								<input type="number" required id="weight" class="form-control" name="" placeholder="Example: 75 (Write in English)" value="<?php echo $weight; ?>">
								<h5 style="margin-left: 3px; margin-top: 10px;">Height:</h5>
								<select required id="height" class="form-control">
									<option value="" disabled selected>Select your height:</option>
									<option value="4 feet" <?php if ($height == '4 feet') {
																echo "selected";
															} ?>>4 feet</option>
									<option value="4 feet 1 inch" <?php if ($height == '4 feet 1 inch') {
																		echo "selected";
																	} ?>>4 feet 1 inch</option>
									<option value="4 feet 2 inch" <?php if ($height == '4 feet 2 inch') {
																		echo "selected";
																	} ?>>4 feet 2 inch</option>
									<option value="4 feet 3 inch" <?php if ($height == '4 feet 3 inch') {
																		echo "selected";
																	} ?>>4 feet 3 inch</option>
									<option value="4 feet 4 inch" <?php if ($height == '4 feet 4 inch') {
																		echo "selected";
																	} ?>>4 feet 4 inch</option>
									<option value="4 feet 5 inch" <?php if ($height == '4 feet 5 inch') {
																		echo "selected";
																	} ?>>4 feet 5 inch</option>
									<option value="4 feet 6 inch" <?php if ($height == '4 feet 6 inch') {
																		echo "selected";
																	} ?>>4 feet 6 inch</option>
									<option value="4 feet 7 inch" <?php if ($height == '4 feet 7 inch') {
																		echo "selected";
																	} ?>>4 feet 7 inch</option>
									<option value="4 feet 8 inch" <?php if ($height == '4 feet 8 inch') {
																		echo "selected";
																	} ?>>4 feet 8 inch</option>
									<option value="4 feet 9 inch" <?php if ($height == '4 feet 9 inch') {
																		echo "selected";
																	} ?>>4 feet 9 inch</option>
									<option value="4 feet 10 inch" <?php if ($height == '4 feet 10 inch') {
																		echo "selected";
																	} ?>>4 feet 10 inch</option>
									<option value="4 feet 11 inch" <?php if ($height == '4 feet 11 inch') {
																		echo "selected";
																	} ?>>4 feet 11 inch</option>
									<option value="5 feet" <?php if ($height == '5 feet') {
																echo "selected";
															} ?>>5 feet</option>
									<option value="5 feet 1 inch" <?php if ($height == '5 feet 1 inch') {
																		echo "selected";
																	} ?>>5 feet 1 inch</option>
									<option value="5 feet 2 inch" <?php if ($height == '5 feet 2 inch') {
																		echo "selected";
																	} ?>>5 feet 2 inch</option>
									<option value="5 feet 3 inch" <?php if ($height == '5 feet 3 inch') {
																		echo "selected";
																	} ?>>5 feet 3 inch</option>
									<option value="5 feet 4 inch" <?php if ($height == '5 feet 4 inch') {
																		echo "selected";
																	} ?>>5 feet 4 inch</option>
									<option value="5 feet 5 inch" <?php if ($height == '5 feet 5 inch') {
																		echo "selected";
																	} ?>>5 feet 5 inch</option>
									<option value="5 feet 6 inch" <?php if ($height == '5 feet 6 inch') {
																		echo "selected";
																	} ?>>5 feet 6 inch</option>
									<option value="5 feet 7 inch" <?php if ($height == '5 feet 7 inch') {
																		echo "selected";
																	} ?>>5 feet 7 inch</option>
									<option value="5 feet 8 inch" <?php if ($height == '5 feet 8 inch') {
																		echo "selected";
																	} ?>>5 feet 8 inch</option>
									<option value="5 feet 9 inch" <?php if ($height == '5 feet 9 inch') {
																		echo "selected";
																	} ?>>5 feet 9 inch</option>
									<option value="5 feet 10 inch" <?php if ($height == '5 feet 10 inch') {
																		echo "selected";
																	} ?>>5 feet 10 inch</option>
									<option value="5 feet 11 inch" <?php if ($height == '5 feet 11 inch') {
																		echo "selected";
																	} ?>>5 feet 11 inch</option>
									<option value="6 feet" <?php if ($height == '6 feet') {
																echo "selected";
															} ?>>6 feet</option>
									<option value="6 feet 1 inch" <?php if ($height == '6 feet 1 inch') {
																		echo "selected";
																	} ?>>6 feet 1 inch</option>
									<option value="6 feet 2 inch" <?php if ($height == '6 feet 2 inch') {
																		echo "selected";
																	} ?>>6 feet 2 inch</option>
									<option value="6 feet 3 inch" <?php if ($height == '6 feet 3 inch') {
																		echo "selected";
																	} ?>>6 feet 3 inch</option>
									<option value="6 feet 4 inch" <?php if ($height == '6 feet 4 inch') {
																		echo "selected";
																	} ?>>6 feet 4 inch</option>
									<option value="6 feet 5 inch" <?php if ($height == '6 feet 5 inch') {
																		echo "selected";
																	} ?>>6 feet 5 inch</option>
									<option value="6 feet 6 inch" <?php if ($height == '6 feet 6 inch') {
																		echo "selected";
																	} ?>>6 feet 6 inch</option>
									<option value="6 feet 7 inch" <?php if ($height == '6 feet 7 inch') {
																		echo "selected";
																	} ?>>6 feet 7 inch</option>
									<option value="6 feet 8 inch" <?php if ($height == '6 feet 8 inch') {
																		echo "selected";
																	} ?>>6 feet 8 inch</option>
									<option value="6 feet 9 inch" <?php if ($height == '6 feet 9  inch') {
																		echo "selected";
																	} ?>>6 feet 9 inch</option>
									<option value="6 feet 10 inch" <?php if ($height == '6 feet 10 inch') {
																		echo "selected";
																	} ?>>6 feet 10 inch</option>
									<option value="6 feet 11 inch" <?php if ($height == '6 feet 11 inch') {
																		echo "selected";
																	} ?>>6 feet 11 inch</option>

								</select>
								<h5 style="margin-left: 3px; margin-top: 10px;">Color:</h5>
								<label class="radio-inline"><input class="body_color" type="radio" name="body_color" value="Very Fair" <?php if ($body_color == 'Very Fair') {
																																			echo "checked";
																																		} ?>> Very Fair</label>
								<label class="radio-inline"><input type="radio" class="body_color" name="body_color" value="Fair" <?php if ($body_color == 'Fair') {
																																		echo "checked";
																																	} ?>> Fair</label>
								<label class="radio-inline"><input type="radio" class="body_color" name="body_color" value="Olive" <?php if ($body_color == 'Olive') {
																																		echo "checked";
																																	} ?>> Olive</label>
								<label class="radio-inline"><input type="radio" class="body_color" name="body_color" value="Light Brown" <?php if ($body_color == 'Light Brown') {
																																				echo "checked";
																																			} ?>> Light Brown</label>
								<label class="radio-inline"><input type="radio" class="body_color" name="body_color" value="Brown" <?php if ($body_color == 'Brown') {
																																		echo "checked";
																																	} ?>> Brown</label>
								<label class="radio-inline"><input type="radio" class="body_color" name="body_color" value="Dark Brown" <?php if ($body_color == 'Dark Brown') {
																																			echo "checked";
																																		} ?>> Dark Brown</label>
								<label class="radio-inline"><input type="radio" class="body_color" name="body_color" value="Black Brown" <?php if ($body_color == 'Black Brown') {
																																				echo "checked";
																																			} ?>> Black Brown</label>

								<h5 style="margin-left: 3px; margin-top: 10px;">Blood group:</h5>
								<label class="radio-inline"><input type="radio" name="blood" required class="blood" value="A Positive" <?php if ($blood == 'A Positive') {
																																			echo "checked";
																																		} ?>> A+</label>
								<label class="radio-inline"><input type="radio" class="blood" name="blood" value="B Positive" <?php if ($blood == 'B Positive') {
																																	echo "checked";
																																} ?>> B+ </label>
								<label class="radio-inline"><input type="radio" class="blood" name="blood" value="O Positive" <?php if ($blood == 'O Positive') {
																																	echo "checked";
																																} ?>> O+ </label>
								<label class="radio-inline"><input type="radio" class="blood" name="blood" value="O -ve" <?php if ($blood == 'O -ve') {
																																echo "checked";
																															} ?>> O- </label>
								<label class="radio-inline"><input type="radio" class="blood" name="blood" value="B -ve" <?php if ($blood == 'B -ve') {
																																echo "checked";
																															} ?>> B- </label>
								<label class="radio-inline"><input type="radio" class="blood" name="blood" value="A -ve" <?php if ($blood == 'A -ve') {
																																echo "checked";
																															} ?>> A- </label>
								<label class="radio-inline"><input type="radio" class="blood" name="blood" value="AB Positive" <?php if ($blood == 'AB Positive') {
																																	echo "checked";
																																} ?>> AB+ </label>
								<label class="radio-inline"><input type="radio" class="blood" name="blood" value="AB -ve" <?php if ($blood == 'AB -ve') {
																																echo "checked";
																															} ?>> AB- </label>
								<label class="radio-inline"><input type="radio" class="blood" name="blood" value="Don't know"> Don't know</label>

								<h5 style="margin-left: 3px; margin-top: 10px;">Your Religion:</h5>
								<label class="radio-inline"><input required class="religion" type="radio" name="religion" value="Islam" <?php if ($religion == 'Islam') {
																																			echo "checked";
																																		} ?>> Islam</label>
								<label class="radio-inline"><input type="radio" class="religion" name="religion" value="Hindu" <?php if ($religion == 'Hindu') {
																																	echo "checked";
																																} ?>> Hindu </label>
								<label class="radio-inline"><input type="radio" class="religion" name="religion" value="Christian" <?php if ($religion == 'Christian') {
																																		echo "checked";
																																	} ?>> Christian </label>
								<label class="radio-inline"><input type="radio" class="religion" name="religion" value="Buddhist" <?php if ($religion == 'Buddhist') {
																																		echo "checked";
																																	} ?>> Buddhist </label>

								<label class="radio-inline"><input type="radio" class="religion" name="religion" value="Other" <?php if ($religion == 'Other') {
																																	echo "checked";
																																} ?>> Other</label>

								<h5 style="margin-left: 3px; margin-top: 10px; color: #000;">Male/Female Occupation:</h5>
								<input type="text" required id="occupasion" class="form-control" name="" placeholder="Male/Female Occupation:" value="<?php echo $occupasion; ?>">


								<h5 style="margin-left: 3px; margin-top: 10px;">Mobile:</h5>

								<input type="number" id="mobile" class="form-control" name="" placeholder="Example: 019xxxxxxxx" value="<?php echo $mobile; ?>">
								<h5 style="margin-left: 3px; margin-top: 10px;">Email:</h5>
								<input type="email" id="gmail" class="form-control" name="" value="<?php echo $gmail; ?>">

						</div>
						<div class="col-md-6">




							<h5 style=" margin-top: 10px; color: #000;">Marital Status:</h5>

							<label class="radio-inline"><input required class="m_stat" type="radio" name="m_stat" value="Unmarried" <?php if ($m_stat == 'Unmarried') {
																																		echo "checked";
																																	} ?>> Unmarried</label>
							<label class="radio-inline"><input type="radio" class="m_stat" name="m_stat" value="Divorced" <?php if ($m_stat == 'Divorced') {
																																echo "checked";
																															} ?>> Divorced</label>
							<label class="radio-inline"><input type="radio" class="m_stat" name="m_stat" value="Widow" <?php if ($m_stat == 'Widow') {
																															echo "checked";
																														} ?>> Widow</label>

							<h5 style=" margin-top: 10px; color: #000;">Do you smoke:</h5>

							<label class="radio-inline"><input required class="smoking" type="radio" name="smoking" value="Yes" <?php if ($smoking == 'Yes') {
																																	echo "checked";
																																} ?>> Yes</label>
							<label class="radio-inline"><input type="radio" class="smoking" name="smoking" value="No" <?php if ($smoking == 'No') {
																															echo "checked";
																														} ?>> No</label>
							<label class="radio-inline"><input type="radio" class="smoking" name="smoking" value="At times" <?php if ($smoking == 'At times') {
																																echo "checked";
																															} ?>> At times</label>

							<h5 style=" margin-top: 10px; color: #000;">Whether there is a disability:</h5>

							<label class="radio-inline"><input class="protibondhi" type="radio" name="protibondhi" value="Yes" <?php if ($protibondhi == 'Yes') {
																																	echo "checked";
																																} ?>> Yes</label>
							<label class="radio-inline"><input type="radio" class="protibondhi" name="protibondhi" value="No" <?php if ($protibondhi == 'No') {
																																	echo "checked";
																																} ?>> No</label>

							<h5 style="margin-top: 10px;">Current location:</h5>
							<label class="radio-inline"><input required class="where" type="radio" name="where" value="India" <?php if ($abroad == 'India') {
																																	echo "checked";
																																} ?>>Nepal</label>
							<label class="radio-inline"><input type="radio" class="where" name="where" value="Abroad" <?php if ($abroad == 'Abroad') {
																															echo "checked";
																														} ?>> Abroad </label>

							<h5 style=" margin-top: 10px; color: #000;">Current Address:</h5>
							<input type="text" required id="cur_address" name="" class="form-control" placeholder="Ex: Kathmandu" value="<?php echo $cur_address; ?>">

							<h5 style=" margin-top: 10px; color: #000;">Permanent address:</h5>
							<input type="text" required id="per_address" name="" class="form-control" placeholder="Ex: Kathmandu" value="<?php echo $per_address; ?>">


							<h5 style=" margin-top: 10px; color: #000;">Educational Qualifications:</h5>
							<h6>Select the degree, enter the board and the side year.</h6>
							
							<br>

							<div class="form-inline">
								<select id="ssc" class="form-control" style="width:80px;">
									<option value="SSC" <?php if ($ssc == 'SSC') {
															echo "selected";
														} ?>>SLC</option>
								</select>
								<input type="text" id="ssc_board" name="" class="form-control" style="width:80px;" placeholder="Board" value="<?php echo $ssc_board; ?>">
								<input type="text" id="ssc_year" style="width:80px;" name="" class="form-control" placeholder="Year" value="<?php echo $ssc_year; ?>">
							</div>
							<br>

							<div class="form-inline">
								<select id="hsc" class="form-control" style="width:80px;">
									<option value="HSC" <?php if ($hsc == 'HSC') {
															echo "selected";
														} ?>>+2</option>
								</select>
								<input type="text" id="hsc_board" name="" class="form-control" style="width:80px;" placeholder="Board" value="<?php echo $hsc_board; ?>">
								<input type="text" id="hsc_year" style="width:80px;" name="" class="form-control" placeholder="Year" value="<?php echo $hsc_year; ?>">
							</div>
							<br>

							<div class="form-inline">
								<select id="bsc" class="form-control" style="width:160px;">
									<option value="BA" <?php if ($bsc == 'BA') {
															echo "selected";
														} ?>>BA</option>
									<option value="BCom" <?php if ($bsc == 'BCom') {
															echo "selected";
														} ?>>BCom</option>
									<option value="BSc" <?php if ($bsc == 'BSc') {
															echo "selected";
														} ?>>BSc</option>
									<option value="BBA" <?php if ($bsc == 'BBA') {
															echo "selected";
														} ?>>BBA</option>
									<option value="BCA" <?php if ($bsc == 'BCA') {
															echo "selected";
														} ?>>BCA</option>
				
									<option value="MBBS" <?php if ($bsc == 'MBBS') {
																echo "selected";
															} ?>>MBBS</option>
									<option value="Engineering" <?php if ($bsc == 'Engineering') {
																		echo "selected";
																	} ?>>Engineering</option>
									<option value="Diploma" <?php if ($bsc == 'Diploma') {
																echo "selected";
															} ?>>Diploma</option>
							
									<option value="Others" <?php if ($bsc == 'Others') {
																		echo "selected";
																	} ?>>Others</option>
								</select>

								<input type="text" id="bsc_year" style="width:80px;" name="" class="form-control" placeholder="Year" value="<?php if (isset($last_ins)) {
																																				echo $bsc_year;
																																			} ?>">
							</div>
							<br>
							<div class="form-inline">
								<select id="msc" class="form-control" style="width:160px;">
									<option>MA</option>
									<option>MCom</option>
									<option>MSc</option>
									<option>MBA</option>
									<option>MCA</option>
									<option>ME</option>
									<option>Masters in Others</option>
								</select>

								<input type="text" id="msc_year" style="width:80px;" name="" class="form-control" placeholder="Year" value="<?php if (isset($msc_year)) {
																																				echo $msc_year;
																																			} ?>">
							</div>
							<h5 style=" margin-top: 10px; color: #000;">Latest educational qualifications and educational institutions:</h5>
							<input type="text" name="" id="last_ins" placeholder="Ex: Civil Engineering" class="form-control" value="<?php if (isset($last_ins)) {
																																							echo $last_ins;
																																						} ?>">

							<h5 style=" margin-top: 10px; color: #000;">Voter Registration No:</h5>
							<input type="number" name="" id="nid" placeholder="Ex: 19934421xxxxxxxxx" class="form-control" value="<?php if (isset($nid)) {
																																		echo $nid;
																																	} ?>">

							<h5 style=" margin-top: 10px; color: #000;">Write something about you:</h5>
							<textarea id="about_her" rows="4" class="form-control" placeholder="Write something about you... " value=""><?php if (isset($about_her)) {
																																			echo $about_her;
																																		} ?></textarea>


							<h5 style=" margin-top: 10px; color: #000;">Write something about yourself:</h5>
							<textarea id="about_me" rows="4" class="form-control" placeholder="Write something about yourself..." value=""><?php if (isset($about_me)) {
																																				echo $about_me;
																																			} ?></textarea>

							<button class="btn btn-infos" type="submit" id="b_bio" style="margin-top: 10px; font-family: 'Poppins', sans-serif;">Submit</button>
							</form>
							<div id="success">

							</div>
						</div>


					</div>
				</div>
				<?php

				?>
				<div class="bio_fil" style="background: white;margin: 20px auto; padding: 20px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); border-radius: 5px">
					<h3 style="color: #662e91; margin-left: 13px;">Biodata</h3>
					<?php if ($user == $member) { ?>
						<h6 style="color: #7f7f7f; margin-left: 10px;">** Fill out the form above to make any changes to the biodata information:</h6>
					<?php } ?>
					<?php
					$query_run = mysqli_query($con, "SELECT * FROM biodata WHERE user = '$member'");
					if (mysqli_num_rows($query_run) > 0) {
						$rowx = mysqli_fetch_array($query_run);
						$full_name = $rowx['name'];
						$father_name = $rowx['father_name'];
						$father_work = $rowx['father_work'];
						$mother_name = $rowx['mother_name'];
						$mother_work = $rowx['mother_work'];
						$family_member_no = $rowx['family_member'];
						$gender = $rowx['gender'];
						$bdate = $rowx['bday'];
						$time = strtotime($bdate);
						$date = date('d / m / y', $time);
						$age =  $rowx['age'];
						$weight = $rowx['weight'];
						$height = $rowx['height'];
						$body_color = $rowx['body_color'];
						if ($body_color == "undefined") $body_color = "";
						$blood = $rowx['blood_group'];
						$religion = $rowx['religion'];
						$occupasion = $rowx['occupasion'];
						$m_stat = $rowx['m_stat'];
						$smoking = $rowx['smoking'];
						if ($smoking == "undefined") $smoking = "";
						$protibondhi = $rowx['physical_disability'];
						if ($protibondhi == "undefined") $protibondhi = "";
						$abroad = $rowx['abroad_or_not'];
						if ($abroad == "undefined") $abroad = "";
						$cur_address = $rowx['cur_address'];
						$per_address = $rowx['per_address'];
						$mobile = $rowx['mobile'];
						$gmail = $rowx['email'];
						$jsc = $rowx['jsc'];
						$jsc_board = $rowx['jsc_board'];
						$jsc_year = $rowx['jsc_year'];
						$ssc = $rowx['ssc'];
						$ssc_board = $rowx['ssc_board'];
						$ssc_year = $rowx['ssc_year'];
						$hsc = $rowx['hsc'];
						$hsc_board = $rowx['hsc_board'];
						$hsc_year = $rowx['hsc_year'];
						$bsc = $rowx['bsc'];
						$bsc_year = $rowx['bsc_year'];
						$msc = $rowx['msc'];
						$msc_year = $rowx['msc_year'];
						$last_ins = $rowx['last_ins'];
						$about_me =  $rowx['about_me'];
						$about_her =  $rowx['about_her'];
						$nid =  $rowx['nid'];

					?>
						<div class="row" style="padding: 15px;">
							<div class="col-md-6">

								<h5><span style="color:#7f7f7f; ">Name: </span> <?php echo $full_name; ?></h5>

								<h5><span style="color:#7f7f7f;">Father Name: </span> <?php echo $father_name; ?></h5>

								<h5><span style="color:#7f7f7f;">Father Occupation:</span> <?php echo $father_work; ?></h5>

								<h5><span style="color:#7f7f7f;">Mother Name: </span> <?php echo $mother_name; ?></h5>

								<h5><span style="color:#7f7f7f;">Mother Occupation:</span> <?php echo $mother_work; ?></h5>

								<h5><span style="color:#7f7f7f;">Number of siblings:</span> <?php echo $family_member_no; ?></h5>

								<h5><span style="color:#7f7f7f;">Gender:</span> <?php if ($gender == "Male") {
																					echo "Male";
																				} else {
																					echo "Female";
																				} ?></h5>

								<h5><span style="color:#7f7f7f;">Date of birth:</span> <?php echo $date; ?></h5>

								<h5><span style="color:#7f7f7f;">Age:</span> <?php echo $age; ?></h5>


								<h5><span style="color:#7f7f7f;">Weight:</span> <?php echo $weight; ?> Kg</h5>

								<h5><span style="color:#7f7f7f;">Height:</span> <?php echo $height; ?></h5>

								<h5><span style="color:#7f7f7f;">Color:</span> <?php echo $body_color; ?></h5>

								<h5><span style="color:#7f7f7f;">Blood group:</span> <?php echo $blood; ?></h5>
								<h5><span style="color:#7f7f7f;">Religion:</span> <?php echo $religion; ?></h5>
								<h5><span style="color:#7f7f7f;">Mobile No:</span> <?php echo $mobile; ?></h5>
								<h5><span style="color:#7f7f7f;">Email:</span> <?php echo $gmail; ?></h5>

							</div>
							<div class="col-md-6">



								<h5><span style="color:#7f7f7f;">Occupation:</span> <?php echo $occupasion; ?></h5>


								<h5><span style="color:#7f7f7f;">Marital Status:</span> <?php echo $m_stat; ?></h5>
								<h5><span style="color:#7f7f7f;">Do you smoke:</span> <?php echo $smoking; ?></h5>

								<h5><span style="color:#7f7f7f;">Whether there is a disability:</span> <?php echo $protibondhi; ?></h5>

								<h5><span style="color:#7f7f7f;">Current location:</span> <?php echo $abroad; ?></h5>

								<h5><span style="color:#7f7f7f;">Current Address:</span> <?php echo $cur_address; ?></h5>

								<h5><span style="color:#7f7f7f;">Permanent address:</span> <?php echo $per_address; ?></h5>



								<h5><span style="color:#7f7f7f;">Educational Qualifications:</span> </h5>


								<?php if (!empty($ssc_year && $ssc_board)) { ?><h6><?php echo $ssc; ?>, <?php echo $ssc_year; ?>, <?php echo $ssc_board; ?></h6><?php } ?>
								<?php if (!empty($hsc_year && $hsc_board)) { ?><h6><?php echo $hsc; ?>, <?php echo $hsc_year; ?>, <?php echo $hsc_board; ?></h6><?php } ?>
								<?php if (!empty($bsc_year)) { ?><h6><?php echo $bsc; ?>, <?php echo $bsc_year; ?></h6><?php } ?>

								<?php if (!empty($msc_year)) { ?><h6><?php echo $msc; ?>, <?php echo $msc_year; ?></h6><?php } ?>
								<h5><span style="color:#7f7f7f;">Latest Educational Institutions and Educational Qualifications:</span> <?php echo $last_ins; ?></h5>


								<h5><span style="color:#7f7f7f;">Voter Registration No:</span> <?php echo $nid; ?></h5>

								<h5><span style="color:#7f7f7f;">Like Male / Female :</span> <?php echo $about_her; ?></h5>

								<h5><span style="color:#7f7f7f;">About me:</span> <?php echo $about_me; ?></h5>


							</div>
						</div>
					<?php

					} else {
						$qqq = mysqli_query($con, "SELECT * FROM tipshoi WHERE mail = '$member'");
						$rrr = mysqli_fetch_array($qqq);
						$full_name = $rrr['name'];
						$father_name = "";
						$father_work = "";
						$mother_name = "";
						$mother_work = "";
						$family_member_no = "";
						$gender = $rrr['gender'];
						$bdate = "";

						$age =  "";
						$weight = "";
						$height = "";
						$body_color = "";
						if ($body_color == "undefined") $body_color = "";
						$blood = "";
						$religion = "";
						$occupasion = "";
						$m_stat = "";
						$smoking = "";
						if ($smoking == "undefined") $smoking = "";
						$protibondhi = "";
						if ($protibondhi == "undefined") $protibondhi = "";
						$abroad = "";
						if ($abroad == "undefined") $abroad = "";
						$cur_address = "";
						$per_address = "";
						$mobile = "";
						$gmail =$rrr['mail'];
						$jsc = "";
						$jsc_board = "";
						$jsc_year = "";
						$ssc = "";
						$ssc_board = "";
						$ssc_year = "";
						$hsc = "";
						$hsc_board = "";
						$hsc_year = "";
						$bsc = "";
						$bsc_year = "";
						$msc = "";
						$msc_year = "";
						$last_ins = "";
						$about_me =  "";
						$about_her =  "";
						$nid =  "";
					?>
						<div class="row" style="padding: 15px;">
							<div class="col-md-6">
								<h5><span style="color:#7f7f7f;">Name: </span> <?php echo $full_name; ?></h5>

								<h5><span style="color:#7f7f7f;">Father Name: </span> <?php echo $father_name; ?></h5>

								<h5><span style="color:#7f7f7f;">Father Occupation:</span> <?php echo $father_work; ?></h5>

								<h5><span style="color:#7f7f7f;">Mother Name: </span> <?php echo $mother_name; ?></h5>

								<h5><span style="color:#7f7f7f;">Mother Occupation:</span> <?php echo $mother_work; ?></h5>

								<h5><span style="color:#7f7f7f;">Number of siblings:</span> <?php echo $family_member_no; ?></h5>

								<h5><span style="color:#7f7f7f;">Gender:</span> <?php if ($gender == "Male") {
																					echo "Male";
																				} else {
																					echo "Female";
																				} ?></h5>

								<h5><span style="color:#7f7f7f;">Date of birth:</span> <?php echo $bdate; ?></h5>

								<h5><span style="color:#7f7f7f;">Age:</span> <?php echo $age; ?></h5>


								<h5><span style="color:#7f7f7f;">Weight:</span> <?php echo $weight; ?> </h5>

								<h5><span style="color:#7f7f7f;">Height:</span> <?php echo $height; ?></h5>

								<h5><span style="color:#7f7f7f;">Color:</span> <?php echo $body_color; ?></h5>

								<h5><span style="color:#7f7f7f;">Blood group:</span> <?php echo $blood; ?></h5>
								<h5><span style="color:#7f7f7f;">Religion:</span> <?php echo $religion; ?></h5>
								<h5><span style="color:#7f7f7f;">Mobile No:</span> <?php echo $mobile; ?></h5>

							</div>
							<div class="col-md-6">

								<h5><span style="color:#7f7f7f;">Email:</span> <?php echo $gmail; ?></h5>

								<h5><span style="color:#7f7f7f;">Occupation:</span> <?php echo $occupasion; ?></h5>


								<h5><span style="color:#7f7f7f;">Marital Status:</span> <?php echo $m_stat; ?></h5>

								<h5><span style="color:#7f7f7f;">Do you smoke:</span> <?php echo $smoking; ?></h5>

								<h5><span style="color:#7f7f7f;">Whether there is a disability:</span> <?php echo $protibondhi; ?></h5>

								<h5><span style="color:#7f7f7f;">Current location:</span> <?php echo $abroad; ?></h5>

								<h5><span style="color:#7f7f7f;">Current Address:</span> <?php echo $cur_address; ?></h5>

								<h5><span style="color:#7f7f7f;">Permanent address:</span> <?php echo $per_address; ?></h5>



								<h5><span style="color:#7f7f7f;">Educational Qualifications:</span> </h5>


								<?php if (!empty($ssc_year && $ssc_board)) { ?><h6><?php echo $ssc; ?>, <?php echo $ssc_year; ?>, <?php echo $ssc_board; ?></h6><?php } ?>
								<?php if (!empty($hsc_year && $hsc_board)) { ?><h6><?php echo $hsc; ?>, <?php echo $hsc_year; ?>, <?php echo $hsc_board; ?></h6><?php } ?>
								<?php if (!empty($bsc_year)) { ?><h6><?php echo $bsc; ?>, <?php echo $bsc_year; ?></h6><?php } ?>

								<?php if (!empty($msc_year)) { ?><h6><?php echo $msc; ?>, <?php echo $msc_year; ?></h6><?php } ?>
								<h5><span style="color:#7f7f7f;">Latest Educational Institutions and Educational Qualifications:</span> <?php echo $last_ins; ?></h5>


								<h5><span style="color:#7f7f7f;">Voter Registration No:</span> <?php echo $nid; ?></h5>

								<h5><span style="color:#7f7f7f;">Like Male / Female :</span> <?php echo $about_her; ?></h5>

								<h5><span style="color:#7f7f7f;">About me:</span> <?php echo $about_her; ?></h5>


							</div>
						</div>
					<?php
					}
					?>
				</div>

			</div>
			<script type="text/javascript">
				$(document).ready(function() {
					$("#bio_form").submit(function() {
						//alert("Hello adil");
						var full_name = $("#full_name").val();
						var father_name = $("#father_name").val();
						var father_work = $("#father_work").val();
						var mother_name = $("#mother_name").val();
						var mother_work = $("#mother_work").val();
						var family_member_no = $("#family_member_no").val();
						var birthday = $("#birthday").val();

						var age = $("#age").val();
						var gender = $("input[type='radio'].gender:checked").val();
						var weight = $("#weight").val();

						var height = $("#height").val();

						var body_color = $("input[type='radio'].body_color:checked").val();
						var blood = $("input[type='radio'].blood:checked").val();

						var religion = $("input[type='radio'].religion:checked").val();
						var occupasion = $("#occupasion").val();
						var mobile = $("#mobile").val();
						var gmail = $("#gmail").val();
						var abroad = $("input[type='radio'].where:checked").val();

						var m_stat = $("input[type='radio'].m_stat:checked").val();
						var smoking = $("input[type='radio'].smoking:checked").val();

						var protibondhi = $("input[type='radio'].protibondhi:checked").val();
						var cur_address = $("#cur_address").val();
						var per_address = $("#per_address").val();
						var jsc = $("#jsc").val();
						var jsc_year = $("#jsc_year").val();
						var jsc_board = $("#jsc_board").val();
						var ssc = $("#ssc").val();
						var ssc_year = $("#ssc_year").val();
						var ssc_board = $("#ssc_board").val();
						var hsc = $("#hsc").val();
						var hsc_year = $("#hsc_year").val();
						var hsc_board = $("#hsc_board").val();
						var bsc = $("#bsc").val();
						var bsc_year = $("#bsc_year").val();
						var msc = $("#msc").val();
						var msc_year = $("#msc_year").val();
						var nid = $("#nid").val();
						var last_ins = $("#last_ins").val();
						var about_me = $("#about_me").val();
						var about_her = $("#about_her").val();

						var datastring = 'full_name=' + full_name + '&father_name=' + father_name + '&father_work=' + father_work + '&mother_name=' + mother_name + '&mother_work=' + mother_work + '&family_member_no=' + family_member_no + '&birthday=' + birthday + '&age=' + age + '&gender=' + gender + '&weight=' + weight + '&height=' + height + '&body_color=' + body_color + '&blood=' + blood + '&religion=' + religion + '&occupasion=' + occupasion + '&mobile=' + mobile + '&gmail=' + gmail + '&m_stat=' + m_stat + '&smoking=' + smoking + '&protibondhi=' + protibondhi + '&abroad=' + abroad + '&cur_address=' + cur_address + '&per_address=' + per_address + '&jsc=' + jsc + '&jsc_board=' + jsc_board + '&jsc_year=' + jsc_year + '&ssc=' + ssc + '&ssc_board=' + ssc_board + '&ssc_year=' + ssc_year + '&hsc=' + hsc + '&hsc_board=' + hsc_board + '&hsc_year=' + hsc_year + '&bsc=' + bsc + '&bsc_year=' + bsc_year + '&msc=' + msc + '&msc_year=' + msc_year + '&last_ins=' + last_ins + '&nid=' + nid + '&about_me=' + about_me + '&about_her=' + about_her;

						//alert(datastring);

						$.ajax({
							type: "post",
							url: "biodatasubmit.php",
							data: datastring,

							cache: false,
							success: function(data) {

								$('#success').html(data);
								setTimeout(function() {
									window.location.href = 'profile.php?us1031gdh312k=<?php echo $user_id; ?>'
								}, 1800);
							}

						});
						return false;

					});

				});
			</script>
			<div class="col-md-2" style="margin-top:40px;  background: #fff; border-top: 25px solid #683193; padding: 10px 15px; border-radius: 5px; box-shadow: 0px 6px 14px 0px rgba(0,0,0,0.15); max-height: 500px; overflow-y: scroll; position: relative;">
				<h3 style="color: #ed018c;">Members:</h3>
				<div id="search_member" style=" background: #f9f9f9; padding: 5px 0px; margin-top: -10px; margin-left: -5px; margin-right: -5px;">

					<form method="post" id="search_form">
						<input type="text" name="" id="search_key" placeholder="Search..." class="form-control">

					</form>
					<div id="search_result" style="padding: 2px 5px;">

					</div>

				</div>
				<script type="text/javascript">
					var globalTimeout = null;
					$(document).ready(function() {
						$('#search_key').keyup(function() {
							if (globalTimeout != null) {
								clearTimeout(globalTimeout);
							}
							globalTimeout = setTimeout(function() {
								globalTimeout = null;

								var search = $('#search_key').val();
								$.ajax({
									url: 'p.php',
									data: {
										search: search
									},
									type: 'POST',
									success: function(data) {
										if (!data.error) {
											$('#search_result').html(data);
											if (search)
												$('#search_result').highlight(search);
										}
									}
								});

							}, 200);
						});
					});


					jQuery.fn.highlight = function(pat) {
						function innerHighlight(node, pat) {
							var skip = 0;
							if (node.nodeType == 3) {
								var pos = node.data.toUpperCase().indexOf(pat);
								if (pos >= 0) {
									var spannode = document.createElement('span');
									spannode.className = 'highlight';
									var middlebit = node.splitText(pos);
									var endbit = middlebit.splitText(pat.length);
									var middleclone = middlebit.cloneNode(true);
									spannode.appendChild(middleclone);
									middlebit.parentNode.replaceChild(spannode, middlebit);
									skip = 1;
								}
							} else if (node.nodeType == 1 && node.childNodes && !/(script|style)/i.test(node.tagName)) {
								for (var i = 0; i < node.childNodes.length; ++i) {
									i += innerHighlight(node.childNodes[i], pat);
								}
							}
							return skip;
						}
						return this.each(function() {
							innerHighlight(this, pat.toUpperCase());
						});
					};

					jQuery.fn.removeHighlight = function() {
						function newNormalize(node) {
							for (var i = 0, children = node.childNodes, nodeCount = children.length; i < nodeCount; i++) {
								var child = children[i];
								if (child.nodeType == 1) {
									newNormalize(child);
									continue;
								}
								if (child.nodeType != 3) {
									continue;
								}
								var next = child.nextSibling;
								if (next == null || next.nodeType != 3) {
									continue;
								}
								var combined_text = child.nodeValue + next.nodeValue;
								new_node = node.ownerDocument.createTextNode(combined_text);
								node.insertBefore(new_node, child);
								node.removeChild(child);
								node.removeChild(next);
								i--;
								nodeCount--;
							}
						}

						return this.find("span.highlight").each(function() {
							var thisParent = this.parentNode;
							thisParent.replaceChild(this.firstChild, this);
							newNormalize(thisParent);
						}).end();
					};

					function _(el) {
						return document.getElementById(el);
					}

					function uploadFile() {
						var file = _("file1").files[0];
						var name = document.getElementById("nam").value;
						var type = document.getElementById("typ").value;
						// alert(file.name+" | "+file.size+" | "+file.type);
						var formdata = new FormData();
						formdata.append("file1", file);
						formdata.append("namme", name);
						formdata.append("typee", type);

						var ajax = new XMLHttpRequest();
						ajax.upload.addEventListener("progress", progressHandler, false);
						ajax.addEventListener("load", completeHandler, false);
						ajax.addEventListener("error", errorHandler, false);
						ajax.addEventListener("abort", abortHandler, false);
						ajax.open("POST", "formwork.php");
						ajax.send(formdata);

					}

					function progressHandler(event) {
						_("loaded_n_total").innerHTML = "Uploaded " + event.loaded + " bytes of " + event.total;
						var percent = (event.loaded / event.total) * 100;
						_("progressBar").value = Math.round(percent);
						_("status").innerHTML = Math.round(percent) + "% uploaded... please wait";
					}

					function completeHandler(event) {
						_("status").innerHTML = event.target.responseText;
						_("progressBar").value = 0;
					}

					function errorHandler(event) {
						_("status").innerHTML = "Upload Failed";
					}

					function abortHandler(event) {
						_("status").innerHTML = "Upload Aborted";
					}
				</script>
				<?php
				$qq = "SELECT * FROM members ORDER BY id DESC;";
				$rr = mysqli_query($con, $qq);
				if (mysqli_num_rows($rr) > 0) {
					while ($rw = mysqli_fetch_array($rr)) {
						$name = $rw['fullname'];
						$us_id = $rw['id'];
						$mail = $rw['mail'];
						if ($mail != $user && $mail != "admin@admin.com") {

				?>
							<a style="text-decoration: none;" href="profile.php?us1031gdh312k=<?php echo $us_id; ?>">
								<h5 style="color: #7f7f7f;"><?php echo $name ?></h5>
							</a>

				<?php
						}
					}
				}
				?>

			</div>
		</div>
		<div id="newmodal" class="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title" style="color: #FF8D8D; margin-left: 15px; " id="exampleModalLabel">Welcome</h3>

					</div>
					<div class="modal-body" style="padding:0px 30px; padding-bottom: 20px;">
						<h4 style="text-align: center;">Thanks for registering</h4>
						<h5 style="text-align: center;">Fill out your biodata</h5>
						<center><button id="show_bio" type="button" class="btn btn-infos form-control" style="font-family: 'Poppins';">OK<i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></center>

					</div>
				</div>
			</div>
		</div>

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
		<div id="uploadimageModal2" class="modal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" style="padding: 20px 30px;">

					<h3 class="" style="color: #FF8D8D; text-align:center;">Welcome</h3>

					<h4 class="" style="color: #7f7f7f; text-align:center; "><?php echo $name; ?></h4>

					<h4 style="text-align: center; color: #5BBC2E;">Thanks for registering</h4>
					<h5 style="text-align: center;">Fill out your biodata</h5>


					<br>


					<a href="#bio"><button id="pops" class="btn btn-infos form-control">OK</button></a>



				</div>
			</div>
		</div>

		<script type="text/javascript">
			$('#pops').click(function() {
				$('#uploadimageModal2').modal('hide');
				$('#bio').show();

			});
			/* For Loading Data 
			  function ajax1(){
			    var req = new XMLHttpRequest();
			    req.onreadystatechange = function(){
			        if(req.readyState == 4 && req.status == 200){
			            document.getElementById('post_load1').innerHTML = req.responseText;

			        }
			    }
			    req.open('POST','post_load.php',true);
			    req.send();
			  }

			  setInterval(function(){ajax1()},2200);*/
		</script>
		<script type="text/javascript">
			$('#bio').hide();
			$('#show_bio').click(function() {
				$('#bio').show();
			});
			$('#close').click(function() {
				$('#bio').hide();
			});
		</script>
		<?php
		if (isset($_SESSION['user'])) {
			//echo $_SESSION['user'];

		}
		?>
		<script type="text/javascript">
			var img;
			$(document).ready(function() {
				$("#submit_post").click(function() {
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
						success: function(JSONObject) {
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

		<?php

		?>
		<div style="position: absolute;  bottom: 0; width: 100%; height: 10px;">
			<div style="margin-top: 50px; background-color: white;  background-image: url('img/f.png'); background-size: 100% 100%; padding-bottom: 10px; box-shadow: 0 -5px 8px -5px rgba(0,0,0,0.2); ">
				<div style="width: 80%; margin: 0 auto; padding: 10px;" class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<h5 style="color: #662e91; text-align: center;">Contact Info:</h5>
						<h6 style="color: #7f7f7f; text-align: center;">Email: MarriageCenter@gmail.com</h6>
						<h6 style="color: #7f7f7f; text-align: center;">Facebook: <small><a href="https://www.facebook.com">https://www.facebook.com</a></small></h6>
						<h6 style="color: #7f7f7f; text-align: center;">9 AM - 12 PM, Saturday - Friday</h6>
					</div>
					<div class="col-md-4">
						<h5 style="color: #662e91; text-align: center;">Support:</h5>
						<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;" href="faq.php">FAQ</a></h6>
						<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;" href="terms.php">Terms of Services</a></h6>
						<h6 style="color: #7f7f7f; text-align: center;"><a style="text-decoration: none;" href="services.php">Privacy Policy</h6>
					</div>
				</div>
				<center><button class="btn btn-info">Contact Us</button></center>
			</div>
			<div class="row" style=" background: rgb(237,6,143); /* Old 	browsers */background: -moz-linear-gradient(-45deg, rgba(237,6,143,1) 0%, rgba(169,228,247,1) 100%); /* 			FF3.6-15 */background: -webkit-linear-gradient(-45deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* 		Chrome10-25,Safari5.1-6 */background: linear-gradient(135deg, rgba(237,6,143,1) 0%,rgba(169,228,247,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0fb4e7', endColorstr='#a9e4f7',GradientType=1 ); /* IE6-9 fallback on horizontal 		gradient */ width: 100%; margin: 0; padding-top: 5px;">
				<div class="col-md-1"></div>
				<div class="flex-grow-1"></div>
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
		$(document).ready(function() {
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
					height: 405
				}
			});

			$('#upload_image').on('change', function() {
				var reader = new FileReader();
				reader.onload = function(event) {
					$image_crop.croppie('bind', {
						url: event.target.result
					}).then(function() {
						console.log('jQuery bind complete');
					});
				}
				reader.readAsDataURL(this.files[0]);
				$('#uploadimageModal').modal('show');
			});

			$('.crop_image').click(function(event) {
				$image_crop.croppie('result', {
					type: 'canvas',
					size: 'viewport'
				}).then(function(response) {
					$.ajax({
						url: "dpupload.php",
						type: "POST",

						data: {
							"image": response,
							"name": name
						},
						success: function(data) {
							$('#uploadimageModal').modal('hide');
							setTimeout(function() {
								window.location.href = 'profile.php?us1031gdh312k=<?php echo $user_id; ?>'
							}, 1000);


						}
					});
				})
			});

		});

		function openModal() {

			$('#log').modal('show');
		}
	</script>

</body>

</html>