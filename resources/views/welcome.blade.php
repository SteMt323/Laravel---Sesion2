<!DOCTYPE html>
<html lang="es">

<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel - Sesion 2</title>
    
</head>

<body>
    <header>
        <div class="container text-center card border-success my-2">
            <h1 class="text-primary">Laravel - Sesion 2 | Artemis-Devs</h1>
        </div>
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">StvM</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pagina1') }}">Página 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pagina2') }}">Página 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('pagina3') }}">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

    </header>
    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>