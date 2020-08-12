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


if (isset($_POST['email']) and isset($_POST['setpassword']) and isset($_POST['confirmpassword']))
{
$mail=$_POST['email'];
$rsetpassword=$_POST['setpassword'];
$rcpassword=$_POST['confirmpassword'];
if($rsetpassword===$rcpassword)
{
$sql="UPDATE CUSTOMERS SET  password='$rsetpassword' where email='$mail'";
if(mysqli_query($conn,$sql))
{
  echo "Your password has been changed";
}
else{
  echo "Error in changing your password";
}
}
else {
echo "reset password doesn't match with cofimr password";
}
}


mysqli_close($conn);
?>
