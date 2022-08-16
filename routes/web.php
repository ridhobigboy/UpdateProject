<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', 'DashboardController@index');

//Routing JawabanKuisioner
// Route::get('jawaban', 'JawabanController@index');
// Route::get('jawaban/tambah', 'JawabanController@tambah');
// Route::post('jawaban/new', 'JawabanController@new');
// Route::get('jawaban/edit/{id}', 'JawabanController@edit');
// Route::post('jawaban/update', 'JawabanController@update');
// Route::get('jawaban/hapus/{id}', 'JawabanController@hapus');

//Routing KuisionerKelas
// Route::get('pertanyaan', 'KuisionerController@index')->name('pertanyaan.index');
// Route::get('pertanyaan/tambah', 'KuisionerController@tambah')->name('pertanyaan.tambah');
// Route::post('pertanyaan/baru', 'KuisionerController@baru')->name('pertanyaan.baru');
// Route::get('pertanyaan/edit/{id}', 'KuisionerController@edit')->name('pertanyaan.edit');
// Route::post('pertanyaan/update', 'KuisionerController@update')->name('pertanyaan.update');
// Route::get('pertanyaan/hapus/{id}', 'KuisionerController@hapus')->name('pertanyaan.hapus');

//Routing Kelas
// Route::get('kelas', 'KelasController@index');
// Route::get('kelas/tambah', 'KelasController@tambah');
// Route::post('kelas/new', 'KelasController@new');
// Route::get('kelas/edit/{id}', 'KelasController@edit');
// Route::post('kelas/update', 'KelasController@update');
// Route::get('kelas/hapus/{id}', 'KelasController@hapus');

//Routing Dosen
Route::get('Page.Dosen', 'DosenController@index');
//  Route::get('dosen', 'DosenController@index');
// Route::get('dosen/tambah', 'DosenController@tambah');
// Route::post('dosen/new', 'DosenController@new');
// Route::get('dosen/edit/{id}', 'DosenController@edit');
// Route::post('dosen/update', 'DosenController@update');
// Route::get('dosen/hapus/{id}', 'DosenController@hapus');

//Routing Prodi
 Route::get('Prodi', 'ProdiController@index');
// Route::get('Prodi/tambah', 'ProdiController@tambah');
// Route::post('Prodi/new', 'ProdiController@new');
// Route::get('Prodi/edit/{id}', 'ProdiController@edit');
// Route::post('Prodi/update', 'ProdiController@update');
// Route::get('Prodi/hapus/{id}', 'ProdiController@hapus');

//Routing Matakuliah
 Route::get('matkul', 'MatakuliahController@index');
// Route::get('matkul/tambah', 'MatakuliahController@tambah');
// Route::post('matkul/new', 'MatakuliahController@new');
// Route::get('matkul/edit/{id}', 'MatakuliahController@edit');
// Route::post('matkul/update', 'MatakuliahController@update');
// Route::get('matkul/hapus/{id}', 'MatakuliahController@hapus');

