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

        <title>Responsive Flower Website: About Us</title>
    </head>

    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <i class="ri-leaf-line nav__logo-icon"></i> Floweride
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="./index.php" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link active-link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="./products.php" class="nav__link">Products</a>
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



        <main class="main">        
            <!--==================== ABOUT ====================-->
            <section class="about section container" id="about">
                
                <div style=" z-index: -1;"><img src="assets/img/slider1.jpg" alt="" class="about__img" style="width:100%; height: 100%;">
                   <h1 class="home__title">
                        <div class="centered"><span class="about__data" style=" font-family: Verdana, Geneva, Tahoma, sans-serif; 
                            color: white;"><b>ABOUT US</b></span>
                        </div>
                    </h1>
                </div>
            </section>

<!--==================== Our History ====================-->
<section class="about section container" id="about">
    <div class="home__data">
        <div class="section__title about__title">
            <span class="about__data" style=" font-family: 
            Verdana, Geneva, Tahoma, sans-serif; color: white;"><b>Our History</b>
            </span>
        </div>
        <p class="about__description">
            <p>Started in 2010, Floweride quickly established itself as a culinary icon par excellence in Hong Kong. With its unique brand of world online fusion Florist shop that can be found nowhere else, it enjoys patronage from the A-list Florist shop in Hong Kong.  Featuring four of the best three-star Florists, Designers in the world, you never know what will arrive on your door step the next time you visit us.</p>
            <p>The shop traces its humble beginnings to <em>The Florist Shop</em>, a successful chain started by our CEO, Ms. Bella Pan, that featured for the first time the world's best flower in a bucket.</p>
        </p>
    </div>
</section>



<!--==================== About Us Main ====================-->
            <section class="about section container">
                <div class="about__container grid">
                    <img src="assets/img/Bd_3.jpg" alt="" class="about__img">

                    <div class="about__data">
                        <h2 class="section__title about__title">
                            Who we really are & <br> why choose us
                        </h2>

                        <p class="about__description">
                            We have over 4000+ unbiased reviews and our customers 
                            trust our flowers designs and delivery service every time
                        </p>

                        <div class="about__details">
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always deliver on time.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We give you guides to design your customized bouquet.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                We always come over for a check-up after sale.
                            </p>
                            <p class="about__details-description">
                                <i class="ri-checkbox-fill about__details-icon"></i>
                                100% money back guaranteed.
                            </p>
                        </div>

                        <a href="./products.html" class="button--link button--flex">
                            Shop Now <i class="ri-arrow-right-down-line button__icon"></i>
                        </a>
                    </div>
                </div>
            </section>


 <!--==================== Our Team ====================-->
       
 <section class="steps section container">
    <div class="steps__bg">
        <h2 class="section__title-center steps__title">
            OUR WONDERFUL TEAM
        </h2>

        <div class="steps__container grid">
            <div class="steps__card">
                    <div class="steps__card-number">01</div>
                    <img src="assets/img/one_member.jpg" alt="" class="about__img" style="margin-left: 10px;">
                    <h3 class="steps__card-title">Founder</h3>
                    <p class="steps__card-description">
                        Bloom like a Flower unfold your beauty.
                    </p>
        
            </div>
            <div class="steps__card">
                <div class="steps__card-number">02</div>
                <img src="assets/img/third_member.jpg" alt="" class="about__img" style="margin-left: 10px;">
                <h3 class="steps__card-title">Florist</h3>
                <p class="steps__card-description">
                   A Flower does not compete with other Flower, it just bloom.
                </p>
            </div>

            <div class="steps__card">
                <div class="steps__card-number">03</div>
                <img src="assets/img/two_member.jpg" alt="" class="about__img" style="margin-left: 10px;">
                <h3 class="steps__card-title">Designer</h3>
                <p class="steps__card-description">
                    Designing flowers is just as experiencing nature.
                </p>
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