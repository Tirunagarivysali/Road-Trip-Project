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

if (isset($_POST['fname']) and isset($_POST['lname']) and isset($_POST['email']) and isset($_POST['country']) and isset($_POST['pro']))
{
$rfirstname=$_POST['fname'];
$rlastname=$_POST['lname'];
$remail=$_POST['email'];
$rcountry=$_POST['country'];
$rquery=$_POST['pro'];
$sql="INSERT INTO contactus (tfirstname,tlastname,temail,tcountry,tquery)  values ('$rfirstname','$rlastname','$remail','$rcountry','$rquery')";
if(mysqli_query($conn,$sql))
{

    echo "Thanks for contacting us ".$rfirstname." ".$rlastname." . Your query will be answered soon.";
    echo '<form action="mainwebpage.html">';
    echo "<br>";
    echo "Have a look at interesting places to go for  Road trip.";
    echo '<button type="submit">Click to continue</button>';
    echo "</form>";
}
else{
  echo "Error in submitting your query.Please try again!";
}
}


mysqli_close($conn);
?>
