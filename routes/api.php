<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register','API\Auth\AuthController@register');
Route::post('login','API\Auth\AuthController@login');

Route::group(['prefix' => 'pengawasan'], function () {
    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('get_all', 'API\Pengawasan\PengawasanController@getAll');
        Route::post('tambah', 'API\Pengawasan\PengawasanController@store');
        Route::post('update', 'API\Pengawasan\PengawasanController@update');
        Route::post('hapus', 'API\Pengawasan\PengawasanController@destroy');
    });
});

Route::group(['prefix' => 'peralatanPenunjang'], function () {
    Route::group(['middleware' => ['auth:api']], function () {
        Route::get('get_all', 'API\PeralatanPenunjang\PeralatanPenunjangController@getAll');
        Route::post('tambah', 'API\PeralatanPenunjang\PeralatanPenunjangController@store');
        Route::post('update', 'API\PeralatanPenunjang\PeralatanPenunjangController@update');
        Route::post('hapus', 'API\PeralatanPenunjang\PeralatanPenunjangController@destroy');
    });
});
