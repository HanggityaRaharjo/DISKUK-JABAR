<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Regulasi;

class AdminRegulasiController extends Controller
{
    public function store(Request $request)
    {
        $tanggal = Carbon::now()->isoFormat('D MMMM Y');
        
        $validatedData = $request->validate([
            'nama' => 'required',
            'file' => 'file|mimes:pdf',
            'keterangan' => 'required',
            'jenis' => 'required',
        ]);
        
        $validatedData = Regulasi::create([           
            'tanggal_dibuat' => $tanggal,
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,
            'jenis' => $request->jenis,
            'file' => $request->file('file')->store('file-regulasi')
        ]);
        
        return redirect('/admin-regulasi');
    }

    public function destroy($id)
    {
        $berita = Regulasi::where('id',$id)->delete();
        return redirect("/admin-regulasi");
    }

}
