<?php
//user.php

include('database_connection.php');

if(!isset($_SESSION["admin_email"]))
{
	header('location:login.php');
}

include('header.php');

if(isset($_POST['update']))
{
 //header('location:home.php');
}

/* ################################ ADD LAST YEAR PAPER ################################## */
$msg="";

if(isset($_POST['add_last_year_paper']))
{
	$class=$_POST['lp_class'];
	$sub=$_POST['lp_subject'];
	$year=$_POST['lp_year'];
	$pdf=$_FILES['lp_pdf']['name'];
	//var_dump($_POST['lp_class']);
	if($_POST['lp_class'] == 9)
	{
		$querry="Select * from class_9_last_year_paper where paper_pdf='$pdf'";
		$sql=mysqli_query($connect,$querry);
		$row=mysqli_num_rows($sql);
		if(!$row == 1)
		{
			$inqur="insert into class_9_last_year_paper (paper_subject,paper_year,paper_pdf) values('$sub','$year','$pdf')";
			$insql=mysqli_query($connect,$inqur);
			//echo "Success";
			if($insql)
			{
				move_uploaded_file($_FILES['lp_pdf']['tmp_name'],"../books/last_year_paper/".$pdf);
				$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Last Year Paper Added Sucessfully !</div></span>';
			}
		}
		else
		{
			$msg='<span><div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning! </strong>Last Year Paper PDF Already in Database ,Try With New One OR Rename it !</div></span>';
		
		}
	}
	if($_POST['lp_class'] == 10)
	{
		$querry="Select * from class_10_last_year_paper where paper_pdf='$pdf'";
		$sql=mysqli_query($connect,$querry);
		$row=mysqli_num_rows($sql);
		if(!$row == 1)
		{
			$inqur="insert into class_10_last_year_paper (paper_subject,paper_year,paper_pdf) values('$sub','$year','$pdf')";
			$insql=mysqli_query($connect,$inqur);
			//echo "Success";
			if($insql)
			{
				move_uploaded_file($_FILES['lp_pdf']['tmp_name'],"../books/last_year_paper/".$pdf);
				$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Last Year Paper Added Sucessfully !</div></span>';
			}
		}
		else
		{
			$msg='<span><div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning! </strong>Last Year Paper PDF Already in Database ,Try With New One OR Rename it !</div></span>';
		
		}
	}
	if($_POST['lp_class'] == 11)
	{
		$querry="Select * from class_11_last_year_paper where paper_pdf='$pdf'";
		$sql=mysqli_query($connect,$querry);
		$row=mysqli_num_rows($sql);
		if(!$row == 1)
		{
			$inqur="insert into class_11_last_year_paper (paper_subject,paper_year,paper_pdf) values('$sub','$year','$pdf')";
			$insql=mysqli_query($connect,$inqur);
			//echo "Success";
			if($insql)
			{
				move_uploaded_file($_FILES['lp_pdf']['tmp_name'],"../books/last_year_paper/".$pdf);				
				$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Last Year Paper Added Sucessfully !</div></span>';
			}
		}
		else
		{
			move_uploaded_file($_FILES['lp_pdf']['tmp_name'],"../books/last_year_paper/".$pdf);			
			$msg='<span><div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning! </strong>Last Year Paper PDF Already in Database ,Try With New One OR Rename it !</div></span>';
		
		}
	}
	if($_POST['lp_class'] == 12)
	{
		$querry="Select * from class_12_last_year_paper where paper_pdf='$pdf'";
		$sql=mysqli_query($connect,$querry);
		$row=mysqli_num_rows($sql);
		if(!$row == 1)
		{
			$inqur="insert into class_12_last_year_paper (paper_subject,paper_year,paper_pdf) values('$sub','$year','$pdf')";
			$insql=mysqli_query($connect,$inqur);
			//echo "Success";
			if($insql)
			{
				move_uploaded_file($_FILES['lp_pdf']['tmp_name'],"../books/last_year_paper/".$pdf);
				$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Last Year Paper Added Sucessfully !</div></span>';
			}
		}
		else
		{
			$msg='<span><div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning! </strong>Last Year Paper PDF Already in Database ,Try With New One OR Rename it !</div></span>';
		
		}
	}
}
else
?>
		<span id="alert_action"></span>
		<div class="row">
			<div class="col-lg-12">
            <?php echo @$msg; ?>
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title">Class 9 Last Year Paper</h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                            	<button type="button" name="add" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success btn-xs">Add New Last Year Paper</button>
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="class9_lp_table" class="table table-bordered table-striped">
                   				<thead>
									<tr>
										<th>ID</th>
										<th>Last Year Paper Subject</th>
                                        <th>Last Year Paper Year</th>
										<th>Last Yead Paper PDF</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from class_9_last_year_paper"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
									<td><?php echo $data['id']; //var_dump($data); ?>.</td>
									<td><?php echo $data['paper_subject']; ?></th>
									<td><?php echo $data['paper_year']; ?></td>
                                    <td><?php echo $data['paper_pdf']; ?></td>
									<form method="post">
                                    <td><button type="button" name="update" id="<?php echo $data['id']; ?>" class="btn btn-info btn-xs update" data-toggle="modal" data-target="#edit_user">Edit</button></td>
									<td><button type="submit" name="delete" id="<?php echo $data['id']; ?>" class="btn btn-danger btn-xs delete">Delete</button></td>
                                    </form>
								</tr>
                           <?php } ?>   
                   			</table>
                   		</div>
                   	</div>
               	</div>
           	</div>
            
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title">Class 10 Last Year Paper</h3>
                            </div>
                            
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="class10_lp_table" class="table table-bordered table-striped">
                   				<thead>
									<tr>
										<th>ID</th>
										<th>Last Year Paper Subject</th>
                                        <th>Last Year Paper Year</th>
										<th>Last Yead Paper PDF</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from class_10_last_year_paper"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
									<td><?php echo $data['id']; //var_dump($data); ?>.</td>
									<td><?php echo $data['paper_subject']; ?></th>
									<td><?php echo $data['paper_year']; ?></td>
                                    <td><?php echo $data['paper_pdf']; ?></td>
									<form method="post">
                                    <td><button type="button" name="update" id="<?php echo $data['id']; ?>" class="btn btn-info btn-xs update" data-toggle="modal" data-target="#edit_user">Edit</button></td>
									<td><button type="submit" name="delete" id="<?php echo $data['id']; ?>" class="btn btn-danger btn-xs delete">Delete</button></td>
                                    </form>
								</tr>
                           <?php } ?>   
                   			</table>
                   		</div>
                   	</div>
               	</div>
           	</div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title">Class 11 Last Year Paper</h3>
                            </div>
                            
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="class11_lp_table" class="table table-bordered table-striped">
                   				<thead>
									<tr>
										<th>ID</th>
										<th>Last Year Paper Subject</th>
                                        <th>Last Year Paper Year</th>
										<th>Last Yead Paper PDF</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from class_11_last_year_paper"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
									<td><?php echo $data['id']; //var_dump($data); ?>.</td>
									<td><?php echo $data['paper_subject']; ?></th>
									<td><?php echo $data['paper_year']; ?></td>
                                    <td><?php echo $data['paper_pdf']; ?></td>
									<form method="post">
                                    <td><button type="button" name="update" id="<?php echo $data['id']; ?>" class="btn btn-info btn-xs update" data-toggle="modal" data-target="#edit_user">Edit</button></td>
									<td><button type="submit" name="delete" id="<?php echo $data['id']; ?>" class="btn btn-danger btn-xs delete">Delete</button></td>
                                    </form>
								</tr>
                           <?php } ?>   
                   			</table>
                   		</div>
                   	</div>
               	</div>
           	</div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title">Class 12 Last Year Paper</h3>
                            </div>
                            
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="class12_lp_table" class="table table-bordered table-striped">
                   				<thead>
									<tr>
										<th>ID</th>
										<th>Last Year Paper Subject</th>
                                        <th>Last Year Paper Year</th>
										<th>Last Yead Paper PDF</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from class_12_last_year_paper"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
									<td><?php echo $data['id']; //var_dump($data); ?>.</td>
									<td><?php echo $data['paper_subject']; ?></th>
									<td><?php echo $data['paper_year']; ?></td>
                                    <td><?php echo $data['paper_pdf']; ?></td>
									<form method="post">
                                    <td><button type="button" name="update" id="<?php echo $data['id']; ?>" class="btn btn-info btn-xs update" data-toggle="modal" data-target="#edit_user">Edit</button></td>
									<td><button type="submit" name="delete" id="<?php echo $data['id']; ?>" class="btn btn-danger btn-xs delete">Delete</button></td>
                                    </form>
								</tr>
                           <?php } ?>   
                   			</table>
                   		</div>
                   	</div>
               	</div>
           	</div>
        </div>
        <div id="userModal" class="modal fade">
        	<div class="modal-dialog">
        		<form method="post" enctype="multipart/form-data">
        			<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add New Last Year Paper</h4>
        			</div>
        			<div class="modal-body">
                        <div class="form-group">
							<label>Last Year Paper Class</label>
							<select name="lp_class" class="form-control" required />
                                <option value="" >Select Class</option>
                                <option value="9" >9</option>
                                <option value="10" >10</option>
                                <option value="11" >11</option>
                                <option value="12" >12</option>
                            </select>
						</div>
        				<div class="form-group">
							<label>Last Year Paper Subject</label>
							<select name="lp_subject" class="form-control" required />
                                <option value="" >Select Subject</option>
                                <option value="Hindi" >Hindi</option>
                                <option value="English" >English</option>
                                <option value="Maths" >Maths</option>
                                <option value="Social Science" >Social Science</option>
                                <option value="Science" >Science</option>
                                <option value="Biology" >Biology</option>
                                <option value="Physics" >Physics</option>
                                <option value="Chemistry" >Chemistry</option>
                            </select>
						</div>
						<div class="form-group">
							<label>Last Year Paper Year</label>
							<input type="text" name="lp_year" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Last Yead Paper PDF</label>
							<input type="file" name="lp_pdf" class="form-control" required />
						</div>
        			</div>
        			<div class="modal-footer">
        				<input type="submit" name="add_last_year_paper" id="action" class="btn btn-info" value="Add" />
                        <input type="reset" value="Reset" class="btn btn-danger" />
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        		</form>

        	</div>
        </div>
        
        <div id="edit_user" class="modal fade">
        	<div class="modal-dialog">
        		<form method="post">
        			<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
        			</div>
        			<div class="modal-body">
        				<div class="form-group">
							<label>Enter User Name</label>
							<input type="text" name="user_name" id="user_name" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter User Email</label>
							<input type="email" name="user_email" id="user_email" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter User Password</label>
							<input type="password" name="user_password" id="user_password" class="form-control" required />
						</div>
        			</div>
        			<div class="modal-footer">
        				<input type="hidden" name="user_id" id="user_id" />
        				<input type="hidden" name="btn_action" id="btn_action" />
        				<input type="submit" name="action" id="action" class="btn btn-info" value="Edit" />
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        		</form>

        	</div>
        </div>
        
        <script>
$(document).ready(function() {
    $('#class9_lp_table').DataTable();
	$('#class10_lp_table').DataTable();
	$('#class11_lp_table').DataTable();
	$('#class12_lp_table').DataTable();
} );
</script>

<?php
include('footer.php');
?>
