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

$sql = "SELECT * FROM TestDB.Sponsor ORDER BY Sponsor_ID ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Sponsor_ID: " . $row["Sponsor_ID"]. " - Email: ". $row["Email"]. " - Name: " . $row["Company_Name"]. " - Address: " . $row["Address"]. " - Point/Dollar: " . $row["Point_Dollar_Ratio"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
