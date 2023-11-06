<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- 
    - primary meta tags
  -->
    <title>Garage Findings</title>
    <meta name="title" content="Findings with Auto Maintenance & Repair Service">
    <meta name="description" content="This is a vehicle repair html template made by codewithsadee">

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

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

    <!-- 
    - #HEADER
  -->

    <header class="header">
        <div class="container">

            <a href="#" class="logo">
                <img src="./assets/images/logo.png" width="128" height="63" alt="Garage home">
            </a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li>
                        <a href="ainter.php" class="navbar-link">Home</a>
                    </li>

                    <li>
                        <a href="gsearch.php" class="navbar-link" >Search Garage</a>
                    </li>

                    <li>
                        <a href="cwash.php" class="navbar-link" >Car Wash</a>
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
        - #SERVICE
      -->

            <section class="section service has-bg-image" aria-labelledby="service-label"
                style="background-image: url('./assets/images/g4.jpg')">
                <div class="container">

                    <p class="section-subtitle :light" id="service-label">Our services</p>

                    <h2 class="h2 section-title" style=" color: red">We Provide Great Services For your Vehicle</h2>

                    <ul class="service-list">

                        <li>
                            <div class="service-card">

                                <figure class="card-icon">
                                    <img src="./assets/images/services-1.png" width="110" height="110" loading="lazy"
                                        alt="Engine Repair">
                                </figure>

                                <h3 class="h3 card-title">Engine Repair</h3>

                                <p class="card-text">
                                    We are always responsible towards our servise. 
                                </p>
                                <a href="engine.php" class="btn">
                        <span class="span">SEARCH</span>

                        <span class="material-symbols-rounded">arrow_forward</span>
                    </a>


                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <figure class="card-icon">
                                    <img src="./assets/images/services-2.png" width="110" height="110" loading="lazy"
                                        alt="Brake Repair">
                                </figure>

                                <h3 class="h3 card-title">Brake Repair</h3>

                                <p class="card-text">
                                We are always responsible towards our servise. 
                                </p>

                                <a href="break.php" class="btn">
                        <span class="span">SEARCH</span>

                        <span class="material-symbols-rounded">arrow_forward</span>
                    </a>



                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <figure class="card-icon">
                                    <img src="./assets/images/services-3.png" width="110" height="110" loading="lazy"
                                        alt="Tire Repair">
                                </figure>

                                <h3 class="h3 card-title">Tire Repair</h3>

                                <p class="card-text">
                                We are always responsible towards our servise. 
                                </p>

                                <a href="tire.php" class="btn">
                        <span class="span">SEARCH</span>

                        <span class="material-symbols-rounded">arrow_forward</span>
                    </a>
                            </div>
                        </li>

                        <li>
                            <div class="service-card">

                                <figure class="card-icon">
                                    <img src="./assets/images/services-4.png" width="110" height="110" loading="lazy"
                                        alt="Battery Repair">
                                </figure>

                                <h3 class="h3 card-title">Battery Repair</h3>

                                <p class="card-text">
                                We are always responsible towards our servise. 
                                </p>

                                <a href="batary.php" class="btn">
                        <span class="span">SEARCH</span>

                        <span class="material-symbols-rounded">arrow_forward</span>
                    </a>

                            </div>
                        </li>

                        <li class="service-banner">
                            <img src="./assets/images/services-5.png" width="646" height="380" loading="lazy"
                                alt="Red Car" class="move-anim">
                        </li>

                        <li>
                            <div class="service-card">

                                <figure class="card-icon">
                                    <img src="./assets/images/services-6.png" width="110" height="110" loading="lazy"
                                        alt="Steering Repair">
                                </figure>

                                <h3 class="h3 card-title">Steering Repair</h3>

                                <p class="card-text">
                                We are always responsible towards our servise. 
                                </p>

                                <a href="steering.php" class="btn">
                        <span class="span">SEARCH</span>

                        <span class="material-symbols-rounded">arrow_forward</span>
                    </a>


                            </div>
                        </li>
                    </ul>

                </div>
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

                <p class="copyright">Developers are Md.nahid Hosain Likhon and Farhan Bhuiyan.</p>

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