<?php

$pid=$_GET['id'];
include("db.php");

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
$sel="SELECT * FROM item where id='$pid'";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){


$thisproduct= $row['name'];
$desc = $row['description'];
$price = $row['price'];
$oldpr = $row['old_price'];
$img = $row['image'];
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
    }
?>



<html>
<head>

    <title><?php echo $thisproduct; ?></title>
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

        .rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}
.rtn{
  float: left;
  width: 100%;
}
.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
}

.checked{
  color: orange;
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

                    <?php for($i=1;$i<=$img;$i++){ ?>
                        <img src="images/product<?php echo $pid;?>/<?php echo $i ;?>.jpeg" alt="" onclick="clickme(this)">
                    <?php } ?>

                    </div>
                    <div class="preview">
                        <img src="images/product<?php echo $pid;?>/1.jpeg" id="imagebox" alt="">
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="content">
                    <p class="brand">Brand: B&M</p>
                    <h2><?php echo $thisproduct; ?></h2>
                    <?php echo $desc; ?>
                    <br><br>
                    <p class = "product-price" style="text-decoration: line-through;color:red"> <?php echo "$ $oldpr";?></p>
                    <p class = "product-price"><?php echo "$ $price";?></p>
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


        <div class="row">
            <div class="col">
            <b style="text-decoration:underline;font-size:25px;">Tell Us What You Think</b>
            <br><br>

                    <form action="rating.php" method="post">
  <input type="hidden" name="pid" value="<?php echo $pid;?>">
  <p>Name</p>
  <p><input type="text" name="name" class="form-control" style="width: 300px;height:25px;border: 1px solid #ccc; font-weight: bold;text-align: left;"></p>
  <br><p>Rating</p>
  <div class="rtn">
  <fieldset class="rtg">
   
    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset>
</div>

<br><br><p>Review</p>
<p><textarea class="form-control" name="rv" style="width: 300px;height:100px;"></textarea></p>
<br>
<p><input type="submit" name="savert" value="Feedback" class="btn btn-primary" style="width: 100px;height:25px;"></p>
  
</form>
<br><br>
</div>

<div class="col">
<b style="text-decoration:underline;font-size:25px;">Reviews</b>
        <br><br> 
<?php
include("db.php");

        // Create connection
        $con = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
        }
        $sum = 0.00;
        $count = 0.00;
      $sel="SELECT * FROM rating where pid='$pid' AND isapproved='1'";
      $rev=$con->query($sel);
      while($line=$rev->fetch_assoc()){
          $sum = $sum + $line['rating'];
          $count = $count + 1;
                ?>
           <h4><?php echo $line['name']; ?></h4>
          <p>
          <?php for($i=1;$i<=$line['rating'];$i++){ ?>
          <span class="fa fa-star checked"></span>
        <?php  }?>

        <?php for($j=1;$j<=5-$line['rating'];$j++) {?>
       <span class="fa fa-star "></span>
        <?php  } ?>
      </p>

      <p><?php echo $line['review'] ?></p>
      <hr/>
        <br>
    <?php  } ?>
    <br>
    <b style="text-decoration:underline;font-size:25px;">Overall Rating</b><br>
    <b><?php  echo round($sum/$count,2)."/5"; ?></b>



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
