<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::post('/search', [App\Http\Controllers\Frontend\en\FrontendController::class, 'search'])->name('search');
Route::post('/contact-us', [App\Http\Controllers\Frontend\en\FrontendController::class, 'contact_us'])->name('contact_us');
Route::post('/scheduleTestModal', [App\Http\Controllers\Frontend\en\FrontendController::class, 'scheduleTestModal'])->name('scheduleTestModal_post');
Route::post('/requestOfferModal', [App\Http\Controllers\Frontend\en\FrontendController::class, 'requestOfferModal'])->name('requestOfferModal_post');
Route::post('/requestInfoModal', [App\Http\Controllers\Frontend\en\FrontendController::class, 'requestInfoModal'])->name('requestInfoModal_post');
Route::post('/bookMaintainanceModal', [App\Http\Controllers\Frontend\en\FrontendController::class, 'bookMaintainanceModal'])->name('bookMaintainanceModal_post');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index'])->name('index'); //عرض الصفحة الرئيسية
Route::get('/about', [App\Http\Controllers\Frontend\FrontendController::class, 'about'])->name('about');
Route::get('/vehicles', [App\Http\Controllers\Frontend\FrontendController::class, 'vehicles'])->name('vehicles'); //عرض السيارات
Route::get('/contact', [App\Http\Controllers\Frontend\FrontendController::class, 'contact'])->name('contact'); //عرض صفحة تواصل معنا
Route::get('/VehiclesDetail/{category_id}', [App\Http\Controllers\Frontend\FrontendController::class, 'VehiclesDetail'])->name('vehicles_detail'); //عرض معلومات السيارةالمحددة
Route::get('/viewCategory/{car_id}', [App\Http\Controllers\Frontend\FrontendController::class, 'viewCategory'])->name('view_category'); //عرض انواع السيارةالمحددة
Route::get('/dealerlocator', [App\Http\Controllers\Frontend\FrontendController::class, 'dealerlocator'])->name('dealerlocator'); //عرض صفحة فروعنا

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
//frontenfenglish
Route::get('/home-en', [App\Http\Controllers\Frontend\en\FrontendController::class, 'index'])->name('main'); //عرض الصفحة الرئيسية
Route::get('/about-en', [App\Http\Controllers\Frontend\en\FrontendController::class, 'about'])->name('about_en');
Route::get('/vehicles-en', [App\Http\Controllers\Frontend\en\FrontendController::class, 'vehicles'])->name('vehicles_en'); //عرض السيارات
Route::get('/contact-en', [App\Http\Controllers\Frontend\en\FrontendController::class, 'contact'])->name('contact_en'); //عرض صفحة تواصل معنا
Route::get('/VehiclesDetail-en/{category_id}', [App\Http\Controllers\Frontend\en\FrontendController::class, 'VehiclesDetail'])->name('VehiclesDetail_en'); //عرض معلومات السيارةالمحددة
Route::get('/viewCategory-en/{car_id}', [App\Http\Controllers\Frontend\en\FrontendController::class, 'viewCategory']); //عرض انواع السيارةالمحددة
Route::get('/dealerlocator-en', [App\Http\Controllers\Frontend\en\FrontendController::class, 'dealerlocator'])->name('dealerlocator_en');//عرض صفحة فروعنا
