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
            <form action="/feed" method="post">
                <button class="button">Feed</button>
            </form>
            <form action="/play" method="post">
                <button class="button">Play</button>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
