<!DOCTYPE html>
<html>
<body>
Name            :<?php echo $_POST["fname"].' '.$_POST["lname"]; ?><br>
Gender          :<?php echo $_POST["gen"]; ?><br>
Date Of Birth   :<?php echo $_POST["dob"]; ?><br>
Blood Group     :<?php echo $_POST["blood_gp"]; ?><br>
Email           :<?php echo $_POST["email"]; ?><br>
Mobile Number   :<?php echo $_POST["mob"]; ?><br>
Languages Known :<br>
<?php
$language = $_POST["lang"];
foreach ($language as $lang){ 
    echo $lang."<br />";
}
?>
Address         :<?php echo $_POST["addr"]; ?><br>
Password        :<?php echo $_POST["pass"]; ?><br>
</body>
</html>