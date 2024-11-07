<?php
include 'db.php';

$data = json_decode(file_get_contents("php://input"));
$id = $data->id;

$sql = "DELETE FROM posts WHERE id = :id";
$stmt = $pdo->prepare($sql);

if ($stmt->execute(['id' => $id])) {
    echo json_encode(['message' => 'Post deleted successfully']);
} else {
    echo json_encode(['message' => 'Failed to delete post']);
}
?>
