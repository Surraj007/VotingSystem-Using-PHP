<?php
require 'db.php';  
$options = $db->query("SELECT * FROM options ORDER BY votes DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Results</title>
</head>
<center>
<body>
    <h2>Voting Results</h2>

    <?php foreach ($options as $option): ?>
        <p>
            <?= htmlspecialchars($option['name']) ?>: <?= $option['votes'] ?> vote(s)
        </p>
    <?php endforeach; ?>

    <br>
    <a href="index.php">Back to Voting</a>
</body>
</center>
</html>
