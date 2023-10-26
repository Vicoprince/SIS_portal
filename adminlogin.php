<?php 
        session_start();
        if(isset($_SESSION['id'])){
            header('location:index.php');
        }
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Potential Project | Admin Login</title>
</head>
<body>
    <form class="box" action="adminlogin.php" method="post">
			<h1>Admin Login</h1>
			<input type="text" name="username" placeholder="Username" required>
			<input type="password" name="password" placeholder="Password" required><br>
			<div>
				<input type="submit" name="submit" value="Login">
				<input type="reset">
			</div>

			<a href="#" id="forgot">Forgot Password?</a>

	</form>
</body>
</html>


<?php
	include('dbcon.php');

    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];


        $qry = "SELECT * FROM `admin` WHERE username = '$username' AND `password` = '$password'";
            
        $result = mysqli_query($con,$qry);
        $row = mysqli_num_rows($result);

        if(!$row || $row == 0){

            echo "<script> alert('Incorrect Username or Password') </script>";
        
        }

        else{

            while ($data = $result->fetch_assoc()) {
            
            $id = $data['id'];

            echo "id".$id;

            session_start();
            
            $_SESSION['uid'] = $id;
            header('location:index.php');
            
		}

	}

}

 ?>