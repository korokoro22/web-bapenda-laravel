<?php

namespace App\Http\Controllers;

use App\Models\suratKeluar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratkeluarController extends Controller
{
    public function index(Request $request) {
        $search = $request->search;
       
        $surat = suratKeluar::where('perihal', 'LIKE', '%' .$search. '%')
                            ->orWhere('isiringkas', 'LIKE', '%' .$search. '%')
                            ->orWhere('kepada', 'LIKE', '%' .$search. '%')
                            ->orWhere('tglsurat', 'LIKE', '%' .$search. '%')
                            ->orWhere('nosurat', 'LIKE', '%' .$search. '%')
                            ->paginate(10);

        return view('surat-keluar', ['suratKeluar'=> $surat]); 
    }

    public function create(){
        return view('keluar-tambah');
    }

    public function store(Request $request) {
        $validasiData = $request->validate([
            'nosurat' => 'required',
            'tglsurat' => 'required|date',
            'perihal' => 'required',
            'isiringkas' => 'max:500',
            'kepada' => 'required',
            'namafile' 
        ]);

        if($request->file('namafile')) {
            $validasiData['namafile'] = $request->file('namafile')->store('file-surat-keluar');
        }

        suratKeluar::create($validasiData);

        return redirect('surat-keluar')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $suratKeluarEdit = suratKeluar::findOrFail($id);
        return view('keluar-edit', ['suratKeluar' => $suratKeluarEdit]);
    }

    public function update(Request $request, $id) {
        $validasiData = SuratKeluar::findOrFail($id);
        $rules = [
            'nosurat' => 'required',
            'tglsurat' => 'required|date',
            'perihal' => 'required',
            'isiringkas' => 'max:500',
            'kepada' => 'required',
            'namafile' 
        ];

        $validasiData = $request->validate($rules);

        if($request->file('namafile')) {
            if($request->oldFile) {
                Storage::delete($request->oldFile);
            }
            $validasiData['namafile'] = $request->file('namafile')->store('file-surat-keluar');
        }

        SuratKeluar::where('id', $id)
                ->update($validasiData);

        return redirect('surat-keluar')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id){
        $suratKeluarDelete = SuratKeluar::findOrFail($id);

        if($suratKeluarDelete->namafile) {
            Storage::delete($suratKeluarDelete->namafile);
        }
        
        $suratKeluarDelete->delete();

        return redirect('surat-keluar')->with('success', 'Data berhasil dihapus');
    }

}
