<?php session_start(); ?>
<!DOCTYPE html>
<title>TruckTracker</title>
<h1>TruckTracker</h1>
<section>
	<p>
<?php
if(isset($_SESSION['name'])){
		echo "Hi ".$_SESSION['name']."! \n\n\n";
	}
?>
	Go <a href="login.html">here to login</a> or <a href="registration.html">here to register</a>.
	</p>
</section>
