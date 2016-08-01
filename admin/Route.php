 <?php
  include'config.php';
  $con2=$conn;
  //$connection2 = mysqli_connect('localhost', 'root', '','truckbhara.com');
  $query2 = mysqli_query($con2,"select * from routes ");
  ?>