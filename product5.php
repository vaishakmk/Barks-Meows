<?php
$thisproduct='Purina - Adult Cat Food';
if(!isset($_COOKIE['dictionary'])){
    $dictionary=['Royal Canin-Golden Retriever Adult Dog Food'=>0,'Top Paw® - Dog Pads'=>0,'PetSafe® Eatwell - Automatic Pet Feeder'=>0,
    'Top Paw - Double Door Wire Dog Crate'=>0,'Purina - Adult Cat Food'=>0,'Whisker City® Organic Catnip'=>0,
    'Litter Genie™ Plus Cat Litter Disposal System'=>0,'Vets Best®-Flea Tick Home Spray'=>0,'Pet Life Comfort Hoodie'=>0,
    'Pendleton National Park Grand Canyon Mattress Dog Bed'=>0,'Royal Canin® - Small Puppy Dog Food'=>0,'Royal Canin® - Pug Puppy Food'=>0];
    }
    else{
      $dictionary=unserialize($_COOKIE['dictionary']);
    }
    $dictionary[$thisproduct]=$dictionary[$thisproduct]+1;
    $dictionary=serialize($dictionary);
    setcookie('dictionary',$dictionary,time()+860000*10);
    
    if(!isset($_COOKIE['mostrecent'])){
      $mostrecent=[$thisproduct,'','','',''];
      }else{
        $mostrecent=unserialize($_COOKIE['mostrecent']);
        for($i=0;$i<5;$i++){
          if($mostrecent[$i]==$thisproduct){
            $mostrecent[$i]='';
            break;
          }
        }
        if($i>4){
          $i=4;
          }
          for($j=$i;$j>0;$j--){  
              $mostrecent[$j]=$mostrecent[$j-1];
          }
        $mostrecent[0]=$thisproduct;
           }
    
      $mostrecent=serialize($mostrecent);
      setcookie('mostrecent',$mostrecent,time()+860000*10);
    ?>

<html>

<head>

    <title>Purina - Adult Cat Food</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link href="products.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>


    body{
        background: bisque;
        margin-top:15px;
        margin-left:20px;
    }
    .product-price{
    padding-top: 0.6rem;
    padding-right: 0.6rem;
    display: inline-block;
    color: black;
    }

    nav{
           font-size: xlarge;
           font-size: 1.35rem;
           font-weight :900;
        }

    

</style>
</head>

<body>

<nav>
    
    <img src = "images/imglogo.jpeg" width = "90" height = "90" /> B&M
    <a style="margin-left:70%" href="services.php" >Back>>Services</a>
</nav>   


    <div class="hero">
        <div class="row">
            <div class="col">

                <div class="slider">
                    <div class="product">

                        <img src="images/product5/1.jpeg" alt="" onclick="clickme(this)">
                        <img src="images/product5/2.jpeg" alt="" onclick="clickme(this)">
                        <img src="images/product5/3.jpeg" alt="" onclick="clickme(this)">
                        <img src="images/product5/5.jpeg" alt="" onclick="clickme(this)">

                    </div>
                    <div class="preview">
                        <img src="images/product5/1.jpeg" id="imagebox" alt="">
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="content">
                    <p class="brand">Brand: Purina</p>
                    <h2>Purina Pro Plan Savor Adult Cat Food</h2>
                    Serve kitty the delectable duo in Purina Pro Plan Beef & Chicken Entree in Gravy Adult Wet Cat Food. Real beef plus real chicken offer your furry pal a yummy adult cat food with a combo of high-quality protein sources. Each ingredient in this a premium cat food is thoughtfully chosen, working together to support her nose-to-tail well-being. She gets antioxidants to promote her immune health. Omega-6 fatty acids and vitamin A nourish her skin and super-soft coat, and vitamin A and taurine help keep her vision keen as she explores her world. Plus, the optimal level of protein in every serving helps her maintain an ideal body condition throughout a lifetime of jumping and playing. With a taste cats love in every tender bite, this beef and chicken cat food makes mealtime as delicious as it is nutritious.
                    <br><br>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>

                    <br>
                    <p class = "product-price" style="text-decoration: line-through;color:red"> $1.99</p>
                    <p class = "product-price"> $1.01</p>
                    <p>Size: <select name="size">

                            <option value="select size">select size</option>
                            <option value="small">small</option>
                            <option value="medium">medium</option>
                            <option value="large">large</option>

                        </select></p>
                    <p>Quantity: <input type="text" value="1"></p>
                    <a href="contacts.php">
                    <button type="button">
                        <i class="fa fa-shopping-cart"></i>
                        Add to cart</button>
                    </a>
                </div>
            </div>
        </div>

    </div>



    <script>
        function clickme(smallImg) {

            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src;

        }

    </script>



</body>

</html>
