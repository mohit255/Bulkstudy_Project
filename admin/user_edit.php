<?php
include('database_connection.php');
$id=$_POST['sno'];
//echo $id;

$querry="SELECT * from users where user_id=".$id; 
$sql=mysqli_query($connect,$querry);
$row=mysqli_fetch_array($sql);
?>


<form  action="user_action.php" method="post">
    <div class="form-group">
        <label>Enter User Name</label>
        <input type="text" name="user_name" id="user_name" class="form-control" value="<?php echo $row['user_name'];?>" required />
    </div>
    <div class="form-group">
        <label>Enter User Email</label>
        <input type="email" name="user_email" id="user_email" class="form-control" value="<?php echo $row['user_email'];?>" required />
    </div>
    <div class="form-group">
        <label>Enter User Password</label>
        <input type="password" name="user_password" id="user_password" class="form-control" />
    </div>
        <input type="hidden" name="user_nid" value="<?php echo $row['user_id'];?>">
		<input type="submit" name="edit_button" id="action" class="btn btn-info" value="Edit" />
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
</form>
