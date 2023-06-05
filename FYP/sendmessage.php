<?php
require_once('db_connect.php');
if (isset($_POST['check'])) {

	$check = $_POST['check'];

	//Created a template
	$sql = "SELECT * FROM tipshoi WHERE mail = ?";
	//Create a prepared statement
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Sql statement failed!";
	} else {
		//bind parameter
		mysqli_stmt_bind_param($stmt, 's', $check);
		//run
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		/*}
					/*$rn = mysqli_query($con, "SELECT * FROM tipshoi WHERE gender = '$gender' ORDER BY id DESC");*/
		if (mysqli_num_rows($result) > 0) {
			$ac = 1;
			$send = $check;
		}
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

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" language="javascript" src="js/bal.min.js"></script>
</head>

<body style="background: #f9f9f9;">
	<div
		style="background: white; width: 340px; margin: 0 auto; margin-top: 10%; padding: 20px; box-shadow: 0 8px 16px rgba(0,0,0,0.25); border-radius: 10px;">

		<h5 style="color: #662e91">Registrationের সময় যে Email বা মোবাইল নম্বর টি দিয়েছিলেন সেটি লিখুনঃ</h5>

		<form method="post" action="" id="formm">
			<h5>Email / Mobile:</h5>
			<input type="text" required id="check" class="form-control" placeholder="Email/Mobile">
			<br>
			<button type="submit" id="submit" class="btn btn-danger">Submit</button>

		</form>
		<div id="msg">

		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function () {
			$("#formm").submit(function () {
				var flag = 0;
				var pat1 = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);
				var pat3 = new RegExp(/^(?:\+88|01)?(?:\d{11}|\d{13})$/);

				var adil = $("#check").val();
				if (pat1.test($("#check").val())) {
					flag = 1;
				}
				else if (pat3.test($("#check").val())) {
					flag = 2;
				}
				else {
					flag = 0;
				}


				var datastring = 'check=' + adil;

				$.ajax({
					type: "post",
					url: "fpprocess.php",
					data: datastring,
					dataType: "json",
					cache: false,
					success: function (JSONObject) {
						var ac = JSONObject.b;
						var send = JSONObject.a;
						if (ac == 1) {
							if (flag == 1) {
								setTimeout(function () { window.location.href = "sendmail.php?sendto=" + send }, 2000);
							}
							else if (flag == 2) {
								setTimeout(function () { window.location.href = "sendmessage.php?sendto=" + send }, 2000);
							}
							$("#msg").html("<h5 style='color:green;'>Account exists.</h5>");
						}
						else {
							$("#msg").html("<h5 style='color:red;'>No account exists with this Email / Mobile!</h5>");
						}
					}

				});
				return false;


			});

		});
	</script>
</body>

</html>