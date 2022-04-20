<?php

use App\Http\Controllers\articleController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;

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

Route::get('/articles/{id?}', function ($id = null) {
    $articles = Article::all();
    if($id != null){
        $article = Article::findOrFail($id);
        return view('articles',['articles'=> $articles , 'article'=>$article, 'id'=> $id]);
    }
    return view('articles', ['articles'=> $articles]);
});
Route::post('/articles', [articleController::class, 'store'])->name('article.store');
Route::put('/articles/update/{id?}', [articleController::class, 'update'])->name('article.update');
Route::delete('/articles/delete/{id?}', [articleController::class, 'destroy'])->name('article.destroy');



