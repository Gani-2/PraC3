<!DOCTYPE html>
<html>
<head>
    <title>Schoolvoetbal</title>
    <!-- Add any CSS or JS here -->
</head>
<body>
    <header>
        <nav>
            <ul>
                <!-- Check if the user is authenticated -->
                @if (Auth::check())
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit">Logout</button>
                        </form>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>

