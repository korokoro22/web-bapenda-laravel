<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />

    <title>Persuratan BAPENDA | @yield('title') </title>
</head>
<body class="flex flex-col min-h-screen">
<nav class=" w-full px-10 bg-merahNavbar h-20 flex justify-between items-center">
  <div class="">
    <a href="/" class="flex justify-center items-center">
      <img src="{{asset('assets/bapendalogo.png')}}" alt="logo bapenda" class="w-14">
      <img src="{{asset('assets/logobapenda2.png')}}" alt="logo bapenda" class="w-20">
      {{-- <div class="pl-2">
        <p class="font-inter text-white">BAPENDA</p>
        <p class="font-inter text-white">SULAWESI SELATAN</p>
      </div> --}}
    </a>
  </div>
  <div class="flex w-2/5 justify-evenly">
    <a href="/" class="font-inter text-white hover:text-newBlack">Home</a>
    <a href="surat-masuk" class="font-inter text-white hover:text-newBlack">Surat Masuk</a>
    <a href="surat-keluar" class="font-inter text-white hover:text-newBlack">Surat Keluar</a>
    <a href="arsip-pergub" class="font-inter text-white hover:text-newBlack">Arsip Pergub</a>
    <a href="/logout" class="font-inter text-white hover:text-newBlack">Keluar</a>
  </div>
  
</nav>




<div class="flex-grow">
  @yield('content')
</div>




<footer class="bg-biruFooter h-6">
  <p class="text-white text-sm text-center font-inter">copyright @ 2023 Unhas</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("#datepicker", {
        // Configuration options for Flatpickr
        // You can customize the appearance and behavior here
    });
</script>

</body>
</html>

