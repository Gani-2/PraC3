@extends('layouts.app')

@section('content')
<div class="form-container">
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required autofocus>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="form-group">
            <button type="submit" class="button">Register</button>
        </div>

        <div class="form-group">
            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
        </div>
    </form>
</div>

<style>
    .form-container {
        width: 50%;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        text-align: center;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s;
        cursor: pointer;
    }

    .button:hover {
        background-color: #0056b3;
    }

    .form-group p {
        text-align: center;
    }

    .form-group a {
        color: #007bff;
        text-decoration: none;
    }

    .form-group a:hover {
        text-decoration: underline;
    }
</style>
@endsection
