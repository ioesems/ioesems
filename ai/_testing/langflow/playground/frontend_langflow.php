<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Langflow Chat</title>
</head>
<body>
    <h2>Langflow Chat</h2>
    <form action="backend_langflow.php" method="post">
        <label for="input_value">Enter your message:</label>
        <input type="text" id="input_value" name="input_value" required>
        <button type="submit">Send</button>
    </form>

    <?php
    // Display response if set
    if (isset($_GET['response'])) {
        echo "<h3>Response from Langflow:</h3>";
        echo "<pre>" . htmlspecialchars($_GET['response']) . "</pre>";
    }

    if (isset($_GET['error'])) {
        echo "<h3 style='color:red'>Error:</h3>";
        echo "<pre>" . htmlspecialchars($_GET['error']) . "</pre>";
    }
    ?>
</body>
</html>
