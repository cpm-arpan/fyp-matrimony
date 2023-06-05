<?php
	session_start();
	require_once('db_connect.php');
	$user = $_POST['name11'];
	$receiver_user = $_POST['name22'];
	$message = $_POST['name33'];

	if(isset($_POST['name33'])){
        
        $ins_query="INSERT INTO `pm` (`id`, `sender`, `receiver`, `message`, `seen`, `timestamp`) VALUES (NULL, '$user', '$receiver_user', '$message', '0', NOW());";
        $run = mysqli_query($con,$ins_query);

        $q = "SELECT * FROM pm ORDER BY id DESC LIMIT 1;";
        $r = mysqli_query($con,$q);
        $rw = mysqli_fetch_array($r);
        $m_id = $rw['id'];

        
		
    }
    
?>