<?php session_start();
/* Attempt to connect to MySQL database */
$mysqli = new mysqli("localhost","root","","e-learning_db") or die("not connected");
/* checking for connection*/
if($mysqli === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	echo "connected to the database";
}
//Code for Registration 
/*if(isset($_POST['Submit']))
{
	$accnt_id=$_POST['accnt_id'];
    $Name=$_POST['name'];
    $Institution=$_POST['institution'];
    $Email=$_POST['email'];
    $Phone=$_POST['phone'];
    $Password=$_POST['password'];
	$confirm_password=$post['confirm password'];
    $CATEGORY=$_POST['category'];
    $SEX=$_POST['sex'];
$sql=mysqli_query($con,"select acccnt_id from account where email='$Email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into account(name,institution,email,phone,password,category,sex,confirm password)
	 values('$Name','$Institution','$Email','$Phone','$Password','$CATEGORY','$SEX','$confirm_password')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}
}

*/
$sql = "INSERT INTO account (name,institution,email,phone,password,category,sex,confirm password) VALUES ('Peter', 'Parker', 'peterparker@mail.com','699344607','123456','student','male','123456')";
if(mysqli_query($mysql, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($mysqli);
}
 
// Close connection
mysqli_close($mysql);
?>
<!doctype html>
<html>
<head>
<title>register</title>
<link rel="stylesheet" type="text/css" href="style1.css">  
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>User Signup | Registration and Login System</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
function checkpass()
{
if(document.Register.password.value!=document.signup.confirm password.value)
{
alert(' Password and Confirm Password field does not match');
document.signup.confirm password.focus();
return false;
}
return true;
} 

</script>
<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
<h2 align="center">Registration and Login System</h2>
<hr />
                                        <h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">

</head>
<body>
	<nav>
		
		WELCOME TO CLINGS TECH REGISTRATION PLATFORM</center></h1> <br>
		          <center><b><i>We stand to offer you the best</i></b></center></td>
	
</nav>
	
	<div class="regform"><h1>REGISTRATION FORM</h1></div>
		<div class="main">
			<form  method="post" action="" name="Register" onsubmit="return checkpass();" enctype="multipart/form-data">
				<div id="name">
					<h2 class="name">Name</h2>
					<input class="firstname" type="text" name="first_name" placeholder="First Name">
					<input class="lastname" type="text" name="last_name" placeholder="Last Name">
				
					

				<h2 class="name">Institution</h2>
				<input class="Institution" type="text" name="company">

				<h2 class="name">Email </label></h2>
				<input class="Email" type="text" name="Email">

				<h2 class="name">Phone</h2>
				<input class="fixture" type="text" name="phone" placeholder="Phone Number">
			

				<h2 class="name">Password</h2>
				<input class="entity" type="password" name="Password" placeholder="Password">
			
		
				
				<h2 class="name">confirm password</h2>
				<input class="entity" type="password" name="Password" placeholder="confirm password">


				
				
				<h2 class="name">CATEGORY</h2>
				<select class="option" name="course">
					<option disabled="disabled" selected="selected" >option</option>
					<option>STUDENT</option>
					<option>INSTRUCTOR</option>
					

				</select>

				<h2 id="student"> SEX ?</h2>
				<label class="extra">
					<input  class="radio-one" type="radio"  checked="checked" name="n">
					<span class="checkmark"></span>
					MALE
				</label>
				<label class="extra">
					<input  class="radio-two" type = "radio"  name="n">
					<span class="checkmark"></span>
					FEMALE
				</label><br>
				<button type="submit">Submit</button>
			</div>

			</form>
		</div>
		</div>
		</body>
		</html>