<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h2>Welcome, {{ Auth::user()->name }}!</h2>
    <p>You are logged in.</p>
</body>
</html>