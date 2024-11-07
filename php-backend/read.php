<?php
include 'db.php';

$stmt = $pdo->prepare("SELECT * FROM posts ORDER BY created_at DESC");
$stmt->execute();
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($posts);
?>
