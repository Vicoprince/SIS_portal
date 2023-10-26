<?php 

    session_start();

	include_once("../dbcon.php");
	
    if (ISSET($_GET['update'])) {
        $id = $_GET['update'];
        echo "<script>alert('Hello')</script>";
        // $query = mysqli_query($con, "DELETE FROM `course_list` WHERE id = $id") or die(mysqli_error($con));

        $alertUpdateMessage = "Record has been Updated!";
        
        ?>

        <!DOCTYPE html>
        <html lang="en">
            <head>
                <!-- Include Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            </head>
            <body>
                <!-- Display the Bootstrap alert -->
                <div class="container mt-5">
                    <?php if (!empty($alertMessage)): ?>
                        <div class="alert alert-dismissible alert-success">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong> <?php echo $alertMessage; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <?php 
                echo $id;

                include("../dbcon.php");

                $sql_qry = "SELECT * FROM `course_list` WHERE `id` = '$id'";

                    $result = mysqli_query($con,$sql_qry);

                    if(mysqli_num_rows($result)<1){
                        echo "No Record Found";
                    }
                    else{
                        $count = 0;
                        while($sql_data = $result->fetch_assoc()){
                            $count++;
                            // $courseId = $data['id'];
                            $otherOption = '';
                            $status = $sql_data['status'];
                            $department = $sql_data['department'];
                            $course = $sql_data['course_name'];
                            $description = $sql_data['course_description'];
                            $otherOption = ($status === 'Active') ? 'Inactive' : 'Active';
			
            ?>
            <form action="course_info.php?id=<?php echo $id ?>" method="POST" id="course-form" data-select2-id="[object HTMLInputElement]">
                <input type="hidden" name="id" value="">
                <div class="form-group">
                    <label for="department_id" class="control-label">Department</label>
                    <select name="department_id" id="department_id" class="form-control form-control-sm form-control-border select2-hidden-accessible" value="<?php echo $department ?>" required="" data-select2-id="department_id" tabindex="-1" aria-hidden="true">
                        <option value="" disabled="" selected="" data-select2-id="2"></option>
                        <option value="Banking" data-select2-id="7">BANKING </option>
                        <option value="Computer Hardware Engineering" data-select2-id="8">COMPUTER HARDWARE ENGINEERING</option>
                        <option value="Computer Software ENgineering" data-select2-id="9">COMPUTER SOFTWARE ENGINEERING</option>
                        <option value="DIgital Multimedia Technology" data-select2-id="10">DIGITAL MULTIMEDIA TECHNOLOGY</option>
                    </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-department_id-container"><span class="select2-selection__rendered" id="select2-department_id-container" role="textbox" aria-readonly="true"><span class="select2-selection__placeholder">Please Select Here</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Course</label>
                    <input type="text" name="course_name" id="name" class="form-control form-control-border" placeholder="Enter course Name" value="<?php echo $course ?>" required="">
                </div>
                <div class="form-group">
                    <label for="description" class="control-label">Description</label>
                    <textarea rows="3" name="course_description" id="description" class="form-control form-control-sm rounded-0" value="<?php echo $description ?>" required=""><?php echo $description ?></textarea>
                </div>
                <div class="form-group">
                    <label for="status" class="control-label">Status</label>
                    <select name="status" id="status" class="form-control form-control-sm form-control-border" value="<?php echo $sql_data['status'] ?>" required="">
                        <option value="<?php echo $status ?>"><?php echo $status ?></option>
                        <option value="<?php echo $otherOption ?>"><?php echo $otherOption ?></option>
                    </select>
                </div>
                <div class="">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update_course" class="btn btn-primary">Update</button>
                </div>
            </form>
            <?php
                }
            }
            ?>

                    



                <!-- Redirect back to course-list.php after a delay -->
                <script>
                    setTimeout(function() {
                        window.location.href = "course-list.php";
                    }, 3000); // Redirect after 3 seconds (adjust as needed)
                </script>

                <!-- Include Bootstrap JS and jQuery -->
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            </body>
        </html>

<?php 
    }
    session_destroy();

?>