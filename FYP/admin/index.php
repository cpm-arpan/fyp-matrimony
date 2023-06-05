<?php include('head.php'); ?>
<?php include('header.php'); ?>

<?php include('sidebar.php'); ?>
<?php //echo  $_SESSION["email"];
date_default_timezone_set('Asia/Kathmandu');
$current_date = date('Y-m-d');

$sql_currency = "select * from manage_website";
$result_currency = $conn->query($sql_currency);
$row_currency = mysqli_fetch_array($result_currency);
?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>



</div>

<?php include('footer.php'); ?>