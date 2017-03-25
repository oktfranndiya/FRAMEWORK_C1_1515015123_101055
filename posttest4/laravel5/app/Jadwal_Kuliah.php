<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Kuliah extends Model
{
    protected $table ='jadwal_kuliah';
    protected $fillable = ['mahasiswa_id', 'ruangan_id', 'dosen_matakuliah_id'];
}
