<!--connect to the database-->
<?php

$db = mysqli_connect('database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com', 'admin', 'CPSC4910Team10', 'TestDB')
or die('Error connecting to MySQL Server');
session_start();

?>

<?php
If(isset($_POST['new_user'])){
	header('Location: ../registration/registration.html');
}

If(isset($_POST['submit'])){
	$Email = $_POST['userid']; //echo $username;
	$password = $_POST['password']; //echo $password;

	//SQL query - match username and password
	$query = "SELECT * FROM Administrator WHERE Email ='$Email' AND password='$password'";
	$result = mysqli_query($db, $query);
	if ( mysql_num_rows($result) > 0 ) {
		header('Location: ../testDatabase/test_admin_page.php');
	}
	else{
		$query = "SELECT * FROM Sponsor WHERE Email ='$Email' AND password='$password'";
		$result = mysqli_query($db, $query);
		if ( mysql_num_rows($result) > 0 ) {
			header('Location: ../testDatabase/test_sponsor_page.php');
		}
		else{
			$query = "SELECT * FROM Driver WHERE Email ='$Email' AND password='$password'";
			$result = mysqli_query($db, $query);
			if ( mysql_num_rows($result) > 0 ) {
				header('Location: ../testDatabase/test_driver_page.php');
			}
			else{
				echo 'Incorrect login information!';
			}
		}
	}

	//header('Location: admin.php');
}

// if(isset($_POST['submit_edit'])){
// 	$Email = $_POST['userid']; //echo $username;
// 	$password = $_POST['password']; //echo $password;

// 	//SQL query - match username and password
// 	$query = "SELECT * FROM users WHERE username ='$username' AND password='$password'";
// 	$result = mysqli_query($db, $query);
// 	$success = false;
// 	while ($row = mysqli_fetch_array($result)) { $success = true; }
// 	if ($success == true)  {

// 		$_SESSION['user']=$username;
// 		header('Location: user_update.php');
// }
// 	else { echo 'Incorrect login information!'; }
// }

?>


<html>

<style>
  .center{
    margin: auto;
    text-align: center;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
  }
</style>

<style>
  .heading{
    margin: auto;
    text-align: center;
  }
</style>

<head>
<title>Warehouse Login</title>
</head>

<body>

<div class=heading>
  <h2>Fireworks</h2>
</div>

<div class=center>
  <form method= "post">
    Username &nbsp; <input type="text" Email="userid" placeholder="enter username" required/><br><br>
    Password &nbsp; <input type="password" name="password" placeholder="enter password" required/><br><br>

    <input type="submit" name="submit" id="submit" class="button" value="Login"/>  &nbsp;
    <input type="submit" name="submit_edit" id="submit" class="button" value="Update Account"/>  &nbsp;
    <input type="reset" value="Cancel"/> &nbsp;

</form>
</div>
<div class=center>
 <form method= "post">
	<input type="submit" name="new_user" id="new_user" class="button" value="Create User"/>
</form>
</div>

</body>

</html>
