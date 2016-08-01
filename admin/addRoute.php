 <?php
//  $connection4 = mysqli_connect('localhost', 'root', '','truckbhara.com');
  //$query3 = mysqli_query($connection3,"select * from categories ");
   include'config.php';





// Define $username and $password
$name1=$_POST['newRoute'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect('localhost', 'root', '','autistic_people_bd');
// To protect MySQL injection for Security purpose

// Selecting Database

// SQL query to fetch information of registerd users and finds user match.


$sql1 = "INSERT INTO routes (route) VALUES ('$name1')";
$query = mysqli_query($conn,$sql1);

mysqli_close($conn); // Closing Connection
header('Location: AdminHome.php?i=1'); 


?>