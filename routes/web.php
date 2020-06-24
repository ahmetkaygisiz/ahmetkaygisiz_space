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
Route::get('/post/{id}', 'HomeController@showPost')->name('home.post');
Route::get('/about', 'HomeController@about')->name('about');


// Admin home ve post home daha sonra ayrılacak!!!
Route::get('/admin','UserController@index')->name('user');
Route::resource('/admin/post','PostController');

Route::group(['prefix' => 'admin/post','middleware' => ['auth']], function (){
    Route::get('/', function (){
        $posts = Post::all();

        return view('admin.home',compact('posts'));
    })->name('post.index');
});

// Route::get('send-mail', function () {
//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];
//     \Mail::to('ahmetkaygisiz17@gmail.com')->send(new \App\Mail\ContactMail($details));

//     dd("Email is Sent.");
// });
