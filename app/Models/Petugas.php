<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;

    protected $table = 'petugas';
    protected $fillable = ['username','password','level'];

    protected $primaryKey = 'id';

    public function pembayaran() {
        return $this->hasMany('App\Models\Pembayaran');
    }
}
