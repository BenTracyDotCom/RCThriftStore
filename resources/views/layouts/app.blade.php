<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog</title>
  <!-- Styles →
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<!-- Navbar →
<header>
  <nav class="navbar bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('parts.index') }}">Mini-Blog</a>
    </div>
  </nav>
</header>

<!-- Body -->
<body>
  @yield('content')
</body>

<!-- Footer -->
<footer class="footer mt-auto py-3 bg-dark">
  <div class="container d-lg-flex justify-content-between">
    <span class="text-light">Mini-Blog © 2023</span>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>