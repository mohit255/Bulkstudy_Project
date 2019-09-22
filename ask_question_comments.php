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


?>

<div class="post_section">
			<div class="container">
				<div class="row">

					<div class="col-lg-12 col-sm-8 post_left">
						<div class="post_left_section post_right_border">
							<!--end post-->
							<div class="related_post_sec single_post">
								<h3>Question</h3>
								<ul>
									<li>
                                    <?php 
									$posted_id=$_GET['postid'];
									$query="select * from post where post_id='$posted_id'";
								    $sql=mysqli_query($con,$query);
	                                $row=mysqli_fetch_array($sql);
	                                ?>
    
										<div class="rel_right">
											<h4><a><?php echo $row['content'];?></a></h4>
											<div class="meta">
												<span class="author">By: <a><?php echo $row['ask_by']; ?></a></span>
												
												<span class="date">Posted: <a><?php echo TimeAgo($row['date'],date("Y-m-d H:i:s")); ?></a></span>
											</div>
											
										</div><!--end rel right-->
									</li>
									
								</ul>
							</div><!--end single_post-->

							<div class="comments_section">
								<div class="comment_post">
									<h3>Comments</h3>
									<div class="comment_header">
										
									</div><!--end comment header-->
                                    <?php $comment="select * from comment where post_id='$posted_id'";
									$sql=mysqli_query($con,$comment);
	                                while($comment_row=mysqli_fetch_array($sql)){ ?>
                                    
                                    <br />
	
									<form class="reply" action="#" method="post">
										
										<div id="post_list">
											
											<div class="post-content" data-role="post-content">
												
												<div class="post-body">
													<div class="post-top">
														<span class="post-byline">
															<span class="author publisher-anchor-color"><a><?php echo $comment_row['com_by'] ?></a></span>
														</span>
														<span class="post-meta">
															<a><?php echo TimeAgo($comment_row['date'],date("Y-m-d H:i:s")); ?></a>
														</span>
													</div><!--end post-top-->
													<div class="post-body-inner">
														<div  class="post-message">
															<p><?php echo $comment_row['content']; ?></p>
														</div>
													</div><!--end post-body-inner-->
													<ul class="comment_footer">
														<li data-role="voting" class="voting">
															<a  href="#">
																<span class="control left"><i class="fa fa-angle-up"></i></span>
															</a>
															<span title="Vote down" data-action="downvote" class="vote-down  count-1" role="button">

																<span class="control"><i class="fa fa-angle-down"></i></span>
															</span>
														</li>
														<li data-role="reply-link" class="reply">
															<a data-action="reply" href="#">Reply</a>
														</li>
														
													</ul>
												</div><!--end post-body-->
											</div><!--end post-content-->
										</div><!--end post_list-->
                                      <?php }?>  
                                      </form>
                                        

									<div class="comment_bottom_block">
										
									</div><!--end comment_bottom_block-->
								</div><!--end comment post-->
								<div class="comments_form">
									<h3>Post A Comment</h3>
									<form class="form d" method="post">
										<div class="full">
											<textarea name="comment_content" rows="4" cols="10" class="form-control" placeholder="Write a comment"></textarea>
										</div>
										<input type="submit" name="comment" class="commonBtn" value="Submit">
									</form>
								</div><!--end comments form-->
							</div><!--end comments section-->

						</div><!--end post left section-->
					</div><!--end post_left-->

					<!--end post_right-->
				</div>
			</div>
		</div>
<?php
		if(isset($_POST['comment']))
		{
			if(isset($_SESSION['email']))
			{
				$comment_content=$_POST['comment_content'];
				$querry="insert into comment (content,post_id,com_by,commenter_email) values('$comment_content',$posted_id,'".$_SESSION['name']."','".$_SESSION['email']."')";
					$sql=mysqli_query($con,$querry);

				header('Refresh:0');
			}
			else
			{?>
            <script src="js/sweetalert.min.js"></script>

            <script>
				swal("You can't comment on this Question !", "Login Or Signin to comment !", "warning");
			</script>
							

			<?php }
		}
?>
<?php include('includes/footer.php');?>