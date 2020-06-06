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
    $posts = Post::paginate(2);

    return view('index',compact('posts'));
})->name('index');

Auth::routes();
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/admin','UserController@index')->name('user');

// Admin home ve post home daha sonra ayrılacak!!!

Route::resource('/admin/post','PostController');

Route::group(['prefix' => 'admin/post','middleware' => ['auth']], function (){
    Route::get('/', function (){
        $posts = Post::all();

        return view('admin.home',compact('posts'));
    })->name('post.index');

    Route::get('all','PostController@index')->name('post.all');;
    Route::get('edit','PostController@edit')->name('post.edit');
});
