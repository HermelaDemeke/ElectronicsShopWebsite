<?php
include('server/connection.php');
if(isset($_GET['product_id'])){
    $product_id= $_GET['product_id'];
$statement=$conn->prepare("SELECT * FROM product WHERE product_id = ?");
$statement->bind_param("i",$product_id);
$statement->execute();
$product = $statement->get_result();
}
 else{
    header('location: index.php');
}

?>
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
                <li class="menu-button" id="nav"><img src="./assets/images/Hamburger-Menu-Blue-Version-01-1024x553-1.png"
                        alt="menu-bar" height="26"></li>
            </ul>
        </nav>
<!--Single-Product-->
        <section class="single-product">
            <div class="row">
                <?php while($row=$product->fetch_assoc()){?>
                <div>
                    <img id="mainImg" class="lap" src="assets/images/<?php echo $row['product_image']; ?>"alt="amazonLaptop" width="100%" >
                    <div class="small-img-group">
<div class="small-img-col">
<img src="assets/images/<?php echo $row['product_image']; ?>" alt="phone" class="small-img" width="100%">
</div>
<div class="small-img-col">
    <img src="assets/images/<?php echo $row['product_image2']; ?>" alt="tv" class="small-img" width="100%">
</div>
<div class="small-img-col">
    <img src="assets/images/<?php echo $row['product_image3']; ?>" alt="camera" class="small-img" width="100%">
</div>
<div class="small-img-col">
    <img src="assets/images/<?php echo $row['product_image4']; ?>" alt="accessories" class="small-img" width="100%">
</div>
                    </div>
                    
                </div>
<div class="Add-to-cart ">
<h3><?php echo $row['product_name']; ?></h3>
<h2><?php echo $row['product_price']; ?></h2>
<form action="cart.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
                        <input type="number" name="product_quantity" value="1">
 <button class="buy-now" type="submit" name="add_to_cart">Add To Cart</button>
                </form>  
<h4 class="prod">Product Details</h4>
<span><?php echo $row['product_description']; ?></span>
</div>
<?php } ?>
            </div>
        </section>
<!--Related Product-->
<section id="related-product">
    <div class="container">
        <h3>Related Product</h3>
        <hr width="1600">
    </div>
    <div class="row">
        <div class="product">
            <img class="" src="assets/images/amazontv.webp" alt="amazontv">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Smart Tv</h5>
            <h4 class="p-price">$299.9</h4>
            <button class="buy-now">Buy Now</button>
        </div>
        <div class="product">
            <img class="" src="assets/images/amazonLaptop.webp" alt="amazonLaptop">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Smart Laptops</h5>
            <h4 class="p-price">$137.99</h4>
            <button class="buy-now">Buy Now</button>
        </div>
        <div class="product">
            <img class="" src="assets/images/amazonPhone.webp" alt="amazonPhone">
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h5 class="p-name">Smart Phones</h5>
            <h4 class="p-price">$179.99</h4>
            <button class="buy-now">Buy Now</button>
        </div>
        <div class="product">
            <img class="" src="assets/images/amazonCamera.webp" alt="amazonCamera">
            <div class="coll">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart Cameras</h5>
                <h4 class="p-price">$120.84</h4>
                <button class="buy-now">Buy Now</button>
            </div>
        </div>
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
        <script>
 var mainImg = document.getElementById("mainImg");
 var smallImg= document.getElementsByClassName("small-img");
     for(let i=0; i<4; i++)
         {
    smallImg[i].onclick = function () { 
        mainImg.src = smallImg[i].src;
    }
        }
      
        </script>
        </body>
        </html>