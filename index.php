<?php session_start(); ?>
<!DOCTYPE html>
<title>CPSC 4910</title>
<h1>Team 10 - Catalog</h1>
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
