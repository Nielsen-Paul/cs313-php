<?php include 'db.php';

$youth_id = htmlspecialchars($_POST['youth_id']);
$name = htmlspecialchars($_POST['name']);
$learn = htmlspecialchars($_POST['learn']);
$act = htmlspecialchars($_POST['act']);
$share = htmlspecialchars($_POST['share']);
$comments = htmlspecialchars($_POST['comments']);
$journal = htmlspecialchars($_POST['journal']);

$stmt = $db->prepare('UPDATE requirements SET name=:name, learn=:learn, act=:act, share=:share, comments=:comments, journal=:journal WHERE youth_id=:youth_id AND name=:name;');
$stmt->bindValue(':youth_id', $youth_id, PDO::PARAM_INT);
$stmt->bindValue(':name', $name, PDO::PARAM_INT);
$stmt->bindValue(':learn', $learn, PDO::PARAM_INT);
$stmt->bindValue(':act', $act, PDO::PARAM_INT);
$stmt->bindValue(':share', $share, PDO::PARAM_INT);
$stmt->bindValue(':comments', $comments, PDO::PARAM_INT);
$stmt->bindValue(':journal', $journal, PDO::PARAM_INT);
$stmt->execute();

$new_page = "requirements.php?id=$youth_id";

header("Location: $new_page");
die();

?>