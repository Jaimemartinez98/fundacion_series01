<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Título de la página</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    </head>

    <body style="padding: 10px 20px 20px 20px;">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('empresas.index') }}">Listar Empresas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('empresas.create') }}">Agregar Empresas</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('series.index') }}">Listar series</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('series.create') }}">Agregar series</a>
                  </li>


                </ul>
              </div>
            </div>
          </nav>

        @yield('content')
    </body>
</html>
