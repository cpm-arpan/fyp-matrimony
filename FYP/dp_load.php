<?php
    session_start();
    require_once('db_connect.php');
    if(isset($_GET['user'])){
        $member = $_GET['user'];
    }
    $cq = "SELECT * FROM dp WHERE user = '$member';";
    $cr = mysqli_query($con,$cq);
    if(mysqli_num_rows($cr)>0){
        $row = mysqli_fetch_array($cr);
        $image = $row['dp'];
?>
        <img src="dp/<?php echo $image;?>" style="width: 320px; margin-top: 13%; margin-left: 30px;"  class="img-thumbnail rounded-circle">
<?php
    }
    else{
?>
        <img src="dp/avatar.png" style="width: 320px; margin-top: 13%; margin-left: 30px;"  class="img-thumbnail rounded-circle">
<?php
    }
?>