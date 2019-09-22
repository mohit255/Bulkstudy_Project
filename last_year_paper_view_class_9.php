<?php
include('includes/connect.php');
include('includes/header.php');
?>
<?php /*?><?php
if(!isset($_POST['lastyrppr_search']))
{
	$querry=mysql_query("select * from last_year_paper");
	while($row=mysql_fetch_assoc($querry))
	{?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['paper_subject']; ?></td>
        <td><?php echo $row['paper_year'] ?></td>
        <td>
            <ul>
                <li class='active'>
                    <a href='#'>Download Link</a>
                </li>
            </ul>    
        </td>
    </tr>
	<?php	
	}
	?>
<?php
}
?>
<?php */?><div class="courses_section courses-fullwidth">
			<div class="container">
            <h1>Class 9 last year paper</h1>
				<div class="row">

					<div class="col-xs-12 courses_right">
						<div class="courses_right_inner">
                        
                         <div class="search_section">
								<form  method="post">
									<ul>
										<li>
											<div class="selectBox clearfix">
                                 <select name="subject" id="guiest_id1">
     			                  <option value="">SUBJECT</option>
								<?php
								  $ssub[]="";
                                $squerry="select * from class_9_last_year_paper";
                                $ssql=mysqli_query($con,$squerry);
                                while($srow=mysqli_fetch_assoc($ssql))
								{
									if(!in_array($srow['paper_subject'],$ssub))
									{
                                    ?>
				                  <option value="<?php echo $srow['paper_subject']; ?>"><?php echo $srow['paper_subject']; ?></option>
                          <?php    $ssub[]=$srow['paper_subject'];
						   
						           }
								}?>
				                </select>
				              </div>
										</li>
										<li>
                                        
							  <div class="selectBox clearfix">
				                <select name="year" id="guiest_id2">
       			                  <option value="">Year</option>
                                <?php
								$yyear[]="";
								$yquerry="select * from class_9_last_year_paper";
                                $ysql=mysqli_query($con,$yquerry);
                                 while($yrow=mysqli_fetch_assoc($ysql))
								{
										if(!in_array($yrow['paper_year'],$yyear))
										{
                                        ?>
				                     <option value="<?php echo $yrow['paper_year']; ?>"><?php echo $yrow['paper_year']; ?></option>
                          <?php         $yyear[]=$yrow['paper_year'];
						                }
								}?>
				                </select>
				              </div><!-- selectBox -->
										</li>
										<li class="search_button">
											<button class="btn btn-default btn-block commonBtn" name="lastyrppr_search" type="submit">Search</button>
										</li>
									</ul>
								</form>
							</div><!--End search_section-->
							<div class="courses">
								<table class="table table-bordered table-striped">
									<thead>
									  <tr>
										<th>Paper Subject</th>
										<th>Year</th>
										<th>Download</th>
									  </tr>
									</thead>
									<tbody>
									  <tr class="option">
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									  </tr>
									  <?php
									  $querry="";
										if(!isset($_POST['lastyrppr_search']))
										{
											$querry="select * from class_9_last_year_paper";
											$sql=mysqli_query($con,$querry);
											while($row=mysqli_fetch_assoc($sql))
											{
											
											?>
											<tr>
												<td><?php echo $row['paper_subject']; ?></td>
												<td><?php echo $row['paper_year'] ?></td>
												<td>
													<ul>
														<li class='active'>
															<a href='books/last_year_paper/<?php echo $row['paper_pdf']; ?>'>Download Link</a>
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
											if(isset($_POST['subject']))
											{
												$querry .="select * from class_9_last_year_paper ";
												$selected_subject = $_POST['subject'];
												$selected_year = $_POST['year'];
												if($selected_subject != "")
												{
													$querry .= "where paper_subject='$selected_subject'";
												}
												else
												{
													$querry .= "";
												
												}
													
											
											}
										    if($selected_subject=="")
											{
												if($selected_year=="")
												{
													$querry .= "";
												}
												else
												{
													$querry .="where paper_year='$selected_year'";
												}
											}
											else
											{
												if($selected_year != "")
												{
													if($selected_subject != "")
													{
														$querry .= " AND paper_year=$selected_year";
													}
													$querry .="";
												}
												else
												{
													$querry .="";
												}
											}
											//echo $querry;
											
											$s_sql=mysqli_query($con,$querry);
											while($row=mysqli_fetch_assoc($s_sql))
											{?>
											<tr>
												<td><?php echo $row['paper_subject']; ?></td>
												<td><?php echo $row['paper_year'] ?></td>
												<td>
													<ul>
														<li class='active'>
															<a href='books/last_year_paper/<?php echo $row['paper_pdf']; ?>'>Download Link</a>
														</li>
													</ul>    
												</td>
											</tr>
											<?php	
											}
											//var_dump($_POST['subject']);
											
										//var_dump($search);
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