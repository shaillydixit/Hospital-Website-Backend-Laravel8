<?php

use App\Http\Controllers\Admin\AboutServiceController;
use App\Http\Controllers\Admin\AboutUsInfoController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogInfoController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactInfoController;
use App\Http\Controllers\Admin\GallaryController;
use App\Http\Controllers\Admin\HomeAboutController;
use App\Http\Controllers\Admin\PeopleBelieveController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\TestimonialController;
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

Route::get('/gallary', [GallaryController::class, 'Gallary'])->name('gallary');
Route::post('/create/gallary', [GallaryController::class, 'CreateGallary'])->name('create.gallary');
Route::get('/edit/gallary/{id}', [GallaryController::class, 'EditGallary'])->name('edit.gallary');
Route::post('/update/gallary/{id}', [GallaryController::class, 'UpdateGallary'])->name('update.gallary');
Route::get('/delete/gallary/{id}', [GallaryController::class, 'DeleteGallary'])->name('delete.gallary');

Route::get('/services/main', [ServiceController::class, 'Services'])->name('services');
Route::post('/create/services/main', [ServiceController::class, 'CreateServices'])->name('create.services');
Route::get('/edit/services/main/{id}', [ServiceController::class, 'EditServices'])->name('edit.services');
Route::post('/update/services/main/{id}', [ServiceController::class, 'UpdateServices'])->name('update.services');
Route::get('/delete/services/main/{id}', [ServiceController::class, 'DeleteServices'])->name('delete.services');

Route::get('/client/testimonials', [TestimonialController::class, 'Testimonials'])->name('testimonials');
Route::post('/create/client/testimonials', [TestimonialController::class, 'CreateTestimonials'])->name('create.testimonials');
Route::get('/edit/client/testimonials/{id}', [TestimonialController::class, 'EditTestimonials'])->name('edit.testimonials');
Route::post('/update/client/testimonials/{id}', [TestimonialController::class, 'UpdateTestimonials'])->name('update.testimonials');
Route::get('/delete/client/testimonials/{id}', [TestimonialController::class, 'DeleteTestimonials'])->name('delete.testimonials');

Route::get('/blog/details', [BlogInfoController::class, 'Blog'])->name('blog');
Route::post('/create/blog/details', [BlogInfoController::class, 'CreateBlog'])->name('create.blog');
Route::get('/edit/blog/details/{id}', [BlogInfoController::class, 'EditBlog'])->name('edit.blog');
Route::post('/update/blog/details/{id}', [BlogInfoController::class, 'UpdateBlog'])->name('update.blog');
Route::get('/delete/blog/details/{id}', [BlogInfoController::class, 'DeleteBlog'])->name('delete.blog');

Route::get('/blog/comments', [BlogController::class, 'BlogComments'])->name('blog.comments');
Route::get('/delete/blog/comments/{id}', [BlogController::class, 'DeleteBlogComments'])->name('delete.comments');

Route::get('/contact/details', [ContactInfoController::class, 'ContactDetails'])->name('contact.details');
Route::post('/create/contact/details', [ContactInfoController::class, 'CreateContactDetails'])->name('create.contact.details');
Route::get('/edit/contact/details/{id}', [ContactInfoController::class, 'EditContactDetails'])->name('edit.contact.details');
Route::post('/update/contact/details/{id}', [ContactInfoController::class, 'UpdateContactDetails'])->name('update.contact.details');
Route::get('/delete/contact/details/{id}', [ContactInfoController::class, 'DeleteContactDetails'])->name('delete.contact.details');

Route::get('/contact/message', [ContactController::class, 'ContactMsg'])->name('contact.message');
Route::get('/delete/contact/message/{id}', [ContactController::class, 'DeleteContactMsg'])->name('delete.contact.message');
