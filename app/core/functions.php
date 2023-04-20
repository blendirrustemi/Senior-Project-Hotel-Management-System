<?php
    
    function show($stuff) {
        echo "<pre>";
        print_r($stuff);
        echo "</pre>";
    }
    
    function esc($str) {
        return htmlspecialchars($str);
    }
    
    
    function redirect($path) {
        header("Location: " . ROOT . "/" . $path);
        die;
    }
    
    function generateCsrfToken() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        
        return $_SESSION['csrf_token'];
    }
    
    function validateCsrfToken($token) {
        return !empty($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
    }
    
    function verifyPassword($pdo, $username, $password) {
        $stmt = $pdo->prepare('SELECT CustomerID, password_hash, password_salt FROM customers WHERE Username = :username');
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($user) {
            $hashed_password = hashString($password, $user['password_salt']);
            if ($hashed_password === $user['password_hash']) {
                return $user['CustomerID'];
            }
        }
        
        return false;
    }
    
    function hashString($password, $salt) {
        
        $hashed_password = hash('sha256', $password . $salt);
        return $hashed_password;
    }

