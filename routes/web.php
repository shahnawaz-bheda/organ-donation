<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Client\PageController as ClientPageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Client\ClientProfileController;
use App\Http\Controllers\Client\MyDonationController;
use App\Http\Controllers\ManageUserController;

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

// Default
// Route::get('/',function(){
//     return view('welcome');
// });

// Admin Side
Route::prefix('admin')->group(function() {
    //Route::get('/signin',[AdminPageController::class, 'signin']);
    
    
    

    Route::group(['middleware' => 'admin.guest'], function() {
        Route::view('/login', 'adminside.login')->name('admin.login');
        Route::post('/login', [AdminController::class, 'authenticate'])->name('admin.auth');
    });

    Route::group(['middleware' => 'admin.auth'], function() {
        Route::get('/', [AdminPageController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout',[AdminController::class, 'logout'])->name('admin.logout');
        // Route::get('/',[AdminPageController::class, 'index']);
        Route::get('/404',[AdminPageController::class,'errorpage']);
        Route::get('/blank',[AdminPageController::class, 'blank']);
        Route::get('/profile',[AdminPageController::class, 'profile']);
        Route::post('/profile',[ProfileController::class, 'update']);
        //Custom Page Routes
        Route::get('/users',[AdminPageController::class, 'users']);
        Route::get('/donations',[AdminPageController::class, 'donations']);
        Route::get('/updateuser/{id}',[ManageUserController::class, 'edit']);
        Route::post('/updateuser/{id}',[ManageUserController::class, 'update']);
        Route::get('/deleteuser/{id}',[ManageUserController::class, 'distroy']);
        Route::get('/updatedonation/{id}',[DonationController::class,'edit']);
        Route::put('/updatedonation/{id}',[DonationController::class,'update']);
        Route::get('/deletedonation/{id}',[DonationController::class,'destroy']);
        Route::get('/adddonation',[DonationController::class,'create']);
        Route::post('/adddonation',[DonationController::class,'store']);
    });

});

// Client Side
Route::get('/',[ClientPageController::class,'index']);
Route::get('/about',[ClientPageController::class,'about']);
Route::get('/contact',[ClientPageController::class,'contact']);
Route::get('/blank',[ClientPageController::class,'blank']);
//Route::get('/login',[ClientPageController::class,'login']);
//Route::get('/register',[ClientPageController::class,'register']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name
('home');
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name
('user.logout');

Route::group(['middleware' => 'auth'], function() { 
    Route::get('/profile',[ClientPageController::class,'profile']);
    Route::post('/profile',[ClientProfileController::class,'update']);
    Route::get('/donate',[ClientPageController::class,'donate']);
    Route::post('/donate',[MyDonationController::class,'store']);
    Route::get('/donations',[ClientPageController::class,'donations']);
    Route::get('/my-donations',[ClientPageController::class,'mydonations']);
    Route::get('/delete-donation/{id}',[MyDonationController::class,'destroy']);
    Route::get('/my-requests/',[ClientPageController::class,'myrequests']);
    Route::get('/request-donation/{id}',[MyDonationController::class,'request']);
});