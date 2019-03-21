<?php

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
    return view('professor.view');
})->name('professor.view');

Route::get('professor/create', function () {
    return view('professor.create');
})->name('professor.create');

Route::get('turma/det', function () {
    return view('professor.det');
})->name('turma.det');
