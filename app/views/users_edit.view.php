<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ADMIN ?>/assets/css/styles.css">
    <title>Edit User</title><br><br>


</head>
<body class="userBody">


<h1 class="adminh1">Edit User</h1>

<div class="admin-form">
    <label for="name">Username:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="name" required><br><br>
    <label for="password">Password:</label>
    <input type="text" id="password" name="Lastname" required><br><br>
</div>
<br><br>

<div class="admin-save-container">
    <button href="admin" class="admin-button-save">Save</button>
    <button class="back-button-save"><a href="users">Back to Users Panel</a></button>


</div>


</body>
</html>

