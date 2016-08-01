<?php
include'/admin/config.php';



// Define $username and $password
$name=$_POST['name'];
$email=$_POST['email'];
$massage=$_POST['massage'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
//$connection = mysqli_connect('localhost', 'root', '','autistic_people_bd');
// To protect MySQL injection for Security purpose

// Selecting Database

// SQL query to fetch information of registerd users and finds user match.


$sql1 = "INSERT INTO massages (name,email,massage) VALUES ('$name','$email','$massage')";
$query = mysqli_query($conn,$sql1);

mysqli_close($conn); // Closing Connection
header('Location: index.php');
?> 