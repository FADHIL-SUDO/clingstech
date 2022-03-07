<?php session_start();
require_once('includes/config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $username=$_POST['username'];
    $address=$_POST['address'];
    $dob=$_POST['dob'];
    $sex=$_POST['sex'];
    $level=$_POST['level'];
    $course=$_POST['course'];
$sql=mysqli_query($con,"select std_matricule from student where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into student(fname,lname,email,password,contact,username,address,dob,sex,level,course) values('$fname','$lname','$email','$password','$contact','$username','$address','$dob','$sex','$level','$course')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> Student Register Form</title>

    <!-- Icons font CSS-->
    <link href="<?php echo web_root;?>plugins/registration/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="<?php echo web_root;?>plugins/registration/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="<?php echo web_root;?>plugins/registration/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo web_root;?>plugins/registration/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo web_root;?>plugins/registration/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST" action="register.php">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Firstname" name="FNAME" requird>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Lastname" name="LNAME" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Address" name="ADDRESS" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" placeholder="Phone" name="PHONE" required> 
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Username" name="USERNAME" required>
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" name="PASS" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="email" placeholder="email" name="Email" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="Date" placeholder="Date of birth" name="Date of birth" required>
                        </div>

        
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="level" name="level" required>
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="course" name="course" required>
                        </div>


                      
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Submit</button>
                            <a href="login.php">Back to Login</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo web_root;?>plugins/registration/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="<?php echo web_root;?>plugins/registration/vendor/select2/select2.min.js"></script>
    <script src="<?php echo web_root;?>plugins/registration/vendor/datepicker/moment.min.js"></script>
    <script src="<?php echo web_root;?>plugins/registration/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>

