<?php
include('includes/connect.php');
include('includes/header.php');
?>

<?php
$mail_msg = NULL;
if(isset($_POST['send_mail']))
{
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

$mail->setFrom($info['email'], 'Bulk Study');
$mail->addAddress($info['email'],$_POST['name'] );   
//$mail->addAddress('other@example.com');             
$mail->addReplyTo($_POST['email'], 'Information');
$mail->isHTML(true);               

$mail->Subject = 'Bulk Study Website Mail';
$mail->Body    = '<b>From</b> '.$_POST['name'].'<h3>Messege</h3> '. $_POST['msg'];
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    //echo 'Message could not be sent.';
   // echo 'Mailer Error: ' . $mail->ErrorInfo;
   $mail_msg="<div class='alert alert-danger alert-dismissible alt' role='alert'>
          <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>×</span></button>
          <span><i aria-hidden='true'></i></span>Something went wrong !</div>";
} else {
    //echo 'Message has been sent';
	$mail_msg="<div class='alert alert-success alert-dismissible alt' role='alert'>
          <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>×</span></button>
          <span class='successAlert'><i class='fa fa-check' aria-hidden='true'></i></span>Message has been send.</div>";
}
}
?>

<div class="custom_content custom">
			<div class="container large">
				<div class="row">
					<div class="col-xs-12 col-sm-8 custom_right">
						<div class="single_content_left">
							<h3>Contact Form</h3>
							<p>BULK STUDY is an online education portal that provides interactive study 
material for students of classes 9th to 12th for NCERT and Tamil Nadu boards. Complete with elaborate 
live classes,multimedia tutorials, interactive exercises, practice tests and expert help, we endeavour to
 make school easy for students and help them score more. We also provide free NCERT solutions, subject-wise
 synopses and chapter-wise revision notes for classes 9th to 12th for a thorough understanding of concepts right from a basic to an advanced level of difficulty. Our products are carefully designed to
 ensure maximum learning through proven techniques such as conceptual.</p>
 <?php
 echo @$mail_msg; ?>
							<div class="contact_form">
								<form class="form b" method="post">
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Name <span class="error">*</span></label>
												<input type="text" class="form-control" name="name">
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-7">
											<div class="form-group">
												<label>Email <span class="error">*</span></label>
												<input type="text" class="form-control" name="email">
											</div>
										</div>
									</div><!--end row-->
									<div class="row">
										<div class="col-xs-12 col-sm-11">
											<div class="form-group">
												<label>Message <span class="error">*</span></label>
												<textarea name="msg" class="form-control" cols="10" rows="9"></textarea>
											</div>
										</div>
									</div><!--end row-->
									<input type="submit" name="send_mail" value="Send Message" class="commonBtn">
								</form>
							</div>
						</div><!--end single content left-->
					</div>

					<div class="col-xs-12 col-sm-4 custom_left">
						<div class="sidebar">
                        <div class="list_block">
								<h3>Facebook</h3>
								<div class="facebook_section">
									<img src="img/home/bulkfacebook.png" alt="" />
								</div><!--end facebook section-->
							</div>
							<div class="list_block sidebar_item">
								<h3>Contacts</h3>
								<ul class="contact_info">
									<li><i class="fa fa-home"></i> Gwalior, M.P.</li>
									<li><i class="fa fa-envelope"></i> <a href="mailto:bulkstudy.com@gmail.com">mohitchack255@gmail.com</a></li>
									<li><i class="fa fa-phone"></i>+91 8962334644</li>
								</ul>
							</div>
							<div class="list_block">
								<h3>Contact Hours</h3>
								<ul class="contact_info">
									<li><strong>Monday-Friday:</strong> 10am to 8pm</li>
									<li><strong>Saturday:</strong> 11am to 3pm</li>
								</ul>
							</div><!--end sidebar item-->
							<!--<div class="list_block">
								<div class="newsletter">
									<h3>Newsletter</h3>
									<form method="post" action="#">
										<div class="form-group">
										  <input type="text" placeholder="Email" id="exampleInputEmail1" class="form-control">
										</div>
										<button class="btn btn-default btn-block commonBtn" type="submit">Subscribe</button>
									</form>
								</div>
							</div>-->
						</div><!--end sidebar-->
					</div>
				</div><!--end row-->
			</div>
		</div><!--end custom content-->

<?php include('includes/footer.php');?>