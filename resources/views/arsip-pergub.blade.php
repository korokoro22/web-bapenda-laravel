@extends('main-layout.layout')
@section('title', 'Arsip Pergub')

@section('content')

<form action="/arsip-pergub">
    <div class="w-11/12 mx-auto mt-4">
        <div class="relative mb-4 flex w-full flex-wrap items-stretch">
        <input
            type="text"
            class="relative m-0 -mr-0.5 block min-w-0 flex-auto rounded-l border border-solid px-2 py-2 text-zinc-900 font-inter focus:outline-zinc-600"
            placeholder="Silahkan cari surat yang anda inginkan (Berdasarkan: NOMOR-SURAT, TANGGAL-SURAT, PERIHAL, KEPADA, ISI-RINGKAS)"
            name="search"
            value="{{request('search')}}"  />
    
        <!--Search button-->
        <button
            class="relative z-[2] rounded-r px-6 py-2 text-xs font-medium uppercase bg-blue-500 text-white hover:bg-blue-700 font-inter"
            type="submit"
            >
            PENCARIAN
        </button>
        </div>
    </div>
</form>

<div class="ml-14 mt-6 "><a href="arsip-pergub/create" class="bg-blue-500 p-2 rounded-md text-white hover:bg-blue-700 font-inter">TAMBAH DATA</a></div>

@if (session()->has('success'))
    <div class="w-11/12 mx-auto p-4 mb-2 mt-6 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        <span class="font-medium">{{session('success')}}</span>
    </div>
@endif

<div class="w-11/12 mx-auto my-7 shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 font-inter">
            <tr>
                <th scope="col" class="px-6 py-3">
                    NOMOR SURAT
                </th>
                <th scope="col" class="px-6 py-3">
                    TANGGAL SURAT
                </th>
                <th scope="col" class="px-6 py-3">
                    PERIHAL
                </th>
                <th scope="col" class="px-6 py-3">
                    ISI RINGKAS
                </th>
                <th scope="col" class="px-6 py-3">
                    BERKAS
                </th>
                <th scope="col" class="px-6 py-3">
                    AKSI
                </th>
            </tr>
        </thead>
        <tbody class="font-inter">
            @foreach ($arsipPergub as $arsip)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="row" class="px-6 py-4">
                    {{$arsip->nosurat}}
                </td>
                <td class="px-6 py-4">
                    {{$arsip->tglsurat}}
                </td>
                <td class="px-6 py-4">
                    {{$arsip->perihal}}
                </td>
                <td class="px-6 py-4">
                    {{$arsip->isiringkas}}
                </td>
                <td class="px-4 py-4">
                    {{$arsip->namafile}}
                </td>
                <td class="px-6 py-4">
                    <a href="arsip-pergub/{{$arsip->id}}/edit" class="bg-yellow-300 hover:bg-yellow-700 text-white font-bold py-2 px-6 rounded">Edit</a>
                    
                    <form action="arsip-pergub/{{$arsip->id}}" method="POST" class="mt-3">
                        @method('delete')
                        @csrf
                        <button type="submit" class=" bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-3 rounded" onclick="return confirm('Hapus data ini?')">
                            HAPUS
                          </button>
                    </form>
                    {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a> --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="w-11/12 mt-4 mb-4 mx-auto">
    {{$arsipPergub->links('vendor.pagination.simple-tailwind')}}
</div>



@endsection