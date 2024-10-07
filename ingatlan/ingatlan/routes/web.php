<?php

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
    $username = 'John';
    return view('welcome', [
    'name' => $username
    ]);
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/pass-array', function () {
    $tasks = [
    'Go to the store',
    'Go to the market',
    'Go to the work',
    'Task #4'
    ];
    // 1. fajta
    // return view('tasklist', ['tasks' => $tasks]);
    // 2. fajta
    // return view('tasklist')->withTasks($tasks);
    // 3. fajta
    $foobar = 'foobar';
    // return view('tasklist')->withTasks($tasks)->withFoo($foobar);
    // 4. fajta
    return view('tasklist')->with([
        'foo' => $foobar,
        'tasks' => $tasks
        ]);
});
