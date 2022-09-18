<?php
namespace App\Http\Controllers;

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

//login routes
Route::group(['middleware' => ['guest:web']], function () {
    Route::get('/login', [Auth\AuthController::class,'loginView']
    )->name('index.login');
    Route::post('/login', [Auth\AuthController::class,'login']
    )->name('login');
});
// register routes
Route::get('/register', [Auth\AuthController::class,'registerView'])->name('index.register');
Route::post('/register', [Auth\AuthController::class,'register'])->name('register');
Route::get('logout', [Auth\AuthController::class,'logout'])->name('logout');
Route::redirect('/', '/login');





Route::group(['middleware' => ['auth:web']], function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
    Route::get('/profile/{id}', [UserController::class,'index'])->name('profile');
    //posts
    Route::get('/post', [PostController::class , 'create'])->name('post.create');
    Route::post('/post', [PostController::class , 'store'])->name('post.store');
    Route::get('/post', [UserController::class , 'index'])->name('post');
    Route::get('/post/{id}/edit', [PostController::class , 'edit'])->name('post.edit');
    Route::put('/post/{id}', [PostController::class , 'update'])->name('post.update');
    Route::delete('/post/{id}', [PostController::class , 'destroy'])->name('post.destroy');
    Route::get('post/{id}/show',[PostController::class , 'show'])->name('post.show');

});




