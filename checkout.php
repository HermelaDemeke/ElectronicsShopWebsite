
<?php
session_start();

if(!empty($_SESSION['cart'])){
    //let user in

}else{
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
                <li><a href="account.php">Accessories</a></li>
                <li><a href="index.php">Log out</a></li>
            </ul>
        
        
            <ul>
                <li class="hideOnMobile"><a href="account.php">Account</a></li>
                <li class="hideOnMobile"><a href="index.php">Log out</a></li>
                <li class="menu-button" id="nav"><img src="./assets/images/Hamburger-Menu-Blue-Version-01-1024x553-1.png"
                        alt="menu-bar" height="26"></li>
            </ul>
        </nav>

        <!--Check-out-->
<section class="">
    <div class="container">
        <h2 class="">Check-Out</h2>
        <hr>
    </div>
    <div>
        <form id="checkout-form" action="server/order.php" method="POST">
           <p style="color:red">
            <?php if(isset($_GET['message'])){echo $_GET['message'];} ?>
            <?php if(isset($_GET['message'])) {?>
  
                <a class="btn" href="login.php">Login</a>


                <?php } ?>
        </p>
        
           <div class="form-group checkout-small-element">
                <label>Name</label> <br>
                <input type="text" class="form-control" id="checkout-name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group checkout-small-element">
                <label>Email</label> <br>
                <input type="text" class="form-control" id="checkout-email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group checkout-small-element">
                <label>Phone Number</label> <br>
                <input type="tel" class="form-control" id="checkout-phone" name="phone"
                    placeholder="Phone" required>
            </div>
            <div class="form-group checkout-small-element">
                <label>City</label> <br>
                <input type="text" class="form-control" id="checkout-city" name="city"
                    placeholder="City" required>
            </div>
            <div class="form-group checkout-large-element">
                <label>Address</label> <br>
                <input type="text" class="form-control" id="checkout-address" name="address" placeholder="Address" required>
            </div>
            <div class="form-group checkout-btn-container"> <br>
            <p> Total Amount: $<?php echo $_SESSION ['total']; ?></p> <br>
                <input type="submit" name="place_order" class="btn" id="checkout-btn" value="Order"><br><br>
            </div>
        </form>
    </div>
</section>


        <!--Footer-->
       <?php include('outline/footer.php'); ?>
