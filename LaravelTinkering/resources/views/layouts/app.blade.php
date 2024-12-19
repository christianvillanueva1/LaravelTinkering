<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* 1. Aseguramos que body y html ocupen el 100% de la altura */
        html, body {
            height: 100%;
        }

        /* 2. Usamos Flexbox para el body */
        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between; /* Distribuye espacio entre el contenido y el footer */
        }

        /* 3. Aseguramos que el contenido ocupe todo el espacio disponible */
        .container {
            flex: 1;
        }

        /* 4. Opcional: Estilo del footer */
        footer {
            background-color: rgba(0, 0, 0, 0.05);
            padding: 10px;
            text-align: center;
        }

        nav{
            background-color: rgba(0, 0, 0, 0.05);
            padding: 30px 10px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            font-size: 20px;

            a:hover{
                background: none;
            }

            a{
                text-decoration: none;
                color: black;
            }
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
<nav>
    <a href="/">Christian</a>
    <a href="{{ route('films.index') }}">Films</a>
    <a href="{{ route('albums.index') }}">Albums</a>
</nav>

<div class="container mt-4 mb-4">
    @yield('content')
</div>

<footer class="text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3">
        © 2020 Copyright:
        <strong>Christian Villanueva Lor</strong>
    </div>
    <!-- Copyright -->
</footer>

</body>
</html>
