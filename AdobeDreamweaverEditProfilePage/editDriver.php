<?php

$db = mysqli_connect('database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com', 'admin', 'CPSC4910Team10', 'TestDB')
or die('Error connecting to MySQL server');
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


<?php

If(isset($_POST['DriverSaveButton'])){
        $Email = $_POST['EditProfileDriverEmail']; //echo $Email;
        $FirstName = $_POST['EditProfileFirstName']; //echo $FirstName;
        $LastName = $_POST['EditProfileLastName']; //echo $LastName;
        $Address = $_POST['EditProfileAddress']; //echo $Address;
	$Birthday = $_POST['EditProfileBirthday'];

        $query = "UPDATE Driver
                  SET Email = '$Email',
		      First_Name = '$FirstName',
		      Last_Name = '$LastName',
		      Address = '$Address',
		      Date_Of_Birth = '$Birthday'
		  WHERE Driver_ID = '{$_SESSION['Driver_ID']}'";

        if(mysqli_query($db, $query) == TRUE){
		$_SESSION['Email'] = $Email;
                header('Location: /../AdobeDreamweaverProfilePages/driverProfile.php'); //echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }else{
                echo("Edit Profile Failed!");
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
<title>Edit Driver</title>
<link href="css/EditProfileBootstrap.css" rel="stylesheet">
<style type="text/css">
body {
    margin-bottom: 40px;
}
</style>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">TruckTracker&nbsp;</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Catalog <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Account <span class="sr-only">(current)</span></a>
            </li>
			  <li class="nav-item active">
              <a class="nav-link" href="#">Points <span class="sr-only">(current)</span></a>
            </li>
			  <li class="nav-item active">
              <a class="nav-link" href="#">Settings <span class="sr-only">(current)</span></a>
            </li>
			  <li class="nav-item active">
              <a class="nav-link" href="#">Your Cart <span class="sr-only">(current)</span></a>
            </li>
			  <li class="nav-item active">
              <a class="nav-link" href="#">Log Out <span class="sr-only">(current)</span></a>
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
  <form method="post">
  <hr>
  <input type="text" class="form-control" id="EditProfileFirstName" name="EditProfileFirstName" placeholder = "First Name">
  <input type="text" class="form-control" id="EditProfileLastName" name="EditProfileLastName" placeholder = "Last Name">
  <p id="DriverID">Driver ID: <?php echo $_SESSION['Driver_ID'] ?></p>
  <input type="text" class="form-control" id="EditProfileDriverEmail" name="EditProfileDriverEmail" placeholder = "Email">
  <input type="text" class="form-control" id="EditProfileBirthday" name="EditProfileBirthday" placeholder = "Date of Birth">
  <input type="text" class="form-control" id="EditProfileAddress" name="EditProfileAddress" placeholder = "Address">
  <p id="DriverPasswordText">Password: <?php echo $_SESSION['Password'] ?></p>
  <p>Total Points: TO INPUT</p>
	
  <button type="submit" id="DriverSaveButton" name="DriverSaveButton">Save Profile</button>
  </form>

</div>
	
<script type="text/javascript" src="js/EditProfileBootstrap.js"></script>
<script type="text/javascript" src="js/EditProfileJQuery.min.js"></script>
<script type="text/javascript" src="js/EditProfilePopper.js"></script>
</body>
</html>
