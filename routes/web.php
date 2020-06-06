<?php

use Illuminate\Support\Facades\Route;
use App\Post;
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
    $postList = Post::all();

    return view('index',compact('postList'));
})->name('index');

Auth::routes();
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/admin','UserController@index')->name('user');

// Admin home ve post home daha sonra ayrılacak!!!
Route::group(['prefix' => 'admin/post','middleware' => ['auth']], function (){
    Route::get('/', function (){
        return view('admin.home');
    })->name('post.index');

    Route::get('create','PostController@create');
    Route::get('all','PostController@index');
    Route::get('edit','PostController@edit');
});
