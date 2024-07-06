<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\AdminRoomsController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\EventsController;
use App\Http\Controllers\Backend\NewsController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Backend\ManagementController;
use App\Http\Controllers\Frontend\RoomsController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\MediaController;
use App\Http\Controllers\Backend\ServicesController;
use App\Http\Controllers\Frontend\EnquiryController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Frontend\FoodController;
use App\Http\Controllers\Frontend\MembershipController;
use App\Http\Controllers\Frontend\DownloadController;
use App\Http\Controllers\Frontend\SportsController;

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

Route::get('/home', function () {
    return view('frontend.index');
})->name('home');
// authentication routes 
Route::group(['prefix' => 'admin', 'middleware' => ['admin:admin']], function () {
    Route::get('/login', [AdminController::class, 'LoginForm']);
    Route::post('/login', [AdminController::class, 'store'])->name('admin.login');
});


// admin all Routes 
Route::get('/Logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::group(['prefix' => 'admin', 'middleware' => ['auth:sanctum,admin', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');
    Route::get('/Profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/Profile/edit', [AdminProfileController::class, 'EditAdminProfile'])->name('admin.profile.edit');
    Route::post('/update/change/password', [AdminProfileController::class, 'AdminUpdateChangePassword'])->name('update.change.password');
    // category routes
    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/category/add', [CategoryController::class, 'store'])->name('store.category');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/category/update/{id}', [CategoryController::class, 'update']);
    Route::get('/softdelete/category/{id}', [CategoryController::class, 'softDelete']);
    Route::get('/category/restore/{id}', [CategoryController::class, 'restore']);
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);
    // downloads
    Route::get('/downloads', [DownloadController::class, 'adminView'])->name('downloads');
    Route::post('/downloads/add', [DownloadController::class, 'store'])->name('store.downloads');

    // category routes
    Route::get('/room', [AdminRoomsController::class, 'index'])->name('room');
    Route::get('/room/add/{id}', [AdminRoomsController::class, 'create']);
    Route::post('/room/save', [AdminRoomsController::class, 'store'])->name('store.room');
    Route::get('/room/edit/{id}', [AdminRoomsController::class, 'edit'])->name('edit.room');
    Route::get('/room/delete/{id}', [AdminRoomsController::class, 'destroy']);
    Route::get('/room/edit_room_images/{id}', [AdminRoomsController::class, 'editRoomImages'])->name('edit.room.images');
    Route::post('/room/update/{id}', [AdminRoomsController::class, 'update']);
    Route::get('/room/multiimg/delete/{id}', [AdminRoomsController::class, 'MultiImageDelete'])->name('room.multiimg.delete');
    Route::post('/room/image/update', [AdminRoomsController::class, 'MultiImageUpdate'])->name('update-room-image');
    Route::post('/room/image/add/', [AdminRoomsController::class, 'MultiImageAdd'])->name('add-room-image');

    // Services routes
    Route::get('/services', [ServicesController::class, 'index'])->name('services.all');
    Route::post('/services/add', [ServicesController::class, 'store'])->name('store.services');
    Route::get('/services/edit/{id}', [ServicesController::class, 'edit'])->name('edit.services');
    Route::post('/service/update/{id}', [ServicesController::class, 'update']);
    Route::get('/softdelete/service/{id}', [ServicesController::class, 'softDelete']);
    Route::get('/service/restore/{id}', [ServicesController::class, 'restore']);
    Route::get('/service/delete/{id}', [ServicesController::class, 'delete']);


    // Media routes
    Route::get('/media', [MediaController::class, 'index'])->name('media.all');
    Route::post('/media/add', [MediaController::class, 'store'])->name('store.media');
    Route::post('/media/add_multiple_images', [MediaController::class, 'storeMultiple'])->name('store.multiplemedia');
    Route::get('/site_image/edit/{id}', [MediaController::class, 'edit'])->name('edit.media');
    Route::post('/site_image/update/{id}', [MediaController::class, 'update']);
    Route::get('/softdelete/site_image/{id}', [MediaController::class, 'softDelete']);
    Route::get('/media/restore/{id}', [MediaController::class, 'restore']);
    Route::get('/media/delete/{id}', [MediaController::class, 'delete']);

    // Media routes
    Route::get('/events', [EventsController::class, 'adminEvents'])->name('events.all');
    Route::post('/events/add', [EventsController::class, 'store'])->name('store.event');
    Route::get('/events/edit/{id}', [EventsController::class, 'edit'])->name('edit.event');
    Route::post('/events/update/{id}', [EventsController::class, 'update']);
    Route::get('/softdelete/events/{id}', [EventsController::class, 'softDelete']);
    Route::get('/events/restore/{id}', [EventsController::class, 'restore']);
    Route::get('/events/delete/{id}', [EventsController::class, 'destroy']);
    // News routes
    Route::get('/news', [NewsController::class, 'adminNews'])->name('news.all');
    Route::post('/news/add', [NewsController::class, 'store'])->name('store.news');
    Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('edit.news');
    Route::post('/news/update/{id}', [NewsController::class, 'update']);
    Route::get('/softdelete/news/{id}', [NewsController::class, 'softDelete']);
    Route::get('/news/restore/{id}', [NewsController::class, 'restore']);
    Route::get('/news/delete/{id}', [NewsController::class, 'destroy']);

    // Management routes

    // Route::get('/management', [ManagementController::class, 'allDirectors'])->name('management.all');
    // Route::get('/team', [ManagementController::class, 'allDirectors'])->name('management.all');
    Route::post('/management/add', [ManagementController::class, 'store'])->name('store.director');
    Route::get('/management/edit/{id}', [ManagementController::class, 'edit'])->name('edit.director');
    Route::post('/management/update/{id}', [ManagementController::class, 'update']);
    Route::get('/softdelete/Management/{id}', [ManagementController::class, 'softDelete']);
    Route::get('/management/restore/{id}', [ManagementController::class, 'restore']);
    Route::get('/management/delete/{id}', [ManagementController::class, 'destroy']);

    // Membership routes
    Route::get('/membership', [MembershipController::class, 'index'])->name('membership.all');
    Route::post('/membership/add', [MembershipController::class, 'store'])->name('store.membership');
    Route::get('/membership/edit/{id}', [MembershipController::class, 'edit'])->name('edit.membership');
    Route::post('/membership/update/{id}', [MembershipController::class, 'update']);
    Route::get('/softdelete/membership/{id}', [MembershipController::class, 'softDelete']);
    Route::get('/membership/restore/{id}', [MembershipController::class, 'restore']);
    Route::get('/membership/delete/{id}', [MembershipController::class, 'delete']);
});

