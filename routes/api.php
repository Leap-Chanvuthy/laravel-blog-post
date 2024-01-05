<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/get-all-blogs' , [BlogController::class , 'findAllBlogs'] );
Route::get('/get-one-blog/{id}' , [BlogController::class , 'findOneBlog']);
Route::post('/add-blog' , [BlogController::class , 'addBlog']);
Route::delete('/delete-blog/{id}' , [BlogController::class , 'deleteBlog']);
Route::put('/update-blog/{id}' , [BlogController::class , 'updateBlog']);
