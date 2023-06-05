<?php
session_start();
require_once('db_connect.php');
if (isset($_SESSION['user'])) {
	$user = $_SESSION['user'];
	if ($user == "admin@admin.com") {
		header('Location:index.php');
	}
} else {
	header('Location:index.php');
}
if (isset($_POST['delete'])) {
	$q1 = mysqli_query($con, "DELETE FROM `biodata` WHERE `biodata`.`user` = '$user'");
	$q2 = mysqli_query($con, "DELETE  FROM `comment` WHERE `comment`.`commenter` = '$user'");
	$q3 = mysqli_query($con, "DELETE FROM `dp` WHERE `dp`.`user` = '$user'");
	$q4 = mysqli_query($con, "DELETE FROM `users` WHERE `users`.`yahoo` = '$user'");
	$q5 = mysqli_query($con, "DELETE  FROM `goppo` WHERE `goppo`.`user` = '$user'");
	$q6 = mysqli_query($con, "DELETE  FROM `tipshoi` WHERE `tipshoi`.`mail` = '$user'");
	$q7 = mysqli_query($con, "DELETE  FROM `pm` WHERE `pm`.`sender` = '$user'");
	$q8 = mysqli_query($con, "DELETE  FROM `pm` WHERE `pm`.`receiver` = '$user'");
	header('Location:logout.php');
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
	<style type="text/css">
		body {
			font-family: 'Poppins', sans-serif;
		}
	</style>
</head>

<body>
	<div
		style="width: 50%; margin:0 auto; background: white; border-radius: 5px; margin-top: 100px; padding: 10px; box-shadow: 0px 4px 8px #f2f2f2;">
		<h5>Are you sure you want to delete your account?</h5>
		<h6>Deleting a profile will delete your account, delete all your messages, posts, photos, biodata and you will
			no longer be able to log in with your previous password.</h6>
		<br>
		<form method="post" action="">

			<button type="submit" name="delete" class="btn btn-danger">Delete</button>
		</form>
	</div>
</body>

</html>