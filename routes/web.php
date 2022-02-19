<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\dashboard\CategoryController;

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
})->name('home');

// Route::get('/test/{nombre?}', function ($nombre = "desconocido") {
//     return "<h1>hola $nombre conocenos: <a href='".route("nosotros")."'>nosotros</a></h1>";
// });

// Route::get('/sobre-nosotros', function () {
//     return "<h1>Toda la información sobre nosotros</h1>";
// })->name("nosotros");

// Route::get('home/{nombre?}/{apellido?}', function ($nombre = "Alex", $apellido = "Varela") {

//     $posts = ["posts1","posts2","posts3","posts4"];
//     $posts2 = [];

//     return view("home", ['nombre' => $nombre, 'apellido' => $apellido, 'posts' => $posts ,'posts2' => $posts2]); 
// })->name("home");

//Route::get('post',[PostController::class,'index']);

/* AGRUPAR RUTAS

Route::prefix('admin')->group(function () {
    Route::resource('post', PostController::class);
});*/
Route::resource('dashboard/category', CategoryController::class); 
Route::resource('dashboard/user', UserController::class);

Route::resource('dashboard/post', PostController::class);
Route::post('dashboard/post/{post}/image', [PostController::class, 'image'])->name('post.image');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

