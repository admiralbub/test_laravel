<?php
use App\Http\Controllers\Api\ArticleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/addpost/',[App\Http\Controllers\Api\ArticleController::class, 'store']);
Route::post('/editpost/{id}',[App\Http\Controllers\Api\ArticleController::class, 'update']);
Route::get('/deletepost/{id}',[App\Http\Controllers\Api\ArticleController::class, 'destroy']);