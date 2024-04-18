<?php

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

Route::get('/with-comment',[PostController::class,'indexWithComments'])->name('indexWithRelation');

Route::prefix('post')->group(function(){
    Route::get('/{limit?}',[PostController::class,'index'])->name('index');
    Route::post('/',[PostController::class,'store'])->name('store');

    Route::get('/{id}',[PostController::class,'show'])->name('show-post');
    Route::patch('/{id}',[PostController::class,'update'])->name('show-post');
});