<?php

session_start();
$err = "";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db = new Database;
    $con = $db->connect();

    try {
        $query = "SELECT * FROM customers WHERE username = '$username' AND password = '$password'";
        $result = $db->query($query);

        if (count($result) === 1) {
            $_SESSION['is_logged_in'] = true;
            header("Location: admin");
        } else {
            $err = "Invalid username or password";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ADMIN ?>/assets/css/login_styles.css">
    <title>Login Page</title>
</head>
<body>

<div class="container-login">
    <form action="" method="POST">
        <a href="home"><div class="brand-logo"></div></a>
        <div class="login-title">Please sign in</div>
        <div class="inputs">
            <label class="username-label">USERNAME</label>
            <input type="username" name="username" placeholder="username" required/>
            <label class="password-label">PASSWORD</label>
            <input type="password" name="password" placeholder="password" required/>
            <a href="forgotpassword">Forgot password?</a><br><br>
            <p style="color: red"><?php echo $err ?></p>

            <button class="login-button" name="submit" type="submit">LOGIN</button>
        </div>
    </form>
</div>
</body>
</html>
