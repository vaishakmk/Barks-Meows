<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Userlist</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" href = "css/style.css">

    <style>

        tr , th , td  {
    border: 2px solid white;
    padding: 5;
    text-align: center;
    color:bisque;
    border-color:white;
    
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
                height: 1000px;
                position: relative;
                background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/img3.png);
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
        }

</style>
</head>
<body>

<section class = "userlist-main">
      <nav>
        <a class="navbar-brand" >
          <img src = "images/imglogo.jpeg" width = "90" height = "90" /> B&M
        </a>

        <ul class= "contacts-menu">
          <li><a href="index.php" >Home</a><li>
          <li><a href="about.php" >About</a><li>
          <li><a href="services.php">Services</a><li>
          <li><a href="news.php">News</a><li>
          <li><a href="contacts.php">Contacts</a><li>
          <li><a href="user.php">Users</a><li>
        </ul>
      </nav>
<h1>Search Results</h1>

<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = mysqli_connect($server,$username,$password,$dbname);

extract( $_POST );

    if(isset($_POST['submit'])){
        
        $search = mysqli_real_escape_string($conn,$_POST['search']);

        $result = mysqli_query($conn, "SELECT * FROM posts WHERE first_name LIKE '%{$search}%' or last_name LIKE '%{$search}%' 
        or email LIKE '%{$search}%' or home_num LIKE '{%$search%}' or mob_num LIKE '{%$search%}'");
        $count = 0;

        echo '<table border="2" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td><b> <font face="Arial">ID</font><b> </td> 
          <td><b> <font face="Arial">First Name</font><b> </td> 
          <td><b> <font face="Arial">Last Name</font><b> </td> 
          <td><b> <font face="Arial">Email</font><b> </td> 
          <td><b> <font face="Arial">Address</font><b> </td> 
          <td><b> <font face="Arial">Home Ph.</font><b> </td>
          <td><b> <font face="Arial">Mob. Ph.</font><b> </td>
      </tr>';

        while ($row = $result->fetch_assoc()) {
            $count =$count+1;
            $field0name = $row["id"];
            $field1name = $row["first_name"];
            $field2name = $row["last_name"];
            $field3name = $row["email"];
            $field4name = $row["address"];
            $field5name = $row["home_num"]; 
            $field6name = $row["mob_num"];
    
            echo '<tr> 
                      <td><b>'.$field0name.'<b></td>
                      <td>'.$field1name.'</td> 
                      <td>'.$field2name.'</td> 
                      <td>'.$field3name.'</td> 
                      <td>'.$field4name.'</td> 
                      <td>'.$field5name.'</td> 
                      <td>'.$field6name.'</td>
                  </tr>';
        }
        $result->free();
        if ($count==0){
            echo "<b style='color:bisque;margin-left:50px'>No Results Found</b><br><br>";
        }
        else{
            echo "<b style='color:bisque;margin-left:50px'>$count Results Found</b><br><br>";
        }

        
        /*while ($row = mysqli_fetch_array($result)){
            $count = $count+1;
            echo "$count-->      ";
            echo $row['first_name'] . "    " . $row['last_name']."    ". $row['address'] . "    " . $row['email']."    ". $row['home_num'] . "   " . $row['home_num']."<br>";
            echo "<br>";
            }*/
        

    }
        mysqli_close($con);

     ?>



</section>

</body>
</html>


