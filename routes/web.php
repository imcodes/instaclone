<?php

use App\Http\Controllers\PostController;
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
    return view('auth.login');
});

Route::get('/posts',[PostController::class,'showFeeds']);

Route::middleware('auth')->prefix('feed')->group(function(){
    Route::get('/',function(){
        return view('livewire.user.feed');
    })->name('feed');

    //create POST ROUTES
    Route::get('/create',[PostController::class,'create'])->name('create.feed');
    Route::post('/upload-media', [PostController::class,'uploadMedia'])->name('upload-media');
    Route::post('validate-create',[PostController::class,'validateCreate'])->name('validate.create.feed');

});




