<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeri;

class AdminGaleriController extends Controller
{
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'gambar' => 'image|file'
        ]);

        if($request->file('gambar'))
        {
            $validatedData['gambar'] = $request->file('gambar')->store('gambar-galeri');
        }

        Galeri::create($validatedData);
        
        return redirect('/admin-galeri');
    }

    public function destroy($id)
    {
        $galeri = Galeri::where('id',$id)->delete();
        return redirect("/admin-galeri");
    }
}
