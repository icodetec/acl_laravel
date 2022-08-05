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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function(){

    Route::prefix('admin')->group(function () {
    
    //UserController
    Route::get('users', 'App\Http\Controllers\Painel\UserController@index')->name('admin.users');
    
    //PostController
    Route::get('posts', 'App\Http\Controllers\Painel\PostController@index')->name('admin.post');
    
    //PermissionController	
    Route::get('permission', 'App\Http\Controllers\Painel\PermissionController@index')->name('admin.permission');
    
    //RoleController
    Route::get('role', 'App\Http\Controllers\Painel\RoleController@index')->name('admin.role');
    
    //PainelController
    Route::get('/', 'App\Http\Controllers\Painel\PainelController@index');

    });

});
