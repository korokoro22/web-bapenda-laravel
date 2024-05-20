<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- @vite('resources/css/app.css') --}}
    @vite(['resources/css/app.css','resources/js/app.js'])
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <title>Document</title>

    
</head>
<body>
   

<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3 bg-merahNavbar">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start rtl:justify-end">
          <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
              <span class="sr-only">Open sidebar</span>
              {{-- <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> --}}
                 <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
              </svg>
           </button>
          <a href="https://flowbite.com" class="flex items-center ms-2 md:me-24">
            <img src="{{asset('assets/logobapenda.png')}}" class="h-8 me-3" alt="FlowBite Logo" />
            {{-- <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span> --}}
            <div class="pl-2">
                <p class="font-inter text-white">BAPENDA</p>
                <p class="font-inter text-white">SULAWESI SELATAN</p>
              </div>
          </a>
        </div>
    </div>
  </nav>
  
  <aside id="logo-sidebar" class=" fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-greyBg border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
     <div class="h-full px-3 pb-4 overflow-y-auto bg-greyBg dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
           <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg  dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                 <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                    <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                    <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                 </svg>
                 <span class="ms-3">Dashboard</span>
              </a>
           </li>
           <li>
              <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-300 dark:hover:bg-gray-700 group">
                 <img src={{asset('assets/masuk.png')}} class="w-6">
                 <span class="flex-1 ms-3 whitespace-nowrap">Surat Masuk</span>
              </a>
           </li>
           <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src={{asset('assets/suratkeluar.png')}} class="w-6">
                <span class="flex-1 ms-3 whitespace-nowrap">Surat Keluar</span>
             </a>
           </li>
           <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src={{asset('assets/arsip.png')}} class="w-6">
                <span class="flex-1 ms-3 whitespace-nowrap">Arsip Gubernur</span>
             </a>
           </li>
           <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <img src={{asset('assets/logout.png')}} class="w-6">
                <span class="flex-1 ms-3 whitespace-nowrap">Log Out</span>
             </a>
           </li>
        </ul>
     </div>
  </aside>
  
  <div class="p-4 sm:ml-64">
     <div class="p-4 rounded-lg mt-14">
        <div class="w-full py-1 flex flex-col items-center">
            <h1 class="font-inter font-bold text-newBlack">ADMINISTRASI PERSURATAN</h1>
            <h1 class="font-inter font-bold text-newBlack">BAPENDA</h1>
          </div>
            <div class="md:grid grid-cols-2 gap-2 mb-6">
              <div class="m-1 bg-gray-100 flex items-center justify-center border-solid border-2 rounded hover:bg-gray-200">
                <a href="surat-masuk" class="py-1.5 space-y-1 w-full flex flex-col text-center">
                  <img src="{{asset('assets/suratmasuk.png')}}" alt="" class="size-10 mx-auto">
                  <p class="font-inter text-biruMuda">SURAT MASUK</p>
                </a>
              </div>
        
              <div class="m-1 bg-gray-100 flex items-center justify-center border-solid border-2 rounded hover:bg-gray-200">
                <a href="surat-keluar" class="py-1.5 space-y-1 w-full flex flex-col text-center">
                  <img src="{{asset('assets/suratkeluar.png')}}" alt="" class="size-10 mx-auto">
                  <p class="font-inter text-biruMuda">SURAT KELUAR</p>
                </a>
              </div>
        
              <div class="m-1 bg-gray-100 flex items-center justify-center border-solid border-2 rounded hover:bg-gray-200">
                <a href="arsip-pergub" class="py-1.5 space-y-1 w-full flex flex-col text-center">
                  <img src="{{asset('assets/arsip.png')}}" alt="" class="size-10 mx-auto">
                  <p class="font-inter text-biruMuda">ARSIP</p>
                </a>
              </div>
        
              <div class="m-1 bg-gray-100 flex items-center justify-center border-solid border-2 rounded hover:bg-gray-200">
                <a href="/logout" class="py-1.5 space-y-1 w-full flex flex-col text-center">
                  <img src="{{asset('assets/logout.png')}}" alt="" class="size-10 mx-auto">
                  <p class="font-inter text-biruMuda">KELUAR</p>
                </a>
              </div>
            </div>
     </div>
  </div>

       

      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>
</html>