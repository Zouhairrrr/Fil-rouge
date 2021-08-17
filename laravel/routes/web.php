<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\JobSeekerController;
use App\Http\Controllers\JobProvider\JobProviderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;



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
// Route group  for JobSeeker 
// Route::get('/index',[HomeController::class,'index'])->name('index');

Route::prefix('seeker')->name('seeker.')->group(function(){

    Route::middleware(['guest'])->group(function(){

        Route::view('/login','dashboard.seeker.login')->name('login');
        Route::view('/register','/dashboard.seeker.register')->name('register');

        // post metho for creating new user
        Route::post('/create',[JobSeekerController::class,'create'])->name('create');
        // login process of user 
        Route::post('/check',[JobSeekerController::class,'check'])->name('check');
    });



    Route::middleware(['auth'])->group(function(){


        Route::view('/home','/dashboard.seeker.home')->name('home');
        Route::post('/logout',[JobSeekerController::class,'logout'])->name('logout');
        Route::post('/createPost',[PostController::class,'createPost'])->name('createPost');
        // Route::post('/showpost',[PostController::class,'showPost'])->name('showpost');
        // Route::post('/showpost',[HomeController::class,'showPost'])->name('showpost');
    });


});




// Route group  for admin 

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin'])->group(function(){

        Route::view('/login','/dashboard.admin.login')->name('login');
        Route::view('/home','/home')->name('home');
        Route::post('/check',[AdminController::class,'check'])->name('check');


    });
    Route::middleware(['auth:admin'])->group(function(){
        Route::view('/home','/dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');

    });

});


Route::prefix('provider')->name('provider.')->group(function(){

        Route::middleware(['guest:provider'])->group(function(){

            Route::view('/login','dashboard.provider.login')->name('login');
            Route::view('/register','dashboard.provider.register')->name('register');
            Route::view('/home','/home')->name('home');

            // post metho for creating new user
            Route::post('/create',[JobProviderController::class,'create'])->name('create');
            // login process of user 
            Route::post('/check',[JobProviderController::class,'check'])->name('check');
        });
        Route::middleware(['auth:provider'])->group(function(){
            Route::view('/home','/dashboard.provider.home')->name('home');
            Route::post('/logout',[JobProviderController::class,'logout'])->name('logout');
        });
});
