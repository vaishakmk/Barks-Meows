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
        .contact-container{
            margin-left: 180px;
            color: bisque;
        }
        
        .userlist-main h1{
            margin-top:70px;
            margin-left:150px;
            font-weight: 800;
            color: bisque;
            text-decoration:underline;
          
        }
        .userlist-main{
                width: 100%;
                height: 700px;
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
          <li><a href="modal.php">Login</a><li>
        </ul>
      </nav>

    <h1> Our happy customers </h1>
<div class="contact-container">
    <?php

        $filename="password.txt";
        phpReadFile($filename);
        function phpReadFile($filename){
            $myfile = fopen($filename,"r") or die("Unable to open file !");
            //$filecontent = fread($myfile,filesize($filename));
                $count = 0;
            while ( !feof( $myfile ) ) {
       
                $count = $count+1;
                // read line from file
                $line = fgets( $myfile, 255 );
                
        
                // remove newline character from end of line
                $line = chop( $line );
               
                
        
                // split username and password
                $field = explode( ",", $line, 2 );
               
                echo nl2br(strtoupper ("-----   $field[0]\r\n"));
                //echo "$count";
                //echo "<br>";
                
                
            }
            fclose($myfile);
            return ;
        }

    ?>

</div>



      </section>
    </body>
</html>