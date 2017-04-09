<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen_Matakuliah;
use App\Dosen;
use App\Matakuliah;
use App\Jadwal_Kuliah;

class Dosen_MatakuliahController extends Controller
{
    protected $informasi = 'Gagal Melakukan Aksi';
    
    public function awal()
    {
        $semuaDosen_Matakuliah = Dosen_Matakuliah::all();
        return view('Dosen_Matakuliah.awal', compact('semuaDosen_Matakuliah'));
    	// return "Welcome and Hello from Dosen_MatakuliahController";
    }
    public function tambah()
    {
        $Dosen = new Dosen;
        $Matakuliah = new Matakuliah;
        return view('Dosen_Matakuliah.tambah',compact('Dosen','Matakuliah'));
        // return $this->simpan();
    	// return $this->simpan();
    }
    public function simpan(Request $input)
    {
    	$dosen_matakuliah = new Dosen_Matakuliah(
        $input->only('dosen_id','matakuliah_id'));

        if($dosen_matakuliah->save()){
            $this->informasi = "Jadwal Dosen Mengajar Berhasil Disimpan";
        }
        return redirect ('Dosen_Matakuliah')->with (['informasi'=>$this->informasi]);
    	// $dosen_matakuliah->dosen_id =1;
    	// $dosen_matakuliah->matakuliah_id= 1;
    	// $dosen_matakuliah->save();
    	// return "Data dengan id Dosen {$dosen_matakuliah->dosen_id} telah disimpan";
    }
    public function lihat($id){
        $Dosen_Matakuliah = Dosen_Matakuliah::find($id);
        return view('Dosen_Matakuliah.lihat',compact('Dosen_Matakuliah'));
    }
    public function edit($id){
        $Dosen_Matakuliah = Dosen_Matakuliah::find($id);
        $Dosen = new Dosen;
        $Matakuliah = new Matakuliah;
        return view('Dosen_Matakuliah.edit',compact('Dosen','Matakuliah','Dosen_Matakuliah'));
    }
    public function update($id,Request $input)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save()) $this->informasi = "Jadwal Dosen Mengajar berhasil diperbarui";
        return redirect('Dosen_Matakuliah')->with(['informasi'=>$this->informasi]);
    }
    public function hapus($id,Request $input)
    {
        $dosen_matakuliah = Dosen_Matakuliah::find($id);
        if($dosen_matakuliah->delete()) $this->informasi = "Jadwal Mahasiswa berhasil dihapus";
        // $informasi = $mahasiswa->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('Dosen_Matakuliah')-> with(['informasi'=>$this->informasi]);
    }
}
