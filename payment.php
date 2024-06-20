<?php
session_start();
if(isset($_POST['order_pay_btn'])){
   $order_status =  $_POST['order_status'];
   $order_total_price =  $_POST['order_total_price'];
}
?>
<?php include('outline/header.php'); ?>
<style>

footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 265px;
    /* background-color: #f5f5f5; */
    /* Add any additional styles for your footer */
}
html,
body {
    height: 100%;
     background-image: url(assets/images/money.png);
    margin: 0;
}

.content {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100%;
    /* Adjust padding or margin if necessary */
    padding-bottom: 100px;
}

.payment-section {
    text-align: center;
}
.total{
    margin-top: 3%;
    position: relative;
}
.pay-now-btn {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: #ff7f50; /* Set the background color to a beautiful shade */
    color: #ffffff; /* Set the text color to white or any other color that stands out */
    padding: 10px 20px; /* Adjust padding as needed */
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.pay-now-btn:hover {
    background-color: orange; /* Set a different background color on hover if desired */
}
.total-payment {
    margin-bottom: 10px;
    font-weight: bold;
    font-size:xx-large;
    color:green;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}
.pay{
    color:brown;
    font-weight: bold;
    font-size:xx-large;
}

</style>

        <!--payment-->
<section class="payment-section">
    <div class="container">
        <h2 class="pay">Payment</h2>
        <hr>
    </div>
    <div class="total">
<?php if(isset($_SESSION['total']) && $_SESSION['total'] != 0) { ?>
<p class="total-payment">Total Payment: $<?php echo $_SESSION['total'];?></p>
<input class="btn" type="submit" value="pay Now" />

<?php } elseif(isset($_POST['order_status']) && $_POST['order_status'] == "not paid"){?>
<p class="total-payment">Total Payment: $<?php echo $_POST['order_total_price']; ?></p> 
<input class="pay-now-btn" type="submit" value="pay Now"/>
        <?php } ?>
    </div>
</section>


        <!--Footer-->
    <?php include('outline/footer.php'); ?>