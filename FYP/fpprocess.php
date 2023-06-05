<?php
	require_once('db_connect.php');
	$ac = 0;
	$send = "";
	if(isset($_POST['check'])){

		$check = $_POST['check'];
		
		//Created a template
		$sql = "SELECT * FROM tipshoi WHERE mail = ?";
		//Create a prepared statement
		$stmt = mysqli_stmt_init($con);
		if(!mysqli_stmt_prepare($stmt, $sql)){
			echo "Sql statement failed!";
		}
		else{
			//bind parameter
			mysqli_stmt_bind_param($stmt, 's', $check);
			//run
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
		/*}
		/*$rn = mysqli_query($con, "SELECT * FROM tipshoi WHERE gender = '$gender' ORDER BY id DESC");*/
			if(mysqli_num_rows($result)>0){
				$ac = 1;
				$send = $check;
			}
		}
	}
	$arr = array('a' => $send, 'b' => $ac);

	echo json_encode($arr);
?>