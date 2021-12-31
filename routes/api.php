<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogInfoController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\GallaryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/contact', [ContactController::class, 'Contact']);

Route::post('/commentblog',[BlogController::class, 'CommentBlog']);

Route::get('/serviceinfo', [ServiceController::class, 'ServiceInfo']);

Route::get('/testimonialsinfo', [TestimonialController::class, 'TestimonialInfo']);

Route::get('/bloginfo', [BlogInfoController::class, 'BlogInfo']);

Route::get('/gallaryinfo', [GallaryController::class, 'GallaryInfo']);