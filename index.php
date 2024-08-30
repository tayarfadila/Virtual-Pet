<?php


use Model\Pet;

require __DIR__.'/vendor/autoload.php';

$pet = new Pet();

// Handle feeding
if (isset($_GET['action']) && $_GET['action'] === 'feed') {
    $pet->feed();
    header('Location: index.php');
    exit();
}

// Handle playing
if (isset($_GET['action']) && $_GET['action'] === 'play') {
    $pet->play();
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Pet</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Virtual Pet</h1>
        <div class="pet">
            <img src="https://via.placeholder.com/150/FFC0CB/000000?text=Pet" alt="Pet Image">
        </div>
        <div class="status">
            <p><strong>Hunger Level:</strong> <?php echo $pet->data['hunger']; ?></p>
            <p><strong>Happiness Level:</strong> <?php echo $pet->data['happiness']; ?></p>
        </div>
        <div class="actions">
            <a href="?action=feed" class="button">Feed</a>
            <a href="?action=play" class="button">Play</a>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
