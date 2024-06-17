<?php include('outline/header.php'); ?>

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

    <?php include('outline/footer.php') ;?>
    
