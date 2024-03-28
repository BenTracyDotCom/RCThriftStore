<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RC Thriftstore</title>
  <!-- Styles -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<!-- Navbar -->
<div class="h-screen flex flex-col">
  <header>
  <nav class="flex items-center justify-between flex-wrap bg-primary p-6">
    <div class="flex items-center flex-shrink-0 text-accent mr-6">
      <!-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> -->
      <span class="font-semibold text-xl tracking-wide">RC Thriftstore</span>
    </div>
    <div class="block md:hidden">
      <button class="flex items-center px-3 py-2 border rounded text-accent border-primary hover:text-white hover:border-accent">
        <svg class="fill-accent h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
      </button>
    </div>
  </nav>
  </header>
  
  <!-- Body -->
  <body class="">
    @yield('content')
  </body>
  
  <!-- Footer -->
  <footer class="mt-auto">
    <div class="flex justify-between">
      <span class="text-xs text-end mx-auto bg-primary px-3 w-full text-accent">RC Thriftstore © 2023 BenTracyDotCom</span>
    </div>
  </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</html>