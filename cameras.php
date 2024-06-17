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
            <p>check out our Featured products</p>
        </div>
        <div class="row">
            <div class="product">
                <img class="" src="assets/images/amazonCamera.webp" alt="amazontv">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Compact Digital camera</h5>
                <h4 class="p-price">$399.9</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera1.jpg" alt="amazonLaptop">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Bridge Cameras</h5>
                <h4 class="p-price">$337.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera10.jpg" alt="amazonPhone">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Digital SLR Cameras</h5>
                <h4 class="p-price">$479.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera11.jpg" alt="amazonCamera">
                <div class="coll">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Mirrorless Cameras</h5>
                    <h4 class="p-price">$420.84</h4>
                    <button class="buy-now">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product">
                <img class="" src="assets/images/camera12.jpg" alt="amazontv">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Medium Format Cameras</h5>
                <h4 class="p-price">$399.9</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera2.jpg" alt="amazonLaptop">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Action Cameras</h5>
                <h4 class="p-price">$235.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera3.jpg" alt="amazonPhone">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">360 Cameras</h5>
                <h4 class="p-price">$479.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera4.jpg" alt="amazonCamera">
                <div class="coll">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Film Cameras</h5>
                    <h4 class="p-price">$1200.84</h4>
                    <button class="buy-now">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product">
                <img class="" src="assets/images/camera5.jpg" alt="amazontv">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Instant Cameras</h5>
                <h4 class="p-price">$499.9</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera6.jpg" alt="amazonLaptop">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Rugged Cameras</h5>
                <h4 class="p-price">$337.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera7.jpg" alt="amazonPhone">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Digital Cinema Cameras</h5>
                <h4 class="p-price">$279.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera8.jpg" alt="amazonCamera">
                <div class="coll">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Drones camera</h5>
                    <h4 class="p-price">$300.84</h4>
                    <button class="buy-now">Buy Now</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product">
                <img class="" src="assets/images/camera9.jpg" alt="amazontv">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Animation camera</h5>
                <h4 class="p-price">$299.9</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera13.jpg" alt="amazonLaptop">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Back up camera</h5>
                <h4 class="p-price">$437.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera14.jpg" alt="amazonPhone">
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h5 class="p-name">Banquet camera</h5>
                <h4 class="p-price">$379.99</h4>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product">
                <img class="" src="assets/images/camera15.jpg" alt="amazonCamera">
                <div class="coll">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name">Autofocus Cameras</h5>
                    <h4 class="p-price">$220.23</h4>
                    <button class="buy-now">Buy Now</button>
                </div>
            </div>
        </div>
        <nav class="Previous">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="tv.html">Previous</a></li>
                <li class="page-item"><a class="page-link" href="accessories.html">Next</a></li>
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
