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
     <link rel="stylesheet" href="assets/css/image.css">
    <script type="text/javascript" src="./assets/js/navigate.js"></script>

</head>

<body>
    <nav class="head-back">
        <ul class="sidebar">
            <li id="nav2"><a href="#"><img src="./assets/images/images.png" height="26" alt=""></a></li>
            <li class="head"><img src="" alt=""></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="phone.php">Phone</a></li>
            <li><a href="tv.php">Tv</a></li>
            <li><a href="accessories.php">Accessories</a></li>
            <li><a href="laptop.php">Laptop</a></li>
            <li><a href="cameras.php">Camera</a></li>
        </ul>


        <ul>
            <li class="head"><img src="" alt=""></li>
            <li class="hideOnMobile"><a href="index.php">Home</a></li>
            <li class="hideOnMobile"><a href="phone.php">Phone</a></li>
            <li class="hideOnMobile"><a href="tv.php">Tv</a></li>
            <li class="hideOnMobile"><a href="accessories.php">Accessories</a></li>
            <li class="hideOnMobile"><a href="laptop.php">Laptop</a></li>
            <li class="hideOnMobile"><a href="cameras.php">Camera</a></li>
            <li class="menu-button" id="nav"><img src="./assets/images/Hamburger-Menu-Blue-Version-01-1024x553-1.png"
                    alt="menu-bar" height="26"></li>
        </ul>
    </nav>
<!-- Phone-->
<section id="Featured">
    <div class="container">
        <h3>Best Laptop Product</h3>
        <hr width="1600">
        <p> check out our unique Laptop</p>
    </div>

    <div class="product-container">

        <?php include('server/get_laptop.php'); ?>

        <?php while($row = $laptop->fetch_assoc()){?>

        <div class="product">
            <div class="image-container">
            <img class="product-image" src="assets/images/<?php echo $row['product_image'];?>" alt="laptop">
            </div>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">
                <?php echo $row['product_name'];?>
            </h5>
            <h4 class="p-price">$
                <?php echo $row['product_price'];?>
            </h4>
           <a href="<?php echo "single_product.php?product_id=". $row['product_id'];?>"><button class="buy-now">Buy Now</button></a>
        </div>

        <?php } ?>


    </div>
</section>
<?php include('outline/footer.php'); ?>