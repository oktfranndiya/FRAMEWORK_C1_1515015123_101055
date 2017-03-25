<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Ruangan;

class RuanganController extends Controller
{
    public function awal()
    {
        return view('Ruangan.awal',['data'=>Ruangan::all()]);
    	// return "Welcome and Hello from RuanganController";
    }
    public function tambah()
    {
        return view('Ruangan.tambah');
    	// return $this->simpan();
    }
    public function simpan(Requests $input)
    {
        $ruangan = new Ruangan();
        $ruangan->title = $input->title;
        $informasi = $Ruangan->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('Ruangan')->with(['informasi'=>$informasi]);
    	// $ruangan = new Ruangan();
    	// $ruangan->title = 'Lab BP';
    	// $ruangan->save();
    	// return "Data dengan nama ruangan {$ruangan->title} telah disimpan";
    }
    public function edit($id)
    {
        $ruangan = Ruangan::find($id);
        return view('Ruangan.edit')->with(array('Ruangan'=>$ruangan));
    }
    public function lihat($id)
    {
        $ruangan = Ruangan::find($id);
        return view('Ruangan.lihat')->with(array('Ruangan'=>$ruangan));
    }
    public function update($id, Request $input)
    {
        $ruangan = Ruangan::find($id);
        $ruangan->title = $input->title;
        $informasi = $ruangan->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('Ruangan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ruangan = Ruangan::find($id);
        $informasi = $ruangan->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('Ruangan')->with(['informasi'=>$informasi]);
    }
}
