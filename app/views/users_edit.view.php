<?php
    $db  = new Database();
    $con = $db->connect();
    
    session_start();
    
    $is_logged_in = $_SESSION['is_logged_in'];
    
    if (!$is_logged_in) {
        header("Location: login");
    }
    
    $id = $_GET['id'];
    
    $query  = "SELECT * FROM Customers where CustomerID = '$id'";
    $result = $db->query($query);
    
    $username = $result[0]->Username;
    $email    = $result[0]->Email;
    $password = $result[0]->password_hash;
    $salt     = $result[0]->password_salt;
    
    if (isset($_POST['password'])) {
        $old_username = $_POST['username'];
        $old_email    = $_POST['email'];
        $old_password = hashString($_POST['password'], $salt);
        
        
        if ($old_username != $username || $old_email != $email || $old_password != $password) {
            $update_query  = "UPDATE Customers SET Username = '$old_username', Email = '$old_email', password_hash = '$old_password' WHERE CustomerID = '$id'";
            $update_result = $db->query($update_query);
            header("Refresh:0");
        }
    } elseif (isset($_POST['username']) && isset($_POST['email'])) {
        $old_username = $_POST['username'];
        $old_email    = $_POST['email'];
        $old_password = $_POST['password'];
        
        if ($old_username != $username || $old_email != $email) {
            $update_query  = "UPDATE Customers SET Username = '$old_username', Email = '$old_email' WHERE CustomerID = '$id'";
            $update_result = $db->query($update_query);
            header("Refresh:0");
        }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ADMIN ?>/assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="<?= ROOT ?>assets/images/icons/favicon.png">
    <title>Edit User</title>

</head>

<body>

<div class="admin-form">

    <h1>Edit User</h1>

    <form method="POST">
        <div class="label-input">
            <label for="name">Username:</label>
            <input type="text" id="name" name="username" value="<?= $result[0]->Username ?>" required>
        </div>

        <div class="label-input">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?= $result[0]->Email ?>" required>
        </div>

        <div class="label-input">
            <label for="password">Password:</label>
            <input type="text" id="password" name="password" value="">
        </div>

        <div class="admin-save-container">
            <button type="submit" class="admin-button-save">Save</button>
            <a href="users">Back to Users Panel</a>
        </div>
    </form>
</div>


</body>
</html>

