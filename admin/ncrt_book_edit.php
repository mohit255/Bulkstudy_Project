<?php

include('database_connection.php');
$id=$_POST['sno'];
//echo $id;

$querry="SELECT * from ncrt_book where id=".$id; 
$sql=mysqli_query($connect,$querry);
$row=mysqli_fetch_array($sql);
//echo $row['book_name'];
?>

                <form method="post" action="ncrt_book_action.php" enctype="multipart/form-data">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Edit Ncrt Book</h4>
        			</div>
                    <div class="form-group">
                        <label>Ncrt Book Name</label>
                        <input type="text" id="nb_name" name="nb_name" class="form-control"  value="<?php echo $row['book_name']; ?>"  />
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Class</label>
                        <select name="nb_class" id="nb_class" class="form-control" />
                            <option value="<?php echo $row['book_class']; ?>"><?php echo $row['book_class']; ?></option>
                            <option value="" >Select Class</option>
                            <option value="9" >9</option>
                            <option value="10" >10</option>
                            <option value="11" >11</option>
                            <option value="12" >12</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Subject</label>
                        <select name="nb_subject" id="nb_subject" class="form-control" />
                            <option value="<?php echo $row['book_subject']; ?>"><?php echo $row['book_subject']; ?></option>
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
                        <input type="text" name="nb_year" id="nb_year" class="form-control" value="<?php echo $row['book_year']; ?>" required />
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book PDF</label>
                        <input type="file" name="nb_pdf" id="nb_pdf" class="form-control" value="<?php echo $row['book_pdf']; ?>"  />
                    </div>
                    <div class="form-group">
                        <label>Ncrt Book Image</label>
                        <input type="file" name="nb_image" id="nb_image" class="form-control" value="<?php echo $row['book_image']; ?>"  />
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="nb_id" value="<?php echo $row['id']; ?>" />
        				<input type="submit" name="edit_ncrt_book"  class="btn btn-info" value="Add" />
                        <input type="reset" value="Reset" class="btn btn-danger" />
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			    </div>
        		</form>