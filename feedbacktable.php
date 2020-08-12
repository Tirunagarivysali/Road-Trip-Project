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
$sql = "CREATE TABLE feedback(trate VARCHAR(30) NOT NULL, tname VARCHAR(40) NOT NULL,tcomments VARCHAR(150) NOT NULL)";
if(mysqli_query($conn,$sql))
{
    echo "Feedbacks of customers are taken into consideration successfully. ";
} else {
    echo "Error in taking feedbacks. " . $conn->error;
}
$conn->close();
?>
