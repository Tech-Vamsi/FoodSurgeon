
<?php
$name=$_POST['name'];
$pass=$_POST['password'];
$uname=$_POST['email'];

$con=new mysqli('127.0.0.1', 'root', '', 'FoodSurgeon');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries
//mysqli_query($con,"SELECT * FROM Persons");

$q=mysqli_query($con,"INSERT INTO signup (Name,Mail, Password) VALUES ('$name','$uname', '$pass')");

header("Location:index.html");
echo "<script>alert('Registered Successfully')</script>";
?>
