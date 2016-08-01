<?php
include'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<title>A site for updated fair </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">

<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" href="ripple.css">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="w3-theme-black.css">
<body>
<div class="w3-container">
<div class="w3-container">
<div class="w3-half" >
<div class="w3-quarter">
<a href="index.php"><img src="logo.jpg"  alt="Car" style="width:100%"></a>
</div>
<div class="w3-container">
  <h1 >Truck Lorry fair info</h1>
  <p>A site for updated fair</p>
  </div>
</div>
</div>
<div class="w3-topnav w3-center w3-theme w3-black w3-card-16 w3-padding-8" >


  
  <a href="AdminHome.php">Admin Home</a>
  <a href="deleteInfo.php">Delete Info</a>
  <a href="view.php">User Massages</a>
  <a href="logout.php">Logout</a>
  
</div>


<div style="margin:3% 0%">
<table class="w3-table w3-striped w3-bordered w3-card-16">
<tr>
  <th>Route</th>
  <th>Vehicle</th>
  <th>Fair</th>
</tr>


<?php
include 'config.php';
if(! $conn )
{
  die('Could not connect: ' . mysqli_error());
}
$sql = 'SELECT * FROM massages';

mysqli_select_db($conn,"ajax_demo");
$retval = mysqli_query( $conn,$sql );
if(! $retval )
{
  die('Could not get data: ' . mysqli_error());
}
while($row = mysqli_fetch_array($retval))
{
?>

  
  <tr>
  
     <td ><?php   echo "{$row['name']}" ;?></td>	
	     <td ><?php   echo "{$row['email']}" ;?></td>	
    <td ><?php   echo " {$row['massage']}  " ;?></td>
 	 
    
  </tr>
  <?php
        }
    mysqli_close($conn);
?>
</table>


</div>
<footer class="w3-container w3-padding-32 w3-theme w3-center w3-black">
  <h4>Follow Us</h4>
  <a class="w3-btn-floating w3-teal" href="fb.com" title="Rss"><i class="fa fa-rss"></i></a>
  <a class="w3-btn-floating w3-teal" href="fb.com" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-btn-floating w3-teal" href="fb.com" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-btn-floating w3-teal" href="fb.com" title="Google +"><i class="fa fa-google-plus"></i></a>
  
  <p>&#169; Copyright whatever</p>			

			
</footer>


</div>

</body>
</html>

