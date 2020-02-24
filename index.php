<?php session_start(); ?>
<!DOCTYPE html>
<title>TruckTracker</title>
<h1>TruckTracker</h1>
<section>
	<p>
<?php
if(isset($_SESSION['name'])){
		echo "Hi ".$_SESSION['name']."! \n\n\n";
	}
?>
	Go <a href="login.html">here to login</a> or <a href="registration.html">here to register</a>.
	</p>
</section>


<section>
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
?>
</section>