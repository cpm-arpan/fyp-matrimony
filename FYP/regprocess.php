<?php
	session_start();
	require_once('db_connect.php');


	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$name=test_input($_POST['name11']);
	$gender=test_input($_POST['name22']);
	$mail=test_input($_POST['name33']);
	$pass=test_input($_POST['name44']);
	$confirm_new = hash('sha256',$_POST['name44']);

	function createSalt()
{
    return '2123293dsj2hu2nikhiljdsd';
}
$salt = createSalt();
$confirm =  hash('sha256', $salt . $confirm_new);
 $current_date = date('Y-m-d');



	$problem = 0;

	if (preg_match("/(\%27)|(\')|(\-\-)|(\%23)|(#)/i",$name)) {
		$problem = 1;
	}
	else if (preg_match("/[1-9][0-9]*|0/",$name)) {
		$problem = 1;
	}
	if($problem == 0){
		$ac = 0;
		$qrc = "SELECT * FROM members WHERE email = '$mail';";
		$rn = mysqli_query($con,$qrc);
		if(mysqli_num_rows($rn)>0){
			$msg = "<h6 style='color:red;'>Sorry, A member is already registered with this email id!</h6>";
			$ac = 0;
		}
		else{
			
			$qr1 = "INSERT INTO `tipshoi` (`id`, `name`, `gender`, `mail`) VALUES (NULL, '$name', '$gender', '$mail');";
				$rn1 = mysqli_query($con,$qr1);		

			  $last_id = $con->insert_id;

			$qr2 = "INSERT INTO `members` (`id`,`fullname`,`gender`,`email`, `password`, `currentdate`,`member_id`) VALUES (NULL, '$name', '$gender','$mail','$confirm_new','$current_date','$last_id');";
			$rn2 = mysqli_query($con,$qr2);
			$rn3 = mysqli_query($con, "INSERT INTO `biodatapopup` (`user`, `seen`) VALUES ('$mail', '0');");
			if($rn1 && $rn2){
				$msg = "<h5 style='color:green;'>Registration Succesful!</h5>";
				$ac = 1;
				$_SESSION['user']=$mail;
			}		
			else{
				$msg = "<h6 style='color:red;'>Some Error Occured. Registration not Successful!</h6>";
				$ac = 2;
			}
		}
	}
?>
<?php
	$arr = array('a' => 'Nakib', 'b' => $ac, 'c' => $msg, 'd' => $mail, 'e' => 5);

	echo json_encode($arr);
?>