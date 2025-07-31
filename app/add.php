<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Contact Added</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background-color: white;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        h2 {
            color: #28a745;
        }
        a.button {
            display: inline-block;
            margin: 15px 10px;
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        a.button:hover {
            background-color: #0056b3;
        }
        a.green {
            background-color: #28a745;
        }
        a.green:hover {
            background-color: #1e7e34;
        }
        a.red {
            background-color: #dc3545;
        }
        a.red:hover {
            background-color: #b21f2d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>✅ Contact successfully added</h2>
        <a href="view.php" class="button">View Saved Contacts</a>
        <a href="index.html" class="button green">Add Another Contact</a>
        <a href="https://www.google.com" class="button red">Exit</a>
    </div>
</body>
</html>
