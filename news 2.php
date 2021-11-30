<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>News</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" href = "css/style.css">

    <style>
@import url('https://fonts.googleapis.com/css2?family=Manrope&display=swap');

.news-main{
                width: 100%;
                height: 1100px;
                position: relative;
                background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/background2.jpg);
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
                color:bisque;
                
        }

        .news-menu a{
               font-weight:900px;
                color:bisque;
        }

        .navbar-brand{
                color:bisque;
        }



        h1{
            margin-top:20px;
        }

        h3{
            color:black;
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


.news-card {
    border-radius: 8px
    margin-left : 50px;
}

.news-feed-image {
    border-radius: 8px;
    width: 100%
}

.date {
    font-size: 12px
}

.username {
    color: bisque
}

.share {
    color: bisque
}

        </style>

  </head>
  <body>
    <section class = "news-main">
      <nav>
        <a class="navbar-brand" href="index.php" style="margin-right: 30%;">
          <img src = "images/imglogo.jpeg" width = "90" height = "90" /> B&M
        </a>

        <ul class= "news-menu">
          <li><a href="index.php" >Home</a><li>
          <li><a href="about.php" >About</a><li>
          <li><a href="services.php">Services</a><li>
          <li><a href="news.php" class = "active">News</a><li>
          <li><a href="contacts.php" >Contacts</a><li>
          <li><a href="user.php">Register</a><li>
          <li><a href="commonpage.php">Clients</a><li>

        </ul>
      </nav>


      <a href="modal.php" class="material-icons floating-btn">LOGIN</a>
      
      <h1 style="text-align:center;font-size:70px"> HeadLines </h1>

    <div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="d-flex flex-row"></div>
            <div class="row news-card p-3 bg-black">
                <div class="col-md-4">
                    <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="images/news1.jpeg"></div>
                </div>
                <div class="col-md-8">
                    <div class="news-feed-text">
                        <a href="https://ladyfreethinker.org/i-thought-she-was-beautiful-luna-the-two-faced-cat-adopted-by-loving-family/"></a>
                        <h5 style="text-decoration:underline;">‘I THOUGHT SHE WAS BEAUTIFUL’: LUNA THE TWO-FACED CAT ADOPTED BY LOVING FAMILY</h5><span>Luna, a “two-faced” cat whose tiny face is half black and half orange, recently found a forever home and now gets all the attention everywhere she goes because of her unique appearance.<br></span>
                        <a style="color:brown;text-decoration:underline;float:right" href="https://ladyfreethinker.org/i-thought-she-was-beautiful-luna-the-two-faced-cat-adopted-by-loving-family/">Read More</a>
                        <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                            <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.imgur.com/uSlStch.jpg" width="50" height="50">
                                <div class="d-flex flex-column ml-2">
                                    <h6 class="username">Alexendor patriot</h6><span class="date">Jan 20,2020</span>
                                </div>
                            </div><i class="fa fa-share share"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="d-flex flex-row"></div>
            <div class="row news-card p-3 bg-black">
                <div class="col-md-4">
                    <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="images/news2.jpeg"></div>
                </div>
                <div class="col-md-8">
                    <div class="news-feed-text">
                        <h5 style="text-decoration:underline;">PEOPLE’S EMOTIONS ARE ‘CONTAGIOUS’ TO DOGS, NEW STUDIES SUGGEST</h5><span>A growing number of studies are showing that dogs can read their owners’ emotions and pick them up as well — meaning it’s all the more important for pet parents to stay calm and create safe and loving spaces in their homes for their companion animals.<br></span>
                        <a style="color:brown;text-decoration:underline;float:right" href="https://ladyfreethinker.org/peoples-emotions-are-contagious-to-dogs-new-studies-suggests/">Read More</a>
                        <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                            <div class="d-flex creator-profile"><img class="rounded-circle" src="https://pbs.twimg.com/media/D8dDZukXUAAXLdY.jpg" width="50" height="50">
                                <div class="d-flex flex-column ml-2">
                                    <h6 class="username">Kimi Liu</h6><span class="date">Mar 29,2021</span>
                                </div>
                            </div><i class="fa fa-share share"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="d-flex flex-row"></div>
            <div class="row news-card p-3 bg-black">
                <div class="col-md-4">
                    <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="images/news3.jpeg"></div>
                </div>
                <div class="col-md-8">
                    <div class="news-feed-text">
                        <h5 style="text-decoration:underline;">WAIT, DON’T TOSS THAT PUMPKIN! DONATE IT TO ANIMAL SANCTUARIES IN NEED THIS WINTER</h5><span>Halloween and Thanksgiving often mean jack o’lanterns and pumpkin decorations, but don’t throw them away come December! Pumpkins are highly desired donations by animal sanctuaries nationwide.<br></span>
                        <a style="color:brown;text-decoration:underline;float:right" href="https://ladyfreethinker.org/wait-dont-toss-that-pumpkin-animal-sanctuaries-are-seeking-donations-for-nimal-residents/">Read More</a>
                        <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                            <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.dailymail.co.uk/i/pix/2013/08/29/article-2405475-1B8389EE000005DC-718_634x550.jpg" width="50" height="50">
                                <div class="d-flex flex-column ml-2">
                                    <h6 class="username">John Henkins</h6><span class="date">Oct 29,2021</span>
                                </div>
                            </div><i class="fa fa-share share"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


      </section>


    </body>
</html>