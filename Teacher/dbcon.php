<?php 
    // db connect code
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "school portal";
    $con = mysqli_connect($servername, $username, $password, $dbname);

    if (!$con){
       echo "<script>alert('Database Connection Failed');</script>";
    }
?>
