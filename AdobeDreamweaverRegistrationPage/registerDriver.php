<?php

$db = mysqli_connect('database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com', 'admin', 'CPSC4910Team10', 'TestDB')
or die('Error connecting to MySQL server');
session_start();
error_reporting(E_ALL);

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
		<h1 id="LoginPageLoginHeader">Register for a Driver Account!</h1>
		<input type="text" class="form-control" id="LoginPageUsernameButton" placeholder = "Email">
		<input type="text" class="form-control" id="RegisterDriverFirstNameButton" placeholder = "First Name">
		<input type="text" class="form-control" id="RegisterDriverLastNameButton" placeholder = "Last Name">
		<input type="text" class="form-control" id="RegisterDriverAddressButton" placeholder = "Address">
		<input type="text" class="form-control" id="LoginoNamePasswordButton" placeholder = "Password">
		<input type="text" class="form-control" id="LoginoNameConfirmPasswordButton" placeholder = "Confirm Password">
		<button type="button" id="LoginPageLoginButton">Submit</button>
	</div>
	
<script type="text/javascript" src="js/RegisterDriverPageBootstrap.js"></script>
<script type="text/javascript" src="js/RegisterDriverPageJQuery.min.js"></script>
<script type="text/javascript" src="js/RegisterDriverPagePopper.js"></script>
	
</body>
</html>
