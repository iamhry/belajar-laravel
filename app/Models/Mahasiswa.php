<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //id, nama, nim,id_prodi
    protected $table = 'mahasiswa';
    protected $fillable = ['id', 'nama', 'nim', 'id_prodi'];
    public $timestamps = false;
    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi', 'id');
    }
}
