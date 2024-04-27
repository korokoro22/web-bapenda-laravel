@extends('main-layout.layout')
@section('title', 'home')

@section('content')
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
    

    
@endsection