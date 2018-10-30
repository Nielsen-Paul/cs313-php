<?php include 'db.php';

$query = 'INSERT INTO user (name, password) VALUES (:name, :password)';
$stmt = $db->prepare($query);
$pdo = $stmt->execute(array(':name' => $_POST['name'], ':password' => $_POST['password']));
$stmt->execute();

$newId = $db->lastInsertId('user_id_seq');

$new_page = "signin.php?id=$id";

header("Location: $new_page");
die();

?>