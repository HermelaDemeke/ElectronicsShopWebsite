<?php
session_start();
if(isset($_POST['add_to_cart'])){

    //if user has already added a product to cart
if(isset($_SESSION['cart'])){
  $products_array_ids= array_column($_SESSION['cart'],"product_id");//array with all product id
  //if product has already been added to cart or not
if(!in_array($_POST['product_id'], $products_array_ids)){

$product_id =$_POST['product_id'];

$product_array = array(
'product_id' => $_POST['product_id'],
'product_name' => $_POST['product_name'],
'product_price' => $_POST['product_price'],
'product_image' => $_POST['product_image'],
'product_quantity' => $_POST['product_quantity']
);
$_SESSION['cart'][$product_id] = $product_array;

//product has already been added
}else{
echo '<script>alert("Product has alrady been added");</script>';
}


 //if this is the first product   
}else{  
$product_id= $_POST['product_id'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_image=$_POST['product_image'];
$product_quantity=$_POST['product_quantity'];

$product_array = array(
'product_id' => $product_id,
'product_name' => $product_name,
'product_price' => $product_price,
'product_image' => $product_image,
'product_quantity' => $product_quantity
);
$_SESSION['cart'][$product_id]=$product_array;
//
}
//calculate total
 CalculateTotalCart();
//remove product from cart
}elseif(isset($_POST['remove_product'])){
    $product_id=$_POST['product_id'];
unset($_SESSION['cart'][$product_id]);
//calculate total
CalculateTotalCart();

}elseif(isset($_POST['edit_quantity'])){
    //get id and quantity from form
    $product_id=$_POST['product_id'];
$product_quantity = $_POST['product_quantity'];
 //get product array from session
$product_array= $_SESSION['cart'][$product_id];
//update product quantity
 $product_array['product_quantity']=$product_quantity; 
 //return array
 $_SESSION['cart'][$product_id]=$product_array;
 //calculate total
 CalculateTotalCart();
}

else{
    header('location: index.php');
}

function CalculateTotalCart(){
    $total = 0;
    foreach($_SESSION['cart'] as $key => $value){
     $product = $_SESSION['cart'][$key];
     $price =  $product['product_price'];
     $quantity =  $product['product_quantity'];
     $total = $total + ($price * $quantity);
    }
    $_SESSION['total'] =$total;
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
<!--Cart-->
<section class="cart">
    <div>
        <h2>Your Cart</h2>
        <hr>
        <table>
<tr>
    <th>Product</th>
    <th>Quantity</th>
    <th>SubTotal</th>
</tr>

<?php foreach($_SESSION['cart']as $key => $value){?>
<tr>
    <td>
        <div class="product-info">
            <img src="assets/images/<?php echo $value['product_image'];?>" alt="electronics">
            <div class="im-rem">
                <p><?php echo $value['product_name'];?></p>
                <small><span>$</span><?php echo $value['product_price'];?></small>
                <br>
                <form action="cart.php" method="POST">
                <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>">
                <input type ="submit" name="remove_product" class="remove-btn" value="remove"/>
                </form>
                
            </div>
        </div>
    </td>
    <td>
        
        <form action="cart.php" method="POST">
        <input type="hidden" name="product_id" value="<?php echo $value['product_id'];?>"/>
<input type="number" name="product_quantity" value="<?php echo $value['product_quantity'];?>">
        <input type="submit" name="edit_quantity" class="edit-btn" value ="edit"/>
        </form>
    </td>
    <td>
        <span>$</span>
        <span class="product-price"><?php echo $value['product_quantity']* $value['product_price'];?></span>
    </td>
</tr>
<?php } ?>
        </table>

        <div class="cart-total">
            <table>
<tr>
    <td>Total</td>
    <td>$ <?php echo $_SESSION['total']; ?></td>
</tr>
            </table>
        </div>
        <div class="checkout-container">
            <form action="checkout.php" method="POST">
               <input type="submit" class="checkout-btn" value="Check Out" name="checkout"/>
            </form>
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

    </body>
    
    </html>