<?php
include('database_connection.php');
$id=$_POST['nid'];
//echo $id;

$querry="SELECT * from users where user_id=".$id; 
$sql=mysqli_query($connect,$querry);
$row=mysqli_fetch_array($sql);
?>

<form  action="user_action.php" method="post">
    
    <div class="form-group">
    <label>User Email</label>
        <input type="email" name="user_email" id="user_email" class="form-control" value="<?php echo $row['user_email'];?>" disabled="disabled" required />
    </div>
        <input type="hidden" name="user_nid" value="<?php echo $row['user_id'];?>">
		<input type="submit" name="user_delete_button" id="action" class="btn btn-info" value="Delete" />
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    
</form>
