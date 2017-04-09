<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table ='dosen';
    protected $fillable = ['nama', 'nip', 'alamat'];

    public function pengguna()
    {
    	return $this->belongsTo(pengguna::class);
    }
    public function Dosen_Matakuliah()
    {
    	return $this->hasMany(
    		Dosen_Matakuliah::class);
    }
    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }
    public function listDosenDanNip()
    {
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
        }
        return $out;
    }
    public function listDosenDanMatakuliah()
    {
        $out = [];
        foreach ($this->all() as $dsnMtk) {
            $out[$dsnMtk->id] = "{$dsnMtk->Dosen->nama} {$dsnMtk->Dosen->nip} (Matakuliah {$dsnMtk->Matakuliah->title})";
        }
        return $out;
    }
}

