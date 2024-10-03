<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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




Auth::routes();


//  Route::get('/',[App\Http\Controllers\HomeController::class, 'HomeFront'] )->name('home');
// Routs services
// Route::get('/services2',[App\Http\Controllers\HomeController::class, 'ServiceFront'] )->name('services2');
// Route::get('Service/show/{id}', [App\Http\Controllers\ServiceController::class, 'show'])->name('Services');
// Route::get('Serve/show/{id}', [App\Http\Controllers\CategoryServiceController::class, 'show'])->name('Serve');

// Routs Blog
//   Route::get('/blog',[App\Http\Controllers\HomeController::class, 'BlogFront'] )->name('blog');
//  Route::get('Blogs/show/{id}', [App\Http\Controllers\BlogController::class, 'show'])->name('Blogs');
// Route::get('Blog/show/{id}', [App\Http\Controllers\CategoryBlogController::class, 'show'])->name('blog.show');

//   Route::get('/contacts',[App\Http\Controllers\HomeController::class, 'ContactsFront'] )->name('contact_us');
// Route::get('/mission',[App\Http\Controllers\HomeController::class, 'MissionFront'] )->name('mission');

// Route::get('/Team',[App\Http\Controllers\HomeController::class, 'TeamFront'] )->name('our-team');
//  Route::get('/About',[App\Http\Controllers\HomeController::class, 'AboutFront'] )->name('about_us');
// Route::get('/Approach',[App\Http\Controllers\HomeController::class, 'ApproachFront'] )->name('approach');
//  Route::get('/Gallery',[App\Http\Controllers\HomeController::class, 'GalleryFront'] )->name('gallery');
// //  Route function show
// Route::get('/SingleGallary/show/{id}', [App\Http\Controllers\GalleryController::class, 'show'])->name('gallary.show');



//  Route::get('/SingleTeam/show/{id}', [App\Http\Controllers\TeamController::class, 'show'])->name('team.show');

// Route::get('/Team',[App\Http\Controllers\HomeController::class, 'TeamFront'] )->name('team');
// Route::get('/clients',[App\Http\Controllers\HomeController::class, 'clientsFront'] )->name('client');





// Users Routes

Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});

// Manager Routes

Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/dashboard', [HomeController::class, 'managerDashboard'])->name('manager.dashboard');

    // Dashboard SliderPosition
    Route::get('dashboard/SliderPosition', [App\Http\Controllers\SliderPositionController::class, 'index'])->name('SliderPosition.index');
    Route::get('dashboard/SliderPosition/create', [App\Http\Controllers\SliderPositionController::class, 'create'])->name('SliderPosition.create');
    Route::post('dashboard/SliderPosition/store', [App\Http\Controllers\SliderPositionController::class, 'store'])->name('SliderPosition.store');
    Route::get('dashboard/SliderPosition/edit/{id}', [App\Http\Controllers\SliderPositionController::class, 'edit'])->name('SliderPosition.edit');
    Route::put('dashboard/SliderPosition/update/{id}', [App\Http\Controllers\SliderPositionController::class, 'update'])->name('SliderPosition.update');
    Route::delete('dashboard/SliderPosition/destroy/{id}', [App\Http\Controllers\SliderPositionController::class, 'destroy'])->name('SliderPosition.destroy');



