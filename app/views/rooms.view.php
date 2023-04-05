<?php

$test = new Database;
$conn = $test->connect();

$query = "SELECT * FROM Rooms";
$result = $test->query($query);

?>


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
  <title>Rooms - The Yorkshire Inn</title>
</head>

<body>

  <header>

    <div class="contact-info">
      <div class="social-icons">
        <a href="https://www.facebook.com/theyorkshireinn/"><img src="<?=ROOT?>/assets/images/icons/facebook.svg" alt="facebook"></a>
        <a href="https://www.instagram.com/the_yorkshire_inn/"><img src="<?=ROOT?>/assets/images/icons/instagram.svg" alt="instagram"></a>
        <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img src="<?=ROOT?>/assets/images/icons/yelp.svg" alt="yelp"></a>
      </div>
      <div class="phone-number">
        <img class="phone-icon" src="<?=ROOT?>/assets/images/icons/phone.svg" alt="phone">
        <p>315-548-9675</p>
      </div>
    </div>

    <nav class="navbar">
      <div class="logo">
        <a href="<?=ROOT?>">
          <img src="<?=ROOT?>/assets/images/icons/logo.svg" alt="The Yorkshire Inn">
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

  <section class="rooms section-title">
        <h2>Rooms</h2>

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
                    <input class="guests-number" type="number" placeholder="#" min=0 max=6>
                </form>

            </div>
        </div>

        <div class="room-preview">

            <div class="room-preview-img">
                <img src="<?=ROOT?>/assets/images/blue-room/blue8.jpg" alt="Blue Room">
            </div>

            <div class="room-preview-info">
                <h3><?php echo($result[0]-> RoomName);?></h3>
                <p class="room-preview-price">$215 - $230 / night</p>
                <p class="room-preview-description">Sleeps 2 and features a wall of south facing windows overlooking the deck and back yard. 
                    The private bath features an oversized standup shower.
                </p>
                
                <a href="blueroom" class="underline">More info</a>
                <div class="room-preview-icons">
                    <img src="<?=ROOT?>/assets/images/icons/wifi-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/tv-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/wheelchair-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/heat-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/bath-grey.svg" alt="Icon">
                </div>
                <button><a href="#">BOOK NOW</a></button>
            </div>
        </div>

        <div class="room-preview">

            <div class="room-preview-img">
                <img src="<?=ROOT?>/assets/images/bolero-room/bolero3.webp" alt="Bolero Room">
            </div>

            <div class="room-preview-info">
                <h3>Bolero Room</h3>
                <p class="room-preview-price">$215 - $230 / night</p>
                <p class="room-preview-description">The Bolero is our premium, private, romantic suite. It sleeps two in style 
                    and comfort with a king bed, a sitting area and an oversized bath featuring a two person jacuzzi tub and 
                    individual shower.
                </p>
                <a href="boleroroom" class="underline">More info</a>
                <div class="room-preview-icons">
                    <img src="<?=ROOT?>/assets/images/icons/wifi-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/tv-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/heat-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/bath-grey.svg" alt="Icon">
                </div>                
                <button><a href="#">BOOK NOW</a></button>
            </div>
        </div>

        <div class="room-preview">

            <div class="room-preview-img">
                <img src="<?=ROOT?>/assets/images/rose-suite/rose3.webp" alt="Rose Suite">
            </div>

            <div class="room-preview-info">
                <h3>Rose Suite</h3>
                <p class="room-preview-price">$215 - $230 / night</p>
                <p class="room-preview-description">The Rose Suite is a two bedroom suite that sleeps up to 6 individuals. 
                    It also has large windows overlooking the deck and back yard. 
                    It has a second door that opens directly onto the deck. The private bath features an oversized standup shower.
                </p>
                <a href="rosesuite" class="underline">More info</a>
                <div class="room-preview-icons">
                    <img src="<?=ROOT?>/assets/images/icons/wifi-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/tv-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/heat-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/bath-grey.svg" alt="Icon">
                </div>                
                <button><a href="#">BOOK NOW</a></button>
            </div>
        </div>

        <div class="room-preview">

            <div class="room-preview-img">                
                <img src="<?=ROOT?>/assets/images/lodge-suite/lodge9.webp" alt="Lodge Suite">
            </div>

            <div class="room-preview-info">
                <h3>Lodge Suite</h3>
                <p class="room-preview-price">$215 - $230 / night</p>
                <p class="room-preview-description">The Lodge is a two bedroom suite that sleeps up to 6 individuals. 
                    It is trimmed in rough sawn cedar and features a traditonal bath with a tub and shower combination.
                </p>
                <a href="lodgesuite" class="underline">More info</a>
                <div class="room-preview-icons">
                    <img src="<?=ROOT?>/assets/images/icons/wifi-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/tv-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/heat-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/bath-grey.svg" alt="Icon">
                </div>                
                <button><a href="#">BOOK NOW</a></button>
            </div>
        </div>

    </section>

    <footer class="full-bleed">

      <div class="footer-container">

        <div class="footer-socials">
          <p class="footer-title">Follow the Yorkshire Inn</p>
          <div class="footer-socials-icons">
            <a href="https://www.facebook.com/theyorkshireinn/"><img src="<?=ROOT?>/assets/images/icons/facebook-white.svg" alt="facebook"></a>
            <a href="https://www.instagram.com/the_yorkshire_inn/"><img src="<?=ROOT?>/assets/images/icons/instagram-white.svg" alt="instagram"></a>
            <a href="https://www.yelp.com/biz/the-yorkshire-inn-phelps"><img src="<?=ROOT?>/assets/images/icons/yelp-white.svg" alt="yelp"></a>
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