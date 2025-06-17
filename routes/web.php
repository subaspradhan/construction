<?php

use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/projects', [App\Http\Controllers\FrontendController::class, 'projectindex'])->name('projectindex');
Route::get('/projectdetails/{id}', [App\Http\Controllers\FrontendController::class, 'projectdetails'])->name('projectdetails');
Route::get('/services', [App\Http\Controllers\FrontendController::class, 'serviceindex'])->name('serviceindex');
Route::get('/servicedetails/{name}', [App\Http\Controllers\FrontendController::class, 'servicedetails'])->name('servicedetails');
Route::get('/galleries', [App\Http\Controllers\FrontendController::class, 'galleryindex'])->name('galleryindex');
Route::get('/partners', [App\Http\Controllers\FrontendController::class, 'partnerindex'])->name('partnerindex');
Route::get('/about', [App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/contacts', [App\Http\Controllers\FrontendController::class, 'contact'])->name('contacts');
Route::get('/prices', [App\Http\Controllers\FrontendController::class, 'priceindex'])->name('priceindex');
Route::get('/enquaries/{id}', [App\Http\Controllers\FrontendController::class, 'enquaryindex'])->name('enquaryindex');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Banner
Route::get('/banner', [App\Http\Controllers\BannerController::class, 'index'])->name('banner.admin');
Route::get('/banner-create', [App\Http\Controllers\BannerController::class, 'create'])->name('banner.admin.create');
Route::post('/banner-store', [App\Http\Controllers\BannerController::class, 'store'])->name('banner.admin.store');
Route::get('/banner-edit/{id}', [App\Http\Controllers\BannerController::class, 'edit'])->name('banner.admin.edit');
Route::post('/banner-update/{id}', [App\Http\Controllers\BannerController::class, 'update'])->name('banner.admin.update');
Route::get('/banner-delete/{id}', [App\Http\Controllers\BannerController::class, 'destroy'])->name('banner.admin.delete');

//Gallery
Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('gallery.admin');
Route::get('/gallery-create', [App\Http\Controllers\GalleryController::class, 'create'])->name('gallery.admin.create');
Route::post('/gallery-store', [App\Http\Controllers\GalleryController::class, 'store'])->name('gallery.admin.store');
Route::get('/gallery-edit/{id}', [App\Http\Controllers\GalleryController::class, 'edit'])->name('gallery.admin.edit');
Route::post('/gallery-update/{id}', [App\Http\Controllers\GalleryController::class, 'update'])->name('gallery.admin.update');
Route::get('/gallery-delete/{id}', [App\Http\Controllers\GalleryController::class, 'destroy'])->name('gallery.admin.delete');

//Price
Route::get('/price', [App\Http\Controllers\PriceController::class, 'index'])->name('price.admin');
Route::get('/price-create', [App\Http\Controllers\PriceController::class, 'create'])->name('price.admin.create');
Route::post('/price-store', [App\Http\Controllers\PriceController::class, 'store'])->name('price.admin.store');
Route::get('/price-edit/{id}', [App\Http\Controllers\PriceController::class, 'edit'])->name('price.admin.edit');
Route::post('/price-update/{id}', [App\Http\Controllers\PriceController::class, 'update'])->name('price.admin.update');
Route::get('/price-delete/{id}', [App\Http\Controllers\PriceController::class, 'destroy'])->name('price.admin.delete');

//Service
Route::get('/service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service.admin');
Route::get('/service-create', [App\Http\Controllers\ServiceController::class, 'create'])->name('service.admin.create');
Route::post('/service-store', [App\Http\Controllers\ServiceController::class, 'store'])->name('service.admin.store');
Route::get('/service-edit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('service.admin.edit');
Route::post('/service-update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('service.admin.update');
Route::get('/service-delete/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('service.admin.delete');

//Project
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.admin');
Route::get('/project-create', [App\Http\Controllers\ProjectController::class, 'create'])->name('project.admin.create');
Route::post('/project-store', [App\Http\Controllers\ProjectController::class, 'store'])->name('project.admin.store');
Route::get('/project-edit/{id}', [App\Http\Controllers\ProjectController::class, 'edit'])->name('project.admin.edit');
Route::post('/project-update/{id}', [App\Http\Controllers\ProjectController::class, 'update'])->name('project.admin.update');
Route::get('/project-delete/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('project.admin.delete');


//Enquary
Route::get('/enquary', [App\Http\Controllers\EnquaryController::class, 'index'])->name('enquary.admin');
Route::post('/enquary-store', [App\Http\Controllers\EnquaryController::class, 'store'])->name('enquary.admin.store');
Route::get('/enquary-edit/{id}', [App\Http\Controllers\EnquaryController::class, 'edit'])->name('enquary.admin.edit');
Route::post('/enquary-update/{id}', [App\Http\Controllers\EnquaryController::class, 'update'])->name('enquary.admin.update');

//contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.admin');
Route::post('/contact-store', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.admin.store');

//Partner
Route::get('/partner', [App\Http\Controllers\PartnerController::class, 'index'])->name('partner.admin');
Route::get('/partner-create', [App\Http\Controllers\PartnerController::class, 'create'])->name('partner.admin.create');
Route::post('/partner-store', [App\Http\Controllers\PartnerController::class, 'store'])->name('partner.admin.store');
Route::get('/partner-edit/{id}', [App\Http\Controllers\PartnerController::class, 'edit'])->name('partner.admin.edit');
Route::post('/partner-update/{id}', [App\Http\Controllers\PartnerController::class, 'update'])->name('partner.admin.update');
Route::get('/partner-delete/{id}', [App\Http\Controllers\PartnerController::class, 'destroy'])->name('partner.admin.delete');


//Testimonial
Route::get('/testi', [App\Http\Controllers\TestimonialController::class, 'index'])->name('testi.admin');
Route::get('/testi-create', [App\Http\Controllers\TestimonialController::class, 'create'])->name('testi.admin.create');
Route::post('/testi-store', [App\Http\Controllers\TestimonialController::class, 'store'])->name('testi.admin.store');
Route::get('/testi-edit/{id}', [App\Http\Controllers\TestimonialController::class, 'edit'])->name('testi.admin.edit');
Route::post('/testi-update/{id}', [App\Http\Controllers\TestimonialController::class, 'update'])->name('testi.admin.update');
Route::get('/testi-delete/{id}', [App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testi.admin.delete');


//Reward
Route::get('/reward', [App\Http\Controllers\AwardsController::class, 'index'])->name('award.admin');
Route::get('/edit-reward/{id}', [App\Http\Controllers\AwardsController::class, 'show'])->name('award.edit.admin');
Route::post('/reward-update/{id}', [App\Http\Controllers\AwardsController::class, 'update'])->name('award.admin.update');