// Dashboard Sliders
    Route::get('dashboard/Slider', [App\Http\Controllers\SliderController::class, 'index'])->name('Slider.index');
    Route::get('dashboard/Slider/create', [App\Http\Controllers\SliderController::class, 'create'])->name('Slider.create');
    Route::post('dashboard/Slider/store', [App\Http\Controllers\SliderController::class, 'store'])->name('Slider.store');
    Route::get('dashboard/Slider/edit/{id}', [App\Http\Controllers\SliderController::class, 'edit'])->name('Slider.edit');
    Route::put('dashboard/Slider/update/{id}', [App\Http\Controllers\SliderController::class, 'update'])->name('Slider.update');
    Route::delete('dashboard/Slider/destroy/{id}', [App\Http\Controllers\SliderController::class, 'destroy'])->name('Slider.destroy');
    // Dashboard Services Category
    Route::get('dashboard/ServiceCategory', [App\Http\Controllers\CategoryServiceController::class, 'index'])->name('ServiceCategory.index');
    Route::get('dashboard/ServiceCategory/create', [App\Http\Controllers\CategoryServiceController::class, 'create'])->name('ServiceCategory.create');
    Route::post('dashboard/ServiceCategory/store', [App\Http\Controllers\CategoryServiceController::class, 'store'])->name('ServiceCategory.store');
    Route::get('dashboard/ServiceCategory/edit/{id}', [App\Http\Controllers\CategoryServiceController::class, 'edit'])->name('ServiceCategory.edit');
    Route::put('dashboard/ServiceCategory/update/{id}', [App\Http\Controllers\CategoryServiceController::class, 'update'])->name('ServiceCategory.update');
    Route::delete('dashboard/ServiceCategory/destroy/{id}', [App\Http\Controllers\CategoryServiceController::class, 'destroy'])->name('ServiceCategory.destroy');

    // Dashboard Services
    Route::get('dashboard/Service', [App\Http\Controllers\ServiceController::class, 'index'])->name('Service.index');
    Route::get('dashboard/Service/create', [App\Http\Controllers\ServiceController::class, 'create'])->name('Service.create');
    Route::post('dashboard/Service/store', [App\Http\Controllers\ServiceController::class, 'store'])->name('Service.store');
    Route::get('dashboard/Service/edit/{id}', [App\Http\Controllers\ServiceController::class, 'edit'])->name('Service.edit');
    Route::put('dashboard/Service/update/{id}', [App\Http\Controllers\ServiceController::class, 'update'])->name('Service.update');
    Route::delete('dashboard/Service/destroy/{id}', [App\Http\Controllers\ServiceController::class, 'destroy'])->name('Service.destroy');

    // Dashboard Mission
    Route::get('dashboard/Mission', [App\Http\Controllers\MissionController::class, 'index'])->name('Mission.index');
    Route::get('dashboard/Mission/create', [App\Http\Controllers\MissionController::class, 'create'])->name('Mission.create');
    Route::post('dashboard/Mission/store', [App\Http\Controllers\MissionController::class, 'store'])->name('Mission.store');
    Route::get('dashboard/Mission/edit/{id}', [App\Http\Controllers\MissionController::class, 'edit'])->name('Mission.edit');
    Route::put('dashboard/Mission/update/{id}', [App\Http\Controllers\MissionController::class, 'update'])->name('Mission.update');
    Route::delete('dashboard/Mission/destroy/{id}', [App\Http\Controllers\MissionController::class, 'destroy'])->name('Mission.destroy');

    // Dashboard Team
    Route::get('dashboard/Team', [App\Http\Controllers\TeamController::class, 'index'])->name('Team.index');
    Route::get('dashboard/Team/create', [App\Http\Controllers\TeamController::class, 'create'])->name('Team.create');
    Route::post('dashboard/Team/store', [App\Http\Controllers\TeamController::class, 'store'])->name('Team.store');
    Route::get('dashboard/Team/edit/{id}', [App\Http\Controllers\TeamController::class, 'edit'])->name('Team.edit');
    Route::put('dashboard/Team/update/{id}', [App\Http\Controllers\TeamController::class, 'update'])->name('Team.update');
    Route::delete('dashboard/Team/destroy/{id}', [App\Http\Controllers\TeamController::class, 'destroy'])->name('Team.destroy');


    // Dashboard Client
    Route::get('dashboard/Client', [App\Http\Controllers\ClientController::class, 'index'])->name('Client.index');
    Route::get('dashboard/Client/create', [App\Http\Controllers\ClientController::class, 'create'])->name('Client.create');
    Route::post('dashboard/Client/store', [App\Http\Controllers\ClientController::class, 'store'])->name('Client.store');
    Route::get('dashboard/Client/edit/{id}', [App\Http\Controllers\ClientController::class, 'edit'])->name('Client.edit');
    Route::put('dashboard/Client/update/{id}', [App\Http\Controllers\ClientController::class, 'update'])->name('Client.update');
    Route::delete('dashboard/Client/destroy/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('Client.destroy');
    // Dashboard Content
    Route::get('dashboard/Contact', [App\Http\Controllers\ContactController::class, 'index'])->name('Contact.index');
    Route::get('dashboard/Contact/create', [App\Http\Controllers\ContactController::class, 'create'])->name('Contact.create');
    Route::post('dashboard/Contact/store', [App\Http\Controllers\ContactController::class, 'store'])->name('Contact.store');
    Route::get('dashboard/Contact/edit/{id}', [App\Http\Controllers\ContactController::class, 'edit'])->name('Contact.edit');
    Route::put('dashboard/Contact/update/{id}', [App\Http\Controllers\ContactController::class, 'update'])->name('Contact.update');
    Route::delete('dashboard/Contact/destroy/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('Contact.destroy');
    // Dashboard Blog
    Route::get('dashboard/Blog', [App\Http\Controllers\BlogController::class, 'index'])->name('Blog.index');
    Route::get('dashboard/Blog/create', [App\Http\Controllers\BlogController::class, 'create'])->name('Blog.create');
    Route::post('dashboard/Blog/store', [App\Http\Controllers\BlogController::class, 'store'])->name('Blog.store');
    Route::get('dashboard/Blog/edit/{id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('Blog.edit');
    Route::put('dashboard/Blog/update/{id}', [App\Http\Controllers\BlogController::class, 'update'])->name('Blog.update');
    Route::delete('dashboard/Blog/destroy/{id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('Blog.destroy');

    // Dashboard Gallary Category
    Route::get('dashboard/GallaryCategory', [App\Http\Controllers\CategoryGalleryController::class, 'index'])->name('GallaryCategory.index');
    Route::get('dashboard/GallaryCategory/create', [App\Http\Controllers\CategoryGalleryController::class, 'create'])->name('GallaryCategory.create');
    Route::post('dashboard/GallaryCategory/store', [App\Http\Controllers\CategoryGalleryController::class, 'store'])->name('GallaryCategory.store');
    Route::get('dashboard/GallaryCategory/edit/{id}', [App\Http\Controllers\CategoryGalleryController::class, 'edit'])->name('GallaryCategory.edit');
    Route::put('dashboard/GallaryCategory/update/{id}', [App\Http\Controllers\CategoryGalleryController::class, 'update'])->name('GallaryCategory.update');
    Route::delete('dashboard/GallaryCategory/destroy/{id}', [App\Http\Controllers\CategoryGalleryController::class, 'destroy'])->name('GallaryCategory.destroy');

    // Dashboard Gallary Category
    Route::get('dashboard/BlogCategory', [App\Http\Controllers\CategoryBlogController::class, 'index'])->name('BlogCategory.index');
    Route::get('dashboard/BlogCategory/create', [App\Http\Controllers\CategoryBlogController::class, 'create'])->name('BlogCategory.create');
    Route::post('dashboard/BlogCategory/store', [App\Http\Controllers\CategoryBlogController::class, 'store'])->name('BlogCategory.store');
    Route::get('dashboard/BlogCategory/edit/{id}', [App\Http\Controllers\CategoryBlogController::class, 'edit'])->name('BlogCategory.edit');
    Route::put('dashboard/BlogCategory/update/{id}', [App\Http\Controllers\CategoryBlogController::class, 'update'])->name('BlogCategory.update');
    Route::delete('dashboard/BlogCategory/destroy/{id}', [App\Http\Controllers\CategoryBlogController::class, 'destroy'])->name('BlogCategory.destroy');
    // Dashboard Gallary
    Route::get('dashboard/Gallary', [App\Http\Controllers\GalleryController::class, 'index'])->name('Gallary.index');
    Route::get('dashboard/Gallary/create', [App\Http\Controllers\GalleryController::class, 'create'])->name('Gallary.create');
    Route::post('dashboard/Gallary/store', [App\Http\Controllers\GalleryController::class, 'store'])->name('Gallary.store');
    Route::get('dashboard/Gallary/edit/{id}', [App\Http\Controllers\GalleryController::class, 'edit'])->name('Gallary.edit');
    Route::put('dashboard/Gallary/update/{id}', [App\Http\Controllers\GalleryController::class, 'update'])->name('Gallary.update');
    Route::delete('dashboard/Gallary/destroy/{id}', [App\Http\Controllers\GalleryController::class, 'destroy'])->name('Gallary.destroy');

    // Dashboard About
    Route::get('dashboard/About', [App\Http\Controllers\AboutController::class, 'index'])->name('About.index');
    Route::get('dashboard/About/create', [App\Http\Controllers\AboutController::class, 'create'])->name('About.create');
    Route::post('dashboard/About/store', [App\Http\Controllers\AboutController::class, 'store'])->name('About.store');
    Route::get('dashboard/About/edit/{id}', [App\Http\Controllers\AboutController::class, 'edit'])->name('About.edit');
    Route::put('dashboard/About/update/{id}', [App\Http\Controllers\AboutController::class, 'update'])->name('About.update');
    Route::delete('dashboard/About/destroy/{id}', [App\Http\Controllers\AboutController::class, 'destroy'])->name('About.destroy');

    // Dashboard Approach
    Route::get('dashboard/Approach', [App\Http\Controllers\ApproachController::class, 'index'])->name('Approach.index');
    Route::get('dashboard/Approach/create', [App\Http\Controllers\ApproachController::class, 'create'])->name('Approach.create');
    Route::post('dashboard/Approach/store', [App\Http\Controllers\ApproachController::class, 'store'])->name('Approach.store');
    Route::get('dashboard/Approach/edit/{id}', [App\Http\Controllers\ApproachController::class, 'edit'])->name('Approach.edit');
    Route::put('dashboard/Approach/update/{id}', [App\Http\Controllers\ApproachController::class, 'update'])->name('Approach.update');
    Route::delete('dashboard/Approach/destroy/{id}', [App\Http\Controllers\ApproachController::class, 'destroy'])->name('Approach.destroy');

    Route::Resource('new_slider', App\Http\Controllers\NewSliderController::class);


});

// Super Admin Routes

Route::middleware(['auth', 'user-access:super-admin'])->group(function () {

    Route::get('/super-admin/dashboard', [HomeController::class, 'superAdminDashboard'])->name('super.admin.dashboard');
});


