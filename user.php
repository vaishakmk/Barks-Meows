<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title> Login/Sign Up </title>
      
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" href = "css/style.css">
<style>


.custom-select{
  float: right;
}
input[type=text], select, textarea {
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  background:rgba(250,250,250,1);

}

label {
  padding: 12px 12px 12px ;
  display: inline-block;
  color:bisque;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {

    margin-left:30px;
    float:left;
    width : 45%;
  border-radius: 5px;
  background-color: #f2f2f2;background:rgba(211,211,211,0.25);
  padding: 10px;
}

.col-25 {
  float: left;
  width: 25%;
  font-size : 20px;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75,.btn, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


.btn.peach-gradient {
    transition: 0.5s ease;
    color: white;
    }

    .btn{
        margin-top:10px;
        float:right;
        height:40px;
        width : 150px;
        margin-right: 30px;
    }

    .btn-rounded{
        border-radius:12px;
        
    }
    .peach-gradient {
    background: linear-gradient(40deg, #ffd86f, #fc6262) !important;
}



        
    
        .contacts-main{
                width: 100%;
                height: 1000px;
                position: relative;
                background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/img11.jpeg);
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
                
        }

       .contacts-menu a{
               font-weight:900px;
                color:bisque;
              }

      
        .navbar-brand{
                color:bisque;
                display:flex;
                font-weight:900px;
                font-size:25px;


        }


</style>
</head>
<body>

<?php
// define variables and set to empty values

$firstnameErr = $lastnameErr = $emailErr = $addressErr = $homeErr = $mobileErr = "";
$firstname = $lastname = $email = $address = $home = $mobile = "";

extract( $_POST );
$Submit = $_POST["SUBMIT"];
// check if user has left USERNAME or PASSWORD field blank
if ( isset( $Submit ) ) {

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["firstname"])) {
  
    $firstnameErr = "*First Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
      $firstnameErr = "*Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["lastname"])) {
    $lastnameErr = "*Last Name is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
      $lastnameErr = "*Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "*Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*Invalid email format";
    }
  }
    
  if (empty($_POST["address"])) {
    $addressErr = "*Address is required";
  } else {
    $address = test_input($_POST["address"]);
    if (!preg_match("/[A-Za-z0-9\-\\,.]+/", $address)){
    $addressErr = "*Address is wrong";
    }
  }

  if (empty($_POST["home"])) {
    $homeErr = "*Home Phone Number is required";
  } else {
      $home = test_input($_POST["home"]);
      if (!validate_phone_number($home)){
          $homeErr = "*Wrong Format";
      }

    
  }

  if (empty($_POST["mobile"])) {
    $mobileErr = "*Mobile Number is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
    if (!validate_phone_number($mobile)){
        $mobileErr = "*Wrong Format";
    }
  }

}


if (($firstnameErr == "") and($lastnameErr == "")and($emailErr =="") and ($addressErr == "") and ($homeErr == "") and ($mobileErr =="")){
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";
$response = "";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


 $sql = "INSERT INTO posts (first_name, last_name, email, address, home_num, mob_num) 
  VALUES ('$firstname', '$lastname', '$email','$address', '$home','$mobile')";
  

if ($conn->query($sql) === TRUE) {
  $response = "User Registration Successfully Completed";
} else {
  if (($firstnameErr == "") and($lastnameErr == "")and($emailErr =="") and ($addressErr == "") and ($homeErr == "") and ($mobileErr =="")){
    $response = "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
}

}

function validate_phone_number($phone)
{
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);

     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
     } else {
       return true;
     }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>


<section class = "contacts-main">
      <nav>
        <a class="navbar-brand" href="index.php" style="margin-right: 30%;">
          <img src = "images/imglogo.jpeg" width = "90" height = "90"/> B&M
        </a>

        <ul class= "contacts-menu">
          <li><a href="index.php" >Home</a><li>
          <li><a href="about.php" >About</a><li>
          <li><a href="services.php">Services</a><li>
          <li><a href="news.php">News</a><li>
          <li><a href="contacts.php" >Contacts</a><li>
          <li><a href="user.php" class = "active">Register</a><li>
          <li><a href="commonpage.php">Clients</a><li>
        </ul>
      </nav>


<h1 style='color:bisque; margin-left:50px; font-size:40px;'>Registration Form</h1>

<p style="margin-left:50px"> Please enter your details below. </p>
<p style="margin-left:50px"><span class="error">* required field</span></p>

<div class="container">
  <div class="reg-box">
  <h4 Style="color:white"><?php echo  $response ?></h4>
    <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="row">
          <div class="col-25">
              <label for="fname">First Name</label>
              <span class="error" style='color:white'>*</span>
          </div>
          <div class="col-75">
              <input type="text" id="fname" name="firstname" placeholder="Your name.."class ="form-control" required>
              <span class="error" style='color:red'><?php echo $firstnameErr;?></span>
          </div>
      </div>
      <div class="row">
          <div class="col-25">
            <label for="lname">Last Name</label>
            <span class="error"style='color:white'>*</span>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="lastname" placeholder="Your last name.."class ="form-control" required>
            <span class="error" style='color:red'><?php echo $lastnameErr;?></span>
          </div>
      </div>
  <div class="row">
    <div class="col-25">
      <label for="email">E-Mail</label>
      <span class="error"style='color:white'>*</span>
    </div>
    <div class="col-75">
      <input type="text" id="email" name="email" placeholder="Enter your email.."class ="form-control" required>
      <span class="error" style='color:red'>  <?php echo $emailErr;?></span>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="address">Address</label>
      <span class="error"style='color:white'>*</span>
    </div>
    <div class="col-75">
      <textarea id="address" name="address" placeholder="Enter your address.." style="height:100px"class ="form-control" required></textarea>
      <span class="error" style='color:red'><?php echo $addressErr;?></span>
    </div>
  </div>
    <br>
    <b style="font-size:20px;color:bisque">PHONE</b>
    <div class="row">
    <div class="col-25">
      <label for="home">Home</label>
      <span class="error"style='color:white'>*</span>
    </div>
    <div class="col-75">
        <input type="text" id="home" name="home" placeholder="" style="width:200px "class ="form-control" required>
        <span class="error" style='color:red'><?php echo $homeErr;?></span>
    </div>
</div>

    <div class="row">
    <div class="col-25">
      <label for="mobile">Mobile</label>
      <span class="error"style='color:white'>*</span>
    </div>
    <div class="col-75">
        <input type="text" id="mobile" name="mobile" placeholder="" style="width:200px "class ="form-control" required>
        <span class="error" style='color:red'><?php echo $mobileErr;?></span>
    </div>
  </div> 
  <br>
  <button class="btn peach-gradient btn-rounded" name="SUBMIT" ><b>SUBMIT</b></button>
  </form>

   
</div>
</div>

<div class="custom-search" style="width:700px;float:right; margin-right:30px">

<form action="searchresult.php" method="POST">
  <label style="color:Bisque;font-size:20px">Search</label>
  <input type = "text" name= "search" placeholder="Search using name, email or phone numbers" class ="form-control" required>
  <button class="btn peach-gradient btn-rounded" type="submit" name="submit" ><b>Search Database</b></button>
</form>

</div>

</section>



</body>
</html>