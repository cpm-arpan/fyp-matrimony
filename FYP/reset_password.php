<?php
require_once('db_connect.php');
if (isset($_GET['user']) && isset($_GET['key'])) {

	$user = $_GET['user'];
	$key = $_GET['key'];
	//Created a template
	$sql = "SELECT * FROM forget WHERE mail = ? AND mail_key = ?";
	//Create a prepared statement
	$stmt = mysqli_stmt_init($con);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
		echo "Sql statement failed!";
	} else {
		//bind parameter
		mysqli_stmt_bind_param($stmt, 'ss', $user, $key);
		//run
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		/*}
					/*$rn = mysqli_query($con, "SELECT * FROM tipshoi WHERE gender = '$gender' ORDER BY id DESC");*/
		if (mysqli_num_rows($result) > 0) {

		} else {
			header('Location: index.php');
		}
	}
}
if (isset($_POST['submit'])) {
	$password = $_POST['pass'];
	$conpassword = $_POST['conpass'];
	if ($password == $conpassword) {
		$sql = "UPDATE `members` SET `password` = ? WHERE `members`.`email` = ?";
		$stmt = mysqli_stmt_init($con);
		if (!mysqli_stmt_prepare($stmt, $sql)) {
			echo "Sql statement failed!";
		} else {
			//bind parameter
			mysqli_stmt_bind_param($stmt, 'ss', $password, $user);
			//run
			mysqli_stmt_execute($stmt);

		}
	} else {
		$msg = "Both password should match please try again.";
	}


}
?>
<!DOCTYPE html>
<html>

<head>
	<title>MarriageCenter</title>


	<link rel="icon" href="img/Logos.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" language="javascript" src="js/bal.min.js"></script>
</head>

<body style="background: #f9f9f9;">
	<div
		style="background: white; width: 340px; margin: 0 auto; margin-top: 10%; padding: 20px; box-shadow: 0 8px 16px rgba(0,0,0,0.25); border-radius: 10px;">

		<h5 style="color: #7f7f7f; font-weight: bold;"></h5>
		<br>
		<form method="post" action="">
			<h5>Type new password:</h5>
			<input type="password" name="pass" placeholder="Type new password" class="form-control">
			<br>
			<h5>Re-type new password:</h5>
			<input type="password" name="conpass" placeholder="Re-type new password" class="form-control">
			<br>
			<button type="submit" name="submit" class="btn btn-danger form-control">Change Password</button>

		</form>
		<div id="msg">
			<?php if (isset($msg)) {
				echo $msg;
			} ?>
		</div>
	</div>
</body>

</html>