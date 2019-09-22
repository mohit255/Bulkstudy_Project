<footer class="footer-v1">
  <div class="menuFooter clearfix">
    <div class="container">
      <div class="row clearfix">

        <div class="col-sm-3 col-xs-6">
          <ul class="menuLink">
            <li><a href="courses_10.php">Class 10 Study Material</a></li>
            <li><a href="course_ncrt_solution_12.php">Class 12 NCERT Solutions</a></li>
            <li><a href="course_ncrt_book_subjects_9.php">Class 9 NCERT Books</a></li>
            <li><a href="ask_question.php">Ask & Question</a></li>
          </ul>
        </div><!-- col-sm-3 col-xs-6 -->

        <div class="col-sm-3 col-xs-6 borderLeft">
          <ul class="menuLink">
            <li><a href="sample_paper.php">Practice Questions</a></li>
            <li><a href="sample_paper_view_class_10.php">10 Bord Exam Paper</a></li>
            <li><a href="sample_paper_view_class_11.php">11 Bord Exam Paper</a></li>
            <li><a href="course_ncrt_solution_10.php">Class 10 NCERT Solution</a></li>
          </ul>
        </div><!-- col-sm-3 col-xs-6 -->

        <div class="col-sm-3 col-xs-6 borderLeft">
           <ul class="menuLink">
            <li><a href="course_ncrt_solution_maths_12.php">Class 12 Maths Solution</a></li>
            <li><a href="course_ncrt_book_subjects_11.php">Class 11 Textbook Solutions</a></li>
            <li><a href="course_ncrt_book_maths_12.php">Class 12 Maths Book</a></li>
            <li><a href="last_year_paper_view_class_12.php">Class 12 Board Papers</a></li>
          </ul>
        </div><!-- col-sm-3 col-xs-6 -->

        <div class="col-sm-3 col-xs-6 borderLeft">
          <div class="socialArea">
            <h5>Find us on:</h5>
            <ul class="list-inline ">
            <li><a target="_blank" href="https://www.facebook.com/Bulk-Study-167544323968584/"><i class="fa fa-facebook"></i></a></li>
            </ul>
          </div><!-- social -->
          <div class="contactNo">
            <h5>Call us on:</h5>
            <b>+91 89623334644 </b>
          </div><!-- contactNo -->
        </div><!-- col-sm-3 col-xs-6 -->

      </div><!-- row -->
    </div><!-- container -->
  </div><!-- menuFooter -->

  <div class="footer clearfix">
    <div class="container">
      <div class="row clearfix">
        <div class="col-sm-6 col-xs-12 copyRight">
          <p>© 2018 Copyright BulkStudy Developed By: <a href="https://www.facebook.com/mohit.chack">Mohit Chack</a></p>
        </div><!-- col-sm-6 col-xs-12 -->
        <div class="col-sm-6 col-xs-12 privacy_policy">
          <a href="contact_us.php">Contact us</a>
          <a href="about_us.php">About</a>
        </div><!-- col-sm-6 col-xs-12 -->
      </div><!-- row clearfix -->
    </div><!-- container -->
  </div><!-- footer -->
</footer>

</div>

<!-- REGISTER MODAL -->
<div class="modal fade customModal" id="createAccount" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="panel panel-default formPanel">
      <div class="panel-heading">
        <h3 class="panel-title">Sign Up To Connect</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="panel-body">
      <div id="rerro"></div>
        <form class="form c" action="auth.php" method="POST" role="form">
          <div class="form-group formField">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" class="form-control" name="name" placeholder="Full Name">
          </div>
          <div class="form-group formField">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group formField">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" class="form-control" name="pass" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-block commonBtn" name="regis">Register</button>
          
        </form>
      </div>
      <div class="panel-footer">
      </div>
    </div>
  </div>
</div>
</div>

