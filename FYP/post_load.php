<?php
	session_start();
	require_once('db_connect.php');
	if(isset($_SESSION['user'])){$session = $_SESSION['user'];}
	else{
		$session = "";
	}
	
	$qr = "SELECT * FROM goppo ORDER BY id DESC;";
	$rn = mysqli_query($con, $qr);
	if(mysqli_num_rows($rn)>0){
		while($row = mysqli_fetch_array($rn)){
			$post_id = $row['id'];
			//$content1 = $row['content'];
			$content = mb_substr(nl2br($row['content']), 0, 600);
			$title = $row['title'];
			$image = $row['image'];
			$user = $row['user'];
			$time = strtotime($row['time']);
			$date = date('d / m / Y', $time);
			$time = date('h:i A', $time);

			$qx = "SELECT * FROM tipshoi WHERE mail = '$user'";
			$rx = mysqli_query($con, $qx);
			$row = mysqli_fetch_array($rx);
			$name = $row['name'];
			$user_id = $row['id'] ;
			$rdp = mysqli_query($con, "SELECT * FROM dp where user = '$user'");
			if(mysqli_num_rows($rdp)>0){
				$rww = mysqli_fetch_array($rdp);
				$val = $rww['num'];
				$imageName = $user.'_dp'.$val.'.png';
			}
			else{
				$imageName = 'avatar.png';	
			}

			if(!empty($image)){


			

?>
<div class="b_posts" style="padding-top: 0px; padding-bottom: 1px; ">
	<div class="row" style="background: #f9f9f9; padding: 4px 5px; padding-top: 10px;">
		<div class="col-md-1 dp">
			<img src="dp/<?php echo $imageName;?>" class="rounded-circle" width="45">		
		</div>
		<div class="col-md-8 f_name">
			<h4 style="padding: 5px;"><a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>" style=" color: #4EC5F2;"><?php echo $name;?></a></h4>
		</div>
		<div class="col-md-3 time">
			<h6 style="color: #7f7f7f;"><?php echo $time;?></h6>
			<h6 style="color: #7f7f7f;"><?php echo $date; ?></h6>
		</div>
	</div>

	<div class="row" style="padding: 15px 5px;">
		<div class="col-md-5" >
			<img class="img-thumbnail" src="image/<?php echo $image; ?>" width="320">
		</div>
		<div class="col-md-7" style="padding: 10px;">
			
			<h4 style="color: #7f7f7f; font-weight: bold;">"<?php if(!empty($title)){echo $title;} ?>"</h4>
			
			<h5  id=""><?php echo $content; if(strlen($content)>598){?>
			......<?php }?></h5>
		</div>
	</div>
	<div style="background: #f2f2f2; padding: 10px; border-radius: 10px; width: 100%; margin: 0;" class="btn-group row">
		<div class="col-md-6" style="padding: 0px 10px; margin: 0;">
			<center><a href="comment.php?id=<?php echo $post_id; ?>&title=<?php echo $title;?>" style="text-decoration: none;"><button style="border:none; background: inherit; color: #662e91;"><i class="fa fa-comments" aria-hidden="true"></i> Comment</button></a></center>
		</div>
		<div class="col-md-6" style="padding: 0px 10px; margin: 0;">
			<center><a href="comment.php?id=<?php echo $post_id; ?>&title=<?php echo $title;?>" style="text-decoration: none;"><button style="color: #662e91;border:none; background: inherit;">See more</button></a></center>
		</div>

		
	</div>
</div>
<?php
				if($session == "admin@admin.com"){
				?>	

				<form method="post" action="">
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
					<button type="submit" name="delete" class="btn btn-danger form-control">Delete Post</button>
				</form>
				
				<?php
				}
					
				
				?>
<?php
			}
			else{
?>
<div class="b_posts" style="padding-top: 0px; padding-bottom: 1px; ">
	<div class="row" style="background: #f9f9f9; padding: 4px 5px; padding-top: 10px;">
		<div class="col-md-1 dp">
			<img src="dp/<?php echo $imageName;?>" class="rounded-circle" width="45">		
		</div>
		<div class="col-md-8 f_name">
			<h4 style="padding: 5px;"><a href="profile.php?us1031gdh312k=<?php echo $user_id; ?>" style=" color: #4EC5F2;"><?php echo $name;?></a></h4>
		</div>
		<div class="col-md-3 time">
			<h6 style="color: #7f7f7f;"><?php echo $time;?></h6>
			<h6 style="color: #7f7f7f;"><?php echo $date; ?></h6>
		</div>
	</div>

	<div class="" style="padding: 15px 5px;">
		<div class="" style="padding: 5px;">
			
			<h4 style="color: #7f7f7f; font-weight: bold;">"<?php if(!empty($title)){echo $title;} ?>"</h4>
		
			<h5  id=""><?php echo $content; if(strlen($content)>598){?>
			......<?php }?></h5>
			</h5>
		</div>
	</div>
	<div style="background: #f2f2f2; padding: 10px; border-radius: 10px; width: 100%; margin: 0;" class="btn-group row">
		<div class="col-md-6" style="padding: 0px 10px; margin: 0;">
			<center><a href="comment.php?id=<?php echo $post_id; ?>&title=<?php echo $title;?>" style="text-decoration: none;"><button style="border:none; background: inherit; color: #662e91;"><i class="fa fa-comments" aria-hidden="true"></i> Comment</button></a></center>
		</div>
		<div class="col-md-6" style="padding: 0px 10px; margin: 0;">
			<center><a href="comment.php?id=<?php echo $post_id; ?>&title=<?php echo $title;?>" style="text-decoration: none;"><button style="color: #662e91;border:none; background: inherit;">See more</button></a></center>
		</div>
			
			
			
		
	</div>
</div>
			<?php
				if($session == "admin@admin.com"){
				?>	

				<form method="post" action="">
					<input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
					<button type="submit" name="delete" class="btn btn-danger form-control">Delete Post</button>
				</form>
				
				<?php
				}
					
				
				?>
<?php
			}
		}
	}
?>