<?php

use App\Http\Controllers\NicknameController;
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

/*Route::get('/', function () {
    return view('paginainicio');
});*/

/*Route::get('/perfil/{id}',function($id){
    return view('perfil',['id'=>$id]);
});*/

Route::get('/','NicknameController@devuelveSoloNickname');
Route::get('/perfil/{id}','NicknameController@devuelveUsuario');