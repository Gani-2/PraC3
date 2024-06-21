<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>
