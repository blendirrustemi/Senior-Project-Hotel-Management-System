<?php
    
    session_start();
    $err = "";
    
    if (isset($_SESSION['is_logged_in'])) {
        header("Location: admin");
    }
    
    /**if (!validateCsrfToken($_POST['csrf_token'])) {
     * exit('Invalid CSRF token.');
     * }*/
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $db  = new Database;
        $con = $db->connect();
        try {
            $userId = verifyPassword($con, $username, $password);
            
            if ($userId) {
                $_SESSION['is_logged_in'] = true;
                header("Location: admin");
            } else {
                $err = "Invalid username or password";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        
        /**try {
            $query  = "SELECT * FROM customers WHERE username = '$username' AND password = '$password'";
            $result = $db->query($query);
    
            if (count($result) === 1) {
                $_SESSION['is_logged_in'] = true;
                header("Location: admin");
            } else {
                $err = "Invalid username or password";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }*/
        
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ADMIN ?>assets/css/login.css">
    <link rel="icon" type="image/x-icon" href="<?= ROOT ?>assets/images/icons/favicon.png">
    <title>Login Page</title>
</head>
<body>

<div class="login-container">
    <form action="" method="POST">

        <div class="login-logo">
            <a href="<?= ROOT ?>">
                <img src="<?= ROOT ?>assets/images/icons/logo.svg" alt="The Yorkshire Inn">
            </a>
        </div>

        <div class="login-title"><h1>Log In</h1></div>

        <div class="login-input">
            <input type="username" name="username" placeholder="Username" required/>
        </div>

        <div class="login-input">
            <input type="password" name="password" placeholder="Password" required/>
            <input type="hidden" name="csrf_token" value="<?php echo generateCsrfToken(); ?>">
        </div>

        <button class="login-button" name="submit" type="submit">Log in</button>

        <a href="forgotpassword">Forgot password?</a>

        <p style="color: red"><?php echo $err ?></p>

    </form>
</div>
</body>
</html>
