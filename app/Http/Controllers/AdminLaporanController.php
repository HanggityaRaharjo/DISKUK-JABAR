<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Laporan;


class AdminLaporanController extends Controller
{
    public function store(Request $request)
    {
        $tanggal = Carbon::now()->isoFormat('D-MMMM-Y');
        // File
        $filename = $tanggal.$request->file('file')->getClientOriginalName();
        $request->file('file')->storeAs('file-laporan',$filename);
       
        Laporan::create([           
            "tanggal" => $tanggal,
            "nama_file" => $filename,
            "file" => $filename,
            "jenis_laporan" => $request->jenis_laporan,
        ]);

        return redirect('/admin-laporan')->with('Sukses', 'File Sukses Terupload');
    }

    public function transparansi_anggaran()
    {
        return view('admin.transparansi-anggaran');
    }
}