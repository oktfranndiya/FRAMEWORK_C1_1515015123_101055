<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//modul 4
Route::get('/', function() {
	return view('master');
});

Route::get('pengguna','penggunacontroller@awal');
Route::get('pengguna/lihat/{pengguna}', 'penggunacontroller@lihat');
Route::post('pengguna/simpan', 'penggunacontroller@simpan');
Route::get('pengguna/edit/{pengguna}', 'penggunacontroller@edit');
Route::post('pengguna/edit/{pengguna}', 'penggunacontroller@update');
Route::get('pengguna/hapus/{pengguna}', 'penggunacontroller@hapus');

Route::get('Matakuliah' , 'MatakuliahController@awal');
Route::get('Matakuliah/lihat/{Matakuliah}' , 'MatakuliahController@lihat');
Route::post('Matakuliah/simpan' , 'MatakuliahController@simpan');
Route::get('Matakuliah/edit/{Matakuliah}' , 'MatakuliahController@edit');
Route::post('Matakuliah/edit/P{Matakuliah}' , 'MatakuliahController@update');
Route::get('Matakuliah/hapus/{Matakuliah}' , 'MatakuliahController@hapus');

Route::get('Ruangan' , 'RuanganController@awal');
Route::get('Ruangan/lihat/{Ruangan}','RuanganController@lihat');
Route::post('Ruangan/simpan' , 'RuanganController@simpan');
Route::get('Ruangan/edit/{Ruangan}' , 'RuanganController@edit');
Route::post('Ruangan/edit/{Ruangan}' , 'RuanganController@update');
Route::get('Ruangan/hapus/{Ruangan}' , 'RuanganController@hapus');

//modul3
Route::get('pengguna','penggunacontroller@awal');
Route::get('pengguna/tambah','penggunacontroller@tambah');

Route::get('Dosen','DosenController@awal');
Route::get('Dosen/tambah','DosenController@tambah');

Route::get('Dosen_Matakuliah','Dosen_MatakuliahController@awal');
Route::get('Dosen_Matakuliah/tambah','Dosen_MatakuliahController@tambah');

Route::get('Mahasiswa','MahasiswaController@awal');
Route::get('Mahasiswa/tambah','MahasiswaController@tambah');

Route::get('Matakuliah','MatakuliahController@awal');
Route::get('Matakuliah/tambah','MatakuliahController@tambah');

Route::get('Ruangan','RuanganController@awal');
Route::get('Ruangan/tambah','RuanganController@tambah');


//ini yang tugas kemaren 
//ini untuk menambah function memanggil tapi di taroh di routes
Route::get('pengguna/add', function(){
	$pengguna = new App\pengguna();
	$pengguna->username = 'oktafira';
	$pengguna->password = 'oktafira';
	$pengguna->save();
	return "data dengan username {$pengguna->username} telah disimpan";
});

?>
