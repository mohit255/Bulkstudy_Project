<?php
//ncrt_book.php

include('database_connection.php');

if(!isset($_SESSION["admin_email"]))
{
	header('location:login.php');
}

include('header.php');

if(isset($_POST['update']))
{
 //header('location:home.php');
}

/* ################################ ADD USER ################################## */
$msg="";

if(isset($_POST['add_ncrt_book']))
{
	//var_dump($_POST['nb_name']);
	//var_dump($_POST['nb_class']);
	//var_dump($_POST['nb_subject']);
	//var_dump($_POST['nb_year']);
	//var_dump($_POST['nb_pdf']);
	//var_dump($_POST['nb_image']);
	$name=$_POST['nb_name'];
	$class=$_POST['nb_class'];
	$sub=$_POST['nb_subject'];
	$year=$_POST['nb_year'];
	//$pdf=$_FILES['nb_pdf']['name'];
	$link=$_POST['nb_link'];
	$img=$_FILES['nb_image']['name'];
	$querry="Select * from ncrt_book where book_pdf = '$link'";
	$sql=mysqli_query($connect,$querry);
	$row=mysqli_num_rows($sql);
	//var_dump($row);
	//var_dump($sql);
	if(!$row == 1)
	{
		$msg="failed".mysqli_error($connect) ;
		$inqur="insert into ncrt_book (book_name,book_class,book_subject,book_year,book_pdf,book_image) values('$name','$class','$sub','$year','$link','$img')";
		$insql=mysqli_query($connect,$inqur);
		if($insql)
		{
			//move_uploaded_file($_FILES['nb_pdf']['tmp_name'],"../books/books_pdf/".$pdf);
			move_uploaded_file($_FILES['nb_image']['tmp_name'],"../books/books_image/".$img);
			$msg='<span><div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success! </strong>Ncrt Book Added Sucessfully !</div></span>';
		}
		else
		{
					$msg="insert".mysqli_error($connect) ;

		
		}
	}
	else
	{
		$msg='<span><div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Warning! </strong>Ncrt Boook PDF Already in Database ,Try with new OR Rename it !</div></span>';
	
	}

}
?>
		<span id="alert_action"></span>
		<div class="row">
			<div class="col-lg-12">
            <?php echo @$msg; ?>
				<div class="panel panel-default">
                    <div class="panel-heading">
                    	<div class="row">
                        	<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
                            	<h3 class="panel-title"><b>Ncrt Book List</b></h3>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6" align="right">
                            	<button type="button" name="add" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-success btn-xs">Add New Ncrt Book</button>
                        	</div>
                        </div>
                       
                        <div class="clear:both"></div>
                   	</div>
                   	<div class="panel-body">
                   		<div class="row"><div class="col-sm-12 table-responsive">
                   			<table id="ncrt_book_table" class="table table-bordered table-striped">
                   				<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Class</th>
                                        <th>Subject</th>
                                        <th>Year</th>
                                        <th>PDF File</th>
                                        <th>Image</th>
										<th>Edit</th>
										<th>Delete</th>
									</tr>
                                    
								</thead>
                                <?php $querry="SELECT * from ncrt_book"; 
								$sql=mysqli_query($connect,$querry);
								while($data=mysqli_fetch_assoc($sql))
								{
								?>
                                <tr>
									<td><?php echo $data['id']; //var_dump($data); ?>.</td>
									<td><?php echo $data['book_name']; ?></th>
									<td><?php echo $data['book_class']; ?></td>
                                    <td><?php echo $data['book_subject']; ?></td>
                                    <td><?php echo $data['book_year']; ?></td>
                                    <td><?php echo $data['book_pdf']; ?></td>
                                    <td><?php echo $data['book_image']; ?></td>
                                    <td><button type="button" name="update" data-id="<?php echo $data['id']; ?>" class="btn btn-info btn-xs book_edit" data-toggle="modal" data-target="#edit_book_Modal">Edit</button></td>
									<td><button type="submit" name="delete" data-id="<?php echo $data['id']; ?>" class="btn btn-danger btn-xs delete">Delete</button></td>
								</tr>
                           <?php } ?>   
                   			</table>
                   		</div>
                   	</div>
               	</div>
           	</div>
        </div>
        <div id="userModal" class="modal fade">
        	<div class="modal-dialog">
            <div class="modal-content">
        	<div class="modal-body">
                <form method="post" enctype="multipart/form-data">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add Ncrt Book</h4>
        			</div>
                    <div class="form-group">
                        <label>Ncrt Book Name</label>
                        <input type="text" name="nb_name" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Class</label>
                        <select name="nb_class" class="form-control" required />
                            <option value="" >Select Class</option>
                            <option value="9" >9</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Subject</label>
                        <select name="nb_subject" class="form-control" required />
                            <option value="" >Select Subject</option>
                            <option value="Hindi" >Hindi</option>
                            <option value="English" >English</option>
                            <option value="Maths" >Maths</option>
                            <option value="Social Science" >Social Science</option>
                            <option value="Science" >Science</option>
                            <option value="Biology" >Biology</option>
                            <option value="Physics" >Physics</option>
                            <option value="Chemistry" >Chemistry</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Year</label>
                        <input type="text" name="nb_year" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Link</label>
                        <input type="text" name="nb_link" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Image</label>
                        <input type="file" name="nb_image" class="form-control" required />
                    </div>
                    <div class="modal-footer">
        				<input type="submit" name="add_ncrt_book"  class="btn btn-info" value="Add" />
                        <input type="reset" value="Reset" class="btn btn-danger" />
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			    </div>
        		</form>
                </div>
        		</div>

        	</div>
        </div>
        
        
        
        <div id="edit_book_Modal" class="modal fade">
        	<div class="modal-dialog">
            <div class="modal-content">
        	<div class="modal-body">
               <form method="post" enctype="multipart/form-data">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Add Ncrt Book</h4>
        			</div>
                    <div class="form-group">
                        <label>Ncrt Book Name</label>
                        <input type="text" id="nb_name" name="nb_name" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Class</label>
                        <select name="nb_class" id="nb_class" class="form-control" required />
                            <option value="" >Select Class</option>
                            <option value="9" >9</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Subject</label>
                        <select name="nb_subject" id="nb_subject" class="form-control" required />
                            <option value="" >Select Subject</option>
                            <option value="Hindi" >Hindi</option>
                            <option value="English" >English</option>
                            <option value="Maths" >Maths</option>
                            <option value="Social Science" >Social Science</option>
                            <option value="Science" >Science</option>
                            <option value="Biology" >Biology</option>
                            <option value="Physics" >Physics</option>
                            <option value="Chemistry" >Chemistry</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Year</label>
                        <input type="text" name="nb_year" id="nb_year" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book link</label>
                        <input type="file" name="nb_link" id="nb_pdf" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Image</label>
                        <input type="file" name="nb_image" id="nb_image" class="form-control" required />
                    </div>
                    <div class="modal-footer">
        				<input type="submit" name="add_ncrt_book"  class="btn btn-info" value="Add" />
                        <input type="reset" value="Reset" class="btn btn-danger" />
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			    </div>
        		</form>
                </div>
        		</div>

        	</div>
        </div>
        
        
        <script>
$(document).ready(function() {
    $('#ncrt_book_table').DataTable();
	
	
	$('.book_edit').click(function(){
		var id=$(this).data("id");
		$.ajax({ 
				method:"POST",
				url:"ncrt_book_edit",
				data:{"sno":id},
				dataType:"html",
				success:function(data)
				{
					//console.log(data);
					$("#edit_book_Modal .modal-body").empty();
					$("#edit_book_Modal .modal-body").html(data);
					$("#edit_book_Modal").modal();
                }
               });
      });
	
	
	
} );
</script>

<?php
include('footer.php');
?>
