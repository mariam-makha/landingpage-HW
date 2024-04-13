<?php
function generateNavigationMenu($categories) {
    foreach ($categories as $category) {
        echo '<li class="theme">
                <a href="'.$category['link'].'" class="nav-link">'.$category['name'].'</a>
                <ul class="subcategory">';
        foreach ($category['sub'] as $subcategory) {
            echo '<li class="subcategory">'.$subcategory['name'].'</li>';
        }
        echo '</ul>
            </li>';
    }
};

function generateRoomsGallery($roomcards) {
    foreach ($roomcards as $roomcard) {
        echo '<div class="rooms-card">
                <img src="'.$roomcard['image'].'" alt="img1">
                <div class="overlay"></div>
                <div class="card-content">
                    <h3 class="card-title">'.$roomcard['title'].'</h3>
                    <a href="#" class="button button-small">'.$roomcard['button'].'</a>
                </div>
            </div>';
    }
};

function generateFooterLinks($fLinks) {
    foreach ($fLinks as $link) {
        echo '<a href="'.$link['link'].'" class="footer-nav-links">'.$link['text'].'</a>';
    }
};

function generateContactInformation($fcontact) {
    foreach ($fcontact as $contact) {
        echo '<a href="'.$contact['link'].'">'.$contact['text'].'</a>';
    }
};

function generateNewsCards($newscards) {
    foreach ($newscards as $card) {
        echo '
        <div class="news-card">
            <img src="' . $card['image'] . '" alt="img5">
            <div class="news-card-content">
                <h3 class="card-title">' . $card['title'] . '</h3>
                <p class="card-title">' . $card['description'] . '</p>
                <a href="#" class="button button-small">' . $card['button'] . '</a>
            </div>
        </div>';
    }
};
function generateGallery($newscards) {
    foreach ($newscards as $image) {
        echo '<img src="' . $image['image'] . '" alt="">';
    }
};
?>