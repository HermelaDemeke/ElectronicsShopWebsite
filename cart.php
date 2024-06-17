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
<?php include('outline/header.php'); ?>
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

    <?php include('outline/footer.php'); ?>
