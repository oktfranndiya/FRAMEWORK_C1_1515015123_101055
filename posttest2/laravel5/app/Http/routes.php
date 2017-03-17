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
