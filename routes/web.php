<?php

use Illuminate\Support\Facades\Route;

//Front Controller
use App\Http\Controllers\IndexController as FrontController;
use App\Http\Controllers\GalleryController as FrontGalleryController;
use App\Http\Controllers\VentureController;

//Backend controller
use App\Http\Controllers\Admin\IndexController as AdminController;
use App\Http\Controllers\Admin\GalleryController as BackendGalleryController;
use App\Http\Controllers\Admin\BannerController;


//Frontend
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('about_us');
Route::get('/contact-us', [FrontController::class, 'contactUs'])->name('contact_us');
Route::post('/contact-us/sendMail', [FrontController::class, 'sendMail'])->name('sendMail');
Route::get('/success-story', [FrontController::class, 'successStory'])->name('success_story');

//gallery
Route::get('/gallery/3d-elevation', [FrontGalleryController::class, 'threedElevation'])->name('threed_elevation');
Route::get('/gallery/live-site-photos', [FrontGalleryController::class, 'liveSitePhotos'])->name('live_site_photos');
Route::get('/gallery/interior-design', [FrontGalleryController::class, 'interiorDesign'])->name('interior_design');

//our_ventures
Route::get('/our-ventures', [VentureController::class, 'index'])->name('our_ventures');

//Backend

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin-panel', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('/admin-panel/banners', BannerController::class);
    Route::resource('/admin-panel/gallery', BackendGalleryController::class);
});

require __DIR__ . '/auth.php';
