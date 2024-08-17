<?php
require 'db.php';  
$options = $db->query("SELECT * FROM options")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
</head>
<center>
<body>
    <h2>Vote for Your Favorite Actor</h2>

    <form method="POST" action="vote.php">
        <?php foreach ($options as $option): ?>
            <input type="radio" name="option_id" value="<?= $option['id'] ?>" required>
            <?= htmlspecialchars($option['name']) ?><br>
        <?php endforeach; ?>
        <br>
        <button type="submit">Vote</button>
    </form>

    <br>
    <a href="results.php">View Results</a>
    </center>
</body>
</html>
