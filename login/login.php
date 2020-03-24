
<?php

$db = mysqli_connect('database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com', 'admin', 'CPSC4910Team10', 'TestDB')
or die('Error connecting to MySQL Server');
session_start();
error_reporting(E_ALL);

?>


<?php
If(isset($_POST['submit'])){
    $Email = $_POST['emailID']; //echo $username;
    $Password = $_POST['password']; //echo $password;

    //SQL query - match username and password
    $query = "(SELECT
            Administrator.Email AS Email,
            Administrator.Password AS Password,
            'Admin' AS From_Table
        FROM
            Administrator
	WHERE Email ='$Email' AND Password ='$Password')
    UNION (SELECT
            Sponsor.Email AS Email,
            Sponsor.Password AS Password,
            'Sponsor' AS From_Table
        FROM
            Sponsor
	WHERE Email ='$Email' AND Password ='$Password')
    UNION (SELECT
            Driver.Email AS Email,
            Driver.Password AS Password,
            'Driver' AS From_Table
        FROM
            Driver
	WHERE Email ='$Email' AND Password ='$Password')";
    $result = mysqli_query($db, $query);

    if ( !mysqli_num_rows($result) ){
        echo 'Incorrect login information!';
    }

    $userType = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ( $userType["From_Table"] == "Driver"){
        header('Location: ../testDatabase/test_driver_page.php');
    }else if ( $userType["From_Table"] == "Sponsor"){
        header('Location: ../testDatabase/test_sponsor_page.php');
    }else if ( $userType["From_Table"] == "Admin"){
        header('Location: ../testDatabase/test_admin_page.php');
    }

}
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
<title>Any Login</title>
</head>

<body>

<div class=heading>
  <h2>Any</h2>
</div>

<div class=center>
  <form method= "post">
    Email &nbsp; <input type="text" name="emailID" placeholder="enter username" required/><br><br>
    Password &nbsp; <input type="password" name="password" placeholder="enter password" required/><br><br>

    <input type="submit" name="submit" id="submit" class="button" value="Login"/>  &nbsp;
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
