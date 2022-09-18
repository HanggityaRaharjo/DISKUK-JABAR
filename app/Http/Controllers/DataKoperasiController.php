<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataKoperasi;

class DataKoperasiController extends Controller
{
    public function data_koperasi_tahun($tahun)
    {
        $datas = DataKoperasi::where('tahun',$tahun)->get();
        $tahun = $tahun;
        return view('data-koperasi-tahun',compact('datas','tahun'));
    }
}
