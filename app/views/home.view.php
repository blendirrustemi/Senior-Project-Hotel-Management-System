<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>assets/css/style.css">
    <script src="<?=ROOT?>assets/js/script.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="<?=ROOT?>assets/images/icons/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <title>The Yorkshire Inn</title>
</head>

<body>

<header>

    <div class="contact-info">
        <div class="social-icons">
            <a href="https://www.facebook.com/theyorkshireinn/"><img src="<?=ROOT?>assets/images/icons/facebook.svg" alt="facebook"></a>
            <a href="https://www.instagram.com/the_yorkshire_inn/"><img src="<?=ROOT?>assets/images/icons/instagram.svg" alt="instagram"></a>
            <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img src="<?=ROOT?>assets/images/icons/yelp.svg" alt="yelp"></a>
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

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Phelps, New York</h1>
            <h2>Stay with us in comfort at Yorkshire Inn</h2>
            <button><a href="rooms">BOOK NOW</a></button>
        </div>
        <img src="<?=ROOT?>assets/images/homepage/yorkshire.webp" alt="Yorkshire Inn">
    </section>

    <section class="amenities section-title">
        <h2>Amenities</h2>
        <p>We offer a variety of amenities to make your stay as comfortable as possible.
            Each room has its own private bathroom and cable TV. There is free WiFi throughout the house as
            well as on the back deck. All guest rooms are on the first floor with no steps or stairs
            from the large parking lot to any of the rooms. There is central heating air conditioning in each room.
            We proudly provide low waste toiletries in all the rooms from <span class="underline"><a href="https://marillas.com/">Marilla's Mindful Supplies</a></span>
        </p>

        <div class="amenities-icons">

            <div class="amenities-icon-box">
                <img src="<?=ROOT?>assets/images/icons/wifi.svg" alt="Icon">
                <p>WiFi</p>
            </div>

            <div class="amenities-icon-box">
                <img src="<?=ROOT?>assets/images/icons/tv.svg" alt="Icon">
                <p>TV</p>
            </div>

            <div class="amenities-icon-box">
                <img src="<?=ROOT?>assets/images/icons/wheelchair.svg" alt="Icon">
                <p>Accesibility</p>
            </div>

            <div class="amenities-icon-box">
                <img src="<?=ROOT?>assets/images/icons/heat.svg" alt="Icon">
                <p>Heating</p>
            </div>

            <div class="amenities-icon-box">
                <img src="<?=ROOT?>assets/images/icons/bath.svg" alt="Icon">
                <p>Bathroom</p>
            </div>

            <div class="amenities-icon-box">
                <img src="<?=ROOT?>assets/images/icons/eco.svg" alt="Icon">
                <p>Eco-friendly</p>
            </div>

        </div>

    </section>

    <section class="available-rooms section-title">
        <h2>Available Rooms</h2>
        
        <div class="available-rooms-image-container">
            <div class="row">
                <div class="col">
                    <img src="<?=ROOT?>assets/images/homepage/home-blue-room.png">
                    <div class="rectangle"><h3>Blue Room</h3></div>
                    <a href="blueroom"></a>
                </div>
                <div class="col">
                    <img src="<?=ROOT?>assets/images/homepage/home-bolero-room.png">
                    <div class="rectangle"><h3>Bolero Room</h3></div>
                    <a href="boleroroom"></a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <img src="<?=ROOT?>assets/images/homepage/home-rose-suite.png">
                    <div class="rectangle"><h3>Rose Suite</h3></div>
                    <a href="rosesuite"></a>
                </div>
                <div class="col">
                    <img src="<?=ROOT?>assets/images/homepage/home-lodge-suite.png">
                    <div class="rectangle"><h3>Lodge Suite</h3></div>
                    <a href="lodgesuite"></a>
                </div>
            </div>
        </div>

    </section>

    <section class="dining section-title">
        <h2>Dining</h2>
        <p>A freshly cooked farm to table breakfast served every morning. We use locally sourced and organic produce, eggs and meat when they are available.
            If you let us know of any special dietary requests upfront we will be more than happy to accommodate. There is freshly brewed coffee and tea available
            first thing in the morning, and we have Keurig coffee machines available throughout the day.
            We are trying to be kind to the environment and compost with <span class="underline"><a href="https://fingerlakescompost.com">Finger Lakes Compost</a></span>
        </p>
    </section>

    <section class="reviews section-title full-bleed">
        <h2>Reviews</h2>
        <p class="bold">97% RECOMMEND</p>
        <div class="stars">
            <img src="<?=ROOT?>/assets/images/icons/star.svg" alt="star">
            <img src="<?=ROOT?>/assets/images/icons/star.svg" alt="star">
            <img src="<?=ROOT?>/assets/images/icons/star.svg" alt="star">
            <img src="<?=ROOT?>/assets/images/icons/star.svg" alt="star">
        </div>

        <div class="swiper" id="swiper-1">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            
                <div class="review-box">
                    <div class="review-box-top">
                        <img src="<?=ROOT?>/assets/images/homepage/review-1.png" alt="review">
                        <p>"I recently attended the
                        Women's Wellness Weeke..."
                        </p>
                    </div>
                    <div class="review-box-bottom">
                        <a href="https://maps.google.com/maps?cid=16425790188992418738"><img src="<?=ROOT?>/assets/images/icons/google-tile.svg" alt="google" class="review-icon"></a>
                        <p class="bold">Loryn Payne</p>
                        <p>2/8/2023</p>
                    </div>
                </div>

            </div>

            <div class="swiper-slide">
            
                <div class="review-box">
                    <div class="review-box-top">
                        <img src="<?=ROOT?>/assets/images/homepage/review-2.png" alt="review">
                        <p>This customer did not write a review.</p>
                    </div>
                    <div class="review-box-bottom">
                        <a href="https://maps.google.com/maps?cid=16425790188992418738"><img src="<?=ROOT?>/assets/images/icons/google-tile.svg" alt="google" class="review-icon"></a>
                        <p class="bold">Adam Zeger</p>
                        <p>2/7/2023</p>
                    </div>
                </div>

            </div>

            <div class="swiper-slide">
                
                <div class="review-box">
                    <div class="review-box-top">
                        <img src="<?=ROOT?>/assets/images/homepage/review-3.png" alt="review">
                        <p>"Beautiful. Great food and
                        fantastic service. The ow..."
                        </p>
                    </div>
                    <div class="review-box-bottom">
                        <a href="https://maps.google.com/maps?cid=16425790188992418738"><img src="<?=ROOT?>/assets/images/icons/google-tile.svg" alt="google" class="review-icon"></a>
                        <p class="bold">Karen McCarrick</p>
                        <p>12/15/2022</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="review-box">
                    <div class="review-box-top">
                        <img src="<?=ROOT?>/assets/images/homepage/review-5.png" alt="review">
                        <p>"This charming and historic
                        brick inn is a very comfort..."
                        </p>
                    </div>
                    <div class="review-box-bottom">
                        <a href="https://maps.google.com/maps?cid=16425790188992418738"><img src="<?=ROOT?>/assets/images/icons/google-tile.svg" alt="google" class="review-icon"></a>
                        <p class="bold">Kevin Quinlan</p>
                        <p>10/30/2022</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="review-box">
                    <div class="review-box-top">
                        <img src="<?=ROOT?>/assets/images/homepage/review-6.png" alt="review">
                        <p>"Very quaint and lovely B&B.
                        The owners were very kin..."
                        </p>
                    </div>
                    <div class="review-box-bottom">
                        <a href="https://maps.google.com/maps?cid=16425790188992418738"><img src="<?=ROOT?>/assets/images/icons/google-tile.svg" alt="google" class="review-icon"></a>
                        <p class="bold">Martha Comin</p>
                        <p>10/8/2022</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="review-box">
                    <div class="review-box-top">
                        <img src="<?=ROOT?>/assets/images/homepage/review-7.png" alt="review">
                        <p>"Everything was excellent.
                        The place was nice, the pe..."
                        </p>
                    </div>
                    <div class="review-box-bottom">
                        <a href="https://maps.google.com/maps?cid=16425790188992418738"><img src="<?=ROOT?>/assets/images/icons/google-tile.svg" alt="google" class="review-icon"></a>
                        <p class="bold">José Martínez</p>
                        <p>10/7/2022</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="review-box">
                    <div class="review-box-top">
                        <img src="<?=ROOT?>/assets/images/homepage/review-8.png" alt="review">
                        <p>"My fiancé and I stayed here
                        for a little 2 day getaway...."
                        </p>
                    </div>
                    <div class="review-box-bottom">
                        <a href="https://maps.google.com/maps?cid=16425790188992418738"><img src="<?=ROOT?>/assets/images/icons/google-tile.svg" alt="google" class="review-icon"></a>
                        <p class="bold">Kaylee Brosius</p>
                        <p>8/23/2022</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="review-box">
                    <div class="review-box-top">
                        <img src="<?=ROOT?>/assets/images/homepage/review-9.png" alt="review">
                        <p>"The location of the Inn was
                        convenient to get to the Fi..."
                        </p>
                    </div>
                    <div class="review-box-bottom">
                        <a href="https://maps.google.com/maps?cid=16425790188992418738"><img src="<?=ROOT?>/assets/images/icons/google-tile.svg" alt="google" class="review-icon"></a>
                        <p class="bold">Suchi Amritkumar</p>
                        <p>8/23/2022</p>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="review-box">
                    <div class="review-box-top">
                        <img src="<?=ROOT?>/assets/images/homepage/review-4.png" alt="review">
                        <p>"What a wonderful place for
                        a quick getaway. Micah is..."
                        </p>
                    </div>
                    <div class="review-box-bottom">
                        <a href="https://maps.google.com/maps?cid=16425790188992418738"><img src="<?=ROOT?>/assets/images/icons/google-tile.svg" alt="google" class="review-icon"></a>
                        <p class="bold">Marie Burton</p>
                        <p>8/15/2022</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="swiper-pagination"></div>

    </section>

    <section class="before-you-book section-title">
        <h2>Before You Book</h2>
        <p>We want you to be as comfortable as possible during your stay and in order to do that we ask you please let us know prior to booking if you have any questions or concerns.
            You can do that by calling or emailing the Inn directly.
            We do try to accommodate all dietary needs or restrictions but do need to know of them in advance of your stay.
            We also have pets, a cat and a dog, that live in the Inn as this is our home as well. If you have any allergies or
            concerns about the animals we highly recommend you call us prior to booking or consider other accommodations.
        </p>
        <button><a href="contact">CONTACT</a></button>
    </section>

    <section class="home-call-to-action section-title">
        <div class="home-call-to-action-left">
            <img src="<?=ROOT?>assets/images/homepage/food.webp" alt="food">
        </div>

        <div class="home-call-to-action-right">
            <div class="home-call-to-action-right-details">
                <h2>Welcome to Your Home Away From Home at The Yorkshire Inn!</h2>
                <button><a href="rooms">BOOK NOW</a></button>
            </div>
        </div>
    </section>

    <section class="newsletter section-title">
        <h2>Stay Connected with Yorkshire Inn</h2>
        <p>Be the first to hear about local events and new amenities.</p>

        <!--<form action="">
            <input type="email" name="" id="" placeholder="Email">
            <button><a href="#">SUBSCRIBE</a></button>
        </form> -->
    </section>


    <footer class="full-bleed">

        <div class="footer-container">

            <div class="footer-socials">
                <p class="footer-title">Follow the Yorkshire Inn</p>
                <div class="footer-socials-icons">
                    <a href="https://www.facebook.com/theyorkshireinn/"><img src="<?=ROOT?>assets/images/icons/facebook-white.svg" alt="facebook"></a>
                    <a href="https://www.instagram.com/the_yorkshire_inn/"><img src="<?=ROOT?>assets/images/icons/instagram-white.svg" alt="instagram"></a>
                    <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img src="<?=ROOT?>assets/images/icons/yelp-white.svg" alt="yelp"></a>
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
<script>
const swiper = new Swiper('.swiper', {
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        // When screen width is less than or equal to 640px
        600: {
            slidesPerView: 1,
            slidesPerGroup: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                type: 'bullets'
            },
        },
        900: {
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                type: 'bullets'
            },
        },
        1100: {
            slidesPerView: 3,
            slidesPerGroup: 3,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                type: 'bullets'
            },
        },
    },
});
</script>
</html>
