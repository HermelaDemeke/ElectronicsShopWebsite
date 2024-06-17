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
<style>
    .product img {
        width: 100%;
        height: auto;
        box-sizing: border-box;
        object-fit: cover;
    }
    .pagination a {
 color:blueviolet;
 font-size: xx-large;
 font-weight: bolder;
}
.pagination li:hover a{
    color: #fff;
    background-color: coral;
}
</style>
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
    <section id="Featured">
        <div class="container">
            <h3>Our Feature Product</h3>
            <hr width="1600">
            <p> check out our Featured products</p>
        </div>
        <div class="row">
            <div class="product">
                <img class="" src="assets/images/flash.jpg" alt="amazontv">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Hard disc flush</h5>
                <h4 class="p-price">$299.9</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/tab.jpg" alt="amazonLaptop">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart  watch</h5>
                <h4 class="p-price">$100.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/head.jpg" alt="amazonPhone">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart headset</h5>
                <h4 class="p-price">$79.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/speak.jpg" alt="amazonCamera">
                <div class="coll">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">hoffers</h5>
                    <h4 class="p-price">$120.84</h4>
                    <button class="buy-now">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product">
                <img class="" src="assets/images/tab3.jpg" alt="amazontv">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart Ipad</h5>
                <h4 class="p-price">$299.9</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/head3.jpg" alt="amazonLaptop">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart Kenwood</h5>
                <h4 class="p-price">$100.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/flash3.jpg" alt="amazonPhone">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart intation</h5>
                <h4 class="p-price">$179.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/speak7.jpg" alt="amazonCamera">
                <div class="coll">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Smart Hoffers</h5>
                    <h4 class="p-price">$120.84</h4>
                    <button class="buy-now">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product">
                <img class="" src="assets/images/tab3.jpg" alt="amazontv">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart cell</h5>
                <h4 class="p-price">$299.9</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/speak4.jpg" alt="amazonLaptop">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">loud sound hoffers</h5>
                <h4 class="p-price">$137.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/head4.jpg" alt="amazonPhone">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart Accessor</h5>
                <h4 class="p-price">$179.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/flash6.jpg" alt="amazonCamera">
                <div class="coll">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">San Disk</h5>
                    <h4 class="p-price">$120.84</h4>
                    <button class="buy-now">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product">
                <img class="" src="assets/images/head5.jpg" alt="amazontv">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart Headset</h5>
                <h4 class="p-price">$299.9</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/tab5.jpg" alt="amazonLaptop">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart Tablet</h5>
                <h4 class="p-price">$137.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/speak5.jpg" alt="amazonPhone">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Smart Hoffer</h5>
                <h4 class="p-price">$279.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/head2.jpg" alt="amazonCamera">
                <div class="coll">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Smart Accessor</h5>
                    <h4 class="p-price">$100.39</h4>
                    <button class="buy-now">Buy Now</button>
                </div>
            </div>
        </div>
        <nav class="Previous">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="cameras.html">Previous</a></li>
            </ul>
        </nav>

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
                    <p>+251977636959</p>
                </div>
                <div>
                    <h6>Email</h6>
                    <p>kueth123@gmail.com</p>
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
                    <p>eCommerce @2024 All Right Reserved</p>
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