<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
//use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\PagesController@home');
//Route::get('blog/{id}', 'App\Http\Controllers\PostsController@show');//esto es por defecto id
Route::get('blog/{post}', 'App\Http\Controllers\PostsController@show')->name('posts.show');
Route::get('categorias/{category}', 'App\Http\Controllers\CategoriesController@show')->name('categories.showp');
Route::get('tags/{tag}', 'App\Http\Controllers\TagsController@show')->name('tags.showp');
    //function () {
    //$posts = App\Models\Post::all();//muestra todo creo ordenado por id
   // $posts = App\Models\Post::latest('published_at')->get();//muestra ordendo por la fecha published at de mayor a menor, actual anterior
    //return view('welcome', compact('posts'));
    //}


Route::get('posts', function () {
    return App\Models\Post::all(); //se pone la ruta porque en Models\Post existe el name space: namespace App\Models;
});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::get('admin', 'App\Http\Controllers\AdminController@index');//llama al dashboard


Route::group(['prefix' =>'admin', 
              'namespace'=>'\App\Http\Controllers\Admin', 
              'middleware' => 'auth'], 
        function(){
             Route::get('posts', 'PostsController@index')->name('admin.posts.index'); 
             Route::get('/', 'AdminController@index')->name('dashboard');
             Route::get('posts/create', 'PostsController@create')->name('admin.posts.create');
             Route::post('posts', 'PostsController@store')->name('admin.posts.store');
             Route::get('posts/{post}', 'PostsController@edit')->name('admin.posts.edit');
             Route::put('posts/{post}', 'PostsController@update')->name('admin.posts.update');
             Route::post('posts/{post:id}/photos', 'PhotoController@store')->name('admin.posts.photos.store');
             Route::delete('posts/{photo}', 'PhotoController@destroy')->name('admin.photos.destroy');

             Route::resource('categories', 'CategoriesController');

        }    
);



//Route::get('admin/posts', 'App\Http\Controllers\Admin\PostsController@index');




