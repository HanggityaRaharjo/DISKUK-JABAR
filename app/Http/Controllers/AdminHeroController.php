<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;
use App\Models\Carousel;
use Illuminate\Support\Facades\Storage;

class AdminHeroController extends Controller
{
    public function store(Request $request)
    {
        // File
        $filename_gambar = $request->file('gambar')->getClientOriginalName();
        $request->file('gambar')->storeAs('gambar-hero',$filename_gambar);

        Hero::create([
            'gambar' => $filename_gambar,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/dashboard');
    }

    public function destroy($id)
    {
        $hero = hero::firstWhere('id',$id);
        Storage::delete('gambar-hero/'.$hero->gambar);
        $hero->delete();
        return redirect("/dashboard");
    }

    public function carousel_store(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'file|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ]);
         // File
         $filename_carousel = $request->file('file')->getClientOriginalName();
         $request->file('file')->storeAs('gambar-carousel',$filename_carousel);
 
         $validatedData = Carousel::create([
             'file' => $filename_carousel
         ]);
         return redirect('/dashboard');

    }
}
