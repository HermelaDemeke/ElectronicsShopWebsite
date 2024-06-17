<?php
session_start();
if(isset($_POST['order_pay_btn'])){
   $order_status =  $_POST['order_status'];
   $order_total_price =  $_POST['order_total_price'];
}
?>
<?php include('outline/header.php'); ?>

        <!--payment-->
<section class="">
    <div class="container">
        <h2 class="">Payment</h2>
        <hr>
    </div>
    <div>
<?php if(isset($_SESSION['total']) && $_SESSION['total'] != 0) { ?>
<p>Total Payment: $<?php echo $_SESSION['total'];?></p>
<input class="btn" type="submit" value="pay Now" />

<?php } elseif(isset($_POST['order_status']) && $_POST['order_status'] == "not paid"){?>
<p>Total Payment: $<?php echo $_POST['order_total_price']; ?></p>
<input class="btn" type="submit" value="pay Now" />
        <?php } else{ ?>
             <p>your cart is empty</p>
            
            <?php}?>
       
    </div>
</section>


        <!--Footer-->
    <?php include('outline/footer.php'); ?>