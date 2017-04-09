<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table ='mahasiswa';
    protected $fillable = ['nama', 'nim', 'alamat','pengguna_id'];
    
    public function pengguna()
    {
    	return  $this->belongsTo(pengguna::class);
    }
    public function Jadwal_Kuliah()
    {
      return $this->hasMany(Jadwal_Kuliah::class, 'Mahasiswa_id');
    }
    public function listMahasiswaDanNim()
    {
        $out = [];
        foreach ($this->all() as $mhs) {
            $out[$mhs->id] = "{$mhs->nama} ({$mhs->nim})";
        }
        return $out;
    }
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }
}
