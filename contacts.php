<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Contacts</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" href = "css/style.css">

    <style>
        .contact-container{
            margin-left: 90px;
            color:bisque;
        }
        
        .contacts-main h1{
            margin-top:50px;
            margin-left:50px;
            font-weight: 900px;
            color:bisque;
            text-decoration:underline;
        }

        .contacts-main{
                width: 100%;
                height: 700px;
                position: relative;
                background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/img2.jpeg);
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

        nav ul li a:hover{
    background-color: rgb(178, 34, 34, 0.793);
    color: bisque;
    box-shadow: 5px 10px 15px rgba(134, 49, 0, 0.398);
        }
.active{
  background-color: rgb(178, 34, 34, 0.616);
    color: bisque;
    box-shadow: 5px 10px 15px rgba(134, 49, 0, 0.398);
}


.floating-btn{
      width : 80px;
      height : 80px;
      background: rgb(178, 34, 34);
      display: flex;
      align-items: center;
      justify-content : center;
      text-decoration: none;
      border-radius : 50%;
      color: bisque;
      font-size : 20px; 
      box-shadow: 2px 2px 5px rgba(0,0,0,0.25);
      position:fixed;
      right : 20px;
      bottom:40%;
      transition : background 0.25s;
    }

    .floating-btn:hover{
      color: bisque;
    }


    .floating-btn:active{
      background: BROWN ;
      text-color: bisque;
    }



        </style>

  </head>
  <body>
    <section class = "contacts-main">
      <nav>
        <a class="navbar-brand" href="index.php" style="margin-right: 30%;">
          <img src = "images/imglogo.jpeg" width = "90" height = "90" /> B&M
        </a>

        <ul class= "contacts-menu">
          <li><a href="index.php" >Home</a><li>
          <li><a href="about.php" >About</a><li>
          <li><a href="services.php">Services</a><li>
          <li><a href="news.php">News</a><li>
          <li><a href="contacts.php" class = "active">Contacts</a><li>
          <li><a href="user.php">Users</a><li>
          <li><a href="commonpage.php">Clients</a><li>
        </ul>
      </nav>


      <a href="modal.php" class="material-icons floating-btn">LOGIN</a>
    <h1> CONTACT US </h1>
<div class="contact-container">
    <?php

        function phpReadFile($filename){
            $myfile = fopen($filename,"r") or die("Unable to open file !");
            $filecontent = fread($myfile,filesize($filename));
            fclose($myfile);
            return $filecontent;
        }

        echo nl2br(phpReadFile("contacts.txt"));

    ?>

</div>



      </section>
    </body>
</html>