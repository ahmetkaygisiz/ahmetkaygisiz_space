<?php

use Illuminate\Support\Facades\Route;
use App\Post;
use App\Categories;
use App\Mail\ContactMail;

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

Auth::routes();

Route::get('/', function () {
    $posts = Post::orderBy("created_at","desc")->paginate(5);
    return view('index',compact('posts'));
})->name('index');

Route::get('/category/{id}', 'CategoryController@show')->name('category.show');
Route::get('/post/{post}', 'HomeController@showPost')->name('home.post');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/admin','UserController@index')->name('user');
Route::group(['prefix' => 'admin/post','middleware' => ['auth']], function (){
    Route::get('/', function (){
        $posts = Post::orderBy("created_at","desc")->paginate(10);

        return view('admin.home',compact('posts'));
    })->name('post.index');
});

Route::resource('/admin/post','PostController');