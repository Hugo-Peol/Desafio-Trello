<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\SprintController;
use App\Http\Controllers\TarefaController;

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
    return view('login.index');
});


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::resource('/projetos', ProjetoController::class)
    ->except(['show']);

Route::resource('/sprints', SprintController::class)
->except(['show']);

Route::resource('/tarefas', TarefaController::class)
->except(['show']);



// Route::resource('/projetos', SeriesController::class)
//  ->except(['show']);