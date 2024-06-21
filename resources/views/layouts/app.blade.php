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

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-left: 15px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
    <div class="navbar">
        <div class="navbar-brand">
            <a href="{{ url('/') }}">My Laravel App</a>
        </div>
        <div class="navbar-menu">
            @guest
                @if (Route::has('login'))
                    <a href="{{ route('login') }}">Login</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @else
                <span>{{ Auth::user()->name }}</span>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="footer">
        <p>&copy; 2024 My Laravel App</p>
    </div>
</body>
</html>
