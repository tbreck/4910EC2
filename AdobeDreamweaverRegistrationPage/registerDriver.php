<?php

$db = mysqli_connect('database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com', 'admin', 'CPSC4910Team10', 'TestDB')
or die('Error connecting to MySQL server');
session_start();
error_reporting(E_ALL);

?>

<?php
If(isset($_POST['LoginPageLoginButton'])){
	$Email = $_POST['LoginPageUsername']; //echo $Email;
	$FirstName = $_POST['RegisterDriverFirstName']; //echo $FirstName;
	$LastName = $_POST['RegisterDriverLastName']; //echo $LastName;
	$Address = $_POST['RegisterDriverAddress']; //echo $Address;
	$Password = $_POST['LoginNamePassword']; //echo $Password;
	$PasswordConfirm = $_POST['LoginNameConfirmPassword'];

	$query = "INSERT INTO Driver (Email, First_Name, Last_Name, Address, Password)
		  VALUES ('$Email', '$FirstName', '$LastName', '$Address', '$Password')";

	if(mysqli_query($db, $query) == TRUE){
		header('Location: ../AdobeDreamweaverHomePage/HomeTemplateVersion.html'); //echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}else{
		echo("Registration Failed!");
		echo "Error: " . $sql . "<br>" .mysqli_error($db);
	}

}

?>

<html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LoginPage</title>
<link href="css/RegisterDriverPage.css" rel="stylesheet">
<style type="text/css">
body {
    margin-bottom: 40px;
}
</style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="../index.php">TruckTracker&nbsp;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/AdobeDreamweaverLoginPage/login.php">Catalog <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="/AdobeDreamweaverLoginPage/login.php">Account <span class="sr-only">(current)</span></a>
            </li>
			  <li class="nav-item active">
              <a class="nav-link" href="/AdobeDreamweaverLoginPage/login.php">Points <span class="sr-only">(current)</span></a>
            </li>
			  <li class="nav-item active">
              <a class="nav-link" href="/AdobeDreamweaverLoginPage/login.php">Settings <span class="sr-only">(current)</span></a>
            </li>
			  <li class="nav-item active">
              <a class="nav-link" href="/AdobeDreamweaverLoginPage/login.php">Your Cart <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
	
    <div id="LoginPageBox">
	<form method = "post">
		<h1 id="LoginPageLoginHeader">Register for a Driver Account!</h1>
		<input type="text" class="form-control" id="LoginPageUsernameButton" name="LoginPageUsername" placeholder = "Email">
		<input type="text" class="form-control" id="RegisterDriverFirstNameButton" name="RegisterDriverFirstName" placeholder = "First Name">
		<input type="text" class="form-control" id="RegisterDriverLastNameButton" name="RegisterDriverLastName" placeholder = "Last Name">
		<input type="text" class="form-control" id="RegisterDriverAddressButton" name="RegisterDriverAddress" placeholder = "Address">
		<input type="text" class="form-control" id="LoginNamePasswordButton" name="LoginNamePassword" placeholder = "Password">
		<input type="text" class="form-control" id="LoginNameConfirmPasswordButton" name="LoginNameConfirmPassword" placeholder = "Confirm Password">
		<button type="submit" id="LoginPageLoginButton" name="LoginPageLoginButton">Submit</button>
	</form>
	</div>
	
<script type="text/javascript" src="js/RegisterDriverPageBootstrap.js"></script>
<script type="text/javascript" src="js/RegisterDriverPageJQuery.min.js"></script>
<script type="text/javascript" src="js/RegisterDriverPagePopper.js"></script>
	
</body>
</html>
