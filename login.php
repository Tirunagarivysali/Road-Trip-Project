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
if (isset($_POST['ename']) and isset($_POST['psw']))
{
  $mail=$_POST['ename'];
  $pass=$_POST['psw'];
$sql="SELECT * FROM customers WHERE temail='$mail' AND tpassword='$pass'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo  "welcome back " . $row['firstname'];
                echo  " " .$row['lastname'] ;
            echo "</tr>";
        }
        echo "</table>";
        echo '<form action="mainwebpage.html">';
        echo "It's nice to see you again.";
        echo "Have a look at interesting places to go for  Road trip.";
        echo '<button type="submit">Click to continue</button>';
        echo "</form>";

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "Your account doesn't exist.Please create an account";
    }
}
}
mysqli_close($conn);
?>
