<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal_Kuliah extends Model
{
    protected $table ='jadwal_kuliah';
    protected $fillable = ['mahasiswa_id', 'ruangan_id', 'dosen_matakuliah_id'];
    // protected $guarded =['id'];

    public function Mahasiswa(){
    	return $this->belongsTo(
    		Mahasiswa::class);
    }
    public function Ruangan()
    {
    	return $this->belongsTo(Ruangan::class);
    }
    public function Dosen_Matakuliah()
    {
    	return $this->belongsTo(
    		Dosen_Matakuliah::class, 'dosen_matakuliah_id');
    }
    // public function getNamadsnAttribute(){
    //     return $this->Dosen_Matakuliah->dosen->nama;
    // }
    // public function getNipdsnAttribute(){
    //     return $this->Dosen_Matakuliah->dosen->nip;
    // }
    // public function getMKdsnAttribute(){
    //     return $this->Dosen_Matakuliah->matakuliah->title;
    // }
    
    // public function getNamamhsAttribute(){
    //     return $this->Mahasiswa->nama;
    // }

    // public function getNimAttribute(){
    //     return $this->Mahasiswa->nim;
    // }
    // public function getTitleruanganAttribute(){
    //     return $this->Ruangan->title;
    // }
}
