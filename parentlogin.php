<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loginstyle.css">
    <title>Potential Project | Parent Login</title>
</head>
<body>
    <form class="box" action="" method="post">
			<h1>Parent Login</h1>
			<input type="text" name="roll_no" placeholder="Username" required>
			<input type="password" name="pass" placeholder="Password" required><br>
			<div>
				<input type="submit" name="submit" value="Login">
				<input type="reset">
			</div>

			<a href="#" id="forgot">Forgot Password?</a>

            <p>Don't have an account yet? Register <a href="parentreg.php" id="register">here</a></p>
	</form>
</body>
</html>