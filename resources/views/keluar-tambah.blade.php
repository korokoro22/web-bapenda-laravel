@extends('main-layout.layout')
@section('title', 'Tambah Data')

@section('content')
<div class=" mt-6 w-11/12 mx-auto border-b border-black">
    <p class="font-inter font-bold ml-7">PENAMBAHAN SURAT KELUAR</p>
</div>
<div class="mt-8 w-9/12 mx-auto">
<form action="{{route('surat-keluar.store')}}" method="post" class="mx-auto" enctype="multipart/form-data">
    @csrf
    <div class=" mt-5 w-full">
        <label for="nosurat" class="block mb-2 text-lg font-semibold font-inter">Nomor Surat</label>
        <input type="text" id="nosurat" class="border-2 border-gray-300 rounded px-3 py-2 w-full {{--@error('nosurat') is-invalid  @enderror--}} " name="nosurat" value="{{old('nosurat')}}" required autofocus>
    </div>
    {{-- @error('nosurat')
        <div class="mb-5">{{$message}}</div>
    @enderror --}}
    <div class="mb-5 w-full">
        <lable class="text-lg font-semibold font-inter">Tanggal Surat</lable> <br>
        <input id="datepicker" class="border-2 border-gray-300 rounded px-3 py-2 w-full" type="text" placeholder="Select a date" name="tglsurat" value="{{old('tglsurat')}}" required autofocus>
    </div>
    <div class="mb-5 mt-5 w-full">
        <label for="nomor-surat" class="block mb-2 text-lg font-semibold font-inter">Perihal</label>
        <input type="text" id="nomor-surat" class="border-2 border-gray-300 rounded px-3 py-2 w-full" name="perihal" value="{{old('perihal')}}" required autofocus>
    </div>
    <div class="mb-5 w-full">
        <label for="ringkasan" class="block text-lg font-semibold font-inter">Ringkasan Surat</label>
        <textarea id="ringkasan" cols="30" rows="5" class="block border-2 border-gray-300 rounded px-3 py-2 w-full resize-none" name="isiringkas" value="{{old('isiringkas')}}"></textarea>
    </div>
    <div class="mb-5 w-full">
        <label for="kepada" class="block mb-2 text-lg font-semibold font-inter">Kepada</label>
        <input type="text" id="kepada" class="border-2 border-gray-300 rounded px-3 py-2 w-full" name="kepada" value="{{old('kepada')}}" required autofocus>
    </div>
    <div class="mb-5 w-full">
        <label for="file" class="block w-full font-semibold font-inter">Upload Surat</label>
        {{-- <img class="file-preview" class="h-1"> --}}
        <input type="file" class="block w-full" name="namafile" id="file" {{--onchange="previewFile()"--}}>
    </div>
    <div class="mb-5 w-full ">
        <button type="submit" class="p-2 rounded-md text-white bg-green-500 mr-2 hover:bg-green-700 font-inter">SIMPAN</button>
        <a href="surat-keluar" class="p-2 rounded-md bg-gray-400 hover:bg-gray-600 text-white font-inter">KEMBALI</a>
    </div>

    
</form>
</div>

{{-- <script>
    function previewFile(){
        const file = document.querySelector('#file');
        const filePreview = document.querySelector('.file-preview');

        filePreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(file.files[0]);

        oFReader.onload = function(oFREvent) {
            filePreview.src = oFREvent.target.result;
        }
    }
</script> --}}

@endsection