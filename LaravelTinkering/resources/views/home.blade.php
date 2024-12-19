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
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 1.5rem;
            margin-bottom: 20px;
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
            color: white;
        }

        a:active {
            transform: scale(0.98);
        }
    </style>
</head>
@extends('layouts.app')

@section('content')
<div class="container2">
    <h1>Projecte LaravelTinkering</h1>
    <h2>Christian Villanueva Lor</h2>
    <a class="btn" href="/films">FILMS</a>
    <a class="btn" href="/albums">ALBUMS</a>
</div>
@endsection
</html>
