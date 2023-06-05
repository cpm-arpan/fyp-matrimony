
<?php
session_start();

require_once('connect.php');
$sql = "SELECT * FROM payment where member_id='".$_GET['mid']."' and approvestatus='0'";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();
 $days=$row['days'];
 $start_date=date('Y-m-d');
	$end_date=date('Y-m-d',strtotime('+  days'));
	if($days=='30')
{
	$start_date=date('Y-m-d');
	$end_date=date('Y-m-d',strtotime('+30 day'));
}
else if($days=='120')
{
	$start_date=date('Y-m-d');
	$end_date=date('Y-m-d',strtotime('+120 day'));
}
else if($days=='180')
{
	$start_date=date('Y-m-d');
	$end_date=date('Y-m-d',strtotime('+180 day'));
}



                                                              $id = $_GET['id'];

   $sql = "UPDATE payment SET approvestatus=1,startdate='".$start_date."',enddate='".$end_date."' where id='$id'";
                              $query=$conn->query($sql);
                           
    
    echo "<script>alert('Approved Status successfully.');</script>";
    echo "<script>document.location='view_payment.php'
</script>";
 
?>