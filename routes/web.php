<?php

use App\Models\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DashboardController;
use App\Models\Gallery;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $news = DB::table('news')->skip(1)->take(4)->get();
    $big_news = News::first();
    return view('pages.home', compact('news', 'big_news'));
})->name('home');

Route::view('/tentang', 'pages.tentang');
Route::get('/berita', function () {
    $news = News::paginate(8);

    return view('pages.berita', compact('news'));
});
Route::get('/galeri', function () {
    $photos = Gallery::paginate(8);
    return view('pages.galeri', compact('photos'));
});
Route::view('/kontak', 'pages.kontak');
Route::view('/login', 'auth.login')->middleware('guest');

Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');
Route::view('/reset-password', 'auth.passwords.reset');
Route::post('/message', [MessageController::class, 'add']);


Route::middleware(['auth'])->group(function () {
    Route::prefix('/dashboard')->group(function () {
        Route::get('/', [DashboardController::class, 'index']);


        Route::get('/berita', [NewsController::class, 'berita']);
        Route::view('/berita/add', 'dashboard.action.berita', ['type' => 'add', 'page' => 'Tambah Berita']);
        Route::post('/berita/add', [NewsController::class, 'addNews']);
        Route::get('/berita/{slug}/edit', [NewsController::class, 'showNews']);
        Route::delete('/berita/{slug}/delete', [NewsController::class, 'deleteNews']);
        Route::post('/berita/{slug}/edit', [NewsController::class, 'editNews']);

        Route::get('/galeri', [GalleryController::class, 'gallery']);
        Route::view('/galeri/add', 'dashboard.action.galeri', ['type' => 'add', 'page' => 'Tambah Galeri']);
        Route::post('/galeri/add', [GalleryController::class, 'addPhoto']);
        Route::delete('/galeri/{id}/delete', [GalleryController::class, 'deletePhoto']);

        Route::get('/pesan', [MessageController::class, 'message']);
        Route::get('/message/{id}/read', [MessageController::class, 'read']);


        Route::get('/users', [UserController::class, 'index']);
        Route::view('/user/add', 'dashboard.action.user', ['type' => 'add', 'page' => 'Tambah User']);
        Route::post('/user/add', [UserController::class, 'add']);
        Route::get('/user/{id}/edit', [UserController::class, 'showUser']);
        Route::delete('/user/{id}/delete', [UserController::class, 'delete']);
        Route::post('/user/{id}/edit', [UserController::class, 'edit']);
    });
});
