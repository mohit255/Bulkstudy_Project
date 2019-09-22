<?php
include('includes/connect.php');
include('includes/header.php');
?>

<div class="courses_section courses-fullwidth">
			<div class="container">
            <h1>Class 12 sample paper</h1>
				<div class="row">

					<div class="col-xs-12">
						<div class="courses_right_inner">
                        <div class="search_section">
								<form  method="post">
								<div class="row">
                                <div class="col-lg-6">
							  <div class="selectBox clearfix">
				              <select name="subject" id="guiest_id1">
				                <option value="" >Select Subject</option>
                                <option value="Hindi" >Hindi</option>
                                <option value="English" >English</option>
                                <option value="Maths" >Maths</option>
                                <option value="Biology" >Biology</option>
                                <option value="Physics" >Physics</option>
                                <option value="Chemistry" >Chemistry</option>
                              </select>
				              </div>
                              </div>
								<div class="col-lg-6">	
										
											<button class="btn btn-default btn-block commonBtn" name="sspr_search" type="submit">Search</button>
								</div>	
								</form>
							</div>

							<div class="courses">
								<table class="table table-bordered table-striped">
									<thead>
									  <tr>
										<th>Paper Subject</th>
										<th>Download</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="option">
										<td></td>
                                        <td>&nbsp;</td>
									  </tr>
									  <?php
										if(!isset($_POST['sspr_search']))
										{
											$querry="select * from sample_paper where sp_class=12";
											$sql=mysqli_query($con,$querry);
											while($row=mysqli_fetch_assoc($sql))
											{?>
											<tr>
												<td><h3><?php echo $row['sp_subject']; ?></h3></td>
												<td>
													<ul>
														<li class='active'>
															<a href='books/sample_papers/<?php echo $row['sp_pdf']; ?>'>Download Link</a>
														</li>
													</ul>    
												</td>
											</tr>
											<?php	
											}
											?>
										<?php
										}
										else
										{
											$pselectedsubject=$_POST['subject'];
											if($pselectedsubject != "")
											{
												$querry="select * from sample_paper where sp_class=12 AND sp_subject='$pselectedsubject'";
											}
											else
											{
												$querry="select * from sample_paper where sp_class=12";
											}
    											$sql=mysqli_query($con,$querry);
	     										while($row=mysqli_fetch_assoc($sql))
											{?>
											<tr>
												<td><h3><?php echo $row['sp_subject']; ?></h3></td>
												<td>
													<ul>
														<li class='active'>
															<a href='<?php echo $row['sp_pdf']; ?>'>Download Link</a>
														</li>
													</ul>    
												</td>
											</tr>
											<?php	
										}

									}
										?>
									  
                                      
                                      
                                      </tbody>
								</table>
							</div><!--End courses-->


						</div><!-- end courses_right_inner -->
					</div><!-- end courses_right -->

				</div><!-- end row -->
			</div><!-- end container -->
		</div>


<?php include('includes/footer.php');?>