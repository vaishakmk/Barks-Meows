<?php
include("db.php");

$conn = mysqli_connect($server,$username,$password,$dbname);
$search = mysqli_real_escape_string($conn,$_POST['search']);
$result = mysqli_query($conn, "SELECT * FROM register");
$rows = array();
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
}

print_r(json_encode($rows));
mysqli_close($con);

?>