<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayarans';
    protected $fillable = ['id_petugas','nisn','tgl_bayar','bulan_bayar','tahun_bayar','id_spp','jumlah_bayar'];

    public function siswa() {
        return $this->belongsTo('App\Models\Siswa');
    }

    public function petugas() {
        return $this->belongsTo('App\Models\Petugas');
    }

    public function spps() {
        return $this->belongsTo('App\Models\SPP');
    }
}
