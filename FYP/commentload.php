<?php
	session_start();
	require_once('db_connect.php');
	$post_id= $_SESSION['post_id'];
	$qr = "SELECT * FROM comment WHERE post_id = '$post_id' ORDER BY com_id ASC;";
	$rn = mysqli_query($con, $qr);
	if(mysqli_num_rows($rn)>0){
		$count = mysqli_num_rows($rn);

		for($i=0;$i<$count;$i++){
			$row = mysqli_fetch_array($rn);

			$commenter = $row['commenter'];
			$comment = nl2br($row['comment']);
			$qx = "SELECT * FROM tipshoi WHERE mail = '$commenter'";
			$rx = mysqli_query($con, $qx);
			$row2 = mysqli_fetch_array($rx);
			$name = $row2['name'];
			$user_id = $row2['id'];

?>
			
			<a href="profile.php?us1031gdh312k=<?php echo $user_id;?>" style="color: black;"><h6 style="font-weight: bold;"><?php echo $name;?></h6></a>
			
			<h6 ><?php echo $comment; ?></h6>
<?php
			if($i < $count-1){
?>
				<hr>

			
<?php
			}
		}
	}
?>