<?php

use App\Http\Controllers\Admin\AboutServiceController;
use App\Http\Controllers\Admin\AboutUsInfoController;
use App\Http\Controllers\Admin\HomeAboutController;
use App\Http\Controllers\Admin\PeopleBelieveController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\WhatWeDoController;
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

Route::get('/what/we/do', [WhatWeDoController::class, 'WhatWeDo'])->name('whatwedo');
Route::post('/create/what/we/do', [WhatWeDoController::class, 'CreateWhatWeDo'])->name('create.whatwedo');
Route::get('/edit/what/we/do/{id}', [WhatWeDoController::class, 'EditWhatWeDo'])->name('edit.whatwedo');
Route::post('/update/what/we/do/{id}', [WhatWeDoController::class, 'UpdateWhatWeDo'])->name('update.whatwedo');
Route::get('/delete/what/we/do/{id}', [WhatWeDoController::class, 'DeleteWhatWeDo'])->name('delete.whatwedo');

Route::get('/our/team', [TeamController::class, 'OurTeam'])->name('our.team');
Route::post('/create/our/team', [TeamController::class, 'CreateOurTeam'])->name('create.our.team');
Route::get('/edit/our/team/{id}', [TeamController::class, 'EditOurTeam'])->name('edit.our.team');
Route::post('/update/our/team/{id}', [TeamController::class, 'UpdateOurTeam'])->name('update.our.team');
Route::get('/delete/our/team/{id}', [TeamController::class, 'DeleteOurTeam'])->name('delete.our.team');

Route::get('/our/services', [AboutServiceController::class, 'OurServices'])->name('our.services');
Route::post('/create/our/services', [AboutServiceController::class, 'CreateOurServices'])->name('create.our.services');
Route::get('/edit/our/services/{id}', [AboutServiceController::class, 'EditOurServices'])->name('edit.our.services');
Route::post('/update/our/services/{id}', [AboutServiceController::class, 'UpdateOurServices'])->name('update.our.services');
Route::get('/delete/our/services/{id}', [AboutServiceController::class, 'DeleteOurServices'])->name('delete.our.services');

Route::get('/aboutus', [AboutUsInfoController::class, 'AboutUs'])->name('about.us');
Route::post('/create/about/us', [AboutUsInfoController::class, 'CreateAboutUs'])->name('create.about.us');
Route::get('/edit/about/us/{id}', [AboutUsInfoController::class, 'EditAboutUs'])->name('edit.about.us');
Route::post('/update/about/us/{id}', [AboutUsInfoController::class, 'UpdateAboutUs'])->name('update.about.us');
Route::get('/delete/about/us/{id}', [AboutUsInfoController::class, 'DeleteAboutUs'])->name('delete.about.us');
