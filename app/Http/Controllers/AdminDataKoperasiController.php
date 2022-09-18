<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKoperasi;
use Illuminate\Support\Facades\Storage;

class AdminDataKoperasiController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tahun' => 'required',
            'file' => 'file|mimes:pdf',
        ]);
        // File
        $filename_koperasi = $request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('file-koperasi',$filename_koperasi);

        $validatedData = DataKoperasi::create([
            'tahun' => $request->tahun,
            'file' => $filename_koperasi,
        ]);

        return redirect('/admin-data-koperasi');
    }

    public function destroy($id)
    {
        $data = DataKoperasi::firstWhere('id',$id);
        Storage::delete('file-koperasi/'.$data->file);
        $data->delete();
        return redirect("/admin-data-koperasi");
    }

    public function admin_data_koperasi_tahun($tahun)
    {
        $datas = DataKoperasi::where('tahun',$tahun)->get();
        $tahun = $tahun;
        return view('admin.data-koperasi-tahun',compact('datas','tahun'));
    }
}
