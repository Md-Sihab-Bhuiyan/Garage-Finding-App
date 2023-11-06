<?php
@include 'config.php';

if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    $sql = "SELECT name, gname, location, pnumber, email FROM garage_info WHERE (location LIKE '%$search_query%' AND b_repair = 'y') OR (gname LIKE '%$search_query%' AND t_repair = 'y')";

    $result = $conn->query($sql);
}

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
                        <a href="gsearch.php" class="navbar-link">Search Garage</a>
                    </li>

                    <li>
                        <a href="#" class="navbar-link">Car Wash</a>
                    </li>

                    <li>
                        <a href="services.php" class="navbar-link"> Other Services</a>
                    </li>

                    <li>
                        <a href="about.php" class="navbar-link">About</a>
                    </li>

                    <li>
                        <a href="user.php" class="navbar-link">Account</a>
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
            <!-- HERO Section -->
            <section class="hero has-bg-image" aria-label="home" style="background-image: url('./assets/images/b3.jpg')">
            <div class="search-results-container">
                    <h2 class="search-title">Search Results"<?php echo htmlspecialchars($search_query); ?>" for Battery repair </h2>

                    <?php
                    if (isset($result) && $result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<div class="result-item">';
                            echo '<h2>Owner Name: ' . htmlspecialchars($row['name']) . '</h2>';
                            echo '<p>Garage Name: ' . htmlspecialchars($row['gname']) . '</p>';
                            echo '<p>Location: ' . htmlspecialchars($row['location']) . '</p>';
                            echo '<p>Phone Number: ' . htmlspecialchars($row['pnumber']) . '</p>';
                            echo '<p>Email: ' . htmlspecialchars($row['email']) . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p class="no-results">No results found.</p>';
                    }
                    ?>
                </div>
            </section>
            <!-- 
        - #WORK
      -->

            <section class="section work" aria-labelledby="work-label">
                <div class="container">

                    <p class="section-subtitle :light" id="work-label">Our Work</p>

                    <h2 class="h2 section-title">Latest projects we have done</h2>

                    <ul class="has-scrollbar">

                        <li class="scrollbar-item">
                            <div class="work-card">

                                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                                    <img src="./assets/images/work-1.jpg" width="350" height="406" loading="lazy"
                                        alt="Engine Repair" class="img-cover">
                                </figure>

                                <div class="card-content">
                                    <p class="card-subtitle">Auto Repair</p>

                                    <h3 class="h3 card-title">Engine Repair</h3>

                                    <a href="#" class="card-btn">
                                        <span class="material-symbols-rounded">arrow_forward</span>
                                    </a>
                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="work-card">

                                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                                    <img src="./assets/images/work-2.jpg" width="350" height="406" loading="lazy"
                                        alt="Car Tyre change" class="img-cover">
                                </figure>

                                <div class="card-content">
                                    <p class="card-subtitle">Auto Repair</p>

                                    <h3 class="h3 card-title">Car Tyre change</h3>

                                    <a href="#" class="card-btn">
                                        <span class="material-symbols-rounded">arrow_forward</span>
                                    </a>
                                </div>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="work-card">

                                <figure class="card-banner img-holder" style="--width: 350; --height: 406;">
                                    <img src="./assets/images/work-3.jpg" width="350" height="406" loading="lazy"
                                        alt="Battery Adjust" class="img-cover">
                                </figure>

                                <div class="card-content">
                                    <p class="card-subtitle">Auto Repair</p>

                                    <h3 class="h3 card-title">Battery Adjust</h3>

                                    <a href="#" class="card-btn">
                                        <span class="material-symbols-rounded">arrow_forward</span>
                                    </a>
                                </div>

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