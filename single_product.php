<?php
include('server/connection.php');
if(isset($_GET['product_id'])){
    $product_id= $_GET['product_id'];
$statement=$conn->prepare("SELECT * FROM product WHERE product_id = ?");
$statement->bind_param("i",$product_id);
$statement->execute();

$product = $statement->get_result();
$statement->close();
}
/*
 else{
    header('location: index.php');
}
*/
?>
<?php include('outline/header.php'); ?>
<!--Single-Product-->
        <section class="single-product">
            <div class="row">
                <?php while($row =$product->fetch_assoc()){?>
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
                <div>
                    
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
        <!--Footer-->
       <?php include('outline/footer.php'); ?>