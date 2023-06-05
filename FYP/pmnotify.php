<?php
	session_start();
	require_once('db_connect.php');
	$user = $_SESSION['user']; 
	$qr = "SELECT * FROM pm WHERE receiver = '$user' AND seen = '0';";
	$rn = mysqli_query($con,$qr);
	$no = mysqli_num_rows($rn);

?>
<?php if($no>0)echo $no;?>