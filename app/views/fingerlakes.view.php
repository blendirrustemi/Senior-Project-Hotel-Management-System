<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOT?>assets/css/style.css">
    <script src="<?=ROOT?>assets/js/script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?=ROOT?>assets/images/icons/favicon.png">
    <title>Fingerlakes - The Yorkshire Inn</title>
</head>

<body>

    <header>

        <div class="contact-info">
            <div class="social-icons">
                <a href="https://www.facebook.com/theyorkshireinn/"><img src="<?=ROOT?>assets/images/icons/facebook.svg"
                        alt="facebook"></a>
                <a href="https://www.instagram.com/the_yorkshire_inn/"><img src="<?=ROOT?>assets/images/icons/instagram.svg"
                        alt="instagram"></a>
                <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img src="<?=ROOT?>assets/images/icons/yelp.svg"
                        alt="yelp"></a>
            </div>
            <div class="phone-number">
                <img class="phone-icon" src="<?=ROOT?>assets/images/icons/phone.svg" alt="phone">
                <p>315-548-9675</p>
            </div>
        </div>

        <nav class="navbar">
            <div class="logo">
                <a href="<?=ROOT?>">
                    <img src="<?=ROOT?>assets/images/icons/logo.svg" alt="The Yorkshire Inn">
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
            <img src="<?=ROOT?>assets/images/icons/menu.svg" alt="menu icon" class="menu-icon">
        </nav>

    </header>


    <div class="container">

        <section class="fingerlakes section-title">
            <h2>Finger Lakes</h2>
            <img src="<?=ROOT?>assets/images/fingerlakes/fingerlakes.webp" alt="Fingerlakes">
            <p>The Finger Lakes Region is known for many artisan vineyards, particularly its world-renowned Rieslings.
                The region also boasts an impressive list of craft breweries, distilleries, and hard-cider producers.
                New York, by the way, is one of the largest apple-growing states in the country, second only to the
                state of Washington. The area offers activities for all ages. From the Glenn H. Curtiss Aviation Museum
                to the George Eastman House and the Rochester Children's Museum, museums make the perfect day trip. If
                you prefer to spend your time outdoors, there are plenty of hiking and biking trails and places to go
                boating or fishing on the lakes. A local favorite is exploring the gorge trail in Watkins Glen State
                Park, which has no less than nineteen waterfalls!
            </p>
            <button><a href="rooms">BOOK A STAY AT THE YORKSHIRE INN</a></button>
            <div class="did-you-know">
                <h2>Did you know?</h2>
                <p>The Finger Lakes District of New York State was named the Top Wine Region in the United States in a 2018 reader poll by USA Today.                    
                </p>
            <button><a href="https://www.newyorkupstate.com/drinks/2018/08/finger_lakes_named_americas_top_wine_region_in_usa_today_poll.html">FIND OUT MORE</a></button>
            </div>
        </section>

        <footer class="full-bleed">

            <div class="footer-container">

                <div class="footer-socials">
                    <p class="footer-title">Follow the Yorkshire Inn</p>
                    <div class="footer-socials-icons">
                        <a href="https://www.facebook.com/theyorkshireinn/"><img
                                src="<?=ROOT?>assets/images/icons/facebook-white.svg" alt="facebook"></a>
                        <a href="https://www.instagram.com/the_yorkshire_inn/"><img
                                src="<?=ROOT?>assets/images/icons/instagram-white.svg" alt="instagram"></a>
                        <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img
                                src="<?=ROOT?>assets/images/icons/yelp-white.svg" alt="yelp"></a>
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