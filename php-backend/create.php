<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

$title = $data->title;
$content = $data->content;

$sql = "INSERT INTO posts (title, content) VALUES (:title, :content)";
$stmt = $pdo->prepare($sql);

if ($stmt->execute(['title' => $title, 'content' => $content])) {
    echo json_encode(['message' => 'Post created successfully']);
} else {
    echo json_encode(['message' => 'Failed to create post']);
}
?>
