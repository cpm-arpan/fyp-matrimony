<?php
	session_start();
	require_once('db_connect.php');
	
//dpupload.php
	
	$imageName = "";
	if(isset($_POST["image"]))
	{
		$data = $_POST["image"];
		$name = $_POST["name"];
		$image_array_1 = explode(";", $data);

		$image_array_2 = explode(",", $image_array_1[1]);


		$data = base64_decode($image_array_2[1]);
		
		
		$cq = "SELECT * FROM dp WHERE user = '$name';";
		$cr = mysqli_query($con,$cq);
		if(mysqli_num_rows($cr)>0){
			$row = mysqli_fetch_array($cr);
			$val = $row['num'];
			$imageName = $name .'_dp'.$val.'.png';
			$val++;

			$path = 'dp/'.$imageName;
			unlink($path);
			$imageName = $name .'_dp'.$val.'.png';

			file_put_contents("dp/".$imageName, $data);
			$qr = "UPDATE `dp` SET `dp` = '$imageName', `num` = '$val' WHERE `dp`.`user` = '$name';";
			$rn = mysqli_query($con,$qr);
		}
		else{
			$val = 0;
			$imageName = $name .'_dp'.$val.'.png';
			$qr = "INSERT INTO `dp` (`id`, `user`, `dp`, `num`) VALUES (NULL, '$name', '$imageName', '$val');";
			$rn = mysqli_query($con,$qr);
			file_put_contents("dp/".$imageName, $data);
		}	

		/*$arr = array('a' => 'Nakib', 'b' => $imageName, 'c' => $msg, 'd' => $data1, 'e' => $error);*/

		//echo json_encode($arr);

	}
	
	
?>