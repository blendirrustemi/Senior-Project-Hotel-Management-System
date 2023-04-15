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

        <h1>Edit User</h1>

        <div class="label-input">
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="label-input">
            <label for="email">Email:</label>
            <input type="text" id="email" name="name" required>
        </div>

        <div class="label-input">
            <label for="password">Password:</label>
            <input type="text" id="password" name="Lastname" required>
        </div>

        <div class="admin-save-container">
            <button href="admin" class="admin-button-save">Save</button>
            <a href="users">Back to Users Panel</a>
        </div>
    </div>



</body>
</html>

