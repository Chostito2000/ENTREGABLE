<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Aplicación')</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .main-content {
            padding: 20px;
        }

        footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        });
    </script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                <li><a href="/tours">Tours</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
