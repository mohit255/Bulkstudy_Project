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

/* ################################ ADD USER ################################## */
$msg="";
if(@$_GET['dmsg'])
{
    @$dmsg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>'.$_GET['dmsg'].'</div></span>';
}
if(@$_GET['emsg'])
{
	@$emsg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>'.$_GET['emsg'].'</div></span>';
}
if(isset($_POST['add_user']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$querry="Select * from users where user_email='$email'";
	$sql=mysqli_query($connect,$querry);
	$row=mysqli_num_rows($sql);
	if(!$row == 1)
	{
		$inqur="insert into users (user_name,user_email,user_password) values('$name','$email','$pass')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>User Added Sucessfully !</div></span>';
		}
	}
	else
	{
		$msg='<span><div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning! </strong>This Email Already Registered ,Try With New One !</div></span>';
	
	}

}
?>
		<span id="alert_action"></span>
		<div class="row">
			<div class="col-lg-12">
            <?php echo @$msg; echo @$emsg; echo @$dmsg; ?>
		<span id="alert_action"></span>
     
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>BulkStudy User List</b></h3>
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
										<th>Name</th>
										<th>Email</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from users"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
									<td><?php echo $data['user_id']; //var_dump($data); ?>.</td>
									<td><?php echo $data['user_name']; ?></th>
									<td><?php echo $data['user_email']; ?></td>
                                    <td><button type="button" name="update" data-id="<?php echo $data['user_id']; ?>" class="btn btn-info btn-xs uedit">Edit</button></td>
									<td><button type="button" name="delete" data-id="<?php echo $data['user_id']; ?>" class="btn btn-danger btn-xs udelete">Delete</button></td>
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
        				<input type="submit" name="add_user" class="btn btn-info" value="Add" />
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        		</form>

        	</div>
        </div>
        
        <div id="edit_user" class="modal fade">
        	<div class="modal-dialog">
        			<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit User</h4>
        			</div>
        			<div class="modal-body">
              		<form method="post">

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

        			   </form>
                    </div>
        			<div class="modal-footer">
        			</div>
        		</div>

        	</div>
        </div>
        
        <div id="deleteModal" class="modal fade">
        	<div class="modal-dialog">
        			<div class="modal-content">
        			<div class="modal-header">
       				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title"><i class="fa fa-plus"></i> Delete User</h4>
        			</div>
        			<div class="modal-body">
                 <form method="post">   
        				
						
						
        			
        			<div class="modal-footer">
        				<input type="submit" name="add_user" class="btn btn-info" value="Add" />
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			</div>
                    </div>
        		</div>
        		</form>

        	</div>
        </div>
        

<script>
$(document).ready(function() {
    $('#user_table').DataTable();
	
	
	$('.uedit').click(function(){
		var id=$(this).data("id");
		$.ajax({ 
				method:"POST",
				url:"user_edit.php",
				data:{"sno":id},
				dataType:"html",
				success:function(data)
				{
					//console.log(data);
					$("#edit_user .modal-body").empty();
					$("#edit_user .modal-body").html(data);
					$("#edit_user").modal();
                }
               });
      });
	  
	  
	  
	  $('.udelete').click(function(){
		  var uid=$(this).data("id");
		  $.ajax({
			  method:"POST",
			  url:"user_delete.php",
			  data:{"nid":uid},
			  dataType:"html",
			  success:function(data)
			  {
				  $("#deleteModal .modal-body").empty();
				  $("#deleteModal .modal-body").html(data);
				  $("#deleteModal").modal();
			  }
		  });
	  });
});
</script>
<?php
include('footer.php');
?>
