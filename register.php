<?php
session_start();

include('server/connection.php');

// if user has already registered then take user to account page
/*
if(isset($_SESSION['logged_in'])){
    header('location: account.php');
    exit;
}
*/

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    //password don't match
    if ($password !== $confirmpassword) {
        header('location: register.php?error= password do not match');
    } 
    // if password is less than 8character
    else if (strlen($password) < 8) {
        header('location: register.php?error= password must be at least 8 character');
    } 
    // if there is no error
    else {
        // check whether there is a user with the same name and password
        $statement1 = $conn->prepare("SELECT count(*) FROM users where user_email=?");
        $statement1->bind_param('s', $email);
        $statement1->execute();
        $statement1->bind_result($num_rows);
        $statement1->fetch();

        // Close the prepared statement for checking email (important!)
        $statement1->close();

        if ($num_rows != 0) {
            header('location: register.php?error= user with this email has already exists');
        } else {
            //create a new user
            $statement = $conn->prepare("INSERT INTO users (user_name,user_email,user_password) VALUES (?,?,?)");
            $statement->bind_param('sss', $name, $email, md5($password)); //md5 to hash password

            if ($statement->execute()) {
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = $name;
                $_SESSION['logged_in'] = true;
                header('location: account.php?register= You Have Registered Successfully');

                // Close the prepared statement for inserting (important!)
                $statement->close();
            } else {
                header('location: register.php?error=could not create an account');
            }
        }
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

    <!--Register-->
    <section class="">
        <div class="container">
            <h2 class="">Register</h2>
            <hr>
        </div>
        <div>
            <form id="register-form" action="register.php" method="POST">
                <p style = "color: red;"><?php  if(isset( $_GET['error'])){echo $_GET['error'];}?></p>
            <div class="form-group">

                    <label>Name</label> <br>
                    <input type="text" class="form-control" id="register-name" name="name" placeholder="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label> <br>
                    <input type="text" class="form-control" id="register-email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label>Password</label> <br>
                    <input type="password" class="form-control" id="register-password" name="password"
                        placeholder="password" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label> <br>
                    <input type="password" class="form-control" id="register-confirm-password" name="confirmpassword" placeholder="confirmpassword" required>
                </div>
                <div class="form-group"> <br>
                    <input type="submit" name="register" class="btn" id="register-btn" value="Register">
                </div>
                <div class="form-group">
                    <a id="login-url" class="btn" href="login.php">Do you have account? login</a>
                </div>
            </form>
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

