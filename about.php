<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>About Us</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" href = "css/style.css">

    <style>

        .about-main{
                width: 100%;
                height: 2200px;
                position: relative;
                background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/background2.jpg);
                background-attachment: fixed;
                background-size: cover;
                background-position: center;        
        }
        .about-menu a{
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


.container {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container img {vertical-align: middle;margin: 50px;}

.container .content {
  position: absolute;
  bottom: 50px;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 97%;
  left: 60px;
  padding: 20px;
}
</style>




  </head>
  <body>

    <section class = "about-main">
      <nav>
        <a class="navbar-brand" href="index.php" style="margin-right: 30%;">
          <img src = "images/imglogo.jpeg" width = "90" height = "90" /> B&M
        </a>

        <ul class= "about-menu">
          <li><a href="index.php"  >Home</a><li>
          <li><a href="about.php" class = "active">About</a><li>
          <li><a href="services.php">Services</a><li>
          <li><a href="news.php">News</a><li>
          <li><a href="contacts.php">Contacts</a><li>
          <li><a href="user.php">Register</a><li>
          <li><a href="commonpage.php">Clients</a><li>
        </ul>
      </nav>

      <a href="modal.php" class="material-icons floating-btn">LOGIN</a>
    
<h2 style='color:bisque'> Enjoy Award-Winning Locally Roasted Coffee in the Company of our Furry Friends! </h2>


<div class="container">
  <img src="images/img1.jpeg" alt="Notebook" style="width:100%;">
  <div class="content">
    
    <p> If you are not sure that you want a pet or not, we can help you decide.
    </p>
  </div>
</div>

<div class="container">
  <img src="images/child&dog.jpeg" alt="Notebook" style="width:100%;">
  <div class="content">
    
    <p>All our pets here are well-trained and totally friendly to anyone including children and other pets too.</p>
  </div>
</div>

<div class="container">
  <img src="images/img13.jpeg" alt="Notebook" style="width:100%;">
  <div class="content">
    
    <p> Pets, especially dogs and cats, can reduce stress, anxiety, and depression, ease loneliness, encourage exercise and playfulness, 
      and even improve your cardiovascular health. Caring for an animal can help children grow up more secure and active.</p>
  </div>
</div>
</section>
    </body>
    </html>