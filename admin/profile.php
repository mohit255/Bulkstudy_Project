<?php
//profile.php

include('database_connection.php');

if(!isset($_SESSION['admin_email']))
{
	header("location:login.php");
}


include('header.php');


$query="Select * from admin";
$sql=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($sql);
//var_dump($sql);
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
          <form class="form u" action="profile_edit.php" id="edit_profile" method="POST">
            <div class="form-group">
              <label for="">User Name:</label>
              <input type="text" name="aname" id="iser_name" class="form-control" placeholder="User Name" value="<?php echo($row['name']);?>">
            </div>
            <div class="form-group">
              <label for="">User Email:</label>
              <input type="email" name="aemail" id="user_email" class="form-control" placeholder="User Email" value="<?php echo($row['email']);?>">
            </div>
            <div>
            <label>Leave Password blank if you do not want to change</label>
            </div>
            <div class="form-group">
              <label for="">New Password:</label>
              <input type="password" name="a_new_password" id="new_password" class="form-control" placeholder="New Password">
            </div>
            <div class="form-group">
              <label for="">Confirm Password:</label>
              <input type="password" name="a_re_enter_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
              <div id="error_password"></div>
              <br />
            </div>
            <div class="form-group">          
            <button type="submit" class="btn btn-primary" >Update Profile</button>
            </div>
           </form>
        </div>    

        
        </div>

      </div>


