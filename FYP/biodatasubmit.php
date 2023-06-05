<?php
	session_start();
	require_once('db_connect.php');
	$user = $_SESSION['user'];
	$full_name = $_POST['full_name'];
	$father_name = $_POST['father_name'];
	$father_work = $_POST['father_work'];
	$mother_name = $_POST['mother_name'];
	$mother_work = $_POST['mother_work'];
	$family_member_no= $_POST['family_member_no'];
	$birthday = $_POST['birthday'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$weight = $_POST['weight'];
	$height = $_POST['height'];
	$body_color = $_POST['body_color'];
	$blood = $_POST['blood'];
	$religion = $_POST['religion'];
	$occupasion = $_POST['occupasion'];
	$mobile = $_POST['mobile'];
	$gmail = $_POST['gmail'];
	$m_stat = $_POST['m_stat'];
	$smoking = $_POST['smoking'];
	$protibondhi = $_POST['protibondhi'];

	
	$abroad = $_POST['abroad'];
	$cur_address = $_POST['cur_address'];
	$per_address = $_POST['per_address'];
	
	$jsc = $_POST['jsc'];
	$jsc_board = $_POST['jsc_board'];
	$jsc_year = $_POST['jsc_year'];
	
	$ssc = $_POST['ssc'];
	$ssc_board = $_POST['ssc_board'];
	$ssc_year = $_POST['ssc_year'];
	$hsc = $_POST['hsc'];
	$hsc_board = $_POST['hsc_board'];
	$hsc_year = $_POST['hsc_year'];
	
	$bsc = $_POST['bsc'];
	$bsc_year = $_POST['bsc_year'];

	$msc = $_POST['msc'];
	$msc_year = $_POST['msc_year'];

	$last_ins = $_POST['last_ins'];
	$nid = $_POST['nid'];

	$about_me = $_POST['about_me'];
	$about_her = $_POST['about_her'];
	

	$query = mysqli_query($con, "SELECT * FROM biodata WHERE user = '$user'");


	if(mysqli_num_rows($query)>0){

		
		$qr = "UPDATE `biodata` SET `name` = '$full_name', `father_name` = '$father_name', `father_work` = '$father_work', `mother_name` = '$mother_name', `mother_work` = '$mother_work', `family_member` = '$family_member_no', `bday` = '$birthday', `age` = '$age', `gender` = '$gender', `weight` = '$weight', `height` = '$height', `body_color` = '$body_color', `blood_group` = '$blood', `religion` = '$religion', `occupasion` = '$occupasion', `mobile` = '$mobile', `email` = '$gmail', `m_stat` = '$m_stat', `smoking` = '$smoking', `physical_disability` = '$protibondhi', `abroad_or_not` = '$abroad', `cur_address` = '$cur_address', `per_address` = '$per_address', `jsc` = '$jsc', `jsc_board` = '$jsc_board', `jsc_year` = '$jsc_year', `ssc` = '$ssc', `ssc_board` = '$ssc_board', `ssc_year` = '$ssc_year', `hsc` = '$hsc', `hsc_board` = '$hsc_board', `hsc_year` = '$hsc_year', `bsc` = '$bsc', `bsc_year` = '$bsc_year', `msc` = '$msc', `msc_year` = '$msc_year', `last_ins` = '$last_ins', `nid` = '$nid', `about_me` = '$about_me', `about_her` = '$about_her' WHERE `biodata`.`user` = '$user'";
		
		$rn = mysqli_query($con,$qr);
		if(!empty($full_name)){
			$qr2 = mysqli_query($con, "UPDATE `tipshoi` SET `name` = '$full_name', `gender` = '$gender' WHERE `tipshoi`.`mail` = '$user';");
		}
	}
	else{ 
		$qr = "INSERT INTO `biodata` (`id`, `user`, `name`, `father_name`, `father_work`, `mother_name`, `mother_work`, `family_member`, `bday`, `age`, `gender`, `weight`, `height`, `body_color`, `blood_group`, `religion`, `occupasion`, `mobile`, `email`, `m_stat`, `smoking`, `physical_disability`, `abroad_or_not`, `cur_address`, `per_address`, `jsc`, `jsc_board`, `jsc_year`, `ssc`, `ssc_board`, `ssc_year`, `hsc`, `hsc_board`, `hsc_year`, `bsc`, `bsc_year`, `msc`, `msc_year`, `last_ins`, `nid`, `about_me`, `about_her`, `biodata_soft`) VALUES (NULL, '$user', '$full_name', '$father_name', '$father_work', '$mother_name', '$mother_work', '$family_member_no', '$birthday', '$age', '$gender', '$weight', '$height', '$body_color', '$blood', '$religion', '$occupasion', '$mobile', '$gmail', '$m_stat', '$smoking', '$protibondhi', '$abroad', '$cur_address', '$per_address', '$jsc', '$jsc_board', '$jsc_year', '$ssc', '$ssc_board', '$ssc_year', '$hsc', '$hsc_board', '$hsc_year', '$bsc', '$bsc_year', '$msc', '$msc_year', '$last_ins', '$nid', '$about_me', '$about_her', '');";
		$rn = mysqli_query($con,$qr);
		if(!empty($full_name)){
			$qr2 = mysqli_query($con, "UPDATE `tipshoi` SET `name` = '$full_name', `gender` = '$gender' WHERE `tipshoi`.`mail` = '$user';");
		}
	}
	if($rn){
		echo "<h5 style='color:green; padding:10px;'>Biodata updated successfully</h5>";
	}
	else{
		echo "<h5 style='color:red; padding:10px;'>Sorry, the biodata update was not successful. Repeat for a while.</h5>";	
	}

	