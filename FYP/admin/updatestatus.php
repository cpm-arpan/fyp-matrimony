
<?php
session_start();

require_once('connect.php');



                                                              $id = $_GET['id'];

   $sql = "UPDATE payment SET approvestatus=2 where id='$id'";
;
                              $query=$conn->query($sql);
                           
    
    echo "<script>alert('Declined Status successfully.');</script>";
    echo "<script>document.location='view_payment.php'
</script>";
 
?>