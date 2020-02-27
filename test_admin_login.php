
<!--connect to the database-->
<?php

$db = mysqli_connect('54.88.211.55', 'ubuntu', 'CPSC4910Team10', 'admin')
or die('Error connecting to MySQL Server');
session_start();

?>

<?php


If(isset($_POST['submit'])){
	$email = $_POST['email']; //echo $email;
	$password = $_POST['password']; //echo $password;

	//SQL query - match username and password
	$query = "SELECT * FROM TestDB.Administrator WHERE email ='$email' AND password='$password'";
	$result = mysqli_query($db, $query);
	$success = false;
	while ($row = mysqli_fetch_array($result)) { $success = true; }
	if ($success == true)  {
		//echo 'success!';
		/*
		$level = "SELECT level FROM users WHERE username = '$username' limit 1";
		$clearance = mysqli_query($db, $level);
		$value = mysqli_fetch_object($clearance);
		//$_SESSION['myid'] = $value->id;
		if ($value->level == 1) {header('Location: employee.php');}
		if ($value->level == 2) {$_SESSION['managerLoggedIn'] = true;
			header('Location: manager.php');

}
		if ($value->level == 3) { $_SESSION['adminLoggedIn'] = true;
			header('Location: admin.php');
}
		//header('Location: admin.php');
		*/
		$query = "SELECT * FROM TestDB.Administrator WHERE email = Email AND password = Password;
		mysqli_query($db, $query) or die('Error querying database');
		$result = mysqli_query($db, $query);

		while ($row = mysqli_fetch_array($result)){

			echo "<tr> <td>" . $row['email'] . "<td>" . $row['password'];

		}
	else { echo 'Incorrect login information!'; }
}
/*
if(isset($_POST['submit_edit'])){
	$username = $_POST['userid']; //echo $username;
	$password = $_POST['password']; //echo $password;

	//SQL query - match username and password
	$query = "SELECT * FROM users WHERE username ='$username' AND password='$password'";
	$result = mysqli_query($db, $query);
	$success = false;
	while ($row = mysqli_fetch_array($result)) { $success = true; }
	if ($success == true)  {

		$_SESSION['user']=$username;
		header('Location: user_update.php');
}
	else { echo 'Incorrect login information!'; }
}
*/
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
<title>Admin Login</title>
</head>

<body>

<div class=heading>
  <h2>Administrator</h2>
</div>

<div class=center>
  <form method= "post">
    Email &nbsp; <input type="text" name="email" placeholder="enter email" required/><br><br>
    Password &nbsp; <input type="password" name="password" placeholder="enter password" required/><br><br>

    <input type="submit" name="submit" id="submit" class="button" value="Login"/>  &nbsp;
    <input type="reset" value="Cancel"/> &nbsp;

</form>
</div>

</body>

</html>
