<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Services</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" href = "css/style.css">



    <style>

.services-main{
                width: 100%;
                height: 1200px;
                position: relative;
                background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/background2.jpg);
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
                
        }
        .services-menu a{
               font-weight:900px;
                color:bisque;
        }
      
        .navbar-brand{
                color:bisque;
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
    <section class = "services-main">
      <nav>
        <a class="navbar-brand" href="#">
          <img src = "images/imglogo.jpeg" width = "90" height = "90" /> B&M
        </a>

        <ul class= "services-menu">
          <li><a href="index.php" >Home</a><li>
          <li><a href="about.php" >About</a><li>
          <li><a href="services.php" class = "active">Services</a><li>
          <li><a href="news.php">News</a><li>
          <li><a href="contacts.php">Contacts</a><li>
          <li><a href="user.php">Users</a><li>
        </ul>
      </nav>
    

      <a href="modal.php" class="material-icons floating-btn">LOGIN</a>
    <h2 style='color:bisque'>Products & Services</h2>

    <div class="xop-section">
  <ul class="xop-grid">
    <li>
      <div class="xop-box xop-img-1">
        <a href="password.html">
          <h3> Dine with pets</h3>
          <p>Date-night.... </p>
        </a>
      </div>
    </li>
    <li>
      <div class="xop-box xop-img-2">
        <a href="modal.php">
          <h3> See the Vet </h3>
          <p> We have the most recommended doctors in town </p>
       
        </a>
      </div>
    </li>
    <li>
      <div class="xop-box xop-img-3">
        <a href="modal.php">
          <h3> Adopt Me</h3>
          <p> I will fill your lives with happiness </p>
        </a>
      </div>
    </li>
    <li>
      <div class="xop-box xop-img-4">
        <a href="#">
          <h3> Rescue and Rehab </h3>
          <p> Giving a life they deserve </p>
        </a>
      </div>
    </li>



</section>


    </body>
</html>