<?php

$db = new Database;
$conn = $db->connect();

$submit_btn = isset($_POST['submit']);




$arrive_date = $_POST['arrive_date'];
$depart_date = $_POST['depart_date'];
$guest_num = $_POST['guest_num'];


$query = "SELECT * FROM Rooms where RoomID not in(SELECT RoomID from Bookings WHERE CheckInDate < '$depart_date' AND CheckOutDate > '$arrive_date')";
$result = $db->query($query);

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

<body>`

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

                <form method="POST" action="">
                <p>Arrival</p>
                    <input class="date-picker" name="arrive_date" type="date" >
                <p>Departure</p>
                    <input class="date-picker departure" name="depart_date" type="date" >
                <p>Guests</p>
                    <input class="guests-number guests" type="number" name="guest_num" placeholder="#" min=0 max=6>

                    <button class="login-button" name="submit" type="submit">Search Rooms</button>
                </form>

            </div>

        </div>

      <?php foreach ($result as $row): ?>

        <div class="room-preview">

            <div class="room-preview-img">
                <img src="<?=ROOT?><?=$row->Picture?>" alt="<?=$row->RoomName?>">
            </div>

            <div class="room-preview-info">
                <h3><?=$row->RoomName?></h3>
                <p class="room-preview-price">$<?=$row->PricePerNight?>/ night</p>
                <p class="room-preview-description"><?=$row->Description?>
                </p>

                <a href="blueroom" class="underline">More info</a>
                <div class="room-preview-icons">
                    <img src="<?=ROOT?>/assets/images/icons/wifi-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/tv-grey.svg" alt="Icon">
                    <?php if($row->RoomName == "Blue Room"): ?>
                        <img src="<?=ROOT?>/assets/images/icons/wheelchair-grey.svg" alt="Icon">
                    <?php endif; ?>
                    <img src="<?=ROOT?>/assets/images/icons/heat-grey.svg" alt="Icon">
                    <img src="<?=ROOT?>/assets/images/icons/bath-grey.svg" alt="Icon">
                </div>
                <button class="search_rooms_btn" <?php if (!$submit_btn){ echo "disabled"; }?> onclick="location.href='oneroom?id=<?php echo $row->RoomID ?>&arrive_date=<?php echo $arrive_date ?>&depart_date=<?=$depart_date?>'">BOOK NOW</button>

            </div>
        </div>

      <?php endforeach; ?>

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


`</body>

</html>