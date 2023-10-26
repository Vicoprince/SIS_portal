<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potential Project | Teacher Registration</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="head">Teachers Registration</h1>
    <div class="top">
        <p class="lolo">Already have an account? Login <a href="teacher-login.php">here</a></p>
    </div>
    <div class="form-group">
        <form action="reg.php" method="post">
            <div class="fields">
                <div class="field name">
                    <input type="text" placeholder="First Name" name= "fname" required>
                </div>

                <div class="field name">
                    <input type="text" placeholder="Last Name" name= "lname" required>
                </div>

                <div class="field email">
                    <input type="email" placeholder="Email" name= "email" required>
                </div>

                <div class="field email">
                    <input type="text" placeholder="Phone Number" name= "phone" required>
                </div>

                <div class="field email">
                    <select name="choice1">
                        <option value="">Marital Status </option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Others">Others...</option>
                    </select>
                </div>

                <div class="field email">
                    <select name="choice2">
                        <option value="">Gender </option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="field email">
                    <select name="choice3">
                        <option value="">Class Category </option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                    </select>
                </div>

                <div class="field">
                    <input type="text" placeholder="Class taking" name= "class_taking" required>
                </div>

                <div class="field">
                    <input type="text" placeholder="Subject Teaching" name= "sub" required>
                </div>

                <div class="field">
                    <input type="file" name= "image">
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

    error_reporting(0);

	if (isset($_POST['submit'])){

		include('dbcon.php');

        $msg = "";

		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
        $email = $_POST['email'];
        $mobile = $_POST['phone'];
        $choice1 = $_POST['choice1'];
        $choice2 = $_POST['choice2'];
        $choice3 = $_POST['choice3'];
        $class_taking = $_POST['class_taking'];
        $subject = $_POST['sub'];
	
        
		$imgname = $_POST['image'];

		$password = $_POST['pwd'];
		$cpassword = $_POST['cpwd'];
        
		// $imgname = $_FILES['image']['name'];
		// $tempname = $_FILES['image']['tmp_name'];


		// move_uploaded_file($tempname, "dataimg/$imgname");


		$qry = "SELECT * FROM `teacher_data` WHERE email = '$email'";
		 
		$result = mysqli_query($con,$qry);
		$row = mysqli_num_rows($result);

		if($row > 0){

			echo '<script type="text/javascript">alert("Registration No. already exists!");</script>';
		
		}

		else{

			$qry = "INSERT INTO `teacher_data`(`fname`, `lname`, `email`, `phone`, `marital status`, `Gender`, `class_category`, `class_taking`, `Subject Teaching`, `image`, `password`)
				VALUES  ('$fname', '$lname', '$email', '$mobile', '$choice1', '$choice2', '$choice3','$class_taking','$subject','$imgname','$password')";
		
			$run = mysqli_query($con,$qry);

            move_uploaded_file($_FILES['imgname']['tmp_name'], "dataimage/$imgname");

	}
}

	ob_flush();
 ?>