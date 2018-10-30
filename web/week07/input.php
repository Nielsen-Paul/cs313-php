<?php include 'db.php';

$name = $_POST['name'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $query = 'INSERT INTO user (name, password) VALUES (:name, :password)';
    $stmt = $db->prepare($query);
    $pdo = $stmt->execute(array(':name' => $_POST['name'], ':password' => $_POST['password']));

    $new_page = "signin.php?name=$name";

    header("Location: $new_page");
    die();

}

?>