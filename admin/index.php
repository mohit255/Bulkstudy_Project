<?php
//index.php
include('database_connection.php');

if(!isset($_SESSION["admin_email"]))
{
	header("location:login.php");
}

include('header.php');

?>
	<br />
	<div class="row">
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total User</strong></div>
			<div class="panel-body" align="center">
				<h1>
				<?php 
				$query = "SELECT * FROM users"; 
				$sql=mysqli_query($connect,$query);
				$total_users=mysqli_num_rows($sql);
				echo $total_users;
				?></h1>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Classes</strong></div>
			<div class="panel-body" align="center">
				<h1>
				<?php 
				$query = "SELECT book_class FROM ncrt_book;"; 
				$sql=mysqli_query($connect,$query);
				$single_class[]="";
				while($row=mysqli_fetch_assoc($sql))
				{
				
					$book=array($row['book_class']);
					if (!in_array($row['book_class'], $single_class))
				  {
					  $single_class[]=$row['book_class'];
				  }
				}
				//var_dump($single_class);
				echo count($single_class)-1;
				?>
                </h1>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Subjects</strong></div>
			<div class="panel-body" align="center">
				<h1>
				<?php 
				$query = "SELECT book_subject FROM ncrt_book;"; 
				$sql=mysqli_query($connect,$query);
				$single_subject[]="";
				while($row=mysqli_fetch_assoc($sql))
				{
				
					$sub=array($row['book_subject']);
					if (!in_array($row['book_subject'], $single_subject))
				  {
					  $single_subject[]=$row['book_subject'];
				  }
				}
				//var_dump($single_subject);
				echo count($single_subject)-1;
				?>
                </h1>
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading"><strong>Total Asked Questions</strong></div>
			<div class="panel-body" align="center">
				<h1>
				<?php 
				$query = "SELECT * FROM post"; 
				$sql=mysqli_query($connect,$query);
				$total_post=mysqli_num_rows($sql);
				echo $total_post;
				?>
                </h1>
			</div>
		</div>
	</div>

		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Ncrt Books</strong></div>
				<div class="panel-body" align="center">
					<h1>
					<?php
					$query = "SELECT * FROM ncrt_book"; 
					$sql=mysqli_query($connect,$query);
					$total_post=mysqli_num_rows($sql);
					echo $total_post;

					?>
                    </h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Ncrt Solutions</strong></div>
				<div class="panel-body" align="center">
					<h1>
					<?php
					$query = "SELECT * FROM ncrt_solution"; 
					$sql=mysqli_query($connect,$query);
					$total_post=mysqli_num_rows($sql);
					echo $total_post;
					?>
                    </h1>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading"><strong>Total Sample Papers</strong></div>
				<div class="panel-body" align="center">
					<h1>
					<?php
					$query = "SELECT * FROM sample_paper"; 
					$sql=mysqli_query($connect,$query);
					$total_post=mysqli_num_rows($sql);
					echo $total_post;

					?>
                    </h1>
				</div>
			</div>
		</div>
		<hr />
        
		      
        
	</div>

<?php
include("footer.php");
?>