<!-- LOGIN MODAL -->
<div class="modal fade customModal" id="loginModal" tabindex="-1" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="panel panel-default formPanel">
      <div class="panel-heading">
        <h3 class="panel-title">Log In to your Account</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="panel-body">
      <div id="erro"></div>
        <form class="form a" action="auth.php" method="POST" role="form">
          <div class="form-group formField">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group formField">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" name="pass" class="form-control" placeholder="Password">
          </div>
          <button type="submit" name="login" class="btn btn-block commonBtn">Log in</button>
          
        </form>
        
                
      </div>
      <div class="panel-footer">
      </div>
    </div>
  </div>
</div>
</div>


<!-- JQUERY SCRIPTS -->
<script src="plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/flexslider/jquery.flexslider.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/pop-up/jquery.magnific-popup.js"></script>
<script src="plugins/animation/waypoints.min.js"></script>
<script src="plugins/count-up/jquery.counterup.js"></script>
<script src="plugins/animation/wow.min.js"></script>
<script src="plugins/animation/moment.min.js"></script>
<script src="plugins/calender/fullcalendar.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="plugins/timer/jquery.syotimer.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.js"></script>
<script src="js/custom.js"></script>
<?php
if(@$err)
{ ?>
<script>
var emodal="<?php print($err);?>";
var eplace='<div class="alert alert-danger fade in" style="font-size: 15px;">'+emodal+'</div>';
console.log(emodal);
 $(window).on('load',function(){
 $('#loginModal #erro').html(eplace);
 $('#loginModal').modal('show');
});
</script>
<?php } ?>

<?php
if(@$rerr)
{?>
<script>
var rmodal="<?php print($rerr);?>";
var reeplace='<div class="alert alert-danger fade in" style="font-size: 15px;">'+rmodal+'</div>';
console.log(rmodal);
$(window).on('load',function(){
	$('#createAccount #rerro').html(reeplace);
	$('#createAccount').modal('show');
});
</script>
<?php } ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=1383024815136100&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" src="js/jquery.validate.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$.validator.addMethod("nourl", 
                    function(value, element) {
                         return !/http\:\/\/|www\.|link\=|url\=/.test(value);
                        }, 
                        "No URL's"
      );
			  
		  $(".form.b").validate({
				rules: {
					type:{
						required: true
					},
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					msg: {
					required: true
					}
				},
				messages: {
					name: "Name Required !",
					email: "Email Required !",
					msg: "Message Required !",
				}
		  });
		  
		  $(".form.c").validate({
				rules: {
					type:{
						required: true
					},
					name: {
					required: true
					},
					email: {
					required: true,
					email: true
					},
					pass: {
					required: true,
					minlength:6
					}
				},
				messages: {
					name: "Full Name Required !",
					email: "Email Required !",
					pass: "Password Must Be 6 Or More Then 6 Digits Long !",
				}
		  });
		  
		  $(".form.a").validate({
				rules: {
					type:{
						required: true
					},
					email: {
					required: true,
					email: true
					},
					pass: {
					required: true,
					}
				},
				messages: {
					email: "Email Required !",
					pass: "Password Required !",
				}
		  });
		  
		  $(".form.u").validate({
				rules: {
					type:{
						required: true
					},
					user_name:{
					required: true,
					},
					user_email: {
					required: true,
					email: true
					},
					new_password: {
					},
					confirm_password: {
					equalTo: "#new_password"
					}
				},
				messages: {
					user_name: "User Name Required !",
					user_email: "Email Required !",
					new_password: "Password Required !",
					confirm_password: "Password Required !",
				}
		  });
		  
		  $(".form.q").validate({
				rules: {
					type:{
						required: true
					},
					post_content: {
					required: true
					}
				},
				messages: {
					post_content: "Write Your Question First !",
				}
		  });
		  
		  $(".form.d").validate({
				rules: {
					type:{
						required: true
					},
					comment_content: {
					required: true
					}
				},
				messages: {
					comment_content: "Write Your Comment First !",
				}
		  });
						
	});
	</script>


</body>

</html>
