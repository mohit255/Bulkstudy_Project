<?php
include('database_connection.php');

if(isset($_POST['edit_ncrt_book']))
{
	//var_dump($_POST['user_email']);
	$id=$_POST['nb_id'];
	$name=$_POST['nb_name'];
	//echo $id;
	$class=$_POST['nb_class'];
	$sub=$_POST['nb_subject'];
	$year=$_POST['nb_year'];
	$pdf=$_POST['nb_pdf'];
	$img=$_POST['nb_img'];
	echo $id ." ".$name." ".$class." ".$sub." ".$year." ".$pdf." ".$img;
	//$querry="update ncrt_book set book_name='$name',book_class='$class',book_subject='$sub',book_year='$year',book_pdf='$pdf',book_image='$img' where id='$id'";
    //$sql=mysqli_query($connect,$querry);
	//if($sql)
	{
		//header('location:user.php?emsg=Book Edit Sucess !');
	}

}


?>