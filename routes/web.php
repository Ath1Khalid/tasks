<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;
/*
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('tasks.index', ['tasks' => Task::all()]);
});

Route::get('/tasks/done', function () {
    $tasks = Task::where('states', 'done')->get();
    return view('tasks.done', compact('tasks'));
});

Route::get('/tasks/onprogress', function () {
    $tasks = Task::where('states', 'onprogress')->get();
    return view('tasks.onprogress', compact('tasks'));
});

Route::get('/tasks/todo', function () {
    $tasks = Task::where('states', 'todo')->get();
    return view('tasks.todo', compact('tasks'));
});