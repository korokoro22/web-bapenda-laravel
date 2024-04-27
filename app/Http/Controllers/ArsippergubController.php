<?php

namespace App\Http\Controllers;

use App\Models\Arsippergub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArsippergubController extends Controller
{
    public function index(Request $request) {
        $search = $request->search;

        $arsip = Arsippergub::where('perihal', 'LIKE', '%'.$search.'%')
                ->orWhere('isiringkas', 'LIKE', '%' .$search. '%')
                ->orWhere('tglsurat', 'LIKE', '%' .$search. '%')
                ->orWhere('nosurat', 'LIKE', '%' .$search. '%')
                ->paginate(10);

        return view('arsip-pergub', ['arsipPergub' => $arsip]);
    }

    public function create(){
        return view('arsip-tambah');
    }

    public function store(Request $request) {

        // dd($request);

        // jangan lupa di db ubah 'namafile' biar nda nullable
        $validasiData = $request->validate([
            'nosurat' => 'required',
            'tglsurat' => 'required|date',
            'perihal' => 'required',
            'isiringkas' => 'max:500',
            'namafile' 
        ]);

        if($request->file('namafile')) {
            $validasiData['namafile'] = $request->file('namafile')->store('file-arsip-pergub');
        }

        Arsippergub::create($validasiData);

        return redirect('arsip-pergub')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $arsipPergubEdit = Arsippergub::findOrFail($id);
        
        return view('arsip-edit', ['arsipPergub' => $arsipPergubEdit]);
    }

    public function update(Request $request, $id) {
        $validasiData = Arsippergub::findOrFail($id);
        $rules = [
            'nosurat' => 'required',
            'tglsurat' => 'required|date',
            'perihal' => 'required',
            'isiringkas' => 'max:500',
            'namafile' 
        ];

        $validasiData = $request->validate($rules);
        
        if($request->file('namafile')) { //jika ada file yg diinput/update, jalankan yg di dalam kurung kurawal
            if($request->oldFile) { //jika ada file yg lama 
                Storage::delete($request->oldFile); //hapus file di storage
            }
            $validasiData['namafile'] = $request->file('namafile')->store('file-arsip-pergub'); //tambahkan gambar ke dalam data yg akan diupdate sekaligus simpan(store) file yg diinput ke dalam folder 'file-surat'
        }

        Arsippergub::where('id', $id)
                ->update($validasiData);

        // $validasiData->update($request->all());

        return redirect('arsip-pergub')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id) {
        $arsipPergubDelete = Arsippergub::findOrFail($id);
        if($arsipPergubDelete->namafile) {
            Storage::delete($arsipPergubDelete->namafile);
        }
        $arsipPergubDelete->delete();

        return redirect('arsip-pergub')->with('success', 'Data berhasil dihapus');
    }
}

