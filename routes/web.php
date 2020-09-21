<?php

use App\Http\Controllers\BlogController;
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

Route::resource('blogs','BlogController');


// Route::group(function () {
//         Route::resource('blogs', 'BlogController');
//         // Route::name('blogs.')->prefix('')->group(function () {
//         //     Route::post('get-all', 'CategoriesController@data')->name('data');
//         // });
//     });
