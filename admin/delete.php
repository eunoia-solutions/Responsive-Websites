 <?php
 include'config.php';
 // $connection4 = mysqli_connect('localhost', 'root', '','truckbhara.com');
  //$query3 = mysqli_query($connection3,"select * from categories ");
  





// Define $username and $password
$name1=$_GET['id'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect('localhost', 'root', '','autistic_people_bd');
// To protect MySQL injection for Security purpose

// Selecting Database

// SQL query to fetch information of registerd users and finds user match.


$sql1 = "DELETE FROM fairinfo WHERE id=$name1";
$query = mysqli_query($conn,$sql1);

mysqli_close($conn); // Closing Connection
header('Location: deleteInfo.php'); 


?>