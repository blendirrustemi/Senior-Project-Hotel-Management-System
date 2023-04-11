<?php
// Start the session
session_start();

// Unset the session variables
unset($_SESSION['is_logged_in']);

// End the session
session_destroy();

// Redirect to the login page
header('Location: login');
exit();
?>
