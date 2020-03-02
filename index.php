<?php

// $db = mysqli_connect("database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com","admin","CPSC4910Team10")
// or die('Error connecting to MySQL Server');
//
// echo 'Connected... ' . mysqli_get_host_info($db) . "\n";
// if (!$db) {
//     echo "Error: Unable to connect to MySQL." . PHP_EOL;
//     echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
//     echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
//     exit;
// }
session_start();

?>
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
  <a href="testhtml.html">Click here to test file!!!!</a>
	</p>
</section>
<!--

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
console.log("Connected successfully!!!!!");
?>
</section> -->
