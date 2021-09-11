<?php

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
Route::group(['middleware'=>'kader'], function(){
Route::get('/','Usercontroller@index');
//ibu
Route::get('tambah_ibu','DataController@tambah_ibu');
Route::get('data_ibu','DataController@data_ibu');
Route::post('save_ibu','DataController@save_ibu');
Route::get('form_edit_ibu/{id}','DataController@form_edit_ibu');
Route::post('update_ibu','DataController@update_ibu');
Route::get('hapus_ibu/{id}','DataController@hapus_ibu');
Route::get('cari_ibu','DataController@cari_ibu');
Route::get('print','DataController@print');
//kematian ibu
Route::get('kematian_ibu/{id}','DataController@kematian_ibu');
Route::post('update_kematian_ibu','DataController@update_kematian_ibu');
Route::get('data_meninggal_ibu','DataController@data_meninggal_ibu');
Route::get('cari_meninggal_ibu', 'DataController@cari_meninggal_ibu');
Route::get('form_edit_meninggal_ibu/{id}','DataController@form_edit_meninggal_ibu');
Route::post('update_kematian_ib','DataController@update_kematian_ib');
//Data Tidak Aktif IBU
Route::get('data_tidak_aktif_ibu', 'DataController@data_tidak_aktif_ibu');
Route::get('cari_ibu_tidak_aktif', 'DataController@cari_ibu_tidak_aktif');
Route::get('form_edit_ibu_tidak/{id}','DataController@form_edit_ibu_tidak');
Route::post('update_ibu_tidak','DataController@update_ibu_tidak');
//punya anak dari ibu
Route::get('punya_anak/{id}','DataController@punya_anak');
//anak
Route::get('tambah_anak','DataController@tambah_anak');
Route::post('save_anak','DataController@save_anak');
Route::get('data_anak','DataController@data_anak');
Route::get('cari_anak','DataController@cari_anak');
Route::get('form_edit_anak/{id}','DataController@form_edit_anak');
Route::post('update_anak','DataController@update_anak');
Route::get('hapus_anak/{id}','DataController@hapus_anak');
//penimbangan
Route::get('penimbangan_anak','DataController@penimbangan_anak');
Route::get('tambah_layanan_anak/{id}','DataController@tambah_layanan_anak');
Route::get('kode_chart','DataController@chart');
Route::get('tampil_chart','DataController@tampil_chart');
//kematian anak
Route::get('kematian_anak/{id}','DataController@kematian_anak');
Route::post('update_kematian_anak','DataController@update_kematian_anak');
Route::get('data_meninggal_anak','DataController@data_meninggal_anak');
Route::get('cari_meninggal_anak','DataController@cari_meninggal_anak');
Route::get('form_edit_meninggal_anak/{id}','DataController@form_edit_meninggal_anak');
Route::post('update_kematian_an','DataController@update_kematian_an');
//Data tidak Aktif
Route::get('data_tidak_aktif_anak', 'DataController@data_tidak_aktif_anak');
Route::get('cari_anak_tidak_aktif', 'DataController@cari_anak_tidak_aktif');
Route::get('form_edit_anak_tidak/{id}','DataController@form_edit_anak_tidak');
Route::post('update_anak_tidak','DataController@update_anak_tidak');
//cetak
Route::get('laporan-pdf','DataController@generatePDF');
Route::get('pilih_laporan_anak','DataController@pilih_laporan_anak');

});

Route::group(['middleware'=>'admin'], function(){
    Route::get('tambah_akun_ibu','AkunController@ibu');
    Route::get('data_ibu_admin','AkunController@data_ibu');
    Route::get('cek_ibu/{id}','AkunController@cek_ibu');
    Route::post('save_akun_ibu','AkunController@save_akun_ibu');
});

Route::get('/login','Usercontroller@login');
Route::post('/loginpost','Usercontroller@loginpost')->name('loginpost');
Route::get('/logout','Usercontroller@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
