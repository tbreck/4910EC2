<!--connect to the database-->
<?php

$db = mysqli_connect('mysql1.cs.clemson.edu', 'FrwrksWH_n519', 'gopher20lamppost', 'Fireworks_WH_f0tk')
or die('Error connecting to MySQL Server');

session_start();

?>


<html>

<style>
.bold{
	font-weight: bold;
}
</style>

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
<title>Employee access</title>
</head>

<body>

<div class=heading>
  <h2>Fireworks: Basic View</h2>
</div>

<div class=center>

<form method= "post">
Name: &nbsp; <input type="name_input" name="name_input" placeholder="enter item name" required/>
	<input type="submit" name="search_name" id="search_name" class="button" value="Search by name"/> 
</form>

<form method= "post">
Item Number: &nbsp; <input type="item_number_input" name="item_number_input" placeholder="enter item number" required/>
	<input type="submit" name="search_number" id="search_number" class="button" value="Search by item number"/> 
</form>

 <form method= "post">
	<input type="submit" name="show_all_wares" id="show_all_wares" class="button" value="Show All Wares"/> 
</form>

<form method= "post">
	<input type="submit" name="sort_supplier" id="sort_supplier" class="button" value="Show and Sort Wares by Supplier"/> 
</form>

<form method= "post">
	<input type="submit" name="sort_price" id="sort_price" class="button" value="Show and Sort Wares by Price"/> 
</form>

</div>

<table border ="3" align="center">

<span style="font-weight:bold">
<tr> <td>Item Number<td>Name<td>Price<td>Supplier<td>Case Quantity<td>Stock Cap<td>Cases Available<td>Items Available
</span>

<?php

If(isset($_POST['logout'])){
	header('Location: index.php');
}

If(isset($_POST['show_all_wares'])){

	//SQL query - select all from all tables
	$query = "SELECT * FROM information, product, stock WHERE information.item_number = product.item_number AND information.item_number = stock.item_number";
	mysqli_query($db, $query) or die('Error querying database');
	$result = mysqli_query($db, $query);

	
	//print out table
	while ($row = mysqli_fetch_array($result)){
	
		echo "<tr> <td>" . $row['item_number'] . "<td>" . $row['name'] ."<td>" . $row['price']. "<td>" . $row['supplier'] . "<td>" . $row['case_quantity'] . "<td>" . $row['stock_cap'] . "<td>" . $row['cases_available'] . "<td>" . $row['items_available'];

	}
}

If(isset($_POST['sort_supplier'])){

		//SQL query - select all from all tables and sort by supplier
		$query = "SELECT * FROM information, product, stock WHERE information.item_number = product.item_number AND information.item_number = stock.item_number ORDER BY information.supplier, product.name ASC";
	mysqli_query($db, $query) or die('Error querying database');
	$result = mysqli_query($db, $query);

	
	//print out table
	while ($row = mysqli_fetch_array($result)){
	
		echo "<tr> <td>" . $row['item_number'] . "<td>" . $row['name'] ."<td>" . $row['price']. "<td>" . $row['supplier'] . "<td>" . $row['case_quantity'] . "<td>" . $row['stock_cap'] . "<td>" . $row['cases_available'] . "<td>" . $row['items_available'];

	}
}

If(isset($_POST['sort_price'])){

		//SQL query - select all from all tables and sort by price
		$query = "SELECT * FROM information, product, stock WHERE information.item_number = product.item_number AND information.item_number = stock.item_number ORDER BY information.price, product.name ASC";
	mysqli_query($db, $query) or die('Error querying database');
	$result = mysqli_query($db, $query);

	
	//print out table
	while ($row = mysqli_fetch_array($result)){
	
		echo "<tr> <td>" . $row['item_number'] . "<td>" . $row['name'] ."<td>" . $row['price']. "<td>" . $row['supplier'] . "<td>" . $row['case_quantity'] . "<td>" . $row['stock_cap'] . "<td>" . $row['cases_available'] . "<td>" . $row['items_available'];

	}
}

If(isset($_POST['search_name'])){
	$name = $_POST['name_input']; 

	//SQL query - search for name input in product table and display all tables 
	$query = "SELECT * FROM information, product, stock WHERE product.name = '$name' AND information.item_number = product.item_number AND information.item_number = stock.item_number";
	mysqli_query($db, $query) or die('Error querying database');
	$result = mysqli_query($db, $query);

	
	//print out table
	while ($row = mysqli_fetch_array($result)){
	
		echo "<tr> <td>" . $row['item_number'] . "<td>" . $row['name'] ."<td>" . $row['price']. "<td>" . $row['supplier'] . "<td>" . $row['case_quantity'] . "<td>" . $row['stock_cap'] . "<td>" . $row['cases_available'] . "<td>" . $row['items_available'];

	}
}

If(isset($_POST['search_number'])){
	$number = $_POST['item_number_input'];  

	//SQL query - search for item number in all tables and show all
	$query = "SELECT * FROM information, product, stock WHERE product.item_number = '$number' AND information.item_number = product.item_number AND information.item_number = stock.item_number";
	mysqli_query($db, $query) or die('Error querying database');
	$result = mysqli_query($db, $query);

	
	//print out table
	while ($row = mysqli_fetch_array($result)){
	
		echo "<tr> <td>" . $row['item_number'] . "<td>" . $row['name'] ."<td>" . $row['price']. "<td>" . $row['supplier'] . "<td>" . $row['case_quantity'] . "<td>" . $row['stock_cap'] . "<td>" . $row['cases_available'] . "<td>" . $row['items_available'];

	}
}

?>

</table>



<div class=center>
 <form method= "post">
	<input type="submit" name="logout" id="logout" class="button" value="Logout"/> 
</form>


</div>


</body>

</html>
