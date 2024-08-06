<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'Or</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Livre d'Or</h1>
        
        <form action="index.php" method="post">
            <input type="text" name="nom" placeholder="Votre nom" required>
            <textarea name="message" placeholder="Votre message" required></textarea>
            <button type="submit">Envoyer</button>
        </form>

        <h2>Messages</h2>
        <div class="messages">
            <?php
            if (file_exists("messages.txt")) {
                $messages = file("messages.txt", FILE_IGNORE_NEW_LINES);
                foreach ($messages as $message) {
                    echo "<p>$message</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
