
<?php

session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$con5 = mysqli_connect('localhost', 'root', '','truckbhara.com');
// To protect MySQL injection for Security purpose

// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
 include'config.php';
 $con5=$conn;
$query = mysqli_query($con5,"select * from admin where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: AdminHome.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($con5); // Closing Connection
}
}
?>