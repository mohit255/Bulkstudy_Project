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
										<th>CHAPTER</th>
										<th>CHAPTER NAME</th>
                                        <th>CHAPTER PDF</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="option">
										<td></td>
										<td>&nbsp;</td>
                                        <td>&nbsp;</td>
									  </tr>
									  <?php
											$querry=mysql_query("select * from solution_hindi where chapter_subject = 'Hindi' && chapter_class = '12' ORDER BY chapter_no ASC");
											while($row=mysql_fetch_assoc($querry))
											{?>
											<tr>
                                                <td><b><?php echo $row['chapter_no']; ?>.</b></td>
												<td><h3><?php echo $row['chapter_name']; ?></h3></td>
                                                <td>
													<ul>
														<li class='active'>
															<a href='books/solution_hindi_chapter_pdf/<?php echo $row['chapter_pdf']; ?>'>Download Link</a>
														</li>
													</ul>    
												</td>
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
							$querry=mysql_query("select * from ncrt_solution where book_subject = 'Hindi' && book_class = '12'");
							$row=mysql_fetch_assoc($querry);
							
							 //echo $row['book_class']; ?>		

								<div class="related_post_sec">
									<div class="list_block">
										<div class="formTitle news">
											<h3 class="extraPadding"><?php echo $row['book_subject']; ?></h3>
											<div class="getImage clearfix">
											  <img alt="" src="books/solution_image/<?php echo $row['book_image']; ?>" />
											</div><!-- getImage -->
											<a href="books/solution_pdf/<?php echo $row['book_pdf']; ?>"><button class="btn btn-default btn-block commonBtn">Download Now</button></a>
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