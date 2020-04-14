<?php
    require '../vendor/autoload.php';
    use \Mailjet\Resources;
    if(isset($_POST['button'])) {
      $mj = new \Mailjet\Client('32230d8659943bad45e3b7ed6dba803f','c4917891da7beb49f5ae35f618c9fa92',true,['version' => 'v3.1']);
      $body = [
        'Messages' => [
          [
            'From' => [
              'Email' => "do_not_reply@cpsc4910.com",
              'Name' => "Team 10"
            ],
            'To' => [
              [
                'Email' => "tbrecke@clemson.edu",
                'Name' => "Tanner Breckenridge"
              ]
            ],
            'Subject' => "New Password",
            'TextPart' => "This is a randomly generated password for you.",
            'CustomID' => "NewPassword"
          ]
        ]
      ];
      $response = $mj->post(Resources::$Email, ['body' => $body]);
      echo "Password sent!";
      $response->success() && var_dump($response->getData());
    }
?>

<html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LoginPage</title>
<link href="css/ForgotPasswordEnterEmailPageBootstrap.css" rel="stylesheet">
<style type="text/css">
body {
    margin-bottom: 40px;
}
</style>
</head>
<form {
  text-align: center;
}>

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
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

    <div id="LoginPageBox">
		<h1 id="LoginPageLoginHeader">Forgot Password?</h1>
		<!-- <input type="text" class="form-control" id="LoginPageUsernameButton" placeholder = "Email"> -->
    
    <form method="post"> 
        <input type="text" name="emailAddress" placeholder = "Email"/>
        <input type="submit" name="button" value="Send Email"/> 
  </form> 
	</div>

<script type="text/javascript" src="js/ForgotPasswordEnterEmailPageBootstrap.js"></script>
<script type="text/javascript" src="js/ForgotPasswordEnterEmailPageJQuery.min.js"></script>
<script type="text/javascript" src="js/ForgotPasswordEnterEmailPagePopper.js"></script>

</body>
</html>