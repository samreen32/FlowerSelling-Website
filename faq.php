<!DOCTYPE html>
    <html lang="en">
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
                            <a href="./products.php" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link active-link">FAQs</a>
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

        <main class="main">
      <!--==================== QUESTIONS ====================-->
 <section class="question section container" id="faqs">
                
            <div style=" z-index: -1;"><img src="assets/img/Slider3.jpg" alt="" class="home__img" 
                style="width:100%; height: 100%;">
               <h1 class="home__title">
                    <div class="centered"><span class="product__data" style=" font-family: Verdana, Geneva, Tahoma, sans-serif; 
                        color: white;"><b>FAQS</b></span>
                        
                    </div>
                </h1>
            </div>
        </section>




            <section class="questions section">
                <h2 class="section__title-center questions__title container">
                    Some common questions <br> were often asked
                </h2>

                <div class="questions__container container grid">
                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How far in advance do I need to book my wedding flowers?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    You need to book an appointment with our consultant designer a day before.
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Can you get flowers delivered same day?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    The answer is Yes! we offer same day delivery but if you need flowers more urgently we offer same hour delivery. 
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    What areas do you deliver to?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    We deliver all over the country.
                                  
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="questions__group">
                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    Is the arrangement in the photo exactly what will be delivered?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Not exactly,these are just sample images but the theme and color combo will be the same. 
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    I'd like a custom order - what do I do?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    Fantastic, we can certainly do custom orders, please note we are limited to seasonality of Flowers and Availability of stock, but don�t worry, we�ll help you to get the best bouquet for you, or your loved one!
                                </p>
                            </div>
                        </div>

                        <div class="questions__item">
                            <header class="questions__header">
                                <i class="ri-add-line questions__icon"></i>
                                <h3 class="questions__item-title">
                                    How do I make changes to my Order?
                                </h3>
                            </header>

                            <div class="questions__content">
                                <p class="questions__description">
                                    The best way to make a change is to email us. Please note if you are making a late change, we may not be able to make adjustments.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

 </main>

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