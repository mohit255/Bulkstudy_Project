<?php
include('includes/connect.php');
include('includes/header.php');
?>

<div class="post_section clearfix">
				<div class="container">
					<div class="row">

						<div class="col-xs-12 col-sm-8 post_left pull-right">
							<div class="courses_right_inner padding-border-left">

							<div class="courses">
								<table class="table table-bordered table-striped">
									<thead>
									  <tr>
										<th>CHAPTER NUMBER</th>
										<th>CHAPTER NAME</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="option">
										<td></td>
										<td>&nbsp;</td>
									  </tr>
									  <?php
											$querry="select * from chapters_maths where chapter_subject = 'Maths' && chapter_class = 12 ORDER BY chapter_no ASC";
											$sql=mysqli_query($con,$querry);
											while($row=mysqli_fetch_assoc($sql))
											{?>
											<tr>
                                                <td><b><?php echo $row['chapter_no']; ?>.</b></td>
												<td><h3><?php echo $row['chapter_name']; ?></h3></td>
											</tr>
											<?php	
											}
											?>
									</tbody>
								</table>
							</div><!--End courses-->

							

						</div><!--end post left section-->
						</div><!--end post_left-->

						<div class="col-xs-12 col-sm-4 post_right pull-left">
							<div class="post_right_inner">
                            <?php
							$query="select * from ncrt_book where book_subject = 'Maths' && book_class = 12";
							$bsql=mysqli_query($con,$query);
							$brow=mysqli_fetch_assoc($bsql);
							
							 //echo $row['book_class']; ?>		

								<div class="related_post_sec">
									<div class="list_block">
										<div class="formTitle news">
											<h3 class="extraPadding"><?php echo $brow['book_subject']; ?></h3>
											<div class="getImage clearfix">
											  <img alt="" src="books/books_image/<?php echo $brow['book_image']; ?>" />
											</div><!-- getImage -->
											<a href="books/books_pdf/<?php echo $brow['book_pdf']; ?>"><button class="btn btn-default btn-block commonBtn" type="submit">Download Now</button></a>
										</div>
									</div>

									<!-- formArea -->
								</div><!--end related_post_sec-->

							</div><!--end post right inner-->
						</div><!--end post_right-->

					</div>
				</div>
			</div>


<?php include('includes/footer.php');?>