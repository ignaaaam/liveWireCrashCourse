<?php

use App\Livewire\Tasks\TaskShow;
use App\Livewire\Tasks\TaskCreate;
use App\Livewire\Tasks\TaskIndex;
use App\Livewire\Tasks\TaskUpdate;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', TaskIndex::class)->name('tasks.index');
Route::get('/tasks/create', TaskCreate::class)->name('tasks.create');
Route::get('/tasks/update', TaskUpdate::class)->name('tasks.update');
Route::get('/tasks/{task}', TaskShow::class)->name('tasks.show');