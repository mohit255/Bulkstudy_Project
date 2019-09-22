<?php
include('includes/connect.php');
include('includes/header.php');
?>

<?php 
if(isset($_POST['user_name']))
{
	if($_POST["user_re_enter_password"] != '')
	{
		$query = "UPDATE users SET user_name = '".$_POST["user_name"]."',user_password = '".$_POST["user_re_enter_password"]."' 
			WHERE user_email = '".$_SESSION['email']."'
		";
	}
	else
	{
		$query ="UPDATE users SET user_name = '".$_POST["user_name"]."' WHERE user_email = '".$_SESSION['email']."'";
	}
		$sql=mysqli_query($con,$query);

	if(isset($sql))
	{
		//echo "sucess";
		header('location:user_profile.php?pums=Profile update Sucessfully.');
	}
}

?>

<?php include('includes/footer.php');?>