<?php

$db = mysqli_connect('database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com', 'admin', 'CPSC4910Team10', 'TestDB')
or die('Error connecting to MySQL Server');
session_start();
error_reporting(E_ALL);

?>

<?php

$sql = "SELECT Company_Name, Address, Sponsor_ID, Point_Dollar_Ratio
        FROM Sponsor
        WHERE Email = '{$_SESSION['Email']}'";
$result = mysqli_query($db, $sql);

if(!mysqli_num_rows($result)){
        echo 'Problem with fetching data';
}



$rowInfo = mysqli_fetch_array($result, MYSQLI_ASSOC);
$_SESSION['Company_Name'] = $rowInfo['Company_Name'];
$_SESSION['Address'] = $rowInfo['Address'];
$_SESSION['Sponsor_ID'] = $rowInfo['Sponsor_ID'];
$_SESSION['Point_Dollar_Ratio'] = $rowInfo['Point_Dollar_Ratio'];
?>

<?php /*
$sql = "SELECT  COUNT(Sponsor_ID = '{$_SESSION['Sponsor_ID']}')
        FROM Driver/Sponsor";
$result2 = mysqli_query($db, $sql);
$driverSponsorRel = mysqli_fetch_array($result2, MYSQLI_ASSOC);
$count_drivers = $driverSponsorRel['Count'];
echo $count_drivers; */
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
  <h1><?php echo $_SESSION['Company_Name']?></h1>
  <hr>
  <p>Company Name: <?php echo $_SESSION['Company_Name']?></p>
  <p>Sponsor ID: <?php echo $_SESSION['Sponsor_ID']?></p>
  <p>Email: <?php echo $_SESSION['Email']?></p>
  <p>Address: <?php echo $_SESSION['Address']?></p>
  <p>Point to $ Ratio: <?php echo $_SESSION['Point_Dollar_Ratio']?> to 1</p>
  <p>Password: <?php echo $_SESSION['Password']?></p>
  <p>Total Drivers: </p>

  <form method="post">
  <button type="submit" id="ProfilePageEditProfileButtonSponsor" formaction="/AdobeDreamweaverEditProfilePage/editSponsor.php">Edit Profile</button>
  <button type="submit" id="ForgotPassword" formaction="/AdobeDreamweaverForgotPasswordEnterEmailPage/forgotPassword.php">Reset Password</button>

  <input type="text" class="form-control" id="DriverEmailtoAdd" placeholder = "Driver's Email To Add To List">
  <button type="button" id="AddDriver">Add Driver</button>
  </form>

</div>

<script type="text/javascript" src="js/FreshStartBootstrap.js"></script>
<script type="text/javascript" src="js/FreshStartJQuery.min.js"></script>
<script type="text/javascript" src="js/FreshStartPopper.js"></script>
</body>
</html>
