<?php

use App\Models\Post;
use App\Http\Controllers\PostsApiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts',[PostsApiController::class,'viewAll']);

Route::get('/post/{id}',[PostsApiController::class,'viewById']);

Route::post('/post',[PostsApiController::class,'createPost']);

Route::put('/post/{post}',[PostsApiController::class,'updatePost']);

Route::delete('/post/{post}',[PostsApiController::class,'deletePost']);












