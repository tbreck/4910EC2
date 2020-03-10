<?php
$servername = "database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "CPSC4910Team10";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
console.log("Connected successfully!!!!!");

If(isset($_POST['submit'])){
	$Email = $_POST['Username']; //echo $email;
	$Password = $_POST['Password']; //echo $password;

  $query = "SELECT * FROM TestDB.Administrator WHERE Email ='$Email' AND Password='$Password'";
	$result = mysqli_query($db, $query);


  if ($result->num_rows > 0) {
      // output data of each row
      header('Location: date.php');

  } else {
      echo "0 results";
  }

}


?>


<!DOCTYPE html>
<style type="text/css">
input{
	margin-bottom:15px;
}
</style>
<title>Login</title>
<h1>Login!</h1>
<section>
	<form action="auth" method="post" id="form">
		<div><label>Username:<input type="text" id="username" name="username"/></label></div>
		<div><label>Password:<input type="password" id="password" name="password"/></label></div>
		<button type="submit">Submit</button>
	</form>
</section>
<div  id="error"><p>Enter Info</p></div>
<script type="text/javascript" src="login.js"></script>
