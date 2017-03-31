<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';

    public function awal()
    {
        $semuaMahasiswa = Mahasiswa::all();
        return view('Mahasiswa.awal', compact('semuaMahasiswa'));
    	// return "Welcome and Hello from MahasiswaController";
    }
    public function tambah()
    {
        return view('Mahasiswa.tambah');
    	// return $this->simpan();
    }
    public function simpan(Request $input)
    {
        $pengguna = new pengguna($input->only('username', 'password'));
        if($pengguna->save()){
            $mahasiswa = new Mahasiswa;
            $mahasiswa->nama = $input->nama;
            $mahasiswa->nim = $input->nim;
            $mahasiswa->alamat = $input->alamat;
            if($pengguna->Mahasiswa()->save($ahasiswa)) $this->informasi='Berhasil simpan data';
        }
        return redirect ('Mahasiswa')->with(['informasi'=>$this->informasi]);     
    // 	$mahasiswa = new Mahasiswa();
    // 	$mahasiswa->nama = 'Oktafira';
    // 	$mahasiswa->nim = '1515015123';
    // 	$mahasiswa->alamat = 'Sempaja Lestari Indah';
    // 	$mahasiswa->pengguna_id= 1;
    // 	$mahasiswa->save();
    // 	return "Data dengan nama mahasiswa {$mahasiswa->nama} telah disimpan";
    // }
    }
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('Mahasiswa.edit')->with(array('Mahasiswa'=>$mahasiswa));
    }
    public function lihat($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('Mahasiswa.lihat')->with(array('Mahasiswa'=>$mahasiswa));
    }
    public function update($id, Request $input)
    {
       $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat = $input->alamat;
        $mahasiswa->pengguna_id = $input->pengguna_id;
        if(!is_null($input->username)){
            $pengguna = $mahasiswa->pengguna->fill($input->only('username'));
                if(!empty($input->password)) $pengguna->password = $input->password;
                if($pengguna->save()) $this->informasi = 'Berhasil simpan data';
        }
        else{
            $this->informasi = 'Berhasil simpan data';
        }
        return redirect ('Mahasiswa') -> with (['informasi'=>$this->informasi]);
}
    public function hapus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if($mahasiswa->pengguna()->delete()){
            if($mahasiswa->delete()) $this->informasi = 'Berhasil hapus data';
        }
        
        return redirect('Mahasiswa')-> with(['informasi'=>$this->informasi]);
}
}

