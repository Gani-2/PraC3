@extends('layouts.app')

@section('content')
    <div class="table-container">
        <h2>Teams</h2>
        <a href="{{ route('teams.create') }}" class="button">Create Team</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Points</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->points }}</td>
                        <td>
                            <a href="{{ route('teams.show', $team->id) }}" class="button view">View</a>
                            <a href="{{ route('teams.edit', $team->id) }}" class="button edit">Edit</a>
                            <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        .table-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .table-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .table-container .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
            margin-bottom: 20px;
        }

        .table-container .button:hover {
            background-color: #0056b3;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table-container table, .table-container th, .table-container td {
            border: 1px solid #ddd;
        }

        .table-container th, .table-container td {
            padding: 12px;
            text-align: left;
        }

        .table-container th {
            background-color: #f2f2f2;
        }

        .table-container .button.view {
            background-color: #28a745;
        }

        .table-container .button.view:hover {
            background-color: #218838;
        }

        .table-container .button.edit {
            background-color: #ffc107;
        }

        .table-container .button.edit:hover {
            background-color: #e0a800;
        }

        .table-container .button.delete {
            background-color: #dc3545;
            border: none;
            padding: 10px 20px;
            color: #fff;
            text-align: center;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .table-container .button.delete:hover {
            background-color: #c82333;
        }

        .table-container form {
            display: inline;
        }
    </style>
@endsection
