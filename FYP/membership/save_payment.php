<?php
session_start();
require_once('../db_connect.php');

$current_date = date('Y-m-d');
 $member_id=$_SESSION['id'];
 $pmethod=$_POST['pmethod'];

$description=$_POST['description'];
$days=$_GET['days'];

                                 

                                    
   $sql = "INSERT INTO `payment`(`member_id`,`PaymentMethod`,`currentdate`,`description`,`days`) VALUES ('$member_id ',' $pmethod','$current_date','$description','$days')";
  /* $sql1="UPDATE payment SET balance= "*/
/*echo $sql;*/
$rn1 = mysqli_query($con,$sql);	
if($rn1==true)
{
echo "<script>alert(' Send Request Successfully');</script>";
    echo "<script>document.location='payment.php'
</script>";	
}
else
{
	echo "<script>alert(' Error While  Adding Payment');</script>";
	echo "<script>document.location='payment.php'
</script>";	

}



  ?>