<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"));

$id = $data->id;
$title = $data->title;
$content = $data->content;

$sql = "UPDATE posts SET title = :title, content = :content WHERE id = :id";
$stmt = $pdo->prepare($sql);

if ($stmt->execute(['title' => $title, 'content' => $content, 'id' => $id])) {
    echo json_encode(['message' => 'Post updated successfully']);
} else {
    echo json_encode(['message' => 'Failed to update post']);
}
?>
