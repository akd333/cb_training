<?php
require_once('dbconnect.php');
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gen=$_POST["gen"];
$dob=$_POST["dob"];
$bg=$_POST["blood_gp"];
$email=$_POST["email"];
$ph=$_POST["mob"];
$addr=$_POST["addr"];
$pass=$_POST["pass"];
$sql = "INSERT INTO form_data (id,fname, lname, gender,dob,blood_gp,email,mobile,address,password)
VALUES ('', '$fname', '$lname','$gen','$dob','$bg','$email','$ph','$addr','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>