<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Home - Barks&Meows</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" href = "css/style.css">

    <style>
      a{
        color:bisque;
        }

        nav ul li a{
          color:bisque;
        }

        nav ul li a:hover{
    background-color: rgba(219, 96, 116, 0.726);
    color: bisque;
    box-shadow: 5px 10px 15px rgba(236, 68, 68, 0.616);
}

        .active{
    background-color: rgba(219, 96, 116, 0.826);
    color: bisque;
    box-shadow: 5px 10px 15px rgba(236, 68, 68, 0.616);
}


    .floating-btn{
      width : 80px;
      height : 80px;
      background: bisque;
      display: flex;
      align-items: center;
      justify-content : center;
      text-decoration: none;
      border-radius : 50%;
      color: black;
      font-size : 20px; 
      box-shadow: 2px 2px 5px rgba(0,0,0,0.25);
      position:fixed;
      right : 20px;
      bottom:40%;
      transition : background 0.25s;
    }

    .floating-btn:hover{
      color: black;
    }


    .floating-btn:active{
      background: BROWN ;
  
    }


    </style>

  </head>
  <body>
    <section class = "main">
      <nav>
        <a class="navbar-brand" href="#">
          <img src = "images/imglogo.jpeg" width = "90" height = "90" /> B&M
        </a>

        

        <ul class= "menu">
          <li><a href="#" class = "active">Home</a><li>
          <li><a href="about.php">About</a><li>
          <li><a href="services.php">Services</a><li>
          <li><a href="news.php">News</a><li>
          <li><a href="contacts.php">Contacts</a><li>
          <li><a href="user.php">Users</a><li>
        </ul>
      </nav>

      <a href="modal.php" class="material-icons floating-btn">LOGIN</a>
      <div class="main-heading">
        <h1>Barks&Meows</h>
        <p>Paws and relax at the coolest cafe in town. Right Meowww!!!</p>
        <a class= "main-btn" href="services.php">Reserve Now</a> 
</section>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


  </body>
</html>