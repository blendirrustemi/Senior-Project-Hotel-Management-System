<?php

// Connect to MariaDB
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "yin_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    
    $stmt = $conn->query("SELECT * FROM room_type");
    while ($row = $stmt->fetch()) {
        echo $row['room_type_name']."<br />\n";
    }
    
    
} catch(PDOException $e) {
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>
