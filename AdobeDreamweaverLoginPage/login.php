
<?php
//session_start();
$db = mysqli_connect('database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com', 'admin', 'CPSC4910Team10', 'TestDB')
or die('Error connecting to MySQL Server');
session_start();
error_reporting(E_ALL);

?>


<?php
If(isset($_POST['LoginPageLoginButton'])){
    $_SESSION['Email'] = $_POST['LoginPageUsername']; //echo $username;
    $_SESSION['Password'] = $_POST['LoginPagePassword']; //echo $password;

    //SQL query - match username and password
    $query = "(SELECT
            Administrator.Email AS Email,
            Administrator.Password AS Password,
            'Admin' AS From_Table
        FROM
            Administrator
	WHERE Email ='{$_SESSION['Email']}' AND Password ='{$_SESSION['Password']}')
    UNION (SELECT
            Sponsor.Email AS Email,
            Sponsor.Password AS Password,
            'Sponsor' AS From_Table
        FROM
            Sponsor
	WHERE Email ='{$_SESSION['Email']}' AND Password ='{$_SESSION['Password']}')
    UNION (SELECT
            Driver.Email AS Email,
            Driver.Password AS Password,
            'Driver' AS From_Table
        FROM
            Driver
	WHERE Email ='{$_SESSION['Email']}' AND Password ='{$_SESSION['Password']}')";
    $result = mysqli_query($db, $query);

    if ( !mysqli_num_rows($result) ){
        echo 'Incorrect login information!';
    }

    $userType = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if ( $userType["From_Table"] == "Driver"){
        header('Location: ../AdobeDreamweaverHomePage/HomeTemplateVersion.html');
    }else if ( $userType["From_Table"] == "Sponsor"){
        header('Location: ../AdobeDreamweaverHomePage/HomeTemplateVersionSponsor.html');
    }else if ( $userType["From_Table"] == "Admin"){
        header('Location: ../AdobeDreamweaverHomePage/HomeTemplateVersionAdmin.html');
    }

}
?>



<html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Page</title>
<link href="css/LoginPageBootstrap.css" rel="stylesheet">
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
	<form method= "post">
		<h1 id="LoginPageLoginHeader">Login</h1>
		<input type="text" class="form-control" id="LoginPageUsername" name="LoginPageUsername" placeholder = "Email">
		<input type="text" class="form-control" id="LoginPagePassword" name="LoginPagePassword" placeholder = "Password">
		<button type="submit" id="LoginPageLoginButton" name="LoginPageLoginButton">Login</button>
		<button type="submit" id="LoginPageForgotButton" formaction="/AdobeDreamweaverForgotPasswordEnterEmailPage/forgotPassword.php">Forgot Password?</button>
		<button type="submit" id="LoginPageRegisterButtonDriver" formaction="/AdobeDreamweaverRegistrationPage/registerDriver.php">Register [Driver]</button>
		<button type="submit" id="LoginPageRegisterButtonSponsor" formaction="/AdobeDreamweaverRegistrationPage/registerSponsor.php">Register [Sponsor]</button>
	</form>
	</div>

<script type="text/javascript" src="AdobeDreamweaverLoginPage/js/LoginPageBootstrap.js"></script>
<script type="text/javascript" src="AdobeDreamweaverLoginPage/js/LoginPageJQuery.min.js"></script>
<script type="text/javascript" src="AdobeDreamweaverLoginPage/js/LoginPagePopper.js"></script>

</body>


</html>
