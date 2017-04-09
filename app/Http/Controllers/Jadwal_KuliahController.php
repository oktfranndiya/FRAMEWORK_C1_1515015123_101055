<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Jadwal_Kuliah;
use App\Mahasiswa;
use App\Dosen_Matakuliah;
use App\Ruangan;
use App\Dosen;
use App\Matakuliah;

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
        $jadwal_kuliah = Jadwal_Kuliah::find($id);
        return view('Jadwal_Kuliah.lihat',compact('Jadwal_Kuliah'));
    }
    public function edit($id){
        $jadwal_kuliah = Jadwal_Kuliah::find($id);
        $mahasiswa = new Mahasiswa;
        $ruangan = new Ruangan;
        $dosen_matakuliah = new Dosen_Matakuliah;
        return view('Jadwal_Kuliah.edit',compact('Mahasiswa','Ruangan','Dosen_Matakuliah','Jadwal_Kuliah'));
    }
    public function update($id, Request $input)
    {
        $jadwal_kuliah = Jadwal_Kuliah::find($id);
        // $jadwal_kuliah->ruangan_id = $input->ruangan_id;
        // $jadwal_kuliah->dosen_matakuliah_id = $input->dosen_matakuliah_id;
        // $jadwal_kuliah->mahasiswa_id = $input->mahasiswa_id;
        // $informasi = $jadwal_kuliah->save() ? 'berhasil update data' : 'gagal update data';
        // $jadwal_kuliah->dosen_matakuliah_id = $input->dosen_matakuliah;
        // $jadwal_kuliah->mahasiswa_id = $input->mahasiswa_id;
        $jadwal_kuliah->fill($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if($jadwal_kuliah->save()) $this->informasi = "Jadwal Mahasiswa berhasil diperbarui";
        return redirect('Jadwal_Kuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id)
    {
        $jadwal_Kuliah = Jadwal_Kuliah::find($id);
        // $informasi = $jadwal_kuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        if($jadwal_kuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
         return redirect('Jadwal_Kuliah')-> with(['informasi'=>$this->informasi]);
    }

}
