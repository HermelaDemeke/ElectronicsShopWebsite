<?php
session_start();

if(isset($_SESSION['logged_in'])){
    header('location:login.php');
    exit;
}
if(isset($_GET['logout'])){
    if(isset($_SESSION['logged_in'])){
        unset($_SESSION['logged_in']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        header('location:login.php');
        exit;
    }
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
    <!--Account-->
<section>
    <div class="row">
<div class="account">
    <h3>Account info</h3>
    <hr class="">
    <div class="account-info">
<p>Name <span><?php if(isset($_SESSION['user_name'])){ echo $_SESSION['user_name'];}?></span></p>
<p>Email <span><?php if(isset($_SESSION['user_email'])){ echo $_SESSION['user_email'];}?></span></p>
<p><a href="#order" id="order-btn">Your Orders</a></p>
<p><a href="account.php?logout=1" id="logout-btn">Log Out</a></p>
    </div>
</div>
<div>
    <form action="" id="account-form">
        <h3>Change Password</h3>
        <hr>
        <div class="form-group">
<label for="">Password</label>
<input type="password" class="form-control" id="account-password" placeholder="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" id="account-password-confirm" placeholder="Confirmpassword" name="password" required>
        </div>
        <div class="form-group">
<input type="submit" value="Change Password" class="btn" id="Change-pass-btn">
        </div>
    </form>
</div>
    </div>
</section>

<section class="orders" id="order">
    <div>
        <h2>Your Orders</h2>
        <hr>
        <table>
            <tr>
                <th>Product</th>
                <th>Date</th>
             
            </tr>
            <tr>
                <td>
                <div class="product-info">
<img src="assets/images/amazonCamera.webp" alt="amazonCamera">
<div>
<p>amazonCamera</p>
</div>
                </div>
                </td>
                <td>
<span>2036-05-08</span>
                </td>
            </tr>
           
        </table>

    </div>

</section>

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