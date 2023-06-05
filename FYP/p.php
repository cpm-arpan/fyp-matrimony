<?php
	session_start();
	require_once('db_connect.php');
	$user = $_SESSION['user'];
	$search = $_POST['search'];
	if(!empty($search)){
		$query = "SELECT * FROM tipshoi WHERE name LIKE '$search%';";
		$run = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($run)){
			$name = $row['name'];
			$us_id = $row['id'];
			$mail = $row['mail'];
			if($mail != $user && $mail!="admin@admin.com"){
?>

					<a style="text-decoration: none;" href="profile.php?us1031gdh312k=<?php echo $us_id;?>"><h5 style="color: #662e91;"><?php echo $name?></h5></a>



<?php
			}
		}	
	}
	

?>