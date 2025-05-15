<!DOCTYPE html>
<html lang="en">
<head>
    <!-- dans le <head> de ton layout -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
  <a class="navbar-brand" href="{{ route('clients.clients') }}">Backoffice</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('clients.add') }}">Ajouter Client</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('clients.clients') }}">Voir les Clients</a>
      </li>
    </ul>
  </div>
</nav>

<main>
    @yield('Clients')
    @yield('Addclient')
</main>


</body>
</html>