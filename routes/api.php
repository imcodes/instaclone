<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Guest url
Route::post('auth/login',[AuthController::class,'login'])->name('login');


Route::middleware(['api','auth:sanctum'])->group(function(){

    Route::post('auth/logout',[AuthController::class,'logout']);

    Route::prefix('post')->group(function(){
        Route::get('/with-comment',[PostController::class,'indexWithComments'])->name('indexWithRelation');
        Route::get('/{limit?}',[PostController::class,'index'])->name('index');
        Route::post('/',[PostController::class,'store'])->name('store');
    
        Route::get('/{id}',[PostController::class,'show'])->name('show-post');
        Route::patch('/{id}',[PostController::class,'update'])->name('show-post');
    });
});