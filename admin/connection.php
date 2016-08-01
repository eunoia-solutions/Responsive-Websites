 <?php
  $connection = mysqli_connect('localhost', 'root', '','truckbhara.com');
  $query = mysqli_query($connection,"select * from categories ");
  ?>