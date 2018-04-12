<?php
$con=new mysqli('127.0.0.1', 'root', '', 'foodsurgeon');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

 ?>
