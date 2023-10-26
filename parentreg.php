<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potential Project | Parent Registration</title>

    <!-- <link rel="stylesheet" href="css/parentstyle.css"> -->
</head>

<body>
    <h1 class="head">Parent Registration</h1>
    <div class="top">
        <p class="bar">Already have an account? Login <a href="parentlogin.php">here</a></p>
    </div>
    <div class="form-group">
        <form action="parentreg.php" method="post" enctype="multipart/form-data">
            <div class="fields">
                <div class="field name">
                    <input type="text" placeholder="First Name" name="fname" required>
                </div>

                <div class="field name">
                    <input type="text" placeholder="Last Name" name="lname" required>
                </div>

                <div class="field email">
                    <input type="email" placeholder="Email" name="email" required>
                </div>

                <div class="field number">
                    <input type="text" placeholder="Phone Number" name="pnum" required>
                </div>

                <div class="field">
                    <select name="choice1">
                        <option value="">Relationship to child </option>
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                        <option value="Guardian">Guardian</option>
                    </select>
                </div>

                <div class="field">
                    <select name="choice2">
                        <option value="">Marital Status </option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Divorced">Divorced</option>
                        <option value="Others...">Others...</option>
                    </select>
                </div>

                <div class="field">
                    <input type="file" placeholder="Upload Picture" name="profile" required>
                </div>

                <div class="field">
                    <input type="password" placeholder="Password" name="pwd" required>
                </div>

                <div class="field">
                    <input type="password" placeholder="Confirm password" name="cpwd" required>
                </div>

                <div class="button-area">
                    <button type="submit" name="submit">Register</button>
                </div>
                <div></div>
            </div>
        </form>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="container">

        <form class="row g-3">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
    </div>
    
</body>

</html>

<?php 

    include('dbcon.php');

    $fname = "";
    $lname = "";
    $email = "";
    $pnum = "";
    $choice1 = "";
    $choice2 = "";
    $profile = "";
    $pwd = "";
    $cpwd = "";

    if (isset($_POST["submit"])) {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $pnum = $_POST['pnum'];
        $choice1 = $_POST['choice1'];
        $choice2 = $_POST['choice2'];
        $profile = $_POST['profile'];
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];

        if ($pwd == $cpwd) {

            $qry = "SELECT * FROM `parent_data` WHERE email = '$email'";
		 
            $result = mysqli_query($con,$qry);
            $row = mysqli_num_rows($result);

            if($row > 0){

                echo '<script type="text/javascript">alert("Registration No. already exists!");</script>';
            
            }

            else{

                $qry = "INSERT INTO `parent_data`(`fname`, `lname`, `email`, `phone`, `relationship`, `marital_status`, `image`, `password`) 
                    VALUES  ('$fname', '$lname', '$email', '$pnum', '$choice1', '$choice2', '$profile','$pwd')";
            
                $run = mysqli_query($con,$qry);

            }
        }

        else{
            echo '<script type="text/javascript">alert("Password mismatch!")</script>';

        }

    }







?>