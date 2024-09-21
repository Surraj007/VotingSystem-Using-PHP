<?php
require 'db.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $option_id = $_POST['option_id'];
    $stmt = $db->prepare("UPDATE options SET votes = votes + 1 WHERE id = :id");
    $stmt->execute(['id' => $option_id]);
    header("Location: results.php");
    exit();
}
?>
