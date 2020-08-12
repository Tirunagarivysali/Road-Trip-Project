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
}

// sql to create table
$sql = "CREATE TABLE customers(temail VARCHAR(40) PRIMARY KEY, tpassword VARCHAR(8) NOT NULL,firstname VARCHAR(30) NOT NULL, lastname VARCHAR(30) NOT NULL)";
if ($conn->query($sql) === TRUE) {
    echo "Table to store users data created successfully";
} else {
    echo "Error creating table to store customers data: " . $conn->error;
}
$conn->close();
?>
