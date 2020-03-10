<?php

// $query = "SELECT * FROM TestDB.Administrator WHERE Email ='$Email' AND Password='$Password'";
// 	$result = mysqli_query($db, $query);




echo "Connected successfully";
console.log("Connected successfully!!!!! \n");
$Email = $_POST['email']; //echo $email;
$Password = $_POST['password']; //echo $password;
echo $Email + "\n";
echo $Password + "\n";

if ( !empty(Email) || !empty(Password) ) {
	$servername = "database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com";
	$username = "admin";
	$password = "CPSC4910Team10";
	$db = "TestDB.Administrator";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	// Check connection
	if (mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() .') '
		. mysqli_connect_error());
		}
	else {
		$query = "SELECT * FROM $db WHERE Email ='$Email' AND Password='$Password'";
		$result = mysqli_query($db, $query);
		if (result) {
			echo "Success!!!";
		}
		else {
			echo "Fail!!!";
		}
	}

} else {
	echo "All fields are required!";
	die();
}

// If(isset($_POST['submit'])){
// 	$Email = $_POST['email']; //echo $email;
// 	$Password = $_POST['password']; //echo $password;
// 	echo $Email + "\n";
// 	echo $Password + "\n";

//   $query = "SELECT * FROM TestDB.Administrator WHERE Email ='$Email' AND Password='$Password'";
// 	$result = mysqli_query($db, $query);


//   if ($result->num_rows > 0) {
//       // output data of each row
//       header('Location: date.php');

//   } else {
//       echo "0 results";
//   }

// }


?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
</head>
<body>
 <form action="login.php" method="POST" id="form">
  <table>
   <tr>
    <td>Email :</td>
    <td><input type="text" name="email" required></td>
   </tr>
   <tr>
    <td>Password :</td>
    <td><input type="password" name="password" required></td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
 </form>
</body>
</html>
