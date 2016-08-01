 <?php
  include'config.php';
  $con1=$conn;
//  $conn = mysqli_connect('localhost', 'root', '','truckbhara.com');
  $query1 = mysqli_query($con1,"select * from categories ");
  ?>