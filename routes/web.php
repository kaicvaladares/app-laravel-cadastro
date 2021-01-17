<?php

use App\Http\Controllers\{
    PessoaController,
    PostController
};
use App\Models\Pessoa;
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

//ROTAS CONTROLLER POSTS
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

//ROTAS CONTROLER PESSOA
Route::get('/pessoa/create', [PessoaController::class, 'create'])->name('pessoa.create');
Route::put('/pessoa/{id}', [PessoaController::class, 'update'])->name('pessoa.update');
Route::get('/pessoa/edit/{id}', [PessoaController::class, 'edit'])->name('pessoa.edit');
Route::get('/pessoa', [PessoaController::class, 'index'])->name('pessoa.index');
Route::get('/pessoa/{id}', [PessoaController::class, 'show'])->name('pessoa.show');
Route::post('/pessoa', [PessoaController::class, 'store'])->name('pessoa.store');
Route::delete('/pessoa/{id}', [PessoaController::class, 'destroy'])->name('pessoa.destroy');

