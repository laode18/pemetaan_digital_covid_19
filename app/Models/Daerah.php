<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Daerah extends Model
{
    public $table = 'tb_daerah';
    protected $primaryKey = 'id_daerah';
    public $timestamps = false;

    protected $fillable = [
        'id_daerah', 'nama_daerah', 'kode_pos', 'luas_wilayah', 'jumlah_penduduk'
    ];
}
