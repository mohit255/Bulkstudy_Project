<?php
//ncrt_solution_chapters.php

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

/* ################################ ADD USER ################################## */
$msg="";

if(isset($_POST['add_ncrt_solution_chapter']))
{
	//var_dump($_FILES['cp_pdf']['name']);
	$no=$_POST['cp_no'];
	$class=$_POST['cp_class'];
	$name=$_POST['cp_name'];
	$sub=$_POST['cp_subject'];
	$pdf=$_FILES['cp_pdf']['name'];
	if($sub == "English")
	{
		$inqur="insert into solution_english (chapter_no,chapter_class,chapter_subject,chapter_name,chapter_pdf) values('$no','$class','$sub','$name','$pdf')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			move_uploaded_file($_FILES['cp_pdf']['tmp_name'],"../books/solution_english_chapter_pdf/".$pdf);
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Solution Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="Something Went Wrong !";

		
		}
	}
	
	
	if($sub == "Hindi")
	{
		$inqur="insert into solution_hindi (chapter_no,chapter_class,chapter_subject,chapter_name,chapter_pdf) values('$no','$class','$sub','$name','$pdf')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			move_uploaded_file($_FILES['cp_pdf']['tmp_name'],"../books/solution_hindi_chapter_pdf/".$pdf);
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Solution Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="Something Went Wrong !";

		
		}
	}
	
	
	if($sub == "Maths")
	{
		$inqur="insert into solution_maths (chapter_no,chapter_class,chapter_subject,chapter_name,chapter_pdf) values('$no','$class','$sub','$name','$pdf')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			move_uploaded_file($_FILES['cp_pdf']['tmp_name'],"../books/solution_maths_chapter_pdf/".$pdf);
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Solution Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="Something Went Wrong !";

		
		}
	}
	
	
	
	if($sub == "Social Science")
	{
		$inqur="insert into solution_social (chapter_no,chapter_class,chapter_subject,chapter_name,chapter_pdf) values('$no','$class','$sub','$name','$pdf')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			move_uploaded_file($_FILES['cp_pdf']['tmp_name'],"../books/solution_social_chapter_pdf/".$pdf);
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Solution Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="Something Went Wrong !";

		
		}
	}
	
	
	
	if($sub == "Science")
	{
		$inqur="insert into solution_science (chapter_no,chapter_class,chapter_subject,chapter_name,chapter_pdf) values('$no','$class','$sub','$name','$pdf')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			move_uploaded_file($_FILES['cp_pdf']['tmp_name'],"../books/solution_science_chapter_pdf/".$pdf);
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Solution Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="Something Went Wrong !";

		
		}
	}
	
	
	if($sub == "Biology")
	{
		$inqur="insert into solution_bio (chapter_no,chapter_class,chapter_subject,chapter_name,chapter_pdf) values('$no','$class','$sub','$name','$pdf')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			move_uploaded_file($_FILES['cp_pdf']['tmp_name'],"../books/solution_bio_chapter_pdf/".$pdf);
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Solution Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="Something Went Wrong !";

		
		}
	}
	
	
	if($sub == "Physics")
	{
		$inqur="insert into solution_physics (chapter_no,chapter_class,chapter_subject,chapter_name,chapter_pdf) values('$no','$class','$sub','$name','$pdf')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			move_uploaded_file($_FILES['cp_pdf']['tmp_name'],"../books/solution_physics_chapter_pdf/".$pdf);
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Solution Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="Something Went Wrong !";

		
		}
	}
	else
	
	
	if($sub == "Chemistry")
	{
		$inqur="insert into solution_chemistry (chapter_no,chapter_class,chapter_subject,chapter_name,chapter_pdf) values('$no','$class','$sub','$name','$pdf')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			move_uploaded_file($_FILES['cp_pdf']['tmp_name'],"../books/solution_chemistry_chapter_pdf/".$pdf);
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Solution Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="Something Went Wrong !";

		
		}
	}

}
?>
		<span id="alert_action"></span>
		<div class="row">
			<div class="col-lg-12">
            <?php echo @$msg; ?>
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>Ncrt English Solution List</b></h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                            	<button type="button" name="add" id="add_button" data-toggle="modal" data-target="#addSolution" class="btn btn-success btn-xs">Add New Solution</button>
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="english_solution_list" class="table table-bordered table-striped">
                   				<thead>
									<tr>
                                        <th>ID</th>
                                        <th>Chapter Class</th>
										<th>Chapter No.</th>
                                        <th>Chapter Subject</th>
										<th>Chapter Name</th>
                                        <th>Chapter PDF</th>
										<th>Edit</th>
                                        <th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from solution_english"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
                                    <td><?php echo $data['id']; ?>.</td>
                                    <td><?php echo $data['chapter_class']; ?></td>
									<td><?php echo $data['chapter_no']; //var_dump($data); ?></td>
                                    <td><?php echo $data['chapter_subject']; ?></td>
									<td><?php echo $data['chapter_name']; ?></td>
                                    <td><?php echo $data['chapter_pdf']; ?></td>
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
        
        
        <div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>Ncrt Hindi Solution List</b></h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="hindi_solution_list" class="table table-bordered table-striped">
                   				<thead>
									<tr>
                                        <th>ID</th>
                                        <th>Chapter Class</th>
										<th>Chapter No.</th>
                                        <th>Chapter Subject</th>
										<th>Chapter Name</th>
                                        <th>Chapter PDF</th>
										<th>Edit</th>
                                        <th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from solution_hindi"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
                                    <td><?php echo $data['id']; ?>.</td>
                                    <td><?php echo $data['chapter_class']; ?></td>
									<td><?php echo $data['chapter_no']; //var_dump($data); ?></td>
                                    <td><?php echo $data['chapter_subject']; ?></td>
									<td><?php echo $data['chapter_name']; ?></td>
                                    <td><?php echo $data['chapter_pdf']; ?></td>
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
        
        <div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>Ncrt Maths Solution List</b></h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="maths_solution_list" class="table table-bordered table-striped">
                   				<thead>
									<tr>
                                        <th>ID</th>
                                        <th>Chapter Class</th>
										<th>Chapter No.</th>
                                        <th>Chapter Subject</th>
										<th>Chapter Name</th>
                                        <th>Chapter PDF</th>
										<th>Edit</th>
                                        <th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from solution_maths"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
                                    <td><?php echo $data['id']; ?>.</td>
                                    <td><?php echo $data['chapter_class']; ?></td>
									<td><?php echo $data['chapter_no']; //var_dump($data); ?></td>
                                    <td><?php echo $data['chapter_subject']; ?></td>
									<td><?php echo $data['chapter_name']; ?></td>
                                    <td><?php echo $data['chapter_pdf']; ?></td>
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
        
        
        <div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>Ncrt Social Solution List</b></h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="social_solution_list" class="table table-bordered table-striped">
                   				<thead>
									<tr>
                                        <th>ID</th>
                                        <th>Chapter Class</th>
										<th>Chapter No.</th>
                                        <th>Chapter Subject</th>
										<th>Chapter Name</th>
                                        <th>Chapter PDF</th>
										<th>Edit</th>
                                        <th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from solution_social"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['chapter_class']; ?></td>
									<td><?php echo $data['chapter_no']; //var_dump($data); ?></td>
                                    <td><?php echo $data['chapter_subject']; ?></td>
									<td><?php echo $data['chapter_name']; ?></td>
                                    <td><?php echo $data['chapter_pdf']; ?></td>
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
        
        <div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>Ncrt Science Solution List</b></h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="science_solution_list" class="table table-bordered table-striped">
                   				<thead>
									<tr>
                                        <th>ID</th>
                                        <th>Chapter Class</th>
										<th>Chapter No.</th>
                                        <th>Chapter Subject</th>
										<th>Chapter Name</th>
                                        <th>Chapter PDF</th>
										<th>Edit</th>
                                        <th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from solution_science"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
                                    <td><?php echo $data['id']; ?>.</td>
                                    <td><?php echo $data['chapter_class']; ?></td>
									<td><?php echo $data['chapter_no']; //var_dump($data); ?></td>
                                    <td><?php echo $data['chapter_subject']; ?></td>
									<td><?php echo $data['chapter_name']; ?></td>
                                    <td><?php echo $data['chapter_pdf']; ?></td>
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
        
        
        <div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>Ncrt Physics Solution List</b></h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="physics_solution_list" class="table table-bordered table-striped">
                   				<thead>
									<tr>
                                        <th>ID</th>
                                        <th>Chapter Class</th>
										<th>Chapter No.</th>
                                        <th>Chapter Subject</th>
										<th>Chapter Name</th>
                                        <th>Chapter PDF</th>
										<th>Edit</th>
                                        <th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from solution_physics"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
                                    <td><?php echo $data['id']; ?>.</td>
                                    <td><?php echo $data['chapter_class']; ?></td>
									<td><?php echo $data['chapter_no']; //var_dump($data); ?></td>
                                    <td><?php echo $data['chapter_subject']; ?></td>
									<td><?php echo $data['chapter_name']; ?></td>
                                    <td><?php echo $data['chapter_pdf']; ?></td>
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
        
        
        <div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>Ncrt Chemistry Solution List</b></h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="chemistry_solution_list" class="table table-bordered table-striped">
                   				<thead>
									<tr>
                                        <th>ID</th>
                                        <th>Chapter Class</th>
										<th>Chapter No.</th>
                                        <th>Chapter Subject</th>
										<th>Chapter Name</th>
                                        <th>Chapter PDF</th>
										<th>Edit</th>
                                        <th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from solution_chemistry"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
                                    <td><?php echo $data['id']; ?>.</td>
                                    <td><?php echo $data['chapter_class']; ?></td>
									<td><?php echo $data['chapter_no']; //var_dump($data); ?>.</td>
                                    <td><?php echo $data['chapter_subject']; ?></td>
									<td><?php echo $data['chapter_name']; ?></td>
                                    <td><?php echo $data['chapter_pdf']; ?></td>
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
        
        
        
        <div class="col-lg-12">
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>Ncrt Bio Solution List</b></h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="bio_solution_list" class="table table-bordered table-striped">
                   				<thead>
									<tr>
                                        <th>ID</th>
                                        <th>Chapter Class</th>
										<th>Chapter No.</th>
                                        <th>Chapter Subject</th>
										<th>Chapter Name</th>
                                        <th>Chapter PDF</th>
										<th>Edit</th>
                                        <th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from solution_bio"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
                                    <td><?php echo $data['id']; ?>.</td>
                                    <td><?php echo $data['chapter_class']; ?></td>
									<td><?php echo $data['chapter_no']; //var_dump($data); ?></td>
                                    <td><?php echo $data['chapter_subject']; ?></td>
									<td><?php echo $data['chapter_name']; ?></td>
                                    <td><?php echo $data['chapter_pdf']; ?></td>
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
        
        
        
        <div id="addSolution" class="modal fade">
        	<div class="modal-dialog">
        		<form method="post" enctype="multipart/form-data">
        			<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add New Solution</h4>
        			</div>
        			<div class="modal-body">
                        <div class="form-group">
							<label>Chapter Number</label>
							<input type="number" name="cp_no" class="form-control" required />
						</div>
        				<div class="form-group">
							<label>Chapter Name</label>
							<input type="text" name="cp_name" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Chapter Class</label>
							<select name="cp_class" class="form-control" required />
                                <option value="" >Select Class</option>
                                <option value="9" >9</option>
                                <option value="10" >10</option>
                                <option value="11" >11</option>
                                <option value="12" >12</option>
                            </select>
						</div>
						<div class="form-group">
							<label>Chapter Subject</label>
							<select name="cp_subject" class="form-control" required />
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
                        <label>Ncrt Book PDF</label>
                        <input type="file" name="cp_pdf" class="form-control" required />
                    </div>
                        
                        
        			</div>
        			<div class="modal-footer">
        				<input type="submit" name="add_ncrt_solution_chapter"  class="btn btn-info" value="Add" />
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

    $('#english_solution_list').DataTable();
    $('#hindi_solution_list').DataTable();
    $('#maths_solution_list').DataTable();
    $('#social_solution_list').DataTable();
    $('#science_solution_list').DataTable();
    $('#physics_solution_list').DataTable();
    $('#chemistry_solution_list').DataTable();
    $('#bio_solution_list').DataTable();
} );
</script>

<?php
include('footer.php');
?>
