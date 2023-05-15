<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GuidenceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\TestimonialContoller;
use App\Http\Controllers\TripsController;
use App\Http\Controllers\website\ContentController;
use App\Http\Controllers\website\MainController;
use App\Http\Controllers\website\UsersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');



    return "Cache cleared successfully";
 });
// Route::get('/', function () {
//     return view('welcome');
// });
//main Site
Route::get("/", [MainController::class, 'index']);
Route::get('/search/', [MainController::class, 'search'])->name('search');
Route::get('/single-hotel/{id}',[MainController::class, 'singleHotel'])->name('single-hotel');
Route::post('/contact', [ContentController::class, 'ContactUsForm'])->name('contact.store');
Route::post('/sendNewsLetter', [ContentController::class, 'sendNewsLetter']);
Route::post('/review/add/', [ContentController::class, 'Addreview'])->name('review.add');
Route::get('/user-login', [UsersController::class, 'login'])->name('user-login');
Route::post('/save-user', [UsersController::class, 'saveLogin'])->name('save-user');
Route::get('/user-register', [UsersController::class, 'register']);
Route::post('/save-register', [UsersController::class, 'saveRegister'])->name('save-register');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/user-logout', [UsersController::class, 'logout'])->name('user-logout');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

     //company
     Route::resource('company', CompanyController::class); //company
     Route::resource('testimonial', TestimonialContoller::class);
     Route::resource('trips', TripsController::class);
     Route::resource('guidence', GuidenceController::class);
     Route::resource('faq', FaqController::class);
     Route::resource('galleries', GalleryController::class);
     Route::resource('hotels', HotelController::class);

});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
