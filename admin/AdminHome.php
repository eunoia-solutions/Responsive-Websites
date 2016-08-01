<?php
 //include'config.php';
include ('session.php') ;

?>

<!DOCTYPE html>
<html lang="en">
<title>A site for updated fair </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">


<link rel="stylesheet" href="ripple.css">

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="w3-theme-black.css">
<body>
<div class="w3-container">
<div class="w3-container">
<div class="w3-half" >
<div class="w3-quarter">
<img src="logo.jpg"  alt="Car" style="width:100%">
</div>
<div class="w3-container">
  <h1 >TruckBahra.com</h1>
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




<div class="w3-container" style="margin:2% 0%">

<h2 align="center" >Welcome to Admin Panel</h2>
</br>
<div class="w3-container">
<p class="w3-green w3-center">
<?php
if(!empty($_GET['i']))
{
$massage=$_GET['i'];
if($massage=='1')
echo "Route has been added successfully";
else if($massage=='2')
echo "Data has been updated successfully";
else if($massage=='3')
echo "Data has been inserted successfully";
else if($massage=='4')
echo " Vehicle has been updated successfully";

}

?>
</p>
</div>
<div class="w3-container">
<div  style="margin:1% 0%">

<div class="w3-half">
<form class="w3-container w3-card-16" action="updateFair.php" method="post">
  <h2>Insert or update fair data </h2>
 
 
	 <div class="w3-group">   
    
     <select name="vehicle" class="w3-input "  style="width:90%" >
	 
  <?php
 include 'Vehicle.php';

while($row1 = mysqli_fetch_array($query1))
{
?>
  
 
<option value="<?php   echo "{$row1['category']}" ;?>">
<?php   echo "{$row1['category']}" ;?></option>
	
	
  
<?php
}
    mysqli_close($con1);
  ?> 
  </select>
    <label class="w3-label">Select a Vehicle</label>
  </div> <div class="w3-group">   
    
     <select name="route" class="w3-input "  style="width:90%" >
	 
  <?php
 include 'Route.php';

while($row2= mysqli_fetch_array($query2))
{
?>
  
 
<option value="<?php   echo "{$row2['route']}" ;?>">
<?php   echo "{$row2['route']}" ;?></option>
	
	
  
<?php
}
    mysqli_close($con2);
  ?> 
  </select>
    <label class="w3-label">Select a Route</label>
  </div>
   <div class="w3-group">      
    <input class="w3-input"  name="fair" style="width:90%" required>
    <label class="w3-label w3-text-teal" >Fair per ton</label>
  </div>
  
  <div class="w3-group">
  <button class="w3-btn w3-teal w3-section">Insert/Update</button>
  </div>
</form>


</div>
<div class="w3-half" style="margin:0% 0%">
<div  style="margin:0% 1%">
<form class="w3-container w3-card-16" action="addRoute.php" method="post">
  <h2> You can add a new Route here </h2>
  <div class="w3-group">      
    <input class="w3-input " name="newRoute" type="text" style="width:90%" required>
    <label class="w3-label w3-text-teal">Add a Route(like(Source-Destination))</label>
  </div>
  <div class="w3-group">
  <button class="w3-btn w3-teal w3-section">Add Route</button>
  </div>
</form>
</div>
<div style="margin:1% 1%">


<form class="w3-container w3-card-16" action="addVehicle.php" method="post">
  <h2>You can add  a new Vehicle here</h2>
  <div class="w3-group">      
    <input class="w3-input" name="newVehicle"type="text" style="width:90%" required>
    <label class="w3-label w3-text-teal">Vehicle category</label>
  </div>
  <div class="w3-group">
  <button class="w3-btn w3-teal w3-section">Add Vehicle</button>
  </div>
</form>

</div>

</div>

</div>
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

