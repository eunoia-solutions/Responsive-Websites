						 
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$fair= $_POST["fair"];
$vehicle= $_POST["vehicle"];
$fair=(int)$fair;
$route= $_POST["route"];
include 'config.php';
if($fair==null)
{echo "<br>Please Input a exact ID first";}
else{
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}
$sql = "SELECT * FROM fairinfo WHERE route='$route' AND category='$vehicle'";

mysqli_select_db($conn,"ajax_demo");
$retval = mysqli_query( $conn,$sql );

if($row = mysqli_fetch_array($retval))
{
 
$sql1 = "UPDATE fairinfo SET fair='$fair' WHERE route='$route' AND category='$vehicle'";
   $query = mysqli_query($conn,$sql1);
mysqli_close($conn);
header('Location: AdminHome.php?i=2'); 
} 
else {
 
$sql2 = "INSERT INTO  fairinfo(fair,route,category) VALUES ('$fair','$route','$vehicle')";
   $query = mysqli_query($conn,$sql2);
mysqli_close($conn);
header('Location: AdminHome.php?i=3'); 
}
}

?>