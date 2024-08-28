<?php
// Load pet data from JSON file
$petData = json_decode(file_get_contents('pet_data.json'), true);

// Handle feeding
if (isset($_GET['action']) && $_GET['action'] === 'feed') {
    $petData['hunger'] = max($petData['hunger'] - 1, 0);
    file_put_contents('pet_data.json', json_encode($petData));
    header('Location: index.php');
    exit();
}

// Handle playing
if (isset($_GET['action']) && $_GET['action'] === 'play') {
    $petData['happiness'] = min($petData['happiness'] + 1, 10);
    file_put_contents('pet_data.json', json_encode($petData));
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
            <p><strong>Hunger Level:</strong> <?php echo $petData['hunger']; ?></p>
            <p><strong>Happiness Level:</strong> <?php echo $petData['happiness']; ?></p>
        </div>
        <div class="actions">
            <a href="?action=feed" class="button">Feed</a>
            <a href="?action=play" class="button">Play</a>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
