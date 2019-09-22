<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bulk Study</title>

  <!-- PLUGINS CSS STYLE -->
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/flexslider/flexslider.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="plugins/calender/fullcalendar.min.css">
  <link rel="stylesheet" href="plugins/animate.css">
  <link rel="stylesheet" href="plugins/pop-up/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
  <link rel="stylesheet" type="text/css" href="plugins/owl-carousel/owl.carousel.css" media="screen">
  <link rel="stylesheet" href="plugins/selectbox/select_option1.css">


  <!-- GOOGLE FONT -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,600italic,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/style.css">
<!--  <link rel="stylesheet" href="css/default.css" id="option_color">
-->
<style>
.topbar-right li a{
	color:#FFF;}
.alert .danger_close {
    top: 12px;
    right: 0;
    color: #7b232f;
    opacity: 1;
    filter: alpha(opacity=100);
}	

.form.c label.error {
position: relative;
color: #d9534f;
position: relative;
display: -webkit-box;
/*top: -70px;*/
/*font-size: 13px;*/
}
.form.c input.error, textarea.error{	
border: solid 1px rgba(255, 0, 0, 0.4);
}



.form.a label.error {
position: relative;
color: #d9534f;
position: relative;
display: -webkit-box;
/*top: -70px;*/
/*font-size: 13px;*/
}
.form.a input.error{	
border: solid 1px rgba(255, 0, 0, 0.4);
}
.form.u label.error {
position: relative;
color: #d9534f;
position: relative;
display: -webkit-box;
/*top: -70px;*/
/*font-size: 13px;*/
}
.form.u input.error{	
border: solid 1px rgba(255, 0, 0, 0.4);
}

.form.b label.error {
position: relative;
color: #d9534f;
position: relative;
display: -webkit-box;
/*top: -70px;*/
/*font-size: 13px;*/
}
.form.b input.error{	
border: solid 1px rgba(255, 0, 0, 0.4);
}

.form.q label.error {
position: relative;
color: #d9534f;
position: relative;
display: -webkit-box;
/*top: -70px;*/
/*font-size: 13px;*/
}
.form.q textarea.error{	
border: solid 1px rgba(255, 0, 0, 0.4);
}

.form.d label.error {
position: relative;
color: #d9534f;
position: relative;
display: -webkit-box;
/*top: -70px;*/
/*font-size: 13px;*/
}
.form.d textarea.error{	
border: solid 1px rgba(255, 0, 0, 0.4);
}

@media screen and (min-width: 992px) {
  div.mb-header {
    display: none;
  }

}


</style>
</head>
<body class="body-wrapper">

  <div class="main_wrapper">
<?php 
	$querry="Select * from web_info";
	$sql=mysqli_query($con,$querry);
	$info=mysqli_fetch_array($sql);

?>
    <header class="header-wrapper">
    
    
    
    <div class="mb-header" style="background:#0060b1; width:100%; height:40px;">
    <ul class="topbar-left">
            <li style="margin-left: 10px; margin-top: 8px;" class="email-id"><i class="fa fa-envelope"></i>
              <a href="#"><?php echo $info['email']; ?></a>
            </li>
    </ul>
    
    <?php 
			if(!@$_SESSION['email'])
			{?>
             <ul class="topbar-right">
            <li style="margin-right: 10px; margin-top: 8px;">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			  <a href='#loginModal' data-toggle="modal" >Login</a><span>/</span>
              <a href='#createAccount' data-toggle="modal">  Register</a>
			<?php }
			else
			{ ?>
            <ul class="topbar-right">
            <li style="margin-right: 10px; margin-top: 8px;">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <a style="text-transform:capitalize;"><?php echo $_SESSION['name']; ?></a>
            </li>
            <li class="dropdown language">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="user_profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
            </li>
          </ul>
			<?php }
			?>
            </li>
          </ul>
    
    
    </div>
    
    
    
    
    
    
    
    
      <div class="topbar clearfix">
        <div class="container">
          <ul class="topbar-left">
            <li class="phoneNo"><i class="fa fa-phone"></i><?php echo $info['number']; ?></li>
            <li class="email-id hidden-xs hidden-sm"><i class="fa fa-envelope"></i>
              <a href="#"><?php echo $info['email']; ?></a>
            </li>
          </ul>
         
            <?php //echo @$_SESSION['name']; ?>
            <?php 
			if(!@$_SESSION['email'])
			{?>
             <ul class="topbar-right">
            <li>
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
			  <a href='#loginModal' data-toggle="modal" >Login</a><span>/</span>
              <a href='#createAccount' data-toggle="modal">  Register</a>
			<?php }
			else
			{ ?>
            <ul class="topbar-right">
            <li>
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <a style="text-transform:capitalize;"><?php echo $_SESSION['name']; ?></a>
            </li>
            <li class="dropdown language">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-caret-down"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="user_profile.php">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
                </ul>
            </li>
          </ul>
			<?php }
			?>
            </li>
          </ul>
        </div>
      </div>

      <div class="header clearfix">
        <nav class="navbar navbar-main navbar-default">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="header_inner">

                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand logo clearfix" href="index.php"><img src="img/Final BULK.png" alt="" class="img-responsive" /></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav navbar-right">
                      <li class="active">
                        <a href="index.php" class="dropdown-toggle"  role="button" aria-haspopup="true">Home</a>
                      </li>
                      <li class=" dropdown">
                        <a href="courses.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
                            <ul class="dropdown-menu">
                              <li><a href="courses_9.php">Class 9</a></li>
                              <li><a href="courses_10.php">Class 10</a></li>
                              <li><a href="courses_11.php">Class 11</a></li>
                              <li><a href="courses_12.php">Class 12</a></li>
                            </ul>
                      </li>
                      <li>
                        <a href="sample_paper.php" class="dropdown-toggle">Sample Papers</a>
                        
                      </li>
                      <li>
                        <a href="last_year_paper.php" class="dropdown-toggle">Last Year Exam Paper</a>
                        
                      </li>
                      <li>
                        <a href="ask_question.php" class="dropdown-toggle">Ask & Question</a>
                        
                      </li>
                      
                      <li>
                        <a href="about_us.php" class="dropdown-toggle">About Us</a>
                        
                      </li>
                    </ul>
                  </div><!-- navbar-collapse -->

                </div>
              </div>
            </div>
          </div><!-- /.container -->
        </nav><!-- navbar -->
      </div>
    </header>