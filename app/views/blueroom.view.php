<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>assets/css/style.css">
    <script src="<?= ROOT ?>assets/js/script.js" defer></script>
    <script src="<?= ROOT ?>assets/js/lightbox-plus-jquery.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?= ROOT ?>assets/images/icons/favicon.png">
    <title>Blue Room - The Yorkshire Inn</title>
</head>

<body>

<header>

    <div class="contact-info">
        <div class="social-icons">
            <a href="https://www.facebook.com/theyorkshireinn/"><img src="<?= ROOT ?>assets/images/icons/facebook.svg"
                        alt="facebook"></a>
            <a href="https://www.instagram.com/the_yorkshire_inn/"><img src="<?= ROOT ?>assets/images/icons/instagram.svg"
                        alt="instagram"></a>
            <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img src="<?= ROOT ?>assets/images/icons/yelp.svg"
                        alt="yelp"></a>
        </div>
        <div class="phone-number">
            <img class="phone-icon" src="<?= ROOT ?>assets/images/icons/phone.svg" alt="phone">
            <p>315-548-9675</p>
        </div>
    </div>

    <nav class="navbar">
        <div class="logo">
            <a href="<?= ROOT ?>">
                <img src="<?= ROOT ?>assets/images/icons/logo.svg" alt="The Yorkshire Inn">
            </a>
        </div>

        <div class="navbar-links">
            <ul>
                <li><a href="rooms">Rooms</a></li>
                <li><a href="history">History</a></li>
                <li><a href="gallery">Gallery</a></li>
                <li><a href="fingerlakes">Finger Lakes</a></li>
                <li><a href="contact">Contact & Policies</a></li>
            </ul>
        </div>
        <img src="<?= ROOT ?>assets/images/icons/menu.svg" alt="menu icon" class="menu-icon">
    </nav>

</header>

<div class="container">

    <section class="blue-room-photos section-title">
        <h2>Photos</h2>
        <div class="blue-room-grid">

            <div class="blue-room-grid-item">
                <a href="<?= ROOT ?>assets/images/blue-room/blue1.webp" data-lightbox="blue-room">
                    <img src="<?= ROOT ?>assets/images/blue-room/blue1.webp" alt="Blue Room">
                </a>
            </div>

            <div class="blue-room-grid-item">
                <a href="<?= ROOT ?>assets/images/blue-room/blue2.webp" data-lightbox="blue-room">
                    <img src="<?= ROOT ?>assets/images/blue-room/blue2.webp" alt="Blue Room">
                </a>
            </div>

            <div class="blue-room-grid-item">
                <a href="<?= ROOT ?>assets/images/blue-room/blue3.webp" data-lightbox="blue-room">
                    <img src="<?= ROOT ?>assets/images/blue-room/blue3.webp" alt="Blue Room">
                </a>
            </div>

            <div class="blue-room-grid-item">
                <a href="<?= ROOT ?>assets/images/blue-room/blue4.webp" data-lightbox="blue-room">
                    <img src="<?= ROOT ?>assets/images/blue-room/blue4.webp" alt="Blue Room">
                </a>
            </div>

            <div class="blue-room-grid-item">
                <a href="<?= ROOT ?>assets/images/blue-room/blue5.webp" data-lightbox="blue-room">
                    <img src="<?= ROOT ?>assets/images/blue-room/blue5.webp" alt="Blue Room">
                </a>
            </div>

            <div class="blue-room-grid-item">
                <a href="<?= ROOT ?>assets/images/blue-room/blue6.webp" data-lightbox="blue-room">
                    <img src="<?= ROOT ?>assets/images/blue-room/blue6.webp" alt="Blue Room">
                </a>
            </div>

            <div class="blue-room-grid-item">
                <a href="<?= ROOT ?>assets/images/blue-room/blue7.webp" data-lightbox="blue-room">
                    <img src="<?= ROOT ?>assets/images/blue-room/blue7.webp" alt="Blue Room">
                </a>
            </div>

            <div class="blue-room-grid-item">
                <a href="<?= ROOT ?>assets/images/blue-room/blue8.jpg" data-lightbox="blue-room">
                    <img src="<?= ROOT ?>assets/images/blue-room/blue8.jpg" alt="Blue Room">
                </a>
            </div>

            <div class="blue-room-grid-item">
                <a href="<?= ROOT ?>assets/images/blue-room/blue9.jpg" data-lightbox="blue-room">
                    <img src="<?= ROOT ?>assets/images/blue-room/blue9.jpg" alt="Blue Room">
                </a>
            </div>

        </div>
    </section>

    <section class="room-features section-title">
        <h2>Room Features</h2>
        <div class="room-features-details">

            <div class="room-features-details-item">
                <p>Bedroom</p>
                <p>Air conditioning</p>
                <p>Unit renovated in July 2015</p>
                <p>Entertainment</p>
                <p>Cable TV</p>
                <p>TV</p>
                <p>Internet</p>
                <p>Free WiFi</p>
            </div>

            <div class="room-features-details-item">
                <p>More</p>
                <p>Daily housekeeping</p>
                <p>Desk</p>
                <p>Iron/ironing board</p>
                <p>View - garden</p>
                <p>Outdoor space</p>
                <p>Balcony</p>
            </div>

            <div class="room-features-details-item">
                <p>Bathroom</p>
                <p>Bathrobes</p>
                <p>Hair dryer</p>
                <p>Private bathroom</p>
                <p>Shower</p>
            </div>

            <div class="room-features-details-item">
                <p>Accessibility</p>
                <p>Wheelchair-width doorways</p>
            </div>

            <div class="room-features-details-item">
                <p>Maximum Occupancy: 2</p>
            </div>
        </div>
        <button><a href="rooms">BOOK NOW</a></button>
    </section>


    <footer class="full-bleed">

        <div class="footer-container">

            <div class="footer-socials">
                <p class="footer-title">Follow the Yorkshire Inn</p>
                <div class="footer-socials-icons">
                    <a href="https://www.facebook.com/theyorkshireinn/"><img
                                src="<?= ROOT ?>assets/images/icons/facebook-white.svg" alt="facebook"></a>
                    <a href="https://www.instagram.com/the_yorkshire_inn/"><img
                                src="<?= ROOT ?>assets/images/icons/instagram-white.svg" alt="instagram"></a>
                    <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img
                                src="<?= ROOT ?>assets/images/icons/yelp-white.svg" alt="yelp"></a>
                </div>
            </div>

            <div class="footer-contact">
                <p class="footer-title">Contact us</p>
                <p>315-548-9675</p>
                <p>innkeeper@theyorkshireinn.com</p>
            </div>

        </div>

        <p class="copyright">© 2023 THE YORKSHIRE INN - ALL RIGHTS RESERVED</p>

    </footer>

</div>


</body>

</html>
