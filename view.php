<?php
require_once('database.php');
$res = $database->read();
?>
<!DOCTYPE HTML>  
<html>
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Responsive Flower Website</title>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
            <nav class="nav container">
                <a href="#home" class="nav__logo">
                    <i class="ri-leaf-line nav__logo-icon"></i> Floweride
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="./index.php" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="./aboutus.php" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="./products.php" class="nav__link active-link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="./faq.php" class="nav__link">FAQs</a>
                        </li>
                        <li class="nav__item">
                            <a href="./contactus.php" class="nav__link">Contact Us</a>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class="ri-moon-line change-theme" id="theme-button"></i>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class="ri-menu-line"></i>
                    </div>
                </div>
            </nav>
        </header>
 

 <section class="about section container">
    <div class="home__data">
        <h2 class="home__title">Place Order</h2>
        <form method="post" > 
        <div> 
            <label style="width:100px; display:inline-block;">Name: </label>&nbsp; 
            <input class="home__description" id="name" type="text" name="name"><br>
            <label style="width:100px; display:inline-block;">E-mail: </label>&nbsp;
            <input class="home__description" id="email" type="text" name="email"><br>
            <label style="width:100px; display:inline-block;">Address: </label>&nbsp;
            <input class="home__description" id="address" type="text" name="address"> <br>
            <label style="width:100px; display:inline-block;">City: </label>&nbsp;
            <input class="home__description" id="city" type="text" name="city"><br>
        </div>
            <input class="button1" type="submit" name="submit" value="Place Order"> 
            
        </form>
    </div>
<br><br>

    <?php
    echo "<h2>Order Details:</h2>";
    echo "Name: ".$name;
    echo "<br>";
    echo "Email: ".$email;
    echo "<br>";
    echo "Address: ".$address;
    echo "<br>";
    echo "City: ".$city;
    ?>
 </section>     
    <!--==================== FOOTER ====================-->
    <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content">
                    <a href="#" class="footer__logo">
                        <i class="ri-leaf-line footer__logo-icon"></i> Floweride
                    </a>

                    <h3 class="footer__title">
                        Subscribe to our newsletter <br> to stay update
                    </h3>

                    <div class="footer__subscribe">
                        <input type="email" placeholder="Enter your email" class="footer__input">

                        <button class="button button--flex footer__button">
                            Subscribe
                            <i class="ri-arrow-right-up-line button__icon"></i>
                        </button>
                    </div>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Our Address</h3>

                    <ul class="footer__data">
                        <li class="footer__information">1234 - NUML</li>
                        <li class="footer__information">Khayaban e Johar - H9</li>
                        <li class="footer__information">123-456-789</li>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">Contact Us</h3>

                    <ul class="footer__data">
                        <li class="footer__information">+92 349 5721245</li>
                        
                        <div class="footer__social">
                            <a href="https://www.facebook.com/" class="footer__social-link">
                                <i class="ri-facebook-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" class="footer__social-link">
                                <i class="ri-instagram-line"></i>
                            </a>
                            <a href="https://twitter.com/" class="footer__social-link">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </div>
                    </ul>
                </div>

                <div class="footer__content">
                    <h3 class="footer__title">
                        We accept all credit cards
                    </h3>

                    <div class="footer__cards">
                        <img src="assets/img/card1.png" alt="" class="footer__card">
                        <img src="assets/img/card2.png" alt="" class="footer__card">
                        <img src="assets/img/card3.png" alt="" class="footer__card">
                        <img src="assets/img/card4.png" alt="" class="footer__card">
                    </div>
                </div>
            </div>

            <p class="footer__copy">&#169; NUML. All rigths reserved</p>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="ri-arrow-up-fill scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL ===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>


</body>
</html>