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

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/about', function () {
    $name='Rio Abilaji';
    return view('about',['name'=>$name]);
});

Route::get('/', 'homeController@home');
Route::get('/about','homeController@about');

Route::resource('/students', 'StudentsController');

// // -----Route::get('/mahasiswa','mahasiswaController@index');

// Route::get('/students','StudentsController@index');
// Route::get('/students/create','StudentsController@create');
// Route::get('/students/{student}','StudentsController@show');
// Route::post('/students','StudentsController@store');
// Route::delete('/students/{student}','StudentsController@destroy');
// Route::get('/students/{student}/edit','StudentsController@edit');
// Route::put('/students/{student}','StudentsController@update');

