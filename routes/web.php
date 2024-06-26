<?php

use Src\Route;

Route::add('GET', '/mainPage', [Controller\Site::class, 'homepage'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login'])->middleware('notAuth');
Route::add('GET', '/logout', [Controller\Site::class, 'logout'])->middleware('auth');
Route::add('GET', '/home', [Controller\Site::class, 'index'])->middleware('notAuth');
Route::add(['GET', 'POST'], '/addEmployee', [Controller\Admin::class, 'addEmployee'])->middleware('auth', 'roleAdmin');
Route::add('GET', '/doctors', [Controller\Employee::class, 'doctors'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/addDoctor', [Controller\Employee::class, 'addDoctor'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/addSpecialtyPosition', [Controller\Employee::class, 'addSpecialtyPosition'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/patients', [Controller\Employee::class, 'patients'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/addPatient', [Controller\Employee::class, 'addPatient'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/editPatient', [Controller\Employee::class, 'editPatient'])->middleware('auth','roleEmployee');
Route::add('GET', '/appointments', [Controller\Employee::class, 'appointments'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/addAppointment', [Controller\Employee::class, 'addAppointment'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/cancelAppointment/{appointmentId}', [Controller\Employee::class, 'cancelAppointment'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/allPatients', [Controller\Employee::class, 'allPatients'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/searchPatients', [Controller\Employee::class, 'searchPatients'])->middleware('auth','roleEmployee');
Route::add(['GET', 'POST'], '/addNote', [Controller\Employee::class, 'add_note'])->middleware('auth','roleEmployee');