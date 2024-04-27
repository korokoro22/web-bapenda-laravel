<?php

namespace App\Http\Controllers;

use App\Models\suratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratmasukController extends Controller
{
    public function index(Request $request) {
        $search = $request->search;

        $surat = suratMasuk::where('perihal', 'LIKE', '%' .$search. '%')
                ->orWhere('isiringkas', 'LIKE', '%' .$search. '%')
                ->orWhere('pengirim', 'LIKE', '%' .$search. '%')
                ->orWhere('tglsurat', 'LIKE', '%' .$search. '%')
                ->orWhere('nosurat', 'LIKE', '%' .$search. '%')
                ->orWhere('tglterima', 'LIKE', '%' .$search. '%')
                ->paginate(10);
        return view('surat-masuk', ['suratMasuk'=> $surat]); 
    }

    public function create(){
        return view('masuk-tambah');
    }

    public function store(Request $request) {

        // dd($request);

        // jangan lupa di db ubah 'namafile' biar nda nullable
        $validasiData = $request->validate([
            'nosurat' => 'required',
            'tglsurat' => 'required|date',
            'perihal' => 'required',
            'isiringkas' => 'max:500',
            'pengirim' => 'required',
            'tglterima' => 'date',
            'tglteruskan' => 'date',
            'namafile' 
        ]);

        if($request->file('namafile')) {
            $validasiData['namafile'] = $request->file('namafile')->store('file-surat-masuk');
        }

        suratMasuk::create($validasiData);

        return redirect('surat-masuk')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $suratMasukEdit = suratMasuk::findOrFail($id);
        return view('masuk-edit', ['suratMasuk' => $suratMasukEdit]);
    }

    public function update(Request $request, $id) {
        $validasiData = suratMasuk::findOrFail($id);
        $rules = [
            'nosurat' => 'required',
            'tglsurat' => 'required|date',
            'perihal' => 'required',
            'isiringkas' => 'max:500',
            'pengirim' => 'required',
            'tglterima' => 'date',
            'tglteruskan' => 'date',
            'namafile' 
        ];

        $validasiData = $request->validate($rules);
        
        if($request->file('namafile')) { //jika ada file yg diinput/update, jalankan yg di dalam kurung kurawal
            if($request->oldFile) { //jika ada file yg lama 
                Storage::delete($request->oldFile); //hapus file di storage
            }
            $validasiData['namafile'] = $request->file('namafile')->store('file-surat-masuk'); //tambahkan gambar ke dalam data yg akan diupdate sekaligus simpan(store) file yg diinput ke dalam folder 'file-surat'
        }

        suratMasuk::where('id', $id)
                ->update($validasiData);

        // $validasiData->update($request->all());

        return redirect('surat-masuk')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id) {
        $suratMasukDelete = suratMasuk::findOrFail($id);
        if($suratMasukDelete->namafile) {
            Storage::delete($suratMasukDelete->namafile);
        }
        $suratMasukDelete->delete();

        return redirect('surat-masuk')->with('success', 'Data berhasil dihapus');
    }
}
