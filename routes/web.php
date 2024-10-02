<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

Route::get('/',[HomeController::class, '_invoke']);
Route::get('/posts',[PostController::class, 'index']);
Route::get('posts/create',[PostController::class, 'create']);

//esto es para cuando vamos recbir un contendo varible 
Route::get('/posts/{post}',[PostController::class,'show']);


//esto es para cuando vamos recbir un o dos contendo varible 
/*Route::get('/posts/{post}/{category?}',function($post, $category= null){
if($category){
    return"Aqui se mostrara el post {$post} de la categoria {$category}";
}
    return"Aqui se mostrara el post {$post }";
});*/

/* Route::get('/posts/{post}/{category}',function($post, $category){
    return"Aqui se mostrara el post {$post} de la categoria {$category}";
    });
*/