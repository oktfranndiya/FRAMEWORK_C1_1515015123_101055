<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen_Matakuliah extends Model
// {
//     protected $table ='dosen_matakuliah';
//     protected $fillable = ['dosen_id', 'matakuliah_id'];

    // public function Dosen()
    // {
    // 	return $this->belongsTo(Dosen::class);
    // }
    //    public function Matakuliah()
    // {
    //     return $this->belongsTo(Matakuliah::class);
    // }
    //   public function Jadwal_Kuliah()
    // {
    //     return $this->hasMany(Jadwal_Kuliah::class);
    // }
    //   public function getNamadosenAttribute()
    // {
    //     return $this->Dosen->nama;
    // }
    // public function getNipdosenAttribute()
    // {
    //     return $this->Dosen->nip;
    // }
    // public function getTitlematakuliahAttribute()
    // {
    //     return $this->Matakuliah->title;
    // }
  //   public function listDosenDanMatakuliah()
  //   {
  //       $out = [];
  //       foreach ($this->all() as $dsnMtk) {
  //           $out[$dsnMtk->id] = "{$dsnMtk->Dosen->nama} {$dsnMtk->Dosen->nip} (Matakuliah{$dsnMtk->Matakuliah->title})";
  //       }
  //       return $out;
  //   }
  // }
{
    protected $table = 'Dosen_Matakuliah';
    protected $fillable = ['dosen_id','matakuliah_id'];

     public function Dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    public function Matakuliah()
    {
        return $this->belongsTo(Matakuliah::class);
    }

    public function Jadwal_Matakuliah()
    {
        return $this->hasMany(Jadwal_Kuliah::class);
    }

    public function getNamadosenAttribute(){
        return $this->Dosen->nama;
    }

    public function getNipdosenAttribute(){
        return $this->Dosen->nip;
    }
    
    public function getTitlematakuliahAttribute(){
        return $this->Matakuliah->title;
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
