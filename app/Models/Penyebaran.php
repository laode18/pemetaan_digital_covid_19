<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penyebaran extends Model
{
    public $table = 'tb_datapenyebaran';
    protected $primaryKey = 'id_penyebaran';
    public $timestamps = false;

    protected $fillable = [
        'id_penyebaran', 'tanggal_pelaksanaan', 'jumlah_peserta', 'jumlah_peserta_vaksin1', 'jumlah_peserta_vaksin2', 'jumlah_peserta_vaksin3', 'no_batch1', 'no_batch2', 'no_batch3', 'keterangan', 'id_daerah', 'longtitude', 'lattitude'
    ];
}
