<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    //id, nama_prodi, jenjang, id_fakultas
    protected $table = 'prodi';
    protected $fillable = ['id', 'nama_prodi', 'jenjang', 'id_fakultas'];
    public $timestamps = false;

}
