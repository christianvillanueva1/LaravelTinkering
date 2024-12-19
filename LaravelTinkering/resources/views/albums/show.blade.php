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
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        h2 {
            font-size: 2rem;
            color: #333;
        }

        .card {
            background: #fafafa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .card-header {
            font-size: 1.5rem;
            margin-bottom: 15px;
            border-bottom: 2px solid #f1f1f1;
        }

        .card-body {
            font-size: 1.1rem;
            color: #555;
        }

        .card-body p {
            margin-bottom: 10px;
        }

        .card-body strong {
            color: #333;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1rem;
            text-decoration: none;
            color: #fff;
            border-radius: 5px;
            background: #007bff;
            transition: background 0.3s ease;
        }

        .btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
@extends('layouts.app')
@section('content')
<div class="container2">
    <h1>Album Details</h1>
    <div class="card">
        <div class="card-header">
            <h2>{{ $album->title }}</h2>
        </div>
        <div class="card-body">
            <p><strong>Singer:</strong> {{ $album->singer }}</p>
            <p><strong>Songs:</strong> {{ $album->songs }}</p>
            <p><strong>Year:</strong> {{ $album->year }}</p>
            <a href="{{ route('albums.index') }}" class="btn">Back</a>
        </div>
    </div>
</div>
@endsection
</html>
