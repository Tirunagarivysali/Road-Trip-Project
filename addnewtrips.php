<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="roadtrip";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$target_path = "upload/";
$target_path = $target_path.basename($_FILES["fileToUpload"]["name"]);
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_path);
$target_path = $target_path.basename($_FILES["tripmap"]["name"]);
move_uploaded_file($_FILES["tripmap"]["tmp_name"], $target_path);

if (isset($_POST['iname']) and isset($_POST['mapname']) and isset($_POST['start']) and isset($_POST['distance']) and isset($_POST['ratethisplace']) and isset($_POST['review']))
{
$riname=$_POST['iname'];
$rmapname=$_POST['mapname'];
$rstart=$_POST['start'];
$rdistance=$_POST['distance'];
$rratethisplace=$_POST['ratethisplace'];
$rreview=$_POST['review'];
$sql="INSERT INTO routes (tiname,tstart,tdistance,tratings,treview,tmapname)  values ('$riname','$rstart','$rdistance','$rratethisplace','$rreview','$rmapname')";
if(mysqli_query($conn,$sql))
{
  echo "Route data uploaded successfully";
}
else{
  echo "Error in uploading route data";
}
}


    mysqli_close($conn);
?>
