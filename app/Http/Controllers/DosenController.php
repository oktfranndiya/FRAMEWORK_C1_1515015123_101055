<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    public function awal()
    {
    	return "Welcome and Hello dari DosenController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new Dosen();
    	$dosen->nama = 'Rayhan';
    	$dosen->nip = '694876632';
    	$dosen->alamat = 'Perum Sempaja Lestari Indah';
    	$dosen->pengguna_id=1;
    	$dosen->save();
    	return "Data dengan nama Dosen {$dosen->nama} telah disimpan";
    }
}
