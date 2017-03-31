<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    public function awal()
    {
       return view('Dosen.awal',['data'=>Dosen::all()]);
    	// return "Welcome and Hello dari DosenController";
    }
    public function tambah()
    {
        return view('Dosen.tambah');
    	// return $this->simpan();
    }
    public function simpan(Request $input)
    {
        $dosen = new Dosen();
        $dosen ->username = $input->username;
        $pengguna ->password =  $input->password;
        $informasi = $dosen ->save()?'Berhasil simpan data': 'Gagal simpan data';
        return redirect('Dosen')->with(['informasi'=>$informasi]);
    	// $dosen = new Dosen();
    	// $dosen->nama = 'Rayhan';
    	// $dosen->nip = '694876632';
    	// $dosen->alamat = 'Perum Sempaja Lestari Indah';
    	// $dosen->pengguna_id=1;
    	// $dosen->save();
    	// return "Data dengan nama Dosen {$dosen->nama} telah disimpan";
    }
    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('Dosen.edit')-> with(array('Dosen'=>$dosen));
    }
    public function lihat($id)
    {
        $dosen = Dosen::find($id);
        return view('Dosen.lihat')->with(array('Dosen'=>$dosen));
    }
    public function update($id, Request $input)
    {
        $dosen = Dosen::find($id);
        $dosen -> nama = $input->nama;
        $dosen -> nip = $input->nip;
        $dosen -> alamat = $input->alamat;
        $dosen -> pengguna_id = $input->pengguna_id;
        $informasi = $dosen ->update()?'Berhasil update data': 'Gagal update data';
        return redirect('Dosen')->with(['informasi'=>$informasi]);
}
    public function hapus($id)
    {
    $dosen = Dosen::find($id);
       
    $informasi = $dosen ->delete()?'Berhasil hapus data': 'Gagal hapus data';
        return redirect('Dosen')->with(['informasi'=>$informasi]);
}
}