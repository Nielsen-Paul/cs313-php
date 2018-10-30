<?php include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $query = 'INSERT INTO user (name, password) VALUES (:name, :password)';
    $stmt = $db->prepare($query);
    $pdo = $stmt->execute(array(':name' => $_POST['name'], ':password' => $_POST['password']));

}

?>