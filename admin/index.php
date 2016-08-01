
<?php
 
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header('location: AdminHome.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Admin Login with Session</title>
<link href="w3.css" rel="stylesheet" type="text/css">
</head>
<body>
<div >



<div class="w3-third">
<p>.</p>
</div>

<div class="w3-third" style="position:center">

<form class="w3-container w3-card-16" action="" method="post" >
  <h2> Please give the proper User name and password to login successfully  </h2>
  <div class="w3-group">      
    <input class="w3-input " name="username" placeholder="username" type="text" style="width:90%" required>
    <label class="w3-label w3-text-teal">User Name</label>
  </div>
    <div class="w3-group">      
    <input class="w3-input " name="password" placeholder="*************" type="Password" style="width:90%" required>
    <label class="w3-label w3-text-teal">Password</label>
  </div>
  <div class="w3-group">
  <button class="w3-btn w3-teal w3-section" name="submit">Login</button>
  
  
  </div>
  <span><?php echo $error; ?></span>
</form>
</div>

</div>
</body>
</html>