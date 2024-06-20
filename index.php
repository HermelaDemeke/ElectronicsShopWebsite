
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MHD Electronics Shopping Center</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="assets/js/navigate.js"></script>
    <style>
        .head {
  display: flex;
  justify-content: flex-start;
  margin-left: 10px;
}

.head img {
  margin-right: 1040px;
}
.product-container {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    /* Display 3 products per row, adjust as needed */
    grid-gap: 20px;
    /* Adjust the gap between products as needed */
}

.product {
    text-align: center;
}

.image-container {
    position: relative;
    padding-bottom: 60%;
    /* Set the aspect ratio (1:1 in this example) */
    overflow: hidden;
}

.product-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Maintain aspect ratio and fill the container */
}
    </style>
</head>
<body>
    <nav class="head-back">
            <ul class="sidebar">
            <li class="head"><img src="assets/images/mhd.jpg" alt="collection" width="100%" height="100%"></li> 
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Shop</a></li>
                <li><a href="login.php">LOG IN</a></li>
                <li><a href="register.php">Sign Up</a></li>
                 <li><a href="contact.html">Contact Us</a></li>
                 <li id="nav2"><a href="#"><img src="assets/images/images.png" height="26" alt=""></a></li>
            </ul>

        
        <ul>
            <li class="head"><img src="assets/images/mhd.jpg" alt="collection" width="100%" height = "100%"></li>
          <!--  <li><a href="index.php">Home</a></li> -->
            <li class="hideOnMobile"><a href="login.php">Shop</a></li>
             <li class="hideOnMobile"><a href="login.php">Login</a></li>
            <li class="hideOnMobile"><a href="register.php">SIGN UP</a></li>
            <li class="hideOnMobile"><a href="contact.html">Contact Us</a></li>
            <li class="menu-button" id="nav"><img src="./assets/images/Hamburger-Menu-Blue-Version-01-1024x553-1.png" alt="menu-bar" height="26"></li>
        </ul>
    </nav>

    <!--Home-->
    <section id="home">
<div>
    <div class="contain-1">
<h5>New Arrivals</h5> <br> 
<h1><span>Best Price</span> This Season</h1> <br> 
<p>MHD Electronics offer the best product with the most affordable prices</p> <br><br>
<button onclick="window.location.href='login.php';">Shop Now</button>
</div>
    </section>
    <!--Brand-->
    <section id="brand">
<div class="row">
  
    <img src="assets/images/brand3.png" alt="snmsung">
    <img src="assets/images/brand4.jpg" alt="huawei">
    <img src="assets/images/brand5.png" alt="hp">
    <img src="assets/images/brand7.jpg" alt="Cameras">
    <img src="assets/images/brand2.jpg" alt="LG">
</div>
    </section>
    <!--New-->
    <section id="new"> 
<div class="one">
<img src="assets/images/sum.jpg" alt="phone">
<div class="details">
    <h2>Extremely Awesome Phone</h2>
    <button onclick="window.location.href='login.php';">Shop Now</button>
</div>
</div>
<!--Two-->
<div class="one">
    <img src="assets/images/tvv.png" alt="tv">
    <div class="details">
        <h2>Awesome TV</h2>
        <button onclick="window.location.href='login.php';">Shop Now</button>
    </div>
</div>
<!--Three-->
<div class="one">
    <img src="assets/images/lap6.jpg" alt="laptop">
    <div class="details">
        <h2>50% OFF laptop</h2>
        <button onclick="window.location.href='login.php';">Shop Now</button>
    </div>
</div>
    </section>
    <!--Featured-->
    <section id="Featured">
        <div class="container">
<h3>Our Feature Product</h3>
       <hr width="1600"> 
<p>check out our Featured products</p>
        </div>
    
        <div class="product-container">
        <?php include('server/featured_product.php');?>
        <?php while($row = $feature_pro ->fetch_assoc()){?>
<div class="product">
    <div class="image-container">
    <img class="product-image" src="assets/images/<?php echo $row['product_image'] ;?>" alt="tv">
    </div>
    <div class="star">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
    </div>
    <h5 class="p-name"><?php echo $row['product_name'];?></h5>
    <h4 class="p-price"><?php echo $row['product_price'];?></h4>
    <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-now">Buy Now</button></a>
</div>
     <?php }?>
        </div>
            
    </section>
    <!--Banner-->
    <section id="banner">
        <div class="contain">
<h4>Mid Season Sale</h4>
<h1>Awesome collection <br> UP TO 30% OFF</h1>
<button onclick="window.location.href='login.php';">Shop Now</button>
        </div>
    </section>
    </body>
</html>

    <!--Footer-->
    <footer>
       <div class="footer">
    <div class="footer-one">
<img src="" alt="">
<p class="para">We provide the best product for the most affordable prices</p>
    </div>
<div class="footer-one">
    <h5>Featured</h5>
    <ul>
        <li><a href="login.php">Laptops</a></li>
        <li><a href="login.php">Tv</a></li>
        <li><a href="login.php">Phones</a></li>
        <li><a href="login.php">Cameras</a></li>
        <li><a href="login.php">Accessories</a></li>
    </ul>
</div>
    <div class="footer-one">
        <h5 class="">Contact Us</h5>
    <div>
        <h6>Address</h6>
        <p>1000 street Name, City</p>
    </div>
    <div>
        <h6>Phone Number</h6>
        <p>+251988747881</p>
    </div>
    <div>
        <h6>Email</h6>
        <p>bhmd0595@gmail.com</p>
    </div>
    </div>
<div class="footer-one">
    <h5>Electronics</h5>
    <div class="">
<img src="assets/images/iphon.jpg" alt="phone" class="" width="100" height="100">
<img src="assets/images/small-tvs-1628089080.jpg" alt="tv" class="" width="100" height="100">
<img src="assets/images/lap2.jpg" alt="laptop" class="" width="100" height="100">
<img src="assets/images/camera10.jpg" alt="camera" class="" width="100" height="100">
<img src="assets/images/tab.jpg" alt="accessories" class="" width="100" height="100">
    </div>
</div>
</div>

<div>
<div class="copy-right">
    <!--  
    <div>
        <img src="assets/images/payment method.png" alt="paymentmethod">
    </div>
    -->
    <div>
        <p>eCommerce @2025 All Right Reserved</p>
    </div>
    <div class="images">
        <a href="https://www.facebook.com/mahlet.demeke.184?mibextid=ZbWKwL"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/zufii_0791?igsh=MWltMGkycjZyaGxxOA=="><i class="fab fa-instagram"></i></a>
        <a href=" https://x.com/MahletDemeke6?t=0yrxQaRMM1zuN5tjKDJmYQ&s=35"><i class="fab fa-twitter"></i></a>

    </div>
</div>
</div>
    </footer>