// front end routes
Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/events', [EventsController::class, 'index']);
Route::get('/Food_and_Beverage', [FoodController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show']);
Route::get('/careers', function () {
    return view('frontend.pages.careers.index');
});
Route::get('/sports', [SportsController::class, 'index']);
//  team
Route::get('/team/board', [ManagementController::class, 'board'])->name('team.board');
Route::get('/team/trustee', [ManagementController::class, 'trustee'])->name('team.trustee');

Route::get('/career', function () {
    return view('frontend.pages.news_events.jobs');
});
Route::get('/accommodation', [RoomsController::class, 'index']);
Route::get('accommodation/room-details/{id}', [RoomsController::class, 'show']);

Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/management', [ManagementController::class, 'index']);
Route::get('/management/all', [ManagementController::class, 'getAll']);
// Booking Routes
Route::group(['prefix' => 'booking'], function () {
    // Route::get('/booking/new', [BookingController::class, 'index'])->name('restart.booking');
    // Route::get('/booking/new', [BookingController::class, 'index']);
    // Route::post('/booking/select_room', [BookingController::class, 'showRooms'])->name('available.rooms');
    // Route::post('/booking/selected', [BookingController::class, 'postRoom'])->name('post.room');
    Route::post('/booking/reserve', [BookingController::class, 'postBooking'])->name('post.booking');
});
// category routes
Route::get('/contacts', [EnquiryController::class, 'index']);
Route::get('/contact-us/sucess', [EnquiryController::class, 'success'])->name('enquiry.success');
Route::post('/contact/submit', [EnquiryController::class, 'store'])->name('enquiry.save');
// membership
Route::get('/membership', [MembershipController::class, 'frontEndMembership']);
Route::get('/membership/{id}', [MembershipController::class, 'show']);
// downloads
Route::get('/downloads', [DownloadController::class, 'index']);
Route::get('/downloads/{id}', [DownloadController::class, 'show']);
