<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .header, .footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }

        .header h1, .footer p {
            margin: 0;
        }

        .content {
            padding: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>My Laravel App</h1>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; 2024 My Laravel App</p>
    </div>
</body>
</html>
