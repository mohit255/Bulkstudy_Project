<?php
include('database_connection.php');

if(isset($_POST['edit_button']))
{
	//var_dump($_POST['user_email']);
	//var_dump($_POST['user_password']);
	
	$nid=$_POST['user_nid'];
	$nname=$_POST['user_name'];
	$nemail=$_POST['user_email'];
	$npass=$_POST['user_password'];
	if($_POST['user_password']=="")
	{
		$querry="update users set user_name='$nname',user_email='$nemail' where user_id='$nid'";
	}
	else
	{
		$querry="update users set user_name='$nname',user_email='$nemail',user_password='$npass' where user_id='$nid'";
	}
    $sql=mysqli_query($connect,$querry);
	if($sql)
	{
		header('location:user.php?emsg=User Edit Success !');
	}

}
if(isset($_POST['user_delete_button']))
{
	//echo $_POST['user_nid'];
	$did=$_POST['user_nid'];
	$dquerry="delete from users where user_id=$did";
	$dsql=mysqli_query($connect,$dquerry);
	if($dsql)
	{
		header('location:user.php?dmsg=User Delete Success !');
	}
	
}


?>