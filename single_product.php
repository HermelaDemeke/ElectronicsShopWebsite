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
<style>
    .Add-to-cart .product-name {
  font-size: 18px;
  margin-bottom: 12px;
}

.Add-to-cart .product-price {
  font-size: 16px;
  margin-bottom: 12px;
}

.Add-to-cart .product-quantity {
  width: 60px;
  height: 36px;
  font-size: 16px;
  margin-right: 12px;
}

.Add-to-cart .buy-now {
  padding: 8px 12px;
  font-size: 16px;
}

.Add-to-cart .prod {
  font-size: 18px;
  margin-top: 24px;
  margin-bottom: 12px;
}

.Add-to-cart .product-description {
  font-size: 16px;
}
</style>
<!--Single-Product-->
        <section class="single-product">
            <div class="row">
                <?php while($row =$product->fetch_assoc()){?>
                <div>
                    <img id="mainImg" class="lap" src="assets/images/<?php echo $row['product_image']; ?>"alt="amazonLaptop" width="60%" >
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
    <img src="assets/images/<?php echo $row['product_image4']; ?>" alt="accessories" class="small-img" >
</div>
                    </div>
                    
                </div>
                <div>
                    
<div class="Add-to-cart ">
<h3 class="product-name"><?php echo $row['product_name']; ?></h3>
<h2 class="product-price"><?php echo $row['product_price']; ?></h2>
<form action="cart.php" method="POST">
    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>">
                        <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>">
                        <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>">
                        <input type="hidden" name="product_price" value="<?php echo $row['product_price']; ?>">
                        <input type="number" name="product_quantity" value="1">
 <button class="buy-now" type="submit" name="add_to_cart">Add To Cart</button>
                </form>  
<h4 class="prod">Product Details</h4>
<span class="product-description"><?php echo $row['product_description']; ?></span>
</div>


<?php } ?>
            </div>

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
        </section>
        <!--Footer-->
       <?php include('outline/footer.php'); ?>