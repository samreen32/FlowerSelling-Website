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

        <title>Responsive Flower Website: Products</title>
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
                            <a href="./aboutus.php" class="nav__link">About</a>
                        </li>
                        <li class="nav__item">
                            <a href="#" class="nav__link active-link">Products</a>
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

     <!--==================== PRODUCTS ====================-->
        <section class="product section container" id="product">
                
            <div style=" z-index: -1;"><img src="assets/img/PProduct.jpg" alt="" class="home__img" 
                style="width:100%; height: 100%;">
               <h1 class="home__title">
                    <div class="centered"><span class="product__data" style=" font-family: Verdana, Geneva, Tahoma, sans-serif; 
                        color: white;"><b>PRODUCTS</b></span>
                        
                    </div>
                </h1>
            </div>
        </section>



            <section class="product section container">
                
                <h2 class="section__title-center">
                    Our Popular<br> Products
                </h2>

                <p class="product__description">
                    Here are some selected flowers from our collection, all are in excellent 
                    feel, shape & has a long life span. Buy and enjoy best quality.
                </p>

                <div class="product__container grid">
                    <!--==================== 1 Product ====================-->
                    <article class="product__card">
                        <div class="product__circle"></div>
                        <details>
                            <summary> 
                                <img src="assets/img/Product-1.png" alt="" class="product__img"></summary>
                                <p>This product is top selling and most favorite among our customers.</p> <br>
                                <!--<form method="post" action="index.php">-->
                                       <a href="./form.php" class="button1">
                                    Buy Now
                                </a>
                                
                        </details><br>
                        <h3 class="product__title">Pink Rose Bouquet</h3>
                        <span class="product__price">Rs 1999</span>

                        <button class="button--flex product__button">
                           
                                <button class="button--flex product__button">
                                <i class="ri-shopping-bag-line"></i>
                   
                        </button>
                    </article>

                    <!--==================== 2 Product ====================-->
                    <article class="product__card">
                        <div class="product__circle"></div>
                        <details>
                            <summary> 
                                <img src="assets/img/Product-2.png" alt="" class="product__img">
                            </summary> 
                            <p>This product is top selling and most favorite among our customers.</p><br>      
                            <a  href="./form.php" class="button1">
                                Buy Now
                            </a>
                        </details><br>
                       
                        <h3 class="product__title">Tulip Flowers</h3>
                        <span class="product__price">Rs 799</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <!--==================== 3 Product ====================-->
                    <article class="product__card">
                        <div class="product__circle"></div>
                        <details>
                            <summary> 
                                <img src="assets/img/Product-3.png" alt="" class="product__img">
                            </summary> 
                            <p>This product is top selling and most favorite among our customers.</p> <br>     
                            <a  href="./form.php" class="button1">
                                Buy Now
                            </a>
                         </details><br>
                       
                        <h3 class="product__title">Special Rose</h3>
                        <span class="product__price">Rs 2999</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <!--==================== 4 Product ====================-->
                    <article class="product__card">
                        <div class="product__circle"></div>
                        <details>
                            <summary> 
                                <img src="assets/img/Product-6.png" alt="" class="product__img">
                            </summary> 
                            <p>This product is top selling and most favorite among our customers.</p><br>      
                            <a  href="./form.php" class="button1">
                                Buy Now
                            </a>
                        </details><br>

                        <h3 class="product__title">Mix Flowers</h3>
                        <span class="product__price">Rs 1899</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <!--==================== 5 Product ====================-->
                    <article class="product__card">
                        <div class="product__circle"></div>
                        <details>
                            <summary> 
                                <img src="assets/img/Product-4.png" alt="" class="product__img">
                            </summary> 
                            <p>This product is top selling and most favorite among our customers.</p><br>      
                            <a  href="./form.php" class="button1">
                                Buy Now
                            </a>
                         </details><br>
                       

                        <h3 class="product__title">Birthday Box</h3>
                        <span class="product__price">Rs 1599</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                    <!--==================== 6 Product ====================-->
                    <article class="product__card">
                        <div class="product__circle"></div>
                        <details>
                            <summary> 
                                <img src="assets/img/Product-5.png" alt="" class="product__img">
                            </summary> 
                            <p>This product is top selling and most favorite among our customers.</p><br> 
                            <a  href="./form.php" class="button1">
                                Buy Now
                            </a>     
                       </details><br>
                        
                        <h3 class="product__title">Yellow Combo</h3>
                        <span class="product__price">Rs 2299</span>

                        <button class="button--flex product__button">
                            <i class="ri-shopping-bag-line"></i>
                        </button>
                    </article>

                   
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