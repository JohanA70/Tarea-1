<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div style="width: 80%; margin-left: 5%;">
        <header style="margin-bottom: 2%; margin-left: 48%; margin-top: 1%;">
            <nav>
                <button type="button" class="btn btn-primary">
                    <a href="{{ route('movies.index') }}" style="color: white;">Peliculas</a>
                </button>
                <button type="button" class="btn btn-primary">
                    <a href="{{ route('categories.index') }}" style="color: white;">Categorias</a>
                </button>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>

        <footer style="margin-top: 5%; margin-left: 48%;">
            <p>&copy; 2024 Movies App</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>