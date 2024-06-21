@extends('layouts.app')

@section('content')
    <div class="form-container">
        <h2>Create Team</h2>
        <form action="{{ route('teams.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="points">Points</label>
                <input type="number" name="points" id="points" required>
            </div>
            <div class="form-group">
                <label for="creator_id">Creator ID</label>
                <input type="text" name="creator_id" id="creator_id" required>
            </div>
            <div class="form-group">
                <button type="submit" class="button">Create</button>
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
    </style>
@endsection
