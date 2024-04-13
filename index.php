<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BonHotels</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php require "variable.php";?>
    <?php include "functions.php";?>
</head>
</body>
</html>
<body>  
    <header class="header">
        <div class="container">
            <div class="header-flex">
                <img src="assets/headerlogo.png" alt="HLogo">
                <nav class="navigation">
                    <ul class="menu">
                    <?php generateNavigationMenu($categories); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="first_section" id="first-section">
            <div class="first-section-content">
                <h1 class="main-title">WELCOME TO BON HOTEL</h1>
                <p class="description">Good people. Good thinking. Good feeling.</p>
                <a href="#" class="button">EXPLORE</a>
            </div>
        </section>
        <section class="second-section" id="second-section">
            <div class="container">
                <h2 class="secondary-title">
                    Rooms & Rates
                </h2>
                <div class="rooms-gallery">
                <?php generateRoomsGallery($roomcards); ?>
                </div>
            </div>
        </section>
        <section class="third-section" id="third-section">
            <div class="container">
                <div class="contact-us">
                    <h2 class="secondary-title">
                        Get a room already!
                    </h2>
                    <a href="#" class="button">
                        Book Now
                    </a>
                </div>
            </div>
        </section>
    </main>  
    <footer>    
        <div class="container">
            <div class="footer-content">
                <img src="assets/footerlogo.png" alt="flogo">
                <nav class="footer-navigation">
                  <?php generateFooterLinks($fLinks); ?>
                </nav>
                <div class="footer-text">
                    <p>Bon Hotels Head Office</p>
                    <?php generateContactInformation($fcontact); ?>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>