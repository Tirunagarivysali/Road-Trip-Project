<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname= "roadtrip";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}// sql to create table
$sql = "CREATE TABLE routes(tiname VARCHAR(30) PRIMARY KEY, tstart VARCHAR(50) NOT NULL, tdistance VARCHAR(30) NOT NULL, tratings VARCHAR(20) NOT NULL, treview VARCHAR(150) NOT NULL,tmapname VARcHAR(30) NOT NULL)";
if(mysqli_query($conn,$sql))
{
    echo "Table To store add new routes created successfully";
} else {
    echo "Error creating table to store new routes data: " . $conn->error;
}
$conn->close();
?>
