
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Electronics Shopping Center</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="./assets/js/navigate.js"></script>
    <style>
    .pagination a {
 color:blueviolet;
 font-size: xx-large;
 font-weight: bolder;
}
.pagination li:hover a{
    color: #fff;
    background-color: coral;
}
    </style>
</head>
<body>
    <nav class="head-back">
            <ul class="sidebar">
                <li id="nav2"><a href="#"><img src="./assets/images/images.png" height="26" alt=""></a></li>
            <li class="head"><img src="" alt=""></li>
            <h5>MHD Electronics</h5>
                <li><a href="index.html">Home</a></li>
                <li><a href="phone.html">Phone</a></li>
                <li><a href="laptop.html">Laptop</a></li>
                <li><a href="tv.html">Tv</a></li>
                <li><a href="cameras.html">Cameras</a></li>
                <li><a href="accessories.html">Accessories</a></li>
                <li><a href="#">SIGN UP</a></li>
            </ul>
        
        <ul>
            <li class="head"><img src="" alt=""></li>
            <h5>MHD Electronics</h5>
            <li><a href="index.html">Home</a></li>
            <li class="hideOnMobile"><a href="phone.html">Phone</a></li>
            <li class="hideOnMobile"><a href="laptop.html">Laptop</a></li>
            <li class="hideOnMobile"><a href="tv.html">Tv</a></li>
            <li class="hideOnMobile"><a href="cameras.html">Cameras</a></li>
            <li class="hideOnMobile"><a href="accessories.html">Accessories</a></li>
            <li class="hideOnMobile"><a href="#">SIGN UP</a></li>
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
<button>Shop Now</button>
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
    <button>Shop Now</button>
</div>
</div>
<!--Two-->
<div class="one">
    <img src="assets/images/tvv.png" alt="tv">
    <div class="details">
        <h2>Awesome TV</h2>
        <h2>Best TV</h2>
        <button>Shop Now</button>
    </div>
</div>
<!--Three-->
<div class="one">
    <img src="assets/images/lap6.jpg" alt="laptop">
    <div class="details">
        <h2>50% OFF laptop</h2>
        <button>Shop Now</button>
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
    
        <div class="row">
        <?php include('server/featured_product.php');?>
        <?php while($row = $feature_pro ->fetch_assoc()){?>
<div class="product">
    <img class="" src="assets/images/<?php echo $row['product_image'] ;?>" alt="tv">
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
<button>Shop Now</button>
        </div>
    </section>
    <nav class="Previous">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="phone.html">Next</a></li>
        </ul>
    </nav>
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
        <li><a href="laptop.html">Laptops</a></li>
        <li><a href="tv.html">Tv</a></li>
        <li><a href="phone.html">Phones</a></li>
        <li><a href="cameras.html">Cameras</a></li>
        <li><a href="accessories.html">Accessories</a></li>
        <li><a href="#">New Arrivals</a></li>
        <li><a href="#">Electronics</a></li>
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
        <p>+251977636953</p>
    </div>
    <div>
        <h6>Email</h6>
        <p>kueth123@gmail.com</p>
    </div>
    </div>
<div class="footer-one">
    <h5>instagram</h5>
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
    <div>
        <img src="assets/images/payment method.png" alt="paymentmethod">
    </div>
    <div>
        <p>eCommerce @2025 All Right Reserved</p>
    </div>
    <div class="images">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>

    </div>
</div>
</div>
    </footer>
</body>
</html>

