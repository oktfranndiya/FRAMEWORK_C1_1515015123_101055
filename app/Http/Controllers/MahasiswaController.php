<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
    {
    	return "Welcome and Hello from MahasiswaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new Mahasiswa();
    	$mahasiswa->nama = 'Oktafira';
    	$mahasiswa->nim = '1515015123';
    	$mahasiswa->alamat = 'Sempaja Lestari Indah';
    	$mahasiswa->pengguna_id= 1;
    	$mahasiswa->save();
    	return "Data dengan nama mahasiswa {$mahasiswa->nama} telah disimpan";
    }
}
