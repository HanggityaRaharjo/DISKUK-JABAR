<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLaporan extends Model
{
    protected $guarded = ['id'];

    public function laporans()
    {
        return $this->hasMany(Laporan::class);
    }
}
