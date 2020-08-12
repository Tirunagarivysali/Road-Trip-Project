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
if(isset($_POST['rating']) and isset($_POST['name']) and isset($_POST['comments']))
{
  $rate=$_POST['rating'];
  $pname=$_POST['name'];
  $pcomments=$_POST['comments'];
  $sql="INSERT INTO feedback (trate,tname,tcomments)  values ('$rate','$pname','$pcomments')";
  if(mysqli_query($conn,$sql))
  {
    echo "I appreciate you in investing time for improving us.Thank you ".$pname." for your feedback.";
    echo '<form action="mainwebpage.html">';
    echo "<br>"
    echo "Have a look at interesting places to go for  Road trip.";
    echo '<button type="submit">Click to continue</button>';
    echo "</form>";
  }
  else{
    echo "Error in uploading feedback details";
  }

}
mysqli_close($conn);
 ?>
