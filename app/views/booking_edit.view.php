<?php

$customer_id = $_GET['id'];

$db = new Database();
$con = $db->connect();

$query = "SELECT * FROM Bookings, Customers WHERE 
                                      Bookings.CustomerID = Customers.CustomerID AND Bookings.CustomerID = $customer_id";
$result = $db->query($query);

show($result);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ADMIN ?>/assets/css/styles.css">
    <title>Edit Booking</title><br><br>


</head>
<body class="adminBody">


<h1 class="adminh1">Edit Booking</h1>

<div class="admin-form">


        <label for="name">First name:</label>
        <input type="text" id="name" name="name" required value="<?=$result[0]->FirstName?>"><br><br>
        <label for="lastName">Last name:</label>
        <input type="text" id="lastName" name="Lastname" required value="<?=$result[0]->LastName?>"><br><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday" required value="<?=$result[0]->Birthday?>"><br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
            <option
            <option value="">-- Select Gender --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>
        <label for="phone">Phone number:</label>
        <input type="tel" id="phone" name="phone" required value="<?=$result[0]->Phone?>"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required value="<?=$result[0]->Email?>"><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required value="<?=$result[0]->Address?>"><br><br>
        <label for="room">Room:</label>
        <select id="room" name="room" required>
            <option value="">Select a room</option>
            <option value="lodge">Lodge</option>
            <option value="blueRoom">Blue Room</option>
            <option value="roseRoom">Rose Room</option>
            <option value="bolero">Bolero</option>
        </select><br><br>
        <label for="people">Adults:</label>
        <input type="number" id="adults" name="adults" required value="<?=$result[0]->Adults?>"><br><br>
        <label for="people">Children:</label>
        <input type="number" id="children" name="children" required value="<?=$result[0]->Children?>"><br><br>
        <label for="entryDate">Entry Date:</label>
        <input type="date" id="entryDate" name="entryDate" required value="<?=$result[0]->CheckInDate?>"><br><br>
        <label for="departureDate">Departure Date:</label>
        <input type="date" id="departureDate" name="departureDate" required value="<?=$result[0]-> CheckOutDate?>"><br><br>
        <label for="time">Estimated Time Of Arrival:</label>
        <input type="time" id="time" name="time" required><br><br>
        <input class="checkboxAdmin" type="checkbox" name="checkin" value="checkin"> Checked in<br><br>
        <input class="checkboxAdmin" type="checkbox" name="notcheckin" value="notcheckin"> Not-Checked in<br><br><br>
        <a href="menu">
            <button class="adminMenu-button">Go to menu selection</button>
        </a><br><br>
        
</div>
<br><br>

<div class="admin-save-container">
    <button href="admin" class="admin-button-save">Save</button>
    <button class="back-button-save"><a href="admin">Back to Admin Panel</a></button>


</div>


</body>
</html>

