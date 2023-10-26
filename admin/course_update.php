<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HCT - Course Update</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HCT <sup>1</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Users</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Users:</h6>
                        <a class="collapse-item" href="../users/admin-user.php">Admin</a>
                        <a class="collapse-item" href="../users/lecturer-user.php">Lecturers</a>
                        <a class="collapse-item" href="../users/student-user.php">Students</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="./course-list.php">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Course List</span>
                </a>  
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="./department_list.php">
                    <i class="fas fa-fw fa-school"></i>
                    <span>Department List</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseThree">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Students</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../admin/admission-form.php">Admission Form</a>
                        <a class="collapse-item" href="#">Request History</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                        <div>
                            <a href="./course-list.php" class="btn btn-primary"><i
                                    class="fas fa-arrow-left fa-sm "> </i> Back</a>
                        </div>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Course Update</h6>
                    </div>

                    <div class="card-body">
                        <?php

                            include_once("../dbcon.php");
                            
                            if (ISSET($_GET['update'])) {
                                $id = $_GET['update'];

                                $alertUpdateMessage = "Record has been Updated!";
                            }
                        ?>

                <?php 

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
            <form action="" method="POST" id="course-form" data-select2-id="[object HTMLInputElement]">
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
                    <button type="submit" name="update_course" class="btn btn-primary">Update</button>
                </div>
            </form>

            <?php
                }
            }
            ?>


                    <?php

                        $updateDepartment = "";
                        $updateCourse_name = "";
                        $updateCourse_description = "";
                        $updateStatus = "";

                        if(isset($_POST["update_course"])) {
                            $updateDepartment = $_POST["department_id"];
                            $updateCourse_name = $_POST["course_name"];
                            $updateCourse_description = $_POST["course_description"];
                            $updateStatus = $_POST["status"];

                            $update_query = "UPDATE `course_list` SET `department`='$updateDepartment',`course_name`='$updateCourse_name',`course_description`='$updateCourse_description',`status`='$updateStatus' WHERE id = $id";
                            $update_run = mysqli_query($con, $update_query);

                            ?>

                            <!-- Display the Bootstrap alert -->
                            <div class="container mt-5">
                                <?php if (!empty($alertUpdateMessage)): ?>
                                    <div class="alert alert-dismissible alert-success">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>Success!</strong> <?php echo $alertUpdateMessage; ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Redirect back to course-list.php after a delay -->
                            <script>
                                setTimeout(function() {
                                    window.location.href = "course-list.php";
                                }, 2000); // Redirect after 3 seconds (adjust as needed)
                            </script>

                            <?php
                        }
                        
                    
                    ?>

                    </div>
                </div>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../adminlogin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    
  </div>
</div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/chart-area-demo.js"></script>
    <script src="../js/demo/chart-pie-demo.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>