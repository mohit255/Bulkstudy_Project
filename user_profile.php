<?php
include('includes/connect.php');
include('includes/header.php');
?>
<?php
if(@!$_SESSION['email'])
{
	header('location:index.php');
}
$query="Select * from users where user_email='".$_SESSION['email']."'";
$sql=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($sql);
//var_dump($row);
?>
<div class="main-content checkout-content">
      <div class="container">
        <!-- CHECKOUT -->
        <div class="checkout">
        <?php @$pusms=$_GET['pums']; 
		if(@$pusms)
		{ ?>
        <div class="alert alert-success alert-dismissible alt" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
          <span class="successAlert"><i class="fa fa-check" aria-hidden="true"></i></span> <?php echo($pusms) ?>
        </div>
        <?php } ?>
          <div class="form-header">
            <h4>User Profile</h4>
          </div>
          <form class="form u" action="edit_profile.php" method="POST" role="form">
            <div class="form-group">
              <label for="">User Name:</label>
              <input type="text" name="user_name" id="iser_name" class="form-control" placeholder="User Name" value="<?php echo($row['user_name']);?>">
            </div>
            <div class="form-group">
              <label for="">User Email:</label>
              <input type="email" name="user_email" id="user_email" class="form-control" placeholder="User Email" value="<?php echo($row['user_email']);?>" disabled="disabled">
            </div>
            <div>
            <label>Leave Password blank if you do not want to change</label>
            </div>
            <div class="form-group">
              <label for="">New Password:</label>
              <input type="password" name="user_new_password" id="new_password" class="form-control" placeholder="New Password">
            </div>
            <div class="form-group">
              <label for="">Confirm Password:</label>
              <input type="password" name="user_re_enter_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
              <div id="error_password"></div>
              <br />
            </div>
            <div class="form-group">          
            <button type="submit" class="btn commonBtn">Update Profile</button>
            </div>
           </form>
        </div>    

        
        </div>

      </div>


<?php include('includes/footer.php');?>
