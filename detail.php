<?php

include('server/connection.php');

if(isset($_POST['detail']) && isset($_POST['order_id'])){
   $order_id = $_POST['order_id'];
   $order_status = $_POST['order_status'];
   
   $stmt =  $conn->prepare("SELECT  * FROM order_item WHERE order_id=?");
   $stmt->bind_param('i',$order_id);
   $stmt->execute();
   $order_details = $stmt->get_result();
  $order_total_price = CalculateTotalOrderPrice($order_details);

}
else{

    header('location: account.php');
}

function CalculateTotalOrderPrice($order_details){
    $total = 0;
    foreach($order_details as $row ) {
 $product_price = $row['product_price'];
 $product_quantity = $row['product_quantity'];
  $total = $total + ( $product_price * $product_quantity);

    }

    return $total;
  
}


?>

<?php include('outline/header.php'); ?>
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



<!-- Order Detail  -->

    <section class="orders" id="order">
    <div>
        <h2>Your Orders</h2>
        <hr>
        <table>
            <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
             
            </tr>
           
            <?php while($row = $order_details->fetch_assoc()) {?>
           
            <tr>
                <td>
            <div class = "product-info">
               <img src="assets/images/<?php echo $row['product_image'];?>" alt="camera">
                    <div>           
                         <p><?php echo $row['product_name'];?> </p>
                    </div>
            </div>
                </td>
                
                <td>
      <span>$<?php echo $row['product_price'];?></span>
                </td>
                <td>
      <span><?php echo $row['product_quantity'];?></span>
                </td>

            </tr>
<?php } ?>
           
        </table>

        <?php if($order_status == "not paid"){?>

            <form action="" style = "float: right;" method="POST" action="payment.php">
            <input type="hidden" name="order_total_price" value="<?php echo $order_total_price; ?>" />
               <input type="hidden" name="order_status" value="<?php echo $order_status;?>" />  
            <input type="submit" name="order_pay_btn" class=" btn btn-primary" value= "Pay Now">
            </form>


      <?php  } ?>

</section>








<?php include('outline/footer.php'); ?>