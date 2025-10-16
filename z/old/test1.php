<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Web Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        header {
            background: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
        }
        main {
            background: white;
            padding: 20px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        footer {
            text-align: center;
            margin-top: 20px;
            color: #555;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to My Website</h1>
    </header>

    <main>
        <h2>About This Page</h2>
        <p>This is a simple HTML page created for learning purposes.</p>

        <h3>Useful Links</h3>
        <ul>
            <li><a href="https://www.google.com" target="_blank">Visit Google</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">Learn HTML</a></li>
        </ul>
    </main>

    <footer>
        <p>&copy; 2025 MyWebsite. All rights reserved.</p>
    </footer>

</body>
</html>
