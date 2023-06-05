<?php
session_start();
require_once('../db_connect.php');

//include("config.php");
$sql = "SELECT * FROM payment WHERE member_id='" . $_SESSION['id'] . "' and approvestatus='1'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result);
$enddate = $row['enddate'];
$startdate = $row['startdate'];
$currentdate = date('Y-m-d');
$count = mysqli_num_rows($result);

if ($count == 1 && $currentdate > $enddate) {
	echo "<script>alert('Your Membership Plan is Expire');</script>"; ?>
	<script>
		window.location = "../index.php";
	</script>

<?php } else {

	?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>MarriageCenter</title>

		<link rel="icon" href="../img/Logos.png">
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Monda" rel="stylesheet">

		<script src="js/jquery-1.11.0.min.js"></script>
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
		<script src="js/jquery.validate.min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function () {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
				});
				$('.popup-with-zoom-anim').on('click', function (e) {
					$('#signUpForm').find('input[name="Plan"]').val($(this).data("plan"));
					$('#signUpForm').find('input[name="Price"]').val($(this).data("price"));
				});
				$('#signUpForm').validate({
					errorPlacement: function (error, element) {
						if (element.attr('name') == 'Terms') {
							error.insertAfter(element.parent());
						} else {
							error.insertAfter(element);
						}
					}
				});
				if ($('#paypalForm').length > 0) {
					$('#paypalForm').trigger('submit');
				}
			});
		</script>
	</head>

	<body>

		<?php include("header.php"); ?>

		<div class="priceing-table w3l">
			<div class="wrap">
				<h1>Select Plan</h1>
				<h1 style="color:blueviolet; font-size:30px;">Select Membership Plan</h1>
				<div class="priceing-table-main">
					<div class="price-grid">
						<div class="price-block agile">
							<div class="price-gd-top pric-clr1">
								<h4>BRONZE</h4>
								<h3> &#x20b9;1000</h3>
								<h5>1 month</h5>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li>Subscription Period : 30 Days</li>

									</ul>
								</div>
							</div>
							<div class="price-selet pric-sclr1">
								<a class="popup-with-zoom-anim" data-plan="basic" data-price="5.00"
									href="payment.php?days=30 & price=1000">Choose</a>
							</div>
						</div>
					</div>
					<div class="price-grid">
						<div class="price-block agile">
							<div class="price-gd-top pric-clr2">
								<h4>SILVER</h4>

								<h3>&#x20b9;2000</h3>
								<h5>4 month</h5>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li>Subscription Period : 120 Days</li>

									</ul>
								</div>
							</div>
							<div class="price-selet pric-sclr2">
								<a class="popup-with-zoom-anim" data-plan="standart" data-price="10.00"
									href="payment.php?days=120 & price=2000">Choose</a>
							</div>
						</div>
					</div>
					<div class="price-grid wthree">
						<div class="price-block agile">
							<div class="price-gd-top pric-clr3">
								<h4>GOLDEN</h4>
								<h3>&#x20b9;4000</h3>
								<h5>6 month</h5>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li>Subscription Period : 180 Days</li>

									</ul>
								</div>
							</div>
							<div class="price-selet pric-sclr3">
								<a class="popup-with-zoom-anim" data-plan="premium" data-price="20.00"
									href="payment.php?days=180 & price=4000">Choose</a>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
		</div>


		<div id="popup">
			<div id="small-dialog" class="mfp-hide">
				<div class="pop_up">
					<div class="payment-online-form-left">
						<form id="signUpForm" action="#" method="post">
							<input type="hidden" name="Subscribe" value="1">
							<input type="hidden" name="Plan" value="">
							<input type="hidden" name="Price" value="">
							<h4>Sign Up</h4>
							<ul>
								<li><input class="text-box-dark" type="text" placeholder="Name" name="Name" required></li>
								<li><input class="text-box-dark email" type="text" placeholder="Email" name="Email"
										required></li>
								<li><input class="text-box-dark" type="password" placeholder="Password" name="Password"
										required></li>
								<li><input class="text-box-dark" type="text" placeholder="Phone" name="Phone"></li>
							</ul>
							<span class="checkbox1">
								<label class="checkbox"><input type="checkbox" name="Terms" checked="" required><i> </i>I
									Accept Terms.</label>
							</span>
							<ul class="payment-sendbtns">
								<li><input type="submit" value="Submit"></li>
							</ul>
						</form>
					</div>
				</div>
			</div>
		</div>

		<?php include("footer.php"); ?>

	</body>

	</html>
<?php } ?>