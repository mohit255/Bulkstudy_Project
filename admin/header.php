<?php
//header.php
?>
<!DOCTYPE html>
<html>
	<head>
		<title>BulkStudy | Admin</title>
		<script src="js/jquery-1.10.2.min.js"></script>
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/dataTables.bootstrap.min.js"></script>		
		<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<h2 align="center"><a target="_new" href="../index.php">BulkStudy</a> Admin</h2>

			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a href="index.php" class="navbar-brand">Home</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="user.php">User</a></li>
						<li><a href="ncrt_book.php">Ncrt Book</a></li>
  						<li><a href="ncrt_book_chapters.php">Ncrt Book Chapters</a></li>
                        <li><a href="ncrt_solution.php">Ncrt Solution</a></li>
                        <li><a href="ncrt_solution_chapters.php">Ncrt Solution Chapters</a></li>
						<li><a href="sample_pagers.php">Sample Paper</a></li>
						<li><a href="last_year_papers.php">Last Year Paper</a></li>
						<li><a href="posts.php">Question</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count"></span> <?php echo $_SESSION["admin_name"]; ?></a>
							<ul class="dropdown-menu">
                                <li><a href="web_contact.php">Setting</a></li>
								<li><a href="profile.php">Profile</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul>

				</div>
			</nav>
			