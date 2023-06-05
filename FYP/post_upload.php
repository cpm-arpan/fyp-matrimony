<?php
	session_start();
	require_once('db_connect.php');
	
//upload.php
	$ac = 0;
	if(isset($_POST['name11']) && isset($_POST['name22']) && isset($_POST['gender']) && isset($_POST['gender'])){
		
		$data1=$_POST['name11'];
		$data2=$_POST['name22'];
		$gender = $_POST['gender'];
		$hisname = $_POST['hisname'];
		$q2 = "SELECT * FROM posts ORDER BY id DESC Limit 1";
		$r2 = mysqli_query($con,$q2);
		$val = mysqli_num_rows($r2);
		if($val==0){
			$imageName = $data2.'_x'.$val.'.png';	
		}else{
			$row= mysqli_fetch_array($r2);
			$post_id = $row['id'];
			$post_id++;
			$imageName = $data2.'_'.$post_id.'.png';
		}
		
		$imageNamex = $data2.'.png';
		copy('post_temp/'.$imageNamex, 'post/'.$imageName);
		$path = 'post_temp/'.$imageNamex;
		unlink($path);
		
		$qr = "INSERT INTO `posts` (`id`, `name`, `image`, `content`, `gender`, `time`) VALUES (NULL, '$hisname','$imageName', '$data1', '$gender', NOW())";
		$rn = mysqli_query($con,$qr);
		if($rn){
			$ac = 1;
			$msg = "<h5 style='color:green;'>Your post has been published.</h5>";
		}
		else{	
			$msg = "<h5 style='color:red;'>Sorry! Some Error occured, Try posting again....</h5>";
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


		$data = base64_decode($image_array_2[1]);
		$val = "1";
		$imageName = $name .'.png';
		
		
		file_put_contents("post_temp/".$imageName, $data);

		echo  '<img src="post_temp/'.$imageName.'" class="img-thumbnail" width="250" />';
		/*$arr = array('a' => 'Nakib', 'b' => $imageName, 'c' => $msg, 'd' => $data1, 'e' => $error);*/

		//echo json_encode($arr);

	}
	
	
?>