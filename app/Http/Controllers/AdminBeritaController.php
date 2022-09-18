<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;

class AdminBeritaController extends Controller
{
    public function store(Request $request)
    {   
        // File
        $filename_gambar = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->storeAs('gambar-berita',$filename_gambar);

        Berita::create([
            'gambar' => $filename_gambar,
            'tanggal' => $request->tanggal,
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
        ]);
        
        return redirect('/admin-berita');
    }

    public function update($id)
    {
        $berita = Berita::firstWhere('id',$id);
        
    }

    public function destroy($id)
    {
        $berita = Berita::firstWhere('id',$id);
        Storage::delete('gambar-berita/'.$berita->gambar);
        $berita->delete();
        return redirect("/admin-berita");
    }
}
