<html>
<head>

    <title>Royal Canin-Golden Retriever Adult Dog Food</title>
    <link rel="icon" href="images/imglogo.jpeg">
    <link href="products.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>



        body{
            background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(images/img8.jpeg);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
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

    <a style="margin-left:90%" href="services.php" >Back</a>
</nav>   


<?php

$page_map=['Royal Canin-Golden Retriever Adult Dog Food'=>'product1.php','Top Paw® - Dog Pads'=>'product2.php',
            'PetSafe® Eatwell - Automatic Pet Feeder'=>'product3.php','Top Paw - Double Door Wire Dog Crate'=>'product4.php',
            'Purina - Adult Cat Food'=>'product5.php','Whisker City® Organic Catnip'=>'product6.php',
            'Litter Genie™ Plus Cat Litter Disposal System'=>'product7.php','Vets Best®-Flea Tick Home Spray'=>'product8.php',
            'Pet Life Comfort Hoodie'=>'product9.php','Pendleton National Park Grand Canyon Mattress Dog Bed'=>'product10.php',
            'Royal Canin® - Small Puppy Dog Food'=>'product11.php','Royal Canin® - Pug Puppy Food'=>'product12.php'];

if(!isset($_COOKIE['mostrecent'])){
    print("<div style='color:bisque;'><h2 style='color:bisque;'>No products viewed yet</h2></div>");

}else{
    print("<div style='color:bisque;'><h2 style='color:bisque;'>Most Recently Viewed Products:</h2><br/><p>");
    
    $mostrecent=unserialize($_COOKIE['mostrecent']);
    for($i=0;$i<5;$i++){
      if($mostrecent[$i]!=''){
        $temp = $page_map[$mostrecent[$i]];
        print("<a style='color:bisque;margin-left:10px;' href='$temp'>".($i+1).".) $mostrecent[$i] </a>");
        print("<br/><br>");
       
      }
    }
    print("</p></div>");
}
?>


</body>

</html>
