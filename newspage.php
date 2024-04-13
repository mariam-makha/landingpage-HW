<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archive</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php include "variable.php";?>
    <?php include "functions.php";?>
</head>
<body>  
    <header class="header">
        <div class="container">
            <div class="header-flex">
                <img src="assets/headerlogo.png" alt="HLogo">
                <nav class="navigation">
                    <ul class="menu">
<!-- ფუნქცია -->
                        <?php generateNavigationMenu($categories); ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <section class="news-first-section">
            <div class="container">
                <h2 class="secondary-title">Rooms & Rates
                </h2>
                <div class="news-list">
<!-- ფუნქცია -->
                <?php generateNewsCards($newscards); ?>
                </div>
            </div>
        </section>
        <section class="news-second-section">
            <div class="container">
                <h2 class="secondary-title">Gallery</h2>
                <div class="gallery-grid"> 
<!-- ფუნქცია -->
                <?php generateGallery($newscards); ?>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <div class="footer-content">
                <img src="assets/footerlogo.png" alt="flogo">
                <nav class="footer-navigation">
<!-- ფუნქცია -->
                  <?php generateFooterLinks($fLinks); ?>
                </nav>
                <div class="footer-text">
                    <p>Bon Hotels Head Office</p>
<!-- ფუნქცია -->
                    <?php generateContactInformation($fcontact); ?>
                </div>
            </div>
        </div>    
    </footer>
</body>
</html>