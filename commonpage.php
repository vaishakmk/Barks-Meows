<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Clients</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" href = "css/style.css">

    <style>

        tr , th , td  {
    border: 2px solid white;
    padding: 5;
    text-align: center;
    color:bisque;
    border-color:white;
    letter-spacing: 0.01em;
    
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius:5px;
  outline-style: groove; 
  outline-color:bisque;
}

#wrapper{
    margin-left:auto;
    margin-right:auto;
}

table.tb{
  margin-left: auto; 
  margin-right: auto;
  table-layout:fixed;
}
.find{
  text-align:center;
}
.butt{
  margin-left: auto; 
  margin-right: auto;
  border-radius:10px;
  padding: 10px; 
  border: 2px solid bisque; 
  width:150px; 
  background:black;
  text-align:center;
  color:bisque;
}

.contact-container{
            margin-left: 180px;
            color: bisque;
        }
        
        .userlist-main h1{
            margin-top:70px;
            margin-left:50px;
            font-weight: 800;
            color: bisque;
            text-decoration:underline;
        }
        .userlist-main{
                width: 100%;
                position: relative;
                background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/img3.png);
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                top: 0; 
                left: 0; 
                /* Preserve aspet ratio */
                min-width: 100%;
                min-height: 736px;
              }
                
      

       .contacts-menu a{
              font-weight:900px;
              color:bisque;
        }
      
        .navbar-brand{
              color:bisque;
        }

</style>
</head>
<body>

<section class = "userlist-main">
      <nav>
        <a class="navbar-brand" href="index.php" style="margin-right: 30%;">
          <img src = "images/imglogo.jpeg"  width = "90" height = "90" /> B&M
        </a>

        <ul class= "contacts-menu">
          <li><a href="index.php" >Home</a><li>
          <li><a href="about.php" >About</a><li>
          <li><a href="services.php">Services</a><li>
          <li><a href="news.php">News</a><li>
          <li><a href="contacts.php">Contacts</a><li>
          <li><a href="user.php">Register</a><li>
          <li><a href="commonpage.php" class="active">Clients</a><li>
        </ul>
      </nav>

      <p style="color:bisque;text-align:center;font-size:60px;text-decoration:underline;">Client List<p>
        <br>
<div id="wrapper">
<div id="page1">
<img src = "images/img12.jpeg" alt="B&M" class = "center" width="250px" height="150px">

<!--<p style="display: block; margin-left: auto; margin-right: auto; border-radius:10px;float:center ;padding: 10px; border: 2px solid bisque; width:150px; background:black;text-align:center;"><b>B&M Users<b></p>-->
<form method="post" class="find">
            <input type="submit" name="b&m" class="butt" value="B&M Clients">
      </form> <br>          
<?php

if(isset($_POST['b&m'])){
$server = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = mysqli_connect($server,$username,$password,$dbname);

        $result = mysqli_query($conn, "SELECT * FROM posts");
        $count = 0;

        echo '<table class="tb" border="2" cellspacing="5" cellpadding="5"> 
      <tr> 
        <td width="35px"  bgcolor=#78281F><b> <font face="Serif" size="4px" >ID</font><b> </td> 
        <td width="150px" bgcolor=#78281F><b> <font face="Serif" size="4px" >First Name</font><b> </td> 
        <td width="250px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Last Name</font><b> </td> 
        <td width="275px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Email</font><b> </td> 
        <td width="350px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Address</font><b> </td> 
        <td width="100px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Home Ph.</font><b> </td>
        <td width="100px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Mob. Ph.</font><b> </td>
      </tr>';

        while ($row = $result->fetch_assoc()) {
            $count =$count+1;
            $field0name = $row["ID"];
            $field1name = $row["First_Name"];
            $field2name = $row["Last_Name"];
            $field3name = $row["Email"];
            $field4name = $row["Address"];
            $field5name = $row["Home_Num"]; 
            $field6name = $row["Mob_Num"];
    
            echo '<tr> 
                      <td><b>'.$field0name.'<b></td>
                      <td><font face="Arial">'.$field1name.'</font></td> 
                      <td><font face="Arial">'.$field2name.'</font></td> 
                      <td><font face="Arial">'.$field3name.'</font></td> 
                      <td><font face="Arial">'.$field4name.'</font></td> 
                      <td><font face="Arial">'.$field5name.'</font></td> 
                      <td><font face="Arial">'.$field6name.'</font></td>
                  </tr>';
        }
        echo '<br></table><br>
        <br>
        <br>';
        $result->free();
        //mysqli_close($con); 
      }
     ?>
</div>


<div id="page2" >
            <img src = "images/ehost.jpeg" alt="Ehost" class = "center" width="200px" height="150px"> 
          
        <!--<p style="display: block; margin-left: auto; margin-right: auto; border-radius:10px;padding: 10px; border: 2px solid bisque; width:150px; background:black;text-align:center;"><b>Ehost Users<b></p> -->
          <form method="post" class="find">
            <input type="submit" name="ehost" class="butt" value="EHOST Clients">
      </form>
            
<?php
if(isset($_POST['ehost'])){
$ch = curl_init();
$url = 'https://ehost.tech/_searchuser.php';
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$resp = curl_exec($ch);
if($err = curl_error($ch)){
    echo $err;
}
else{
    $decoded = json_decode($resp,true);
    echo '<table class="tb" border="2" cellspacing="5" cellpadding="5"> 
    <tr> 
    <td width="35px"  bgcolor=#78281F><b> <font face="Serif" size="4px" >ID</font><b> </td> 
    <td width="150px" bgcolor=#78281F><b> <font face="Serif" size="4px" >First Name</font><b> </td> 
    <td width="250px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Last Name</font><b> </td> 
    <td width="275px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Email</font><b> </td> 
    <td width="350px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Address</font><b> </td> 
    <td width="100px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Home Ph.</font><b> </td>
    <td width="100px" bgcolor=#78281F><b> <font face="Serif" size="4px" >Mob. Ph.</font><b> </td>
  </tr>';

    foreach($decoded as $key=>$row){
        $field0name = $row["userid"];
        $field1name = $row["fname"];
        $field2name = $row["lname"];
        $field3name = $row["email"];
        $field4name = $row["address"];
        $field5name = $row["homephone"]; 
        $field6name = $row["cellphone"];

        echo '<tr> 
                  <td><b>'.$field0name.'<b></td>
                  <td><font face="Arial">'.$field1name.'</font></td> 
                  <td><font face="Arial">'.$field2name.'</font></td> 
                  <td><font face="Arial">'.$field3name.'</font></td> 
                  <td><font face="Arial">'.$field4name.'</font></td> 
                  <td><font face="Arial">'.$field5name.'</font></td> 
                  <td><font face="Arial">'.$field6name.'</font></td>
              </tr>';
    }
    echo '<br></table><br><br>';
}
curl_close($ch);
}
?>
<br>
<br>
</div>
      
</div>

</section>

</body>
</html>
