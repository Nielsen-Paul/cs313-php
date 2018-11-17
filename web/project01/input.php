<?php include 'db.php';

$youth_id = $_POST['youth_id'];
$name = $_POST['name'];
$learn = $_POST['learn'];
$act = $_POST['act'];
$share = $_POST['share'];
$comments = $_POST['comments'];

$stmt = $db->prepare('UPDATE requirements SET name=:name, learn=:learn, act=:act, share=:share, comments=:comments WHERE youth_id=:youth_id AND name=:name;');
$stmt->bindValue(':youth_id', $youth_id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_INT);
$stmt->bindValue(':learn', $learn, PDO::PARAM_STR);
$stmt->bindValue(':act', $act, PDO::PARAM_STR);
$stmt->bindValue(':share', $share, PDO::PARAM_STR);
$stmt->bindValue(':comments', $comments, PDO::PARAM_INT);
$stmt->execute();

$new_page = "requirements.php?id=$youth_id";

header("Location: $new_page");
die();

?>