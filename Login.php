<?php
$con=new mysqli('127.0.0.1', 'root', '', 'FoodSurgeon');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$mail=$_POST['username'];
$password=$_POST['password'];
$res=mysqli_query($con,"SELECT Mail , Password FROM signup WHERE Mail='$mail' and Password='$password'");
$row=mysqli_fetch_assoc($res);
if($row['Mail']==$mail && $row['Password']==$password)
{

  header("Location:logged.php");

}
else
  {

    header("Location:failed.php");
  }

?>
