<?php
include('includes/connect.php');
include('includes/header.php');


//ago Function
function TimeAgo ($oldTime, $newTime) {
$timeCalc = strtotime($newTime) - strtotime($oldTime);
if ($timeCalc >= (60*60*24*30*12*2)){
	$timeCalc = intval($timeCalc/60/60/24/30/12) . " years ago";
	}else if ($timeCalc >= (60*60*24*30*12)){
		$timeCalc = intval($timeCalc/60/60/24/30/12) . " year ago";
	}else if ($timeCalc >= (60*60*24*30*2)){
		$timeCalc = intval($timeCalc/60/60/24/30) . " months ago";
	}else if ($timeCalc >= (60*60*24*30)){
		$timeCalc = intval($timeCalc/60/60/24/30) . " month ago";
	}else if ($timeCalc >= (60*60*24*2)){
		$timeCalc = intval($timeCalc/60/60/24) . " days ago";
	}else if ($timeCalc >= (60*60*24)){
		$timeCalc = " Yesterday";
	}else if ($timeCalc >= (60*60*2)){
		$timeCalc = intval($timeCalc/60/60) . " hours ago";
	}else if ($timeCalc >= (60*60)){
		$timeCalc = intval($timeCalc/60/60) . " hour ago";
	}else if ($timeCalc >= 60*2){
		$timeCalc = intval($timeCalc/60) . " minutes ago";
	}else if ($timeCalc >= 60){
		$timeCalc = intval($timeCalc/60) . " minute ago";
	}else if ($timeCalc > 0){
		$timeCalc .= " seconds ago";
	}
return $timeCalc;
}
 
 /*######################################### ADD POST BY USER#######################*/
 if(isset($_POST['post']))
		{
			if(isset($_SESSION['email']))
			{
				$post_content=$_POST['post_content'];
				$query="insert into post (content,ask_by,poster_email) values('$post_content','".$_SESSION['name']."','".$_SESSION['email']."')";
				$sql=mysqli_query($con,$query);
			}
			else
			{?>
            <script src="js/sweetalert.min.js"></script>

                <script>
				swal("You Can't Ask Your Question !", "Login Or Signin to Ask Your Quesrtion !", "warning");
				</script>
			<?php }
		
		
		}
		
 
?>


<div class="post_section">
			<div class="container">
				<div class="row">
                    <div class="col-lg-12 col-sm-8 post_left">

                               <div class="comments_form">
									<h3>Ask A Question</h3>
									<form class="form q" method="post">
										
										
										<div class="full">
											<textarea rows="5" name="post_content" cols="10" class="form-control" placeholder="Ask a Question.."></textarea>
										</div>
										<input name="post" type="submit" class="commonBtn" value="Ask">
									</form>
								</div>
                         </div>       
                                
                                
					<div class="col-lg-12 col-sm-8 post_left">
						<div class="post_left_section post_right_border">
							<!--end post-->
							<div class="related_post_sec single_post">
								<h3>More Questions</h3>
								<ul>
                                
    <?php
	$query="select * from post ORDER BY post_id DESC";
	$sql=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($sql)){
	$id=$row['post_id'];
	?>
    <li>
    <?php 
	$comment_query="select * from comment where post_id='$id'";
	$csql=mysqli_query($con,$comment_query);
	$count=mysqli_num_rows($csql);

	?>
        <div class="rel_right">
            <h4><a href="ask_question_comments.php?postid=<?php echo $id ?>"><?php echo $row['content']; ?></a></h4>
            <div class="meta">
                <span class="author">By: <a><?php echo $row['ask_by'] ?></a></span>
                
                <span class="date">Posted: <a><?php echo TimeAgo($row['date'], date("Y-m-d H:i:s")); ?></a></span>
            </div>
            
            
            <div class="post_bottom">
    <ul>
        <li class="like">
            <a href="ask_question_comments.php?postid=<?php echo $id ?>">
                <img src="img/news/like_icon.png" alt="">
                <span><?php echo $count; ?></span>
            </a>
        </li>
        
        
    </ul>
       </div>
        </div><!--end rel right-->
   </li>
 <?php } ?>                                   
									
                                    
						</div><!--end post left section-->
					</div><!--end post_left-->

					<!--end post_right-->
				</div>
			</div>
		</div>

<?php include('includes/footer.php');?>