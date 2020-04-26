<?php

$db = mysqli_connect('database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com', 'admin', 'CPSC4910Team10', 'TestDB')
or die('Error connecting to MySQL Server');
session_start();
error_reporting(E_ALL);

?>

<?php

$sql = "SELECT First_Name, Last_Name, Address, Driver_ID, Date_Of_Birth
	FROM Driver
	WHERE Email = '{$_SESSION['Email']}'";
$result = mysqli_query($db, $sql);

if(!mysqli_num_rows($result)){
	echo 'Problem with fetching data';
}

$rowInfo = mysqli_fetch_array($result, MYSQLI_ASSOC);
$_SESSION['First_Name'] = $rowInfo['First_Name'];
$_SESSION['Last_Name'] = $rowInfo['Last_Name'];
$_SESSION['Address'] = $rowInfo['Address'];
$_SESSION['Driver_ID'] = $rowInfo['Driver_ID'];
$_SESSION['Date_Of_Birth'] = $rowInfo['Date_Of_Birth'];

?>

<html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>FreshStartProfile</title>
<link href="css/FreshStartBootstrap.css" rel="stylesheet">
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
            <a class="nav-link" href="/AdobeDreamweaverForgotPasswordEnterEmailPage/ForgotPasswordEnterEmailPage.html">Account <span class="sr-only">(current)</span></a>
          </li>
      <li class="nav-item active">
            <a class="nav-link" href="/AdobeDreamweaverHomePage/HomeTemplateVersionSponsor.html">Points <span class="sr-only">(current)</span></a>
          </li>
      <li class="nav-item active">
            <a class="nav-link" href="/AdobeDreamweaverProfilePages/FreshStartProfile.html">Settings <span class="sr-only">(current)</span></a>
          </li>
      <li class="nav-item active">
            <a class="nav-link" href="/AdobeDreamweaverSettingsPage/SettingsPage.html">Your Cart <span class="sr-only">(current)</span></a>
          </li>
	  </li>
      <li class ="nav-item active">
            <a class="nav-link" href="\..\index.php">Sign Out <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

<div id="left_column">
<img src="Images/profile.png" width="200" height="211" alt=""/> </div>

<div id="body_column">
  <h1><?php echo $_SESSION['First_Name']?> <?php echo $_SESSION['Last_Name']?></h1>
  <hr>
  <p>First Name: <?php echo $_SESSION['First_Name']?></p>
  <p>Last Name: <?php echo $_SESSION['Last_Name']?></p>
  <p>Driver ID: <?php echo $_SESSION['Driver_ID']?></p>
  <p>Email: <?php echo $_SESSION['Email']?></p>
  <p>Date of Birth: <?php echo $_SESSION['Date_Of_Birth']?></p>
  <p>Address: <?php echo $_SESSION['Address']?></p>
  <p>Password: <?php echo $_SESSION['Password']?></p>
  <p>Total Points: TO INPUT</p>

  <button type="submit" id="ProfilePageEditProfileButtonDriver" formaction="/AdobeDreamweaverEditProfilePage/editDriver.php">Edit Profile</button>
  <button type="button">Reset Password</button>

</div>

<script type="text/javascript" src="js/FreshStartBootstrap.js"></script>
<script type="text/javascript" src="js/FreshStartJQuery.min.js"></script>
<script type="text/javascript" src="js/FreshStartPopper.js"></script>
</body>
</html>
