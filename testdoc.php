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

$sql = "SELECT Driver_ID, Email, First_Name, Last_Name FROM TestDB.Driver ORDER BY Driver_ID ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Driver_ID: " . $row["Driver_ID"]. " ". $row["Email"]. " - Name: " . $row["First_Name"]. " " . $row["Last_Name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
