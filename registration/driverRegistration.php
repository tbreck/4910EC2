<!--connect to the database-->
<?php

$db = mysqli_connect('database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com', 'admin', 'CPSC4910Team10', 'TestDB')
or die('Error connecting to MySQL Server');
session_start();
error_reporting(E_ALL);

?>

<?php
If(isset($_POST['new_user'])){
	header('Location: ../registration/registration.html');
}

If(isset($_POST['submit'])){
	$Email = $_POST['emailID']; //echo $username;
	$Password = $_POST['password']; //echo $password;
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $address = $_POST['address'];

	//SQL query - match username and password
	$query = "SELECT * FROM TestDB.Driver WHERE Email ='$Email'";
	$result = mysqli_query($db, $query);
	if ( mysqli_num_rows($result) ) { echo 'Email already taken by another user.' }
	else {
		echo 'Incorrect login information!';
	}

}


?>


<!DOCTYPE html>
<style type="text/css">
input{
	margin-bottom:15px;
}
</style>
<title>Driver Registration</title>
<h1>Register for an Driver account!</h1>

<section>
    <div  id="error"><p>Enter Info</p></div>
	<form method="post">
		<div><label>Email:<input type="text" id="email" name="email"/></label><i id="usernameStatus" class="material-icons">done</i></div>
		<div><label>First Name:<input type="text" id="firstname" name="firstname"/></label></div>
		<div><label>Last Name:<input type="text" id="lastname" name="lastname"/></label></div>
		<div><label>Address:<input type="text" id="address" name="address"/></label></div>
		<div><label>Password:<input type="password" id="password" name="password"/></label></div>
		<div style="margin-bottom: 15px;">
			<span id="passwordmeter"><span></span></span>
			<span id="passwordmessage" aria-live="polite"></span>
		</div>
        <div><label>Confirm Password:<input type="password" id="confirm_password"/></label></div>
		<button type="submit">Submit</button>
	</form>
</section>
<script type="text/javascript" src="registration.js"></script>
<script type="text/javascript" src="../zxcvbn.js"></script>
<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
