<?php
@include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    - primary meta tags
  -->
    <title>For Brake</title>
    <meta name="title" content="Findings with Auto Maintenance & Repair Service">
    <meta name="description" content="This is a vehicle repair html template made by codewithsadee">

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;600;700&family=Mulish&display=swap"
        rel="stylesheet">

    <!-- 
    - material icon font
  -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,600,0,0" />

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/lamborgini.jpg">
    <link rel="preload" as="image" href="./assets/images/hero-bg.jpg">

</head>

<body>
    <header class="header">
        <div class="container">

            <a href="#" class="logo">
                <img src="./assets/images/logo.png" width="128" height="63" alt="Garage home">
            </a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li>
                        <a href="uinter.php" class="navbar-link">user Home</a>
                    </li>
                    <li>
                        <a href="gsearchu.php" class="navbar-link">search garage</a>
                    </li>
                    <li>
                        <a href="services.php" class="navbar-link"> Other Services</a>
                    </li>
                    <li>
                        <a href="logout.php" class="navbar-link">Logout</a>
                    </li>

                </ul>
            </nav>

            <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
                <span class="nav-toggle-icon icon-1"></span>
                <span class="nav-toggle-icon icon-2"></span>
                <span class="nav-toggle-icon icon-3"></span>
            </button>

        </div>
    </header>


    <main>
        <article>

            <!-- 
            - #HERO
          -->

            <section class="hero has-bg-image" aria-label="home"
                style="background-image: url('./assets/images/br2.jpg')">
                <div class="search-container">
                    <h2 class="search-title" style="color: yellow">Find the Garages For Repair brake and get best services</h2>
                    <form action="breakresult.php" method="GET" class="search-form">
                        <input type="text" name="query" class="search-input" placeholder="Search for garages...">
                        <button type="submit" class="search-button">find garage</button>
                    </form>
            </section>
        </article>
    </main>

    <!-- 
    - #FOOTER
  -->

    <footer class="footer">

        <div class="footer-top section">
            <div class="container">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <img src="./assets/images/logo.png" width="128" height="63" alt="autofix home">
                    </a>

                    <p class="footer-text">
                        Rerum necessitatibus saepe eveniet aut et voluptates repudiandae sint et molestiae non
                        recusandae.
                    </p>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <img src="./assets/images/facebook.svg" alt="facebook">
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <img src="./assets/images/instagram.svg" alt="instagram">
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <img src="./assets/images/twitter.svg" alt="twitter">
                            </a>
                        </li>

                    </ul>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="h3">Opening Hours</p>
                    </li>

                    <li>
                        <p class="p">Monday – Saturday</p>

                        <span class="span">12.00 – 14.45</span>
                    </li>

                    <li>
                        <p class="p">Sunday – Thursday</p>

                        <span class="span">17.30 – 00.00</span>
                    </li>

                    <li>
                        <p class="p">Friday – Saturday</p>

                        <span class="span">12.00 – 14.45</span>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="h3">Contact Info</p>
                    </li>

                    <li>
                        <a href="tel:+01234567890" class="footer-link">
                            <span class="material-symbols-rounded">call</span>

                            <span class="span">+01 2 3456 7890</span>
                        </a>
                    </li>

                    <li>
                        <a href="mailto:info@autofix.com" class="footer-link">
                            <span class="material-symbols-rounded">mail</span>

                            <span class="span">info@autofix.com</span>
                        </a>
                    </li>

                    <li>
                        <address class="footer-link address">
                            <span class="material-symbols-rounded">location_on</span>

                            <span class="span">21 King Street Melbourne, 3000, Australia</span>
                        </address>
                    </li>

                </ul>

            </div>

            <img src="./assets/images/footer-shape-3.png" width="637" height="173" loading="lazy" alt="Shape"
                class="shape shape-3 move-anim">

        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright"> Developers are Md.nahid Hosain Likhon and Farhan Bhuiyan.</p>

                <img src="./assets/images/footer-shape-2.png" width="778" height="335" loading="lazy" alt="Shape"
                    class="shape shape-2">

                <img src="./assets/images/footer-shape-1.png" width="805" height="652" loading="lazy" alt="Red Car"
                    class="shape shape-1 move-anim">

            </div>
        </div>

    </footer>





    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>
    
    </body>

    </html>