<?php
    //session_start();
    //$time = $_SERVER['REQUEST_TIME'];
    require_once('dbconnect.php');
    //date_default_timezone_set('timezone');
    
    $fnameErr="";
    $lnameErr="";
    $emailErr="";
    $phErr="";
    if (isset($_POST["register"])) {
        $fname=$_POST["fname"];
        if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
            $fnameErr = "* Please enter a vallid first name"; 
        }
        $lname=$_POST["lname"];
        if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
            $lnameErr = "* Please enter a valid last name"; 
        }
        $email=$_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "* Please enter a correct email"; 
        }
        $dob=$_POST["dob"];
        $bg=$_POST["blood_gp"];
        $gen=$_POST["gen"];
        $ph=$_POST["phone"];
        if (!filter_var($ph, FILTER_VALIDATE_INT)) {
            $phErr = "* Please enter a correct number"; 
        }
        $addr=$_POST["address"];
        $creation_time=date('jS F g:i A');
        $updation_time=date('jS F g:i A');
        $sql = "INSERT INTO emp (id,fname, lname, email,dob,blood_gp,gender,mobile,address,creation_time,last_updated)
        VALUES ('', '$fname', '$lname','$email','$dob','$bg','$gen','$ph','$addr','$creation_time','$updation_time')";
        try {
            // use exec() because no results are returned
            $conn->exec($sql);
            //echo "You are now registered successfully";
            header("location: emp_details.php");
            }
        catch(PDOException $e)
            {
            //echo $sql . "<br>" . $e->getMessage();
            }
    }
?>
<!DOCTYPE html>
<html lang="en">
<!-- Start of head section-->

<head>
    <title>Employee Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
</head>
<body>
    <section class="container">
        <div class="hero is-primary hero-body has-text-centered">
            <p class="title">Employee Registration</p>
            <?php
            $inTwoMonths = 60 * 60 * 24 * 60 + time();
            //$time = $_SERVER['REQUEST_TIME'];
            setcookie('lastVisit', date('jS F g:i A'),$inTwoMonths);
            if(isset($_COOKIE['lastVisit']))
            
            {
            $visit = $_COOKIE['lastVisit'];
            echo "Your last visit was on - ". $visit;
            //echo "You have elapsed ".$time;
            }
            else
            echo "Welcome ! This is your first visit";
            ?>
        </div>
        <form method="POST">
            <div class="columns is-centered ">
                <div class="column is-8">
                    <div class="field">
                        <label class="label">ID</label>
                        <div class="control">
                            <input class="input is-primary" type="text" placeholder="ID" disabled name="id">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">First Name</label>
                        <div class="control">
                            <input class="input is-primary" type="text" placeholder="Please enter first name" required name="fname">
                            <p class="has-text-danger"><?php echo $fnameErr; ?></p>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Last Name</label>
                        <div class="control">
                            <input class="input is-primary" type="text" placeholder="Please enter last name" name="lname">
                        </div>                       
                    </div>
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input is-primary" type="email" placeholder="Please enter email" required name="email">
                            <p class="has-text-danger"><?php echo $emailErr; ?></p>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">DOB</label>
                        <div class="control">
                            <input class="input is-primary" type="date" placeholder="Please enter your date of birth" required name="dob">
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Blood Group</label>
                        <div class="control">
                            <div class="select is-primary">
                                <select name="blood_gp" required>
                                    <option value="">---Select BG---</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="gen" value= "female" checked>
                                Male
                            </label>
                            <label class="radio">
                                <input type="radio" name="gen" value="female">
                                Female
                            </label>
                            <label class="radio">
                                <input type="radio" name="gen" value="female">
                                Other
                            </label>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Mobile</label>
                        <div class="control">
                            <input class="input is-primary" type="tel" placeholder="Please enter mobile number" name="phone" maxlength="10" required>
                            <p class="has-text-danger"><?php echo $phErr; ?></p>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">Address</label>
                        <div class="control">
                            <textarea class="textarea is-primary" type="text" placeholder="Please Enter address" name="address" required></textarea>
                        </div>
                    </div>
                    <div class="field is-grouped is-grouped-centered">
                        <div class="control">
                            <button type="submit" name="register" class="button is-primary">Register</button>
                        </div>
                        <div class="control">
                            <button type="reset" class="button is-primary ">Reset</button>
                        </div>
                        <div class="control">
                            <a href="emp_details.php" class="button is-primary ">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>

</html>