<?php

    session_start();

	include_once("../dbcon.php");
	
    if (ISSET($_GET['delete'])) {
        $id = $_GET['delete'];
        $query = mysqli_query($con, "DELETE FROM `teacher_data` WHERE id = $id") or die(mysqli_error($con));

        $_SESSION['message'] = "Record as been deleted!";
        $_SESSION['msg_type'] = "danger";

        header("location: ../users/teacher-user.php");
    }



?>