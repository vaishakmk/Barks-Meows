<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
    <title>Services</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link rel="stylesheet" href = "css/style.css">



    <style>

@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700;900&display=swap');

.services-main{
                width: 100%;
                height: 3200px;
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
          z-index: 3;
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


.lg-title,
.md-title,
.sm-title{
    font-family: 'Roboto', sans-serif;
    padding: 0.6rem 0;
    text-transform: capitalize;
}
.lg-title{
    font-size: 2.5rem;
    font-weight: 500;
    text-align: center;
    padding: 1.3rem 0;
    opacity: 0.9;
}
.md-title{
    font-size: 2rem;
    font-family: 'Roboto', sans-serif;
}
.sm-title{
    font-weight: 300;
    font-size: 1rem;
    text-transform: uppercase;
}
.text-light{
    font-size: 1rem;
    font-weight: 600;
    line-height: 1.5;
    opacity: 0.5;
    margin: 0.4rem 0;
}


/* product section */
.products{
    background: var(#f8f9fa);
    padding: 3.2rem 0;
}
.products .text-light{
    text-align: center;
    width: 70%;
    margin: 0.9rem auto;
}
.product{
    border-radius : 15px;
    margin: 1rem;
    position: relative;
    background : #78281F;
}
.product-content{
    background: var(#ededed);
    padding: 3rem 0.5rem 2rem 0.5rem;
    cursor: pointer;
}
.product-img{
    background: var(rgba(255, 255, 255, 0.5));
    box-shadow: 0 0 20px 10px var(rgba(255, 255, 255, 0.5));
    width: 200px;
    height: 200px;
    margin: 0 auto;
    transition: background 0.5s ease;
}
.product-btns{
    display: flex;
    justify-content: center;
    margin-top: 1.4rem;
    opacity: 0;
    transition: opacity 0.6s ease;
}
.btn-cart, .btn-buy{
    background: transparent;
    border: 1px solid bisque;
    border-radius : 20px;
    padding: 0.8rem 0;
    width: 125px;
    font-family: inherit;
    text-transform: uppercase;
    cursor: pointer;
    
    transition: all 0.6s ease;
}
.btn-cart{
    background: #78281F;
    color: bisque;
}
.btn-cart:hover{
    background: var(#40c9a2);
}
.btn-buy{
  background: bisque;
  color: black;
}
.btn-buy:hover{
    background: var(#40c9a2);
    color: black;
}
.product-info{
    background: bisque;
    padding: 2rem;
    border-radius : 15px;
}
.product-info-top{
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.rating span{
    color: black;
}
.product-name{
    color: black;
    display: block;
    text-decoration: none;
    font-size: 1rem;
    text-transform: uppercase;
    font-weight: bold;
}
.product-price{
    padding-top: 0.6rem;
    padding-right: 0.6rem;
    display: inline-block;
    color: black;
}
.product-price:first-of-type{
    text-decoration: line-through;
    color: red;
}
.product-img img{
    transition: transform 0.6s ease;
}
.product:hover .product-img img{
    transform: scale(1.1);
}
.product:hover .product-img{
    background: var(#40c9a2);
}
.product:hover .product-btns{
    opacity: 1;
}
.off-info .sm-title{
    background: bisque;
    color: black;
    display: inline-block;
    padding: 0.5rem;
    position: absolute;
    top: 0;
    left: 0;
    writing-mode: vertical-lr;
    transform: rotate(180deg);
    z-index: 1;
    letter-spacing: 3px;
    cursor: pointer;
    font-weight:bold;
}

/* Media Queries */
@media screen and (min-width: 992px){
    .product-items{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
    .product-col-r-bottom{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }
}
@media screen and (min-width: 1200px){
    .product-items{
        grid-template-columns: repeat(3, 1fr);
    }
    .product{
        margin-right: 1rem;
        margin-left: 1rem;
    }
    .products .text-light{
        width: 50%;
    }
}

@media screen and (min-width: 1336px){
    .product-items{
        grid-template-columns: repeat(4, 1fr);
    }
  }

        </style>



  </head>
  <body>
    <section class = "services-main">
      <nav>
        <a class="navbar-brand" href="index.php" style="margin-right: 30%;">
          <img src = "images/imglogo.jpeg" width = "90" height = "90" /> B&M
        </a>

        <ul class= "services-menu">
          <li><a href="index.php" >Home</a><li>
          <li><a href="about.php" >About</a><li>
          <li><a href="services.php" class = "active">Services</a><li>
          <li><a href="news.php">News</a><li>
          <li><a href="contacts.php">Contacts</a><li>
          <li><a href="user.php">Register</a><li>
          <li><a href="commonpage.php">Clients</a><li>
        </ul>
      </nav>
    

      <a href="modal.php" class="material-icons floating-btn">LOGIN</a>
    <h2 style='color:bisque;text-decoration:underline;'> Services </h2>

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
</ul>
</div>


<?php
$count = 1;
?>

    <h2 style='color:bisque;text-decoration:underline;'> Products </h2>

    <ul style='display:inline'>
    <li><a style="font-size:20px;float:left;color:bisque;margin-left:350px;text-decoration:underline;" href="recent5.php" >Recently Viewed Products</a></li>
    <li><a style="font-size:20px;float:right;color:bisque;margin-right:350px;text-decoration:underline;" href="mostvisited.php" >Most Viewed Products</a></li>

</ul>

    



    <div class = "products">
    <div class = "product-items">
      <!----1st product-------->
      
      <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product1/1.jpeg" alt="Royal Canin image" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
      <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "far fa-star"></i></span>
  </div>
  </div>
  <a href ="product1.php" class ="product-name" name="product1"> Royal Canin® Breed Health Nutrition™ Golden Retriever Adult Dog Food </a>
  <p class = "product-price"> $85.55</p>
  <p class = "product-price"> $81.55</p>
  </div>

  <div class = "off-info">
  <h2 class = "sm-title">25% off</h2>
</div>
</div>



    <!----2nd product-------->
    <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product2/1.jpeg" alt="Dog pads" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "far fa-star"></i></span>
  </div>
  </div>
  <a href ="product2.php" class ="product-name" >Top Paw® X-Large Adhesive Leakproof Dog Pads - 28" x 34"</a>
  <p class = "product-price"> $24.99</p>
  <p class = "product-price"> $25.99</p>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">5% off</h2>
    </div>
</div>


    <!----3rd product-------->
    <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product3/1.jpeg" alt="Automatic dog feeder" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product3.php" class ="product-name" > PetSafe® Eatwell™ 5 Meal Automatic Pet Feeder </a>
  <p class = "product-price"> $54.95</p>
  <p class = "product-price"> $41.55 </p>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">25% off</h2>

    </div>
</div>

    <!---- 4th product-------->
    <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product4/1.jpeg" alt="Dog Crate" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product4.php" class ="product-name" >Top Paw® Double Door Wire Dog Crate</a>
  <p class = "product-price"> $61.99</p>
  <p class = "product-price"> $46.99</p>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">25% off</h2>
    </div>
</div>
    <!---- 5th product-------->
    <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product5/1.jpeg" alt="Cat Food" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product5.php" class ="product-name" >Purina Pro Plan Savor Adult Cat Food</a>
  <p class = "product-price"> $1.01</p>
  <p class = "product-price"> $1.99</p>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">49% off</h2>
    </div>
</div>

    <!---- 6th product-------->
    <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product6/1.jpeg" alt="Organic catnip" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product6.php" class ="product-name" >Whisker City® Organic Catnip</a>
  <p class = "product-price"> $7.99</p>
  <p class = "product-price"> $5.99</p>
  <br>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">25% off</h2>
    </div>
</div>

 <!---- 7th product-------->
 <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product7/1.jpeg" alt="Cat Litter Disposal System" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product7.php" class ="product-name" >Litter Genie™ Plus Cat Litter Disposal System</a>
  <p class = "product-price"> $24.99</p>
  <p class = "product-price"> $21.99</p>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">12% off</h2>
    </div>
</div>

 <!-----8th product-------->
 <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product8/1.jpeg" alt="Flea + Tick Home Spray" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product8.php" class ="product-name" >Vet's Best® Flea + Tick Home Spray</a>
  <p class = "product-price"> $19.99</p>
  <p class = "product-price"> $10.49</p>
  <br>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">49% off</h2>
    </div>
</div>

 <!-----9th product-------->
 <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product9/1.jpeg" alt="Dog in Hoodie" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product9.php" class ="product-name" >Pet Life Comfort Hoodie</a>
  <p class = "product-price"> $12.99</p>
  <p class = "product-price"> $29.99</p>
  <br>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">56% off</h2>
    </div>
</div>

 <!----10th product-------->
 <div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product10/1.jpeg" alt="Dog Bed" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product10.php" class ="product-name" >Pendleton National Park Grand Canyon Mattress Dog Bed</a>
  <p class = "product-price"></p>
  <p class = "product-price"> $139.00</p>
  <br>
  <br>
  </div>

</div>

<!----11th product-------->
<div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product11/1.jpeg" alt="Royal Canin image" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product11.php" class ="product-name" > Royal Canin® Size Health Nutrition Small Puppy Dog Food </a>
  <p class = "product-price"> $19.49</p>
  <p class = "product-price"> $16.73</p>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">15% off</h2>
    </div>
</div>

<!----12th product-------->
<div class = "product">
        <div class = "product-content">
          <div class ="product-img">
            <img src = "images/product12/1.jpeg" alt="Royal Canin image" width="100%" display="block">
  </div>
  <div class = "product-btns">
    <button type = "button" class="btn-cart"> add to cart
      <span><i class = "fas fa-plus"></i></span>
  </button>
  <button type ="button" class ="btn-buy"> buy now
    <span><i class =" fas fa-shopping-cart"></i></span>
  </button>
  </div>
  </div>
  <div class = "product-info">
    <div class = "product-info-top">
    <b style="font-weight:900px">B&M</b>
      <div class ="rating">
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
        <span><i class = "fas fa-star"></i></span>
  </div>
  </div>
  <a href ="product12.php" class ="product-name" >Royal Canin® Breed Health Nutrition™ Pug Puppy Food</a>
  <p class = "product-price"> $24.99</p>
  <p class = "product-price"> $21.55</p>
  <br>
  <br>
  </div>

  <div class = "off-info">
    <h2 class = "sm-title">12% off</h2>
    </div>
</div>




</section>


    </body>
</html>