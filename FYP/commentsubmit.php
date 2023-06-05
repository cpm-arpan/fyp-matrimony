<?php
	session_start();
	require_once('db_connect.php');
	$post_id=$_POST['name11'];
	$commenter=$_POST['name22'];
	$poster=$_POST['name33'];
	$comment=$_POST['name44'];
	$qr = "INSERT INTO `comment` (`com_id`, `post_id`, `commenter`, `poster`,`comment`, `seen`, `time`) VALUES (NULL, '$post_id', '$commenter', '$poster','$comment', '0', NOW());";
	$rn = mysqli_query($con,$qr);

	$rqz = mysqli_query($con,"SELECT * FROM comment ORDER BY com_id DESC;");
	$row= mysqli_fetch_array($rqz);
	$com_id = $row['com_id'];


	if($commenter != $poster){
		$qx = "INSERT INTO `following` (`id`, `post_id`, `comment_id`, `user`) VALUES (NULL, '$post_id', '$com_id', '$commenter');";
		$rx = mysqli_query($con,$qx);
	}

?>