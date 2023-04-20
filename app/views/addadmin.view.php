<?php
$db = new Database();
$con = $db->connect();

session_start();

$is_logged_in = $_SESSION['is_logged_in'];

if (!$is_logged_in){
    header("Location: login");
}

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthday = $_POST['birthday'];
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $salt = bin2hex(random_bytes(16));
    $password = hashString($_POST['password'], $salt);

    $query = "INSERT INTO Customers (FirstName, LastName, Birthday, Username, Gender, Email, Phone, Address, password_hash, password_salt, isAdmin)  VALUES ('$name', '$surname', '$birthday', '$username', '$gender', '$email', '$phone', '$address', '$password', '$salt', 1)";
    $result = $db->query($query);
    
    header("Location: users");
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ADMIN ?>/assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="<?=ROOT?>assets/images/icons/favicon.png">
    <title>Edit User</title>

</head>

<body>

<div class="admin-form">

    <h1>Add Admin</h1>

    <form method="POST">
        <div class="label-input">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="label-input">
            <label for="name">Last Name:</label>
            <input type="text" id="name" name="surname" required>
        </div>

        <div class="label-input">
            <label for="name">Username:</label>
            <input type="text" id="name" name="username" required>
        </div>

        <div class="label-input">
            <label for="name">Birthday:</label>
            <input type="date" id="name" name="birthday" required>
        </div>

        <div class="label-input">
            <label for="name">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">-- Select --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>

        <div class="label-input">
            <label for="name">Phone:</label>
            <input type="tel" id="name" name="phone" required>
        </div>

        <div class="label-input">
            <label for="name">Address:</label>
            <input type="text" id="name" name="address" required>
        </div>


        <div class="label-input">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="label-input">
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" required>
        </div>

        <div class="admin-save-container">
            <button type="submit" name="submit" class="admin-button-save">Save</button>
            <a href="users">Back to Users Panel</a>
        </div>
    </form>
</div>



</body>
</html>

