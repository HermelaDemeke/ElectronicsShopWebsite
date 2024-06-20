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
    <script type="text/javascript" src="assets/js/navigate.js"></script>

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
</head>

<body>
    <nav class="head-back">
        <ul class="sidebar">
            <li id="nav2"><a href="#"><img src="./assets/images/images.png" height="26" alt=""></a></li>
            <!-- <li class="head"><img src="" alt=""></li> -->
            <li class="head"><a href="index.php">Home</a></li>
            <li><a href="phone.php">Phone</a></li>
            <li><a href="tv.php">Tv</a></li>
            <li><a href="accessories.php">Accessories</a></li>
            <li><a href="laptop.php">Laptop</a></li>
            <li><a href="cameras.php">Camera</a></li>
            <li><a href="account.php">Account</a></li>
        </ul>


        <ul>
            <!-- <li class="head"><img src="" alt=""></li> -->
            <li class="hideOnMobile"><a href="index.php">Home</a></li>
            <li class="hideOnMobile"><a href="phone.php">Phone</a></li>
            <li class="hideOnMobile"><a href="tv.php">Tv</a></li>
            <li class="hideOnMobile"><a href="accessories.php">Accessories</a></li>
            <li class="hideOnMobile"><a href="laptop.php">Laptop</a></li>
            <li class="hideOnMobile"><a href="cameras.php">Camera</a></li>
            <li class="hideOnMobile"><a href="account.php">Account</a></li>
            <li class="menu-button" id="nav"><img src="./assets/images/Hamburger-Menu-Blue-Version-01-1024x553-1.png"
                    alt="menu-bar" height="26"></li>
        </ul>
    </nav>

    <!--Shop-->
    <section id="shop">
        <div class="container">
            <h3>Our Feature Product</h3>
            <hr width="1600">
            <p>check out our Featured products</p>
        </div>
        <div class="row">
            <?php include('server/featured_product.php');?>
        <?php  while($row=$feature_pro->fetch_assoc()){?>
            <div onclick="window.location.href='phone.php';" class="product">
                <img class="" src="assets/images/<?php echo $row['product_image'];?>" alt="amazontv" width="100%" >
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name"><?php echo $row['product_name'];?></h5>
                <h4 class="p-price"><?php echo $row['product_price'];?></h4>
               <a class="buy-now" href="tv.php">Buy Now </a>
            </div>
            <?php } ?>
        </div>
            
    </section>




    <?php include('outline/footer.php'); ?>