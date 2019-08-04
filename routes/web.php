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


Route::get('/','dashboard@preview');


route::get('/thank_you',function(){
    return view('thank_you');
});

Route::get('/daftar/add','dashboard@tambah');
Route::post('/daftar/save','dashboard@save');
Route::get('/pengumuman/{id}','dashboard@list_p');
Route::get('/pengumuman/prev/{id}','dashboard@list_p_prev');
Route::get('/pengumuman/next/{id}','dashboard@list_p_next');

Route::get('/list_siswa','dashboard@list');

Route::resource('ajax-crud', 'AjaxController');

Route::get('/add','dashboard@add_sekolah');
Route::post('/save', 'dashboard@save_sekolah');

Route::get('/sekolah','SekolahCtrl@Index');
Route::get('/sekolah/add','SekolahCtrl@add');
Route::post('/sekolah/save','SekolahCtrl@save');

Route::get('/login',function() {
    return view('auth.login');
});


Route::get('/daftar', function () {
    return view('daftar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard','dashboard@j_siswa');

Route::group(['middleware' => ['auth']], function() {


    Route::get('/siswa', function () {
        return view('/siswa/data_siswa');
    });

    Route::get('/sekolah', function () {
        return view('sekolah');
    });

    Route::post('/daftar/save_sekolah','DaftarCtrl@new_sekolah');


    Route::get('/sekolah','SekolahCtrl@Index');
    Route::get('/sekolah/add','SekolahCtrl@add');
    Route::post('/sekolah/save','SekolahCtrl@save');
    Route::get('/sekolah/delete/{id_sekolah}','SekolahCtrl@delete');
    Route::get('/sekolah/edit/{id_sekolah}','SekolahCtrl@edit');

    Route::get('/data_siswa','DaftarCtrl@index_siswa');
    Route::get('/data_siswa/add','DaftarCtrl@add_siswa');
    Route::post('/data_siswa/save','DaftarCtrl@save');
    Route::get('/data_siswa/delete/{no_daftar}','DaftarCtrl@delete');
    Route::get('/data_siswa/edit/{no_daftar}','DaftarCtrl@edit_siswa');

    Route::get('/data_ortu','DaftarCtrl@index_orangtua');
    Route::get('/data_ortu/add','DaftarCtrl@add_orangtua');
    Route::post('/data_ortu/save','DaftarCtrl@save_orangtua');
    Route::get('/data_ortu/edit/{no_daftar}','DaftarCtrl@edit_orangtua');

    Route::get('exportSiswa', 'SiswaExcelCtrl@exSiswa')->name('exSiswa');
    Route::get('importExportSiswa', 'SiswaExcelCtrl@importExportSiswa');
    Route::post('importSiswa', 'SiswaExcelCtrl@imSiswa')->name('imSiswa');

    Route::get('exOrtu', 'OrtuExcelCtrl@exOrtu')->name('exOrtu');
    Route::get('importExportOrtu', 'OrtuExcelCtrl@importExportOrtu');
    Route::post('imOrtu', 'OrtuExcelCtrl@imOrtu')->name('imOrtu');

    Route::get('siswa/edit_status/{no_daftar}','DaftarCtrl@edit_status');
    
    Route::get('data_pengumuman','SummernoteController@index');
    Route::get('form_pengumuman','SummernoteController@create');
    Route::get('/pengumuman/edit/{id}','SummernoteController@edit');

    Route::get('/data_siswa/print/{no_daftar}','DaftarCtrl@print');

    Route::get('summernoteeditor',array('as'=>'summernoteeditor.get','uses'=>'SummernotefileController@getSummernoteeditor'));
    Route::post('summernoteeditor',array('as'=>'summernoteeditor.post','uses'=>'SummernotefileController@postSummernoteeditor'));

});
