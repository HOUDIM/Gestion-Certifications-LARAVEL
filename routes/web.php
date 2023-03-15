<?php

use App\Http\Controllers\CertifController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\premierController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});
*/
// Route::get('/home2', function () {
//     return view('frontEnd.home');
// });
// Route::get('/certif2', function () {
//     return view('frontEnd.certif');
// });
// Route::get('/mycertif2', function () {
//     return view('frontEnd.mycertif');
// });
// Route::get('/category2', function () {
//     return view('frontEnd.category');
// });
// Route::get('/onecertif', function () {
//     return view('frontEnd.certif_single');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

Route::get('/certif', [CertifController::class, 'index']);
Route::get('/certif/{slug}/{id}', [CertifController::class, 'detail']);
Route::post('/save-comment/{slug}/{id}', [CertifController::class, 'save_comment']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category}', [CategoryController::class, 'filter']);

Route::get('/profile', [ProfileController::class, 'index']);



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
