<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="roadtrip";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST['email']) and isset($_POST['psw']) and isset($_POST['finame']) and isset($_POST['laname']))
{
$mail=$_POST['email'];
$password=$_POST['psw'];
$fname=$_POST['finame'];
$lname=$_POST['laname'];
$sql="INSERT INTO customers (temail,tpassword,firstname,lastname)  values ('$mail','$password','$fname','$lname')";
if(mysqli_query($conn,$sql))
{
  echo "Your account has been created";
}
else{
  echo "Error in creating your account";
}
}


mysqli_close($conn);
?>
