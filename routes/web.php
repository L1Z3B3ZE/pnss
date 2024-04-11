<?php

use Src\Route;

Route::add('GET', '/mainPage', [Controller\Site::class, 'homepage'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout'])->middleware('auth');;
Route::add('GET', '/home', [Controller\Site::class, 'index']);
Route::add(['GET', 'POST'], '/addEmployee', [Controller\Admin::class, 'addEmployee'])->middleware('auth', 'roleAdmin');
Route::add('GET', '/doctors', [Controller\Employee::class, 'doctors'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/addDoctor', [Controller\Employee::class, 'addDoctor'])->middleware('auth','roleEmployee');
Route::add('GET', '/patients', [Controller\Employee::class, 'patients'])->middleware('auth','roleEmployee');
