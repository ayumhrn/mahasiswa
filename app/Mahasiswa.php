<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{

    public $fillable = ['nama', 'nim', 'email', 'jurusan', 'prodi'];
    public $timestamps = false;
}
