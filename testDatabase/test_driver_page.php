<?php
$servername = "database-4910.cj8zoecgen2f.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "CPSC4910Team10";
//$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM TestDB.Driver ORDER BY Driver_ID ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Driver_ID: " . $row["Driver_ID"]. " - Email: ". $row["Email"]. " - Name: " . $row["First_Name"]. " " . $row["Last_Name"]. " - Address: " . $row["Address"]. " - DOB: " . $row["Date_Of_Birth"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
