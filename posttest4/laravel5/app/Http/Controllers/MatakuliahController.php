<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function awal()
    {
        return view('Matakuliah.awal', ['data'=>Matakuliah::all()]);
    	// return "Welcome and Hello from MatakuliahController";
    }
    public function tambah()
    {
        return view('Matakuliah.tambah');
    	// return $this->simpan();
    }
    public function simpan(Requests $input)
    {
        $matakuliah = new Matakuliah();
        $matakuliah->title = $input->title;
        $matakuliah->keterangan = $input->keterangan;
        $informasi = $matakuliah->save() ? 'Berhasil simpan data' : 'Gagal simpan data';
        return redirect('Matakuliah')->with(['informasi'=>$informasi]);
    	// $matakuliah = new Matakuliah();
    	// $matakuliah->title = 'Pemrograman Framework (Laravel)';
    	// $matakuliah->keterangan = 'Wajib';
    	// $matakuliah->save();
    	// return "Data dengan nama matakuliah {$matakuliah->title} telah disimpan";
    }
    public function edit($id)
    {
        $matakuliah = Matakuliah::find($id);
        return view('Matakuliah.edit')->with(array('Matakuliah'=>$matakuliah));
    }
    public function lihat($id)
    {
        $matakuliah = Matakuliah::find($id);
        return view('Matakuliah.lihat')->with(array('Matakuliah'=>$matakuliah));
    }
    public function update($id, Request $input)
    {
        $matakuliah = Matakuliah::find($id);
        $matakuliah->title = $input->title;
        $matakuliah->keterangan = $input->keterangan;
        $informasi = $matakuliah->save() ? 'Berhasil update data' : 'Gagal update data';
        return redirect('Matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $matakuliah = Matakuliah::find($id);
        $informasi = $matakuliah->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('Matakuliah')->with(['informasi'=>$informasi]);
    }
}
