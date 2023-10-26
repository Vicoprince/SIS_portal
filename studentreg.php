<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potential Project | Student Registration</title>

    <link rel="stylesheet" href="css/studentstyle.css">
</head>
<body>
    <h1 class="head">Student Registration</h1>
    <div class="top">
        <p class="bar">Already have an account? Login <a href="studentlogin.php">here</a></p>
    </div>
    <div class="form-group">
        <form action="studentreg.php" method="POST" enctype="multipart/form-data">
            <div class="fields">
                <div class="field name">
                    <input type="text" placeholder="First Name" name= "fname" required>
                </div>

                <div class="field name">
                    <input type="text" placeholder="Last Name" name= "lname" required>
                </div>

                <div class="field email">
                    <input type="date" placeholder="Date of Birth" name= "DoB" required>
                </div>

                <div class="field email">
                    <input type="email" placeholder="Parent Email (Optional)" name= "email" >
                </div>

                <div class="field email">
                    <input type="text" placeholder="Parent Phone Number" name= "pnum" required>
                </div>

                <div class="field email">
                    <select name="choice1">
                        <option value="">Gender </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                

                <div class="field email">
                    <select name="choice2">
                        <option value="">Class Category </option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                    </select>
                </div>

                <div class="field">
                    <input type="text" placeholder="Your class" name= "class" required>
                </div>

                <div class="field">
                    <input type="file" name= "profile" required>
                </div>

                <div class="field">
                    <input type="password" placeholder="Password" name= "pwd" required>
                </div>

                <div class="field">
                    <input type="password" placeholder="Confirm password" name= "cpwd" required>
                </div>

                <div class="button-area">
                    <button type="submit" name= "submit">Register</button>
                </div>
                <div></div>
            </div>
        </form>
    </div>
</body>
</html>

<?php

if (isset($_POST['submit'])){

include('dbcon.php');

$msg = "";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$DoB = $_POST['DoB'];
$email = $_POST['email'];
$pnum = $_POST['pnum'];
$choice1 = $_POST['choice1'];
$choice2 = $_POST['choice2'];
$class = $_POST['class'];
// $image = $_POST['profile'];
$password = $_POST['pwd'];
$cpassword = $_POST['cpwd'];

    $imgname = $_FILES['profile']['name'];
    $tempname = $_FILES['profile']['tmp_name'];

    $folder = "dataimage/".$imgname;

    if (move_uploaded_file($tempname, $folder)) {
        $msg="";
    }else{
        $msg="";
    }





$qry = "SELECT * FROM `student_data` WHERE email = '$email'";
 
$result = mysqli_query($con,$qry);
$row = mysqli_num_rows($result);

if($row > 0){

    echo '<script type="text/javascript">alert("Registration No. already exists!");</script>';

}

else{

    $qry = "INSERT INTO `student_data`(`fname`, `lname`, `DoB`, `email`, `phone`, `Gender`, `class_category`, `class`, `image`, `password`, `status`)
        VALUES  ('$fname', '$lname','$DoB', '$email', '$pnum', '$choice1', '$choice2', '$class','$imgname','$password', 'pending')";

    $run = mysqli_query($con,$qry);

}
}

ob_flush();
?>