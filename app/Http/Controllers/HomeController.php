<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Http\UploadedFile\getClientOriginalName;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Berita;
use App\Models\Galeri;
Use App\Models\Regulasi;
Use App\Models\PermohonanPpid;
Use App\Models\Hero;
Use App\Models\Carousel;
Use App\Models\DataKoperasi;


class HomeController extends Controller
{
    public function index()
    {
        $galeris = galeri::latest()->get();
        $cekData = Berita::all()->count();
        $beritas = Berita::latest()->get();
        $hero = $hero = Hero::latest()->first();
        $carousels = Carousel::latest()->limit(6)->get();
        return view('index',compact('beritas','cekData','galeris','hero','carousels') );
    }

    public function profil_dinas()
    {
        return view('profildinas');
    }

    public function bidang_kerja()
    {
        return view('bidangkerja');
    }

    public function regulasi()
    {
        $regulasis = Regulasi::all();
        return view('regulasi',compact('regulasis'));
    }

    public function laporan()
    {
        return view('laporan');
    }

    public function data_koperasi()
    {
        $data = DataKoperasi::latest()->first();
        return view('data-koperasi',compact('data'));
    
    }

    public function ppid()
    {
        return view('ppid');
    }

    public function permohonan_ppid()
    {
        return view('permohonan-ppid');
    }

    public function store_permohonan_ppid(Request $request)
    {
        $tanggal = Carbon::now()->isoFormat('D-MMMM-Y');
        $data = $request->validate([
            'nama' => 'required',
            'email' => 'email:rfc,dns',
            'upload_ktp' => 'file|mimes:jpg,jpeg,png,bmp,tiff',
            'upload_tanda_tangan' => 'file|mimes:jpg,jpeg,png,bmp,tiff'
        ]);
        
        // File
        $filename_ktp = $tanggal.$request->file('upload_ktp')->getClientOriginalName();
        $request->file('upload_ktp')->storeAs('upload-ktp',$filename_ktp);
        $filename_tanda_tangan = $tanggal.$request->file('upload_tanda_tangan')->getClientOriginalName();
        $request->file('upload_tanda_tangan')->storeAs('upload-tanda-tangan',$filename_tanda_tangan);
        
        $data = PermohonanPpid::create([           
            "tanggal" => $tanggal,
            "nama" => $request->nama,
            "email" => $request->email,
            "nik" => $request->nik,
            "kontak" => $request->kontak,
            "alamat" => $request->alamat,
            "permintaan_informasi" => $request->permintaan_informasi,
            "tujuan" => $request->tujuan,
            "upload_ktp" => $filename_ktp,
            "upload_tanda_tangan" => $filename_tanda_tangan,
            "cara_mendapatkan" => $request->cara_mendapatkan,
            "cara_memberikan" => $request->cara_memberikan
        ]);

        Mail::to([$request->email])->send(new SendEmail($data));
        Alert::success('Sukses', 'Data Sukses Terkirim');
        return back();
    }
}


