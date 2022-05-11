<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <main>
            <h1 class="text-center mb-4" id="welcome-title">Comics</h1>
            <div class="row">
                <div class="col text-center text-uppercase">
                    <a class="d-block mb-2" href="{{ route('comics.index') }}">Explore all comics</a>
                    <a class="d-block" href="{{ route('comics.create') }}">Add new comic</a>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
