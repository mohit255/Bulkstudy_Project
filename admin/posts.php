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

/* ################################ ADD POST ################################## */
$msg="";

if(isset($_POST['add_sample_paper']))
{
	//var_dump($_POST['sp_subject']);
	//var_dump($_POST['sp_class']);
	//var_dump($_POST['sp_pdf']);
	$sub=$_POST['sp_subject'];
	$class=$_POST['sp_class'];
	$pdf=$_POST['sp_pdf'];
	$querry="Select * from sample_paper where sp_pdf = '$pdf'";
	$sql=mysqli_query($connect,$querry);
	$row=mysqli_num_rows($sql);
	//var_dump($row);
	//var_dump($sql);
	if(!$row == 1)
	{
		$msg="failed".mysqli_error($connect) ;
		$inqur="insert into sample_paper (sp_subject,sp_class,sp_pdf) values('$sub','$class','$pdf')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Sample Paper Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="insert".mysqli_error($connect) ;

		
		}
	}
	else
	{
		$msg='<span><div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning! </strong>Sample Paper PDF Already in Database ,Try with new OR Rename it !</div></span>';
	
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
                            	<h3 class="panel-title">Question List</h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                            	<button type="button" name="add" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success btn-xs">Add New User</button>
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="user_table" class="table table-bordered table-striped">
                   				<thead>
									<tr>
										<th>ID</th>
										<th>Ask BY</th>
                                        <th>Email</th>
										<th>Question</th>
                                        <th>Ask Time</th>
										<th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from post"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
									<td><?php echo $data['post_id']; //var_dump($data); ?>.</td>
									<td><?php echo $data['ask_by']; ?></th>
                                    <td><?php echo $data['poster_email']; ?></th>
									<td><?php echo $data['content']; ?></td>
                                    <td><?php echo $data['date']; ?></td>
									<form method="post">
                                    
									<td><button type="submit" name="delete" id="<?php echo $data['post_id']; ?>" class="btn btn-danger btn-xs delete">Delete</button></td>
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
        		<form method="post">
        			<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add User</h4>
        			</div>
        			<div class="modal-body">
        				<div class="form-group">
							<label>Enter User Name</label>
							<input type="text" name="name" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter User Email</label>
							<input type="email" name="email" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Enter User Password</label>
							<input type="password" name="password" class="form-control" required />
						</div>
        			</div>
        			<div class="modal-footer">
        				<input type="submit" name="add_user" id="action" class="btn btn-info" value="Add" />
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
    $('#user_table').DataTable();
} );
</script>

<?php
include('footer.php');
?>
