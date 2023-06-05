<?php
	require_once('db_connect.php');
	
//upload.php
	$ac = 0;
	if(isset($_POST['name11']) && isset($_POST['name22']) && isset($_POST['title'])){
		
		$data1=mysqli_real_escape_string($con,$_POST['name11']);
		$data2=mysqli_real_escape_string($con,$_POST['name22']);
		$title = $_POST['title'];
		$q2 = "SELECT * FROM goppo WHERE user = '$data2';";
		$r2 = mysqli_query($con,$q2);
		$val = mysqli_num_rows($r2);

		$q1 = "SELECT * FROM flag WHERE fl = '1';";
		$r1 = mysqli_query($con, $q1);
		if(mysqli_num_rows($r1)>0){
			$imageName = $data2.'_'.$val.'.png';
			$imageNamex = $data2.'.png';
			copy('img/'.$imageNamex, 'image/'.$imageName);
			$path = 'img/'.$imageNamex;
			unlink($path);
		}
		else{
			$imageName = "";
		}
		$qrx = "UPDATE `flag` SET `fl` = '0' WHERE `flag`.`id` = 0;";
		$rnx = mysqli_query($con,$qrx);

		$qr = "INSERT INTO `goppo` (`id`,`title`, `content`, `image`, `user`, `time`) VALUES (NULL, '$title','$data1', '$imageName', '$data2',NOW());";
		
		$rn = mysqli_query($con,$qr);
		if($rn){
			$ac = 1;
			$msg = "<h5 style='color:green;'>Your post has been published.</h5>";
		}
		else{	
			$msg = "<h5 style='color:red;'>Sorry! Some Error occured, Try posting again. ".$qr."</h5>";
		}
		$arr = array('a' => 'Nakib', 'b' => $ac, 'c' => $msg, 'd' => $data1, 'e' => 5);

		echo json_encode($arr);
	}
	$imageName = "";
	if(isset($_POST["image"]))
	{
		$data = $_POST["image"];
		$name = $_POST["name"];
		$image_array_1 = explode(";", $data);

		$image_array_2 = explode(",", $image_array_1[1]);


		// echo exec('whoami');
		$data = base64_decode($image_array_2[1]);
		$val = "1";
		$imageName = $name .'.png';
		
		$qr = "UPDATE `flag` SET `fl` = '1' WHERE `flag`.`id` = 0;";
		$rn = mysqli_query($con,$qr);

		file_put_contents("img/".$imageName, $data);

		echo  '<img src="img/'.$imageName.'" class="img-thumbnail" width="250" />';
		/*$arr = array('a' => 'Nakib', 'b' => $imageName, 'c' => $msg, 'd' => $data1, 'e' => $error);*/

		//echo json_encode($arr);

	}
	
	
?>