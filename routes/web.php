<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controller\Retailer\RetailerController;
use App\Http\Controllers\User\UserController;
use App\Models\Admin;
use App\Models\User;
use App\Models\Seller;
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

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');/


// user route 
Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        
    Route::view('/login','dashboard.user.login')->name('login');
    Route::post('/create',[UserController::class,'create'])->name('create');
    Route::post('/check',[UserController::class,'check'])->name('check');
    // user 
    Route::post('/create',[UserController::class,'create'])->name('create');
      // user 
    Route::view('/register','dashboard.user.register')->name('register');
    
    
    });
    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
        
        Route::view('/home','dashboard.user.home')->name('home');
    Route::post('/logout',[UserController::class,'logout'])->name('logout');
    Route::view('/profile','dashboard.user.profile')->name('profile');
    
    
    });
    
    });
    
    // admin login 
Route::prefix('admin')->name('admin.')->group(function(){
    
    Route::middleware(['guest:admin','PreventBackHistory' ])->group(function(){
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/check',[AdminController::class,'check'])->name('check'); 

});

Route::middleware(['auth:admin' ,'PreventBackHistory'])->group(function(){
Route::view('/home','dashboard.admin.home')->name('home');
Route::post('/logut',[AdminController::class,'logout'])->name('logout');
Route::view('/profile','dashboard.admin.profile')->name('profile');
Route::get('/pateintshowdata',[AdminController::class,'show'])->name('showpateintdata');
// category route 
Route::view('/category','dashboard.admin.categories')->name('category');


// retailer 
// end 

});
});


Route::prefix('retailer')->name('retailer.')->group(function(){
    Route::middleware(['guest:retailer' ,'PreventBackHistory'])->group(function(){
    Route::view('/login','dashboard.retailer.login')->name('login');
    Route::post('/create',[RetailerController::class,'retailer'])->name('create');
    Route::post('/check',[RetailerController::class,'retailer'])->name('check');
Route::view('/register','dashboard.retailer.register')->name('register');
    

    });
    Route::middleware(['auth:retailer' ,'PreventBackHistory'])->group(function(){
    Route::view('/home','dashboard.retailer.home')->name('home');
    Route::post('logout',[RetailerController::class,'logout'])->name('logout');
Route::view('/profile','dashboard.retailer.profile')->name('profile');

    });
    });