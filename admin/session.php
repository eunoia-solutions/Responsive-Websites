
<?php
include ('config.php');
$con6=$conn;
 // Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect('localhost', 'root', '','autistic_people_bd');
// Selecting Database

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query( $con6,"select username from admin where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($con6); // Closing Connection
header('Location: index.php'); // Redirecting To Home Page
}
?>