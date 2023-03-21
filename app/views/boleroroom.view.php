<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap"
        rel="stylesheet">
    <title>Bolero Room - The Yorkshire Inn</title>
</head>

<body>

    <header>

        <div class="contact-info">
            <div class="social-icons">
                <a href="https://www.facebook.com/theyorkshireinn/"><img src="assets/images/icons/facebook.svg"
                        alt="facebook"></a>
                <a href="https://www.instagram.com/the_yorkshire_inn/"><img src="assets/images/icons/instagram.svg"
                        alt="instagram"></a>
                <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img src="assets/images/icons/yelp.svg"
                        alt="yelp"></a>
            </div>
            <div class="phone-number">
                <img class="phone-icon" src="assets/images/icons/phone.svg" alt="phone">
                <p>315-548-9675</p>
            </div>
        </div>

        <nav class="navbar">
            <div class="logo">
                <a href="<?=ROOT?>">
                    <img src="assets/images/icons/logo.svg" alt="The Yorkshire Inn">
                </a>
            </div>

            <div class="navbar-links">
                <ul>
                    <li><a href="rooms">Rooms</a></li>
                    <li><a href="history">History</a></li>
                    <li><a href="gallery">Gallery</a></li>
                    <li><a href="fingerlakes">Fingerlakes</a></li>
                    <li><a href="contact">Contact & Policies</a></li>
                </ul>
            </div>

        </nav>

    </header>

    <div class="container">

        <section class="bolero-room section-title">
            <h2>Bolero Room</h2>

            <div class="calendar full-bleed">

                <div class="arrival">
                    <p>Arrival</p>

                    <form>
                        <input class="date-picker" type="date" >
                    </form>

                </div>

                <div class="departure">
                    <p>Departure</p>

                    <form>
                        <input class="date-picker" type="date" >
                    </form>

                </div>

                <div class="guests">
                    <p>Guests</p>

                    <form>
                        <input class="guests-number" type="number" placeholder="#">
                    </form>

                </div>
            </div>


        </section>

        <section class="bolero-room-photos section-title">
            <h2>Photos</h2>
            <div class="bolero-room-grid">

                <div class="bolero-room-grid-item">
                    <img src="https://placeimg.com/488/488" alt="Bolero Room">
                </div>
                <div class="bolero-room-grid-item">
                    <img src="https://placeimg.com/488/488/landscape" alt="Bolero Room">
                </div>
                <div class="bolero-room-grid-item">
                    <img src="https://placeimg.com/488/488/art" alt="Bolero Room">
                </div>
                <div class="bolero-room-grid-item">
                    <img src="https://placeimg.com/488/488/animals" alt="Bolero Room">
                </div>

                <div class="bolero-room-grid-item">
                    <img src="https://placeimg.com/488/488" alt="Bolero Room">
                </div>
                <div class="bolero-room-grid-item">
                    <img src="https://placeimg.com/488/488/landscape" alt="Bolero Room">
                </div>
                <div class="bolero-room-grid-item">
                    <img src="https://placeimg.com/488/488/art" alt="Bolero Room">
                </div>
                <div class="bolero-room-grid-item">
                    <img src="https://placeimg.com/488/488/animals" alt="Bolero Room">
                </div>
                <div class="bolero-room-grid-item">
                    <img src="https://placeimg.com/488/488" alt="Bolero Room">
                </div>

            </div>
        </section>

        <section class="room-features section-title">
            <h2>Room Features</h2>
            <div class="room-features-details">
                <p>Maximum Occupancy: 2</p>
                <p>Accessibility
                    Wheelchair-width doorways
                </p>
                <p>Bathroom
                    Bathrobes
                    Hair dryer
                    Private bathroom
                    Shower
                </p>
                <p>Bedroom
                    Air conditioning
                    Unit renovated in July 2015
                    Entertainment
                    Cable TV
                    TV
                    Internet
                    Free WiFi
                </p>
                <p>More
                    Daily housekeeping
                    Desk
                    Iron/ironing board
                    View - garden
                    Outdoor space
                    Balcony
                </p>
            </div>
            <button><a href="rooms">BOOK NOW</a></button>
        </section>


        <footer class="full-bleed">

            <div class="footer-container">

                <div class="footer-socials">
                    <p class="footer-title">Follow the Yorkshire Inn</p>
                    <div class="footer-socials-icons">
                        <a href="https://www.facebook.com/theyorkshireinn/"><img
                                src="assets/images/icons/facebook-white.svg" alt="facebook"></a>
                        <a href="https://www.instagram.com/the_yorkshire_inn/"><img
                                src="assets/images/icons/instagram-white.svg" alt="instagram"></a>
                        <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img
                                src="assets/images/icons/yelp-white.svg" alt="yelp"></a>
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