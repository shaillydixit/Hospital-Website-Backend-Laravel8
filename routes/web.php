<?php

use App\Http\Controllers\Admin\HomeAboutController;
use App\Http\Controllers\Admin\PeopleBelieveController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/welcome/message', [HomeAboutController::class, 'WelcomeMessage'])->name('welcome.message');
Route::post('/create/welcome/message', [HomeAboutController::class, 'CreateWelcomeMessage'])->name('create.welcome.message');
Route::get('/edit/welcome/message/{id}', [HomeAboutController::class, 'EditWelcomeMessage'])->name('edit.welcome.message');
Route::post('/update/welcome/message/{id}', [HomeAboutController::class, 'UpdateWelcomeMessage'])->name('update.welcome.message');
Route::get('/delete/welcome/message/{id}', [HomeAboutController::class, 'DeleteWelcomeMessage'])->name('delete.welcome.message');

Route::get('/people/believe', [PeopleBelieveController::class, 'MainPeopleBelieve'])->name('people.believe');
Route::post('/create/people/believe', [PeopleBelieveController::class, 'CreatePeopleBelieve'])->name('create.people.believe');
Route::get('/edit/people/believe/{id}', [PeopleBelieveController::class, 'EditPeopleBelieve'])->name('edit.people.believe');
Route::post('/update/people/believe/{id}', [PeopleBelieveController::class, 'UpdatePeopleBelieve'])->name('update.people.believe');
Route::get('/delete/people/believe/{id}', [PeopleBelieveController::class, 'DeletePeopleBelieve'])->name('delete.people.believe');
