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

Route::get('/login', function () {
    return view('login');
})->name('login');


//Admin
Route::group(['middleware' => ['auth','cekrole:Pemilik']],function(){
   Route::get('/pemilik', '\App\Http\Controllers\PemilikController@index')->name('pemilik');

});
Route::get('/pemilik/transaksi','\App\Http\Controllers\PemilikController@transaksipml')->name('transaksipml');
Route::get('/pemilik/komplain','\App\Http\Controllers\PemilikController@viewcomplain')->name('komplainpml');
Route::post('/pemilik/balaskomplain/{id}','\App\Http\Controllers\PemilikController@balas')->name('balas');
Route::get('/pemilik/konfirmasi/{id}','\App\Http\Controllers\PemilikController@konfirmasi')->name('konfirmasi');
Route::get('/pemilik/tolak/{id}','\App\Http\Controllers\PemilikController@tolak')->name('tolak');

//User
Route::group(['middleware' => ['auth','cekrole:User']],function(){
    Route::get('/user', '\App\Http\Controllers\UserController@index')->name('user');
 
 });
Route::get('/user/transaksi','\App\Http\Controllers\UserController@viewtransaksiusr')->name('transaksiusr');
Route::get('/user/komplain','\App\Http\Controllers\UserController@komplainusr')->name('komplainusr');
Route::post('/user/simpankomplain','\App\Http\Controllers\UserController@simpankomplain')->name('simpankomplain');
Route::get('/user/infokost','\App\Http\Controllers\UserController@infokost')->name('informasikostusr');
Route::get('/user/pesankamar','\App\Http\Controllers\UserController@pesan')->name('pesan');
Route::post('/user/simpanpesan','\App\Http\Controllers\UserController@simpanpesan')->name('simpanpesan');
Route::get('/user/viewinput/{id}','\App\Http\Controllers\UserController@viewinputfile')->name('inputfile');
Route::post('/user/simpanbukti/{id}','\App\Http\Controllers\UserController@simpaninput')->name('simpaninput');

Route::get('/informasikost','\App\Http\Controllers\Controller@index')->name('informasikost');
Route::post('/postlogin','\App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/register','\App\Http\Controllers\RegisterController@index')->name('register');
Route::post('/simpanregistrasi','\App\Http\Controllers\RegisterController@simpanregistrasi')->name('simpanregistrasi');
Route::get('/logout','\App\Http\Controllers\LoginController@logout')->name('logout');







