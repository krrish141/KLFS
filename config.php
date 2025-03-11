<?php
// config.php

// Database configuration
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'klfs');

// Establishing the database connection
try {
    $pdo = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("ERROR: Could not connect to the database. " . $e->getMessage());
}

// Example for site settings
define('SITE_URL', 'http://yourwebsite.com');

// Site-specific settings
define('SITE_NAME', 'Your Website');
define('ADMIN_EMAIL', 'admin@yourwebsite.com');
?>
