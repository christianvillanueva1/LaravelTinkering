<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container2 {
            background: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: #555;
        }

        a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 1.2rem;
            text-decoration: none;
            color: #fff;
            background: #555;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        a:hover {
            background: #333;
        }

        a:active {
            transform: scale(0.98);
        }

        .btn {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 1rem;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn-primary {
            background: #007bff;
        }

        .btn-info {
            background: #17a2b8;
        }

        .btn-danger {
            background: #dc3545;
        }

        .btn:hover {
            opacity: 0.9;
        }

        /* Estilo para la tabla y el contenedor con scroll */
        .table-container {
            max-height: 400px; /* Establece la altura máxima para el scroll */
            overflow-y: auto;  /* Permite el scroll vertical */
            overflow-x: auto;  /* Permite el scroll horizontal */
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }

        .alert {
            padding: 10px;
            background-color: #baeaff;
            color: #00628c;
            border-radius: 5px;
            margin-top: 20px;
        }

        .alert p {
            margin: 0;
        }
    </style>
</head>
@extends('layouts.app')

@section('content')
    <div class="container2">
        <h1>Films</h1>
        <h2>Manage your films collection</h2>

        <a href="{{ route('films.create') }}" class="btn btn-primary">Add Film</a>

        @if ($message = Session::get('success'))
            <div class="alert">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="table-container">
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Director</th>
                    <th>Year</th>
                    <th width="280px">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($films as $film)
                    <tr>
                        <td>{{ $film->id }}</td>
                        <td>{{ $film->title }}</td>
                        <td>{{ $film->director }}</td>
                        <td>{{ $film->year }}</td>
                        <td>
                            <form action="{{ route('films.destroy', $film->id) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('films.show', $film->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('films.edit', $film->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

</html>
