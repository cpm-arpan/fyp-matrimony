<?php  
    session_start();
    require_once('db_connect.php');
    $receiver_user=$_GET['receiver'];
    $rname = mysqli_query($con, "SELECT * FROM tipshoi WHERE id = '$receiver_user';");
    $row = mysqli_fetch_array($rname);
    $receiver_name = $row['name'];
    $receiver_mail = $row['mail'];
    $user = $_SESSION['user'];
    $us_name = $_SESSION['sender_name'];
    /*$receiver_user = $_SESSION['receiver_user'];*/
    /*$receiver_name = $_SESSION['receiver_name'];*/
    $m_query = "SELECT * FROM pm WHERE (sender='$user' AND receiver = '$receiver_mail') OR (receiver ='$user' AND sender = '$receiver_mail') ORDER BY timestamp DESC;";
    $m_run = mysqli_query($con, $m_query);
       if(mysqli_num_rows($m_run)>0){
            while($m_row=mysqli_fetch_array($m_run)){
                $message = $m_row['message'];
                $user1 = $m_row['sender'];
                $user2 = $m_row['receiver'];
                $time = $m_row['timestamp'];

                if($user1==$user){





            ?>
            
                <li class="chat1"><h5 ><?php echo $us_name; ?>: <b><?php echo $message; ?></b></h5></li>
                <?php  
                        }
                        else{
                ?>
                <li class="chat2"><h5 ><?php echo $receiver_name ; ?>: <b><?php echo $message; ?></b></h5></li>
                <?php
                            
                        }

                    }
                }
            ?>