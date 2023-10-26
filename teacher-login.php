<?php 
        session_start();
        if(isset($_SESSION['id'])){
            header('location:Teacher/teacher_dash.php');
        }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <title>Potential Project | Teacher Login</title>
</head>
<body>
    <div class="container">
		<form class="box" action="" method="post">
				<h1>Teacher Login</h1>
				<input type="text" name="username" placeholder="Username" id="Username" required>
				<input type="password" name="pass" placeholder="Password" id="pass" required><br>
				<div>
					<input type="submit" name="submit" value="Login">
					<input type="reset">
				</div>

				<a href="#" id="forgot">Forgot Password?</a>

				<p>Don't have an account yet? Register <a href="reg.php" id="register">here</a></p>
		</form>
	</div>

	<script>
		$(document).ready(funtion(){

			$("#login").click(funtion(){
				var username = $("#username").val();
				var pass  = $("#pass").val();


				$.ajax({
					url: "",
					method: "POST",
					data: {username: username,pass:pass},
					success:function(data){

					}
				})
			})

		})
	</script>
</body>
</html>


<?php
	include('dbcon.php');

    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $password = $_POST['pass'];


        $qry = "SELECT * FROM `teacher_data` WHERE email = '$username' AND `password` = '$password'";
            
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
            header('location:Teacher/teacher_dash.php');
            
		}

	}

}

 ?>