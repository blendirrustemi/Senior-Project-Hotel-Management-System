<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ADMIN ?>/assets/css/login_styles.css">
    <title>Login Page</title>
</head>
<body>

<div class="container-login">
    <form action="admin" method="POST">
        <a href="home"><div class="brand-logo"></div></a>
        <div class="login-title">Please sign in</div>
        <div class="inputs">
            <label class="username-label">USERNAME</label>
            <input type="username" placeholder="username" required/>
            <label class="password-label">PASSWORD</label>
            <input type="password" placeholder="password" required/>
            <a href="forgotpassword">Forgot password?</a><br><br>

            <button class="login-button" type="submit">LOGIN</button>
        </div>
    </form>
</div>
</body>
</html>
