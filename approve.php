<?php
session_start();
if(!isset($_SESSION['uid']))
{
  header("location:index.php");
}
include("db.php");
$con=mysqli_connect($server,$username,$password,$dbname);
$id=$_GET['id'];

$upd="UPDATE rating SET isapproved='1' WHERE id='$id'";
$con->query($upd);
echo "1";
header("location:admin.php");

?>