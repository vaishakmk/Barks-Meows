<?php
session_start();
include("db.php");


// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}

if(isset($_POST['savert'])){

    
	$name=$_POST['name'];
	$rating=$_POST['rating'];
	$rv=$_POST['rv'];
	$pid=$_POST['pid'];

    $ins="INSERT INTO rating(name, rating,review,pid)VALUES('$name','$rating','$rv','$pid')";

	$result = mysqli_query($con, $ins);
if ( false===$result ) {
  printf("error: %s\n", mysqli_error($con));
}
else{
?>
	<script >
		alert("Your review under modaration");
		window.location='product.php?id=<?php echo $pid ?>';
	</script>

	<?php
}

}
?>
