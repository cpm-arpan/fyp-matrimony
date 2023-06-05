<?php
	session_start();
	require_once('db_connect.php');
	$user = $_SESSION['user']; 
	$qr = "SELECT * FROM comment WHERE poster = '$user' AND seen = '0' AND commenter != poster";
	$rn = mysqli_query($con,$qr);
	$no = mysqli_num_rows($rn);
	$no2=0;
	$run = mysqli_query($con, "SELECT * FROM following WHERE user = '$user' ORDER BY id DESC LIMIT 1");
	if(mysqli_num_rows($run)>0){
		$row = mysqli_fetch_array($run);
		$post_id = $row['post_id'];
		$com_id = $row['comment_id'];
		$run2 = mysqli_query($con, "SELECT * FROM comment WHERE post_id = '$post_id' ORDER BY com_id DESC");
		$no2 = 0;
		while($row2 = mysqli_fetch_array($run2)){
			$com_id2 = $row2['com_id'];
			if($com_id2 > $com_id){
				$no2++;
			}
		}
	}
?>
<?php if($no>0)echo $no;
	
?>