<?php



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\postsController;



Route::get('/home',[postsController::class,'getAllPosts'])
->name('posts.show');

Route::get('/home/update',[postsController::class,'getAllPosts'])
->name('posts.update');

Route::post('/posts',[postsController::class,'addPost'])
->name('posts.store');

Route::get('/posts/{id}', [postsController::class,'getPostByID'])
->name('posts.get')
->where('id', '[0-9]+');

Route::get('/posts/delete/{id}', [postsController::class,'deletePost'])
->name('posts.delete')
->where('id', '[0-9]+');


Route::get('/create/post',[postsController::class ,'createPost'])
->name('posts.create');


Route::get('/posts', [postsController::class,'details'])
->name('posts.details');



Route::get('/posts/edit/{id}', [postsController::class,'editPost'])
->name('posts.edit')
->where('id', '[0-9]+');