<?php
require_once('dbconnect.php');
date_default_timezone_set('timezone');
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$dob=$_POST["dob"];
$bg=$_POST["blood_gp"];
$gen=$_POST["gen"];
$ph=$_POST["phone"];
$addr=$_POST["address"];
$creation_time=date('jS F g:i A');
$updation_time=date('jS F g:i A');
$sql = "INSERT INTO emp (id,fname, lname, email,dob,blood_gp,gender,mobile,address,creation_time,last_updated)
VALUES ('', '$fname', '$lname','$email','$dob','$bg','$gen','$ph','$addr','$creation_time','$updation_time')";
try {
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "You are now registered successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
    header("location: emp_details.php");
?>