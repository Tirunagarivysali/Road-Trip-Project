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
$sql = "CREATE TABLE contactus(tfirstname VARCHAR(30) NOT NULL, tlastname VARCHAR(30) NOT NULL, temail VARCHAR(40) PRIMARY KEY, tcountry VARCHAR(40) NOT NULL, tquery VARCHAR(150) NOT NULL)";
if(mysqli_query($conn,$sql))
{
    echo "Customer queries will be stored successfully from now";
} else {
    echo "Error in creating customer query contact table " . $conn->error;
}
$conn->close();
?>
