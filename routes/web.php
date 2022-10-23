<?php

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
 use App\Http\Controllers\UserController ; 
 use App\Http\Controllers\postController ; 

Route::get('/', function () {
    return view('welcome');
}); //welcome page

Route::get('/master', function () {
    return view('layout.master');
});
//Route::get('/posts', function () {
  //  return view('pages.posts');
  //});
Route::get('/users', function () {
    return view('pages.users');
});
//Route::get('/details', function () {
  //  return view('pages.details');
//})->name('details');
//Route::get('/posts' ,[usercontroller::class,'getpost'])->name('post');

Route::get('/posts-user' ,[Usercontroller::class,'index'])->name('posts-user');
Route::get('/addposts', function () {
    return view('pages.addposts');
})->name('addpost');
//Route::get('/details/{id}' ,[Usercontroller::class,'view'])->name('posts-user');
//Route::get('/details/{id}',[Usercontroller::class,'view'] )->name('user.post');
//Route::get('/test' ,[postcontroller::class,'index'])->name('test');
//Route::get('/details/{id}',[postcontroller::class,'view'] )->name('user.post');
Route::get('/post' ,[postController::class,'index'])->name('post');
Route::get('/details/{id}' ,[postController::class,'show'])->name('details');
Route::post('/store',[postController::class,'store'])->name('store');
Route::get('/dd', function () {
    return view('pages.detailss');
});


//
//Route::get('/register', function () {
  //  return view('pages.register');
//});
Route::post('/register',[userController::class,'register'])->name('register');
Route::post('/search',[postController::class,'search'])->name('search');

