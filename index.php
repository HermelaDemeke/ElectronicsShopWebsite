<?php include('outline/header.php'); ?>
<style>
    /* for phone.php image */

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
        <li><a href="phone.php">Phones</a></li>
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
</body>
</html>
    