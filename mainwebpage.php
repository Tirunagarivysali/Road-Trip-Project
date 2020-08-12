<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="roadtrip";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST['place']))
{
  $rplace=$_POST['place'];
  $sql="SELECT * from routes where tstart='$rplace'";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<table>";
    echo "<tr><td>Road Trip: </td>";
    echo "<td>". $row["tstart"]."</td></tr>";
   echo "<tr><td>Distance: </td>";
   echo "<td>" .$row["tdistance"] ."</td></tr>" ;
   echo "<tr><td>Overall  Rating: </td>";
   echo "<td>". $row["tratings"] . "</td</tr>";
   echo "<tr><td>Review by travellers: </td>";
   echo "<td>". $row["treview"] ."</td></tr>" ;
   echo "</table>";
    $image = $row["tiname"];
    $mapimage=$row["tmapname"];
   echo "<br>";?>
   <?php echo "<b>Image:</b>" . "<br><br>" ?>

   <?php  $image_src="upload/".$image; ?>
   <?php  $mapimage_src="upload/".$mapimage; ?>
 <img  src='<?php echo $image_src.'.jpeg';?>'>
  <img src='<?php echo $image_src.'.jpg';?>'>
 <?php echo "<br><br>";?>
 <?php echo "<b>Location on map:</b>" . "<br><br>" ?>
   <img  src='<?php echo $mapimage_src.'.png';?>'>
<?php   }
} else {
  echo "No Road trips related to that place";
}
}?>
<?php mysqli_close($conn); ?>
