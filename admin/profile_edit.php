<?php
//profile_edit.php

include('database_connection.php');

if(!isset($_SESSION['admin_email']))
{
	header("location:login.php");
}


include('header.php');

?>

<?php 
if(isset($_POST['aname']))
{
	if($_POST["a_re_enter_password"] != '')
	{
		$query ="UPDATE admin SET name = '".$_POST["aname"]."',email='".$_POST['aemail']."',password = '".$_POST["a_re_enter_password"]."'";
	}
	else
	{
		$query = "UPDATE admin SET name = '".$_POST["aname"]."',email = '".$_POST['aemail']."'";
	}
	$sql=mysqli_query($connect,$query);
	if(isset($sql))
	{
		//echo "sucess";
		header('location:profile.php?pums=Profile update Sucessfully.');
	}
}

?>

