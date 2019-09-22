<?php
//login.php

include('database_connection.php');

if(isset($_SESSION['email']))
{
	header("location:index.php");
}

$message = '';

if(isset($_POST["login"]))
{
	$pemail=$_POST['email'];
	$ppass=$_POST['password'];
	$query ="SELECT * FROM admin WHERE email ='$pemail' AND password='$ppass'";
	$sql=mysqli_query($connect,$query);
	$row=mysqli_num_rows($sql);
	if($row == 1)
	{
		//echo "sucess";
		$data=mysqli_fetch_assoc($sql);
		//var_dump($data);
		//var_dump($_SESSION['admin_email']);
		$_SESSION['admin_email'] = $data['email'];
		$_SESSION['admin_name'] = $data['name'];
		header("location:index.php");
	}
	else
	{
	$message = "<label>Wrong Email Address Or Password</labe>";
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin | BulkStudy</title>		
		<script src="js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<h2 align="center"><a target="_new" href="../index.php">Bulkstudy</a> Admin Login</h2>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					<form method="post">
						<?php echo $message; ?>
						<div class="form-group">
							<label>User Email</label>
							<input type="text" name="email" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control" required />
						</div>
						<div class="form-group">
							<input type="submit" name="login" value="Login" class="btn btn-info" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>