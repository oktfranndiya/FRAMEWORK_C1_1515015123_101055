<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Kuliah;

class Jadwal_KuliahController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    public function awal()
    {
        $semuaJadwal_Kuliah = Jadwal_Kuliah::all();

        return view('Jadwal_Kuliah.awal', compact('semuaJadwal_Kuliah'));
    	// return "Welcome and Hello from Jadwal_KuliahController";
    }
    public function tambah()
    {
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('Jadwal_Kuliah.tambah',compact('Mahasiswa','Ruangan','Dosen_Matakuliah'));
    	// return $this->simpan();
    }
    public function simpan(Request $input)
    {
        $jadwal_kuliah = new Jadwal_Matakuliah($input->only('ruangan_id','dosen_matakuliah_id','   mahasiswa_id'));
            if($jadwal_kuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil disimpan";
            return redirect('Jadwal_Kuliah')->with(['informasi'=>$this->informasi]);
    	// $jadwal_kuliah = new Jadwal_Kuliah();
    	// $jadwal_kuliah->mahasiswa_id = 1;
    	// $jadwal_kuliah->ruangan_id = 1;
    	// $jadwal_kuliah->dosen_matakuliah_id = 1;
    	// $jadwal_kuliah->save();
    	// return "Data dengan jadwal id mahasiswa {$jadwal_kuliah->mahasiswa_id} telah disimpan";
    }
    public function lihat($id){
        $jadwal_Kuliah = Jadwal_Kuliah::find($id);
        return view('jadwal_Kuliah.lihat',compact('jadwal_Kuliah'));
    }
    public function edit($id){
        $jadwal_Kuliah = Jadwal_Kuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('Jadwal_Kuliah.edit',compact('Mahasiswa','Ruangan','Dosen_Matakuliah','Jadwal_Kuliah'));
    }
    public function update($id,Request $input)
    {
        $jadwal_Kuliah = Jadwal_Kuliah::find($id);
        $jadwal_kuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($jadwal_kuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
        return redirect('Jadwal_Kuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id,Request $input)
    {
        $jadwal_Kuliah = Jadwal_Kuliah::find($id);
        if($jadwal_kuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
         return redirect('Jadwal_Kuliah')-> with(['informasi'=>$this->informasi]);
    }

}
