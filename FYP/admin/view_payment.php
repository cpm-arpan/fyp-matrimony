
<?php include('head.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');

if(isset($_GET['id']))
{ ?>
<div class="popup popup--icon -question js_question-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Sure
    </h1>
    <p>Are You Sure To Delete This Record?</p>
    <p>
      <a href="del_user.php?id=<?php echo $_GET['id']; ?>" class="button button--success" data-for="js_success-popup">Yes</a>
      <a href="view_user.php" class="button button--error" data-for="js_success-popup">No</a>
    </p>
  </div>
</div>
<?php } ?>



  
        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> View Payment</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Payment</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                 <div class="card">
                            <div class="card-body">
                              
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Full Name</th>
                                                <th>Payment Date</th>
                                                 <th>Payment Method</th>
                                                 <th>Description</th>
                                                 <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php 
                                    include 'connect.php';
                                    $sql = "SELECT * FROM payment";
                                     $result = $conn->query($sql);

                                   while($row = $result->fetch_assoc()) { 
                                      ?>
                                            <tr>
                                                <td>

<?php $sql1 = "SELECT * FROM members where member_id='".$row['member_id']."'";
      $result1 = $conn->query($sql1);
      $row1 = $result1->fetch_assoc();?>


                                                  <?php echo $row1['fullname']; ?></td>
                                                <td><?php echo $row['currentdate']; ?></td>
                                                <td><?php echo $row['PaymentMethod']; ?></td>
                                                <td><?php echo $row['description']; ?></td>
                                                <td><?php 
                                                                           
                                                            if($row['approvestatus']=='0')
                                                                            {
                                                                           
                                                                           ?>
                                                              <a href="updatestatus1.php?id=<?=$row['id'] ;?>&&mid=<?=$row['member_id'] ;?>" >
                                                                       <button class="btn btn-mat waves-effect waves-light btn-primary " name="update"> Approve Status</button></a>
                                                                       <a href="updatestatus.php?id=<?=$row['id'] ;?>">
                                                                       <button class="btn btn-mat waves-effect waves-light btn-primary " name="update"> Decline Status</button></a>
                                                                       
                                                                       <?php } ?>


                                                                <?php
                                                               

                                                               if($row['approvestatus']=='1')
                                                                            
                                                                           {
                                                                           ?>
                                                                          <a href="updatestatusbann.php?id=<?=$id ;?>">
                                                                       
                                                                       <button class="btn btn-mat waves-effect waves-light btn-primary "  readonly>Approved</button></a>
                                                                          <?php } ?>
                                                                            <?php
                                                               

                                                               if($row['approvestatus']=='2')
                                                                            
                                                                           {
                                                                           ?>
                                                                          
                                                                       <button class="btn btn-mat waves-effect waves-light btn-primary "  readonly>Declined</button>
                                                                          <?php } ?>
                                                                
                                                                

</td>
                                                </tr>
                                          <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
               
                

                
           

<?php include('footer.php');?>

<link rel="stylesheet" href="popup_style.css">
<?php if(!empty($_SESSION['success'])) {  ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Success 
    </h1>
    <p><?php echo $_SESSION['success']; ?></p>
    <p>
      <button class="button button--success" data-for="js_success-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["success"]);  
} ?>
<?php if(!empty($_SESSION['error'])) {  ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
  <div class="popup__background"></div>
  <div class="popup__content">
    <h3 class="popup__content__title">
      Error 
    </h1>
    <p><?php echo $_SESSION['error']; ?></p>
    <p>
      <button class="button button--error" data-for="js_error-popup">Close</button>
    </p>
  </div>
</div>
<?php unset($_SESSION["error"]);  } ?>
    <script>
      var addButtonTrigger = function addButtonTrigger(el) {
  el.addEventListener('click', function () {
    var popupEl = document.querySelector('.' + el.dataset.for);
    popupEl.classList.toggle('popup--visible');
  });
};

Array.from(document.querySelectorAll('button[data-for]')).
forEach(addButtonTrigger);
    </script>