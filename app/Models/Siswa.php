<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = ['nisn','nis','nama','id_kelas','alamat','no_telp','id_spp'];

    public function kelas() {
        return $this->belongsTo('App\Models\Kelas');
    }
    public function SPP() {
        return $this->belongsTo('App\Models\SPP');
    }

    public function pembayaran() {
        return $this->hasMany('App\Models\Pembayaran');
    }
}
