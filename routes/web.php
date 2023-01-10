<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\SprintController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\ProjetoSprintController;
use App\Http\Middleware\Autenticador;
use App\Http\Controllers\UserController;


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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'store'])->name('sigin');
Route::get('/registrar', [UserController::class, 'create'])->name('user.create');
Route::post('/registrar', [UserController::class, 'store'])->name('user.store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');




Route::get('/home', function () {
    return view('home');
})->name('home')->middleware(Autenticador::class);

Route::resource('/projetos', ProjetoController::class)->middleware(Autenticador::class);;
Route::resource('/sprints', SprintController::class)->middleware(Autenticador::class);;




Route::resource('projetos.sprints', ProjetoSprintController::class)

->middleware(Autenticador::class);;

Route::resource('/tarefas', TarefaController::class)
->middleware(Autenticador::class);


// Route::resource('/projetos', SeriesController::class)
//  ;
