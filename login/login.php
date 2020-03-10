<?php

// $query = "SELECT * FROM TestDB.Administrator WHERE Email ='$Email' AND Password='$Password'";
// 	$result = mysqli_query($db, $query);




//echo "Connected successfully";
//console.log("Connected successfully!!!!! \n");

//echo $Email + "\n";
//echo $Password + "\n";

// if ( !empty(Email) || !empty(Password) ) {
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
// 	else {
// 		if (result > 0) {
// 			//header("Location: ../testDatabase/test_admin_page.php");
// 		}
// 		else {
// 			echo "Fail!!!";
// 		}
// 	}
//
// } else {
// 	echo "All fields are required!";
// 	die();
// }

// If(isset($_POST['Submit'])){
// 	$Email = $_POST['Email']; //echo $email;
// 	$Password = $_POST['Password']; //echo $password;
//
// 	//SQL query - match username and password
// 	$query = "SELECT * FROM $db WHERE Email ='$Email' AND Password='$Password'";
// 	$result = mysqli_query($db, $query);
// 	//echo $result;
// 	if ($result > 0)  {
// 		header('Location: ../testDatabase/test_admin_page.php');
// 		}
// 	else { echo 'Incorrect login information!';
// 	}



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
		<td><input type="text" name="Email" required></td>
	 </tr>
	 <tr>
		<td>Password :</td>
		<td><input type="Password" name="Password" required></td>
	 </tr>
	 <tr>
		<td><input type="submit" value="Submit"></td>
	 </tr>
	</table>
 </form>
</body>
</html>
