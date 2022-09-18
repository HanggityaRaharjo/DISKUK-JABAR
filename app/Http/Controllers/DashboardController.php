<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Galeri;
use App\Models\Regulasi;
use App\Models\PermohonanPpid;
use App\Models\Hero;
use App\Models\Carousel;
use App\Models\DataKoperasi;


class DashboardController extends Controller
{
    public function index()
    {
        $cekBerita = Berita::all()->count();
        $berita = Berita::latest()->first();
        $hero = Hero::latest()->first();
        $carousels = Carousel::latest()->limit(6)->get();
    
        
        return view('admin.dashboard',compact('cekBerita','berita','hero','carousels'));
    }

    public function admin_regulasi()
    {
        $regulasis = Regulasi::latest()->get();
        return view('admin.regulasi',compact('regulasis'));
    }

    public function regulasi_pusat()
    {
        $regulasis = Regulasi::where('jenis','Regulasi Pusat')->latest()->get();
        return view('admin.regulasi',compact('regulasis'));
    }

    public function regulasi_daerah()
    {
        $regulasis = Regulasi::where('jenis','Regulasi Daerah')->latest()->get();
        return view('admin.regulasi',compact('regulasis'));
    }

    public function admin_berita()
    {
        $cekData = Berita::all()->count();
        $beritas = Berita::all()->sortByDesc('tanggal');
        return view('admin.berita',compact('beritas','cekData'));
    }

    public function admin_galeri()
    {
        $galeris = Galeri::all();
        return view('admin.galeri',compact('galeris'));
    }

    public function admin_data_koperasi()
    {
        $datas = DataKoperasi::all();
        return view('admin.data-koperasi',compact('datas'));
    }

    public function admin_data_user()
    {
        return view('admin.data-user');
    }

    public function admin_ppid()
    {
        $datas = PermohonanPpid::all();
        return view('admin.ppid',compact('datas'));
    }

    public function admin_laporan()
    {
        return view('admin.laporan');
    }
    
    public function admin_formulir_ppid($id)
    {
        $data = PermohonanPpid::firstWhere('id',$id);
        return view('admin.detail-ppid',compact('data'));
    }
}
