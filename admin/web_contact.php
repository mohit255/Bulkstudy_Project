<?php
//profile.php

include('database_connection.php');

if(!isset($_SESSION['admin_email']))
{
	header("location:login.php");
}


include('header.php');


$query="Select * from web_info";
$sql=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($sql);
//var_dump($sql);
//var_dump($row);
?>
<div class="main-content checkout-content">
      <div class="container">
        <!-- CHECKOUT -->
        <div class="checkout">
        <?php @$pusms=$_GET['msg']; 
		if(@$pusms)
		{ ?>
        <div class="alert alert-success alert-dismissible alt" role="alert">
          <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
          <span class="successAlert"><i class="fa fa-check" aria-hidden="true"></i></span> <?php echo($pusms) ?>
        </div>
        <?php } ?>
          <div class="form-header">
            <h4>Edit Contact Information</h4>
          </div>
          <form class="form u" action="web_contact_edit.php" method="POST">
            <div class="form-group">
              <label>Web Contact Number:</label>
              <input type="text" name="number" class="form-control" placeholder="User Name" value="<?php echo($row['number']);?>" required />
            </div>
            <div class="form-group">
              <label>Web Email:</label>
              <input type="email" name="email" class="form-control" placeholder="User Email" value="<?php echo($row['email']);?>" required />
            </div>
            <div class="form-group" align="right">          
            <button type="submit" class="btn btn-primary" name="info_edit" >Update Information</button>
            </div>
           </form>
        </div>    

        
        </div>

      </div>


