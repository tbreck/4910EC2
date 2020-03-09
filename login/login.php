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
$Email = $_POST['email']; //echo $email;
$Password = $_POST['password']; //echo $password;
echo $Email;
echo $Password;

If(isset($_POST['submit'])){
	$Email = $_POST['email']; //echo $email;
	$Password = $_POST['password']; //echo $password;
	echo $Email;
	echo $Password;

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