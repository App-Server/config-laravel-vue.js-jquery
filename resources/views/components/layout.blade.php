<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ url('/dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/customer') }}">customer</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/user') }}">user</a>
              </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
  </nav>

  <div class="container" style="margin-top: 90px">
      @vite(['resources/js/app.js', 'resources/css/app.css'])
      {{$slot}}
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  
</body>
</html>

