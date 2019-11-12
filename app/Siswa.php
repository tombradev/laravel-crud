<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //database naming confention of Siswa tabel
    protected $table = 'siswa';
    protected $fillable = ['firstname','lastname','sex','religion','address']; // error due to mass assignment
}
