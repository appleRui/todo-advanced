<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\DoneController;

Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo/create', [TodoController::class, 'create'])->name('todo.create');
Route::post('/todo/update', [TodoController::class, 'update'])->name('todo.update');
Route::post('/todo/delete', [TodoController::class, 'delete'])->name('todo.delete');
Route::post('/todo/logicalDelete', [TodoController::class, 'logicalDelete'])->name('todo.logicalDelete');

Route::get('/todo/done',[DoneController::class,'index'])->name('todo.done');
Route::post('/todo/physicalDelete',[DoneController::class,'physicalDelete'])->name('todo.physicalDelete');
