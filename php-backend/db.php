<?php
$host = 'localhost';
$dbname = 'blog_app';
$user = 'root'; // Adjust with your MySQL user
$pass = '';     // Adjust with your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>
