<?php
include('database_connection.php');

if(isset($_POST['info_edit']))
{
	$num=$_POST['number'];
	$email=$_POST['email'];
	
	$querry="update web_info set number='$num',email='$email'";
    $sql=mysqli_query($connect,$querry);
	if($sql)
	{
		header('location:web_contact.php?msg=Info Edit Sucess !');
	}

}


?>