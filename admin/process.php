<?php

    session_start();

	include_once("../dbcon.php");
	
    if (ISSET($_GET['approve'])) {
        $id = $_GET['approve'];

        $length = 6;
        $number = "012345";
        $index_no = substr(str_shuffle($number),0,$length);

        $query = mysqli_query($con, "UPDATE `student_data` SET index_no = '$index_no', `status`= 'approved' WHERE  id = $id") or die(mysqli_error($con));

        $_SESSION['message'] = "Admission as been approved!";
        $_SESSION['msg_type'] = "success";


        header("location: admission-form.php");
    }

    session_destroy();

?>

<?php
    session_start();
	include_once("../dbcon.php");
	
    if (ISSET($_GET['reject'])) {
        $id = $_GET['reject'];
        $query = mysqli_query($con, "DELETE FROM `student_data` WHERE id = $id") or die(mysqli_error($con));

        $_SESSION['message'] = "Admission as been rejected!";
        $_SESSION['msg_type'] = "danger";


        header("location: admission-form.php");
    }


    session_destroy();
?>

<?php

    session_start();

	include_once("../dbcon.php");
    $alertMessage = '';
	
    if (ISSET($_GET['delete'])) {
        $id = $_GET['delete'];
        $query = mysqli_query($con, "DELETE FROM `course_list` WHERE id = $id") or die(mysqli_error($con));

        $alertMessage = "Record as been deleted!";

        // header("location: ./course-list.php");
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
<?php

    session_start();

	include_once("../dbcon.php");
    $alertMessage = '';
	
    if (ISSET($_GET['dept_delete'])) {
        $id = $_GET['dept_delete'];
        $query = mysqli_query($con, "DELETE FROM `departments` WHERE id = $id") or die(mysqli_error($con));

        $deptalertMessage = "Record as been deleted!";

        // header("location: ./course-list.php");
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
        <?php if (!empty($deptalertMessage)): ?>
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> <?php echo $deptalertMessage; ?>
            </div>
        <?php endif; ?>
    </div>

    <!-- Redirect back to course-list.php after a delay -->
    <script>
        setTimeout(function() {
            window.location.href = "department_list.php";
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

