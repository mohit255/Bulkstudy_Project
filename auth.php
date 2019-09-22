<?php
ob_start();
session_start();
include('includes/connect.php');
if(isset($_POST['regis']))
{
	//echo $_POST['name']." ".$_POST['email']." ".$_POST['pass'];
	$pname=$_POST['name'];
	$pemail=$_POST['email'];
	$ppass=$_POST['pass'];
	$query="select * from users where user_email='$pemail'";
	$sql=mysqli_query($con,$query);
	$qury=mysqli_num_rows($sql);
	//var_dump($qury);
    if(!$qury == 1)
	    {
			$inquerry="insert into users (user_name,user_email,user_password) values ('$pname','$pemail','$ppass')";
			$sql=mysqli_query($con,$inquerry);
	        if($sql)
	               {
					   $_SESSION['name']=$pname;
					   $_SESSION['email']=$pemail;
					   //echo $_SESSION['email'];
					   
						require 'PHPMailer/PHPMailerAutoload.php';
						
						$mail = new PHPMailer;
						
						$mail->SMTPDebug = 0;                               
						
						$mail->isSMTP();                            
						$mail->Host = 'mail.arwebtechsolution.com';
						$mail->SMTPAuth = true;                    
						$mail->Username = '_mainaccount@arwebtechsolution.com'; 
						$mail->Password = '8J@@@@2222####3333';                 
						$mail->SMTPSecure = 'tls';                            
						$mail->Port = 587;                                    
						
						$mail->setFrom('mohitchack21@gmail.com', 'Bulk Study');
						$mail->addAddress($_POST['email'],$_POST['name'] );   
						//$mail->addAddress('other@example.com');             
						$mail->addReplyTo('mohitchack255@gmail.com', 'Information');
						$mail->isHTML(true);               
						
						$mail->Subject = 'Bulk Study Website Mail';
						$mail->Body    = '<h2>Welcome To BulkStudy '.$_POST['name'].'</h2>We want to have give student a brighter future with plenty of knowledge that is gonna use by them whole life we have seen the students that they get solution from their respective tutors on perticular subject but they are unable to explore the world of education in the way they can explore it.';
						$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
						
						//var_dump($_POST['email']);
						//var_dump($_POST['name']);
						
						if(!$mail->send()) {
    //echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
   $mail_msg="";
} else {
    //echo 'Message has been sent';
	$mail_msg="";
}

						


					   header('location:index.php');
	               }
			
	       
		}	
		 else
	               {
					   //echo "Failed";
					   header('location:index.php?ms=Email Already Register!');
	               }
	

}
if(isset($_POST['login']))
{
	//echo $_POST['email']." ".$_POST['pass'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$squerry="SELECT * FROM users WHERE user_email='$email' AND user_password='$pass'";
    $sql=mysqli_query($con,$squerry);
	$row=mysqli_num_rows($sql);
	//$data=mysql_fetch_assoc($sql);
	//$da=mysql_affected_rows($sql);
	//$d=mysql_fetch_array($sql);
	//echo "mysql_num_rows"." ". var_dump($row);
	//echo "mysql_fetch_assoc"." ". var_dump($data);
	//echo "mysql_affected_rows"." ". var_dump($da);
	//echo "mysql_fetch_array"." ". var_dump($d);
	if($row == 1)
	{
		echo "Login success";
		$data[]=mysqli_fetch_assoc($sql);
		//var_dump($data);
		//echo $data[0]['user_email'];
		$_SESSION['name']=$data[0]['user_name'];
		$_SESSION['email']=$data[0]['user_email'];
		header('location:index.php');
	}
	else
	{
		//echo "login Failed";
		header('location:index.php?tm=Email or Password is invalid');
	}
}
?>
