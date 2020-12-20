<?php

use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserProfileController;
use App\Models\User;
use App\Models\Image;


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

Route::get('/',function (){
    return view('welcome');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('admin');
Route::get('/user',[UserController::class,'index'])->name('user')->middleware('user');
//
//Route::get('/posts', function (){
//    $post=\App\Models\Post::create(['title'=>'first post','content'=>'this was the first conetnt','user_id'=>'1']);
//
//    $user=User::find(1);
//  echo $img=Image::find(1);
//
//    $user->images()->save($img);
//});

Route::get('/dashboard',[UserDashboardController::class, 'index'])->middleware('auth');

Route::group(['middleware'=>['web','auth']], function() {
    Route::resource('/userprofile', UserProfileController::class);
});
Route::post('/sendmessage', [\App\Http\Controllers\MessageController::class,'store']);
