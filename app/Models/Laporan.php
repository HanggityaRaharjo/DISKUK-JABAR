<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $guarded = ['id'];

    public function jenis_laporan()
    {
        return $this->belongsTo(JenisLaporan::class);
    }
}
